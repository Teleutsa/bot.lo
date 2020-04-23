<?php


$bot_api_key  = '720384880:AAG1hfSFV6XXau0S4X99WU1mkb7S4ZYKZls';
$bot_username = 'Pussykickerbot';

$yourUsername = 'neuroti';
$yourChatId = 303414390;

while (true) {
    $get_updates = file_get_contents("https://api.telegram.org/bot720384880:AAG1hfSFV6XXau0S4X99WU1mkb7S4ZYKZls/getUpdates");
    echo "<pre>";
    $get_updates = json_decode($get_updates, true);
    print_r($get_updates);
    $results = $get_updates['result'];
    $last_update_number = count($results) - 1;
    $update = $results[$last_update_number];
    foreach ($results as $update) {
        $update_id = $update['update_id'];
        $message = $update['message'];
        $chat_id = $message['chat']['id'];
        $text = $message['text'];
        if ($text == "hello") {
            $text_parameter = "Hello " . $message['chat']['first_name'];
        } else {
            $text_parameter = "i am alive";
        }
        file_get_contents("https://api.telegram.org/bot{$bot_api_key}/sendMessage?chat_id={$chat_id}&text={$text_parameter}");

    }
}