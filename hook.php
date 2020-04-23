<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

use Longman\TelegramBot\Request;

$yourUsername = 'neuroti';
$yourChatId = 303414390;

use Longman\TelegramBot\Commands\Command;
use Longman\TelegramBot\Entities\ServerResponse;
use Longman\TelegramBot\Entities\Update;
use Longman\TelegramBot\Exception\TelegramException;

$bot_api_key  = '720384880:AAG1hfSFV6XXau0S4X99WU1mkb7S4ZYKZls';
$bot_username = 'Pussykickerbot';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);
    echo "<pre>";
    var_dump(Request::getInput());
    $post = json_decode(Request::getInput(), true);

    var_dump(($post));

    $post = json_decode(Request::getInput(), true);


   /* $oUpdate = new Update($post, $bot_username);
    $oMessage = $oUpdate->getMessage();*/

    // Handle telegram webhook request
    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Silence is golden!
    // log telegram errors
    echo $e->getMessage();
}

