<?php
$token = "7873853121:AAHznmevVDj3F8r-vC6ctQzXeJiXaAmdZ8I";
$website = "https://api.telegram.org/bot".$token;
$update = json_decode(file_get_contents('php://input'), TRUE);
$chat_id = $update["message"]["chat"]["id"];
$text = $update["message"]["text"];

if ($text == "/start") {
    $response = "مرحبًا! البوت جاهز للاستخدام.";
    file_get_contents($website."/sendmessage?chat_id=".$chat_id."&text=".urlencode($response));
}

?>
