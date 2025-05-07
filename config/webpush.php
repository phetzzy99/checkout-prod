<?php

return [
    'vapid' => [
        'subject' => env('VAPID_SUBJECT', 'mailto:library@sru.ac.th'),
        'public_key' => env('VAPID_PUBLIC_KEY'),
        'private_key' => env('VAPID_PRIVATE_KEY'),
    ],
];
