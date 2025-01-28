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
}
