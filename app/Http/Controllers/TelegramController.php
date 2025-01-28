<?php

namespace App\Http\Controllers;

use App\Services\TelegramService;
use Illuminate\Http\Request;

class TelegramController extends Controller
{
    protected $telegramService;

    public function __construct(TelegramService $telegramService)
    {
        $this->telegramService = $telegramService;
    }

    public function handleWebhook(Request $request)
    {
        $data = $request->all();

        if (isset($data['message']['text'])) {
            $chatId = $data['message']['chat']['id'];
            $text = $data['message']['text'];

            // Custom response logic
            $responseMessage = "You said: {$text}";
            $this->telegramService->sendMessage($chatId, $responseMessage);
        }

        return response('OK', 200);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TelegramController extends Controller
{
    //
}
