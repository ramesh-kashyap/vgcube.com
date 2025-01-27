<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TelegramService
{
    protected $token;
    protected $apiUrl;

    public function __construct()
    {
        $this->token = env('TELEGRAM_BOT_TOKEN');
        $this->apiUrl = env('TELEGRAM_API_URL') . $this->token;
    }

    public function sendMessage($chatId, $message)
    {
        $response = Http::post("{$this->apiUrl}/sendMessage", [
            'chat_id' => $chatId,
            'text' => $message,
        ]);

        return $response->json();
    }
    public function sendWebAppButton($chatId)
{
    $keyboard = [
        'keyboard' => [
            [
                [
                    'text' => 'Open Mini App',
                    'web_app' => ['url' => 'https://buildwisecapital.com/telegram/miniapp']
                ]
            ]
        ],
        'resize_keyboard' => true,
        'one_time_keyboard' => true
    ];

    $response = Http::post("https://api.telegram.org/bot<7672325130:AAHYVe5B4fz7IIXUk3L9Xm7H9TuJJ0rardw>/sendMessage", [
        'chat_id' => $chatId,
        'text' => 'Click the button below to open the mini app:',
        'reply_markup' => json_encode($keyboard),
    ]);

    return $response->json();
}
}
