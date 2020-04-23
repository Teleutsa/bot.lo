<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';
define()
$bot_api_key  = '720384880:AAG1hfSFV6XXau0S4X99WU1mkb7S4ZYKZls';
$bot_username = 'Pussykickerbot';
$hook_url     = 'https://tgkicker.netxisp.host/hook.php';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Set webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    // echo $e->getMessage();
}