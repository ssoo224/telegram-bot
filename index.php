<?php

error_reporting(0);

ob_start();

$bot_id = "7873853121"; //ايدي البوت

$admmm = "7115002714"; //ايدي المطور

$tbbots = "I_e_e_l"; //معرف المطور بدون @

$API_KEY = "7873853121:AAHznmevVDj3F8r-vC6ctQzXeJiXaAmdZ8I";

$url_info = file_get_contents("https://api.telegram.org/bot$API_KEY/getMe");

$json_info = json_decode($url_info);

$userr = $json_info->result->username;

define('API_KEY',$API_KEY);

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($datas));
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
function SendChatAction($chat_id, $action)
{
    return bot('sendChatAction', [
        'chat_id' => $chat_id,
        'action' => $action
    ]);
}
function SendMessage($chat_id, $text, $parse_mode = "MARKDOWN", $disable_web_page_preview = true, $reply_to_message_id = null, $reply_markup = null)
{
    return bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => $text,
        'parse_mode' => $parse_mode,
        'disable_web_page_preview' => $disable_web_page_preview,
        'disable_notification' => false,
        'reply_to_message_id' => $reply_to_message_id,
        'reply_markup' => $reply_markup
    ]);
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message; $chat_id = $message->chat->id;
$from_id = $message->from->id; $name = $message->from->first_name; $text = $message->text;
$mid = $message->message_id; $name2 = $update->callback_query->from->first_name; $from_id2 = $update->callback_query->from->id; $username2 = $update->callback_query->from->username; $message_id2 = $update->callback_query->message->message_id; $chat_id2 = $update->callback_query->message->chat->id;
@$message = $update->message;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
@$text= $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
/*===== dev ~ @JJJ22J =====*/
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
/*===== dev ~ @JJJ22J =====*/
$F_Uid = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$from_id"),true);
$bio = $F_Uid['result']['bio'];
/*===== dev ~ @JJJ22J =====*/
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;
/*===== dev ~ @JJJ22J =====*/
@$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
@$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
@$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
@$statusq = $statjsonq['result']['status'];
@$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
@$you = $info['result']['status'];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
/*===== dev ~ @JJJ22J =====*/
$infos = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$idBot"), true);
$bot = $infos['result']['status'];
$can_bot_chang_info = $infos['result']['can_change_info'];
$can_bot_delete =  $infos['result']['can_delete_messages'];
$can_bot_restrict = $infos['result']['can_restrict_members'];
$can_bot_invite = $infos['result']['can_invite_users'];
$can_bot_pin = $infos['result']['can_pin_messages'];
$can_bot_promote = $infos['result']['can_promote_members'];
/*===== dev ~ @JJJ22J =====*/
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);
@$filterget = $settings["filterlist"];

$mem = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg = explode("\n",$cmg);
$cmsg = count($cmssg);

$info = json_decode(file_get_contents("admin.json"),1);
$coss = json_decode(file_get_contents("data/matrxx.json"),1);
$malke = $coss['malk'];
if($malke == null){
$malkei = $info['id'];
}elseif($malke != null){
$malkei = $malke;
}
$admin = $malkei;
$From_Dev = $info['id'];
$UserDevpe = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$admin"))->result->username;
$NameDevpe = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$admin"))->result->first_name;
$Dev = array("$admin","$From_Dev");
$Dev = array("$admin","$From_Dev");
$eri = array("7115002714", "7115002714" );
$sudo = $admin;
$DevUser = "@M_0_M_A";
$hqoqs = "Gffffvhrdbot";

if ($tc == 'private'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($from_id, $user["userlist"])) {
$user["userlist"][]="$from_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif ($tc == 'group' | $tc == 'supergroup'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($chat_id, $user["grouplist"])) {
$user["grouplist"][]="$chat_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;

$grouplisturl = $user["grouplist"];
if ($tc == 'group' | $tc == 'supergroup'){
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($chat_id, $user["grouplist"])) {
$user["grouplist"][]="$chat_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
$grouplisturl = $user["grouplist"];
if( $text == "الروابط" or $text == "🎭روابط الكروبات" or $text == "قائمة روابط الكروبات" or $text == "قائمه روابط الكروبات" or $text == "قائمة الروابط" and $settings["silentlist"]!== NULL){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)) {
$grouplisturl = $user["grouplist"];
for($z = 0;$z <= count($grouplisturl)-1;$z++){
$groupinlink = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$grouplisturl[$z]"));
$grouplinkem = $groupinlink->result;
$result = $result."┇$z-$grouplinkem"."\n";
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙قائمة الكروبات المفعله : 
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
-$result",
]);
}
}
###########
if( $text=="/start" &&  $tc == "private" or $text=="🎭رجوع" &&  $tc == "private" ){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙ اهلأ عزيزي - [$first_name](tg://user?id=$from_id)
𖠮︙ اليك قائمة المطور الخاصه في بوتك
𖠮︙ [تحديثات السورس الجديده](https://t.me/vv399)",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🎭نقل الملكية"],['text'=>"🎭حذف المالك الثاني"]],
[['text'=>"🎭تحديث السورس"]],
[['text'=>"🎭تعين الاسم"],['text'=>"🎭تحديث"],['text'=>"🎭حذف الاسم"]],
[['text'=>"🎭قسم كت تويت"],['text'=>"🎭قسم الاستارت"]],
[['text'=>"🎭قسم الاذاعه"],['text'=>"🎭قسم الاوامر"],['text'=>"🎭قسم الاشتراك"]],
[['text'=>"🎭الاحصائيات"],['text'=>"🎭المشتركين"],['text'=>"🎭المجموعات"]],
[['text'=>"🎭تفعيل بوت المطور"],['text'=>"🎭تفعيل بوت الخدمي"]],
[['text'=>"🎭وضع عدد التفعيل"]],
[['text'=>"🎭تفعيل الاحصائيات"],['text'=>"🎭تعطيل الاحصائيات"]],
[['text'=>"🎭روابط الكروبات"]],
[['text'=>"🎭تعين كليشة المطور"],['text'=>"🎭حذف كليشة المطور"]],
[['text'=>"🎭حظر مجموعه"],['text'=>"🎭قسم تواصل"]],
[['text'=>"🎭قسم رد عام"]],
[['text'=>"🎭تفعيل التبنيه"],['text'=>"🎭تعطيل التنبيه"]],
[['text'=>"🎭مسح المكتومين عام"]],
[['text'=>"🎭مسح قائمة العام"]],
[['text'=>"🎭المكتومين عام"],['text'=>"🎭المحظورين عام"]],
[['text'=>"🎭مسح المحظورين عام"]],
[['text'=>"🎭ترتيب الاوامر"]],
[['text'=>"🎭المطورين الثانويه"]],
[['text'=>"🎭مسح المطورين الثانويه"]],
],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="🎭قسم تواصل"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙ مرحبا 彡 [$first_name](tg://user?id=$from_id)
𖠮︙ انت الان في القسم العام بالتواصل
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🎭جلب تواصل"]],
[['text'=>"🎭تعين تواصل"],['text'=>"🎭حذف تواصل"]],
[['text'=>"🎭تعطيل تواصل"],['text'=>"🎭تفعيل تواصل"]],
[ ['text'=>"🎭رجوع"] ],
],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="🎭قسم الاستارت"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙ مرحبا 彡 [$first_name](tg://user?id=$from_id)
𖠮︙ انت الان في القسم الستارت
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🎭تفعيل الاستارت"],['text'=>"🎭تعطيل الاستارت"]],
[['text'=>"🎭جلب الاستارت"]],
[['text'=>"🎭تعين الاستارت"],['text'=>"🎭حذف الاستارت"]],
[['text'=>"🎭رجوع"]],
],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="🎭قسم كت تويت"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙ مرحبا 彡 [$first_name](tg://user?id=$from_id)
𖠮︙ انت الان في القسم الستارت
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🎭اضف كت"],['text'=>"🎭حذف كت"]],
[['text'=>"🎭عدد الاسئله"]],
[['text'=>"🎭مسح الاسئله"]],
[ ['text'=>"🎭رجوع"] ],
],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="🎭قسم الاذاعه"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙ مرحبا 彡 [$first_name](tg://user?id=$from_id)
𖠮︙ انت الان في القسم الاحصائيات و الاذاعه",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🎭الاحصائيات"]],
[['text'=>"🎭توجيه خاص"]],
[['text'=>"🎭اذاعه عام"],['text'=>"🎭اذاعه خاص"]],
[['text'=>"🎭توجيه عام"]],
[['text'=>"🎭المجموعات"]],
[['text'=>"🎭المشتركين"]],
[ ['text'=>"🎭رجوع"] ],
],
'resize_keyboard'=>true
])
]);
}
}
if( $text=="🎭قسم الاوامر"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙ مرحبا 彡 [$first_name](tg://user?id=$from_id)
𖠮︙ انت الان في القسم تعين الاوامر",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🎭تعين م1"],['text'=>"🎭تعين م2"]],
[['text'=>"🎭تعين م3"],['text'=>"🎭تعين م4"]],
[['text'=>"🎭تعين م5"],['text'=>"🎭تعين م6"]],
[['text'=>"🎭اعادة تعين"]],
[['text'=>"🎭حذف م1"],['text'=>"🎭حذف م2"]],
[['text'=>"🎭حذف م3"],['text'=>"🎭حذف م4"]],
[['text'=>"🎭حذف م5"],['text'=>"🎭حذف م6"]],
[['text'=>"🎭تعين السورس"],['text'=>"🎭حذف السورس"]],
[['text'=>"🎭رجوع"]],
],
'resize_keyboard'=>true
])
]);
}
}
if($text=="🎭قسم الاشتراك"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙مرحبا 彡 [$first_name](tg://user?id=$from_id)
𖠮︙ انت الان في القسم الاشتراك الاجباري",
'parse_mode'=>'MarkDown',
'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🎭حذف الاشتراك"],['text'=>"🎭تعين الاشتراك"]],
[['text'=>"🎭جلب الاشتراك"]],
[['text'=>"🎭تفعيل الاشتراك"]],
[['text'=>"🎭تعطيل الاشتراك"]],
[ ['text'=>"🎭رجوع"] ],
],
'resize_keyboard'=>true
])
]);
}
}
if($text=="🎭قسم رد عام"){
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙ مرحبا 彡 [$first_name](tg://user?id=$from_id)
𖠮︙ انت الان في القسم الردود العام  ",
'parse_mode'=>'MarkDown',
'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"🎭اضف رد عام"],['text'=>"🎭حذف رد عام"]],
[['text'=>"🎭حذف ردود المطور"],['text'=>"🎭ردود المطور"]],
[['text'=>"🎭رجوع"]],
],
'resize_keyboard'=>true
])
]);
}
}

$developers_info = file_get_contents("data/developers/developer.txt");
$developer = explode ("\n",$developers_info);
$developers_infos = file_get_contents("data/developers/developers.txt");
$developers = explode("\n",$developers_infos);
$list_developers ="";
$list_developers = $list_developers.""."$developers_infos ➖➖➖➖➖➖➖";
/*===== dev ~ @JJJ22J =====*/
$AUBalandB_info = file_get_contents("data/AUBaland/AUBaland.txt");
$AUBaland = explode ("\n",$AUBalandB_info);
$AUBalandB_infos = file_get_contents("data/AUBaland/AUBalandB.txt");
$AUBalandB = explode("\n",$AUBalandB_infos);
$list_AUBaland ="";
$list_AUBaland = $list_AUBaland.""."$AUBalandB_infos";
/*===== dev ~ @JJJ22J =====*/
$nazarr_info = file_get_contents("data/nazar/$chat_id.txt");
$nazar  = explode("\n",$nazarr_info);
$nazarr_infos = file_get_contents("data/nazar/$chat_id/nazr.txt");
$nazarr = explode ("\n",$nazarr_infos);
/*===== dev ~ @JJJ22J =====*/
$matrxxs_info = file_get_contents("data/matrxx/$chat_id.txt");
$matrxx  = explode("\n",$matrxxs_info);
$matrxxs_infos = file_get_contents("data/matrxx/$chat_id/crlo.txt");
$matrxxs = explode ("\n",$matrxxs_infos);
/*===== dev ~ @JJJ22J =====*/
$mangers_info = file_get_contents("data/manger/$chat_id.txt");
$manger  = explode("\n",$mangers_info);
$mangers_infos = file_get_contents("data/manger/$chat_id/mange.txt");
$mangers = explode ("\n",$mangers_infos);
/*===== dev ~ @JJJ22J =====*/
$admin_users_info = file_get_contents("data/admin_user/$chat_id.txt");
$admin_user  = explode("\n",$admin_users_info);
$admin_users_infos = file_get_contents("data/admin_user/$chat_id/mange.txt");
$admin_users = explode ("\n",$admin_users_infos);
/*===== dev ~ @JJJ22J =====*/
$mmyazs_info = file_get_contents("data/mmyaz/$chat_id.txt");
$mmyaz  = explode("\n",$mmyazs_info);
$mmyazs_infos = file_get_contents("data/mmyaz/$chat_id/mange.txt");
$mmyazs = explode ("\n",$mmyazs_infos);
/*===== dev ~ @JJJ22J =====*/
$motay_info = file_get_contents("data/motay/$chat_id.txt");
$motay  = explode("\n",$motay_info);
$motaya_infos = file_get_contents("data/motay/$chat_id/mange.txt");
$motaya = explode ("\n",$motaya_infos);
/*===== dev ~ @JJJ22J =====*/
$bans = file_get_contents("data/ban/$chat_id.txt");
$banids  = explode("\n",$bans);
$banslist = file_get_contents("data/ban/$chat_id/list.txt");
$banlist = explode ("\n",$banslist);
/*===== dev ~ @JJJ22J =====*/
mkdir("data");
mkdir("data/developers");
mkdir("data/AUBaland");
mkdir("data/nazar");
mkdir("data/nazar/$chat_id");
mkdir("data/ban");
mkdir("data/ban/$chat_id");
mkdir("data/matrxx");
mkdir("data/matrxx/$chat_id");
mkdir("data/manger");
mkdir("data/manger/$chat_id");
mkdir("data/motay");
mkdir("data/motay/$chat_id");
mkdir("data/admin_user");
mkdir("data/admin_user/$chat_id");
mkdir("data/mmyaz");
mkdir("data/mmyaz/$chat_id");
mkdir("data/miss/$chat_id");
mkdir("data/miss/$chat_id/miss.json");
mkdir("statistics");

$DRPP = "2021250478:AAHfFTRXnsD95BOnOJ53CkxL2y_S_u6dnEU";
$ckl = "@VV399"; 
$ch2 = file_get_contents("https://api.telegram.org/bot$DRPP/getChatMember?chat_id=".$ckl."&user_id=".$from_id);
$getch2 = json_decode(file_get_contents("http://api.telegram.org/bot$DRPP/getChat?chat_id=".$ckl))->result;
$Namech2 = $getch2->title;
$getch2li = str_replace("@","",$ckl);
if($text == "تفعيل" or $text == "حظر" or $text == "ايدي" or $text == "كتم" or $text == "تقيد" or $text == "الاوامر" or $text == "ا" or $text == "الاعدادات" or $text == "رتبتي" or $text == "كشف" or $text == "الرتبه" or $text == "رتبته" or $text == "اضف رد" or $text == "حذف رد" or $text == "تاك" or $text == "حذف امر" or $text == "اضف امر" or $text == "تاك للكل" or $text == "/start"){
if($message && (strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>'
↫ عذرا عزيزي لايمكنك التحكم في اوامر البوت 📑
↫ الا بعد الاشتراك في قناة البوت 📑
⌔︙القناة : '.$ckl.' ✅
',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>$Namech2,'url'=>"https://t.me/$getch2li"]],
]])
]);return false;}}

$setch = file_get_contents("data/setch.json");
$setchannel = file_get_contents("data/setchannel.json");
if($text == "تفعيل" or $text == "حظر" or $text == "ايدي" or $text == "كتم" or $text == "تقيد" or $text == "الاوامر" or $text == "الاعدادات" or $text == "رتبتي" or $text == "كشف" or $text == "الرتبه" or $text == "رتبته" or $text == "اضف رد" or $text == "حذف رد" or $text == "تاك" or $text == "حذف امر" or $text == "اضف امر" or $text == "تاك للكل" or $text == "/start"){
if(!in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$eri)){
if($setchannel == "مفعل ✔️"){
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$setch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⌔︙عليك الاشتراك في قناة البوت \n⌔︙قناة البوت ↫ [@$setch]",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"قناة البوت",'url'=>"t.me/$setch"]],]])]);
 bot("sendmessage",[
      "chat_id"=>$Devd,
      "text"=>"",
      ]);
      die('اا');
  }
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>" ",'reply_to_message_id'=>$message->message_id,]);}}}

$new = $message->new_chat_member;
$newbot = $update->message->new_chat_member;
if ($new and $new->id == $bot_id) {
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"⌔︙أهلآ بك في بوت $namebot
⌔︙اختصاص البوت حماية المجموعات
⌔︙لتفعيل البوت عليك اتباع مايلي ...
⌔︙اضف البوت الى مجموعتك
⌔︙ارفعه ادمن {مشرف}
⌔︙ارسل كلمة { تفعيل } ليتم تفعيل المجموعه
⌔︙سيتم ترقيتك منشئ اساسي في البوت
⌔︙مطور البوت ← {[$DevUser]}
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);}

if(in_array($from_id,$eri)){
$info = "مطور السورس";
}
elseif(in_array($from_id,$developer) ){
$info = "مطور ثانوي";
}
elseif(in_array($from_id,$Dev) ){
$info = "مطور الاساسي";
}
elseif(in_array($from_id,$nazar) ){
$info = "منشئ اساسي";
}
elseif(in_array($from_id,$matrxx) ){
$info = "منشئ";
}
elseif($status == "creator"){
$info = "المالك";
}
elseif(in_array($from_id,$manger) ){
$info = "المدير";
}
elseif(in_array($from_id,$admin_user) ){
$info = "ادمن";
}
elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز";
}elseif($status == "member" ){
$info = "عضو فقط";
}
if(!@$username){
$casss = "لايوجد يوزر";
}elseif(@$username){
$casss = "@$username";
}
if($text=="رتبتي" ){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
⌯⁞ رتبتك ↫ $info
⌯⁞ ايديك ↫ $from_id
⌯⁞ معرفك ↫ $casss
",
'parse_mode'=>"html",
'reply_to_message_id'=>$message->message_id,
]);
}
/*===== dev ~ @JJJ22J =====*/
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;
$settingdev = json_decode(file_get_contents("DEVER.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);
if($text == "اضف امر" or $text == "وضع امر" or $text == "وظع امر" or $text == "وظع امر"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙ارسل الامر القديم الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
elseif($text == "رفع مميز" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
𖠮︙ارسل الامر الجديد الان .
*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.mmaz";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "رفع ادمن" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.admi";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "رفع مدير" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.modir";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "رفع منشئ" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.mans";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "رفع منشئ اساسي" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.mansas";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "تاك للكل" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.tagall";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "تنزيل الكل" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$matrxx) || in_array($from_id,$nazar) || in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.tkal";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "ايدي" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.idse";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "كشف" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.ksh";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "حظر" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.kik";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "طرد" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.kout";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "كتم" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.ktm";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "تقيد" and $settings["SETT"]=="$from_id"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="$from_id.tkeed";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.mmaz"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙ارسل الامر الجديد الان .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["mmaz"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.admi"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["admi"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.mansas"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["mansas"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.tkal"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["tkal"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.mans"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["mans"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.tagall"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["tagall"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.modir"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["modir"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.idse"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["idse"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.ksh"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["ksh"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.kik"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["kik"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.kout"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["kout"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.ktm"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["ktm"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["SETT"]=="$from_id.tkeed"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙تم حفظ الامر بنجاح .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["SETT"]="done";
$settings["information"]["tkeed"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
$setmm = $settings["information"]["mmaz"];
$settagall = $settings["information"]["tagall"];
$setmans = $settings["information"]["mans"];
$setmansas = $settings["information"]["mansas"];
$setad = $settings["information"]["admi"];
$stmode = $settings["information"]["modir"];
$setid = $settings["information"]["idse"];
$setksh = $settings["information"]["ksh"];
$sethazr = $settings["information"]["kik"];
$setout = $settings["information"]["kout"];
$setktm = $settings["information"]["ktm"];
$settkal = $settings["information"]["tkal"];
$settkeed  = $settings["information"]["tkeed"];
if($text == "الاوامر المضافه" or $text == "الاوامر المختصره" or $text == "المضافه"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
𖠮︙اليك اوامر المضافه
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙رفع منشئ اساسي ← $setmansas
𖠮︙رفع منشئ ← $setmans
𖠮︙رفع مدير ← $stmode
𖠮︙رفع ادمن ← $setad
𖠮︙رفع مميز ← $setmm
𖠮︙تاك للكل ← $settagall
𖠮︙تنزيل الكل ← $settkal
𖠮︙كشف ← $setksh
𖠮︙كتم ← $setktm
𖠮︙تقيد ← $settkeed
𖠮︙طرد ← $setout
𖠮︙حظر ← $sethazr
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
}}
if($text == "حذف الاوامر المضافه" or $text == "مسح المضافه" or $text == "تنظيف المضافه"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙تم مسح الاوامر المضافه .*",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$settings["information"]["mmaz"] = "لايوجد امر";
$settings["information"]["admi"] = "لايوجد امر";
$settings["information"]["modir"] = "لايوجد امر";
$settings["information"]["idse"] = "لايوجد امر";
$settings["information"]["ksh"] = "لايوجد امر";
$settings["information"]["kik"] = "لايوجد امر";
$settings["information"]["tkal"] = "لايوجد امر";
$settings["information"]["kout"] = "لايوجد امر";
$settings["information"]["ktm"] ="لايوجد امر";
$settings["information"]["tagall"] = "لايوجد امر";
$settings["information"]["mans"] = "لايوجد امر";
$settings["information"]["mansas"] ="لايوجد امر";
$settings["information"]["tkeed"] = "لايوجد امر";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
/*===== dev ~ @JJJ22J =====*/
if($re and $text == "رفع مطور ثانوي" and $re_id !=$id_Bot and  in_array($from_id,$Dev) || in_array($from_id,$eri) and !in_array($re_id,$developer)){
file_put_contents("data/developers/developer.txt",$re_id ."\n " , FILE_APPEND);
file_put_contents("data/developers/developers.txt",'[@'.$re_user ."]". "\n " , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙تم ترقية ليصبح مطور ثانوي
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع مطور ثانوي"  and $re_id !=$id_Bot and in_array($from_id,$Dev) and  in_array($from_id,$eri) and in_array($re_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"𖠮︙العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙هوه بالفعل مطور ثانوي
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if(in_array($from_id,$Dev) || in_array($from_id,$eri)){
if($re and $text == "تنزيل مطور ثانوي" and in_array($re_id,$developer)){
$re_id_info = file_get_contents("data/developers/$chat_id.txt");
$devr = file_get_contents("data/developers/$chat_id/developer.txt");
$devr1 = explode("             \n",$devr);
$str = str_replace($re_id,"",$re_id_info);
$str2 = str_replace("⌯ ❨ [" . "@". $re_user ."] ❩ " . "•" . " ❨ `". $re_id ."` ❩ ","",$devr1);
file_put_contents("data/developers/developer.txt",$str);
file_put_contents("data/developers/developers.txt",$str);
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"
𖠮︙العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙تم تنزيله من قائمة المطورين الثانوي
", 'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }}

if(in_array($from_id,$Dev)){
if($re and $text == "تنزيل مطور ثانوي" and !in_array($re_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"
𖠮︙العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙ هوه ليس مطور ثانوي ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); } }

$REMAS = str_replace('رفع مطور ثانوي ','',$text);
if ($text =="رفع مطور ثانوي $REMAS" and preg_match('/([0-9])/i',$REMAS) and $REMAS !=$id_Bot and  in_array($from_id,$Dev) || in_array($from_id,$eri) and !in_array($REMAS,$developer)){
$REMAS= str_replace('رفع مطور ثانوي ','',$text);
$matrxxid = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$REMAS"))->result->username;
$matrxxname = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$REMAS"))->result->first_name;
file_put_contents("data/developers/developer.txt",$REMAS ."\n " , FILE_APPEND);
file_put_contents("data/developers/developers.txt",'[@'.$matrxxid ."]". "\n " , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"𖠮︙العضو 彡「 [$matrxxname](tg://user?id=$REMAS) 」 
𖠮︙تم ترقية ليصبح مطور ثانوي
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$REMAS = str_replace('رفع مطور ثانوي ','',$text);
if ($text =="رفع مطور ثانوي $REMAS" and preg_match('/([0-9])/i',$REMAS) and $REMAS !=$id_Bot and in_array($from_id,$Dev) and  in_array($from_id,$eri) and in_array($REMAS,$developer)){
$REMAS= str_replace('رفع مطور ثانوي ','',$text);
$matrxxid = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$REMAS"))->result->username;
$matrxxname = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$REMAS"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"𖠮︙العضو 彡「 [$matrxxname](tg://user?id=$REMAS) 」 
𖠮︙هوه بالفعل مطور ثانوي
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if(in_array($from_id,$Dev) || in_array($from_id,$eri)){
$BEROSED = str_replace('تنزيل مطور ثانوي ','',$text);
if ($text =="تنزيل مطور ثانوي $BEROSED" and preg_match('/([0-9])/i',$REMAS) and in_array($BEROSED,$developer)){
$BEROSED= str_replace('تنزيل مطور ثانوي ','',$text);
$matrxxid = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$BEROSED"))->result->username;
$matrxxname = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$BEROSED"))->result->first_name;
$BEROSED_info = file_get_contents("data/developers/$chat_id.txt");
$devr = file_get_contents("data/developers/$chat_id/developer.txt");
$devr1 = explode("             \n",$devr);
$str = str_replace($BEROSED,"",$BEROSED_info);
$str2 = str_replace("⌯ ❨ [" . "@". $catlosid ."] ❩ " . "•" . " ❨ `". $BEROSED ."` ❩ ","",$devr1);
file_put_contents("data/developers/developer.txt",$str);
file_put_contents("data/developers/developers.txt",$str);
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"
𖠮︙ العضو 彡「 [$matrxxname](tg://user?id=$BEROSED) 」 
𖠮︙تم تنزيله من قائمة المطورين الثانوي
", 'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); }}

if(in_array($from_id,$Dev)){
$BEROSED = str_replace('تنزيل مطور ثانوي ','',$text);
if ($text =="تنزيل مطور ثانوي $BEROSED" and preg_match('/([0-9])/i',$REMAS) and !in_array($BEROSED,$developer)){
$BEROSED= str_replace('تنزيل مطور ثانوي ','',$text);
$matrxxid = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$BEROSED"))->result->username;
$matrxxname = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$BEROSED"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id, 'text'=>"
𖠮︙ العضو 彡「 [$matrxxname](tg://user?id=$BEROSED) 」 
𖠮︙هوه ليس مطور ثانوي ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true, ]); } }

if($text == "مسح المطورين الثانويه"  || $text == "⌯ مسح المطورين الثانويه" and   in_array($from_id,$Dev)){
			file_put_contents("data/developers/developer.txt"," ");
			file_put_contents("data/developers/developers.txt"," ");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ عزيزي 彡「 [$first_name](tg://user?id=$from_id) 」 
𖠮︙تم مسح قائمة المطورين الثانويه
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "⌯ المطورين الثانويه" || $text == "المطورين الثانويه" and   in_array($from_id,$Dev) and $developers_info != NULL and $developers_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"𖠮︙اليك قائمة 彡 المطورين الثانويه
$list_developers
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "⌯ المطورين الثانويه" || $text == "المطورين الثانويه" and   in_array($from_id,$Dev) and $developers_info == NULL || $developers_info == " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ عزيزي 彡「 [$first_name](tg://user?id=$from_id) 」 
𖠮︙لايوجد مطور ثانوي حاليأ
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}

if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$eri)) {
if($rt && $text == "رفع منشئ اساسي" or $rt && $text == "من اس" and $text==$settings["information"]["mansas"] and !in_array($re_id,$manger)){
			file_put_contents("data/nazar/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/nazar/$chat_id/nazr.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙ تم ترقية ليصبح منشئ اساسي
"
,'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
elseif($rt && $text == "رفع منشئ اساسي" or $rt && $text == "من اس" and $text==$settings["information"]["mansas"] and in_array($re_id,$nazar)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙هوه بالفعل منشئ اساسي
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$IDMARX = str_replace('رفع منشئ اساسي ','',$text);
if ($text =="رفع منشئ اساسي $IDMARX" and preg_match('/([0-9])/i',$IDMARX) and !in_array($IDMARX,$nazar)){
$IDMARX= str_replace('رفع منشئ اساسي ','',$text);
$IDMARXID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDMARX"))->result->username;
$IDMARXNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDMARX"))->result->first_name;
			file_put_contents("data/nazar/$chat_id.txt",$IDMARX . "\n" , FILE_APPEND);
			file_put_contents("data/nazar/$chat_id/nazr.txt" , " *𓆩* [" . "@". $IDMARXID ."] *𓆪* " . "»" . " *𓆩* `". $IDMARX ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$IDMARXNAME](tg://user?id=$IDMARX) 」 
𖠮︙ تم ترقية ليصبح منشئ اساسي
"
,'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
$IDMARX = str_replace('رفع منشئ اساسي ','',$text);
if ($text =="رفع منشئ اساسي $IDMARX" and preg_match('/([0-9])/i',$IDMARX) and in_array($IDMARX,$nazar)){
$IDMARX= str_replace('رفع منشئ اساسي ','',$text);
$IDMARXID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDMARX"))->result->username;
$IDMARXNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDMARX"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$IDMARXNAME](tg://user?id=$IDMARX) 」 
𖠮︙هوه بالفعل منشئ اساسي
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}

$IDMARX = str_replace('تنزيل منشئ اساسي ','',$text);
if ($text =="تنزيل منشئ اساسي $IDMARX" and preg_match('/([0-9])/i',$IDMARX) and in_array($IDMARX,$nazar)){
$IDMARX= str_replace('تنزيل منشئ اساسي ','',$text);
$IDMARXID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDMARX"))->result->username;
$IDMARXNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDMARX"))->result->first_name;
	$IDMARX_info = file_get_contents("data/nazar/$chat_id.txt");
	$mdrs = file_get_contents("data/nazar/$chat_id/nazr.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($IDMARX,"",$IDMARX_info);
	$str2 = str_replace(" *𓆩* [" . "@". $IDMARXID ."] *𓆪* " . "»" . " *𓆩* `". $IDMARX ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/nazar/$chat_id.txt",$str);
	file_put_contents("data/nazar/$chat_id/nazr.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
𖠮︙ العضو 彡「 [$IDMARXNAME](tg://user?id=$IDMARX) 」 
𖠮︙ تم تنزيله من قائمة المنشئين الاساسي
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$IDMARX = str_replace('تنزيل منشئ اساسي ','',$text);
if ($text =="تنزيل منشئ اساسي $IDMARX" and preg_match('/([0-9])/i',$IDMARX) and !in_array($IDMARX,$nazar)){
$IDMARX= str_replace('تنزيل منشئ اساسي ','',$text);
$IDMARXID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDMARX"))->result->username;
$IDMARXNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDMARX"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$IDMARXNAME](tg://user?id=$IDMARX) 」 
𖠮︙هوه ليس منشئ اساسي ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المنشئين الاساسي" ){
file_put_contents("data/nazar/$chat_id.txt","");
file_put_contents("data/nazar/$chat_id.txt","");
file_put_contents("data/nazar/$chat_id/nazr.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ بواسطة 彡「 [$first_name](tg://user?id=$from_id) 」 
𖠮︙ تم مسح قائمة المنشئين الاساسي
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل المنشئ اساسي" || $text == "تنزيل منشئ اساسي"  and in_array($re_id,$nazar)){
	$re_id_info = file_get_contents("data/nazar/$chat_id.txt");
	$mdrs = file_get_contents("data/nazar/$chat_id/nazr.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/nazar/$chat_id.txt",$str);
	file_put_contents("data/nazar/$chat_id/nazr.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙تم تنزيله من قائمة المنشئين الاساسي
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل المنشئ اساسي" || $text == "تنزيل منشئ اساسي" || $text == "ت م ا" || $text == "تنما" and !in_array($re_id,$nazar)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙ هوه ليس منشئ اساسي ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المنشئين الاساسي" || $text == "قائمه المنشئين الاساسي" and $nazarr_info != NULL and $nazarr_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"𖠮︙اليك قائمة 彡 المشئين الاساسي
$nazarr_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المنشئين الاساسي" ||  $text == "قائمه المنشيئن الاساسي" and $nazarr_info == NULL || $nazarr_info == " " || $nazarr_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ عزيزي 彡「 [$first_name](tg://user?id=$from_id) 」 
𖠮︙لايوجد اي منشئ اساسي
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {
if($rt && $text == "رفع منشئ" or $rt && $text == "من" and $text==$settings["information"]["mans"] and !in_array($re_id,$manger)){
			file_put_contents("data/matrxx/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/matrxx/$chat_id/crlo.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙تم ترقية ليصبح منشئ
"
,'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
elseif($rt && $text == "رفع منشئ" or $rt && $text == "من" and $text == "رفع منشئ" and $text == "من" and $text==$settings["information"]["mans"] and in_array($re_id,$matrxx)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"𖠮︙العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙ هوه بالفعل منشئ 
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$IDmatrxx = str_replace('رفع منشئ ','',$text);
if ($text =="رفع منشئ $IDmatrxx" and preg_match('/([0-9])/i',$IDmatrxx) and !in_array($IDmatrxx,$matrxx)){
$IDmatrxx= str_replace('رفع منشئ ','',$text);
$matrxxID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDmatrxx"))->result->username;
$matrxxNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDmatrxx"))->result->first_name;
			file_put_contents("data/matrxx/$chat_id.txt",$IDmatrxx . "\n" , FILE_APPEND);
			file_put_contents("data/matrxx/$chat_id/crlo.txt" , " *𓆩* [" . "@". $matrxxID ."] *𓆪* " . "»" . " *𓆩* `". $IDmatrxx ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙لعضو 彡「 [$matrxxNAME](tg://user?id=$IDmatrxx) 」 
𖠮︙ تم ترقية ليصبح منشئ
"
,'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
$IDmatrxx = str_replace('رفع منشئ ','',$text);
if ($text =="رفع منشئ $IDmatrxx" and preg_match('/([0-9])/i',$IDmatrxx) and in_array($IDmatrxx,$matrxx)){
$IDmatrxx= str_replace('رفع منشئ ','',$text);
$matrxxID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDmatrxx"))->result->username;
$matrxxNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDmatrxx"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"𖠮︙العضو 彡「 [$matrxxNAME](tg://user?id=$IDmatrxx) 」 
𖠮︙هوه بالفعل منشئ 
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}

$IDmatrxx = str_replace('تنزيل منشئ ','',$text);
if ($text =="تنزيل منشئ $IDmatrxx" and preg_match('/([0-9])/i',$IDmatrxx) and in_array($IDmatrxx,$matrxx)){
$IDmatrxx= str_replace('تنزيل منشئ ','',$text);
$matrxxID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDmatrxx"))->result->username;
$matrxxNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDmatrxx"))->result->first_name;
	$IDmatrxx_info = file_get_contents("data/matrxx/$chat_id.txt");
	$mdrs = file_get_contents("data/matrxx/$chat_id/crlo.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($IDmatrxx,"",$IDmatrxx_info);
	$str2 = str_replace(" *𓆩* [" . "@". $matrxxID ."] *𓆪* " . "»" . " *𓆩* `". $IDmatrxx ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/matrxx/$chat_id.txt",$str);
	file_put_contents("data/matrxx/$chat_id/crlo.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"𖠮︙العضو 彡「 [$matrxxNAME](tg://user?id=$IDmatrxx) 」 
𖠮︙تم تنزيله من قائمة المنشئين
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$IDmatrxx = str_replace('تنزيل منشئ ','',$text);
if ($text =="تنزيل منشئ $IDmatrxx" and preg_match('/([0-9])/i',$IDmatrxx) and !in_array($IDmatrxx,$matrxx)){
$IDmatrxx= str_replace('تنزيل منشئ ','',$text);
$matrxxID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDmatrxx"))->result->username;
$matrxxNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDmatrxx"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"𖠮︙العضو 彡「 [$matrxxNAME](tg://user?id=$IDmatrxx) 」 
𖠮︙ ليس منشئ ليتم تنزيله 
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المنشيئن" ){
file_put_contents("data/matrxx/$chat_id.txt","");
file_put_contents("data/matrxx/$chat_id.txt","");
file_put_contents("data/matrxx/$chat_id/crlo.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"𖠮︙عزيزي 彡「 [$first_name](tg://user?id=$from_id) 」 
𖠮︙ تم مسح قائمة المنشئين
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل المنشئ" || $text == "تنزيل منشئ"  and in_array($re_id,$matrxx)){
	$re_id_info = file_get_contents("data/matrxx/$chat_id.txt");
	$mdrs = file_get_contents("data/matrxx/$chat_id/crlo.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/matrxx/$chat_id.txt",$str);
	file_put_contents("data/matrxx/$chat_id/crlo.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙تم تنزيله من قائمة المنشئين
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل المنشئ" || $text == "تنزيل منشئ" || $text == "ت م" || $text == "تنم" and !in_array($re_id,$matrxx)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙ ليس منشئ ليتم تنزيله 
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المنشئين" || $text == "قائمه المنشئين" and $matrxxs_info != NULL and $matrxxs_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"𖠮︙اليك قائمة 彡 المشئينن
$matrxxs_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المنشيئن" ||  $text == "قائمه المنشيئن" and $matrxxs_info == NULL || $matrxxs_info == " " || $matrxxs_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"𖠮︙عزيزي 彡「 [$first_name](tg://user?id=$from_id) 」 
𖠮︙لايوجد منشئ حاليأ
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$matrxx) || in_array($from_id,$eri)  || in_array($from_id,$nazar)) {
if($rt && $text == "رفع مدير" or $rt && $text == "مد" and $text==$settings["information"]["modir"] and !in_array($re_id,$manger)){
	if($settings["lock"]["rfaabot"] == "مقفول"){
			file_put_contents("data/manger/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/manger/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙ تم ترقية ليصبح مدير
"
,'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
elseif($rt && $text == "رفع مدير" or $rt && $text == "مد" and $text==$settings["information"]["modir"] and in_array($re_id,$manger)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙ هوه بالفعل مدير
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
$IDaland = str_replace('رفع مدير ','',$text);
if ($text =="رفع مدير $IDaland" and preg_match('/([0-9])/i',$IDaland) and !in_array($IDaland,$manger)){
$IDaland= str_replace('رفع مدير ','',$text);
$IDalandID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDaland"))->result->username;
$IDalandNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDaland"))->result->first_name;
	if($settings["lock"]["rfaabot"] == "مقفول"){
			file_put_contents("data/manger/$chat_id.txt",$IDaland . "\n" , FILE_APPEND);
			file_put_contents("data/manger/$chat_id/mange.txt" , " *𓆩* [" . "@". $IDalandID ."] *𓆪* " . "»" . " *𓆩* `". $IDaland ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$IDalandNAME](tg://user?id=$IDaland) 」 
𖠮︙تم ترقية ليصبح مدير
"
,'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
$IDaland = str_replace('رفع مدير ','',$text);
if ($text =="رفع مدير $IDaland" and preg_match('/([0-9])/i',$IDaland) and in_array($IDaland,$manger)){
$IDaland= str_replace('رفع مدير ','',$text);
$IDalandID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDaland"))->result->username;
$IDalandNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDaland"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$IDalandNAME](tg://user?id=$IDaland) 」 
𖠮︙ هوه بالفعل مدير
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
$IDaland = str_replace('تنزيل مدير ','',$text);
if ($text =="تنزيل مدير $IDaland" and preg_match('/([0-9])/i',$IDaland) and in_array($IDaland,$manger)){
$IDaland= str_replace('تنزيل مدير ','',$text);
$IDalandID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDaland"))->result->username;
$IDalandNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDaland"))->result->first_name;
	$IDaland_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($IDaland,"",$IDaland_info);
	$str2 = str_replace(" *𓆩* [" . "@". $IDalandID ."] *𓆪* " . "»" . " *𓆩* `". $IDaland ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
𖠮︙ العضو 彡「 [$IDalandNAME](tg://user?id=$IDaland) 」 
𖠮︙تم تنزيله من قائمة المدراء
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$IDaland = str_replace('تنزيل مدير ','',$text);
if ($text =="تنزيل مدير $IDaland" and preg_match('/([0-9])/i',$IDaland) and !in_array($IDaland,$manger)){
$IDaland= str_replace('تنزيل مدير ','',$text);
$IDalandID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDaland"))->result->username;
$IDalandNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDaland"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$IDalandNAME](tg://user?id=$IDaland) 」 
𖠮︙ ليس مدير ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المدراء" ){
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ بواسطة 彡「 [$first_name](tg://user?id=$from_id) 」 
𖠮︙ تم مسح قائمة المدراء
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير"  and in_array($re_id,$manger)){
	$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙ تم تنزيله من قائمة المدراء
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير" and !in_array($re_id,$manger)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙ ليس مدير ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المدراء" || $text == "قائمه المدراء" and $mangers_info != NULL and $mangers_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"𖠮︙اليك قائمة 彡 المدراء
$mangers_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المدراء" ||  $text == "قائمه المدراء" and $mangers_info == NULL || $mangers_info == " " || $mangers_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ عزيزي 彡「 [$first_name](tg://user?id=$from_id) 」 
𖠮︙ لايوجد اي مدراء حاليأ
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$AUBaland) || in_array($from_id,$matrxx) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {
if($rt && $text == "رفع ادمن" or $rt && $text == "اد" and $text==$settings["information"]["admi"]  and !in_array($re_id,$admin_user)){
	if($settings["lock"]["rfaabot"] == "مقفول"){
			file_put_contents("data/admin_user/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/admin_user/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙ تم ترقية ليصبح ادمن
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($rt && $text == "رفع ادمن" or $rt && $text == "اد" and $text==$settings["information"]["admi"] and in_array($re_id,$admin_user)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙ هوه بالفعل ادمن
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
$IDTIGER = str_replace('رفع ادمن ','',$text);
if ($text =="رفع ادمن $IDTIGER" and preg_match('/([0-9])/i',$IDTIGER) and !in_array($IDTIGER,$admin_user)){
$IDTIGER= str_replace('رفع ادمن ','',$text);
$TIGERID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDTIGER"))->result->username;
$TIGERNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDTIGER"))->result->first_name;
	if($settings["lock"]["rfaabot"] == "مقفول"){
			file_put_contents("data/admin_user/$chat_id.txt",$IDTIGER . "\n" , FILE_APPEND);
			file_put_contents("data/admin_user/$chat_id/mange.txt" , " *𓆩* [" . "@". $TIGERID ."] *𓆪* " . "»" . " *𓆩* `". $IDTIGER ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$TIGERNAME](tg://user?id=$IDTIGER) 」 
𖠮︙ تم ترقية ليصبح ادمن
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$IDTIGER = str_replace('رفع ادمن ','',$text);
if ($text =="رفع ادمن $IDTIGER" and preg_match('/([0-9])/i',$IDTIGER) and in_array($IDTIGER,$admin_user)){
$IDTIGER= str_replace('رفع ادمن ','',$text);
$TIGERID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDKLOS"))->result->username;
$TIGERNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDKLOS"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$TIGERNAME](tg://user?id=$IDTIGER) 」 
𖠮︙ هوه بالفعل ادمن
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}

$IDTIGER = str_replace('تنزيل ادمن ','',$text);
if ($text =="تنزيل ادمن $IDTIGER" and preg_match('/([0-9])/i',$IDTIGER) and in_array($IDTIGER,$admin_user)){
$IDTIGER= str_replace('تنزيل ادمن ','',$text);
$TIGERID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDTIGER"))->result->username;
$TIGERNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDTIGER"))->result->first_name;
	$IDTIGER_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($IDTIGER,"",$IDTIGER_info);
	$str2 = str_replace(" *𓆩* [" . "@". $TIGERID ."] *𓆪* " . "»" . " *𓆩* `". $IDTIGER ."` *𓆪* ","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
𖠮︙ العضو 彡「 [$TIGERNAME](tg://user?id=$IDTIGER) 」 
𖠮︙تم تنزيله من قائمة الادمنيه
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$IDTIGER = str_replace('تنزيل ادمن ','',$text);
if ($text =="تنزيل ادمن $IDTIGER" and preg_match('/([0-9])/i',$IDTIGER) and !in_array($IDTIGER,$admin_user)){
$IDTIGER= str_replace('تنزيل ادمن ','',$text);
$TIGERID = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDTIGER"))->result->username;
$TIGERNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDTIGER"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$TIGERNAME](tg://user?id=$IDTIGER) 」 
𖠮︙هوه ليس ادمن ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if( $text =="مسح الادمنيه" or $text == "مسح الادمنية"){
file_put_contents("data/admin_user/$chat_id.txt","");
file_put_contents("data/admin_user/$chat_id.txt","");
file_put_contents("data/admin_user/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ بواسطة 彡「 [$first_name](tg://user?id=$from_id) 」 
𖠮︙تم مسح قائمة الادمنيه
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if( $text =="رفع الادمنيه" or $text == "رفع الادمنية"){
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg  = explode("\n",$cmg);
$cmsg = count($cmssg);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙ تم رفع الادمنيه بنجاح
𖠮︙ عدد الادمنيه تم رفعهم 彡 $cmsg
",
'reply_to_message_id'=>$message_id,
 ]);
	}
}

if($re and $text == "تنزيل ادمن" and in_array($re_id,$admin_user)){
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙ تم تنزيله من قائمة الادمنيه
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل ادمن"  and !in_array($re_id,$admin_user)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙ هوه ليس ادمن ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "الادمنيه" || $text == "قائمه الادمنيه" and $admin_users_info != NULL and $admin_users_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"𖠮︙اليك قائمة 彡 الادمنيه
$admin_users_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "الادمنيه" ||  $text == "قائمه الادمنيه" and $admin_users_info == NULL || $admin_users_info == " " || $admin_users_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ عزيزي 彡「 [$first_name](tg://user?id=$from_id) 」 
𖠮︙ لايوجد اي ادمن حاليأ
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$AUBaland) || in_array($from_id,$admin_user) || in_array($from_id,$manger) or in_array($from_id,$matrxx) or in_array($from_id,$eri) || in_array($from_id,$nazar)) {
if($rt && $text == "رفع مميز" or $rt && $text == "م" and $text==$settings["information"]["mmaz"] and !in_array($re_id,$mmyaz)){
	if($settings["lock"]["rfaabot"] == "مقفول"){
			file_put_contents("data/mmyaz/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/mmyaz/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙تم ترقيه ليصبح مميز
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($rt && $text == "رفع مميز" or $rt && $text == "م"  and $text==$settings["information"]["mmaz"] and in_array($re_id,$mmyaz)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙هوه بالفعل مميز 
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
$IDKLOS = str_replace('رفع مميز ','',$text);
if ($text =="رفع مميز $IDKLOS" and preg_match('/([0-9])/i',$IDKLOS) and !in_array($IDKLOS,$mmyaz)){
$IDKLOS= str_replace('رفع مميز ','',$text);
$IDARLOSA = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDKLOS"))->result->username;
$IDARLOSNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDKLOS"))->result->first_name;
	if($settings["lock"]["rfaabot"] == "مقفول"){
			file_put_contents("data/mmyaz/$chat_id.txt",$IDKLOS . "\n" , FILE_APPEND);
			file_put_contents("data/mmyaz/$chat_id/mange.txt" , " *𓆩* [" . "@". $IDARLOSA ."] *𓆪* " . "»" . " *𓆩* `". $IDKLOS ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$IDARLOSNAME](tg://user?id=$IDKLOS) 」 
𖠮︙تم ترقيه ليصبح مميز
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$IDKLOS = str_replace('رفع مميز ','',$text);
if ($text =="رفع مميز $IDKLOS" and preg_match('/([0-9])/i',$IDKLOS) and in_array($IDKLOS,$mmyaz)){
$IDKLOS= str_replace('رفع مميز ','',$text);
$IDARLOSA = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDKLOS"))->result->username;
$IDARLOSNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDKLOS"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$IDARLOSNAME](tg://user?id=$IDKLOS) 」 
𖠮︙هوه بالفعل مميز 
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
$IDKLOS = str_replace('تنزيل مميز ','',$text);
if ($text =="تنزيل مميز $IDKLOS" and preg_match('/([0-9])/i',$IDKLOS) and in_array($IDKLOS,$mmyaz)){
$IDKLOS= str_replace('تنزيل مميز ','',$text);
$IDARLOSA = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDKLOS"))->result->username;
$IDARLOSNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDKLOS"))->result->first_name;
	$IDKLOS_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($IDKLOS,"",$IDKLOS_info);
	$str2 = str_replace(" *𓆩* [" . "@". $IDARLOSA ."] *𓆪* " . "»" . " *𓆩* `". $IDKLOS ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
𖠮︙ العضو 彡「 [$IDARLOSNAME](tg://user?id=$IDKLOS) 」 
𖠮︙ تم تنزيله من قائمة المميزين
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$IDKLOS = str_replace('تنزيل مميز ','',$text);
if ($text =="تنزيل مميز $IDKLOS" and preg_match('/([0-9])/i',$IDKLOS) and !in_array($IDKLOS,$mmyaz)){
$IDKLOS= str_replace('تنزيل مميز ','',$text);
$IDARLOSA = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDKLOS"))->result->username;
$IDARLOSNAME = json_decode(file_get_contents("http://api.telegram.org/bot$tk/getChat?chat_id=$IDKLOS"))->result->first_name;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$IDARLOSNAME](tg://user?id=$IDKLOS) 」 
𖠮︙هوه ليس مميز ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المميزين" ){
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ بواسطة 彡「 [$first_name](tg://user?id=$from_id) 」 
𖠮︙ تم مسح قائمة المميزين
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل مميز"   and in_array($re_id,$mmyaz)){
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙ تم تنزيله من قائمة المميزين
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل مميز" and !in_array($re_id,$mmyaz)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙وه ليس مميز ليتم تنزيله
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المميزين" || $text == "قائمه المميزين" and $mmyazs_info != NULL and $mmyazs_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"𖠮︙ اليك قائمة 彡 المميزين
$mmyazs_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المميزين" ||  $text == "قائمه المميزين" and $mmyazs_info == NULL || $mmyazs_info == " " || $mmyazs_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ عزيزي 彡「 [$first_name](tg://user?id=$from_id) 」 
𖠮︙ لايوجد اي مميز حاليأ
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($rt && $text == "تنزيل الكل" or $rt && $text == "تنزيل من كل الرتب" and $text==$settings["information"]["tkal"]){
if($status == "creator" || in_array($from_id,$Dev) || in_array($from_id,$eri) or in_array($from_id,$developer)) {
$re_id_info = file_get_contents("data/nazar/$chat_id.txt");
	$mdrs = file_get_contents("data/nazar/$chat_id/nazr.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/nazar/$chat_id.txt",$str);
	file_put_contents("data/nazar/$chat_id/nazr.txt",$str2);
	$re_id_info = file_get_contents("data/matrxx/$chat_id.txt");
	$mdrs = file_get_contents("data/matrxx/$chat_id/crlo.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/matrxx/$chat_id.txt",$str);
	file_put_contents("data/matrxx/$chat_id/crlo.txt",$str2);
	$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙العضو ←  [$re_name](tg://user?id=$re_id)
𖠮︙تم تنزيله من ← ⤈
~ ( المنشيئن الاساسين • المنشئ • المدراء • الادمنيه • المميزين ) ~
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($rt && $text == "تنزيل الكل" or $rt && $text == "تنزيل من كل الرتب" and $text==$settings["information"]["tkal"]){
if(in_array($from_id,$nazar)) {
	$re_id_info = file_get_contents("data/matrxx/$chat_id.txt");
	$mdrs = file_get_contents("data/matrxx/$chat_id/crlo.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/matrxx/$chat_id.txt",$str);
	file_put_contents("data/matrxx/$chat_id/crlo.txt",$str2);
	$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙العضو ←  [$re_name](tg://user?id=$re_id)
𖠮︙تم تنزيله من ← ⤈
~ (  المنشئ • المدراء • الادمنيه • المميزين ) ~
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($rt && $text == "تنزيل الكل" or $rt && $text == "تنزيل من كل الرتب" and $text==$settings["information"]["tkal"]){
if(in_array($from_id,$matrxx)) {
	$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙العضو ←  [$re_name](tg://user?id=$re_id)
𖠮︙تم تنزيله من ← ⤈
~ ( المدراء • الادمنيه • المميزين ) ~
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($rt && $text == "تنزيل الكل" or $rt && $text == "تنزيل من كل الرتب" and $text==$settings["information"]["tkal"]){
if(in_array($from_id,$manger)) {
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙العضو ←  [$re_name](tg://user?id=$re_id)
𖠮︙تم تنزيله من ← ⤈
~ (  الادمنيه • المميزين ) ~
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" and in_array($from_id,$Dev) and in_array($from_id,$eri) and in_array($from_id,$matrxx) and in_array($from_id,$nazar)){
if($text == "مسح المرفوعين" or $text == "مسح الكل" or $text == "تنزيل الكل"){
$CMM = count($mmyazs)-1;
$CM = count($mangers)-1;
$CA = count($admin_users)-1;
$CALL = $CA + $CM + $CMM;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ بواسطـة $info
ـــ ـــ ـــ ــــ ــــ 
𖠮︙تم حذف {$CA} من الادمنيه
𖠮︙تم حذف {$CM} من المدراء
𖠮︙تم حذف {$CMM} من المميزين
ـــ ـــ ـــ ــــ ــــ 
𖠮︙ تم حذف {$CALL} من المرفوعين
𖠮︙تم حذف الكل بنجاح 
✓
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id/mange.txt" ,"");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id/mange.txt" ,"");
file_put_contents("data/admin_user/$chat_id.txt","");
file_put_contents("data/admin_user/$chat_id/mange.txt","");
}
}

#tag
if ($settings["lock"]["tagg"] == "مقفول"){
if (strstr($text ,"#") == true or strstr($caption,"#") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
#link
$link = file_get_contents('link.json');
if($link == "✔"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if (strstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https://") == true or strstr($text,"://") == true or strstr($text,"wWw.") == true or strstr($text,"WwW.") == true or strstr($text,"T.me/") == true or strstr($text,"WWW.") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id,]);}}}
#photo
if($settings["lock"]["photo"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if ($update->message->photo){  
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}
# inline
$inline = json_decode(file_get_contents('php://input'),true);
if($settings["lock"]["inline"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if(isset($inline['message']['reply_markup']['inline_keyboard'][0][0]['text'])){
bot('deleteMessage',['chat_id'=>$message->chat->id,'message_id'=>$message->message_id]);}}}
#gif
if($settings["lock"]["gif"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev)  && !in_array($from_id,$mmyaz) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if ($update->message->document){  
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}
# document
if($settings["lock"]["document"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if ($update->message->document){  
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}
# video
if($settings["lock"]["video"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev)  && !in_array($from_id,$mmyaz) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if ($update->message->video){  
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}
# ar
$abn = (strstr($text,"ض") == true or strstr($text,"ص") == true or  strstr($text,"ق") == true or strstr($text,"ف") == true or  strstr($text,"غ") == true or strstr($text,"ع") == true or  strstr($text,"ه") == true or  strstr($text,"خ") == true or strstr($text,"ح") == true or  strstr($text,"ج") == true or  strstr($text,"ش") == true or  strstr($text,"س") == true or  strstr($text,"ي") == true or strstr($text,"ب") == true or  strstr($text,"ل") == true or strstr($text,"ا") == true or  strstr($text,"ت") == true or  strstr($text,"ن") == true or strstr($text,"م") == true or  strstr($text,"ك") == true or  strstr($text,"ظ") == true or  strstr($text,"ط") == true or strstr($text,"ذ") == true or  strstr($text,"د") == true or strstr($text,"ز") == true or  strstr($text,"ر") == true or  strstr($text,"و") == true or strstr($text,"ة") == true or  strstr($text,"ث") == true or  strstr($text,"ؤ") == true or  strstr($text,"ء") == true or  strstr($text,"ى") == true or strstr($text,"ئ") == true or  strstr($text,"آ") == true or strstr($text,"إ") == true or  strstr($text,"أ") == true);
if($abn && $settings["lock"]["ar"]=="مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev)  && !in_array($from_id,$mmyaz) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}}
# xnxx
$xnxx = (strstr($text,"كس") == true or strstr($text,"كسخت") == true or  strstr($text,"عير") == true or strstr($text,"بعضرك") == true or  strstr($text,"بن كحبه") == true or strstr($text,"كحبه") == true or  strstr($text,"قحبه") == true or  strstr($text,"شرفك") == true or strstr($text,"بناموسك") == true or  strstr($text,"ج") == true or  strstr($text,"سكسي") == true or  strstr($text,"بلاعة") == true or  strstr($text,"بلاعه") == true);
if($xnxx && $settings["lock"]["xnxx"]=="مقفول"){
if ($status !=  creator  && !in_array($from_id,$Dev)  && !in_array($from_id,$mmyaz) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}}
# en
if ($settings["lock"]["en"] == "مقفول"){
if (strstr($text,"q") == true  or strstr($text,"w") == true or strstr($text,"e") == true  or  strstr($text,"r") == true   or strstr($text,"t") == true or  strstr($text,"y") == true  or strstr($text,"u") == true or strstr($text,"i") == true  or  strstr($text,"o") == true   or strstr($text,"p") == true or strstr($text,"a") == true  or strstr($text,"s") == true or strstr($text,"d") == true  or  strstr($text,"f") == true   or strstr($text,"g") == true or  strstr($text,"h") == true  or strstr($text,"j") == true or strstr($text,"k") == true  or  strstr($text,"l") == true   or strstr($text,"z") == true or strstr($text,"x") == true or strstr($text,"c") == true  or  strstr($text,"v") == true   or strstr($text,"b") == true or  strstr($text,"n") == true  or strstr($text,"m") == true or strstr($text,"Q") == true  or  strstr($text,"X") == true   or strstr($text,"C") == true or strstr($text,"F") == true  or strstr($text,"G") == true or strstr($text,"H") == true  or  strstr($text,"A") == true   or strstr($text,"L") == true or  strstr($text,"O") == true  or strstr($text,"P") == true ) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev)  && !in_array($from_id,$mmyaz) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
#fr
$abn = (strstr($text,"کیری") == true or strstr($text,"خوبی") == true or strstr($text,"چون") == true or  strstr($text,"پسر") == true or strstr($text,"کوس") == true or  strstr($text,"کیر") == true or  strstr($text,"گور") == true or strstr($text,"بی ناموس") == true or  strstr($text,"پ") == true or  strstr($text,"دخترا") == true or  strstr($text,"کونی") == true or  strstr($text,"کسکش") == true or strstr($text,"ژ") == true or  strstr($text,"چ") == true or strstr($text,"ک") == true or  strstr($text,"گ") == true);
if($abn && $settings["lock"]["fr"]=="مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev)  && !in_array($from_id,$mmyaz) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}}
# edit 
if($editgetsettings["lock"]["edit"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev)  && !in_array($from_id,$mmyaz) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if ($update->edited_message->text){  
bot('deletemessage',['chat_id'=>$chat_edit_id,'message_id'=>$message_edit_id]);}}}
# contact
if ($settings["lock"]["contact"] == "مقفول"){
if($update->message->contact){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev)  && !in_array($from_id,$mmyaz) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
# edit media
$edit_media  = $update->edited_message->message_id;
$edit_chat_id_media = $update->edited_message->chat->id;
$edit_medias  = $update->edited_message->text;
$video_media = $update->edited_message->video;
$voice_media = $update->edited_message->voice;
$photo_media = $update->edited_message->photo;
$document_media = $update->edited_message->document;
$audio_media = $update->edited_message->audio;
$location_media = $update->edited_message->location;
if ($editgetsettings["lock"]["editmd"] == "مقفول"){
if ( $you != 'creator' && $you != 'administrator' && $edit_for_id != $Dev && $edit_for_id != $manger && $edit_for_id != $admin_user && $edit_for_id != $developer && $edit_for_id != $matrxx && $edit_for_id != $eri && $edit_for_id != $nazar){
if(edit_medias || $photo_media || $document_media || $video_media || $voice_media || $audio_media || $location_media || preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$edit_medias) ){
bot('deleteMessage',['chat_id'=>$edit_chat_id_media,'message_id'=>$edit_media,]);}}}

// username 
if ($settings["lock"]["username"] == "مقفول"){
if (strstr($text ,"@") == true or  strstr($caption,"@") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev)  && !in_array($from_id,$mmyaz) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}}}}
// audio
if ($settings["lock"]["audio"] == "مقفول"){
if($update->message->audio){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev)  && !in_array($from_id,$mmyaz) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}}}}
// voice 
if ($settings["lock"]["voice"] == "مقفول"){
if($update->message->voice){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev)  && !in_array($from_id,$mmyaz) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}}}}
if ($settings["lock"]["markdown"] == "مقفول"){
if($update->message->entities){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}}}}
if($settings["lock"]["bot"] == "مقفول"){
	if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev)  && !in_array($from_id,$mmyaz) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if ($message->new_chat_member->is_bot) {
$hardmodebot = $settings["information"]["hardmodebot"];
if($hardmodebot == "مقفول"){
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$update->message->new_chat_member->id
]);
}
else
{
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$update->message->new_chat_member->id
]);
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id
]);
}}}}
// sticker is_sticker
if ($settings["lock"]["sticker"] == "مقفول"){
if($update->message->sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev)  && !in_array($from_id,$mmyaz) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id]);}}}}
######
if ($settings["lock"]["is_sticker"] == "مقفول"){
if($update->message->sticker->is_sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev)  && !in_array($from_id,$mmyaz) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}}}}
######
date_default_timezone_set('Asia/Baghdad');
$as = date('i')+30; 
mkdir("data/$chat_id");
mkdir("data/$chat_id/spam");
if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$manger) || in_array($from_id,$developer) ) {
if(strpos($text,"ضع تكرار") !== false or strpos($text,"وضع تكرار") !== false){
$spamx = str_replace(["ضع تكرار ","وضع تكرار "],"",$text);
if(is_numeric($spamx)){
if($spamx > 0){
file_put_contents("data/$chat_id/spam/spamxe.txt",$spamx);
file_put_contents("data/$chat_id/spam/tim.txt",$as); 
var_dump(bot('sendMessage',[ 
'chat_id' => $chat_id,
'text' =>"⌁⁞ تم وضع التكرار 
⌁⁞ العدد في المجموعه 彡 {$spamx}
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id' => $message->message_id,
]));
}}}}
$weplus = 1;
$timex = date("Y-m-d-h-i-A");
$timex = str_replace("am", "", $timex);
$NBots = file_get_contents("data/$chat_id/spam/$from_id/$timex.txt");
$timex_spam = $NBots + 1;
mkdir("data/$chat_id/spam/$from_id");
file_put_contents("data/$chat_id/spam/$from_id/$timex.txt",$timex_spam);
$tkrar = file_get_contents("data/$chat_id/spam/$from_id/$timex.txt");
$nomtkrar = file_get_contents("data/$chat_id/spam/spamxe.txt");
if($settings["lock"]["spam"] == "مقفول️"){
	if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev)  && !in_array($from_id,$mmyaz) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if($tkrar >=$nomtkrar) {
var_dump(bot('restrictChatMember',[
'user_id'=>$from_id,   
'chat_id'=>$chat_id,
'can_post_messages'=>false,
'until_date'=>time()+$weplus*1600,
]));
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"⌁⁞ عزيزي - [$first_name](tg://user?id=$from_id)\n⌁⁞ تم تقيدك بسبب تكرار ",'parse_mode'=>"markdown",
]);}}}
//botk
if($settings["lock"]["botk"] == "مقفول️"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if ($message->new_chat_member->is_bot) {
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
}
}
}
// forward
if ($settings["lock"]["forward"] == "مقفول"){
if($update->message->forward_from | $update->message->forward_from_chat){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev)  && !in_array($from_id,$mmyaz) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}}}}
// muteall
if ($settings["lock"]["mute_all"] == "مقفول"){
if($update->message){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev)  && !in_array($from_id,$mmyaz) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
}
}
// replay
if ($settings["lock"]["reply"] == "مقفول"){
if($update->message->reply_to_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev)  && !in_array($from_id,$mmyaz) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message->message_id
 ]);
 }
}
}
}
// tg
if ($settings["lock"]["tgservic"] == "مقفول"){
if($update->message->new_chat_member | $update->message->new_chat_photo | $update->message->new_chat_title | $update->message->left_chat_member | $update->message->pinned_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
 bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message->message_id
 ]);
 }
}
}
}
// text
if ($settings["lock"]["text"] == "مقفول"){
if($update->message->text){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev)  && !in_array($from_id,$mmyaz) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message->message_id
 ]);
 }
}
}
}
// video note
if ($settings["lock"]["video_msg"] == "مقفول"){
if($update->message->video_note){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev)  && !in_array($from_id,$mmyaz) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message->message_id
 ]);
 }
}
}
}



if($settings["information"]["add"] == "مقفول") {
if($newchatmemberid == true){
$add = $settings["addlist"]["$from_id"]["add"];
$addplus = $add +1;
$settings["addlist"]["{$from_id}"]["add"]="$addplus";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}

//game
if($settings["lock"]["game"] == "مقفول"){
if($update->message->game){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id
 ]);
}
}
}
}
// location
if ($settings["lock"]["location"] == "مقفول"){
if($update->message->location){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id
 ]);
}
}
}
}
function check_filter($str){
global $filterget;
foreach($filterget as $d){
if (mb_strpos($str, $d) !== false) {
return true;
}
}
}
//linkk
if($settings["lock"]["linkk"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if (strstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https://") == true or strstr($text,"://") == true or strstr($text,"wWw.") == true or strstr($text,"WwW.") == true or strstr($text,"T.me/") == true or strstr($text,"WWW.") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id,]);
bot('kickChatMember',['user_id'=>$from_id,'chat_id'=>$chat_id,]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🗣┇عزيزي - [$first_name](tg://user?id=$from_id)\n💢️┇ممنوع نشر روابط هون تم طردك",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,]);}}}
//linkw
if($settings["lock"]["linkw"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$developer) && !in_array($from_id,$matrxx) && !in_array($from_id,$eri) && !in_array($from_id,$nazar)){
if (strstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https://") == true or strstr($text,"://") == true or strstr($text,"wWw.") == true or strstr($text,"WwW.") == true or strstr($text,"T.me/") == true or strstr($text,"WWW.") == true or strstr($text,"https://") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',['chat_id'=>$chat_id,'message_id'=>$message_id,]);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"🗣┇عزيزي - [$first_name](tg://user?id=$from_id)\n💢️┇ممنوع نشر روابط هون ",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,]);}}}

if($text =="قفل الروابط" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم قفـل الروابط
𖠮︙خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
file_put_contents('link.json',✔);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الروابط" or $text =="فتح روابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الروابط بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
file_put_contents('link.json',✖️);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="قفل التكرار"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم قفـل التكرار
𖠮︙خاصية 彡 التقييد
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح التكرار"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح التكرار بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if (strpos($text , "قفل الدردشه لمدة ") !== false or strpos($text , "قفل الدردشة لمدة ") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$developer)) {
	$num = str_replace(['قفل الدردشه لمدة ','قفل الدردشة لمدة'],'',$text);
	$add = $settings["information"]["added"];
if ($add == true) {
	if ($num <= 100000 && $num >= 1){
		date_default_timezone_set('Asia/baghdaf');
        $date1 = date("h:i:s");
        $date2 = isset($_GET['date']) ? $_GET['date'] : date("h:i:s");
        $next_date = date('h:i:s', strtotime($date2 ."+$num Minutes"));
			  bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"⌁⁞ اهلا عزيزي ،  👨‍✈️•
⌯⁞ تم قفل الدردشة لمدة $num دقيقة ، ✅ •

⌯⁞ الوقت الان ، $date1 🕑 •
⌯⁞ وقت فتح الدردشة ، $next_date 🕒 •
✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["mute_all_time"]="$next_date";
$settings["lock"]["mute_all_time"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings); 
   }else{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"خطا ⚠️
➖➖➖➖➖➖
- تستطيع فقط الاختيار من دقيقة الى 1000 دقيقة ، ❌ •
$date1
$nextdata",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if ($settings["lock"]["mute_all_time"] == "مقفول"){
$locktime = $settings["information"]["mute_all_time"];
date_default_timezone_set('Asia/baghdad');
$date1 = date("h:i:s");
if($date1 < $locktime){
if($update->message){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
else
{
$settings["lock"]["mute_all_time"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
}
if($text =="قفل الرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم قفـل الرد
𖠮︙خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["reply"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الرد" or $text =="فتح رد"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الرد بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["reply"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="قفل الفارسيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم قفـل الفارسيه
𖠮︙خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["fr"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الفارسيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الفارسيه بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["fr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="قفل الفشار" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم قفـل الفشار
𖠮︙خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["xnxx"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الفشار" ){
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الفشار بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["xnxx"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text =="قفل الروابط بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم قفـل الروابط
𖠮︙خاصية 彡 الطرد
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkk"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الروابط بالطرد" or $text =="فتح روابط بالطرد"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الروابط بالطرد بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text =="قفل الروابط بالتحذير" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الروابط
⌯⁞ خاصية 彡 التحذير
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkw"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الروابط بالتحذير" or $text =="فتح روابط بالتحذير"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx)  or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الروابط بالتحذير بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkw"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text =="قفل الانلاين" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الاونلاين
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["inline"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الانلاين" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الاونلاين بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["inline"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text =="قفل الانكليزيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الانكليزيه
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الانكليزيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الانكليزيه بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text =="قفل البوتات بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل البوتات
⌯⁞ خاصية 彡 بالطرد
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text =="فتح البوتات بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح البوتات بالطرد بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// lock photo
elseif($text =="قفل الصور" or $text =="قفل صور"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الصور
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الصور" or $text =="فتح صور"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الصور بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["photo"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="قفل الملصقات المتحركة" or $text =="قفل الملصقات المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل ملصقات المتحركه
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["is_sticker"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الملصقات المتحركة" or $text =="فتح الملصقات المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الملصقات المتحركه بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["is_sticker"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// gif
elseif($text =="قفل المتحركة" or $text =="قفل المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل المتحركه
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["gif"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح المتحركة" or $text =="فتح المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح المتحركه بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="قفل الماركدوان" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الماركدوان
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["markdown"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الماركدوان" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الماركدوان بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdown"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="قفل العربيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل العربيه
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["ar"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح العربيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح العربيه بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// document
elseif($text =="قفل الملفات" or $text =="قفل ملفات،"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الملفات
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["document"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الملفات" or $text =="فتح ملفات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الملفات بنجاح
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["document"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// video
elseif($text =="قفل الفيديو" or $text =="قفل فيديو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الفيديو
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الفيديو" or $text =="فتح فيديو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الفيديو بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// edit
elseif($text =="قفل التعديل" or $text =="قفل تعديل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل التعديل
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["edit"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح التعديل" or $text =="فتح تعديل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح التعديل بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["edit"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// game
elseif($text =="قفل الالعاب" or $text =="قفل العاب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الالعاب
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["game"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الالعاب" or $text =="فتح العاب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الالعاب بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 $settings["lock"]["game"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// location
elseif($text =="قفل المواقع" or $text =="قفل الموقع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل المواقع
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["location"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح المواقع" or $text =="فتح الموقع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح المواقع بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["location"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// contact
elseif($text =="قفل الجهات" or $text =="قفل جهات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الجهات
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["contact"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الجهات" or $text =="فتح جهات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الجهات بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["contact"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="قفل تعديل الميديا" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل التعديل الميديا
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["editmd"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح تعديل الميديا" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح تعديل الميديا بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["editmd"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// tag
elseif($text =="قفل التاك" or $text =="قفل الهاش تاك"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل التاك
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tagg"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح التاك" or $text =="فتح الهاش تاك"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح التاك بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tagg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// username 
elseif($text =="قفل المعرفات" or $text =="قفل المعرف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل المعرفات
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["username"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح المعرفات" or $text =="فتح المعرف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح المعرفات بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["username"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// audio
elseif($text =="قفل الصوت" or $text =="قفل الموسيقى"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الصوت
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["audio"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الصوت" or $text =="فتح صوت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الصوت بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["audio"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="قفل الاشعارات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الاشعارات
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tgservic"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الاشعارات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الاشعارات بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tgservic"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// video note
elseif($text =="قفل بصمة الفيديو" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل بصمة الفيديو
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video_msg"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح بصمة الفيديو" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح بصمة الفيديو بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video_msg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// lock bots
elseif ($text== "قفل البوتات" or $text== "قفل بوتات" or $text== "قفل البوت") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل البوتات
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bot"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif ($text== "فتح البوتات" or $text== "فتح بوتات"or $text== "فتح البوت") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح البوتات بنجاح
 ",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bot"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text =="قفل البصمات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل البصمات
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["voice"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح البصمات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح البصمات بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["voice"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text =="قفل الاباحي" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الباحي
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["xi"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الاباحي" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الاباحي بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["xi"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// sticker
elseif($text =="قفل الملصقات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الملصقات
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sticker"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الملصقات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الملصقات بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sticker"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// forward
elseif($text =="قفل التوجيه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل التوجيه
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["forward"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح التوجيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح التوجيه بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["forward"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// fosh
elseif($text =="قفل السيئات" or $text =="قفل سيئات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل السيئات
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["fosh"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح السيئات" or $text =="فتح سيئات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح السيئات بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["fosh"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="قفل الممنوعات" or $text =="قفل ممنوعات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الممنوعات
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["mamnoat"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="فتح الممنوعات" or $text =="فتح ممنوعات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الممنوعات بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["mamnoat"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif( $text =="قفل الكلايش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
$pluscharacter = $settings["information"]["pluscharacter"];
$downcharacter = $settings["information"]["downcharacter"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الكلايش
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lockcharacter"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif( $text =="فتح الكلايش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الكلايش بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lockcharacter"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if( $text =="قفل الدردشه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم قفـل الدردشه
⌯⁞ خاصية 彡 المسح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["text"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif( $text =="فتح الدردشه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الدردشه بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["text"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if( $text =="تفعيل المنادات" or $text == "تفعيل نادي"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم تفعيل المنادات
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["WOL"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif( $text =="تعطيل المنادات" or $text == "تفعيل نادي"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تفعيل المنادات بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["WOL"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="قفل تحويل الصيغ" or $text =="قفل الصيغ"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$AUBaland) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
⌁⁞ تم قفل تحويل الصيغ  
⌁⁞ بواسطة *[$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sigmidia"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}}
elseif($text =="فتح تحويل الصيغ" or $text =="فتح الصيغ"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$AUBaland) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح تحويل الصيغ بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sigmidia"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}}
elseif($text =="قفل تحميل الفديو" or $text =="قفل تحميل الميديا" or $text == "قفل التحميل"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$AUBaland) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
⌁⁞ تم قفل تحميل الميديا  
⌁⁞ بواسطة* [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["downloadmid"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}}
elseif($text =="فتح تحميل الفديو" or $text =="فتح تحميل الميديا" or $text == "فتح التحميل"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$AUBaland) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح تحميل الفيديو بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["downloadmid"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}}

elseif( $text =="تعطيل الايدي" or $text == "تعطيل الايدي بالصوره" or $text == "تعط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تعطيل الايدي بالصوره
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["iduser"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="تفعيل الايدي" or $text == "تفعيل الايدي بالصوره" or $text == "تفع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx)  or in_array($from_id,$AUBaland) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تفعيل الايدي بالصوره
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["iduser"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if ( $text =="تفعيل ردود البوت" or $text == "تفعيل ردود بوت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تفعيل ردود البوت
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rdona"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if ( $text =="تعطيل ردود البوت" or $text == "تعطيل ردود بوت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تعطيل ردود البوت
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rdona"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text =="تفعيل ردود المدير" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تفعيل ردود المدير
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rdg"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="تعطيل ردود المدير" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تعطيل ردود المدير
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rdg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if ( $text =="تفعيل كشف الحب" or $text == "تفعيل نبسة الحب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تفعيل امر كشف نسبة الحب
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["mylove"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if ( $text =="تعطيل كشف الحب" or $text == "تعطيل نسبة الحب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تعطيل امر كشف نسبة الحب
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["mylove"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif( $text =="تعطيل اطردني" or $text == "تعطيل امر اطردني"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تفعيل اطردني
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bannnnn"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="تفعيل اطردني" or $text == "تفعيل امر اطردني"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ بواسطه 彡 [$first_name](tg://user?id=$from_id)
⌯⁞ تم تفعيل اطردني
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bannnnn"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}

elseif($rt && $text== "حذف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) { bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$re_msgid
 ]);
 bot('deletemessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id
 ]);
 }
}
// rmsg
elseif ( strpos($text, '/rmsg') !== false or strpos($text, 'تنظيف') !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$num = str_replace(['/rmsg ','تنظيف'],'',$text );
if ($num <= 300 && $num >= 1){
$add = $settings["information"]["added"];
if ($add == true) {
for($i=$message_id; $i>=$message_id-$num; $i--){
bot('deletemessage',[
 'chat_id' => $chat_id,
 'message_id' =>$i,
]);
}
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text' =>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم مسح رسائل المطلوبا ← $num
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>$inlinebutton,
]);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙البوت ليس مفعل قم بتفعيل البوت
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"𖠮︙عذرأ عزيزي لايمكنك تنظيف اكثر من ← 300",
'reply_markup'=>$inlinebutton,
]);
}
}
}
//setname
elseif (strpos($text, 'ضع اسم') !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$AUBaland) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {$newname= str_replace(['ضع اسم '],'',$text );
 bot('setChatTitle',[
 'chat_id'=>$chat_id,
 'title'=>$newname
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم وضع اسم لمجموعه ← $text
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
 }
}

if ($text =="تفعيل القوانين" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$AUBaland) || in_array($from_id,$developer) || in_array($from_id,$matrxx) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تفعيل القوانين بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["bbhi"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تعطيل القوانين" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$AUBaland) || in_array($from_id,$developer) || in_array($from_id,$matrxx) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تعطيل القوانين بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bbhi"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}

elseif($text =="تفعيل الرابط" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تفعيل الرابط بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["getlink"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="تعطيل الرابط" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تعطيل الرابط بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["getlink"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
$armofaddurl = $settings["information"]["addurl"];
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$eri) or in_array($from_id,$matrxx) or in_array($from_id,$nazar)){
if($text == "تعيين الرابط" or $text == "تعيين الرابط" or $text =="ضع رابط" or $text == "وضع رابط"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙عزيزي ← [$first_name](tg://user?id=$from_id)
𖠮︙قم بأرسال الرابط
",'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$settings["addkaddurl"]="$from_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
if($text and $settings["addkaddurl"] == $from_id){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$eri) or in_array($from_id,$matrxx) or in_array($from_id,$nazar)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تعين الرابط بنجاح
",'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$settings["information"]["addurl"]="$text";
$settings["addkaddurl"]="done";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text == "حذف الرابط" or $text == "مسح الرابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$eri) or in_array($from_id,$matrxx) or in_array($from_id,$nazar)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم حذف الرابط بنجاح
",
'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$settings["information"]["addurl"]="";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
$armofaddurl = $settings["information"]["addurl"];
if($text =="الرابط"){
if ($tc == 'group' | $tc == 'supergroup'){
$lockcmd = $settings["lock"]["getlink"];
if($lockcmd == "مقفول"){
$armofaddurl = $settings["information"]["addurl"];
if($armofaddurl ==null){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
$namegroup = $update->message->chat->title;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- Link group : 
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
$getlinkde",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
}}}}
$armofaddurl = $settings["information"]["addurl"];
if($text =="الرابط"){
if ($tc == 'group' | $tc == 'supergroup'){
$lockcmd = $settings["lock"]["getlink"];
if($lockcmd == "مقفول"){
$armofaddurl = $settings["information"]["addurl"];
if($armofaddurl !=null){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
$namegroup = $update->message->chat->title;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- Link group : 
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
$armofaddurl",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text == "الرابط" and $settings["lock"]["getlink"]=="مفتوح"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙عزيزي ← [$first_name](tg://user?id=$from_id)
𖠮︙الرابط معطل حاليأ
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}

$kock = file_get_contents("kock.txt");
$kocke = file_get_contents("kocke.txt");
if ($text == "وضع عدد التفعيل" or $text == "وضع شرط التفعيل" or $text == "🎭وضع عدد التفعيل" and in_array($from_id,$Dev)){
file_put_contents("kock.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙حسنأ عزيزي ارسل العدد المطلوب
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $kock =="nam" and in_array($from_id,$Dev)){
file_put_contents("kocke.txt",$text); 
file_put_contents("kock.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
𖠮︙ تم حفظ العدد 
𖠮︙عدد المجموعه المقبول للتفعيل - $text
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}

$sek = file_get_contents("sek.txt");
$sekk = file_get_contents("sekk.txt");
if ($text == "تفعيل بوت المطور" or $text == "🎭تفعيل بوت المطور" and in_array($from_id,$Dev)){
file_put_contents("sek.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙ حسنأ عزيزي - المطور
𖠮︙ ارسل (`نعم`) لتأكيد الامر
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text == "نعم" && $sek =="nam" and in_array($from_id,$Dev)){
file_put_contents("sekk.txt","للمطور"); 
file_put_contents("sek.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
𖠮︙ حسنأ عزيزي - المطور
𖠮︙الان اصبح وضع البوت 
𖠮︙ للمطور فقط
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
$sek = file_get_contents("sek.txt");
$sekk = file_get_contents("sekk.txt");
if ($text == "تفعيل بوت الخدمي" or $text == "🎭تفعيل بوت الخدمي" and in_array($from_id,$Dev)){
file_put_contents("sek.txt","namm");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙ حسنأ عزيزي - المطور
𖠮︙ارسل (`نعم`) لتأكيد الامر
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text == "نعم" && $sek =="namm" and in_array($from_id,$Dev)){
file_put_contents("sekk.txt","متاح"); 
file_put_contents("sek.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
𖠮︙حسنأ عزيزي - المطور
𖠮︙لان اصبح وضع البوت 
𖠮︙متاح للكل
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}

$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ( $text  == "تفعيل" and $MEMH >= $kocke and $sekk == "متاح") {
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$eri)  or in_array($from_id,$developer)){
if ($tc == 'group' | $tc == 'supergroup'){
$link = bot("getchat",['chat_id'=>$chat_id])->result->invite_link;
 if($link != null){
  $link = $link;
$link2 = $link;
  }else{
   $link = bot("exportChatInviteLink",['chat_id'=>$chat_id])->result;
$link2 = $link;
   }
$add = $settings["information"]["added"];
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ($add != true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
𖠮︙تم تفعيل المجموعه بنجاح
𖠮︙بواسطة - [$first_name](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
		
 ]);  
 		        bot('sendmessage',[
            'chat_id'=>$Dev[0],
            'text'=>"
⌁⁞ تم تفعيل مجموعه جديده
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⌁⁞ اسم المجموعه - $namegroup
⌁⁞ ايدي المجموعه - $chat_id
⌁⁞ رابط المجموعه - [اضغط هنا]($link)
⌁⁞ عدد المجموعه - $MEMH
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⌁⁞ بواسطة - [$first_name](tg://user?id=$from_id)
⌁⁞ ايديه - $from_id
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
        ]); 
$dateadd = date('Y-m-d', time());
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
file_put_contents("links.txt",$getlinkde."\n",FILE_APPEND);
file_put_contents("lonks.txt",$namegroup."\n",FILE_APPEND);
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."⌁⁞"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
mkdir("data/count");
file_put_contents("data/count/$chat_id.txt",$result[$key]['user']['id'] . "\n" , FILE_APPEND);
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg  = explode("\n",$cmg);
$cmsg = count($cmssg);
file_put_contents("data/$chat_id/idpic.txt","✔");
file_put_contents("data/$chat_id/morder.txt","
⌯⁞ هناك {5} اوامر لعرضها
━━━━━━━━━━━━━
⌯⁞ م1 ~⪼ لعرض اوامر الحمايه
⌯⁞ م2 ~⪼ لعرض اوامر الادمنيه
⌯⁞ م3 ~⪼ لعرض اوامر المدراء
⌯⁞ م4 ~⪼ لعرض اوامر المنشئين
⌯⁞ م5 ~⪼ لعرض اوامر المطورين
━━━━━━━━━━━━━
⌯⁞ CH - $DevUser
");
}
}
}
file_put_contents("data/$chat_id/idpic","مفعل");
file_put_contents("data/$chat_id/ser.txt","معطل");
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
        $settings = '{"lock": {
              "text": "مفتوح",
                "photo": "مفتوح",
                "link": "مفتوح",
                "tag": "مفتوح",
				"username": "مفتوح",
                "sticker": "مفتوح",
                "video": "مفتوح",
                "voice": "مفتوح",
                "editmd": "مفتوح",
                "photoshop": "مفعل",
                "getlink": "مفعل",
                "audio": "مفتوح",
                "iduser": "مفعل",
                "gif": "مفتوح",
                "markdown": "مفتوح",
                "bot": "مفتوح",
                "forward": "مفتوح",
                "spam": "مفتوح",
                "document": "مفتوح",
                "tgservic": "مفتوح",
				"edit": "مفتوح",
				"reply": "مفتوح",
				"en": "مفتوح",
				"kickme": "مفعل",
				"zhr": "مفعله",
				"en": "مفتوح",
				"ar": "مفتوح",
				"contact": "مفتوح",
				"userk": "مفتوح",
				"userw": "مفتوح",
				"userr": "مفتوح",
				"forwardk": "مفتوح",
				"forwardr": "مفتوح",
				"forwardw": "مفتوح",
				"linkw": "مفتوح",
				"linkr": "مفتوح",
				"linkk": "مفتوح",
				"botk": "مفتوح",
				"rdodsg": "مفعله",
				"location": "مفتوح",
				"game": "مفتوح",
				"gamess": "مفعله",
				"cmd": "مفتوح",
				"mute_all": "مفتوح",
				"mute_all_time": "مفتوح",
				"fosh": "مفتوح",
				"lockauto": "مفتوح",
				"lockcharacter": "مفتوح",
				"video_msg": "مفتوح"
			},
			"information": {
            "added": "true",
			"welcome": "مفتوح",
			"bye": "مقفول",
			"add": "مفتوح",
			"spamx": "5",
			"lockchannel": "مفتوح",
			"hardmodebot": "مفتوح",
			"hardmodewarn": "كتم العضو ♨️",
			"charge": "999 يوم",
			"setadd": "3",
			"dataadded": "",
			"expire": "",
			"msg": "",
			"timelock": "00:00",
			"timeunlock": "00:00",
			"pluscharacter": "300",
			"downcharacter": "0",
			"textwelcome": "اهلا بك عزيزي",
			"rules": "غير مسجل",
			"setwarn": "3"
			}
}';

        $settings = json_decode($settings,true);
		$settings["information"]["expire"]="$next_date";
		$settings["information"]["dataadded"]="$dateadd";
		$settings["information"]["msg_id"]="$message_id";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
        file_put_contents("data/$chat_id/ser.txt","مفعل");
        file_put_contents("data/$chat_id/idpic.txt","مفعل");
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
$dataadd = $settings["information"]["dataadded"];
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
⌁⁞ المجموعه بالتأكيد مفعله
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
     ]); 
}
}
}
}
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ( $text  == "تفعيل" and $MEMH >= $kocke and $sekk == null) {
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$eri)  or in_array($from_id,$developer)){
if ($tc == 'group' | $tc == 'supergroup'){
$link = bot("getchat",['chat_id'=>$chat_id])->result->invite_link;
 if($link != null){
  $link = $link;
$link2 = $link;
  }else{
   $link = bot("exportChatInviteLink",['chat_id'=>$chat_id])->result;
$link2 = $link;
   }
$add = $settings["information"]["added"];
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ($add != true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
𖠮︙تم تفعيل المجموعه بنجاح
𖠮︙بواسطة - [$first_name](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
		
 ]);  
 		        bot('sendmessage',[
            'chat_id'=>$Dev[0],
            'text'=>"
⌁⁞ تم تفعيل مجموعه جديده
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⌁⁞ اسم المجموعه - $namegroup
⌁⁞ ايدي المجموعه - $chat_id
⌁⁞ رابط المجموعه - [اضغط هنا]($link)
⌁⁞ عدد المجموعه - $MEMH
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⌁⁞ بواسطة - [$first_name](tg://user?id=$from_id)
⌁⁞ ايديه - $from_id
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
        ]); 
$dateadd = date('Y-m-d', time());
$link = bot("getchat",['chat_id'=>$chat_id])->result->invite_link;
 if($link != null){
  $link = $link;
$link2 = $link;
  }else{
   $link = bot("exportChatInviteLink",['chat_id'=>$chat_id])->result;
$link2 = $link;
   }
file_put_contents("links.txt",$getlinkde."\n",FILE_APPEND);
file_put_contents("lonks.txt",$namegroup."\n",FILE_APPEND);
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."⌁⁞"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
mkdir("data/count");
file_put_contents("data/count/$chat_id.txt",$result[$key]['user']['id'] . "\n" , FILE_APPEND);
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg  = explode("\n",$cmg);
$cmsg = count($cmssg);
file_put_contents("data/$chat_id/idpic.txt","✔");
}
}
}
file_put_contents("data/$chat_id/ser.txt","معطل");
file_put_contents("data/$chat_id/spamxe.txt","100");
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
        $settings = '{"lock": {
                             "text": "مفتوح",
                "photo": "مفتوح",
                "link": "مفتوح",
                "tag": "مفتوح",
				"username": "مفتوح",
                "sticker": "مفتوح",
                "video": "مفتوح",
                "voice": "مفتوح",
                "editmd": "مفتوح",
                "photoshop": "مفعل",
                "getlink": "مفعل",
                "audio": "مفتوح",
                "iduser": "مفعل",
                "gif": "مفتوح",
                "markdown": "مفتوح",
                "bot": "مفتوح",
                "forward": "مفتوح",
                "spam": "مفتوح",
                "document": "مفتوح",
                "tgservic": "مفتوح",
				"edit": "مفتوح",
				"reply": "مفتوح",
				"en": "مفتوح",
				"kickme": "مفعل",
				"zhr": "مفعله",
				"en": "مفتوح",
				"ar": "مفتوح",
				"contact": "مفتوح",
				"userk": "مفتوح",
				"userw": "مفتوح",
				"userr": "مفتوح",
				"forwardk": "مفتوح",
				"forwardr": "مفتوح",
				"forwardw": "مفتوح",
				"linkw": "مفتوح",
				"linkr": "مفتوح",
				"linkk": "مفتوح",
				"botk": "مفتوح",
				"rdodsg": "مفعله",
				"location": "مفتوح",
				"game": "مفتوح",
				"gamess": "مفعله",
				"cmd": "مفتوح",
				"mute_all": "مفتوح",
				"mute_all_time": "مفتوح",
				"fosh": "مفتوح",
				"lockauto": "مفتوح",
				"lockcharacter": "مفتوح",
				"video_msg": "مفتوح"
			},
			"information": {
            "added": "true",
			"welcome": "مفعل",
			"bye": "معطل",
			"add": "مفتوح",
			"lockchannel": "مفتوح",
			"hardmodebot": "مفتوح",
			"hardmodewarn": "كتم العضو ♨️",
			"charge": "999 يوم",
			"setadd": "3",
			"dataadded": "",
			"expire": "",
			"msg": "",
			"timelock": "00:00",
			"timeunlock": "00:00",
			"pluscharacter": "300",
			"downcharacter": "0",
			"textwelcome": "اهلا بك عزيزي",
			"rules": "غير مسجل",
			"setwarn": "3"
			}
}';
        $settings = json_decode($settings,true);
		$settings["information"]["expire"]="$next_date";
		$settings["information"]["dataadded"]="$dateadd";
		$settings["information"]["msg_id"]="$message_id";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
        file_put_contents("data/$chat_id/ser.txt","مفعل");
        file_put_contents("data/$chat_id/idpic.txt","مفعل");
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
$dataadd = $settings["information"]["dataadded"];
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
⌁⁞ المجموعه بالتأكيد مفعله
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
     ]); 
}
}
}
}
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ( $text  == "تفعيل" and $MEMH <= $kocke and $sekk == "متاح") {
if ($status == 'creator' or $status == 'administrator'){
if ($tc == 'group' | $tc == 'supergroup'){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
$add = $settings["information"]["added"];
if ($add != true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
⌁⁞ عذرأ عزيزي 
⌁⁞ عدد المجموعه قليل 
⌁⁞ العدد المطلوب - $kocke
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
		
 ]);  
 }
 }
 }
 }
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
if ( $text  == "تفعيل" and $MEMH >= $kocke and $sekk == "للمطور") {
if(!in_array($from_id,$Dev)){
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
⌁⁞ البوت للمطور فقط 
⌁⁞ لتفعيل البوت قم بمراسلة المطور
⌁⁞ المطور - $DevUser",
]);
}
}
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ( $text  == "تفعيل" and $MEMH >= $kocke and $sekk == "للمطور") {
if (in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
$link = bot("getchat",['chat_id'=>$chat_id])->result->invite_link;
 if($link != null){
  $link = $link;
$link2 = $link;
  }else{
   $link = bot("exportChatInviteLink",['chat_id'=>$chat_id])->result;
$link2 = $link;
   }
$add = $settings["information"]["added"];
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ($add != true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
𖠮︙تم تفعيل المجموعه بنجاح
𖠮︙بواسطة - [$first_name](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
		
 ]);  
 		        bot('sendmessage',[
            'chat_id'=>$Dev[0],
            'text'=>"
⌁⁞ تم تفعيل مجموعه جديده
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⌁⁞ اسم المجموعه - $namegroup
⌁⁞ ايدي المجموعه - $chat_id
⌁⁞ رابط المجموعه - [اضغط هنا]($link)
⌁⁞ عدد المجموعه - $MEMH
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⌁⁞ بواسطة - [$first_name](tg://user?id=$from_id)
⌁⁞ ايديه - $from_id
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
        ]); 
$dateadd = date('Y-m-d', time());
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
file_put_contents("links.txt",$getlinkde."\n",FILE_APPEND);
file_put_contents("lonks.txt",$namegroup."\n",FILE_APPEND);
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."⌁⁞"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
mkdir("data/count");
file_put_contents("data/count/$chat_id.txt",$result[$key]['user']['id'] . "\n" , FILE_APPEND);
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg  = explode("\n",$cmg);
$cmsg = count($cmssg);
file_put_contents("data/$chat_id/idpic.txt","✔");
file_put_contents("data/$chat_id/morder.txt","
⌯⁞ هناك {5} اوامر لعرضها
━━━━━━━━━━━━━
⌯⁞ م1 ~⪼ لعرض اوامر الحمايه
⌯⁞ م2 ~⪼ لعرض اوامر الادمنيه
⌯⁞ م3 ~⪼ لعرض اوامر المدراء
⌯⁞ م4 ~⪼ لعرض اوامر المنشئين
⌯⁞ م5 ~⪼ لعرض اوامر المطورين
━━━━━━━━━━━━━
⌯⁞ CH - $DevUser
");
}
}
}
file_put_contents("data/$chat_id/ser.txt","معطل");
file_put_contents("data/$chat_id/spamxe.txt","100");
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
        $settings = '{"lock": {
              "text": "مفتوح",
                "photo": "مفتوح",
                "link": "مفتوح",
                "tag": "مفتوح",
				"username": "مفتوح",
                "sticker": "مفتوح",
                "video": "مفتوح",
                "voice": "مفتوح",
                "editmd": "مفتوح",
                "photoshop": "مفتوح",
                "getlink": "مفتوح",
                "audio": "مفتوح",
                "iduser": "مفتوح",
                "gif": "مفتوح",
                "markdown": "مفتوح",
                "bot": "مفتوح",
                "forward": "مفتوح",
                "spam": "مفتوح",
                "document": "مفتوح",
                "tgservic": "مفتوح",
				"edit": "مفتوح",
				"reply": "مفتوح",
				"en": "مفتوح",
				"kickme": "مفتوح",
				"zhr": "مفتوح",
				"en": "مفتوح",
				"ar": "مفتوح",
				"contact": "مفتوح",
				"linkr": "مفتوح",
				"linkk": "مفتوح",
				"botk": "مفتوح",
				"userr": "مفتوح",
				"forwardr": "مفتوح",
				"rdodsg": "مقفول",
				"location": "مفتوح",
				"game": "مفتوح",
				"gamess": "مفتوح",
				"cmd": "مفتوح",
				"mute_all": "مفتوح",
				"mute_all_time": "مفتوح",
				"fosh": "مفتوح",
				"lockauto": "مفتوح",
				"lockcharacter": "مفتوح",
				"video_msg": "مفتوح"
			},
			"information": {
            "added": "true",
			"welcome": "مفتوح",
			"bye": "مقفول",
			"add": "مفتوح",
			"spamx": "5",
			"lockchannel": "مفتوح",
			"hardmodebot": "مفتوح",
			"hardmodewarn": "كتم العضو ♨️",
			"charge": "999 يوم",
			"setadd": "3",
			"dataadded": "",
			"expire": "",
			"msg": "",
			"timelock": "00:00",
			"timeunlock": "00:00",
			"pluscharacter": "300",
			"downcharacter": "0",
			"textwelcome": "اهلا بك عزيزي",
			"rules": "غير مسجل",
			"setwarn": "3"
			}
}';

        $settings = json_decode($settings,true);
		$settings["information"]["expire"]="$next_date";
		$settings["information"]["dataadded"]="$dateadd";
		$settings["information"]["msg_id"]="$message_id";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
        file_put_contents("data/$chat_id/ser.txt","مفعل");
        file_put_contents("data/$chat_id/idpic.txt","مفعل");
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
$dataadd = $settings["information"]["dataadded"];
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
⌁⁞ المجموعه بالتأكيد مفعله
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
     ]); 
}
}
}
}
if($text== 'غادر'){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)  or in_array($from_id,$developer)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم المغادرة من المجموعه بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
bot('LeaveChat',[
'chat_id'=>$chat_id,
]);
}
else
{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙عذرأ الامر ليس اليك عزيزي",
]);
}
}
elseif($text== 'تعطيل' ){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)  or in_array($from_id,$developer)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙تم تعطيل المجموعه بنجاح
𖠮︙بواسطة - [$first_name](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
unlink("data/$chat_id.json");
}
}
elseif($text== "قفل الكل"or $text== "automatic" or $text== "قفل كل") {
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$eri) or in_array($from_id,$matrxx) or in_array($from_id,$nazar)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم قفل الكل بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["link"]="مقفول";
$settings["lock"]["username"]="مقفول";
$settings["lock"]["bot"]="مقفول";
$settings["lock"]["forward"]="مقفول";
$settings["lock"]["tgservices"]="مقفول";
$settings["lock"]["contact"]="مقفول";
$settings["lock"]["is_sticker"]="مقفول";
$settings["lock"]["sticker"]="مقفول";
$settings["lock"]["gif"]="مقفول";
$settings["lock"]["voice"]="مقفول";
$settings["lock"]["fosh"]="مقفول";
$settings["lock"]["lockcharacter"]="مقفول";
$settings["lock"]["inline"]="مقفول";
$settings["lock"]["en"]="مقفول";
$settings["lock"]["photo"]="مقفول";
$settings["lock"]["markdown"]="مقفول";
$settings["lock"]["ar"]="مقفول";
$settings["lock"]["document"]="مقفول";
$settings["lock"]["video"]="مقفول";
$settings["lock"]["edit"]="مقفول";
$settings["lock"]["game"]="مقفول";
$settings["lock"]["location"]="مقفول";
$settings["lock"]["editmd"]="مقفول";
$settings["lock"]["tag"]="مقفول";
$settings["lock"]["audio"]="مقفول";
$settings["lock"]["iduser"]="مقفول";
$settings["lock"]["reply"]="مقفول";
$settings["lock"]["tgservic"]="مقفول";
$settings["lock"]["video_msg"]="مقفول";
$settings["lock"]["bot"]="مقفول";
$settings["lock"]["sigmidia"]="مقفول";
$settings["lock"]["downloadmid"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"?? يجب تفعيل البوت في المجموعة
ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}}}
elseif($text =="unmute all" or $text =="فتح الكل"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$eri) or in_array($from_id,$matrxx) or in_array($from_id,$nazar)) {
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الكل بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["link"]="مفتوح";
$settings["lock"]["username"]="مفتوح";
$settings["lock"]["bot"]="مفتوح";
$settings["lock"]["forward"]="مفتوح";
$settings["lock"]["tgservices"]="مفتوح";
$settings["lock"]["contact"]="مفتوح";
$settings["lock"]["text"]="مفتوح";
$settings["lock"]["is_sticker"]="مفتوح";
$settings["lock"]["sticker"]="مفتوح";
$settings["lock"]["gif"]="مفتوح";
$settings["lock"]["voice"]="مفتوح";
$settings["lock"]["fosh"]="مفتوح";
$settings["lock"]["lockcharacter"]="مفتوح";
$settings["lock"]["inline"]="مفتوح";
$settings["lock"]["en"]="مفتوح";
$settings["lock"]["photo"]="مفتوح";
$settings["lock"]["markdown"]="مفتوح";
$settings["lock"]["ar"]="مفتوح";
$settings["lock"]["document"]="مفتوح";
$settings["lock"]["video"]="مفتوح";
$settings["lock"]["edit"]="مفتوح";
$settings["lock"]["game"]="مفتوح";
$settings["lock"]["location"]="مفتوح";
$settings["lock"]["editmd"]="مفتوح";
$settings["lock"]["tag"]="مفتوح";
$settings["lock"]["audio"]="مفتوح";
$settings["lock"]["iduser"]="مفتوح";
$settings["lock"]["reply"]="مفتوح";
$settings["lock"]["tgservic"]="مفتوح";
$settings["lock"]["video_msg"]="مفتوح";
$settings["lock"]["bot"]="مفتوح";
$settings["lock"]["sigmidia"]="مفتوح";
$settings["lock"]["downloadmid"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}}

if( $text =="الاعدادات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
$locklink = $settings["lock"]["link"];
$markdown = $settings["lock"]["markdown"];
$editmd = $settings["lock"]["editmd"];
$lockusername = $settings["lock"]["username"];
$locktag = $settings["lock"]["tag"];
$rdodsg = $settings["lock"]["rdodsg"];
$ar = $settings["lock"]["ar"];
$inline = $settings["lock"]["inline"];
$en = $settings["lock"]["en"];
$is_sticker = $settings["lock"]["is_sticker"]; 
$lockedit = $settings["lock"]["edit"];
$lockfosh = $settings["lock"]["fosh"];
$lockbots = $settings["lock"]["bot"];
$lockforward = $settings["lock"]["forward"];
$locktg = $settings["lock"]["tgservic"];
$lockreply = $settings["lock"]["reply"];
$lockcmd = $settings["lock"]["cmd"];
$lockdocument = $settings["lock"]["document"];
$lockgif = $settings["lock"]["gif"];
$iduser = $settings["lock"]["iduser"];
$lockvideo_note = $settings["lock"]["video_msg"];
$locklocation = $settings["lock"]["location"];
$lockphoto = $settings["lock"]["photo"];
$lockcontact = $settings["lock"]["contact"];
$lockaudio = $settings["lock"]["audio"];
$lockvoice = $settings["lock"]["voice"];
$locksticker = $settings["lock"]["sticker"];
$lockgame = $settings["lock"]["game"];
$lockvideo = $settings["lock"]["video"];
$locktext = $settings["lock"]["text"];
$mute_all = $settings["lock"]["mute_all"];
$welcome = $settings["information"]["welcome"];
$add = $settings["information"]["add"];
$setwarn = $settings["information"]["setwarn"];
$charge = $settings["information"]["charge"];
$lockauto = $settings["lock"]["lockauto"];
$lockcharacter = $settings["lock"]["lockcharacter"];
$startlock = $settings["information"]["timelock"];
$endlock = $settings["information"]["timeunlock"];
$startlockcharacter = $settings["information"]["pluscharacter"];
$endlockcharacter = $settings["information"]["downcharacter"];
$sigchange = $settings["lock"]["downloadmid"];
$Middown = $settings["lock"]["downloadmid"];
$text = str_replace("| فعال |","","
𖠮︙اعدادات المجموعه : 
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙التاك » { $locktag }
𖠮︙العربية » { $ar }
𖠮︙الاتجليزية » { $en }
𖠮︙المعرفات » { $lockusername }
𖠮︙التعديل » { $lockedit }
𖠮︙الروابط » { $locklink }
𖠮︙المتحركه » { $lockgif }
𖠮︙الصور » { $lockphoto }
𖠮︙الايدي » { $iduser }
𖠮︙الموسيقى » { $lockaudio }
𖠮︙البصمات » { $lockvoice }
𖠮︙الكلايش » { $lockcharacter }
𖠮︙الالعاب » { $lockgame }
𖠮︙التوجيه » { $lockforward }
𖠮︙الانلاين » { $inline }
𖠮︙السيئات » { $lockfosh }
𖠮︙الكلايش » { $lockcharacter }
𖠮︙الرد » { $lockreply }
𖠮︙الاشعارات » { $locktg }
𖠮︙بصمة الفيديو » { $lockvideo_note }
𖠮︙الموقع » { $locklocation }
𖠮︙الملفات » { $lockdocument }
𖠮︙الجهات » { $lockcontact }
𖠮︙الماركدوان » { $markdown }
𖠮︙تعديل الميديا { $locklink }
𖠮︙الملصقات » { $locksticker }
𖠮︙الدردشة » { $locktext }
𖠮︙البوتات » { $lockbots }
𖠮︙الردود » { $rdodsg }
𖠮︙تحويل الصيغ » { $sigchange }
𖠮︙تحميل الميديا » { $Middown }
𖠮︙الملصقات المتحركة » { $is_sticker }
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙قناة البوت ← $chsource
");
$text2 = str_replace("| غير مفعل |","","$text");
bot('sendmessage',[ 
 'chat_id'=>$chat_id,
 'text'=>"$text2",
'reply_to_message_id'=>$message_id,
]);
}
}
if( $text== "تفعيل الحمايه" or $text== "تفعيل حمايه") {
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$eri) or in_array($from_id,$matrxx) or in_array($from_id,$nazar)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم بالتأكيد تفعيل الحمايه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["link"]="مقفول";
$settings["lock"]["is_sticker"]="مقفول";
$settings["lock"]["sticker"]="مقفول";
$settings["lock"]["gif"]="مقفول";
$settings["lock"]["photo"]="مقفول";
$settings["lock"]["video"]="مقفول";
$settings["lock"]["edit"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}}}
if( $text== "تعطيل الحمايه" or $text== "تعطيل حمايه") {
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$eri) or in_array($from_id,$matrxx) or in_array($from_id,$nazar)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم بالتأكيد تعطيل الحمايه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$settings["lock"]["link"]="مفتوح";
$settings["lock"]["is_sticker"]="مفتوح";
$settings["lock"]["sticker"]="مفتوح";
$settings["lock"]["gif"]="مفتوح";
$settings["lock"]["photo"]="مفتوح";
$settings["lock"]["video"]="مفتوح";
$settings["lock"]["edit"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}}}
$HAMD = file_get_contents("data/tiger.json");
$HHAMDD = file_get_contents("data/hhamdd.json");
if($text=="ضع ترحيب" or $text == "ضع الترحيب" or $text == "وضع ترحيب" or $text == "وضع الترحيب"){
file_put_contents("data/hhamdd.json","$from_id");
if ($status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙اهلا بك عزيزي
𖠮︙لان قم بارسال الترحيب
𖠮︙يمكنك اضافة
𖠮︙لعرض الاسم ← {Name}
𖠮︙لعرض الايدي ← {id}
𖠮︙ لعرض المعرف ← {User}
𖠮︙ لعرض مطور البوت ← {Dev}
𖠮︙ لعرض اسم مجموعه ← {Grop}
𖠮︙ لعرض الوقت ← {time}
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("data/tiger.json","matrxx");
}}
if($text and $HAMD =="matrxx" and $HHAMDD == $from_id){
if ($status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙ اهلا بك عزيزي
𖠮︙ تم حفض الترحيب بنجاح
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("data/tiiger.json","$text");
unlink("data/tiger.json");
}}
if(!@$username){
$Useeer = "لايوجد يوزر";
}elseif(@$username){
$Useeer = "@$username";
}
if($text=="الترحيب"){
if ($status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
 $times = date('h:i:s');
 $crlos = file_get_contents("data/tiiger.json");
 $text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$date | $date2"],"$crlos");
$text = str_replace('{Name}',$name,$text);
$text = str_replace('{Grop}',$namegroup,$text);
$text = str_replace('{Id}',$from_id,$text);
$text = str_replace('{User}',$Useeer,$text);
$text = str_replace('{Dev}',$buy,$text);
$text = str_replace('{time}',$date2,$text);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$text",'reply_to_message_id'=>$message->message_id,'parse_mode'=>"MarkDown",]);}}
// welcome enbale and disable
elseif($text== "تفعيل الترحيب" or $text == "فتح الترحيب") {
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
$text = $settings["information"]["textwelcome"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تفعيل الترحيب بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["welcome"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}}
elseif($text== "تعطيل الترحيب" or $text == "قفل الترحيب") {
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تعطيل الترحيب بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}}
if($update->message->new_chat_member){
	if($settings["information"]["welcome"] == "مقفول"){
if($tc == "group" | $tc == "supergroup"){
$ameer = file_get_contents("data/tiiger.json");
$newmemberuser = $update->message->new_chat_member->username;
$name = $update->message->new_chat_member->first_name;
date_default_timezone_set('Asia/Damascus');
$date = date('Y-m-d');
$date2 = date("H:i");
$text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$date | $date2"],"$ameer");
$text = str_replace('{Name}',$name2,$text);
$text = str_replace('{Grop}',$namegroup,$text);
$text = str_replace('{Id}',$from_id,$text);
$text = str_replace('{User}',$Useeer,$text);
$text = str_replace('{Dev}',$buy,$text);
$text = str_replace('{time}',$date2,$text);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$text",
'reply_to_message_id'=>$message_id,
]);
}
}}
if($text=="حذف ترحيب" or $text == "حذف الترحيب" or $text == "مسح ترحيب" or $text == "مسح الترحيب"){
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙ تم مسح الترحيب بنجاح
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("data/tiiger.json","");
}
}
$crlos = file_get_contents("data/tiiger.json");
if($text=="الترحيب" and $crlos == null){
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙عزيزي لايوجد ترحيب حاليأ
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
}}
$EHB = file_get_contents("data/ehb.json");
$EHBB = file_get_contents("data/ehbb.json");
if($text=="ضع التوديع"){
	file_put_contents("data/ehbb.json","$from_id");
if ($status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙اهلا بك عزيزي
𖠮︙لان قم بارسال التوديع
𖠮︙يمكنك اضافة
𖠮︙لعرض الاسم ← {Name}
𖠮︙لعرض الايدي ← {id}
𖠮︙ لعرض المعرف ← {User}
𖠮︙ لعرض مطور البوت ← {Dev}
𖠮︙ لعرض اسم مجموعه ← {Grop}
𖠮︙ لعرض الوقت ← {time}
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("data/ehb.json","aland");
}}
if($text and $EHB =="aland" and $EHBB == $from_id){
if ($status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙ اهلا بك عزيزي
𖠮︙ تم حفظ التوديع بنجاح
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("data/eehb.json","$text");
unlink("data/ehb.json");
}}
if($text=="التوديع"){
if ($status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
 $times = date('h:i:s');
 $karlos = file_get_contents("data/eehb.json");
 $text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$date | $date2"],"$karlos");
$text = str_replace('{Name}',$name2,$text);
$text = str_replace('{Grop}',$namegroup,$text);
$text = str_replace('{Id}',$from_id,$text);
$text = str_replace('{User}',$Useeer,$text);
$text = str_replace('{Dev}',$buy,$text);
$text = str_replace('{time}',$date2,$text);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$text",'reply_to_message_id'=>$message->message_id,'parse_mode'=>"MarkDown",]);}}
// welcome enbale and disable
elseif($text== "تفعيل التوديع" or $text == "فتح التوديع") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تفعيل التوديع بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["bye"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}}
elseif($text== "تعطيل التوديع" or $text == "قفل التوديع") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تعطيل التوديع بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["bye"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}}
if($settings["information"]["bye"] == "مقفول"){
if($update->message->left_chat_member){
if ($tc == "group" | $tc == "supergroup"){
$karlos = file_get_contents("data/eehb.json");
$newmemberuser = $update->message->left_chat_member->username;
$namenew = $update->message->left_chat_member->first_name;
$newidd = $update->message->left_chat_member->id;
date_default_timezone_set('Asia/Damascus');
$date = date('Y-m-d');
$date2 = date("H:i");
$text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$namenew","$newidd"],"$karlos");
$text = str_replace('{Name}',$name2,$text);
$text = str_replace('{Grop}',$namegroup,$text);
$text = str_replace('{Id}',$from_id,$text);
$text = str_replace('{User}',$Useeer,$text);
$text = str_replace('{Dev}',$buy,$text);
$text = str_replace('{time}',$date2,$text);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"$text",
'reply_to_message_id'=>$message_id,
	]);
}
}}
if($text=="مسح التوديع"){
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙ تم مسح التوديع بنجاح
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("data/eehb.json","");
}
}
$karlos = file_get_contents("data/eehb.json");
if($text=="التوديع" and $karlos == null){
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙عزيزي لايوجد توديع حاليأ
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
}}

if ($text =="تفعيل الطرد" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$matrxx) || in_array($from_id,$AUBaland) || in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تفعيل الطرد بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["katei"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تعطيل الطرد" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$matrxx) || in_array($from_id,$AUBaland) || in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تعطيل الطرد بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["katei"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ($text =="تفعيل الحظر" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$matrxx) || in_array($from_id,$AUBaland) || in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تفعيل الحظر بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["banuser"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تعطيل الحظر" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$matrxx) || in_array($from_id,$AUBaland) || in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تعطيل حظر بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["banuser"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ( $rt && $text == "طرد" or $text == "اطرد" and $text==$settings["information"]["kout"] ){
if ($settings["lock"]["katei"] =="مقفول"){
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {
if ( $statusrt != 'creator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$mmyaz) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer) && !in_array($re_id,$matrxx) && !in_array($re_id,$nazar) && !in_array($re_id,$eri)) {
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$re_id
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙العضو ← [$re_name](tg://user?id=$re_id) 
𖠮︙تم طرده من المجموعة بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
} 
else	
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙لا استطيع طرد ( $infor )",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}
$kickuser = str_replace('طرد ','',$text);
if ($text =="طرد $kickuser" and preg_match('/([0-9])/i',$kickuser)){
if ($settings["lock"]["katei"] =="مقفول"){
$kickuser= str_replace('طرد ','',$text);
$kickinfo = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$kickuser"));
$kickname =$kickinfo->result->first_name;
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {
if ( $statusrt != 'creator' && !in_array($kickuser,$Dev) && !in_array($kickuser,$manger) && !in_array($kickuser,$mmyaz) && !in_array($kickuser,$admin_user) && !in_array($kickuser,$mmyaz) && !in_array($kickuser,$developer) && !in_array($kickuser,$matrxx) && !in_array($kickuser,$nazar) && !in_array($kickuser,$eri)) {
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$re_id
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙العضو ← [$kicmname](tg://user?id=$kickuser) 
𖠮︙تم طرده من المجموعة بنجاح",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
} 
else	
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙لا استطيع طرد ( $infor )",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}
elseif($status == "creator" || $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger) || in_array($from_id,$nazar) || in_array($from_id,$matrxx) || in_array($from_id,$eri)) {
if($text == "المجموعه" or $text == "معلومات المجموعه" or $text == "معلومات المجموعة"){
$mem = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg = explode("\n",$cmg);
$cmsg = count($cmssg);
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"*
𖠮︙معلومات المجموعة :-*
*ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ*
*𖠮︙ايدي المجموعة ؛* [$chat_id]
*𖠮︙اسم المجموعة ؛* [$namegroup]
*𖠮︙رابط المجموعة ؛* [$getlinkde]
*𖠮︙عدد الاعضاء ؛* $mem
*𖠮︙عدد الرسائل ؛،* $message_id
*𖠮︙عدد الادمنيه ؛* $cmsg
*ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,]);}}

$reid_info = $settings["info_idr"]["frid_g"];
$idre = file_get_contents("ok.json");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
if($text == "تعيين كليشة كشف" or $text == "تعين كشف"){
file_put_contents("ok.json",$chat_id);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙اهلا بك عزيزي
𖠮︙الان قم بارسال كليشة كشف
𖠮︙يمكنك اضافة
𖠮︙لعرض الاسم 彡 `{الاسم}`
𖠮︙لعرض الايدي 彡 `{الايدي}`
𖠮︙لعرض المعرف 彡 `{المعرف}`
𖠮︙لعرض الرتبه 彡 `{الرتبه}`
𖠮︙لعرض مطور البوت 彡 `{المطور}`
𖠮︙لعرض الوقت 彡 `{الوقت}`
",'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $idre == $chat_id){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer)){
file_put_contents("ok.json","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تعين كليشة الكشف
",
'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$settings["info_idr"]["frid_g"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
elseif($text == "حذف كليشة كشف" or $text == "مسح كشف"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم حذف كليشة الكشف
",
'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$settings["info_idr"]["frid_g"]="";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
$re_user = $update->message->reply_to_message->from->username;
$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
$re = $update->message->reply_to_message;
if(in_array($re_id,$eri)){
$infor = "مبرمج السورس";
}
elseif(in_array($re_id,$nazar) ){
$infor = "منشئ اساسي";
}
elseif(in_array($re_id,$matrxx) ){
$infor = "المنشئ";
}
elseif(in_array($re_id,$Dev) ){
$infor = "مطور اساسي";
}
elseif(in_array($re_id,$developer) ){
$infor = "مطور ثانوي";
}
elseif($statusrt == "creator"){
$infor = "المالك";
}
elseif(in_array($re_id,$manger) ){
$infor = "المدير";
}
elseif(in_array($re_id,$AUBaland) ){
$infor = "مدير عام ";
}
elseif(in_array($re_id,$admin_user) ){
$infor = "الادمن";
}
elseif(in_array($re_id,$mmyaz) ){
$infor = "عضو مميز";
}elseif($statusrt !== "creator" || $statusrt !== "administrator" || $statusrt !== "member" || !in_array($re_id,$admin_user) || !in_array($re_id,$mmyaz) || !in_array($re_id,$manger) || !in_array($re_id,$developer) ){
$infor = "فقط عضو";
}elseif($statusrt == "member" ){
$infor = "فقط عضو";
}
if(!$re_user){
$re_s = "لايوجد يوزر";
}elseif($username){
$re_s = "@$re_user";
}
$ch = "@QO8_Q";
$reid_info = $settings["info_idr"]["frid_g"];
if($rt and $text == "كشف" || $text == "ايديه"){
$reid_info = $settings["info_idr"]["frid_g"];
	if($reid_info == null){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ الاسم - $re_name
⌁⁞ الرتبة - $infor
⌁⁞ المعرف - $re_s
⌁⁞ الايدي - $re_id
",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
}}

$reid_info = $settings["info_idr"]["frid_g"];
if($rt and $text == "كشف" || $text == "ايديه" and $text==$settings["information"]["ksh"]){
	$date1 = date("h:i:s");
$reid_info = $settings["info_idr"]["frid_g"];
	if($reid_info !== null){
$text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$date | $date2"],"$reid_info");
$text = str_replace('{الاسم}',$re_name,$text);
$text = str_replace('{المجموعه}',$namegroup,$text);
$text = str_replace('{الايدي}',$re_id,$text);
$text = str_replace('{الرتبه}',$infor,$text);
$text = str_replace('{المعرف}',@$re_s,$text);
$text = str_replace('{المطور}',$buy,$text);
$text = str_replace('{الوقت}',$date1,$text);
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
$text
",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
}}

 $result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$count=$result["result"]["total_count"]; 
$pr = str_replace("صورتي ", "", $text);
if($text=="صورتي $pr" && $pr <= $count){
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][$pr-1][0]["file_id"];
$count=$result["result"]["total_count"];var_dump(
  
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$file_id",
'caption' =>"هذه هي الصوره رقم $pr
عدد صورك $count", 'reply_to_message_id'=>$message->message_id, 
]));
}elseif($text == "صورتي $pr" && $pr > $count){
bot('sendMessage',[
'chat_id' =>$chat_id,
'text' =>"عذرا انت تمتلك $count صوره فقط",'reply_to_message_id'=>$message->message_id, 
]);
}

$date = date('h:i:s'); $d = date('A');
$aa =preg_replace('/ص/', 'ص', $d);$aa =preg_replace('/م/', 'م', $d);
date_default_timezone_set('Asia/Baghdad');
$times = date('h:i:s');
$year = date('Y');
$month = date('n');
$day = date('j');
$time = time() + (979 * 11 + 1 + 30);
$blod1 = "http://api.telegram.org/bot".$token."/getChatMembersCount?chat_id=$chat_id";
$blod2 = file_get_contents($blod1);
$blod3 = json_decode($blod2);
$blod4 = $blod3->result;
$title = $message->chat->title;
if($text == "الساعة" or $text == "الساعه"){
bot ('sendMessage',['chat_id'=>$chat_id,'text'=>"
𖠮︙الساعه حاليأ ← $times $aa
",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,]);}
if($text == "الزمن" or $text == "التاريخ"){
bot ('sendMessage',['chat_id'=>$chat_id,'text'=>"
𖠮︙التاريخ ← ".date("Y")."/".date("n")."/".date("d")."
",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,]);}

 $setnamebot = file_get_contents("data/set.txt");
$namebot = file_get_contents("data/namebot.txt");
if(in_array($from_id,$Dev)){
if ($text == "🎭تعين الاسم" or $text == "وضع اسم البوت" or $text == "تغيير اسم البوت" and $namebot == null){
file_put_contents("data/set.txt","setnamebot");
bot("sendMessage",["chat_id"=>$chat_id,'text'=>"𖠮︙ قم بأرسال اسم البوت الان ",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}

if(in_array($from_id,$Dev)){
if ($text == "🎭حذف الاسم" or $text == "مسح اسم البوت"){
file_put_contents("data/namebot.txt","ماتركس");
bot("sendMessage",["chat_id"=>$chat_id,'text'=>"𖠮︙ تم مسح اسم البوت",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}
# --     Source matrxx     --
if($text && $setnamebot =="setnamebot" and in_array($from_id,$Dev)){
file_put_contents("data/namebot.txt",$text); 
file_put_contents("data/set.txt","");
bot("sendmessage",["chat_id"=>$chat_id,"text" => "
𖠮︙تم تغير اسم البوت بنجاح
𖠮︙ اسمي الان 彡 $text
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}

$botproxre = array(
"لك نته لبوت",
"ياخي ورب اسمي ماتركس",
"حبي فدوه لصيح بوت اسمي ماتركس",
"اسمي ماتركس حياتي"
);
$reproxbot = array_rand($botproxre, 1);
if($text == "بوت" || $text == "البوت شنو اسمه" || $text == "شسمه البوت" || $text == "البوت شسمه" || $text == "اسم البوت" and $namebot == NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"$botproxre[$reproxbot]",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}

$botre = array(
"لك نته لبوت",
"ياخي ورب اسمي $namebot",
"حبي فدوه لصيح بوت اسمي $namebot",
"اسمي $namebot حياتي"
);
$rebot = array_rand($botre, 1);
if($text == "بوت" || $text == "البوت شنو اسمه" || $text == "شسمه البوت" || $text == "البوت شسمه" || $text == "اسم البوت" and $namebot != NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"$botre[$rebot]",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}

$namere = array(
"هلا قلبي معاك $namebot",
"تفضل حبيبي انا $namebot🌝💞",
"يمك حياتي امرني 🥺💞",
"شتريد كل شويه $namebot",
"يابه نجب كل شويه $namebot خبصتنه"
);
$rename = array_rand($namere, 1);
if($text == "$namebot" and $namebot != NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>$namere[$rename],'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}

$abualand = array("هلا قلبي معاك ماتركس","تفضل حبيبي انا ماتركس🌝💞","يمك حياتي امرني 🥺💞","شتريد كل شويه ماتركس","يابه نجب كل شويه ماتركس خبصتنه");
$aland = array_rand($proxre, 1);
if($text == "ماتركس" and $namebot == NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>$abualand[$aland],'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}

$BerrRo = file_get_contents("data/BerrRoo.txt");
$ccarllos = file_get_contents("data/ccarllos.json");
if($text=="ضع قوانين"){
file_put_contents("data/ccarllos.json","$from_id");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙اهلا بك عزيزي
𖠮︙لان قم بارسال القوانين
𖠮︙يمكنك اضافة
𖠮︙لعرض الاسم 彡 `{الاسم}`
𖠮︙لعرض الايدي 彡 `{الايدي}`
𖠮︙ لعرض المعرف 彡 `{المعرف}`
𖠮︙ لعرض مطور البوت 彡 `{المطور}`
𖠮︙ لعرض الوقت 彡 `{الوقت}`
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("data/BerrRoo.txt","BerrRo");
}
}
if($text and $BerrRo =="BerrRo" and $ccarllos == $from_id){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙ اهلا بك عزيزي
𖠮︙ تم حفض القوانين بنجاح
𖠮︙ الان قم بارسال القوانين لعرض القوانين
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("data/sBerrRo.txt","$text");
unlink("data/BerrRoo.txt");
}
}
if($text=="القوانين"){
	$times = date('h:i:s');
	$ameer = file_get_contents("data/sBerrRo.txt");
	$text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$date | $date2"],"$ameer");
$text = str_replace('{الاسم}',$first_name,$text);
$text = str_replace('{الايدي}',$from_id,$text);
$text = str_replace('{المعرف}',$usr,$text);
$text = str_replace('{المطور}',$buy,$text);
$text = str_replace('{الوقت}',$times,$text);
if($settings["lock"]["bbhi"] == "مقفول"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$text",'reply_to_message_id'=>$message->message_id,'parse_mode'=>"MarkDown",]);}}
if($text=="القوانين"){
if($settings["lock"]["bbhi"] == "مفتوح"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙ عذراء عزيزي عليك تفعيل القوانين
𖠮︙ لتفعيل ارسال ↫ تفعيل القوانين
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
}
}
if($text=="مسح القوانين"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙ تم مسح القوانين بنجاح
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("data/sBerrRo.txt","");
}
}
$ameer = file_get_contents("data/sBerrRo.txt");
if($text=="القوانين" and $ameer == null){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙عزيزي لايوجد قوانين
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
}

if(strpos($text, 'ضع وصف')!== false){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
$newdec= str_replace('ضع وصف','',$text);
bot('setChatDescription',[
'chat_id'=>$chat_id,
'description'=>$newdec
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
𖠮︙تم وضع الوصف  
𖠮︙بواسطة* [$first_name](tg://user?id=$from_id)
",'parse_mode'=>'MarkDown',
]);
}
}

$MSg_Id = $message->message_id;
$FN_MSg = $message->from->first_name;
$UM_MSg = $message->from->username;
$Id_MSg = $message->from->id;
if(!$UM_MSg){
$MsG = "
☜︎︎︎ : الاسم : $FN_MSg
☜︎︎︎ : الايدي : $Id_MSg
☜︎︎︎ : قام بنشر صوره اباحيه : ☞︎︎︎
";
}elseif($UM_MSg){
$MsG = "
☜︎︎︎ : الاسم : $FN_MSg
☜︎︎︎ : المعرف : @".$UM_MSg."
☜︎︎︎ : قام بنشر صوره اباحيه : ☞︎︎︎
";
}
if($message->photo){
$file = $message->photo[count($message->photo)-1]->file_id;
$get = bot('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$url = "https://api.telegram.org/file/bot".API_KEY."/$patch"; 
$Api = json_decode(file_get_contents("https://forhassan.ml/my_ip/ImageInfo.php?url=".$url),true);
if($Api['ok']["Info"] == "Indecent"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$MSg_Id,
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MsG,
]);}
}

$BANID = str_replace('حظر ','',$text);
$BANID = str_replace('الغاء حظر ','',$text);
$DADY = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$REMAS),true);
@$REMAS2 = $DADY['result']['status'];
if(in_array($REMAS,$eri)){
$inf = "مبرمج السورس";
}
elseif(in_array($BANID,$nazar) ){
$inf = "منشئ اساسي";
}
elseif(in_array($BANID,$matrxx) ){
$inf = "المنشئ";
}
elseif(in_array($BANID,$Dev) ){
$inf = "مطور اساسي";
}
elseif(in_array($BANID,$developer) ){
$inf = "مطور ثانوي";
}
elseif($REMAS2 == "creator"){
$inf = "المالك";
}
elseif($REMAS2 == "administrator"){
$inf = "المشرف";
}
elseif(in_array($BANID,$manger) ){
$inf = "المدير";
}
elseif(in_array($BANID,$AUBaland) ){
$inf = "مدير عام ";
}
elseif(in_array($BANID,$admin_user) ){
$inf = "الادمن";
}
elseif(in_array($BANID,$mmyaz) ){
$inf = "عضو مميز";
}elseif($REMAS2 !== "creator" || $REMAS2 !== "administrator" || $REMAS2 !== "member" || !in_array($BANID,$admin_user) || !in_array($BANID,$mmyaz) || !in_array($BANID,$manger) || !in_array($BANID,$developer) ){
$inf = "فقط عضو";
}elseif($REMAS2 == "member" ){
$inf = "فقط عضو";
}
$SABRENLOVE = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$BANID"));
$NAMEID =$SABRENLOVE->result->first_name;
if ($text =="حظر $BANID" and preg_match('/([0-9])/i',$BANID)){
	if ($settings["lock"]["banuser"] =="مقفول"){
$BANID= str_replace('حظر ','',$text);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri)) {
if ( $REMAS2 != 'creator' && $REMAS2 != 'administrator' && !in_array($BANID,$Dev) && !in_array($BANID,$manger) && !in_array($BANID,$admin_user) && !in_array($BANID,$mmyaz) && !in_array($BANID,$developer) && !in_array($BANID,$nazar) && !in_array($BANID,$matrxx) && !in_array($BANID,$eri) && !in_array($BANID,$AUBaland)) {
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$REMAS
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙ العضو 彡「 [$NAMEID](tg://user?id=$REMAS) 」 
𖠮︙تم حظره من المجموعه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"𖠮︙عذرا لا تستطيع حظر 彡 ( $inf )",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
 }
if ($text =="الغاء حظر $BANID" and preg_match('/([0-9])/i',$BANID)){
	if ($settings["lock"]["banuser"] =="مقفول"){
$BANID= str_replace('الغاء حظر ','',$text);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri)) {
if ( $REMAS2 != 'creator' && $REMAS2 != 'administrator' && !in_array($BANID,$Dev) && !in_array($BANID,$manger) && !in_array($BANID,$admin_user) && !in_array($BANID,$mmyaz) && !in_array($BANID,$developer) && !in_array($BANID,$nazar) && !in_array($BANID,$matrxx) && !in_array($BANID,$eri) && !in_array($BANID,$AUBaland)) {
	bot('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$REMAS
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙ العضو 彡「 [$NAMEID](tg://user?id=$REMAS) 」 
𖠮︙ تم الغاء حظره من المجموعه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"𖠮︙عذرا لا تستطيع الغاء حظر 彡 ( $inf )",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
 }
 if($rt && $text == "حظر" or $rt && $text == "احظر" and $text==$settings["information"]["kik"] ){
 	if ($settings["lock"]["banuser"] =="مقفول"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer) && !in_array($re_id,$nazar) && !in_array($re_id,$matrxx) && !in_array($re_id,$eri) && !in_array($re_id,$AUBaland)) {
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙ تم حظره من المجموعه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"𖠮︙ عذرا لا تستطيع حظر 彡 ( $infor )",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
 }
 if($rt && $text == "الغاء الحظر" or $rt && $text == "الغاء حظر"){
 	if ($settings["lock"]["banuser"] =="مقفول"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer) && !in_array($re_id,$nazar) && !in_array($re_id,$matrxx) && !in_array($re_id,$eri) && !in_array($re_id,$AUBaland)) {
	bot('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙ تم الغاء حظره من المجموعه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"𖠮︙عذرا لا تستطيع الغاء حظر 彡 ( $infor )",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
}
if($text == "مسح المحظورين"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$AUBaland) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {
file_put_contents("banduser/$chat_id.txt","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"𖠮︙بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙ تم مسح قائمة المحظورين
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
if($text == "المحظورين" and $get_Busers != NULL || $get_Busers != ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"𖠮︙ بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم عرض قائمة المحظورين
━━━━━━━━━━━━━
[$get_Busers]",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
if($text == "المحظورين" and $get_Busers == NULL || $get_Busers == ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"𖠮︙عزيزي 彡 [$first_name](tg://user?id=$from_id)
𖠮︙لايوجد اي محظور حاليأ
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
}
 
if($text == "تفعيل الاشتراك الاجباري"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"𖠮︙بواسطة - [$first_name](tg://user?id=$from_id)
𖠮︙تم تفعيل الاشتراك الاجباري
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["information"]["lockchannel"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}
elseif($text == "تعطيل الاشتراك الاجباري"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"𖠮︙بواسطة - [$first_name](tg://user?id=$from_id)
𖠮︙تم تعطيل الاشتراك الاجباري
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["information"]["lockchannel"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}}
elseif(strpos($text  , 'وضع قناة') !== false or strpos($text  , 'اضف قناة') !== false or strpos($text  , 'ضع قناة') !== false) {
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {
$add = $settings["information"]["added"];
if ($add == true) {
$code = $num = str_replace(['وضع قناة ','اضف قناة','ضع قناة'],'',$text );
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"𖠮︙بواسطة - [$first_name](tg://user?id=$from_id)
𖠮︙تم وضع القناة ← $code
𖠮︙ارسل تفعيل الاشتراك الاجباري
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);
$settings["information"]["setchannel"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else{bot('sendmessage',['chat_id'=>$chat_id,'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",'reply_to_message_id'=>$message_id,'reply_markup'=>$inlinebutton,]);}}}  

if($settings["information"]["lockchannel"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) && !in_array($from_id,$eri) && !in_array($from_id,$nazar) && !in_array($from_id,$matrxx) ){
if ($tc == 'group' | $tc == 'supergroup'){
$usernamechannel = $settings["information"]["setchannel"];
$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$usernamechannel."&user_id=".$from_id));
$tch = $forchannel->result->status;
$getGrop2 = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=".$usernamechannel))->result;
$NameGrop2 = $getGrop2->title;
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
$msg = $settings["information"]["lastmsglockchannel"];
$channeltext = $settings["channellist"]["$from_id"]["channeltext"];
if($channeltext == false){
bot('SendMessage',[ 'chat_id'=>$chat_id, 'text'=>"𖠮︙عزيزي - [$first_name](tg://user?id=$from_id)
𖠮︙لاتستطيع التحدث هنا عليك الاشتراك
𖠮︙قناة الاشتراك ← $usernamechannel
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"$NameGrop2",'url'=>"t.me/$usernamechannel"]],]])]);
bot('deletemessage',[ 'chat_id'=>$chat_id, 'message_id'=>$message_id ]);
bot('deletemessage',[ 'chat_id'=>$chat_id, 'message_id'=>$msg ]);
$msgplus = $message_id + 1;
$settings["information"]["lastmsglockchannel"]="$msgplus";
$settings["channellist"]["$from_id"]["channeltext"]="true";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('deletemessage',[ 'chat_id'=>$chat_id, 'message_id'=>$message_id ]); } } } } }

if($settings["information"]["step"] == "setchannel"){
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {
if ($tc == 'group' | $tc == 'supergroup'){
if(strpos($text  , '@') !== false) {
$plus = mb_strlen("$text ");
if($plus < 25) {
bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"𖠮︙بواسطة - [$first_name](tg://user?id=$from_id)
𖠮︙تم وضع القناة ← $text
𖠮︙ارسل تفعيل الاشتراك الاجباري
", 'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message_id, ]);
$settings["information"]["setchannel"]="$text ";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id/$chat_id.json",$settings);
}
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"*𖠮︙المعرف غير صحيح*", 'reply_to_message_id'=>$message_id,   ]); } }
else { bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>"𖠮︙خطاء يجب ان تضع @ للمعرف", 'reply_to_message_id'=>$message_id, ]); } } } }

 $sttings = json_decode(file_get_contents("data/media.json"),1);
$media = $sttings["media"][$chat_id];
$ameer = $sttings["ameer"][$chat_id];
if($sttings["media"][$chat_id]==null){
$sttings["media"][$chat_id]=0;
file_put_contents("data/media.json",json_encode($sttings));
}
$oo = $message->message_id;
if ($message->sticker){
file_put_contents("data/media.json");
$sttings['ameer'][$chat_id][] = "$oo";
$sttings["media"][$chat_id]+=1;
file_put_contents("data/media.json",json_encode($sttings));
}
if ($message->photo){
file_put_contents("data/media.json");
$sttings['ameer'][$chat_id][] = "$oo";
$sttings["media"][$chat_id]+=1;
file_put_contents("data/media.json",json_encode($sttings));
}
if ($message->video){
file_put_contents("data/media.json");
$sttings['ameer'][$chat_id][] = "$oo";
$sttings["media"][$chat_id]+=1;
file_put_contents("data/media.json",json_encode($sttings));
}
if ($message->video_note){
file_put_contents("data/media.json");
$sttings['ameer'][$chat_id][] = "$oo";
$sttings["media"][$chat_id]+=1;
file_put_contents("data/media.json",json_encode($sttings));
}
if ($message->animation){
file_put_contents("data/media.json");
$sttings['ameer'][$chat_id][] = "$oo";
$sttings["media"][$chat_id]+=1;
file_put_contents("data/media.json",json_encode($sttings));
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$AUBaland) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {
if($text == "عدد الميديا"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙  عدد الميديا : $media
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
exit();
}
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$AUBaland) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {
if($text == "مسح الميديا"){
if($media == "0"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙عدد الميديا : $media
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
exit();
}
}
}
date_default_timezone_set("Asia/Baghdad");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)) {
if($text == "مسح الميديا"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙جاري مسح الميديا انتظر قاليأ
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
for($i=0;$i<=$sttings["media"][$chat_id];$i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>"$ameer[$i]",
]);
}
$date = $message->date;
$gettime = time();
$sppedtime = $gettime - $date;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم مسح الميديا 彡 $media
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
unset($sttings['media'][$chat_id]);
unset($sttings['ameer'][$chat_id]);
file_put_contents("data/media.json",json_encode($sttings));
exit();
}
}

$id = file_get_contents('id.txt');
if($id == "✓"){
$namw = $message->new_chat_member->first_name;
$nam = $message->new_chat_member->last_name;
$idw = $message->new_chat_member->id;
$usw = $message->new_chat_member->username;
$Datauser = $update->callback_query->from->username;
$Dataid = $update->callback_query->from->id;
$chat_id2 = $update->callback_query->message->chat->id;
mkdir("Ali");
mkdir("Ali/$chat_id");
$get = file_get_contents("Ali/$chat_id2/$Dataid.txt");
if($message->new_chat_member){
bot('restrictChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$idw,
]);
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*⌯⁞ العضو 彡 *[@$usw]*
⌯⁞  الايدي 彡 *[$idw](tg://user?id=$idw)*
⌯⁞ تمت تقييدك بواسطة البوت اضغط على زر انا لست روبوت*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"⌯⁞ انا لست روبوت ⁞⌯","callback_data"=>"unban-$idw"]],
]
])
]);
file_put_contents("Ali/$chat_id/$from_id.txt",$idw);
}
$Ali = explode('-', $data);
if($data == "unban-$Ali[1]" and $get == $Dataid){
bot('promoteChatMember',[
'chat_id'=>$chat_id2,
'user_id'=>$Ali[1],
'can_send_messages'=>true,
]);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"𖠮︙تم الغاء تقيدك بنجاح انت لست روبوت بالفعل",
'parse_mode'=>"MarkDown",
]);
unlink("Ali/$chat_id2/$Dataid.txt");
}}
elseif( $text =="فتح التحقق"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"𖠮︙بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح التحقق
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('id.txt',✓);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if( $text =="قفل التحقق"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"𖠮︙بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم قفل التحقق
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 file_put_contents('id.txt',✘);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}

$token = API_KEY;
$mustafa = json_decode(file_get_contents("data/$chat_id.json"),true);
$cei = $update->edited_message->chat->id;
$cfi = $update->edited_message->from->id;
$stn = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
$runk = $stn['result']['status'];
$result = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$cei&user_id=".$cfi),true);
$result_admin = $result['result']['status'];
mkdir("data");
if($mustafa == null ){
$mustafa = '{"lock": {"put": "مفتوح"}}';
$mustafa = json_decode($mustafa,true);
file_put_contents("data/$chat_id.json",$mustafa);
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if ($text == "قفل الدخول" ) {
bot('sendMessage',[
     'chat_id'=>$chat_id,
     'text'=>"𖠮︙بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم قفل الدخول
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$mustafa["lock"]["put"]="مقفول️";
file_put_contents("data/$chat_id.json",json_encode($mustafa,true));
}
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if ($text == "فتح الدخول"  ) {
bot('sendMessage',[
     'chat_id'=>$chat_id,
     'text'=>"𖠮︙ بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم فتح الدخول
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$mustafa["lock"]["put"]="مفتوح";
file_put_contents("data/$chat_id.json",json_encode($mustafa,true));
}
}
if($mustafa["lock"]["put"] == "مقفول️"){
if($update->message->new_chat_member){
 bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$update->message->new_chat_member->id
]);
}
}

$set = file_get_contents("data/set.json");
$setch = file_get_contents("data/setch.json");
if(in_array($from_id,$Dev)){
if ($text == "🎭تعين الاشتراك" or $text == "تعيين الاشتراك الاجباري" or $text == "تغيير قناة الاشتراك" or $text == "تعيين قناة الاشتراك"){
file_put_contents("data/set.json","setch");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"𖠮︙عزيزي - $info
𖠮︙حسنأ قم بأرسال معرف قناة مندون @
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
if($text && $set =="setch" and in_array($from_id,$Dev)){
file_put_contents("data/setch.json",$text); 
file_put_contents("data/set.json","");
bot("sendmessage",["chat_id"=>$chat_id,"text"=>"𖠮︙عزيزي - $info
𖠮︙تم حفظ قناة الاشتراك بنجاح
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}}

if(in_array($from_id,$Dev)){
if($text == "🎭حذف الاشتراك" or $text == "حذف قناة الاشتراك"){
file_put_contents("data/setch.json","");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"𖠮︙عزيزي - $info
𖠮︙تم حذف قناة الاشتراك بنجاح
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}

if(!$setch){
$GT7 = "لايوجد قناة حاليأ";
}elseif($setch){
$GT7 = "@$setch";
}
if($text == "🎭جلب الاشتراك" or $text == "قناة الاشتراك" or $text == "الاشتراك الاجباري" or $text == "قناة الاشتراك الاجباري"){
$setchannel = file_get_contents("data/setchannel.json");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"𖠮︙عزيزي - $info
𖠮︙قناة الاشتراك الاجباري - $GT7
𖠮︙وضع الاشتراك - $setchannel
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
}

if($text =="تفعيل ردود المطور" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تفعيل ردود المطور بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rdodsg"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="تعطيل ردود المطور" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم تعطيل ردود المطور بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rdodsg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}

mkdir("data");
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
if($text =="اضف رد" or $text == "اظف رد"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙*حسننا , الان ارسل كلمه الرد ✓*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["addradArmof"]="$from_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
elseif($text and $settings["addradArmof"] =="$from_id"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙*جيد , يمكنك الان ارسال جواب الرد 
𖠮︙ نص,صوره,فيديو,متحركه,بصمه,اغنيه ✓*

𖠮︙لعرض الاسم ← {Name}
𖠮︙لعرض يوزر ← {User}
𖠮︙لعرض الايدي ← {Id}
𖠮︙لعرض المجموعة ← {Grop}
𖠮︙لعرض المطور ← {Dev}
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$settings["addradArmof"]="$from_id.don";
$settings["setrad"]="$text";
$settings["setraddArmof"][]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
elseif($message->photo && $settings["addradArmof"] =="$from_id.don"){
$photo = $message->photo[0]->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙* تم اضافة الرد بنجاح  ✓*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$settings[$settings["setrad"]]["photo"]="$photo";
$settings["addradArmof"]="$from_id.done";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}

elseif($message->video && $settings["addradArmof"] =="$from_id.don"){
$video = $message->video->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙* تم اضافة الرد بنجاح  ✓*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$settings[$settings["setrad"]]["video"]="$video";
$settings["addradArmof"]="$from_id.done";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
elseif($message->voice && $settings["addradArmof"] =="$from_id.don"){
$voice = $message->voice->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙تم اضافة الرد بنجاح  ✓*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$settings[$settings["setrad"]]["voice"]="$voice";
$settings["addradArmof"]="$from_id.done";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
elseif($message->audio && $settings["addradArmof"] == "$from_id.don"){
$audio = $message->audio->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙تم اضافة الرد بنجاح  ✓*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$settings[$settings["setrad"]]["audio"]="$audio";
$settings["addradArmof"]="$from_id.done";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
elseif($message->sticker && $settings["addradArmof"] =="$from_id.don"){
$sticker = $message->sticker->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙ تم اضافة الرد بنجاح  ✓*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$settings[$settings["setrad"]]["sticker"]="$sticker";
$settings["addradArmof"]="$from_id.done";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
elseif($message->text && $settings["addradArmof"] =="$from_id.don"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙ تم اضافة الرد بنجاح  ✓*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$settings[$settings["setrad"]]["text"]="$text";
$settings["addradArmof"]="$from_id.done";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
elseif($message->document && $settings["addradArmof"] =="$from_id.don"){
$document = $message->document->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙ تم اضافة الرد بنجاح  ✓*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$settings[$settings["setrad"]]["animation"]="$document";
$settings["addradArmof"]="$from_id.done";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
elseif($text and $settings[$text]["text"]!=null and $settings[$text]["text"]!="{"){
if(!@$username){$Useeer = "لايوجد يوزر";}elseif(@$username){$Useeer = "@$username";}
$text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$date | $date2"],$settings[$text]["text"]);
$text = str_replace('{Name}',$name,$text);
$text = str_replace('{Grop}',$namegroup,$text);
$text = str_replace('{Id}',$from_id,$text);
$text = str_replace('{User}',$Useeer,$text);
$text = str_replace('{Dev}',$buy,$text);
if($settings["lock"]["rdg"]=="مقفول"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>$text,'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text and $settings[$text]["photo"]!=null){
if($settings["lock"]["rdg"]=="مقفول"){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$settings[$settings["setrad"]]["photo"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text !== "اضف رد" and $settings[$text]["video"]!=null){
if($settings["lock"]["rdg"]=="مقفول"){
bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>$settings[$text]["video"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text and $settings[$text]["animation"]!=null){
if($settings["lock"]["rdg"]=="مقفول"){
bot('senddocument',[
'chat_id'=>$chat_id,
'document'=>$settings[$text]["animation"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text and $settings[$text]["audio"]!=null){
if($settings["lock"]["rdg"]=="مقفول"){
bot('sendaudio',[
'chat_id'=>$chat_id,
'audio'=>$settings[$text]["audio"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text and $settings[$text]["voice"]!=null){
if($settings["lock"]["rdg"]=="مقفول"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>$settings[$text]["voice"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text and $settings[$text]["sticker"]!=null){
if($settings["lock"]["rdg"]=="مقفول"){
bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$settings[$text]["sticker"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text =="الردود" or $text == "قائمة الردود"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)){
if($settings["setraddArmof"]!=null){
$a = $settings["setraddArmof"];
for($i =0;$i<count($a)-1;$i++){
$radod = $radod."𖠮︙ $i- $a[$i] "."\n";
}
$radod = $radod."𖠮︙ $i- $a[$i] "."\n";
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙الردود العامه المضافه في البوت
*
$radod
*",'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id, 
]);
}
else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"* 𖠮︙ يوجد ردود مضافه حاليا ❕*",
'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id, 
]);
}}}
if($text == "مسح الردود"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙ تم مسح كل الردود  ✓*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
]);
unset($settings["setraddArmof"]);
unset($settings[$settings["setrad"]]["text"]);
unset($settings[$settings["setrad"]]["photo"]);
unset($settings[$settings["setrad"]]["video"]);
unset($settings[$settings["setrad"]]["voice"]);
unset($settings[$settings["setrad"]]["animation"]);
unset($settings[$settings["setrad"]]["sticker"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
if($text == "مسح رد" or $text == "حذف رد"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙الان ارسل الرد لمسحه من المجموعه*"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id, ]);
$settings["addradArmof"]="$from_id.dell";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}
if($text && $settings["addradArmof"] =="$from_id.dell"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$nazar) or in_array($from_id,$matrxx) or in_array($from_id,$eri)){
if(in_array($text,$settings["setraddArmof"])){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙ تم مسح الرد بنجاح"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
]);
$key = array_search($text,$settings["setraddArmof"]);
unset($settings[$text]["sticker"]);
unset($settings[$text]["photo"]);
unset($settings[$text]["video"]);
unset($settings[$text]["text"]);
unset($settings[$text]["animation"]);
unset($settings[$text]["voice"]);
unset($settings[$text]["audio"]);
unset($settings["setraddArmof"][$key]);
$settings["setraddArmof"] = array_values($settings["setraddArmof"]); 
$settings["addradArmof"]="done";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}}

mkdir("data");
@$sttingamrad = json_decode(file_get_contents("data/amrad.json"),true);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
if($text =="🎭اضف رد عام" or $text == "اضف رد للكل"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙حسننا , الان ارسل كلمه الرد ✓*",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
$sttingamrad["addradArmof"]="$from_id";
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}}
elseif($text and $sttingamrad["addradArmof"] =="$from_id"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙*جيد , يمكنك الان ارسال جواب الرد 
𖠮︙ نص,صوره,فيديو,متحركه,بصمه,اغنيه ✓*

𖠮︙لعرض الاسم ← {Name}
𖠮︙لعرض يوزر ← {User}
𖠮︙لعرض الايدي ← {Id}
𖠮︙لعرض المجموعة ← {Grop}
𖠮︙لعرض المطور ← {Dev}
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$sttingamrad["addradArmof"]="$from_id.don";
$sttingamrad["setrad"]="$text";
$sttingamrad["setraddArmof"][]="$text";
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}
elseif($message->photo && $sttingamrad["addradArmof"] =="$from_id.don"){
$photo = $message->photo[0]->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙✓ تم الحفظ*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$sttingamrad[$sttingamrad["setrad"]]["photo"]="$photo";
$sttingamrad["addradArmof"]="$from_id.done";
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}

elseif($message->video && $sttingamrad["addradArmof"] =="$from_id.don"){
$video = $message->video->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙✓ تم الحفظ*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$sttingamrad[$sttingamrad["setrad"]]["video"]="$video";
$sttingamrad["addradArmof"]="$from_id.done";
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}
elseif($message->voice && $sttingamrad["addradArmof"] =="$from_id.don"){
$voice = $message->voice->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙✓ تم الحفظ*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$sttingamrad[$sttingamrad["setrad"]]["voice"]="$voice";
$sttingamrad["addradArmof"]="$from_id.done";
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}
elseif($message->audio && $sttingamrad["addradArmof"] == "$from_id.don"){
$audio = $message->audio->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙✓ تم الحفظ*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$sttingamrad[$sttingamrad["setrad"]]["audio"]="$audio";
$sttingamrad["addradArmof"]="$from_id.done";
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}
elseif($message->sticker && $sttingamrad["addradArmof"] =="$from_id.don"){
$sticker = $message->sticker->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙✓ تم الحفظ*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$sttingamrad[$sttingamrad["setrad"]]["sticker"]="$sticker";
$sttingamrad["addradArmof"]="$from_id.done";
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}
elseif($message->text && $sttingamrad["addradArmof"] =="$from_id.don"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙✓ تم الحفظ*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$sttingamrad[$sttingamrad["setrad"]]["text"]="$text";
$sttingamrad["addradArmof"]="$from_id.done";
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}
elseif($message->document && $sttingamrad["addradArmof"] =="$from_id.don"){
$document = $message->document->file_id;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙✓ تم الحفظ*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$sttingamrad[$sttingamrad["setrad"]]["animation"]="$document";
$sttingamrad["addradArmof"]="$from_id.done";
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}
elseif($text and $sttingamrad[$text]["text"]!=null and $sttingamrad[$text]["text"]!="{"){
if(!@$username){$Useeer = "لايوجد يوزر";}elseif(@$username){$Useeer = "@$username";}
$text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$date | $date2"],$sttingamrad[$text]["text"]);
$text = str_replace('{Name}',$name,$text);
$text = str_replace('{Grop}',$namegroup,$text);
$text = str_replace('{Id}',$from_id,$text);
$text = str_replace('{User}',$Useeer,$text);
$text = str_replace('{Dev}',$buy,$text);
$text = str_replace('{time}',$date2,$text);
if($settings["lock"]["rdodsg"]=="مقفول"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>$text,'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text and $sttingamrad[$text]["photo"]!=null){
if($settings["lock"]["rdodsg"]=="مقفول"){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$sttingamrad[$sttingamrad["setrad"]]["photo"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text !== "🎭اضف رد عام" and $sttingamrad[$text]["video"]!=null){
if($settings["lock"]["rdodsg"]=="مقفول"){
bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>$sttingamrad[$text]["video"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text and $sttingamrad[$text]["animation"]!=null){
if($settings["lock"]["rdodsg"]=="مقفول"){
bot('senddocument',[
'chat_id'=>$chat_id,
'document'=>$sttingamrad[$text]["animation"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text and $sttingamrad[$text]["audio"]!=null){
if($settings["lock"]["rdodsg"]=="مقفول"){
bot('sendaudio',[
'chat_id'=>$chat_id,
'audio'=>$sttingamrad[$text]["audio"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text and $sttingamrad[$text]["voice"]!=null){
if($settings["lock"]["rdodsg"]=="مقفول"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>$sttingamrad[$text]["voice"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text and $sttingamrad[$text]["sticker"]!=null){
if($settings["lock"]["rdodsg"]=="مقفول"){
bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$sttingamrad[$text]["sticker"],'reply_to_message_id'=>$message->message_id, 
]);
}}
elseif($text =="🎭ردود المطور" or $text == "قائمة الردود العامه"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
if($sttingamrad["setraddArmof"]!=null){
$a = $sttingamrad["setraddArmof"];
for($i =0;$i<count($a)-1;$i++){
$radod = $radod."𖠮︙ ↵{ $i- $a[$i] }"."\n";
}
$radod = $radod."𖠮︙ ↵{ $i- $a[$i] }"."\n";
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙قائمه الردود العامه 
•━━━━━━━━━━━━━━•
$radod
",'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id, 
]);
}
else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙لم يتم اضافة ردود عامه *",
'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id, 
]);
}}}
if($text == "🎭حذف ردود المطور"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم مسح ردود المطور بنجاح",
'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id, 
]);
unset($sttingamrad["setraddArmof"]);
unset($sttingamrad[$sttingamrad["setrad"]]["text"]);
unset($sttingamrad[$sttingamrad["setrad"]]["photo"]);
unset($sttingamrad[$sttingamrad["setrad"]]["video"]);
unset($sttingamrad[$sttingamrad["setrad"]]["voice"]);
unset($sttingamrad[$sttingamrad["setrad"]]["animation"]);
unset($sttingamrad[$sttingamrad["setrad"]]["sticker"]);
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}}
if($text == "حذف رد للكل" or $text == "🎭حذف رد عام"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙ xقم بارسال الرد العام المراد حذفه*",'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id, ]);
$sttingamrad["addradArmof"]="$from_id.dell";
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}}
if($text && $sttingamrad["addradArmof"] =="$from_id.dell"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
if(in_array($text,$sttingamrad["setraddArmof"])){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم حذف الرد العام $text",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, 
]);
$key = array_search($text,$sttingamrad["setraddArmof"]);
unset($sttingamrad[$text]["sticker"]);
unset($sttingamrad[$text]["photo"]);
unset($sttingamrad[$text]["video"]);
unset($sttingamrad[$text]["text"]);
unset($sttingamrad[$text]["animation"]);
unset($sttingamrad[$text]["voice"]);
unset($sttingamrad[$text]["audio"]);
unset($sttingamrad["setraddArmof"][$key]);
$sttingamrad["setraddArmof"] = array_values($sttingamrad["setraddArmof"]); 
$sttingamrad["addradArmof"]="done";
$sttingamrad = json_encode($sttingamrad,true);
file_put_contents("data/amrad.json",$sttingamrad);
}}}


$kdeveloper = file_get_contents("kdevelopers.txt");
$kdevelopers = file_get_contents("kdeveloper.txt");
if ($text == "🎭تعين كليشة المطور" || $text == "وضع كليشة المطور" and in_array($from_id,$Dev)){
file_put_contents("kdevelopers.txt","namdev");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"𖠮︙حسننا عزيزي المطور،
𖠮︙الان ارسل كليشة المطور
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $kdeveloper =="namdev" and in_array($from_id,$Dev)){
file_put_contents("kdeveloper.txt",$text); 
file_put_contents("kdevelopers.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
𖠮︙حسننا عزيزي المطور،
𖠮︙ تم حفظ  كليشة المطور الخاصه فيك
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text == "المطور" and $kdevelopers != null || $kdevelopers != " "){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"$kdevelopers",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id,
]);}}
if($text == "المطور"and $kdevelopers == null || $kdevelopers == " "){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"[$NameDev](https://t.me/$buy)",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id,
]);}}
if ($text == "🎭حذف كليشة المطور" or $text == "مسح المطور"){
if (in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙ اهلا عزيزي ~⪼ $info 
𖠮︙ تم حذف كليشة المطور
",
'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("kdeveloper.txt",""); 
file_put_contents("kdevelopers.txt","");
}
}

if($text =="🎭تعطيل الاشتراك"){
if (in_array($from_id,$Dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"⌁⁞ تم تعطيل الاشتراك الاجباري",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
file_put_contents("data/setchannel.json","معطل ✖️");}}

if($text =="🎭تفعيل الاشتراك"){
if (in_array($from_id,$Dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"⌁⁞ تم تفعيل الاشتراك الاجباري",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
file_put_contents("data/setchannel.json","مفعل ✔️");}}
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$from_id2 = $update->callback_query->from->id;
if($text =="من سيربح المليون"){
file_put_contents("game/$chat_id/game.txt","gamemil");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙اليك لعبة من سيربح المليون 
𖠮︙اتبع القوانين - مندون تكرار 
𖠮︙اذا لم يعجبك العب اضغط الغاء"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⌁⁞ ابدء ⁞⌁' ,'callback_data'=>"mai1"],['text'=>'⌁⁞ الغاء ⁞⌁' ,'callback_data'=>"deletmil"]],
[['text'=>"⌁⁞ مبرمج السورس ⁞⌁",'url'=>"t.me/P_UIII"]],
]])
]); 
}
if($data == "nd3" ){
file_put_contents("game/$chat_id/game.txt","gamemil");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙تم العودة الان
𖠮︙اليك لعبة من سيربح المليون 
𖠮︙اتبع القوانين - مندون تكرار 
𖠮︙اذا لم يعجبك العب اضغط الغاء",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⌁⁞ ابدء ⁞⌁' ,'callback_data'=>"mai1"],['text'=>'⌁⁞ الغاء ⁞⌁' ,'callback_data'=>"deletmil"]],
[['text'=>"⌁⁞ مبرمج السورس ⁞⌁",'url'=>"t.me/P_UIII"]],
]])
]); 
}
if($data == "nb" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙جـابـتـك كانـت خـاطـئـة لـلاسـف‼️",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⌁⁞ رجوع ⁞⌁' ,'callback_data'=>"nd3"]],
[['text'=>'⌁⁞ الغاء ⁞⌁' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "nb1" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙قـد خـسـرت لـلاسـف اجـابـتـك كـانـت خـاطـئـه‼️",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⌁⁞ رجوع ⁞⌁' ,'callback_data'=>"nd3"]],
[['text'=>'⌁⁞ الغاء ⁞⌁' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "mai1" ){
file_put_contents("game/$chat_id/game.txt","gamemil");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙مـا هـي عـاصـمـة الـعـراق",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⌁⁞ كركوك ⁞⌁' ,'callback_data'=>"nb1"]],
[['text'=>'⌁⁞ بغداد ⁞⌁' ,'callback_data'=>"mai2"]],
[['text'=>'⌁⁞ بصره ⁞⌁' ,'callback_data'=>"nb"]],
[['text'=>'⌁⁞ الغاء ⁞⌁' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "mai2" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙حـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⌁⁞ التالي ⁞⌁' ,'callback_data'=>"mil3"]],
[['text'=>'⌁⁞ الغاء ⁞⌁' ,'callback_data'=>"deletmil"]],
]])
]); 
file_put_contents("gamemil.txt","gamemil");
unlink("game");
}
if($data == "mil3" ){
	file_put_contents("game/$chat_id/game.txt","gamemil");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙كم عدد فقرات عنق الزرافة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⌁⁞ خمسه ⁞⌁' ,'callback_data'=>"nb1"]],
[['text'=>'⌁⁞ سبعه ⁞⌁' ,'callback_data'=>"mai4"]],
[['text'=>'⌁⁞ ثلاث ⁞⌁' ,'callback_data'=>"nb"]],
[['text'=>'⌁⁞ الغاء ⁞⌁' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "mai4" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙حـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⌁⁞ التالي ⁞⌁' ,'callback_data'=>"mil5"]],
[['text'=>'⌁⁞ الغاء ⁞⌁' ,'callback_data'=>"deletmil"]],
]])
]); 
file_put_contents("data/gamemil.txt","gamemil");
unlink("game");
}
if($data == "mil5" ){
	file_put_contents("game/$chat_id/game.txt","gamemil");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙كم قلب للأخطبوطة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⌁⁞ واحد ⁞⌁' ,'callback_data'=>"nb1"]],
[['text'=>'⌁⁞ ثلاث ⁞⌁' ,'callback_data'=>"mai6"]],
[['text'=>'⌁⁞ ثنين ⁞⌁' ,'callback_data'=>"nb"]],
[['text'=>'⌁⁞ الغاء ⁞⌁' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "mai6" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙حـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⌁⁞ التالي ⁞⌁' ,'callback_data'=>"mil7"]],
[['text'=>'⌁⁞ الغاء ⁞⌁' ,'callback_data'=>"deletmil"]],
]])
]); 
file_put_contents("data/gamemil.txt","gamemil");
unlink("game");
}
if($data == "mil7" ){
	file_put_contents("game/$chat_id/game.txt","gamemil");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙ماهو اكبر اقتصاد للمواد المحترقه",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⌁⁞ الفحم ⁞⌁' ,'callback_data'=>"nb1"]],
[['text'=>'⌁⁞ البانزين ⁞⌁' ,'callback_data'=>"mai8"]],
[['text'=>'⌁⁞ الغاز ⁞⌁' ,'callback_data'=>"nb"]],
[['text'=>'⌁⁞ الغاء ⁞⌁' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "mai8" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙حـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⌁⁞ التالي ⁞⌁' ,'callback_data'=>"mil9"]],
[['text'=>'⌁⁞ الغاء ⁞⌁' ,'callback_data'=>"deletmil"]],
]])
]); 
file_put_contents("data/gamemil.txt","gamemil");
unlink("game");
}
if($data == "mil9" ){
	file_put_contents("game/$chat_id/game.txt","gamemil");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙من هو خاتم الانبياء ",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⌁⁞ النبي محمد ⁞⌁' ,'callback_data'=>"mai10"]],
[['text'=>'⌁⁞ النبي عيسئ ⁞⌁' ,'callback_data'=>"nb1"]],
[['text'=>'⌁⁞ النبي ابراهيم ⁞⌁' ,'callback_data'=>"nb"]],
[['text'=>'⌁⁞ الغاء ⁞⌁' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "mai10" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙حـسـنـت اجـابـتـك صـحـيـحـة 🎊",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⌁⁞ التالي ⁞⌁' ,'callback_data'=>"mil11"]],
[['text'=>'⌁⁞ الغاء ⁞⌁' ,'callback_data'=>"deletmil"]],
]])
]); 
file_put_contents("data/gamemil.txt","gamemil");
unlink("game");
}
if($data == "mil11" ){
	file_put_contents("game/$chat_id/game.txt","gamemil");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙ماهي عاصمة فرنسا",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⌁⁞ لندن ⁞⌁' ,'callback_data'=>"nb1"]],
[['text'=>'⌁⁞ باريس ⁞⌁' ,'callback_data'=>"mil12"]],
[['text'=>'⌁⁞ واشنطن ⁞⌁' ,'callback_data'=>"nb"]],
[['text'=>'⌁⁞ الغاء ⁞⌁' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "mil12" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙حـسـنـت اجـابـتـك صـحـيـحـة 🎊
𖠮︙تم انتهاء الاسئلة يمكنك العودة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⌁⁞ العودة ⁞⌁' ,'callback_data'=>"nd3"]],
[['text'=>'⌁⁞ الغاء ⁞⌁' ,'callback_data'=>"deletmil"]],
]])
]); 
file_put_contents("data/gamemil.txt","gamemil");
unlink("game");
}
$game = json_decode(file_get_contents('data/game.json'),true);
$from_user = $message->from->username;
$from_name = $message->from->first_name;
$get_game = file_get_contents("data/game.txt");
$game1 = explode("\n",$get_game);
 if($text =="الالعاب" or $text =="العاب"){
 $lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){	
file_put_contents("game/$chat_id/game.json","game");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙عزيزي ← [$name](tg://user?id=$from_id)
𖠮︙اليك قائمة الالعاب 
𖠮︙نقاطك حاليأ ← .".$game['game'][$chat_id][$from_id].".
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭معاني 𖠮' ,'callback_data'=>"man1"],['text'=>'🎭محيبس 𖠮' ,'callback_data'=>"mas"]],
[['text'=>'🎭قريبأ 𖠮' ,'callback_data'=>"OFF"],['text'=>'🎭قريبأ 𖠮' ,'callback_data'=>"OFF"]],
[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
[['text'=>"🎭قناة السورس 𖠮",'url'=>"t.me/vv399"]],
]])
]); 
}
}
if($data == "back" ){
file_put_contents("game/$chat_id/game.json","game");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"︙عزيزي ← [$name2](tg://user?id=$from_id2)
𖠮︙تم العودة الي قائمة الالعاب
𖠮︙نقاطك حاليأ ← .".$game['game'][$chat_id2][$from_id2].".",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭معاني 𖠮' ,'callback_data'=>"man1"],['text'=>'🎭محيبس 𖠮' ,'callback_data'=>"mas"]],
[['text'=>'🎭قريبأ 𖠮' ,'callback_data'=>"OFF"],['text'=>'🎭قريبأ 𖠮' ,'callback_data'=>"OFF"]],
[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
[['text'=>"🎭قناة السورس 𖠮",'url'=>"t.me/vv399"]],
]])
]); 
}
if($data == "cht" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙اجـابـتـك كانـت خـاطـئـة لـلاسـف",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],
[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "cht1" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙لقـد خـسـرت لـلاسـف اجـابـتـك كـانـت خـاطـئـه",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],
[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man1" ){
file_put_contents("game/$chat_id/game.json","gameman");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙عزيزي ماهو معني ← 🐴",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭حصان 𖠮' ,'callback_data'=>"man2"]],
[['text'=>'🎭مطي 𖠮' ,'callback_data'=>"cht"]],
[['text'=>'🎭كلب 𖠮' ,'callback_data'=>"cht1"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man2" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙احـسـنـت اجـابـتـك صـحـيـحـة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭التالي 𖠮' ,'callback_data'=>"man3"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man3" ){
file_put_contents("game/$chat_id/game.json","gameman");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙عزيزي ماهو معني ← 🦒",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭فيل 𖠮' ,'callback_data'=>"cht"]],
[['text'=>'🎭زرافه 𖠮' ,'callback_data'=>"man4"]],
[['text'=>'🎭بقرة 𖠮' ,'callback_data'=>"cht1"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man4" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙احـسـنـت اجـابـتـك صـحـيـحـة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭التالي 𖠮' ,'callback_data'=>"man5"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man5" ){
file_put_contents("game/$chat_id/game.json","game");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙عزيزي ماهو معني ← 🦁",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭خروف 𖠮' ,'callback_data'=>"cht1"]],
[['text'=>'🎭ذئب 𖠮' ,'callback_data'=>"cht"]],
[['text'=>'🎭اسد 𖠮' ,'callback_data'=>"man6"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man6" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙احـسـنـت اجـابـتـك صـحـيـحـة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭التالي 𖠮' ,'callback_data'=>"man7"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man7" ){
file_put_contents("game/$chat_id/game.json","gameman");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙عزيزي ماهو معني ← 🐫",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭جمل 𖠮' ,'callback_data'=>"man8"]],
[['text'=>'🎭زرافه 𖠮' ,'callback_data'=>"cht"]],
[['text'=>'🎭حصان 𖠮' ,'callback_data'=>"cht1"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man8" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙احـسـنـت اجـابـتـك صـحـيـحـة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭التالي 𖠮' ,'callback_data'=>"man9"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man9" ){
file_put_contents("game/$chat_id/game.json","gameman");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙عزيزي ماهو معني ← 🐒",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭قرد 𖠮' ,'callback_data'=>"man10"]],
[['text'=>'🎭شاذي 𖠮' ,'callback_data'=>"cht"]],
[['text'=>'🎭فأر 𖠮' ,'callback_data'=>"cht1"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man10" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙احـسـنـت اجـابـتـك صـحـيـحـة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭التالي 𖠮' ,'callback_data'=>"man11"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man11" ){
file_put_contents("game/$chat_id/game.json","gameman");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙عزيزي ماهو معني ← 🐄",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭بقره 𖠮' ,'callback_data'=>"man12"]],
[['text'=>'🎭اسد 𖠮' ,'callback_data'=>"cht"]],
[['text'=>'🎭ذئب 𖠮' ,'callback_data'=>"cht1"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man12" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙احـسـنـت اجـابـتـك صـحـيـحـة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭التالي 𖠮' ,'callback_data'=>"man13"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man13" ){
file_put_contents("game/$chat_id/game.json","gameman");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙عزيزي ماهو معني ← 🐏",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭كلب 𖠮' ,'callback_data'=>"cht1"]],
[['text'=>'🎭نعجه 𖠮' ,'callback_data'=>"cht"]],
[['text'=>'🎭خروف 𖠮' ,'callback_data'=>"man14"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man14" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙احـسـنـت اجـابـتـك صـحـيـحـة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭التالي 𖠮' ,'callback_data'=>"man15"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man15" ){
file_put_contents("game/$chat_id/game.json","gameman");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙عزيزي ماهو معني ← 🐁",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭فأر 𖠮' ,'callback_data'=>"man16"]],
[['text'=>'🎭قنفذ 𖠮' ,'callback_data'=>"cht"]],
[['text'=>'🎭قط 𖠮' ,'callback_data'=>"cht1"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data == "man16" ){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙احـسـنـت اجـابـتـك صـحـيـحـة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭التالي 𖠮' ,'callback_data'=>"man9"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]])
]); 
}
if($data=="mas"){
file_put_contents("game/$chat_id/game.json","gameman");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اختر العضمه الصحيحه ☘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👊",'callback_data'=>"mas112"]],
[['text'=>"👊",'callback_data'=>"mas1"]],
[['text'=>"👊",'callback_data'=>"mas113"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="mas112"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"يرجع 😹😹✨",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],
[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="mas113"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"يرجع 😹😹✨",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],
[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="mas1"){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تلعب خوش تلعب 💍",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🎭اعادة العب 𖠮",'callback_data'=>"mas2"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="mas2"){
file_put_contents("game/$chat_id/game.json","gameman");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اختر العضمه الصحيحه ☘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👊",'callback_data'=>"mas3"]],
[['text'=>"👊",'callback_data'=>"mas112"]],
[['text'=>"👊",'callback_data'=>"mas113"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="mas3"){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تلعب خوش تلعب 💍",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🎭اعادة العب 𖠮",'callback_data'=>"mas4"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="mas4"){
file_put_contents("game/$chat_id/game.json","gameman");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اختر العضمه الصحيحه ☘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👊",'callback_data'=>"mas112"]],
[['text'=>"👊",'callback_data'=>"mas5"]],
[['text'=>"👊",'callback_data'=>"mas113"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="mas5"){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تلعب خوش تلعب 💍",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🎭اعادة العب 𖠮",'callback_data'=>"mas6"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="mas6"){
file_put_contents("game/$chat_id/game.json","gameman");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اختر العضمه الصحيحه ☘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👊",'callback_data'=>"mas112"]],
[['text'=>"👊",'callback_data'=>"mas113"]],
[['text'=>"👊",'callback_data'=>"mas7"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="mas7"){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تلعب خوش تلعب 💍",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🎭اعادة العب 𖠮",'callback_data'=>"mas8"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="mas8"){
file_put_contents("game/$chat_id/game.json","gameman");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text' =>"اختر العضمه الصحيحه ☘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👊",'callback_data'=>"mas9"]],
[['text'=>"👊",'callback_data'=>"mas112"]],
[['text'=>"👊",'callback_data'=>"mas113"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="mas9"){
$game['game'][$chat_id2][$from_id2] = ($game['game'][$chat_id2][$from_id2]+1);
file_put_contents('data/game.json', json_encode($game));
file_put_contents("data/gamemil.txt","");
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تلعب خوش تلعب 💍",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🎭اعادة العب 𖠮",'callback_data'=>"mas10"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"back"]],[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
]
])
]);
}
if($data=="deletmil"){
bot ('EditMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id2,
'text'=>"𖠮︙تم الغاء قائمة العب بنجاح",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,]);
sleep(15);
bot('deletemessage',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message->message_id,
]);}
$m = "𖠮︙عزيزي ← [$name](tg://user?id=$from_id)
𖠮︙الان قم ب تحديد الرتبه";
$time = date('h:i A');
date_default_timezone_set('Asia/Baghdad');
$idmatrxx = file_get_contents("data/matrxx.json");
if($re and $text == "تنزيل" and $text == "رفع"){
file_put_contents("data/matrxx.json","$re_id");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$m"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭قائمة الرفع 𖠮' ,'callback_data'=>"mnas"],['text'=>'🎭قائمة تنزيل 𖠮' ,'callback_data'=>"mnas"]],
[['text'=>'🎭منشئ اساسي 𖠮' ,'callback_data'=>"mnas"],['text'=>'🎭منشئ اساسي 𖠮' ,'callback_data'=>"mnas"]],
[['text'=>'🎭منشئ 𖠮' ,'callback_data'=>"mn"],['text'=>'🎭منشئ 𖠮' ,'callback_data'=>"delmd"]],
[['text'=>'🎭مدير 𖠮' ,'callback_data'=>"md"],['text'=>'🎭مدير 𖠮' ,'callback_data'=>"delmd"]],
[['text'=>'🎭ادمن 𖠮' ,'callback_data'=>"ad"],['text'=>'🎭ادمن 𖠮' ,'callback_data'=>"delad"]],
[['text'=>'🎭مميز 𖠮' ,'callback_data'=>"mz"],['text'=>'🎭مميز 𖠮' ,'callback_data'=>"delmz"]],
[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
[['text'=>"🎭قناة السورس 𖠮",'url'=>"t.me/vv399"]],
]])
]); 
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙ارسل تفعيل ليتم تفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}}}
if($data == "mnas"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri)) {
if (!in_array($idmatrxx,$nazar)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->first_name;
file_put_contents("data/nazar/$chat_id.txt",$idmatrxx . "\n" , FILE_APPEND);
file_put_contents("data/nazar/$chat_id/nazr.txt" , " *𓆩* [" . "@". $userr ."] *𓆪* " . "»" . " *𓆩* `". $idmatrxx ."` *𓆪* ". "\n" , FILE_APPEND);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙العضو ← [$namee](tg://user?id=$idmatrxx)
𖠮︙تم ترقيه ليصبح ← منشئ اساسي",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭تنزيل الرتبه 𖠮' ,'callback_data'=>"delmnas"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "mnas"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri)) {
if (in_array($idmatrxx,$nazar)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙العضو ← [$namee](tg://user?id=$idmatrxx)
𖠮︙هوه بالفعل ← منشئ اساسي",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭تنزيل الرتبه 𖠮' ,'callback_data'=>"delmnas"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "delmnas"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri)) {
if (in_array($idmatrxx,$nazar)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->first_name;
$re_id_info = file_get_contents("data/matrxx/$chat_id.txt");
	$mdrs = file_get_contents("data/matrxx/$chat_id/crlo.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($idmatrxx,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $userr ."] *𓆪* " . "»" . " *𓆩* `". $idmatrxx ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/matrxx/$chat_id.txt",$str);
	file_put_contents("data/matrxx/$chat_id/crlo.txt",$str2);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙العضو ← [$namee](tg://user?id=$idmatrxx)
𖠮︙تم تنزيل من ← المنشيئن الاساسين",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}}
if ($data == "delmnas"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri)) {
if (!in_array($idmatrxx,$nazar)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙العضو ← [$namee](tg://user?id=$idmatrxx)
𖠮︙لا استطيع تنزيله هوه ليس  ← منشئ اساسي",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}}
if($data == "mn"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (!in_array($idmatrxx,$matrxx)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->first_name;
file_put_contents("data/matrxx/$chat_id.txt",$idmatrxx . "\n" , FILE_APPEND);
file_put_contents("data/matrxx/$chat_id/crlo.txt" , " *𓆩* [" . "@". $userr ."] *𓆪* " . "»" . " *𓆩* `". $idmatrxx ."` *𓆪* ". "\n" , FILE_APPEND);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙العضو ← [$namee](tg://user?id=$idmatrxx)
𖠮︙تم ترقيه ليصبح ← منشئ",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭تنزيل الرتبه 𖠮' ,'callback_data'=>"delmn"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "mn"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idmatrxx,$matrxx)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙العضو ← [$namee](tg://user?id=$idmatrxx)
𖠮︙هوه بالفعل ← منشئ",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭تنزيل الرتبه 𖠮' ,'callback_data'=>"delmn"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "delmn"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idmatrxx,$matrxx)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->first_name;
$re_id_info = file_get_contents("data/matrxx/$chat_id.txt");
	$mdrs = file_get_contents("data/matrxx/$chat_id/crlo.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($idmatrxx,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $userr ."] *𓆪* " . "»" . " *𓆩* `". $idmatrxx ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/matrxx/$chat_id.txt",$str);
	file_put_contents("data/matrxx/$chat_id/crlo.txt",$str2);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙العضو ← [$namee](tg://user?id=$idmatrxx)
𖠮︙تم تنزيل من ← المنشئين",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}}
if ($data == "delmn"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (!in_array($idmatrxx,$matrxx)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙العضو ← [$namee](tg://user?id=$idmatrxx)
𖠮︙لا استطيع تنزيله هوه ليس  ← منشئ",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}}
if($data == "md"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$matrxx) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (!in_array($idmatrxx,$manger)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->first_name;
file_put_contents("data/manger/$chat_id.txt",$idmatrxx . "\n" , FILE_APPEND);
file_put_contents("data/manger/$chat_id/mange.txt" , " *𓆩* [" . "@". $userr ."] *𓆪* " . "»" . " *𓆩* `". $idmatrxx ."` *𓆪* ". "\n" , FILE_APPEND);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙العضو ← [$namee](tg://user?id=$idmatrxx)
𖠮︙تم ترقيه ليصبح ← مدير",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭تنزيل الرتبه 𖠮' ,'callback_data'=>"delmd"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "md"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$matrxx) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idmatrxx,$manger)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙العضو ← [$namee](tg://user?id=$idmatrxx)
𖠮︙هوه بالفعل ← مدير",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭تنزيل الرتبه 𖠮' ,'callback_data'=>"delmd"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "delmd"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$matrxx) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idmatrxx,$manger)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->first_name;
$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($idmatrxx,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $userr ."] *𓆪* " . "»" . " *𓆩* `". $idmatrxx ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙العضو ← [$namee](tg://user?id=$idmatrxx)
𖠮︙تم تنزيل من ← المدراء",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}
}
if ($data == "delmd"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$matrxx) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (!in_array($idmatrxx,$manger)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙العضو ← [$namee](tg://user?id=$idmatrxx)
𖠮︙لا استطيع تنزيله هوه ليس  ← مدير",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}
}
if($data == "ad"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$developer) or in_array($from_id2,$matrxx) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (!in_array($idmatrxx,$admin_user)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->first_name;
file_put_contents("data/admin_user/$chat_id.txt",$idmatrxx . "\n" , FILE_APPEND);
file_put_contents("data/admin_user/$chat_id/mange.txt" , " *𓆩* [" . "@". $userr ."] *𓆪* " . "»" . " *𓆩* ". $idmatrxx ." *𓆪* ". "\n" , FILE_APPEND);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙العضو ← [$namee](tg://user?id=$idmatrxx)
𖠮︙تم ترقيه ليصبح ← ادمن",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭تنزيل الرتبه 𖠮' ,'callback_data'=>"delad"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "ad"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$developer) or in_array($from_id2,$matrxx) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idmatrxx,$admin_user)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙العضو ← [$namee](tg://user?id=$idmatrxx)
𖠮︙هوه بالفعل ← ادمن",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭تنزيل الرتبه 𖠮' ,'callback_data'=>"delad"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "delad"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$developer) or in_array($from_id2,$matrxx) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idmatrxx,$admin_user)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->first_name;
$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
 $admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
 $admn1 = explode("             \n",$admn);
 $str = str_replace($idmatrxx,"",$re_id_info);
 $str2 = str_replace(" *𓆩* [" . "@". $userr ."] *𓆪* " . "»" . " *𓆩* ". $idmatrxx ." *𓆪* ","",$admn1);
 file_put_contents("data/admin_user/$chat_id.txt",$str);
 file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙العضو ← [$namee](tg://user?id=$idmatrxx)
𖠮︙تم تنزيل من ← الادمنيه",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}
}
if ($data == "delad"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$developer) or in_array($from_id2,$matrxx) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idmatrxx,$admin_user)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙العضو ← [$namee](tg://user?id=$idmatrxx)
𖠮︙لا استطيع تنزيله هوه ليس  ← ادمن",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}
}
if($data == "mz"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$matrxx) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (!in_array($idmatrxx,$mmyaz)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->first_name;
file_put_contents("data/mmyaz/$chat_id.txt",$idmatrxx . "\n" , FILE_APPEND);
file_put_contents("data/mmyaz/$chat_id/mange.txt" , " *𓆩* [" . "@". $userr ."] *𓆪* " . "»" . " *𓆩* `". $idmatrxx ."` *𓆪* ". "\n" , FILE_APPEND);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙العضو ← [$namee](tg://user?id=$idmatrxx)
𖠮︙تم ترقيه ليصبح ← مميز",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭تنزيل الرتبه 𖠮' ,'callback_data'=>"delmz"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "mz"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$matrxx) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idmatrxx,$mmyaz)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙العضو ← [$namee](tg://user?id=$idmatrxx)
𖠮︙هوه بالفعل ← مميز",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭تنزيل الرتبه 𖠮' ,'callback_data'=>"delmz"]],
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "delmz"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$matrxx) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idmatrxx,$mmyaz)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->first_name;
$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($idmatrxx,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $userr ."] *𓆪* " . "»" . " *𓆩* `". $idmatrxx ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙العضو ← [$namee](tg://user?id=$idmatrxx)
𖠮︙تم تنزيل من ← المميزين",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}
}
if ($data == "delmz"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$matrxx) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (!in_array($idmatrxx,$mmyaz)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idmatrxx"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙العضو ← [$namee](tg://user?id=$idmatrxx)
𖠮︙لا استطيع تنزيله هوه ليس  ← مميز",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭رجوع 𖠮' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}
}
if ($data == "rafaa"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$matrxx) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"𖠮︙عزيزي ← [$name2](tg://user?id=$from_id2)
𖠮︙الان قم ب تحديد الرتبه",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'🎭قائمة الرفع 𖠮' ,'callback_data'=>"mnas"],['text'=>'🎭قائمة تنزيل 𖠮' ,'callback_data'=>"mnas"]],
[['text'=>'🎭منشئ اساسي 𖠮' ,'callback_data'=>"mnas"],['text'=>'🎭منشئ اساسي 𖠮' ,'callback_data'=>"mnas"]],
[['text'=>'🎭منشئ 𖠮' ,'callback_data'=>"mn"],['text'=>'🎭منشئ 𖠮' ,'callback_data'=>"delmd"]],
[['text'=>'🎭مدير 𖠮' ,'callback_data'=>"md"],['text'=>'🎭مدير 𖠮' ,'callback_data'=>"delmd"]],
[['text'=>'🎭ادمن 𖠮' ,'callback_data'=>"ad"],['text'=>'🎭ادمن 𖠮' ,'callback_data'=>"delad"]],
[['text'=>'🎭مميز 𖠮' ,'callback_data'=>"mz"],['text'=>'🎭مميز 𖠮' ,'callback_data'=>"delmz"]],
[['text'=>'🎭الغاء 𖠮' ,'callback_data'=>"deletmil"]],
[['text'=>"🎭قناة السورس 𖠮",'url'=>"t.me/vv399"]],
]])
]); 
}
}
if (strpos($text, 'بيع نقاطي') !== false or strpos($text, 'بيع نقودي') !== false){
if($game['game'][$chat_id][$from_id] >= 1 and $game['game'][$chat_id][$from_id] != null){
$num= str_replace(['بيع نقودي','بيع نقاطي'],'',$text);
if ($num <= 300 && $num >= 1){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙ تم خصم ~ { $num } من مجوهراتك 
𖠮︙ وتم زيادة تفاعلك في المجموعه",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('data/msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+$num*5);
file_put_contents('data/msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-$num);file_put_contents('data/game.json', json_encode($game));
}
}
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
if ($rt && strpos($text, 'اضف رسائل') !== false){
$num= str_replace('اضف رسائل','',$text);
if ($num <= 300000000 && $num >= 1){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙تم اضافة له {$num} من الرسائل
",
'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,
]);
$msgs = json_decode(file_get_contents('data/msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$re_id] = ($msgs['msgs'][$chat_id][$re_id]+$num);
file_put_contents('data/msgs.json', json_encode($msgs));
}
}
}
$ngat = file_get_contents("data/ngt.json");
$n = file_get_contents("data/sero.json");
if($status == "craetor" or in_array($from_id,$Dev) or in_array($from_id,$developer)){
if(strpos($text, "اضف نقاط ") !== false){
$an = str_replace("اضف نقاط ", "", $text);
if($tc == "supergroup"){
file_put_contents("data/ngt.json","ngat");
file_put_contents("data/sero.json","$an");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙عزيزي ~⪼ $info
𖠮︙ شخص المطلوب ~⪼ $an
𖠮︙ قم بأرسال عدد النقاط ليتم توصيلهن
",
 'reply_to_message_id'=>$message_id
,]);}}}
if($text and preg_match('/([0-9])/i',$text) && $ngat =="ngat"){
if($status == "craetor" or in_array($from_id,$Dev) or in_array($from_id,$developer)){
if($tc == "supergroup"){
bot("sendmessage",[
"chat_id"=>$chat_id,
'text'=>"
𖠮︙عزيزي ~⪼ $info
𖠮︙العضو المطلوب ~⪼ $n
𖠮︙عدد النقاط ~⪼ $text
𖠮︙تم توصيل الطلب 
",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("data/ngt.json","");
$game['game'][$chat_id][$n] = ($game['game'][$chat_id][$n]+$text);file_put_contents('data/game.json', json_encode($game));
}}}

$oopp = file_get_contents("data/ngt.json");
$n = file_get_contents("data/sero.json");
if($status == "craetor" or in_array($from_id,$Dev) or in_array($from_id,$developer)){
if ($rt && $text == "اضف نقاط" ){
if($tc == "supergroup"){
file_put_contents("data/ngt.json","nnam");
file_put_contents("data/sero.json","$re_id");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙ عزيزي ~⪼ $info
𖠮︙شخص المطلوب ~⪼ $re_id
𖠮︙قم بأرسال عدد النقاط ليتم توصيلهن
",
 'reply_to_message_id'=>$message_id
,]);}}}
if($text && $oopp =="nnam"){
if($status == "craetor" or in_array($from_id,$Dev) or in_array($from_id,$developer)){
if($tc == "supergroup"){
bot("sendmessage",[
"chat_id"=>$chat_id,
'text'=>"
𖠮︙عزيزي ~⪼ $info
𖠮︙العضو المطلوب ~⪼ $n
𖠮︙عدد النقاط ~⪼ $text
𖠮︙تم توصيل الطلب 
",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("data/ngt.json","");
$game['game'][$chat_id][$n] = ($game['game'][$chat_id][$n]+$text);file_put_contents('data/game.json', json_encode($game));
}}}
if($text == "نقاطي" and $game['game'][$chat_id][$from_id]!== NULL || $game['game'][$chat_id][$from_id]!== 0){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙اهلأ عزيزي ← $info
𖠮︙نقودك الحاليأ ← .".$game['game'][$chat_id][$from_id].".
",
'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,
]);
}
if($message and $tc == "supergroup"){
$msgs = json_decode(file_get_contents('data/msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
file_put_contents('data/msgs.json', json_encode($msgs));
}
if($text == "msg" or $text == "رسائلي"){bot('sendmessage',['chat_id'=>$chat_id,'text'=>"*💬 ❉ رسائلك »{ ".$msgs['msgs'][$chat_id][$from_id]." } ➺*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);}
if($text == "مسح رسايلي" or $text == "مسح رسائلي" || $text == "رس"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙تم مسح جميع رسائلك",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('data/msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]=0);
file_put_contents('data/msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-20);file_put_contents('data/game.json', json_encode($game));
}
$chatid = $update->edited_message->chat->id;
$fromid = $update->edited_message->from->id;
$edit = json_decode(file_get_contents('data/edit.json'),true);
$editMessage = $update->edited_message;
if($editMessage){
$edit['edit'][$chatid][$fromid] = ($edit['edit'][$chatid][$fromid]+1);
file_put_contents('data/edit.json', json_encode($edit));
}
if($edit['edit'][$chat_id][$from_id] == null){
$editt = 0;
}else{
$editt = $edit['edit'][$chat_id][$from_id];
}
if($text == 'سحكاتي'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'𖠮︙سحكاتك : '.$editt,
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "مسح سحكاتي" or $text == "مسح تعديلاتي" || $text == "سح"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙تم مسح جميع تعديلاتك",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$edit = json_decode(file_get_contents('data/edit.json'),true);
$update = json_decode(file_get_contents('php://input'));
$edit['edit'][$chat_id][$from_id] = ($edit['edit'][$chat_id][$from_id]=0);
file_put_contents('data/edit.json', json_encode($edit));
}
if($msgs['msgs'][$chat_id][$from_id] > 8000){
$rate = array("100%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 7000){
$rate = array("97%","90%","99%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 6000){
$rate = array("83%","80%","87%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 3000){
$rate = array("77%","70%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$rate = array('69%','56%',);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 200){
$rate = array("40%","43%","39%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 100){
$rate = array("36%","29%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$rate = array('18%','20%','6%',);
$rate1 = array_rand($rate,1);
}
if($msgs['msgs'][$chat_id][$from_id] > 8000){
$active = array("حارك الكروب ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 7000){
$active = array("معلك لربك ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 6000){
$active = array("جهنم حبي ","نار وشرار ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 3000){
$active = array("خوش متفاعل ","اسطورة التفاعل ","الله مال تفاعل ","نايس التفاعل ","قمه التفاعل ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$active = array('متوسط ','متفاعل ',);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$active = array('ضعيف ',);
$abstfal = array_rand($active,1);
}
$new = json_decode(file_get_contents('data/new.json'),true);
if($message->new_chat_member){
$new['new'][$chat_id][$from_id] = ($new['new'][$chat_id][$from_id]+1);
file_put_contents('data/new.json', json_encode($new));
}

if($new['new'][$chat_id][$from_id] == null){
$new = 0;
}else{
$new = $new['new'][$chat_id][$from_id];
}
if($text == 'جهاتي'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ عدد جهاتك المضافه هنا ~ $new
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
}
if(in_array($from_id,$eri)){
$info = "مطور السورس";
}
elseif(in_array($from_id,$developer) ){
$info = "مطور ثانوي";
}
elseif(in_array($from_id,$Dev) ){
$info = "مطور الاساسي";
}
elseif(in_array($from_id,$nazar) ){
$info = "منشئ اساسي";
}
elseif(in_array($from_id,$matrxx) ){
$info = "منشئ";
}
elseif($status == "creator"){
$info = "المالك";
}
elseif(in_array($from_id,$manger) ){
$info = "المدير";
}
elseif(in_array($from_id,$admin_user) ){
$info = "ادمن";
}
elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز";
}elseif($status == "member" ){
$info = "عضو فقط";
}
if(!$username){
$casss = "لايوجد يوزر";
}elseif($username){
$casss = "$username";
}

if(!$bio){
$biio = "لايوجد بايو";
}elseif($bio){
$biio = "$bio";
}

if(!$username){
$usr = "لا يوجد معرف";
}elseif($username){
$usr = "@$username";
}
$usr = "@$username";

$armofom = $settings["information"]["textaddid"];
$idchange = file_get_contents("data/ok.txt");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
if($text == "تعيين الايدي" or $text == "تعين الايدي" || $text == "تغ"){
file_put_contents("data/ok.txt",$chat_id);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙ارسل الان النص
𖠮︙ اضغط للنسخ
𖠮︙  يمكنك اضافه :
- لعرض المعرف > `{المعرف}`
- لعرض الرسائل > `{الرسائل}`
- لعرض الصور > `{الصور}`
- لعرض الايدي > `{الايدي}`
- لعرض الرتبه > `{الرتبه}`
- لعرض مجوهرات > `{المجوهرات}`
- لعرض جهات > `{جهاتي}`
- لعرض تفاعل > `{تفاعل}`
- لعرض تعليق > `{لايك}`
- لعرض نسبة تفاعل > `{نسبة تفاعل}`
- لعرض بايو > `{بايو}`
- لعرض سحكات > `{سحكاتي}`
- لعرض اسم مجموعه > `{اسم الجموعة}`

𖠮︙ قناة كلايش الايدي : [@FU_III]
",'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $idchange == $chat_id){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer)){
file_put_contents("data/ok.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙تم تعين الايدي
",
'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$settings["information"]["textaddid"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
elseif($text == "حذف الايدي" or $text == "مسح الايدي"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙ اهلا عزيزي ~⪼ $info 
𖠮︙ تم حذف الايدي
",
'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$settings["information"]["textaddid"]="";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
$armofom = $settings["information"]["textaddid"];
if($text=="ايدي" or $text=="ايديي" or $text=="ا"){
$like = array("موش صوره غمبله ☹️❤️","شهل عسل ،₍🍯😻⁾","يهلا بلعافيه😍","مارتاحلك😐","تحبني؟🙈","فديت الحلو🌚😹","كيكك والله🥺","حلغوم والله☹️","ملاك وناسيك بكروبنه😟","لازك بيها غيرها عاد😒");
$likee = array_rand($like,1);
$iduser = $settings["lock"]["iduser"];
$armofom = $settings["information"]["textaddid"];
if($armofom !== null){
if($iduser == "مفتوح"){
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$count = $result["result"]["total_count"];
$a = str_replace('{الاسم}',"$first_name",$armofom);
$a = str_replace('{الايدي}',$from_id,$a);
$a = str_replace('{اسم المجموعة}',$namegroup,$a);
$a = str_replace('{المعرف}',$usr,$a);
$a = str_replace('{الرتبه}',$info,$a);
$a = str_replace('{المجوهرات}',$game['game'][$chat_id][$from_id],$a);
$a = str_replace('{الرسائل}',$msgs['msgs'][$chat_id][$from_id],$a);
$a = str_replace('{الصور}',$count,$a);
$a = str_replace('{سحكاتي}',$editt,$a);
$a = str_replace('{جهاتي}',$new,$a);
$a = str_replace('{تفاعل}',$active[$abstfal],$a);
$a = str_replace('{لايك}',$like[$likee],$a);
$a = str_replace('{بايو}',$biio,$a);
$a = str_replace('{نسبة تفاعل}',$rate[$rate1],$a);
$g = $a;
var_dump(
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$file_id",
'caption'=>"$g",
'reply_to_message_id'=>$message->message_id,
]));
}
}
}
$armofom = $settings["information"]["textaddid"];
if($text == "ايدي" or $text=="ايديي" or $text=="ا"){
$likeee = array("الايدي بالصورة معطل حاليأ","الايدي بالصورة معطل حاليأ");
$likeeee = array_rand($likeee,1);
$armofom = $settings["information"]["textaddid"];
if($armofom !== null){
if($iduser !== "مفتوح"){
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$count = $result["result"]["total_count"];
$g = array_rand($a,1);
$a = str_replace('{الاسم}',"$first_name",$armofom);
$a = str_replace('{الايدي}',$from_id,$a);
$a = str_replace('{اسم المجموعة}',$namegroup,$a);
$a = str_replace('{المعرف}',$usr,$a);
$a = str_replace('{الرتبه}',$info,$a);
$a = str_replace('{المجوهرات}',$game['game'][$chat_id][$from_id],$a);
$a = str_replace('{الرسائل}',$msgs['msgs'][$chat_id][$from_id],$a);
$a = str_replace('{الصور}',$count,$a);
$a = str_replace('{سحكاتي}',$editt,$a);
$a = str_replace('{جهاتي}',$new,$a);
$a = str_replace('{تفاعل}',$active[$abstfal],$a);
$a = str_replace('{لايك}',$likeeee[$likeee],$a);
$a = str_replace('{بايو}',$biio,$a);
$a = str_replace('{نسبة تفاعل}',$rate[$rate1],$a);
$g = $a;
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$g",
'reply_to_message_id'=>$message->message_id,
]);
}
}
}
$armofom = $settings["information"]["textaddid"];
if($text=="ايدي" or $text=="ايديي" or $text=="ا"){
$iduser = $settings["lock"]["iduser"];
$armofom = $settings["information"]["textaddid"];
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$count = $result["result"]["total_count"];
if($armofom == null){
if($iduser == "مفتوح"){
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][0][0]["file_id"];
$count=$result["result"]["total_count"];
var_dump(
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$file_id",
'caption'=>"
𖠮︙معرفك ← $usr
𖠮︙ايديك ← $from_id
𖠮︙رتبتك ← $info
𖠮︙تعديلاتك ← $editt
𖠮︙جهاتك ← $new
𖠮︙رسائلك ← .".$msgs['msgs'][$chat_id][$from_id].".
",'reply_to_message_id'=>$message->message_id,
]));
}
}
}
$armofom = $settings["information"]["textaddid"];
if($text == "ايدي" or $text=="ايديي" or $text=="ا"){
$armofom = $settings["information"]["textaddid"];
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$count = $result["result"]["total_count"];
if($armofom == null){
if($iduser !== "مفتوح"){
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][0][0]["file_id"];
$count=$result["result"]["total_count"];
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙معرفك ← $usr
𖠮︙ايديك ← $from_id
𖠮︙رتبتك ← $info
𖠮︙تعديلاتك ← $editt
𖠮︙جهاتك ← $new
𖠮︙رسائلك ← .".$msgs['msgs'][$chat_id][$from_id].".
",
'reply_to_message_id'=>$message->message_id,
]);
}
}
}
if($text == "😔"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ليش الحلو ضايج ❤️🍃",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "😳"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ها بس لا شفت خالتك الشكره 😳😹🕷",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "😭"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لتبجي حياتي 😭😭",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "😡"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ابرد  🚒",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "😍"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"يَمـه̷̐ إآلُحــ❤ــب يَمـه̷̐ ❤️😍",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "😉"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"باع الغمزه 🙀 تموت 🙈🍃",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "😋"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"طبب لسانك جوه عيب 😌",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "☹️"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لضوج حبيبي 😢❤️🍃",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "🥺"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اوف يـࢪوحـي شبيڪ ضـايـج💘🥺",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "السلام عليكم"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وعليكم السلام اغاتي🌝👋",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "شلونكم"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"تـمـام عمࢪيي نتا ڪيفڪ💘💋",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "شلونك"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عمࢪࢪيي بخيࢪ اذا انـته بخيࢪ💘🙊",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "شلونج"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عمࢪࢪيي بخيࢪ اذا انـته بخيࢪ💘🙊",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "شلونج"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عمࢪࢪيي بخيࢪ اذا انـته بخيࢪ💘🙊",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "دوم"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"دوم وكعد ع عناد الواكفين 🤷🏼‍♀️😂",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "دومج"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ادوم ايامك يالغالي  ❤️",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "دومك"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"يدوم نبضك يالحب 💘☺️",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "بخير"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"دومڪ بخيࢪ حياتيہ 💓🍯",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "نورت"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"نــوࢪك/ج حياتيہ 🥺💞",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "نورتي"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"نــوࢪك/ج حياتيہ 🥺💞",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "نورتو"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"نــوࢪك/ج حياتيہ 🥺💞",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "شكرأ"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ادلل يــ؏ـمࢪيي ،🖤",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "شكرا"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ادلل يــ؏ـمࢪيي ،🖤",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "شنو"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شـ؏ـليـڪ 😞😹",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "شتريد"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اريد اسمط راس الزواحف 😹🙂💞",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "هلو"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هـلاوات يحات 💘😻",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "مح"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"محات حياتي🙈❤",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "تف"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عيب ابني/بتي اتفل/ي اكبر منها شوية 😌😹",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "تخليني"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اخليك بزاويه 380 درجه وانته تعرف الباقي 🐸",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "اكرهك"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ديله شلون اطيق خلقتك اني😾🖖🏿🕷",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "باي"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بايات حياتي 😍",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "زاحف"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"زاحف عله خالتك الشكره 🌝",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "واو"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"قميل 🌝🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "شكو ماكو"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"غيرك/ج بل كلب ماكو يبعد كلبي😍❤️️",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "شكو"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"يــاخــيہ شـ؏ـليـڪ 😞😹💓🍯",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "معزوفه"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"طرطاا طرطاا طرطاا 😂👌",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "زاحفه"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لو زاحفتلك جان ماكلت زاحفه 🌝🌸",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "حفلش"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"افلش راسك 🤓",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ضوجه"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شي اكيد الكبل ماكو 😂 لو بعدك/ج مازاحف/ة 🙊😋",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "صباحوو"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"يـمـه فـديـت صباحڪ 💋🙈",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "صباح الخير"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"يـمـه فـديـت صباحڪ 💋🙈",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "😂😂"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ضڪه تࢪد ࢪوح دايـمه عمغࢪيي🙈💘",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "هههه"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ضڪه تࢪد ࢪوح دايـمه عمغࢪيي🙈💘",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "مساء الخير"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مسـآء الـياسـمين💋💘",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "طرد"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/R_EIII/2",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "حظر"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/R_EIII/4",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "حبج"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/R_EIII/3",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "خاص"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/R_EIII/5",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "خاصج"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/R_EIII/5",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "خاصك"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/R_EIII/5",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "تثبيت"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/R_EIII/6",
'reply_to_message_id'=>$message->message_id, 
]);
}}
$message_id = $update->message->message_id;
if($text == "اقرالي دعاء"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اللهم عذب المدرسين 😢 منهم الاحياء والاموات 😭🔥 اللهم عذب ام الانكليزي 😭💔 وكهربها بلتيار الرئيسي 😇 اللهم عذب ام الرياضيات وحولها الى غساله بطانيات 🙊 اللهم عذب ام الاسلاميه واجعلها بائعة الشاميه 😭🍃 اللهم عذب ام العربي وحولها الى بائعه البلبي اللهم عذب ام الجغرافيه واجعلها كلدجاجه الحافية اللهم عذب ام التاريخ وزحلقها بقشره من البطيخ وارسلها الى المريخ اللهم عذب ام الاحياء واجعلها كل مومياء اللهم عذب المعاون اقتله بلمدرسه بهاون 😂😂😂،",
'reply_to_message_id'=>$message->message_id, 
]);
}
}


if($text == "رابط حذف" or $text == "رابط الحذف" or $text == "رابط حذف تلجرام" and in_array($from_id, $Dev)){
bot("sendmessage",['chat_id'=>$chat_id,'text'=>"𖠮︙ححذف و عيش حياتك مرتاح
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙[رابط حذف تلجرام](https://telegram.org/deactivate)
",'parse_mode'=>"Markdown",
'disable_web_page_preview'=> true ,
]); 
}

if ( $rt && $text =="تثبيت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) { bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
𖠮︙تم تثبيت الرساله
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
elseif(  $text =="الغاء التثبيت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) { bot('unpinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
𖠮︙تم الغاء تثبيت الرساله
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}

if ($text =="تفعيل البحث" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$matrxx) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم تفعيل البحث
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["serhi"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تعطيل البحث" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$matrxx) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم تعطيل البحث
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["serhi"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="تفعيل اغاني" or $text == "تفعيل الاغاني"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم تفعيل الاغاني
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ahbgii"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ( $text =="تعطيل الاغاني" or $text == "تعطيل اغاني"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم تعطيل الاغاني
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["ahbgii"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="تفعيل الرفع" or $text == "تفعيل الرفع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم تفعيل الرفع
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rfaabot"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ( $text =="تعطيل الرفع" or $text == "تعطيل الرفع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم تعطيل الرفع
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rfaabot"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="تفعيل نزلني" or $text == "تفعيل نزل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙ تم تفعيل امر نزلني
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rfabot"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ( $text =="تعطيل نزلني" or $text == "تعطيل نزل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم تعطيل امر نزلني
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rfabot"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="تفعيل حساب العمر" or $text == "تفعيل العمر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم تفعيل حساب العمر
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["zkrf"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ( $text =="تعطيل حساب العمر" or $text == "تعطيل العمر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙ تم تعطيل حساب العمر
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["zkrf"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="تفعيل ضافني" or $text == "تفعيل الضافني"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙ تم تفعيل امر ضافني
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["nweadd"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ( $text =="تعطيل ضافني" or $text == "تعطيل الضافني"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم تعطيل امر ضافني
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["nweadd"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تفعيل الالعاب" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم تفعيل الالعاب
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["game"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ($text =="تعطيل الالعاب" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم تعطيل الالعاب
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["game"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
$re = $update->message->reply_to_message;
$replay = $message->reply_to_message->message_id; 
$json = json_decode(file_get_contents("data/sticker.json"),true);
$stickers = $json[$chat_id]["stickers"];
$re_sticker = $update->message->reply_to_message->sticker;
$st = str_replace("اضف ملصق ","",$text);
if($re_sticker and $text == "اضف ملصق $st"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
$json[$chat_id]["$st"][] = "$re_sticker->file_id";
file_put_contents("data/sticker.json",json_encode($json));
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطة ←  [$first_name](tg://user?id=$from_id)
𖠮︙تم اضافة ملصق في حزمه ( $st )
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"MarkDown",
 ]);
 }
 }

if($re_sticker and $text == "اضف ملصق $st" and !in_array($st,$stickers)){
$json[$chat_id]["stickers"][] = "$st";
file_put_contents("data/sticker.json",json_encode($json));
}
$st = str_replace("دزله ملصق ","",$text);
if($re and $text == "دزله ملصق $st"){
$sti = $json[$chat_id]["$st"];
$sti1 = array_rand($sti,1);
$sticker = $sti[$sti1];
bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>"$sticker",
'reply_to_message_id'=>$replay,
]);
}
if($re and $text == "دزله ملصق $st"){
if( !isset($json[$chat_id]["$st"])){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙عزيزي ←  [$first_name](tg://user?id=$from_id)
𖠮︙او لم تقم بانشاء حزمه بهذا الاسم",
'reply_to_message_id'=>$replay,
]);
}}

$st = str_replace("حذف حزمه ","",$text);

if($text == "حذف حزمه $st" and !isset($json[$chat_id]["$st"])){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙لم يتم انشاء حزمه من قبل بإسم ( $st ) ",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"MarkDown",
]);
}
}
 
if($text == "حذف حزمه $st" and isset($json[$chat_id]["$st"])){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
$namest = array_search("$st",$json[$chat_id]["stickers"]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙بواسطة ←  [$first_name](tg://user?id=$from_id)
𖠮︙⌯ تم حذف حزمه ( $st ) ",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"MarkDown",
]);
unset($json[$chat_id]["$st"]);
unset($json[$chat_id]["stickers"]["$namest"]);
file_put_contents("data/sticker.json",json_encode($json));
}
}

if($text == "الحزم المضافه" and $stickers != null){
for($i=0;$i<count($json[$chat_id]["stickers"]);$i++){
$all = $all."⌯ ".$json[$chat_id]["stickers"][$i]."\n";
}
$sticker =" $all";
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙قائمه الحزم المضافه ⤈

$sticker",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"MarkDown",
]);
}

if($text == "الحزم المضافه" and $stickers == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙عزيزي ←  [$first_name](tg://user?id=$from_id)
𖠮︙لم تقم بإضافة اي حزمة سابقاً",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"MarkDown",
]);
}
$set = file_get_contents("data/taen.json");
$m1 = file_get_contents("data/m1.json");
if ($text == "🎭تعين م1" or $text == "تغير امر م1" and in_array($from_id,$Dev)){
file_put_contents("data/taen.json","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙عزيزي ← [$first_name](tg://user?id=$from_id)
𖠮︙قم بأرسال كليشة امر م1 
𖠮︙[تعليمات الامر (مهم)](https://t.me/s_ilii)
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="nam" and in_array($from_id,$Dev)){
file_put_contents("data/m1.json",$text); 
file_put_contents("data/taen.json","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
𖠮︙تم تعين امر م1 
𖠮︙بواسطة ← [$first_name](tg://user?id=$from_id)
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "🎭حذف م1" or $text == "حذف امر م1" and in_array($from_id,$Dev)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙عزيزي ← [$first_name](tg://user?id=$from_id)
𖠮︙تم حذف كليشة امر م1
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("data/m1.json",""); 
}
$set = file_get_contents("data/taen.json");
$m2 = file_get_contents("data/m2.json"); 
if ($text == "🎭تعين م2" or $text == "تغير امر م2" and in_array($from_id,$Dev)){
file_put_contents("data/taen.json","namm");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙عزيزي ← [$first_name](tg://user?id=$from_id)
𖠮︙قم بأرسال كليشة امر م2
𖠮︙[تعليمات الامر (مهم)](https://t.me/s_ilii)
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="namm" and in_array($from_id,$Dev)){
file_put_contents("data/m2.json",$text); 
file_put_contents("data/taen.json","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
𖠮︙تم تعين امر م2 
𖠮︙بواسطة ← [$first_name](tg://user?id=$from_id)
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "🎭حذف م2" or $text == "حذف امر م2" and in_array($from_id,$Dev)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙عزيزي ← [$first_name](tg://user?id=$from_id)
𖠮︙تم حذف كليشة امر م2
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("data/m2.json",""); 
}
$set = file_get_contents("data/taen.json");
$m3 = file_get_contents("data/m3.json");
if ($text == "🎭تعين م3" or $text == "تغير امر م3" and in_array($from_id,$Dev)){
file_put_contents("data/taen.json","nammm");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙عزيزي ← [$first_name](tg://user?id=$from_id)
𖠮︙قم بأرسال كليشة امر م3
𖠮︙[تعليمات الامر (مهم)](https://t.me/s_ilii)
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="nammm" and in_array($from_id,$Dev)){
file_put_contents("data/m3.json",$text); 
file_put_contents("data/taen.json","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
𖠮︙تم تعين امر م3 
𖠮︙بواسطة ← [$first_name](tg://user?id=$from_id)
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "🎭حذف م3" or $text == "حذف امر م3" and in_array($from_id,$Dev)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙عزيزي ← [$first_name](tg://user?id=$from_id)
𖠮︙تم حذف كليشة امر م3
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("data/m3.json",""); 
}
$set = file_get_contents("data/taen.json");
$m4 = file_get_contents("data/m4.json");
if ($text == "🎭تعين م4" or $text == "تغير امر م4" and in_array($from_id,$Dev)){
file_put_contents("data/taen.json","nammmm");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙عزيزي ← [$first_name](tg://user?id=$from_id)
𖠮︙قم بأرسال كليشة امر م4
𖠮︙[تعليمات الامر (مهم)](https://t.me/s_ilii)
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="nammmm" and in_array($from_id,$Dev)){
file_put_contents("data/m4.json",$text); 
file_put_contents("data/taen.json","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
𖠮︙تم تعين امر م4 
𖠮︙بواسطة ← [$first_name](tg://user?id=$from_id)
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "🎭حذف م4" or $text == "حذف امر م4" and in_array($from_id,$Dev)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙عزيزي ← [$first_name](tg://user?id=$from_id)
𖠮︙تم حذف كليشة امر م4
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("data/m4.json",""); 
}
$set = file_get_contents("data/taen.json");
$m5 = file_get_contents("data/m5.json");
if ($text == "🎭تعين م5" or $text == "تغير امر م5" and in_array($from_id,$Dev)){
file_put_contents("data/taen.json","ser");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙عزيزي ← [$first_name](tg://user?id=$from_id)
𖠮︙قم بأرسال كليشة امر م5
𖠮︙[تعليمات الامر (مهم)](https://t.me/s_ilii)
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="ser" and in_array($from_id,$Dev)){
file_put_contents("data/m5.json",$text); 
file_put_contents("data/taen.json","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
𖠮︙تم تعين امر م5 
𖠮︙بواسطة ← [$first_name](tg://user?id=$from_id)
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "🎭حذف م5" or $text == "حذف امر م5" and in_array($from_id,$Dev)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙عزيزي ← [$first_name](tg://user?id=$from_id)
𖠮︙تم حذف كليشة امر م5
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("data/m5.json",""); 
}
$set = file_get_contents("data/taen.json");
$m6 = file_get_contents("data/m6.json");
if ($text == "🎭تعين م6" or $text == "تغير امر م6" and in_array($from_id,$Dev)){
file_put_contents("data/taen.json","nammn");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙عزيزي ← [$first_name](tg://user?id=$from_id)
𖠮︙قم بأرسال كليشة امر م6
𖠮︙[تعليمات الامر (مهم)](https://t.me/s_ilii)
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="nammn" and in_array($from_id,$Dev)){
file_put_contents("data/m6.json",$text); 
file_put_contents("data/taen.json","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
𖠮︙تم تعين امر م6 
𖠮︙بواسطة ← [$first_name](tg://user?id=$from_id)
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "🎭حذف م6" or $text == "حذف امر م6" and in_array($from_id,$Dev)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙عزيزي ← [$first_name](tg://user?id=$from_id)
𖠮︙تم حذف كليشة امر م6
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("data/m6.json",""); 
}
$set = file_get_contents("data/taen.json");
$morder = file_get_contents("data/oamer.json");
if ($text == "🎭تعين الاوامر" or $text == "تغير امر الاوامر" and in_array($from_id,$Dev)){
file_put_contents("data/taen.json","oamer");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙عزيزي ← [$first_name](tg://user?id=$from_id)
𖠮︙قم بأرسال كليشة امر الاوامر
𖠮︙[تعليمات الامر (مهم)](https://t.me/s_ilii)
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="oamer" and in_array($from_id,$Dev)){
file_put_contents("data/oamer.json",$text); 
file_put_contents("data/taen.json","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
𖠮︙تم تعين امر الاوامر 
𖠮︙بواسطة ← [$first_name](tg://user?id=$from_id)
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "🎭حذف الاوامر" or $text == "حذف امر الاوامر" and in_array($from_id,$Dev)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙عزيزي ← [$first_name](tg://user?id=$from_id)
𖠮︙تم حذف كليشة امر الاوامر
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("data/oamer.json",""); 
}
$set = file_get_contents("data/taen.json");
$sorceu = file_get_contents("data/sorceu.json");
if ($text == "🎭تعين السورس" or $text == "تغير امر السورس" and in_array($from_id,$Dev)){
file_put_contents("data/taen.json","sorceu");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙عزيزي ← [$first_name](tg://user?id=$from_id)
𖠮︙قم بأرسال كليشة امر السورس
𖠮︙[تعليمات الامر (مهم)](https://t.me/s_ilii)
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $set =="nnam" and in_array($from_id,$Dev)){
file_put_contents("data/sorceu.json",$text); 
file_put_contents("data/taen.json","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
𖠮︙تم تعين امر السورس
𖠮︙بواسطة ← [$first_name](tg://user?id=$from_id)
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "🎭حذف السورس" or $text == "حذف امر السورس" and in_array($from_id,$Dev)){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙عزيزي ← [$first_name](tg://user?id=$from_id)
𖠮︙تم حذف كليشة امر السورس
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("data/sorceu.json",""); 
}
elseif($text == "اعادة تعين" or $text == "🎭اعادة تعين"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙ تم اعادة تعين الاوامر 
𖠮︙بواسطة ← [$first_name](tg://user?id=$from_id)
",
'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("data/m1.json","");
file_put_contents("data/m2.json",""); 
file_put_contents("data/m3.json","");
file_put_contents("data/m4.json",""); 
file_put_contents("data/m5.json","");
file_put_contents("data/m6.json",""); 
file_put_contents("data/sorceu.json",""); 
}
}
elseif($text =="م1" and $m1 == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if (!in_array($status,$member) && !in_array($from_id,$mmyaz)) {
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙اوامر الحمايه سورس ماتركس
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙قفل ، فتح ← الامر 
𖠮︙تستطيع قفل حمايه كما يلي ...
𖠮︙← { بالتقيد ، بالطرد ، بالكتم }
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙الروابط
𖠮︙المعرف
𖠮︙التاك
𖠮︙الشارحه
𖠮︙التعديل
𖠮︙التثبيت
⌔︙المتحركه
𖠮︙الملفات
𖠮︙الصور
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙الماركداون
𖠮︙البوتات
𖠮︙التكرار
𖠮︙الكلايش
𖠮︙السيلفي
𖠮︙الملصقات
𖠮︙الفيديو
𖠮︙الانلاين
𖠮︙الدردشه
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙التوجيه
𖠮︙الاغاني
𖠮︙الصوت
𖠮︙الجهات
𖠮︙الاشعارات
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙قناة البوت ← @$chsource
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}}}}
if($text =="م1" and $m1 != null){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
$m1
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
elseif($text =="م2" and $m2 == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if (!in_array($status,$member) && !in_array($from_id,$mmyaz)) {
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙اوامر ادمنية المجموعه ...
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙رفع، تنزيل ← مميز
𖠮︙تاك للكل ، عدد الكروب
𖠮︙كتم ، حظر ، طرد ، تقيد
𖠮︙الغاء كتم ، الغاء حظر ، الغاء تقيد
𖠮︙منع ، الغاء منع 
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙عرض القوائم ...
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙المكتومين
𖠮︙المميزين 
𖠮︙قائمه المنع
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙تثبيت ، الغاء تثبيت
𖠮︙الرابط ، الاعدادات
𖠮︙الترحيب ، القوانين
𖠮︙تفعيل ، تعطيل ← الترحيب
𖠮︙تفعيل ، تعطيل ← الرابط 
𖠮︙جهاتي ،ايدي ، رسائلي
⌔︙سحكاتي ، مجوهراتي
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙وضع ، ضع ← الاوامر التاليه 
𖠮︙اسم ، رابط ، صوره
𖠮︙قوانين ، وصف ، ترحيب
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙حذف ، مسح ← الاوامر التاليه
𖠮︙قائمه المنع ، المحظورين 
𖠮︙المميزين ، المكتومين ، القوانين
𖠮︙المطرودين ، البوتات ، الصوره
𖠮︙الرابط
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙قناة البوت ← @$chsource
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}}}}
if($text =="م2"  and $m2 != null){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
$m2
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
elseif($text =="م3" and $m3 == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if (!in_array($status,$member) && !in_array($from_id,$mmyaz)) {
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if($add == true){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙اوامر المدراء في المجموعه
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙رفع ، تنزيل ← ادمن
𖠮︙الادمنيه 
𖠮︙رفع، كشف ← القيود
𖠮︙تنزيل الكل ← { بالرد ، بالمعرف }
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙تفعيل ، تعطيل ← الاوامر التاليه ↓
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙الايدي ، الايدي بالصوره
𖠮︙ردود المطور ، ردود المدير
𖠮︙اطردني ، الالعاب ، الرفع
𖠮︙الحظر ، الرابط
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙تعين ، مسح ←{ الايدي }
𖠮︙رفع الادمنيه ، مسح الادمنيه
𖠮︙ردود المدير ، مسح ردود المدير
𖠮︙اضف ، حذف ← { رد }
𖠮︙تنظيف ← { عدد }
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙قناة البوت ← @$chsource
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}}}}
if($text =="م3" and $m3 != null ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
$m3
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
elseif($text =="م4" and $m4 == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if (!in_array($status,$member) && !in_array($from_id,$mmyaz)) {
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙اوامر المنشئ الاساسي
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙رفع ، تنزيل ←{ منشئ }
𖠮︙المنشئين ، مسح المنشئين
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ 
𖠮︙اوامر المنشئ المجموعه
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙رفع ، تنزيل ← { مدير }
𖠮︙المدراء ، مسح المدراء
𖠮︙اضف رسائل ← { بالرد او الايدي }
𖠮︙اضف مجوهرات ← { بالرد او الايدي }
𖠮︙اضف ، حذف ← { امر }
𖠮︙الاوامر المضافه ، مسح الاوامر المضافه
𖠮︙تنزيل الكل
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙قناة البوت ← @$chsource
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}}}}
if($text =="م4"  and $m4 != null){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
$m4
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
elseif($text == "م5" and $m5 == null){
if(in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$eri)){
$add = $settings["information"]["added"];
if($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙اوامر المطور الاساسي  
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙حظر عام ، الغاء العام
𖠮︙اضف ، حذف ← { مطور } 
𖠮︙قائمه العام ، مسح قائمه العام
𖠮︙المطورين ، مسح المطورين
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙اضف ، حذف ← { رد عام }
𖠮︙وضع ، حذف ← { كليشه المطور } 
𖠮︙مسح ردود المطور ، ردود المطور 
𖠮︙تحديث ،  تحديث السورس 
𖠮︙تعين عدد الاعضاء ← { العدد }
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙تفعيل ، تعطيل ← { الاوامر التاليه ↓}
𖠮︙البوت الخدمي ، المغادرة ، الاذاعه
𖠮︙ملف ← { اسم الملف }
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙مسح جميع الملفات 
𖠮︙المتجر
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙اوامر المطور في البوت
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙تفعيل ، تعطيل ، الاحصائيات
𖠮︙رفع، تنزيل ← { منشئ اساسي }
𖠮︙مسح الاساسين ، المنشئين الاساسين 
𖠮︙غادر ، غادر ← { والايدي }
𖠮︙اذاعه ، اذاعه بالتوجيه 
𖠮︙اذاعه خاص ، اذاعه خاص بالتوجيه 
𖠮︙تغير امر الاوامر ← تغير امر م6
𖠮︙حذف امر الاوامر ← حذف امر م6
𖠮︙تعين امر السورس ← حذف امر السورس
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙قناة البوت ← @$chsource
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙الامر لـ ← ( المطور الاساسي - المطور الثانوي - مبرمج السورس )",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}
if($text =="م5" and $m5 != null ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
$m5
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
elseif($text == "م6" and $m6 == null){
$add = $settings["information"]["added"];
if($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙اوامر الاعضاء لسورس ماتركس
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙تحويل/بالرد - لتحويل صيغ 
𖠮︙ملصق ← صوره
𖠮︙صوره ← ملصق
𖠮︙فيديو ← بصمه
𖠮︙بصمه ← اغنيه
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙غني - غنيلي
𖠮︙← { جماله ، ذكائه ، مهنته }
𖠮︙← { بوسه ، هينه ، مصه }
𖠮︙← { رسائلي ، مسح رسائلي }
𖠮︙← { سحكاتي ، مسح سحكاتي }
𖠮︙السورس لعرض ← سورس البوت
𖠮︙← { صورتي ، صورتي + عدد }
𖠮︙← { اسمي ، يوزري }
𖠮︙انطق + كلام 
𖠮︙كله + كلام بالرد
𖠮︙الابراج ← لعرض توقعات برجك
𖠮︙نادي ← بالرد ← لمنادات شخص
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙قناة البوت ← @$chsource
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}
elseif($text == "م6" and $m6 != null){
$add = $settings["information"]["added"];
if($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$m6
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}
}

$chup = "vv399";
$m = "𖠮︙توجد ← 6 اوامر في البوت
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙ارسل {م1} ← اوامر الحمايه
𖠮︙ارسل {م2} ← اوامر الادمنيه
𖠮︙ارسل {م3} ← اوامر المدراء
𖠮︙ارسل {م4} ← اوامر المنشئين
𖠮︙ارسل {م5} ← اوامر المطورين
𖠮︙ارسل {م6} ← اوامر الاعضاء
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙قناة البوت ← [@$chup]";
$m1 = "𖠮︙اوامر الحمايه سورس ماتركس
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙قفل ، فتح ← الامر 
𖠮︙تستطيع قفل حمايه كما يلي ...
𖠮︙← { بالتقيد ، بالطرد ، بالكتم }
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙الروابط
𖠮︙المعرف
𖠮︙التاك
𖠮︙الشارحه
𖠮︙التعديل
𖠮︙التثبيت
⌔︙المتحركه
𖠮︙الملفات
𖠮︙الصور
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙الماركداون
𖠮︙البوتات
𖠮︙التكرار
𖠮︙الكلايش
𖠮︙السيلفي
𖠮︙الملصقات
𖠮︙الفيديو
𖠮︙الانلاين
𖠮︙الدردشه
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙التوجيه
𖠮︙الاغاني
𖠮︙الصوت
𖠮︙الجهات
𖠮︙الاشعارات
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙قناة البوت ← [@$chup]";
$m2 = "𖠮︙اوامر ادمنية المجموعه ...
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙رفع، تنزيل ← مميز
𖠮︙تاك للكل ، عدد الكروب
𖠮︙كتم ، حظر ، طرد ، تقيد
𖠮︙الغاء كتم ، الغاء حظر ، الغاء تقيد
𖠮︙منع ، الغاء منع 
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙عرض القوائم ...
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙المكتومين
𖠮︙المميزين 
𖠮︙قائمه المنع
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙تثبيت ، الغاء تثبيت
𖠮︙الرابط ، الاعدادات
𖠮︙الترحيب ، القوانين
𖠮︙تفعيل ، تعطيل ← الترحيب
𖠮︙تفعيل ، تعطيل ← الرابط 
𖠮︙جهاتي ،ايدي ، رسائلي
⌔︙سحكاتي ، مجوهراتي
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙وضع ، ضع ← الاوامر التاليه 
𖠮︙اسم ، رابط ، صوره
𖠮︙قوانين ، وصف ، ترحيب
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙حذف ، مسح ← الاوامر التاليه
𖠮︙قائمه المنع ، المحظورين 
𖠮︙المميزين ، المكتومين ، القوانين
𖠮︙المطرودين ، البوتات ، الصوره
𖠮︙الرابط
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙قناة البوت ← [@$chup]";
$m3 ="𖠮︙اوامر المدراء في المجموعه
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙رفع ، تنزيل ← ادمن
𖠮︙الادمنيه 
𖠮︙رفع، كشف ← القيود
𖠮︙تنزيل الكل ← { بالرد ، بالمعرف }
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙تفعيل ، تعطيل ← الاوامر التاليه ↓
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙الايدي ، الايدي بالصوره
𖠮︙ردود المطور ، ردود المدير
𖠮︙اطردني ، الالعاب ، الرفع
𖠮︙الحظر ، الرابط
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙تعين ، مسح ←{ الايدي }
𖠮︙رفع الادمنيه ، مسح الادمنيه
𖠮︙ردود المدير ، مسح ردود المدير
𖠮︙اضف ، حذف ← { رد }
𖠮︙تنظيف ← { عدد }
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙قناة البوت ← [@$chup]";
$m4 = "𖠮︙اوامر المنشئ الاساسي
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙رفع ، تنزيل ←{ منشئ }
𖠮︙المنشئين ، مسح المنشئين
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ 
𖠮︙اوامر المنشئ المجموعه
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙رفع ، تنزيل ← { مدير }
𖠮︙المدراء ، مسح المدراء
𖠮︙اضف رسائل ← { بالرد او الايدي }
𖠮︙اضف مجوهرات ← { بالرد او الايدي }
𖠮︙اضف ، حذف ← { امر }
𖠮︙الاوامر المضافه ، مسح الاوامر المضافه
𖠮︙تنزيل الكل
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙قناة البوت ← [@$chup]";
$m5 = "𖠮︙اوامر المطور الاساسي  
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙حظر عام ، الغاء العام
𖠮︙اضف ، حذف ← { مطور } 
𖠮︙قائمه العام ، مسح قائمه العام
𖠮︙المطورين ، مسح المطورين
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙اضف ، حذف ← { رد عام }
𖠮︙وضع ، حذف ← { كليشه المطور } 
𖠮︙مسح ردود المطور ، ردود المطور 
𖠮︙تحديث ،  تحديث السورس 
𖠮︙تعين عدد الاعضاء ← { العدد }
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙تفعيل ، تعطيل ← { الاوامر التاليه ↓}
𖠮︙البوت الخدمي ، المغادرة ، الاذاعه
𖠮︙ملف ← { اسم الملف }
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙مسح جميع الملفات 
𖠮︙المتجر
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙اوامر المطور في البوت
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙تفعيل ، تعطيل ، الاحصائيات
𖠮︙رفع، تنزيل ← { منشئ اساسي }
𖠮︙مسح الاساسين ، المنشئين الاساسين 
𖠮︙غادر ، غادر ← { والايدي }
𖠮︙اذاعه ، اذاعه بالتوجيه 
𖠮︙اذاعه خاص ، اذاعه خاص بالتوجيه 
𖠮︙تغير امر الاوامر ← تغير امر م6
𖠮︙حذف امر الاوامر ← حذف امر م6
𖠮︙تعين امر السورس ← حذف امر السورس
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙قناة البوت ← [@$chup]";
$m6 = "𖠮︙اوامر الاعضاء لسورس ماتركس
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙تحويل/بالرد - لتحويل صيغ 
𖠮︙ملصق ← صوره
𖠮︙صوره ← ملصق
𖠮︙فيديو ← بصمه
𖠮︙بصمه ← اغنيه
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙غني - غنيلي
𖠮︙← { جماله ، ذكائه ، مهنته }
𖠮︙← { بوسه ، هينه ، مصه }
𖠮︙← { رسائلي ، مسح رسائلي }
𖠮︙← { سحكاتي ، مسح سحكاتي }
𖠮︙السورس لعرض ← سورس البوت
𖠮︙← { صورتي ، صورتي + عدد }
𖠮︙← { اسمي ، يوزري }
𖠮︙انطق + كلام 
𖠮︙كله + كلام بالرد
𖠮︙الابراج ← لعرض توقعات برجك
𖠮︙نادي ← بالرد ← لمنادات شخص
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙قناة البوت ← [@$chup]";
$time = date('h:i A');
date_default_timezone_set('Asia/Baghdad');
if($text =="الاوامر"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$nazar) or in_array($from_id2,$matrxx) or in_array($from_id2,$eri)) {
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$m"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'꙳.م1.꙳','callback_data'=>'1'],['text'=>'꙳.م2.꙳','callback_data'=>'2']],
[['text'=>'꙳.م3.꙳','callback_data'=>'3'],['text'=>'꙳.م4.꙳','callback_data'=>'4']],
[['text'=>'꙳.م5.꙳' ,'callback_data'=>'5'],['text'=>'꙳.م6.꙳','callback_data'=>'6']],
[['text'=>"꙳.$time.꙳" ,'callback_data'=>'00']],
[['text'=>"꙳.الغاء القائمة.꙳" ,'callback_data'=>'deletamr']],
]])
]); 
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"☆︙*عذرأ عزيزي عليك تفعيل البوت*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}}}
if($data == "1" ){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$nazar) or in_array($from_id2,$matrxx) or in_array($from_id2,$eri)) {
bot('EditMessageText',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"$m1",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'꙳.م1.꙳','callback_data'=>'1'],['text'=>'꙳.م2.꙳','callback_data'=>'2']],
[['text'=>'꙳.م3.꙳','callback_data'=>'3'],['text'=>'꙳.م4.꙳','callback_data'=>'4']],
[['text'=>'꙳.م5.꙳' ,'callback_data'=>'5'],['text'=>'꙳.م6.꙳','callback_data'=>'6']],
[['text'=>"꙳.$time.꙳" ,'callback_data'=>'00']],
[['text'=>"꙳.الغاء القائمة.꙳" ,'callback_data'=>'deletamr']],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"⚠️الامر ليس لك", 
'show_alert'=>true 
 ]); 
} 
}
if($data == "2" ){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$nazar) or in_array($from_id2,$matrxx) or in_array($from_id2,$eri)) {
bot('EditMessageText',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"$m2",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'꙳.م1.꙳','callback_data'=>'1'],['text'=>'꙳.م2.꙳','callback_data'=>'2']],
[['text'=>'꙳.م3.꙳','callback_data'=>'3'],['text'=>'꙳.م4.꙳','callback_data'=>'4']],
[['text'=>'꙳.م5.꙳' ,'callback_data'=>'5'],['text'=>'꙳.م6.꙳','callback_data'=>'6']],
[['text'=>"꙳.$time.꙳" ,'callback_data'=>'00']],
[['text'=>"꙳.الغاء القائمة.꙳" ,'callback_data'=>'deletamr']],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"⚠️الامر ليس لك", 
'show_alert'=>true 
 ]); 
} 
}
if($data == "3" ){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$nazar) or in_array($from_id2,$matrxx) or in_array($from_id2,$eri)) {
bot('EditMessageText',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"$m3",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'꙳.م1.꙳','callback_data'=>'1'],['text'=>'꙳.م2.꙳','callback_data'=>'2']],
[['text'=>'꙳.م3.꙳','callback_data'=>'3'],['text'=>'꙳.م4.꙳','callback_data'=>'4']],
[['text'=>'꙳.م5.꙳' ,'callback_data'=>'5'],['text'=>'꙳.م6.꙳','callback_data'=>'6']],
[['text'=>"꙳.$time.꙳" ,'callback_data'=>'00']],
[['text'=>"꙳.الغاء القائمة.꙳" ,'callback_data'=>'deletamr']],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"⚠️الامر ليس لك", 
'show_alert'=>true 
 ]); 
} 
}
if($data == "4" ){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$nazar) or in_array($from_id2,$matrxx) or in_array($from_id2,$eri)) {
bot('EditMessageText',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"$m4",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'꙳.م1.꙳','callback_data'=>'1'],['text'=>'꙳.م2.꙳','callback_data'=>'2']],
[['text'=>'꙳.م3.꙳','callback_data'=>'3'],['text'=>'꙳.م4.꙳','callback_data'=>'4']],
[['text'=>'꙳.م5.꙳' ,'callback_data'=>'5'],['text'=>'꙳.م6.꙳','callback_data'=>'6']],
[['text'=>"꙳.$time.꙳" ,'callback_data'=>'00']],
[['text'=>"꙳.الغاء القائمة.꙳" ,'callback_data'=>'deletamr']],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"⚠️الامر ليس لك", 
'show_alert'=>true 
 ]); 
} 
}
if($data == "5" ){
if ( in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri)) {
bot('EditMessageText',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"$m5",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'꙳.م1.꙳','callback_data'=>'1'],['text'=>'꙳.م2.꙳','callback_data'=>'2']],
[['text'=>'꙳.م3.꙳','callback_data'=>'3'],['text'=>'꙳.م4.꙳','callback_data'=>'4']],
[['text'=>'꙳.م5.꙳' ,'callback_data'=>'5'],['text'=>'꙳.م6.꙳','callback_data'=>'6']],
[['text'=>"꙳.$time.꙳" ,'callback_data'=>'00']],
[['text'=>"꙳.الغاء القائمة.꙳" ,'callback_data'=>'deletamr']],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"⚠️الامر ليس لك", 
'show_alert'=>true 
 ]); 
} 
}
if($data == "6" ){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$nazar) or in_array($from_id2,$matrxx) or in_array($from_id2,$eri)) {
bot('EditMessageText',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"$m6",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'꙳.م1.꙳','callback_data'=>'1'],['text'=>'꙳.م2.꙳','callback_data'=>'2']],
[['text'=>'꙳.م3.꙳','callback_data'=>'3'],['text'=>'꙳.م4.꙳','callback_data'=>'4']],
[['text'=>'꙳.م5.꙳' ,'callback_data'=>'5'],['text'=>'꙳.م6.꙳','callback_data'=>'6']],
[['text'=>"꙳.$time.꙳" ,'callback_data'=>'00']],
[['text'=>"꙳.الغاء القائمة.꙳" ,'callback_data'=>'deletamr']],
]])
]); 
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"⚠️الامر ليس لك", 
'show_alert'=>true 
 ]); 
} 
}
if($data=="deletamr"){
bot('deletemessage',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
]);}

$tofmatrxx = array("خشوف وجهه يستاهل تفله","دي لك يخره شوف وجهك حرامت اذب تفلتي عليه😈👋🏿","دمشي لاتفل بخشمك🥱👏🏿","لك ياحيوان حترم لا اهينك اتفل بعينك😟🤘🏿","انته شايف وجهكك ب امرايه☹️🤘🏿");
$tofmatrxx2 = array_rand($tofmatrxx, 1);
if($rt and !in_array($re_id,$Dev) and !in_array($re_id,$eri)){
if($text == "اتفل عليه" or $text == "شيله تفله" or $text == "تفله" or $text == "خخ تف" or $text == "بعد تفله" or $text == "ضل تفله" or $text == "تفف" or $text == "تتف"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"حاضر ستادي هسه شبعه تفال😻🤘🏿", 'reply_to_message_id'=>$message->message_id, ]);
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"$tofmatrxx[$tofmatrxx2]",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }

if($rt and in_array($re_id,$Dev) and in_array($re_id,$eri)){
if($text == "اتفل عليه" or $text == "شيله تفله" or $text == "تفله" or $text == "خخ تف" or $text == "بعد تفله" or $text == "ضل تفله" or $text == "تفف" or $text == "تتف"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"دي لك تريد اتفل عله تاج راسك وراسي🥱🤫",'parse_mode'=>"Markdown",'reply_to_message_id'=>$message->message_id, ]); }}

$boscra = array("مواححح افيـش عافيههه😍🔥💗","امممووااهحح شهلعسـل🥺🍯💘","مواححح،ءوفف اذوب🤤💗");
$boscra2 = array_rand($boscra, 1);
if($rt  and !in_array($re_id,$Dev) and !in_array($re_id,$eri)){
if($text == "بوسه" or $text == "بعد بوسه" or $text == "بوسه بعد" or $text == "بوسها" or $text == "بوسهه" or $text == "ضل بوس" or $text == "بعد بوسها" or $text == "بوسها بعد" and $from_id != $bot_id){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"صارر ستاذيي 🏃🏻‍♂️♥️", 'reply_to_message_id'=>$message->message_id, ]);
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"$boscra[$boscra2]",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }

if($rt and in_array($re_id,$Dev) and in_array($re_id,$eri)){
if($text == "بوسه" or $text == "بعد بوسه" or $text == "بوسه بعد" or $text == "بوسها" or $text == "بوسهه" or $text == "ضل بوس" or $text == "بعد بوسها" or $text == "بوسها بعد"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"مواححح احلاا بوسةة المطوريي😻🔥💗",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }
if($rt and $from_id == $bot_id){
if($text == "بوسه" or $text == "بعد بوسه" or $text == "بوسه بعد" or $text == "بوسها" or $text == "بوسهه" or $text == "ضل بوس" or $text == "بعد بوسها" or $text == "بوسها بعد"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"يمطي شلون ابوس نفسي.🤨👊🏻",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }

$sahcar = array("تعال لكك ديصيحوك😐🖤","عمري اكو شخص ديناديك.🙂💕","تعال محتاجينك🙄💕","هلووو وينك تعال هنا.😡👊");
$sahcar2 = array_rand($sahcar, 1);
if($rt and !in_array($re_id,$Dev) and !in_array($re_id,$eri)){
if($text == "صيحه" or $text == "صحيها" or $text == "صيحهه" or $text == "صيحو"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"صارر ستاذيي 🏃🏻‍♂️♥️", 'reply_to_message_id'=>$message->message_id, ]);
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"$sahcar[$sahcar2]",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }

if($rt and in_array($re_id,$Dev) and in_array($re_id,$eri)){
if($text == "صيحه" or $text == "صحيها" or $text == "صيحهه" or $text == "صيحو"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"تعال مطوريي محتاجيكك🏃🏻‍♂️♥️",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }

$mascar = array("مممممممحححححح احله مصه🥺💕","مححححح وووف ءذوب .🥺💞","مح مح مح مصه من لخدود وووف.🥺💕");
$mascar2 = array_rand($mascar, 1);
if($rt and !in_array($re_id,$Dev) and !in_array($re_id,$eri)){
if($text == "مصه" or $text == "مصهه" or $text == "مصها" or $text == "مصي"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"صارر ستاذيي 🏃🏻‍♂️♥️", 'reply_to_message_id'=>$message->message_id, ]);
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"$mascar[$mascar2]",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }

if($rt and in_array($re_id,$Dev) and in_array($re_id,$eri)){
if($text == "مصه" or $text == "مصهه" or $text == "مصها" or $text == "مصي"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"محححح احله مصه من مطوري🥺💋",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }

$henacar = array("لكك جرجف احترم اسيادكك لا اكتلكك وازربب على كبركك،💩🖐🏿","هشش فاشل لتضل تمسلت لا اخربط تضاريس وجهك جنه ابط عبده، 😖👌🏿","دمشي لك ينبوع الفشل مو زين ملفيك ونحجي وياك هي منبوذ 😏🖕🏿","ها الغليض التفس ابو راس المربع متعلملك جم حجايه وجاي تطكطكهن علينه دبطل😒🔪","حبيبي راح احاول احترمكك هالمره بلكي تبطل حيونه، 🤔🔪");
$henacar2 = array_rand($henacar, 1);
if($rt and !in_array($re_id,$Dev) and !in_array($re_id,$eri)){
if($text == "هينه" or $text == "بعد هينه" or $text == "هينه بعد" or $text == "هينها" or $text == "هينهه" or $text == "رزله" or $text == "رزلها" or $text == "رزلهه"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"صارر ستاذيي 🏃🏻‍♂️♥️", 'reply_to_message_id'=>$message->message_id, ]);
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"$henacar[$henacar2]",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }

if($rt and in_array($re_id,$Dev) and in_array($re_id,$eri)){
if($text == "هينه" or $text == "بعد هينه" or $text == "هينه بعد" or $text == "هينها" or $text == "هينهه" or $text == "رزله" or $text == "رزلها" or $text == "رزلهه"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"دي لكك تريد اهينن تاج راسكك؟😏🖕🏿",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]);}}

if(!@$username){
$usere = "𖠮︙لايوجد لديك معرف";
}elseif(@$username){
$usere = "𖠮︙معرفك ← @$username";
}
if($text == "معرفي" || $text == "يوزري"){ bot("SendMessage",[ 'chat_id'=>$chat_id, 'text'=>"$usere", 'reply_to_message_id'=>$message->message_id, ]); }

$photo = $update->message->photo;
$chat_id = $update->message->chat->id;
$ar1 = array("1%","10%","30%","50%", "80%","100%");
$ar2 = array_rand($ar1, 1);
$per = $ar1[$ar2] ;
$re_id = $update->message->reply_to_message->from->id;
$re_name = $update->message->reply_to_message->from->first_name;
$rt = $update->message->reply_to_message;
$re_msd = $update->message->reply_to_message;
if($rt and $text == "جماله" and $re_msd->photo){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"𖠮︙العضو ← [$re_name](tg://user?id=$re_id) 
𖠮︙نسبة جماله هيه ← $per",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,
]);
}

$photo = $update->message->photo;
$chat_id = $update->message->chat->id;
$carmah1 = array("مدرس","مبرمج","طبيب","ممرض","بيطري","تاجر","حرامي");
$carmah2 = array_rand($carmah1, 1);
$carmah = $carmah1[$carmah2] ;
$re_id = $update->message->reply_to_message->from->id;
$re_name = $update->message->reply_to_message->from->first_name;
$rt = $update->message->reply_to_message;
$re_msd = $update->message->reply_to_message;
if($rt and $text == "مهنته" and $re_msd->photo){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"𖠮︙العضو ← [$re_name](tg://user?id=$re_id) 
𖠮︙مهنتة في المستقبل هيه ← $carmah ",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,
]);
}

$photo = $update->message->photo;
$chat_id = $update->message->chat->id;
$crlzaka1 = array("1%","10%","30%","50%", "80%","100%");
$crlzaka2 = array_rand($crlzaka1, 1);
$crlzaka = $crlzaka1[$crlzaka2] ;
$re_id = $update->message->reply_to_message->from->id;
$re_name = $update->message->reply_to_message->from->first_name;
$rt = $update->message->reply_to_message;
$re_msd = $update->message->reply_to_message;
if($rt and $text == "ذكائه" and $re_msd->photo){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"𖠮︙العضو ← [$re_name](tg://user?id=$re_id) 
𖠮︙نسبة دكائه هيه ← $crlzaka",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,
]);
}
#-----------------------#

if(preg_match('/^(بحث) (.*)/s', $text, $stor)){
if($settings["lock"]["serhi"] == "مقفول"){
$rs = 'https://play.google.com/store/search?q='.urlencode($stor[2]);
$rs1 = 'http://www.mobogenie.com/search.html?q='.urlencode($stor[2]);
$rs2 = 'http://www.mobomarket.net/search?keyword='.urlencode($stor[2]);
$rs3 = "http://www.apkmirror.com/?s=".urlencode($stor[2])."&post_type=app_release&searchtype=apk";
$rs4 = 'http://www.appsodo.com/search_'.urlencode($stor[2])."_1";
$rs5 = 'https://es.aptoide.com/search?query='.urlencode($stor[2])."&type=apps";
$rs6 = 'http://html5.oms.apps.opera.com/en_in/catalog.php?search='.urlencode($stor[2]);
$rs7 = 'https://www.androiddrawer.com/search-results/?q='.urlencode($stor[2]);
bot('sendChatAction', [
'chat_id'=>$chat_id,
'action'=>'typing',]);
sleep(1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"⌁⁞  اهلا عزيزي 彡 [$first_name](tg://user?id=$from_id)
⌁⁞ اليك نتائج البحث ( $text )
",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
       [['text'=>"Googli Play Market", 'url'=>"$rs"]],
       [['text'=>"Mobogenie Market", 'url'=>"$rs1"]],  
       [['text'=>"Mobo Market", 'url'=>"$rs2"]],
          [['text'=>"Apkmirror Market", 'url'=>"$rs3"]],
       [['text'=>"Appsodo Market", 'url'=>"$rs4"]],
       [['text'=>"Appoide Market", 'url'=>"$rs5"]],  
       [['text'=>"Opera Market", 'url'=>"$rs6"]],
          [['text'=>"Androide Dwar Market", 'url'=>"$rs7"]],
 ]])]);}
 }
$startt = file_get_contents("data/set.txt");
$starttext = file_get_contents("data/start.txt");
if ($text == "تعيين رد الخاص" or $text == "تعيين الستارت" or $text == "🎭تعين الاستارت" and in_array($from_id,$Dev)){
file_put_contents("data/set.txt","setstart");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"⌁⁞ حسنأ عزيزي $info
⌯⁞ ارسل الان كليشة الاستارت 
⌯⁞ لعرض الاسم ~⪼ `{Name}`
⌯⁞ لعرض الاسم البوت ~⪼ `{bot}`
⌯⁞ لعرض المعرف ~⪼ `@[{User}]`
⌯⁞ لعرض معرف المطور ~⪼ `@[{Dev}]`
⌯⁞ لعرض الايدي ~⪼ `{Id}`
⌯⁞ قناة تعين : [@DDBBBD]
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}

if($text && $startt =="setstart" and in_array($from_id,$Dev)){
file_put_contents("data/start.txt",$text); 
file_put_contents("data/set.txt","");
bot("sendmessage",["chat_id"=>$chat_id,"text" => "⌁⁞ حسنأ عزيزي $info
⌯⁞ تم حفظ كليشة الاستارت
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}

if ($text == "حذف رد الخاص" or $text == "حذف الستارت" or $text == "🎭حذف الاستارت" and in_array($from_id,$Dev)){
file_put_contents("data/start.txt","");
bot("sendMessage",["chat_id"=>$chat_id,"text"=>"⌁⁞ حسنأ عزيزي $info
⌯⁞ تم حذف كليشة الاستارت
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id,]);}
# --     Source matrxx -     
$user = $update->message->from->username;
$times = date('h:i:s');
$pirvate = explode("\n",file_get_contents("statistics/pirvate.txt"));
$statspv = count($pirvate)-1;
$startt = file_get_contents("data/set.txt");
$starttext = file_get_contents("data/start.txt");
if($text=="/start" and $starttext != null){
$st1 = file_get_contents("data/startlock.txt");
if($st1 == "رد الخاص مفعل"){
if($tc == "private"){
if( !in_array($from_id,$Dev) && !in_array($from_id,$developer)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"
",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↫ المطور 📑",'url'=>"t.me/$buy"]],]])]);}}}}
$starttext = file_get_contents("data/start.txt");
if($text=="/start" and $starttext != null){
if($tc == "private"){
$st1 = file_get_contents("data/startlock.txt");
if($st1 == "رد الخاص مفعل"){
if( !in_array($from_id,$Dev) && !in_array($from_id,$developer)){
$starttext = str_replace('{Name}',$first_name,$starttext);
$starttext = str_replace('{bot}',$namebot,$starttext);
$starttext = str_replace('{san}',$time,$starttext);
$starttext = str_replace('{Id}',$from_id,$starttext);
$starttext = str_replace('{User}',$user,$starttext);
$starttext = str_replace('{Dev}',$buy,$starttext);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"$starttext",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"↫ المطور 📑",'url'=>"t.me/$buy"]],]])]);}}}}
# --     Source matrxx     --
$startt = file_get_contents("data/set.txt");
$starttext = file_get_contents("data/start.txt");
if($text=="جلب الستارت" or $text=="جلب رد الخاص" or $text=="🎭جلب الاستارت" and $starttext == null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"
⌔︙أهلآ بك في بوت $namebot
⌔︙اختصاص البوت حماية المجموعات
⌔︙لتفعيل البوت عليك اتباع مايلي ...
⌔︙اضف البوت الى مجموعتك
⌔︙ارفعه ادمن {مشرف}
⌔︙ارسل كلمة { تفعيل } ليتم تفعيل المجموعه
⌔︙سيتم ترقيتك منشئ اساسي في البوت
⌔︙مطور البوت ← [{@$DevUser}]
*.*
",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,]);}}}

$starttext = file_get_contents("data/start.txt");
if($text=="جلب الستارت" or $text=="جلب رد الخاص" or $text=="🎭جلب الاستارت" and $starttext != null){
if($tc == "private"){
$starttext = str_replace('{Name}',$first_name,$starttext);
$starttext = str_replace('{bot}',$namebot,$starttext);
$starttext = str_replace('{san}',$time,$starttext);
$starttext = str_replace('{Id}',$from_id,$starttext);
$starttext = str_replace('{User}',$user,$starttext);
$starttext = str_replace('{Dev}',$buy,$starttext);
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"$starttext",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,]);}}} 
# --     Source matrxx     --
if($text =="تعطيل رد الخاص" or $text =="🎭تعطيل الاستارت"){
if (in_array($from_id,$Dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"⌁⁞ حسنأ عزيزي $info
⌯⁞ تعطيل رد الاستارت بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
file_put_contents("data/startlock.txt","رد الخاص معطل");}}

if($text =="تفعيل رد الخاص" or $text =="🎭تفعيل الاستارت"){
if (in_array($from_id,$Dev)){
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"⌁⁞ حسنأ عزيزي $info
⌯⁞ تفعيل رد الاستارت بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,]);
file_put_contents("data/startlock.txt","رد الخاص مفعل");}}

if($text =="🎭تعطيل تواصل" ){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⌁ تم تعطيل التواصل بنجاح
⌯ بواسطة 彡 [$info](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("openst.txt","✖");
}}
if($text =="🎭تفعيل تواصل"){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⌁ تم تفعيل التواصل بنجاح
⌯ بواسطة 彡 [$info](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("openst.txt","✔");
}
}
$Twassl = file_get_contents("twassl.txt");
$Twasl = file_get_contents("twasl.txt");
$locktwas = file_get_contents("openst.txt");
if($text != "/start" and $Twasl == null and !in_array($from_id,$Dev)){
if($locktwas == "✔"){
if($tc == 'private'){
    bot('forwardMessage',[
        'chat_id'=>$Dev[0],
        'from_chat_id'=>$chat_id,
  'message_id'=>$update->message->message_id,
'text'=>$text,
    ]);
    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"
⌔︙تم ارسال رسالتك الى [المطور](t.me/$UserDevpe)
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
               ]])]);}}
}
$Twassl = file_get_contents("twassl.txt");
$Twasl = file_get_contents("twasl.txt");
$locktwas = file_get_contents("openst.txt");
if($text != "/start" and $Twasl != null and !in_array($from_id,$Dev)){
if($locktwas == "✔"){
if($tc == 'private'){
    bot('forwardMessage',[
        'chat_id'=>$Dev[0],
        'from_chat_id'=>$chat_id,
  'message_id'=>$update->message->message_id,
'text'=>$text,
    ]);
    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"
$Twasl",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
                [['text'=>'','url'=>'https://t.me/$channel']],
               ]])]);}}}

if($message->reply_to_message->forward_from->id and in_array($from_id,$Dev)){
    bot('sendMessage',[ 
'chat_id'=>$message->reply_to_message->forward_from->id,
        'text'=>$text,
    ]);
    bot('sendmessage',[
       'chat_id'=>$Dev[0],
        'text'=>"⌯ تم ارسال رسالتك بنجاح",
]);}
$twasl = file_get_contents("twasl.txt");
if($text=="🎭جلب تواصل" and $twasl == null){
if($tc == "private"){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• { `رد التواصل الحالي` } •

⌔︙تم ارسال رسالتك الى [المطور](t.me/$buy)
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
               ]])]);}}}

$twasl = file_get_contents("twasl.txt");
if($text=="🎭جلب تواصل" and $twasl != null){
if($tc == "private"){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• { `رد التواصل الجديد` } •

$twasl
",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"",'url'=>"t.me/$channel"]],
]])
]);
}}}
$Twassl = file_get_contents("twassl.txt");
$Twasl = file_get_contents("twasl.txt");
if ($text == "🎭تعين تواصل" or $text == "تعيين رد التواصل" and in_array($from_id,$Dev)){
file_put_contents("twassl.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"⌯ قم بارسال الرد الان عزيزي
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "🎭حذف تواصل" or $text == "حذف رد التواصل" and in_array($from_id,$Dev)){
file_put_contents("twasl.txt","");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"⌁ تم حذف رد التواصل بنجاح
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $Twassl =="nam" and in_array($from_id,$Dev)){
file_put_contents("twasl.txt",$text); 
file_put_contents("twassl.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "⌯ تم تعيين رد التواصل بنجاح
⌁ $text
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}

if($text == "نزلني" || $text == "$namebot نزلني"){
	if($settings["lock"]["rfabot"] == "مقفول"){
$from_id_info = file_get_contents("data/manger/$chat_id.txt");
$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
$mdrs1 = explode(" \n",$mdrs);
$str = str_replace($from_id,"",$from_id_info);
$str2 = str_replace(" *𓆩* [" . "@". $username ."] *𓆪* " . "»" . " *𓆩* `". $from_id ."` *𓆪* ","",$mdrs1);
file_put_contents("data/manger/$chat_id.txt",$str);
file_put_contents("data/manger/$chat_id/mange.txt",$str2);
$from_id_info = file_get_contents("data/admin_user/$chat_id.txt");
$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
$admn1 = explode(" \n",$admn);
$str = str_replace($from_id,"",$from_id_info);
$str2 = str_replace(" *𓆩* [" . "@". $username ."] *𓆪* " . "»" . " *𓆩* `". $from_id ."` *𓆪* ","",$admn1);
file_put_contents("data/admin_user/$chat_id.txt",$str);
file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
$from_id_info = file_get_contents("data/matrxx/$chat_id.txt");
$cas = file_get_contents("data/matrxx/$chat_id/crlo.txt");
$cas1 = explode(" \n",$cas);
$str = str_replace($from_id,"",$from_id_info);
$str2 = str_replace(" *𓆩* [" . "@". $username ."] *𓆪* " . "»" . " *𓆩* `". $from_id ."` *𓆪* ","",$cas1);
file_put_contents("data/matrxx/$chat_id.txt",$str);
file_put_contents("data/matrxx/$chat_id/crlo.txt",$str2);
$from_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
$mdrs1 = explode(" \n",$mdrs);
$str = str_replace($from_id,"",$from_id_info);
$str2 = str_replace(" *𓆩* [" . "@". $username ."] *𓆪* " . "»" . " *𓆩* `". $from_id ."` *𓆪* ","",$mdrs1);
file_put_contents("data/mmyaz/$chat_id.txt",$str);
file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
bot('restrictChatMember',[
'user_id'=>$from_id,
'chat_id'=>$chat_id,
'can_post_messages'=>true,
'can_add_web_page_previews'=>false,
'can_send_other_messages'=>true,
'can_send_media_messages'=>true,
]);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
⌁⁞ عزيزي 彡「 [$first_name](tg://user?id=$from_id) 」 
⌯⁞ تم تنزيلك من جميع الرتب
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
elseif($rt && $text =="رفع مشرف"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌁ العضو 彡 [$re_name](tg://user?id=$re_id)
⌯ تم ترقية ليصبح مشرف  
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 bot('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$re_id,
 'can_change_info'=>True,
  'can_delete_messages'=>True,
  'can_invite_users'=>True,
  'can_restrict_members'=>True,
  'can_pin_messages'=>True,
  'can_promote_members'=>false
]);
	}
}
elseif($rt && $text =="تنزيل مشرف"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌁ العضو 彡 [$re_name](tg://user?id=$re_id)
⌯ تم تنزيله من قائمة المشرفين
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
	}
}

$ti = explode("وضع لقب",$text);
if($ti[1] && $rt){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$eri) || in_array($from_id,$matrxx) || in_array($from_id,$nazar)) {
bot('promoteChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$re_id,
'can_change_info'=>false,
'can_restrict_members'=>false,
'can_pin_messages'=>false,
'can_delete_messages'=>false,
'can_invite_users'=>true,
'can_promote_members'=>false,
]);
bot('setChatAdministratorCustomTitle',[
'chat_id'=>$chat_id,
'user_id'=>$re_id,
'custom_title'=>$ti[1],
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
⌯⁞ تم وضع ($ti[1]) لقب اليه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}else{
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*⌁ عذرأ عزيزي الامر ليس اليك*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
elseif($rt and $text == "لقبه"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$eri) || in_array($from_id,$matrxx) || in_array($from_id,$nazar)) {
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$re_id"));
$b = $a->result->custom_title;
if($b){
$b = "$b";}
elseif(!$b){
$b = "⌁ ليس لديه لقب";}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌁⁞ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
⌯⁞ لقبه 彡 $b
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}else{
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*⌁ عذرأ عزيزي الامر ليس اليك*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
elseif($text == "لقبي"){
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$from_id"));
$b = $a->result->custom_title;
if($b){
$b = "$b";}
elseif(!$b){
$b = "⌁ ليس لديه لقب";}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌁⁞ عزيزي 彡「 [$re_name](tg://user?id=$re_id) 」 
⌯⁞ لقبك 彡 $b
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}

mkdir("msiss/$chat_id");
$rt = $update->message->reply_to_message;
$kakeii = json_decode(file_get_contents("msiss/$chat_id/miss.json"),1);
if($rt && $text == "كتم" or $rt && $text == "اكتم" and $text==$settings["information"]["ktm"] ){
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if ( $statusrt != 'creator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer) && !in_array($re_id,$matrxx) && !in_array($re_id,$nazar) && !in_array($re_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙العضو - [$re_name](tg://user?id=$re_id)
𖠮︙تم كـتـمه بـنـجاح",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$kakeii['kakei'][] = "$re_id";
file_put_contents("msiss/$chat_id/miss.json",json_encode($kakeii));
}else
{
bot('sendmessage',[
'chat_id' => $chat_id,
'text'=>"𖠮︙لا استطيع كتم - ( $infor )",
'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>$inlinebutton,
]);
}
}
}
if ($rt && $text == "الغاء كتم"){
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if ( $statusrt != 'creator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer) && !in_array($re_id,$matrxx) && !in_array($re_id,$nazar) && !in_array($re_id,$eri)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙العضو - [$re_name](tg://user?id=$re_id)
𖠮︙تم الـغـاء كـتـمه بـنـجاح
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$key = array_search($re_id,$kakeii["kakei"]);
unset($kakeii["kakei"][$key]);
$kakeii["kakei"] = array_values($kakeii["kakei"]); 
$kakeii = json_encode($kakeii,true);
file_put_contents("msiss/$chat_id/miss.json",$kakeii);
}else
{
bot('sendmessage',[
'chat_id' => $chat_id,
'text'=>"𖠮︙لا استطيع الغاء كتم - ( $infor )",
'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>$inlinebutton,
]);
}
}
}
if ($message && in_array($from_id,$kakeii['kakei'])){
bot('deletemessage',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
]);
}
$kakeiic = $kakeii['kakei'];
if( $text == "المكتومين" or $text == "مكتومين" and $kakeii['kakei']!== NULL){
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
$kakeiic = $kakeii['kakei'];
for($z = 0;$z <= count($kakeiic)-1;$z++){
$Apikakeiic = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$kakeiic[$z]"));
$Usermkakeiic =$Apikakeiic->result->username;
$namekakeiic =$Apikakeiic->result->first_name;
$idkakeiic =$Apikakeiic->result->id;
$result = $result."𖠮︙ $z ← [$namekakeiic](https://t.me/$Usermkakeiic) - $idkakeiic"."\n";
}
if(!$result){
$result3 = "𖠮︙لايوجد شخص في القائمه";
}elseif($result){
$result3 = "$result";
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙اليك قائمة المكتومين : 
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
$result3",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
 ]);
}
}
if($text == "مسح المكتومين" or $text == "مسح مكتومين"){
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
file_put_contents("msiss/$chat_id/miss.json","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"𖠮︙بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙ تم مسح قائمة المحظورين
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
}
$silent = $settings["silentlist"];
if($rt && $text == "تقييد" or $rt && $text == "تقيد" and $text==$settings["information"]["tkeed"] and !in_array($re_id,$silent)){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer) && !in_array($re_id,$matrxx) && !in_array($re_id,$nazar) && !in_array($re_id,$eri)) {
$add = $settings["information"]["added"];
if ($add == true){
bot('restrictChatMember',[
'user_id'=>$re_id,
'chat_id'=>$chat_id,
'can_post_messages'=>false,
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙العضو - [$re_name](tg://user?id=$re_id)
𖠮︙تم تـقـيده بـنـجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$re_msgid,
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"⌁ قم بتفيل البوت اولا",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"⌁ لايمكنني تقييد الادمنية او المدراء اواو المميزين",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif (strpos($text, "تقييد لمدة ") !== false && $rt) {
if(!in_array($re_id,$silent)){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer) && !in_array($re_id,$matrxx) && !in_array($re_id,$nazar) && !in_array($re_id,$eri)) {
$add = $settings["information"]["added"];
$we = str_replace(['كتم لمدة '],'',$text );
if ($we <= 1000 && $we >= 1){
if ($add == true) {
$weplus = $we + 0;
 bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"𖠮︙العضو - [$re_name](tg://user?id=$re_id)
𖠮︙تم تـقـيده لـمدة $we بـنـجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
bot('restrictChatMember',[
'user_id'=>$re_id,
'chat_id'=>$chat_id,
'can_post_messages'=>false,
'until_date'=>time()+$weplus*60,
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"𖠮︙خطاء قم بأختيار عدد من 1 الي 1000
",'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
'chat_id' => $chat_id,
'text'=>"⌁ لايمكنني تقييد الادمنية او المدراء او المطورين او المميزين",
'reply_markup'=>$inlinebutton,
]);
}
}
}
$idp == file_get_contents("data/$chat_id/bans.txt");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
if($rt and $text == "الغاء تقيد" or $rt and $text == "الغاء تقييد" or $rt and $text == "الغاء التقييد"){
bot('restrictChatMember',[
'user_id'=>$re_id,
'chat_id'=>$chat_id,
'can_post_messages'=>true,
'can_add_web_page_previews'=>false,
'can_send_other_messages'=>true,
'can_send_media_messages'=>true,
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"𖠮︙العضو - [$re_name](tg://user?id=$re_id)
𖠮︙تم الـغـاء تـقـيده بـنـجاح
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
$key = array_search($re_id,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
} 
}
$silent = $settings["silentlist"];
if($text == "المقيدين" or $text == "قائمة المقيدين" or $text == "قائمه المقيدين" and $settings["silentlist"]!== NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$Apimktom = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$silent[$z]"));
$Usermktom =$Apimktom->result->username;
$result = $result."┇$z- @$Usermktom"."\n";
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙اليك قائمة المقيدين :
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
$result",
 ]);
}
}
if($text == "مسح المقيدين" or $text == "مسح المقيديين"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {
$add = $settings["information"]["added"];
if ($add == true){
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
 bot('restrictChatMember',[
'user_id'=>$silent[$z],
'chat_id'=>$chat_id,
'can_post_messages'=>true,
'can_add_web_page_previews'=>false,
'can_send_other_messages'=>true,
'can_send_media_messages'=>true,
]);}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙العضو - [$first_name](tg://user?id=$from_id)
𖠮︙تم مـسـح الـمـقـيـديـن
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unset($settings["silentlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
if($text == "ابراج" or $text == "الابراج"){
bot('sendmessage',[
'chat_id'=>$chat_id,
"text"=>"
𖠮︙عزيزي ← [$first_name](tg://user?id=$from_id)
𖠮︙قم بأختيار برجك ليتم العرض الاحداث
",'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الحمل.",'callback_data'=>"الحمل#$from_id2"],['text'=>"الثور.",'callback_data'=>"الثور#$from_id2"],['text'=>"الجوزاء.",'callback_data'=>"الجوزاء#$from_id2"]],
[['text'=>"السرطان.",'callback_data'=>"السرطان#$from_id2"],['text'=>"الاسد.",'callback_data'=>"الاسد#$from_id2"],['text'=>"العذراء.",'callback_data'=>"العذراء#$from_id2"]],
[['text'=>"الميزان.",'callback_data'=>"الميزان#$from_id2"],['text'=>"العقرب.",'callback_data'=>"العقرب#$from_id2"],['text'=>"القوس.",'callback_data'=>"القوس#$from_id2"]],
[['text'=>"الجدي.",'callback_data'=>"الجدي#$from_id2"],['text'=>"الدلو.",'callback_data'=>"الدلو#$from_id2"],['text'=>"الحوت.",'callback_data'=>"الحوت#$from_id2"]],
[['text'=>"M𝔸Tℝ𝕀X",'url'=>"https://t.me/vv399"]],
]])]);}
$ex = explode("#",$data);
$array = array("الحمل","الثور","الجوزاء","السرطان","الاسد","العذراء","الميزان","العقرب","القوس","الجدي","الدلو","الحوت");
if(in_array($ex[0],$array)){
if($ex[1] == $from_id2){
$get = file_get_contents("https://dev-yhya.tk/api/abrag/index.php?Text=$ex[0]");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
*$get*
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الحمل.",'callback_data'=>"الحمل#$from_id2"],['text'=>"الثور.",'callback_data'=>"الثور#$from_id2"],['text'=>"الجوزاء.",'callback_data'=>"الجوزاء#$from_id2"]],
[['text'=>"السرطان.",'callback_data'=>"السرطان#$from_id2"],['text'=>"الاسد.",'callback_data'=>"الاسد#$from_id2"],['text'=>"العذراء.",'callback_data'=>"العذراء#$from_id2"]],
[['text'=>"الميزان.",'callback_data'=>"الميزان#$from_id2"],['text'=>"العقرب.",'callback_data'=>"العقرب#$from_id2"],['text'=>"القوس.",'callback_data'=>"القوس#$from_id2"]],
[['text'=>"الجدي.",'callback_data'=>"الجدي#$from_id2"],['text'=>"الدلو.",'callback_data'=>"الدلو#$from_id2"],['text'=>"الحوت.",'callback_data'=>"الحوت#$from_id2"]],
[['text'=>"M𝔸Tℝ𝕀X",'url'=>"https://t.me/vv399"]],
]]),'parse_mode'=>"MarkDown",
]);}}
$array = array("الحمل","الثور","الجوزاء","السرطان","الاسد","العذراء","الميزان","العقرب","القوس","الجدي","الدلو","الحوت");
if(in_array($text,$array)){
bot('sendmessage',[
      'chat_id'=>$chat_id2,
      "text"=>"
*$get*
      ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الحمل.",'callback_data'=>"الحمل#$from_id2"],['text'=>"الثور.",'callback_data'=>"الثور#$from_id2"],['text'=>"الجوزاء.",'callback_data'=>"الجوزاء#$from_id2"]],
[['text'=>"السرطان.",'callback_data'=>"السرطان#$from_id2"],['text'=>"الاسد.",'callback_data'=>"الاسد#$from_id2"],['text'=>"العذراء.",'callback_data'=>"العذراء#$from_id2"]],
[['text'=>"الميزان.",'callback_data'=>"الميزان#$from_id2"],['text'=>"العقرب.",'callback_data'=>"العقرب#$from_id2"],['text'=>"القوس.",'callback_data'=>"القوس#$from_id2"]],
[['text'=>"الجدي.",'callback_data'=>"الجدي#$from_id2"],['text'=>"الدلو.",'callback_data'=>"الدلو#$from_id2"],['text'=>"الحوت.",'callback_data'=>"الحوت#$from_id2"]],
[['text'=>"M𝔸Tℝ𝕀X",'url'=>"https://t.me/vv399"]],
]]),'parse_mode'=>"MarkDown",
]);}
$from_id = $message->from->id;
$username = $update->message->from->username;
$rt = $message->reply_to_message->message_id;
$rep = $message->reply_to_message->forward_from; 
$iid = $rep->id; 
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$re_name = $update->message->reply_to_message->from->first_name;
$title = $message->chat->title;
$name = $message->from->first_name;
$idbot = $id_bot; 
if($rt and !in_array($re_id,$from_id) and !in_array($re_id,$idbot)){
if($text == "نادي"){
$link = bot("getchat",['chat_id'=>$chat_id])->result->invite_link;
 if($link != null){
  $link = $link;
$link2 = $link;
  }else{
   $link = bot("exportChatInviteLink",['chat_id'=>$chat_id])->result;
$link2 = $link;
   }
bot('sendmessage',[
'chat_id' => $chat_id,
'text' => '𖠮︙العضو ← ['.$re_name.'](tg://user?id=$re_id)  
𖠮︙تمت مناداته بواسطة 
𖠮︙»  ['.$name.'](tg://user?id=$from_id)
',
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
bot('sendmessage',[
'chat_id' =>$re_id,
'text' => "
𖠮︙عزيزي ←  [$re_name](tg://user?id=$re_id)
𖠮︙قام ← [$name](tg://user?id=$from_id)  بمناداتك  
𖠮︙name group : $title

𖠮︙$link
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
}
}
if($rt and in_array($re_id,$from_id)){
if($text == "نادي"){
bot('sendmessage',[
'chat_id' => $chat_id,
'text' => '𖠮︙لايمكنك منادات نفسك يا اهبل.🙂💕',
'reply_to_message_id' =>$message->message_id,
]);}}
if($rt and in_array($re_id,$idbot)){
if($text == "نادي"){
bot('sendmessage',[
'chat_id' => $chat_id,
'text' => '𖠮︙شلون اكدر انادي نفسي يا اهبل.🙂💕',
'reply_to_message_id' =>$message->message_id,
]);}}
$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$sudo         = $sudo; // ايديك.
$bot_id       = $iidd; // ايدي بوتك .
$from_id     = $message->from->id;
$first_name = $message->from->first_name;
$type       = $update->message->chat->type;

mkdir("Fri3nd_s");

$message_id = $message->message_id;
$gp_get = file_get_contents("Fri3nd_s/groups.txt");
$groups = explode("\n", $gp_get);
$GG1ZZ = file_get_contents("Fri3nd_s/iBadlz.txt");
$pirvate = explode("\n",file_get_contents("Fri3nd_s/pirvate.txt"));
$forward = $update->message->forward_from;
$MOhaMMed = count($pirvate)-1;
$MoHaMMedd = count($groups)-1;

if($text == "اذاعه بالتوجيه" || $text == "🎭توجيه عام" || $text == "اذاعه للكل بالتوجيه" || $text =="🖇¦ اذاعه عام توجيه" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","iBadlz");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*⌁⁞ اهلا عزيزي الـمطور ، 
⌯⁞ قم بتوجيه رسالتك الان ...
*
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "iBadlz" and $from_id == $sudo ){
  for($i=0;$i<count($groups);$i++){
bot('ForwardMessage',[
 'chat_id'=>$groups[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message_id,
 ]);
} 
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*⌁⁞ اهلا عزيزي الـمطور ، 
 ⌯⁞ تم ارسال رسالتك الى 彡 $MOhaMMed عضوا
و 彡 $MoHaMMedd مجموعة*
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id
   ]);
} 

if($text and $type == "private" and !in_array($from_id, $pirvate)){
file_put_contents("Fri3nd_s/pirvate.txt", "$from_id\n",FILE_APPEND);
}
if($text and $type == "supergroup" and !in_array($chat_id, $groups)) {
file_put_contents("Fri3nd_s/groups.txt", "$chat_id\n",FILE_APPEND);
}

if($text == "اذاعه خاص" || $text =="🎭اذاعه خاص" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","JJ119");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*⌁⁞ اهلا عزيزي الـمطور ، قم بأرسال رسالتك
⌯⁞ ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MarkDown",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "JJ119" and $from_id == $sudo ){
    for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("Fri3nd_s/iBadlz.txt","MMoHaMMeD");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*⌁⁞ اهلا عزيزي الـمطور ، 
 ⌯⁞ تم ارسال رسالتك الى $MOhaMMed عضوا ،*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
          ]);
}
if ($text == "اذاعه للكل" || $text == "اذاعه عام" ||$text == "🎭اذاعه عام" || $text =="📤¦  عام" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","LE_C4_KR");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*⌁⁞ اهلا عزيزي الـمطور ، قم بأرسال رسالتك
⌯⁞ ملاحظةهہ : يمكنك استعمال الماركداون ، *",
'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "LE_C4_KR" and $from_id == $sudo ){
    for ($i=0; $i<count($groups); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$groups[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);
} 
for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*
⌁⁞ اهلا عزيزي الـمطور ، 
 ⌯⁞ تم ارسال رسالتك الى 彡 $MOhaMMed عضوا
و 彡 $MoHaMMedd مجموعة*",
 'parse_mode'=>"MarkDown",
          'reply_to_message_id'=>$message->message_id
          ]);
}

if($text == "اذاعه خاص بالتوجيه" || $text == "🎭توجيه خاص" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","od_1j");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*⌁⁞ اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "od_1j" and $from_id == $sudo ){
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*⌁⁞ اهلا عزيزي الـمطور ، 
 ⌯⁞ تم ارسال رسالتك الى 彡 $MOhaMMed عضوا
و 彡 $MoHaMMedd مجموعة*",
'parse_mode'=>"MARKDOWN",
   'reply_to_message_id'=>$message->message_id
   ]);
}

if($from_id == $sudo){
if($text == "🎭الاحصائيات"){
$c = count($groups);
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⌁ احصائيات البوت 

⌯ عدد المجموعات ~ $c
⌯ عدد المشتركين ~ $MOhaMMed
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}}
if($from_id == $sudo){
if($text == "🎭المشتركين" or $text == "المشتركين"){
$c = count($groups);
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⌁ احصائيات المشتركين

⌯ عدد المشتركين ~ $MOhaMMed
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}}
if($from_id == $sudo){
if($text == "🎭المجموعات" or $text == "المجموعات"){
$c = count($groups);
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⌁ احصائيات المجموعات

⌯ عدد المجموعات ~ $c
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}}


elseif($text =="🎭حظر مجموعه" ){
if ($tc == "private") {
if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 
⌯⁞ حسننا عزيزي المطور،
⌯⁞ الان ارسل غادر + ايدي مجموعة
√
",
'reply_to_message_id'=>$message_id,
 ]);
}
}
}
elseif(strpos($text  , "غادر" ) !== false or strpos($text  , "/left " ) !== false) {
$text = str_replace(['/left ','غادر'],'',$text );
if ($tc == "private") {
if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙تم حظر مجموعه بنجاح 
━━━━━━━━━━━━━
ايدي المجموعه: $text
━━━━━━━━━━━━━
",
  ]);
bot('LeaveChat',[
  'chat_id'=>$text,
  ]);
unlink("data/$text.json");
}
}
}
####
if($text =="🎭تعطيل الترحيب" ){
if (in_array($from_id,$Dev)){
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
𖠮︙تم تعطيل الترحيب عام 
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("data/welco.json","✖");
}
}
if($text =="🎭تفعيل الترحيب" ){
if (in_array($from_id,$Dev)){
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
𖠮︙تم تفعيل الترحيب عام 
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("data/welco.json","✔");
}
}

$wel = file_get_contents("data/wel.json");
if($text=="🎭جلب الترحيب" and $wel == null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• { رد الترحيب الحالي } •

⌔︙أهلآ بك في بوت $namebot
⌔︙اختصاص البوت حماية المجموعات
⌔︙لتفعيل البوت عليك اتباع مايلي ...
⌔︙اضف البوت الى مجموعتك
⌔︙ارفعه ادمن {مشرف}
⌔︙ارسل كلمة { تفعيل } ليتم تفعيل المجموعه
⌔︙سيتم ترقيتك منشئ اساسي في البوت
⌔︙مطور البوت ← [$DevUser]
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"",'url'=>"t.me/vv399"]],
]])
]);
}}}
$wel = file_get_contents("data/wel.json");
if($text=="🎭جلب الترحيب" and $wel != null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• { رد الترحيب الجديد } •

$wel
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"",'url'=>"t.me/vv399"]],
]])
]);
}}}

$wel = file_get_contents("data/wel.json");
$well = file_get_contents("data/well.json");
if ($text == "🎭تعين الترحيب" or $text == "تعيين الترحيب" and in_array($from_id,$Dev)){
file_put_contents("data/well.json","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙عزيزي ← [$first_name](tg://user?id=$from_id)
𖠮︙قم بأرسال كليشة الترحيب عام
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $well =="nam" and in_array($from_id,$Dev)){
file_put_contents("data/wel.json",$text); 
file_put_contents("data/well.json","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
𖠮︙تم تعين كليشة الترحيب عام 
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "🎭حذف الترحيب" or $text == "حذف الترحيب" and in_array($from_id,$Dev)){
file_put_contents("data/wel.json","");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙تم حذف كليشة الترحيب عام 
𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
####
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)){
if($rt and $text == "ضع صوره" or $text == "ضع صورة" and $re_msd->photo){
 $file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$re_msd->photo[1]->file_id])->result->file_path; file_put_contents("$chat_id.jpg",file_get_contents($file));
bot('setChatPhoto',[
'chat_id'=>$chat_id,
'photo'=>new CURLFile("$chat_id.jpg"),
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
𖠮︙تم تعيين صورة المجموعة  
𖠮︙ بواسطة* [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unlink("$chat_id.jpg");
}
}
if($status != 'creator' or $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$developer) and !in_array($from_id,$matrxx) and !in_array($from_id,$nazar) and !in_array($from_id,$eri)){
if($rt and $text == "ضع صوره" or $text == "ضع صورة" and $re_msd->photo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
𖠮︙ هذا الامر ليس لك  
𖠮︙ عزيزي* [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}

if($text == "محيبس"){
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👊1،👊2،👊3،👊4،👊5
اختار وجرب حظك 💬💢",
]);
}
$b = array("✅صح","❌خطاء","❌خطاء","❌خطاء","❌خطاء","❌خطاء","❌خطاء");
$c = array_rand($b,1);
$armof = array("الحمد لله","سبحان الله","استغفر الله");
$adi = array_rand($armof,1);
if($text == "1" or $text == "2" or $text == "3" or $text == "4" or $text == "5"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
𖠮︙ جوابك - $b[$c]
𖠮︙ $armof[$adi]*
",'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
####
$rand = rand("2","15");
if($text == "غنيلي" or $text == "غني"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"t.me/D_UIII/$rand",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"- M𝔸Tℝ𝕀X .",'url'=>"t.me/vv399"]],]])]);}}
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
$re = $update->message->reply_to_message;
$me = $message->reply_to_message;  
$mem = $me->message_id; 
$Aaland = str_replace("كله ","$Aaland",$text); 
if($re){
if($text == "كله $Aaland"){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"اكلك $Aaland", 
'reply_to_message_id'=>$mem, 
]); 
} 
}
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
elseif($text =="تعطيل التاك" or $text =="تعطيل الهاش تاك"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙ بواسطه 彡 [$first_name](tg://user?id=$from_id)
𖠮︙ تم تعطيل التاك
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tag"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="تفعيل التاك" or $text =="تفعيل  الهاش تاك"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$AUBaland) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙بواسطه 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم تفعيل التاك
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tag"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
$taag = $settings["$chat_id"]["tagusermy"];
$P=count($taag);
if($message and !in_array($from_id,$taag)){
if ($tc == 'group' || $tc == 'supergroup'){
if($P<200){
$settings["$chat_id"]["tagusermy"][]="$from_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}else{
unset($taag[0]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
$settings["$chat_id"]["tagusermy"]=array_values($settings["$chat_id"]["tagusermy"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
$settings["$chat_id"]["tagusermy"][]="$from_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}}
elseif($text == "تاك" or $text == "تاك الكل" or $text == "تاك للكل"  and $text==$settings["information"]["tagall"]){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$AUBaland) or in_array($from_id,$nazar)) {
$lockcmd = $settings["lock"]["tag"];
if($lockcmd == "مفتوح"){
$taag = $settings["$chat_id"]["tagusermy"];
for($z = 0;$z <=count($taag)-1;$z++){
$Apitag = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$taag[$z]"));
if($Apitag->ok==true){
@$Usertag = $Apitag->result->username;
$first_natg = $Apitag->result->first_name;
$idtg =$Apitag->result->id;
if(!$Usertag){
$Usertag = "[$idtg](tg://user?id=$idtg)";
}elseif($Usertag){
$Usertag = "[@$Usertag]";
}
$tagmy = $tagmy."𖠮︙↵{ $Usertag }"."\n";
}else{
unset($settings["$chat_id"]["tagusermy"][$z]);
file_put_contents("data/$chat_id.json",json_encode($settings));
$settings["$chat_id"]["tagusermy"]=array_values($settings["$chat_id"]["tagusermy"]);
file_put_contents("data/$chat_id.json",json_encode($settings));
}
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*𖠮︙قائمه الاعضاء :*
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
$tagmy
",'parse_mode'=>"markdown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}}
if($text == "تاك" or $text == "تاك الكل" or $text == "تاك للكل"){
$lockcmd = $settings["lock"]["tag"];
if($lockcmd == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*عذرا التاك مقفول ❌*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);}}
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
$text = $message->text;
mkdir("data/kickme");
mkdir("data/kickmelist");
$TTKTT = "$Dev";
$TTK       = $message->message_id;
$Kickmetxt = file_get_contents("kickme.txt");
if ($text =="اطردني" or $text == "ادفرني" or $text == "مغادره" and $from_id != $TTKTT){
if ($settings["lock"]["bannnnn"] == "مفتوح"){
 file_put_contents("kickme.txt","yes");
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• ارسل ( نعم ) ليتم طردك •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 if($text == "نعم" && $Kickmetxt =="yes"){ file_put_contents("kickme.txt","");
bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id,
]);
bot('banChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id,
]);
  bot("sendmessage",[
  "chat_id"=>$chat_id,
  "text" => "
تفضل اتسرسح منا
  ", 'parse_mode'=>"HTML",
  "reply_to_message_id"=>$TTK,
  ]);
file_put_contents("data/kickme/$chat_id.txt",$from_id . "\n" , FILE_APPEND);
file_put_contents("data/kickmelist/$chat_id.txt",".» @$username.". "\n" , FILE_APPEND);
  }
if ($text =="اطردني" and $from_id == $TTKTT){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك مطوري •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
if ($text =="اطردني" and $status == 'administrator'){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك مشرف •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
if($from_id != $TTKTT){
if ($text =="اطردني" and $status == 'craetor'){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك منشئ •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 }
if($status == "member"){
if ($text =="اطردني" and in_array($from_id,$mmyaz)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك مميز •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 }
if ($text =="اطردني" and in_array($from_id,$admin_user)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك ادمن •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 if ($text =="اطردني" and in_array($from_id,$manger)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك مشرف •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 if ($text =="اطردني" and in_array($from_id,$nazar)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك منشئ اساسي •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 if ($text =="اطردني" and in_array($from_id,$matrxx)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك منشئ •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 if ($text =="اطردني" and in_array($from_id,$eri)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك مبرمج السورس •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }}
##########
$LOVEYOU = array("سـأكون دائـماً مـوجـود لك ولأجـلك 🤍،",
"♥️🌿


مشدوهه روحي ا؏ـليك ماگلهـه هـيدي
گمـت ادفـ؏ الڪاروك و اولـيدي بيدي!",
"انت وحدك من تجيني 
 منين ما تلزمني اطيح..❤",
"احببتك بطريقه لا يستحقها غيرك.💗");
$LOVEYOU2 = array_rand($LOVEYOU, 1);
if($text == "غازلني" or $text == "غازلوني"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"$LOVEYOU[$LOVEYOU2]",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message_id, ]);}

$F_Uid = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$from_id"),true);
$bio = $F_Uid['result']['bio'];
if(!$bio){
$biio = "لايوجد نبذة";
}elseif($bio){
$biio = "$bio";
}
if($text == "نبذتي"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"𖠮︙عزيزي ← [$first_name](tg://user?id=$from_id)
𖠮︙نبذتك ← $biio
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id, ]);}

#----------(matrxx)----------#
$x = 0;
$tags = 0;
$get = file_get_contents("data/$chat_id/all.json");
$getx = explode("\n", $get);
if($message and  ! in_array ($from_id, $getx)){
file_put_contents("data/$chat_id/all.json","$from_id\n", FILE_APPEND);
} 
if($text == "@all"){  
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {
for($i=0;$i<count($getx);$i++){
if ($x == 5 or $x == $tags or $i == 0 ){
$tags = $x + 5;
$t = "☆︙هـا يالـربع وين طامسين\n";
}
$datainfo = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$getx[$i]"));
$names =$datainfo->result->first_name;
$ids =$datainfo->result->id;
$x = $x + 1;
$t = $t.", [".$names."](tg://user?id=".$ids.")";
if ($x == 5 or $x == $tags or $i == 0){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text'=>$t,
'parse_mode' =>"markdown", 
'disable_web_page_preview'=>true,
]);
}
}
}
}
#----------(matrxx)----------#

if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$AUBaland) || in_array($from_id,$admin_user) || in_array($from_id,$manger) or in_array($from_id,$matrxx) or in_array($from_id,$eri) || in_array($from_id,$nazar)) {
if($rt && $text == "رفع مطي" and !in_array($re_id,$motay)){
			file_put_contents("data/motay/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/motay/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙تم ترقيه ليصبح مطي😂👊🏻
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($rt && $text == "رفع مطي" and in_array($re_id,$motay)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙هوه بالفعل مطي😂👊🏻
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المطايه" ){
file_put_contents("data/motay/$chat_id.txt","");
file_put_contents("data/motay/$chat_id.txt","");
file_put_contents("data/motay/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ بواسطة 彡「 [$first_name](tg://user?id=$from_id) 」 
𖠮︙ تم مسح قائمة المطايه
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل مطي"   and in_array($re_id,$motay)){
	$re_id_info = file_get_contents("data/motay/$chat_id.txt");
	$mdrs = file_get_contents("data/motay/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/motay/$chat_id.txt",$str);
	file_put_contents("data/motay/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙ تم تنزيله من قائمة المطايه😂👊??
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل مطي" and !in_array($re_id,$motay)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙هوه ليس مطي ليتم تنزيله😂
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المطايه" ||  $text == "قائمه المطايه" and $motay_info != NULL and $motay_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"𖠮︙ اليك قائمة 彡 المطايه
$motaya_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المطايه" ||  $text == "قائمه المطايه" and $motay_info == NULL || $motay_info == " " || $motay_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
𖠮︙ عزيزي 彡「 [$first_name](tg://user?id=$from_id) 」 
𖠮︙ لايوجد اي مطايه حاليأ
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($text == "الغاء قائمة التثبيت" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$nazar) or in_array($from_id,$eri)) { 
bot('unpinAllChatMessages',[
'chat_id'=>$chat_id,
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"𖠮︙ تم الغاء جميع التثبيتات
𖠮︙ بواسطة 彡「 [$first_name](tg://user?id=$from_id) 」
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
#########
$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
$statusrt = $statjsonrt['result']['status'];
$re = $update->message->reply_to_message;
if($rt && $text == "نادي" or $rt && $text == "المناده"){
if($settings["lock"]["WOL"] == "مقفول"){
$aland = "[$re_name](tg://user?id=$re_id)";
$aland = "[$first_name](tg://user?id=$from_id)";
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
𖠮︙$aland
𖠮︙عزيزي تعال اكو شخص ناداك
𖠮︙المنادي ~⪼ $aland
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
]);
}
}
#####
if($text == "نادي" or $text == "المنادات"){
if($settings["lock"]["WOL"] == "مفتوح"){
bot ('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙عزيزي ~⪼ [$first_name](tg://user?id=$from_id)
𖠮︙امر نادي معطل من قبل الادارة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
}
########
$bot = json_decode(file_get_contents("data/bot.json"),1);
if($update->message->new_chat_member){
$bot[$update->message->new_chat_member->id]['new'] = $user;
file_put_contents("data/bot.json",json_encode($bot));
}
$b = $bot[$from_id]['new'];
if($text == "منو ضافني" and $b != $user and $b != null){
if($settings["lock"]["nweadd"] == "مقفول"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"[𖠮︙ *الشخص الذي ضافك* : @$b]",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text == "منو ضافني" and $b == null){
if($settings["lock"]["nweadd"] == "مقفول"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯ 𖠮︙*انت دخلت عبر الرابط*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
#####
if($text =="نادي المطور"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌁⁞ عزيزي 彡「 [$first_name](tg://user?id=$from_id) 」 
⌁⁞ اسم المطور 彡 $NameDev
⌁⁞ معرف المطور 彡 [$DevUser]
⌁⁞ هل انته متأكد من منادات المطور
⌁⁞ اذا تقصد غير شخص اضغط الغاء"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⌁⁞ نعم ⁞⌁' ,'callback_data'=>"NDVE"],['text'=>'⌁⁞ الغاء ⁞⌁' ,'callback_data'=>"delDve"]],
[['text'=>"⌁⁞ المطور ⁞⌁",'url'=>"t.me/$KKYKKN"]],
]])
]); 
}
if($data == "NDVE" ){
$namegroup = $jsonlink->message->chat->title;
$mem = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⌁⁞ تم منادات المطور انتظر للرد عليك",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'' ,'callback_data'=>"nb1"]],
]])
]); 
$IDMAMBRE = $message->from->id;
$export = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id2");
$jsonlink = json_decode($export, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',['chat_id'=>$Dev[0],'text'=>"⌁⁞ هناك شخص بحاجه الي مساعدة
━━━━━━━━━━━━━
⌁⁞ الاسم 彡 $name2
⌁⁞ الايدي 彡 $from_id2
⌁⁞ المعرف 彡 [@$username2]
━━━━━━━━━━━━━
⌁⁞ معلومات المجموعه
⌁⁞ الايدي 彡 $chat_id2
━━━━━━━━━━━━━
⌁⁞ الرابط 彡 $getlinkde
",]);}
if($data=="delDve"){
bot ('EditMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id2,
'text'=>"⌁⁞ تم الغاء امر منادات المطور",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,]);
sleep(15);
bot('deletemessage',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message->message_id2
]);}
#####
$zkrf = file_get_contents("zkrf.txt");
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
if($text == "حساب العمر" or $text == "العمر"){
if($settings["lock"]["zkrf"] == "مقفول"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌁⁞ اهلا بك  في قسم حساب العمر
⌯⁞ اهلا بك » [$first_name](tg://user?id=$from_id) 
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⌁⁞ حساب العمر الان ⁞⌁','callback_data'=>'ii']],
]
])
]);
}
}
if($data == "ii" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
𖠮︙ ارسل الامر الان 
𖠮︙بهذا الشكل :
𖠮︙العمر السنة/الشهر/اليوم
𖠮︙مثال : العمر 1998/3/5

 ┉ ┉ ┉ ┉ ┉ ┉ ┉
','parse_mode'=>"markdown",
]);   
}
if(strpos($text, 'العمر ') !== false){
$num= str_replace('العمر ','',$text);
$hours_in_day = 24;
$minutes_in_hour = 60;
$seconds_in_mins = 60;
$birth_date = new DateTime($num);
$current_date = new DateTime();
date_default_timezone_set("Asia/Baghdad");
$date = date('n');
$dat = date('j');
$diff = $birth_date->diff($current_date);
$years = $diff->y;
$mn = $diff->m;
$doy = $diff->d;
$months = ($diff->y * 12);
$weeks = floor($diff->days/7); echo "\n";
$days = $diff->days;
$hours = $diff->h + ($diff->days * $hours_in_day);
$mins = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour);
$seconds = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour * $seconds_in_mins);
bot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 
⌁⁞ العضو » [$first_name](tg://user?id=$from_id) 
⌯⁞ تم حساب عمرك بالتفصيل،
⌯⁞ عمرك هوا الان : $years.» سنه  $mn.»اشهر،
⌯⁞ مره على ولادتك : $months.» شهر،
⌯⁞ مره على ولادتك : $weeks.» اسبوع،
⌯⁞ مره على ولادتك : $days.» يوم،
⌯⁞ مره على ولادتك : $hours.» ساعه،
⌯⁞ مره على ولادتك : $mins.» دقيقه،
⌯⁞ مره على ولادتك : $seconds.» ثانيه،

┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⌁⁞ حساب العمر مجددأ ⁞⌁','callback_data'=>'ii']],
]
])
]);
}
#####
if($text == "منو ضافني" or $text == "ضافني"){
if($settings["lock"]["nweadd"] == "مفتوح"){
bot ('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙عزيزي ~⪼ [$first_name](tg://user?id=$from_id)
𖠮︙امر ضافني معطل من قبل الادارة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
}
#######
if($text == "حساب العمر" or $text == "العمر"){
if($settings["lock"]["zkrf"] == "مفتوح"){
bot ('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙عزيزي ~⪼ [$first_name](tg://user?id=$from_id)
𖠮︙امر حساب العمر معطل من قبل الادارة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
}
#######
if($text == "رفع ادمن" or $text == "رفع مدير"){
if($settings["lock"]["rfaabot"] == "مفتوح"){
bot ('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙عزيزي ~⪼ [$first_name](tg://user?id=$from_id)
𖠮︙امر الرفع معطل من قبل الادارة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
}
#######
$P_UIII = str_replace("انطق ","",$text);
if($text == "انطق $P_UIII"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$P_UIII",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
#######
$namex = explode(" - ",$text);
if($namex[0] and $namex[1]){
if($settings["lock"]["mylove"] == "مقفول"){
	$SABREN = array("１０%","２０%","３０%","４０%","５０%","６０%","７０%","８０%","９０%","１００%");
$REEM = array_rand($SABREN,1);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
نـسبـهہ الحـب والـثـقهہ بـيـن $namex[0] و $namex[1] هـي 💕🔰*
 »  [$SABREN[$REEM]](https://t.me/T_EIII)  «",
'parse_mode'=>"markdown", 
'reply_to_message_id'=>$message->message_id,
]);
}}
#############
if($text == "مبرمج السورس" or $text == "مبرمج سورس"){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/vv399/9",
'caption' =>"┏•━•━•━ 『𝙲𝙰𝚁𝙻𝙾𝚂』 ━•━•━•┓
╏⍟ 𝚆𝙴𝙻𝙲𝙾𝙼𝙴 𝚃𝙾 
╏⍟ 𝙸𝙽𝙵𝙾 𝙳𝙴𝚅 𝚂𝙾𝙺𝚁𝙲𝙴 
╏⍟ $time
┗•━•━•━ 『𝙲𝙰𝚁𝙻𝙾𝚂』 ━•━•━•┛
╏⍟ 𝙲𝙾𝙼𝙼𝙺𝙽𝙸𝙲𝙰𝚃𝙸𝙾𝙽 𝙳𝙴𝚅𝙴𝙻𝙾𝙿𝙴𝚁
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"⌁⁞ 𝙱𝙾𝚃 𝙳??𝚅 ⁞⌁",'url'=>"t.me/B8_8BOT"]],
[['text'=>"⌁⁞ 𝙳𝙴𝚅 ⁞⌁",'url'=>"t.me/F_UIII"],['text'=>"⌁⁞ 𝙲𝙷  ⁞⌁",'url'=>"t.me/vv399"]],
]])
]); 
}
############     
elseif( $text =="تفعيل ملف game"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"𖠮︙الملف 彡 *Game*
𖠮︙تم تفعيله في البوت بنجاح
𖠮︙[تفاصيل الملف](https://t.me/vv399/2)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/geme.json',✔);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if( $text =="تعطيل ملف game"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"𖠮︙الملف 彡 *Game*
𖠮︙تم تعطيله وحذفه من البوت بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
  file_put_contents('data/geme.json',✖️);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
$gamejson = file_get_contents('data/geme.json');
if($gamejson == "✔"){
if ($text == "العاب"){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"𖠮︙العاب 彡 *Game*
𖠮︙لعرض الالعاب اضغط علي العبة
𖠮︙لعرض كيبورد العب 彡 Game",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>"لعبة الرياضات",'url'=>"https://t.me/gamebot?game=MathBattle"],['text'=>"لعبة XO",'url'=>"http://t.me/Xo_motazbot?start3836619"]],
            [['text'=>"لعبة المتشابه",'url'=>"https://t.me/gamee?game=DiamondRows"]],
            [['text'=>"لعبة كرة القدم",'url'=>"https://t.me/gamee?game=FootballStar"],['text'=>"لعبة الورق",'url'=>"https://t.me/gamee?game=Hexonix"]],
            ]
        ])
        ]);
}
}

$gamejson = file_get_contents('data/geme.json');
if($gamejson == "✔"){
if($text == "Game"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"𖠮︙اوامر 彡 *Game*
𖠮︙لعرض الالعاب اونلاين 
𖠮︙ارسل امر لعبة + العاب في الاسفل
𖠮︙ كرة القدم 
𖠮︙الرياضات
𖠮︙المتشابه
𖠮︙ الورق
𖠮︙اكس او",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
]);
}}

$gamejson = file_get_contents('data/geme.json');
if($gamejson == "✔"){
if($text == "لعبة الرياضات"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"[لعبة الرياضات](https://t.me/gamebot?game=MathBattle)",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
]);
}}
$gamejson = file_get_contents('data/geme.json');
if($gamejson == "✔"){
if($text == "لعبة كرة القدم"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"[لعبة كرة القدم](https://t.me/gamee?game=FootballStar)",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
]);
}}
$gamejson = file_get_contents('data/geme.json');
if($gamejson == "✔"){
if($text == "لعبة الورق"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"[لعبة الورق](https://t.me/gamee?game=Hexonix)",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
]);
}}
$gamejson = file_get_contents('data/geme.json');
if($gamejson == "✔"){
if($text == "لعبة اكس او"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"[لعبة XO](http://t.me/Xo_motazbot?start3836619)",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
]);
}}
$gamejson = file_get_contents('data/geme.json');
if($gamejson == "✔"){
if($text == "لعبة المتشابه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"[لعبة المتشابه](https://t.me/gamee?game=DiamondRows)",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
]);
}}
############
$chat_id2 = $update->chat->id;
$message_id2 = $update->message_id;
$yotup = str_replace("تحميل ", "", $text);
if($text == "تحميل $yotup"){
$keyboard = [];
$search = json_decode(file_get_contents("https://ggrff7hnn.ml/Yote/yotube_search_v2.1(matrxx).php?search=".urlencode($yotup)),true);
for($b=1; $b <= 10; $b++){   
$keyboard['inline_keyboard'][] = [['text'=>$search['results'][$b]['title'], 'callback_data'=>"jaemax##".$search['results'][$b]['url']]];
$reply_markup=json_encode($keyboard);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'𖠮︙عزيزي 彡「 [$first_name](tg://user?id=$from_id) 」 
𖠮︙قم بأختيار الاغنية ☑️',
'parse_mode'=>"MARKDOWN",
'reply_markup'=>$reply_markup
]);
}
$jaemax = explode("##", $data);
if($jaemax[0] == "jaemax"){
$api = json_decode(file_get_contents("https://alsh-bg.ml/api/YouTube_Free.php?url=http://www.youtube.com/watch?v=".$jaemax[1]),true);
$url = $api['info'][0]['url'];
$title = $api['info'][0]['title'];
$get = file_get_contents($url);
file_put_contents("matrxx.ogg",$get);
bot('deleteMessage',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
]);
bot('sendvoice',[ 
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'voice'=>new CURLFile("matrxx.ogg"),
'caption' =>"*𖠮︙تم تنزيل الاغنية بشكل بصمة ☑️*",
'parse_mode'=>"MARKDOWN",
  'title'=>"$title",
     ]);
unlink("matrxx.ogg");
}
############
if ( $text =="🎭تفعيل الاحصائيات" or $text == "تفعيل الاحصائيات"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم بالتأكيد تفعيل الاحصائيات
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/addnambr.json',✔);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
if ( $text =="🎭تعطيل الاحصائيات" or $text == "تعطيل الاحصائيات"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم بالتأكيد تعطيل الاحصائيات
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/addnambr.json',✖️);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
############
$addnambr = file_get_contents('data/addnambr.json');
if($addnambr == "✔"){
if($text == "الاحصائيات"){
if (in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$eri)) {
$gr7 = count($groups)-1;
$gr8 = count($pirvate)-1;
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"𖠮︙بواسطة ← [$first_name](tg://user?id=$from_id)
𖠮︙تم عرض الاحصائيات
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙المجموعات ← $gr7
𖠮︙المشتركين ← $gr8
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙المطور الاساسي ← [$DevUser]
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}}}
############
if ( $text =="تفعيل ملف Zhrafa"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"𖠮︙الملف 彡 *Zhrafa*
𖠮︙تم تفعيله في البوت بنجاح
𖠮︙[تفاصيل الملف](https://t.me/vv399/3)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/Zhrafa.json',✔);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if( $text =="تعطيل ملف Zhrafa"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"𖠮︙الملف 彡 *Zhrafa*
𖠮︙تم تعطيله وحذفه من البوت بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
  file_put_contents('data/Zhrafa.json',✖️);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
$Zhrafajson = file_get_contents('data/Zhrafa.json');
if($Zhrafajson == "✔"){
if ($text =="تفعيل الزخرفه" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$matrxx) || in_array($from_id,$AUBaland) || in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙ بواسطه 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم تفعيل الزخرفه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["zkh"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}}
$Zhrafajson = file_get_contents('data/Zhrafa.json');
if($Zhrafajson == "✔"){
if($text =="تعطيل الزخرفه" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$matrxx) || in_array($from_id,$AUBaland) || in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
𖠮︙بواسطه 彡 [$first_name](tg://user?id=$from_id)
𖠮︙تم تعطيل الزخرفه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["zkh"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}}
$Zhrafajson = file_get_contents('data/Zhrafa.json');
if($Zhrafajson == "✔"){
$kindi = file_get_contents("kindi.txt");
if($settings["lock"]["zkh"] == "مقفول"){
if ($text == "زخرفه" or $text == "ز" or $text == "زخرف"){
file_put_contents("kindi.txt","nam");
bot("sendMessage",[
 'chat_id'=>$chat_id,
"text"=>"𖠮︙ قم بارسال النص الان
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text and $kindi =="nam" ){
file_put_contents("kindi.txt","");
$k = file_get_contents("https://ali-apii.ml/api/zhrfa_nizk.php?text=".$text);
bot('sendMessage',[
 'chat_id'=>$chat_id,
'text'=>"$k
 ـ────────────
𖠮︙ تمت الزخرفة بنجاح لـ 彡 $text ؛
𖠮︙ اضغط فوق اي نوع زخرفة للنسخ اعلاه ؛
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}}}
############
if ( $text =="تفعيل ملف ChangeName"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"𖠮︙الملف 彡 *ChangeName*
𖠮︙تم تفعيله في البوت بنجاح
𖠮︙[تفاصيل الملف](https://t.me/vv399/4)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/ChangeName.json',✔);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if( $text =="تعطيل ملف ChangeName"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"𖠮︙الملف 彡 *ChangeName*
𖠮︙تم تعطيله وحذفه من البوت بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
  file_put_contents('data/ChangeName.json',✖️);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if ( $text =="تفعيل ملف ChangeUser"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"𖠮︙الملف 彡 *ChangeUser*
𖠮︙تم تفعيله في البوت بنجاح
𖠮︙[تفاصيل الملف](https://t.me/vv399/5)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/ChangeUser.json',✔);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if( $text =="تعطيل ملف ChangeUser"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"𖠮︙الملف 彡 *ChangeUser*
𖠮︙تم تعطيله وحذفه من البوت بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
  file_put_contents('data/ChangeUser.json',✖️);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if ( $text =="تفعيل ملف Changephotos"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"𖠮︙الملف 彡 *Changephotos*
𖠮︙تم تفعيله في البوت بنجاح
𖠮︙[تفاصيل الملف](https://t.me/vv399/7)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/Changephotos.json',✔);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if( $text =="تعطيل ملف Changephotos"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"𖠮︙الملف 彡 *Changephotos*
𖠮︙تم تعطيله وحذفه من البوت بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
  file_put_contents('data/Changephotos.json',✖️);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
$s = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$from_id"));
$sn =$s->result->first_name;
$su =$s->result->username;
$replace = json_decode(file_get_contents("replace.json"),true);
$user = $replace[$from_id]["user"];
$name = $replace[$from_id]["name"];
$photosss = $replace[$from_id]["photos"];
$ChangeUser = file_get_contents('data/ChangeUser.json');
if($ChangeUser == "✔"){
if($message and $su != $user and $user != null and $user != ""){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"𖠮︙غير معرف لمعفن 😂
𖠮︙معرف لقديم : @$user
⌁︙معرف لجديد : @$username",'parse_mode' =>"markdown", 'reply_to_message_id'=>$message->message_id, 
]);
} 
if($message and ! in_array($su,$user)){
$replace[$from_id]["user"] = "$su";
file_put_contents("replace.json",json_encode($replace));
}}
$ChangeName = file_get_contents('data/ChangeName.json');
if($ChangeName == "✔"){
if($message and $sn != $name and $name != null and $name != ""){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"𖠮︙غير اسمه لخايس 😂
𖠮︙اسمه لقديم : $name
𖠮︙اسمه لجديد : $first_name
",'parse_mode' =>"markdown", 'reply_to_message_id'=>$message->message_id, 
]);
} 
if($message and ! in_array($sn,$name)){
$replace[$from_id]["name"] = "$sn";
file_put_contents("replace.json",json_encode($replace));
}}
$Changephotos = file_get_contents('data/Changephotos.json');
if($Changephotos == "✔"){
if($message and $sn != $photosss and $photosss != null and $photosss != ""){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"𖠮︙تعارك ويه الحب و غير صورة 😂",'parse_mode' =>"markdown", 'reply_to_message_id'=>$message->message_id, 
]);
} 
if($message and ! in_array($sn,$photosss)){
$replace[$from_id]["photos"] = "$sn";
file_put_contents("replace.json",json_encode($replace));
}}
############
if ( $text =="تفعيل جميع الملفات"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم بالتأكيد تفعيل جميع الملفات
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/geme.json',✔);
file_put_contents('data/Zhrafa.json',✔);
file_put_contents('data/ChangeUser.json',✔);
file_put_contents('data/Changephotos.json',✔);
file_put_contents('data/ChangeName.json',✔);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
if( $text =="مسح جميع الملفات"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"𖠮︙بواسطه ← [$first_name](tg://user?id=$from_id)
𖠮︙تم بالتأكيد مسح جميع الملفات
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/geme.json',✖️);
file_put_contents('data/Zhrafa.json',✖️);
file_put_contents('data/ChangeUser.json',✖️);
file_put_contents('data/Changephotos.json',✖️);
file_put_contents('data/ChangeName.json',✖️);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
############
if ($text == "المتجر"){
$GGAME = "$gamejson";
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"𖠮︙قائمة ملفات متجر سورس ماتركس
𖠮︙الملفات المتوفره حاليا ↫ ⤈
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙[ملف العاب اونلاين](https://t.me/vv399/3) ↫ ⤈
1~ : game ↬ ($gamejson)
𖠮︙[ملف زخرفه](https://t.me/vv399/4) ↫ ⤈
2~ : Zhrafa ↬ ($Zhrafajson)
𖠮︙[ملف تنبيه عند تغير الاسم](https://t.me/vv399/5) ↫ ⤈
3~ : ChangeName ↬ ($ChangeName)
𖠮︙[ملف تنبيه عند تغير المعرف](https://t.me/vv399/6) ↫ ⤈
4~ : ChangeUser ↬ ($ChangeUser)
𖠮︙[ملف تنبيه عند تغير الصورة](https://t.me/vv399/7) ↫ ⤈
5~ : Changephotos ↬ ($Changephotos)
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙علامة ↫ (✔) تعني الملف مفعل
𖠮︙علامة ↫ (✖️) تعني الملف معطل",
'parse_mode'=>'markdown','disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,
]);
}}
############
$json = json_decode(file_get_contents("data/kit.json"),true);
$kitok = $json["kitok"];
$kitdel = $json["kitdel"];
$kit = $json["kit"];
if($text == "🎭اضف كت" and $from_id == $sudo){
$json["kitok"] = "$from_id";
file_put_contents("data/kit.json",json_encode($json));
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*𖠮︙ارسل السؤال الان*",'reply_to_message_id'=>$message->message_id, 
]);
}
if($text != "🎭اضف كت" and $kitok == $from_id){
$json["kit"][] = "$text";
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*𖠮︙تم حفظ السؤال في قائمه ( كت تويت )
⌔︙السؤال : $text *",'reply_to_message_id'=>$message->message_id, 
]);
unset($json["kitok"]);
file_put_contents("data/kit.json",json_encode($json)); 
}

if($text == "🎭حذف كت" and $from_id == $sudo){
$json["kitdel"] = "$from_id";
file_put_contents("data/kit.json",json_encode($json));
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*𖠮︙ارسل السؤال الان لحذفه*",'reply_to_message_id'=>$message->message_id, 
]);
}

if($text != "🎭حذف كت" and $kitdel == $from_id and in_array($text,$kit)){
$setwit = array_search("$text", $json["kit"]);
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*𖠮︙تم حذف السؤال من قائمه ( كت تويت )
⌁⁞ السؤال : $text *",'reply_to_message_id'=>$message->message_id, 
]);
unset($json["kitdel"]);
unset($json["kit"][$setwit]);
file_put_contents("data/kit.json",json_encode($json)); 
}

if($text != "⌯ حذف كت" and $kitdel == $from_id and !in_array($text,$kit)){
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*𖠮︙هذا السؤال لا يوجد في قائمة ( كت تويت ) *",'reply_to_message_id'=>$message->message_id, 
]);
unset($json["kitdel"]);
file_put_contents("data/kit.json",json_encode($json)); 
}

$malkbot = $coss['malkbot'];
$malkkbot = $coss['malkkbot'];
if($text=="نقل الملكية" or $text=="🎭نقل الملكية"){
if(in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
☆︙عزيزي ← [$name](tg://user?id=$from_id)
☆︙الان قم بأرسال ايدي المطور
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
$coss['malkbot'] = "ok_malk";
$coss['malkkbot'] = "$from_id";
file_put_contents("data/matrxx.json",json_encode($coss));
}
}
if($text and preg_match('/([0-9])/i',$text) and $malkbot == "ok_malk" and $malkkbot == $from_id){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
☆︙بواسطة ← [$name](tg://user?id=$from_id)
☆︙تم تعين المطور جديد بنجاح
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
$coss['malk'] = $text;
$coss['malkbot'] = "on";
file_put_contents("data/matrxx.json",json_encode($coss));
}
if($text=="حذف المالك الثاني" or $text=="🎭حذف المالك الثاني"){
if(in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
☆︙عزيزي ← [$name](tg://user?id=$from_id)
☆︙تم حذف المطور
☆︙تم اعادة المطور الاساسي
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
$coss['malk'] = null;
file_put_contents("data/matrxx.json",json_encode($coss));
}
}

$twit = array_rand($kit, 1);
$kit = $kit[$twit] ;
if($kit != null){
if($text == "كت" or $text == "تويت" or $text == "كت تويت"){
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*𖠮︙$kit *",'reply_to_message_id'=>$message->message_id, 
]);
}} 
$kit = $json["kit"];
if($kit == null){
if($text == "كت" or $text == "تويت" or $text == "كت تويت"){
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*𖠮︙لم تتم اضافة اسئلة في قائمة ( كت تويت ) *",'reply_to_message_id'=>$message->message_id, 
]);
}}
$ctwit = count($json["kit"]);
if($text == "🎭عدد الاسئله"){
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*𖠮︙تم اضافة $ctwit سؤال في قائمة ( كت تويت ) *",'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "🎭مسح الاسئله"){
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*𖠮︙تم مسح الاسئله من قائمة ( كت تويت ) *",'reply_to_message_id'=>$message->message_id, 
]);
unset($json["kit"]);
file_put_contents("data/kit.json",json_encode($json));
}
############
$sorceu = file_get_contents("data/sorceu.json");
if($text == "السورس" or $text == "سورس" or $text == "يا سورس" and $sorceu == null){
bot("sendmessage",['chat_id'=>$chat_id,'text'=>"
⦑ Welcome to Source ⦒

[𓂅 .MaTriX TEAM ](t.me/vv399)
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
[𓂅 . Source Channel](t.me/vv266)

[𓂅 . Source Info](t.me/vv190)

[𓂅 .  DeV MAtRix](t.me/FFBBBF)
 
 ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ 
[𓂅 . TWS MaTrix](T.ME/uu88uuu)
",'parse_mode'=>"Markdown",
'disable_web_page_preview'=> true ,
'reply_to_message_id'=>$message_id,
]); 
}
$sorceu = file_get_contents("data/sorceu.json");
if($text == "السورس" or $text == "سورس" or $text == "يا سورس" and $sorceu != null){
bot("sendmessage",['chat_id'=>$chat_id,'text'=>"
$sorceu
",'parse_mode'=>"Markdown",
'disable_web_page_preview'=> true ,
'reply_to_message_id'=>$message_id,
]); 
}
#######
if( $text=="تحذير" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {
if ($tc == 'group' | $tc == 'supergroup'){
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$manger) && !in_array($re_id,$developer) && !in_array($re_id,$matrxx) && !in_array($re_id,$eri) && !in_array($re_id,$nazar)) {
$add = $settings["information"]["added"];
if ($add == true) {
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
$warnplus = $warn + 1;	
if ($warnplus >= $setwarn) {
$hardmodewarn = $settings["information"]["hardmodewarn"];
if($hardmodewarn == "بالتقييد"){
bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+3600,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو ~⪼ [$re_name](t.me/$re_user)
𖠮︙ تم تحذيرك تحذيراتك *$warnplus* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
   ]);
 }
else
{
   bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+3600,
     ]);
	 	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو ~⪼ [$re_name](t.me/$re_user)
𖠮︙ تم تحذيرك تحذيراتك *$warnplus* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
   ]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙ العضو ~⪼ [$re_name](t.me/$re_user)
𖠮︙تم تحذيرك تحذيراتك *$warnplus* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 'reply_markup'=>$inlinebutton,
   ]);
$settings["warnlist"]["{$re_id}"]=$warnplus;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
 }
else
{
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙خطأ لا يمكن تحذير الادمن  , المدير  , المطور ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}
if($text=="مسح التحذير" && $rt ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
$warnplus = $warn - 1;	
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙لعضو ~⪼ [$re_name](t.me/$re_user)
𖠮︙تم مسح تحذيرك تحذيراتك *$warnplus* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["warnlist"]["{$re_id}"]=$warnplus;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
 }
 }
}
}
if ( strpos($text , 'وضع تحذير') !== false  ) {
$newdec = str_replace(['وضع تحذير'],'',$text);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$matrxx) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {
$add = $settings["information"]["added"];
if ($add == true) {
if ($newdec <= 20 && $newdec >= 1){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
𖠮︙ تم تعيين عدد التحذيرات {*$newdec*}
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["setwarn"]="$newdec";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   }else{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"
𖠮︙لا تستطيع وضع اكثر من 20 تحذير  
",
'reply_markup'=>$inlinebutton,
   ]);
 }
}
}
}
elseif( $text=="تحذيراتي"){
if ($tc == 'group' | $tc == 'supergroup'){  
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙تحذيراتك *$warn* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
   ]);
 }
 }
#######
$re = $update->message->reply_to_message->from->id;
$na1 = $update->message->reply_to_message->from->first_name;
$na2 = $update->message->reply_to_message->from->last_name;
if(!$na1){
$m1 = "لا يوجد اسم اول";
}elseif($na1){
$m1 = "$na1";
}
if(!$na2){
$m2 = "لا يوجد اسم ثاني";
}elseif($na2){
$m2 = "$na2";
}
if($text=="اسمه" and $re){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙الاسم الاول 彡 {$m1}
𖠮︙الاسم الثاني 彡 {$m2}
",
'reply_to_message_id'=>$message_id,
]);
}

$ameer = $message->from->first_name;
$BerrRo = $message->from->last_name;
if(!$ameer){
$p1 = "لا يوجد اسم اول";
}elseif($ameer){
$p1 = "$ameer";
}
if(!$BerrRo){
$p2 = "لا يوجد اسم ثاني";
}elseif($BerrRo){
$p2 = "$BerrRo";
}
if($text=="اسمي"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙لاسم الاول 彡 {$p1}
𖠮︙الاسم الثاني 彡 {$p2}
",
'reply_to_message_id'=>$message->message_id, 
]);
}
 if($text =="المنشئ"){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
$owner1 = $result[$key]['user']['first_name'];
   $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg."\n"."l "."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
   }
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
",
'reply_to_message_id'=>$message_id,'parse_mode'=>"MarkDown",
 ]);
 }
 if($text=="المنشئ"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙لمنشئ 彡 {[$owner1](tg://user?id=$owner)}
𖠮︙يدي المنشئ 彡 {$owner}
𖠮︙معرف المنشئ 彡 {@$owner2}
",
'reply_to_message_id'=>$message_id,'parse_mode'=>"MarkDown",
]);
}
if($text=="الترجمه"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙اليك اوامر الترجمه 
𖠮︙العربيه الي الانكليزي ~⪼ ar#en
𖠮︙الانكليزي الي العربيه ~⪼ en#ar
𖠮︙العربيه الي فارسي ~⪼ fr#ar
𖠮︙فارسي الي العربيه ~⪼ ar#fr
𖠮︙لتركي الي العربيه ~⪼ ar#tr
𖠮︙ العربيه الي التركي ~⪼ tr#ar
𖠮︙لانكليزي الي التركي ~⪼ tr#en
𖠮︙التركي الي الانكليزي ~⪼ en#tr
𖠮︙قم بنسخ اوامر الذي فوق 
𖠮︙وقم بالرد علي الكلمة المطلوبا
",
'reply_to_message_id'=>$message_id,'parse_mode'=>"MarkDown",
]);
}
#######
$re = $message->reply_to_message;
if($text=="fr#ar" and $re){
$s = str_replace(' ','%20',$re->text);
$fr = file_get_contents("https://abu-aland-vip.ml/Abualand/api(matrxx)translate.php?Language=ar&TO=fa&text=".$s);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$fr",
'reply_to_message_id'=>$message->message_id,
 ]);
 }
$re = $message->reply_to_message;
if($text=="en#ar" and $re){
$H = str_replace(' ','%20',$re->text);
$enar = file_get_contents("https://abu-aland-vip.ml/Abualand/api(matrxx)translate.php?Language=en&TO=ar&text=".$H);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$enar",
'reply_to_message_id'=>$message->message_id,
 ]);
 }
$re = $message->reply_to_message;
if($text=="ar#fr" and $re){
$Q = str_replace(' ','%20',$re->text);
$arfr = file_get_contents("https://abu-aland-vip.ml/Abualand/api(matrxx)translate.php?Language=fa&TO=ar&text=".$Q);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$arfr",
'reply_to_message_id'=>$message->message_id,
 ]);
 }
$re = $message->reply_to_message;
if($text=="ar#en" and $re){
$W = str_replace(' ','%20',$re->text);
$aren = file_get_contents("https://abu-aland-vip.ml/Abualand/api(matrxx)translate.php?Language=ar&TO=en&text=".$W);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$aren",
'reply_to_message_id'=>$message->message_id,
 ]);
 }
$re = $message->reply_to_message;
if($text=="ar#tr" and $re){
$E = str_replace(' ','%20',$re->text);
$artr = file_get_contents("https://abu-aland-vip.ml/Abualand/api(matrxx)translate.php?Language=ar&TO=tr&text=".$E);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$artr",
'reply_to_message_id'=>$message->message_id,
 ]);
 }
$re = $message->reply_to_message;
if($text=="tr#ar" and $re){
$R = str_replace(' ','%20',$re->text);
$trar = file_get_contents("https://abu-aland-vip.ml/Abualand/api(matrxx)translate.php?Language=ar&TO=tr&text=".$R);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$trar",
'reply_to_message_id'=>$message->message_id,
 ]);
 }
$re = $message->reply_to_message;
if($text=="en#tr" and $re){
$Y = str_replace(' ','%20',$re->text);
$entr = file_get_contents("https://abu-aland-vip.ml/Abualand/api(matrxx)translate.php?Language=en&TO=tr&text=".$Y);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$entr",
'reply_to_message_id'=>$message->message_id,
 ]);
 }
$re = $message->reply_to_message;
if($text=="tr#en" and $re){
$T = str_replace(' ','%20',$re->text);
$tren = file_get_contents("https://abu-aland-vip.ml/Abua/api(matrxx)translate.php?Language=tr&TO=en&text=".$T);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$tren",
'reply_to_message_id'=>$message->message_id,
 ]);
 }
#######
$sttings = json_decode(file_get_contents("data/ban.json"),1);
$ban_on = str_replace("حظر عام ","",$text);
$ban_of = str_replace("الغاء حظر عام ","",$text);
$ban_onn = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChat?chat_id=$ban_on"),true);
$ban_off = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChat?chat_id=$ban_of"),true);
$id1 = $ban_onn['result']['id'];
$id2 = $ban_off['result']['id'];
$name1 = $ban_onn['result']['first_name'];
$name2 = $ban_off['result']['first_name'];
if($text == "حظر عام $ban_on" and preg_match('/([0-9])/i',$ban_on) and in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙العضو : [$name1](tg://user?id=$id1)
𖠮︙تم حظره عام بنجاح
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$sttings['ban'][] = "$ban_on";
file_put_contents("data/ban.json",json_encode($sttings));
}
if($text == "الغاء حظر عام $ban_of" and preg_match('/([0-9])/i',$ban_of) and in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙لعضو : [$name2](tg://user?id=$id2)
𖠮︙تم الغاء حظره عام بنجاح
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$key = array_search($ban_of,$sttings["ban"]);
unset($sttings["ban"][$key]);
$sttings["ban"] = array_values($sttings["ban"]); 
$sttings = json_encode($sttings,true);
file_put_contents("data/ban.json",$sttings);
}
if ($message && in_array($from_id,$sttings['ban'])){
bot('KickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id,
]);
}
$sttings = json_decode(file_get_contents("data/ban.json"),1);
if ($rt && $text == "حظر عام"){
if(in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙لعضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙تم حظره عام بنجاح
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$sttings['ban'][] = "$re_id";
file_put_contents("data/ban.json",json_encode($sttings));
}}
if ($rt && $text == "الغاء حظر عام"){
if(in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙عضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙تم الغاء حظره عام بنجاح
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$key = array_search($re_id,$sttings["ban"]);
unset($sttings["ban"][$key]);
$sttings["ban"] = array_values($sttings["ban"]); 
$sttings = json_encode($sttings,true);
file_put_contents("data/ban.json",$sttings);
}}
if ($message && in_array($from_id,$sttings['ban'])){
bot('KickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id,
]);
}
$banam = $sttings['ban'];
if( $text == "المحظورين عام" or $text == "🎭المحظورين عام" and $sttings['ban']!== NULL){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)) {
$banam = $sttings['ban'];
for($z = 0;$z <= count($banam)-1;$z++){
$Apibanam = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$banam[$z]"));
$Usermbanam =$Apibanam->result->username;
$namebanam =$Apibanam->result->first_name;
$idbanam =$Apibanam->result->id;
$result = $result."𖠮︙ $z ← [$namebanam](https://t.me/$Usermbanam) - $idbanam"."\n";
}
if(!$result){
$result1 = "𖠮︙لايوجد شخص في القائمه";
}elseif($result){
$result1 = "$result";
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙اليك قائمة المحظورين عام : 
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
$result1",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
 ]);
}
}
$sttings = json_decode(file_get_contents("data/BerrRo.json"),1);
$ban_on = str_replace("كتم عام ","",$text);
$ban_of = str_replace("الغاء كتم عام ","",$text);
$ban_onn = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChat?chat_id=$ban_on"),true);
$ban_off = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChat?chat_id=$ban_of"),true);
$id1 = $ban_onn['result']['id'];
$id2 = $ban_off['result']['id'];
$name1 = $ban_onn['result']['first_name'];
$name2 = $ban_off['result']['first_name'];
if($text == "كتم عام $ban_on" and preg_match('/([0-9])/i',$ban_on) and in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙لعضو : [$name1](tg://user?id=$id1)
𖠮︙تـم كـتـمه عـام بنجاح
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$sttings['Mute'][] = "$ban_on";
file_put_contents("data/BerrRo.json",json_encode($sttings));
}
if($text == "الغاء كتم عام $ban_of" and preg_match('/([0-9])/i',$ban_of) and in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙لعضو : [$name2](tg://user?id=$id2)
𖠮︙تـم الـغـاء كـتـمه عـام بنجاح
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$key = array_search($ban_of,$sttings["Mute"]);
unset($sttings["Mute"][$key]);
$sttings["Mute"] = array_values($sttings["Mute"]); 
$sttings = json_encode($sttings,true);
file_put_contents("data/BerrRo.json",$sttings);
}
if ($message && in_array($from_id,$sttings['ban'])){
bot('deletemessage',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
]);
}
$sttings = json_decode(file_get_contents("data/BerrRo.json"),1);
if ($rt && $text == "كتم عام"){
if(in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙لعضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙تـم كـتـمه عـام بنجاح
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$sttings['Mute'][] = "$re_id";
file_put_contents("data/BerrRo.json",json_encode($sttings));
}}
if ($rt && $text == "الغاء كتم عام"){
if(in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙عضو 彡「 [$re_name](tg://user?id=$re_id) 」 
𖠮︙تـم الـغـاء كـتـمه عـام بنجاح
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
$key = array_search($re_id,$sttings["Mute"]);
unset($sttings["Mute"][$key]);
$sttings["Mute"] = array_values($sttings["Mute"]); 
$sttings = json_encode($sttings,true);
file_put_contents("data/BerrRo.json",$sttings);
}}
if ($message && in_array($from_id,$sttings['Mute'])){
bot('deletemessage',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
]);
}
$banam = $sttings['Mute'];
if( $text == "المكتومين عام" or $text == "🎭المكتومين عام" and $sttings['Mute']!== NULL){
if (in_array($from_id,$Dev) or in_array($from_id,$eri)) {
$Muteam = $sttings['Mute'];
for($z = 0;$z <= count($Muteam)-1;$z++){
$ApiMute = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$Muteam[$z]"));
$UsermMute =$ApiMute->result->username;
$nameMute =$ApiMute->result->first_name;
$idMute =$ApiMute->result->id;
$result = $result."𖠮︙ $z ← [$nameMute](https://t.me/$UsermMute) - $idMute"."\n";
}
if(!$result){
$result2 = "𖠮︙لايوجد شخص في القائمه";
}elseif($result){
$result2 = "$result";
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙اليك قائمة المكتومين عام : 
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
$result2",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
 ]);
}
}
if($text == "🎭مسح المكتومين عام" or $text == "مسح المكتومين عام"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
file_put_contents("data/BerrRo.json","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"𖠮︙بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙ تم مسح قائمة المحظورين
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
}
if($text == "🎭مسح المحظورين عام" or $text == "مسح المحظورين عام"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
file_put_contents("data/ban.json","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"𖠮︙بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙ تم مسح قائمة المحظورين
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
}
if($text == "🎭مسح قائمة العام" or $text == "مسح قائمة العام"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
file_put_contents("data/ban.json","");
file_put_contents("data/BerrRo.json","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"𖠮︙بواسطة 彡 [$first_name](tg://user?id=$from_id)
𖠮︙ تم مسح قائمة المحظورين
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
}
#######
$re_msd = $update->message->reply_to_message;
if ($rt and $text == "تحويل" and $re_msd->video){
$file = "https://api.telegram.org/file/bot$token/".bot('getfile',['file_id'=>$re_msd->video->file_id])->result->file_path;
file_put_contents("data/matrxx.ogg",file_get_contents($file));
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>new CURLFile("data/matrxx.ogg"),
'caption'=>"𖠮︙تم تحويل الفيديو ← بصمة",
]);
unlink("data/matrxx.ogg");
}
if ($rt and $text == "تحويل" and $re_msd->voice){
$file = "https://api.telegram.org/file/bot$token/".bot('getfile',['file_id'=>$re_msd->voice->file_id])->result->file_path;
file_put_contents("data/matrxx.mp3",file_get_contents($file));
bot('sendaudio',[
'chat_id'=>$chat_id,
'audio'=>new CURLFile("data/matrxx.mp3"),
'caption'=>"𖠮︙تم تحويل البصمة ← اغنية",
]);
unlink("data/matrxx.mp3");
}
if ($rt and $text == "تحويل" and $re_msd->photo){
$file = "https://api.telegram.org/file/bot$token/".bot('getfile',['file_id'=>$re_msd->photo[1]->file_id])->result->file_path;
file_put_contents("data/matrxx.png",file_get_contents($file));
bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>new CURLFile("data/matrxx.png"),
]);
unlink("data/matrxx.png");
}
if ($rt and $text == "تحويل" and $re_msd->sticker){
$file = "https://api.telegram.org/file/bot$token/".bot('getfile',['file_id'=>$re_msd->sticker->file_id])->result->file_path;
file_put_contents("data/matrxx.jpg",file_get_contents($file));
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>new CURLFile("data/matrxx.jpg"),
'caption'=>"𖠮︙تم تحويل الملصق ← صوره",
]);
unlink("data/matrxx.jpg");
}
#######
$JJJ22J = file_get_contents("data/JJJ22J.json");
if($text =="🎭تفعيل التبنيه" and $from_id == $admin) {
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"𖠮︙تم تفعيل التنبيه بنجاح",
'reply_to_message_id'=>$message_id,
]);
file_put_contents("data/JJJ22J.json","JJJ22J");
} 
if($text =="/start" and $JJJ22J == "JJJ22J" and $from_id != $admin) {
$times = date('h:i:s');
$pirvate = explode("\n",file_get_contents("Fri3nd_s/pirvate.txt"));
$forward = $update->message->forward_from;
$mabmatrxx = count($pirvate)-1;
$gromatrxx = count($groups)-1;
if(!@$username){$casss = "لايوجد يوزر";}elseif(@$username){$casss = "@$username";}
 bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"𖠮︙اهلأ عزيزي المطور الاساسي
--------------------------------
𖠮︙اسمه ← $first_name
𖠮︙ايديه ← $from_id
𖠮︙يوزره ← $casss
--------------------------------
𖠮︙الاعضاء ← $mabmatrxx
𖠮︙الكروبات ← $gromatrxx
𖠮︙قام بدخول بوتك الان
𖠮︙الوقت ← $times
"]);} 
if($text =="🎭تعطيل التنبيه" and $from_id == $admin) {
 bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
𖠮︙تم تعطيل التنبيه بنجاح
",
'reply_to_message_id'=>$message_id,
]);
unlink("data/JJJ22J.json");
}
########
#######
if ($text == "🎭تحديث" and in_array($from_id,$Dev)){
bot ('sendMessage',['chat_id'=>$chat_id,'text'=>"𖠮︙تم التحديث",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,]);}
#-----------------------#
if($text == "ترتيب الاوامر" || $text == "🎭ترتيب الاوامر" || $text == "ترتيب الازرار" and in_array($from_id,$Dev)){
	$ver = phpversion();
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'𖠮︙جاري ترتيب الاوامر.',
'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>'𖠮︙جاري ترتيب الاوامر..',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'𖠮︙جاري ترتيب الاوامر...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'𖠮︙جاري ترتيب الاوامر....',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'𖠮︙جاري ترتيب الاوامر.',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'𖠮︙جاري ترتيب الاوامر..',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'𖠮︙جاري ترتيب الاوامر...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'𖠮︙جاري ترتيب الاوامر....',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'𖠮︙جاري ترتيب الاوامر.',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'𖠮︙جاري ترتيب الاوامر..',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'𖠮︙جاري ترتيب الاوامر...',
 'reply_to_message_id'=>$message->message_id, 
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'𖠮︙جاري ترتيب الاوامر....',
 'reply_to_message_id'=>$message->message_id, 
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'𖠮︙جاري ترتيب الاوامر.',
 'reply_to_message_id'=>$message->message_id, 
 ]);
 sleep(4);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>"𖠮︙تم ترتيب الاوامر بالشكل التالي :
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
𖠮︙ايدي ↫ ا
𖠮︙رفع مميز ↫ م
𖠮︙رفع ادمن ↫ اد
𖠮︙رفع مدير ↫ مد
𖠮︙رفع منشئ ↫ من
𖠮︙رفع منشئ اساسي ↫ اس
𖠮︙تفعيل الايدي بالصوره ↫ تفع
𖠮︙تعطيل الايدي بالصوره ↫ تعط
𖠮︙تنزيل الكل ↫ تك
𖠮︙مسح رسائلي ↫ رس
𖠮︙مسح سحكاتي ↫ سح
𖠮︙تغير الايدي ↫ تغ
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
[SoUrcE matrxx](https://t.me/vv399)",
'parse_mode'=>"markdown",'reply_to_message_id'=>$message_id,
 ]);
 } 
 #---------------#
 $vi = $message->reply_to_message->text;
$photo = $message->reply_to_message->photo;
$gp_get = file_get_contents("Fri3nd_s/groups.txt");
$groups = explode("\n", $gp_get);
if($text == "اذاعه" and $from_id == $sudo){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"جاري الاذاعه 🏃🏻‍♂️♥️", 'reply_to_message_id'=>$message->message_id, ]);
for ($i=0; $i<count($groups); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$groups[$i],
          'text'=>"$vi",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
bot('sendphoto',[
          'chat_id'=>$groups[$i],
          'photo'=>"$photo",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
} 
}
 #-----------------------#
$posrch = str_replace("صوره ", "", $text);
if($text == "صوره $posrch"){
$get = file_get_contents("https://www.google.com/search?hl=en&biw=1360&bih=652&tbs=isz%3Alt%2Cislt%3Asvga%2Citp%3Aphoto&tbm=isch&sa=1&q=$posrch&oq=$posrch&gs_l=psy-ab.12...0.0.0.10572.0.0.0.0.0.0.0.0..0.0....0...1..64.psy-ab..0.0.0.wFdNGGlUIRk");
preg_match_all('#alt="" src="(.*?)/>#',$get,$e);
for($i=0;$i<1;$i++){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$e[1][$i],
'caption' =>"𖠮︙تم تحميل صورة ← $posrch",
'reply_to_message_id'=>$message->message_id,
]);
}
}
#-----------------------#
$bot_id = "1912009401";
$matrxx = file_get_contents("data/matrxx.json");
$matrxxs = file_get_contents("data/matrxxs.json");
if($text=="ضع ترحيب عام"){
file_put_contents("data/matrxxs.json","$from_id");
if( in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙اهلا بك عزيزي
𖠮︙الان قم بارسال الترحيب عام
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("data/matrxx.json","matrxx");
}}
if($text and $matrxx =="matrxx" and $matrxxs == $from_id){
if( in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
𖠮︙ اهلا بك عزيزي
𖠮︙ تم حفض الترحيب عام بنجاح
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
file_put_contents("data/carllos.json","$text");
unlink("data/matrxx.json");
}}
if( in_array($from_id,$Dev)){
  if($text == "تعين صورة ترحيب"){
    bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙ اهلا بك عزيزي
𖠮︙ارسل صورة الترحيب عام ليتم حفظ
",'reply_to_message_id'=>$message_id,
]);
file_put_contents('data/photo.json','photo');
    }
    $ggett = file_get_contents('data/photo.json');
    if($message->photo and $ggett){
      bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"𖠮︙ اهلا بك عزيزي
𖠮︙ تم حفض صورة الترحيب عام
",'reply_to_message_id'=>$message_id,]);
file_put_contents('data/photo.json','');
file_put_contents('data/phooto.json',$update->message->photo[0]->file_id);
      }
  }
$new = $message->new_chat_member;
$carlloos = file_get_contents("data/carllos.json");
$phooto = file_get_contents('data/phooto.json');
if ($new and $new->id == $bot_id) {
  bot('sendphoto',[
      'chat_id'=>$chat_id,
     'caption'=>"$carlloos",   
       'photo'=>"$phooto",
'reply_to_message_id'=>$message_id,
    ]);
}
#-----------------------#
$tahmel = str_replace("تحميل ","",$text);
if($text == "تحميل $tahmel"){
$keyboard = [];
$search = json_decode(file_get_contents("https://ggrff7hnn.ml/vip/vip2/yotube_search_v2.1(matrxx).php?search=".urlencode($tahmel)),true);
for($b=1; $b <= 10; $b++){   
$keyboard['inline_keyboard'][] = [['text'=>$search['results'][$b]['title'], 'callback_data'=>"jaemax##".$search['results'][$b]['url']]];
$reply_markup=json_encode($keyboard);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'𖠮︙عزيزي 
𖠮︙قم بأختيار الاغنية ☑️',
'parse_mode'=>"MARKDOWN",
'reply_markup'=>$reply_markup
]);
}
$jaemax = explode("##", $data);
if($jaemax[0] == "jaemax"){
$api = json_decode(file_get_contents("https://alsh-bg.ml/api/YouTube_Free.php?url=http://www.youtube.com/watch?v=".$jaemax[1]),true);
$url = $api['info'][0]['url'];
$title = $api['info'][0]['title'];
$get = file_get_contents($url);
file_put_contents("matrxx.ogg",$get);
bot('deleteMessage',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
]);
bot('sendmessage',[
'message_id'=>$update->callback_query->message->message_id,
'chat_id'=>$update->callback_query->message->chat->id,
'text'=>"يتم التحميل الان....♻️",
]);
bot('sendvoice',[ 
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
'voice'=>new CURLFile("matrxx.ogg"),
'caption' =>"*
𖠮︙تم تحميل ← Voice
𖠮︙الاغنية ← $title
*",
'parse_mode'=>"MARKDOWN",
  'title'=>"$title",
     ]);
unlink("matrxx.ogg");
}
#---------#
if($text == "تحديث السورس" || $text == "🎭تحديث السورس" || $text == "تحديث سورس" and in_array($from_id,$Dev)){
	$ver = phpversion();
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️0%
Open Games.php ...
• Updateing ...',
'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>'⬛️⬜️⬜️⬜️⬜️⬜️⬜️⬜️10%
• Updateing ...
Open kickme.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬜️⬜️⬜️⬜️⬜️⬜️20%
• Updateing ...
Open Orders.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(10);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬜️⬜️⬜️⬜️⬜️30%
• Updateing ...
Open bot.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️🔳⬜️⬜️⬜️⬜️40%
• Updateing ...
Open id.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬜️⬜️⬜️⬜️50%
• Updateing ...
Open photoshop.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬜️⬜️⬜️60%
• Updateing ...
Open Hello.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️▪️⬜️⬜️70%
• Updateing ...
Open welcome.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬜️⬜️80%
• Updateing ...
Open replys.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️90%
• Updateing ...
Open fun.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%
• Updateing ...
-',
 'reply_to_message_id'=>$message->message_id, 
 ]);
 sleep(2);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%
• Updateing ...
- -',
 'reply_to_message_id'=>$message->message_id, 
 ]);
 sleep(3);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%
• Updateing ...
- - -',
 'reply_to_message_id'=>$message->message_id, 
 ]);
 sleep(4);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>"𖠮︙تم تحديث البوت 
𖠮︙لديك اخر اصدار للسورس 
𖠮︙لاصدار ← <code>$ver</code>v",
'parse_mode'=>"HTML",'reply_to_message_id'=>$message_id,
 ]);
 } 

echo "By visco";
