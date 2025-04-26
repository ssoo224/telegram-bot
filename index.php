<?php
$token = "7873853121:AAHznmevVDj3F8r-vC6ctQzXeJiXaAmdZ8I";
$website = "https://api.telegram.org/bot".$token;
$update = json_decode(file_get_contents('php://input'), TRUE);

// الحصول على بيانات الرسالة
$chat_id = $update["message"]["chat"]["id"];
$text = $update["message"]["text"];

// التحقق من الأمر /start
if ($text == "/start") {
    $response = "مرحبًا! البوت جاهز للاستخدام.";
    file_get_contents($website."/sendmessage?chat_id=".$chat_id."&text=".urlencode($response));
}

// التحقق من الأمر /vs والرسالة الصوتية
if ($text == "/vs") {
    if (isset($update["message"]["voice"])) {
        // استخراج معرف الملف الصوتي
        $voice_file_id = $update["message"]["voice"]["file_id"];
        
        // جلب رابط الملف الصوتي
        $file_info = json_decode(file_get_contents($website."/getFile?file_id=".$voice_file_id), TRUE);
        $file_path = $file_info["result"]["file_path"];
        $voice_url = "https://api.telegram.org/file/bot".$token."/".$file_path;

        // رد للمستخدم يحتوي على رابط الملف الصوتي
        $response = "تم استلام الرسالة الصوتية. يمكنك الاستماع إليها من الرابط التالي:\n" . $voice_url;
        file_get_contents($website."/sendmessage?chat_id=".$chat_id."&text=".urlencode($response));
    } else {
        $response = "لم يتم إرسال رسالة صوتية.";
        file_get_contents($website."/sendmessage?chat_id=".$chat_id."&text=".urlencode($response));
    }
}
?>
