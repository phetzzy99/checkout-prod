self.addEventListener('push', function(event) {
    const options = {
        body: event.data.text(),
        icon: '/images/notification-icon.png',
        badge: '/images/notification-badge.png',
        vibrate: [100, 50, 100],
        data: {
            dateOfArrival: Date.now(),
            primaryKey: 1
        }
    };

    event.waitUntil(
        self.registration.showNotification('SRU Library Notification', options)
    );
});

self.addEventListener('notificationclick', function(event) {
    event.notification.close();
    event.waitUntil(
        clients.openWindow('/notifications')
    );
});
