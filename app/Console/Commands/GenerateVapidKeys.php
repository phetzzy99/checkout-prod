<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Minishlink\WebPush\VAPID;

class GenerateVapidKeys extends Command
{
    protected $signature = 'generate:vapid-keys';
    protected $description = 'Generate VAPID keys for web push notifications';

    public function handle()
    {
        $vapid = VAPID::createVapidKeys();

        $this->info('VAPID KEYS generated successfully!');
        $this->info('Public Key: ' . $vapid['publicKey']);
        $this->info('Private Key: ' . $vapid['privateKey']);

        // เก็บไว้ใน .env
        $this->appendToEnvFile('VAPID_PUBLIC_KEY', $vapid['publicKey']);
        $this->appendToEnvFile('VAPID_PRIVATE_KEY', $vapid['privateKey']);
    }

    private function appendToEnvFile($key, $value)
    {
        file_put_contents(app()->environmentFilePath(), PHP_EOL . $key . '=' . $value, FILE_APPEND);
    }
}
