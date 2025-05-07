<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PushSubscription;
use Minishlink\WebPush\WebPush;
use Minishlink\WebPush\Subscription;

class PushNotificationController extends Controller
{
    public function store(Request $request)
    {
        $subscription = PushSubscription::create([
            'endpoint' => $request->endpoint,
            'public_key' => $request->keys['p256dh'] ?? null,
            'auth_token' => $request->keys['auth'] ?? null,
        ]);

        return response()->json(['status' => 'success']);
    }

    public function sendNotification($message)
    {
        $webPush = new WebPush([
            'VAPID' => [
                'subject' => 'mailto:library@sru.ac.th',
                'publicKey' => env('VAPID_PUBLIC_KEY'),
                'privateKey' => env('VAPID_PRIVATE_KEY'),
            ],
        ]);

        $subscriptions = PushSubscription::all();

        foreach ($subscriptions as $sub) {
            $subscription = Subscription::create([
                'endpoint' => $sub->endpoint,
                'publicKey' => $sub->public_key,
                'authToken' => $sub->auth_token,
            ]);

            $webPush->queueNotification($subscription, json_encode([
                'title' => 'SRU Library Notification',
                'body' => $message,
            ]));
        }

        // ส่งการแจ้งเตือนทั้งหมด
        foreach ($webPush->flush() as $report) {
            $endpoint = $report->getRequest()->getUri()->__toString();

            if (!$report->isSuccess()) {
                PushSubscription::where('endpoint', $endpoint)->delete();
            }
        }
    }
}
