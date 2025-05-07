export async function initializePushNotifications() {
    try {
        if (!('Notification' in window)) {
            console.log('This browser does not support notifications');
            return;
        }

        const permission = await Notification.requestPermission();
        if (permission !== 'granted') {
            console.log('Permission not granted for notifications');
            return;
        }

        const registration = await navigator.serviceWorker.register('/sw.js');
        const subscription = await registration.pushManager.subscribe({
            userVisibleOnly: true,
            applicationServerKey: urlBase64ToUint8Array('YOUR_VAPID_PUBLIC_KEY')
        });

        // ส่ง subscription ไปเก็บที่เซิร์ฟเวอร์
        await saveSubscription(subscription);

    } catch (error) {
        console.error('Error initializing push notifications:', error);
    }
}

function urlBase64ToUint8Array(base64String) {
    const padding = '='.repeat((4 - base64String.length % 4) % 4);
    const base64 = (base64String + padding)
        .replace(/\-/g, '+')
        .replace(/_/g, '/');

    const rawData = window.atob(base64);
    const outputArray = new Uint8Array(rawData.length);

    for (let i = 0; i < rawData.length; ++i) {
        outputArray[i] = rawData.charCodeAt(i);
    }
    return outputArray;
}

async function saveSubscription(subscription) {
    try {
        await fetch('/api/push-subscriptions', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify(subscription)
        });
    } catch (error) {
        console.error('Error saving subscription:', error);
    }
}
