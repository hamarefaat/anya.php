<?php 
ob_start();
$API_KEY='1153423104:AAFVGxGq7ofaZDTs8ZPj10EcAr3lZMXX_CI';
echo "https://api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME'];
define('API_KEY',$API_KEY);
function bot($method,$anya=[]){$teamamort = http_build_query($anya);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$teamamort";
$anya  = file_get_contents($url); return json_decode($anya );}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$text = $message->text;
$first_name = $message->from->first_name;
$chat_id    = $message->chat->id;
$message_id = $message->message_id;
$message_id2 = $message->message_id;
$reply = $message->reply_to_message;
$re = $message->reply_to_message;
$user = '@'.$message->from->username;
$name = $message->from->first_name;
$tc = $update->message->chat->type;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$message = $update->message; 
$text = $update->message->text;
$inline= $update->inline_query; 
$voice = $update->message->voice;
$video = $update->message->video; 
$audio = $update->message->audio;
$photo = $update->message->photo;
$token = API_KEY;
$game = $update->message->game;
$sticker = $update->message->sticker; 
$contact = $update->message->contact;
$chat_id = $update->message->chat->id; 
$replay = $message->reply_to_message; 
$from_id = $update->message->from->id; 
$fwd = $update->message->forward_from;
$edited = $update->edited_message->text; $document = $update->message->document;
$title_name = $update->message->chat->title; $user = $update->message->from->username;
$name = $update->message->from->first_name; $message_id = $update->message->message_id;
$edit_id = $update->edited_message->message_id; $edit_chat_id = $update->edited_message->chat->id;
$fwd0 = $update->message->forward_from_chat->id;
$newid = $update->message->new_chat_member->id;
$edit_from_id = $update->edited_message->message->from->id;
$newbots = $update->message->new_chat_member->username;
$newname = $update->message->new_chat_member->first_name;
$reply_name = $update->message->reply_to_message->from->first_name;
$reply_user = $update->message->reply_to_message->from->username; 
$reply_id = $update->message->reply_to_message->from->id;
$id = $message->from->id; 
$message    = $update->message;
$message_id2 = $update->message->message_id;
$message_id = $update->message->message_id;
$re_msgid   = $update->message->reply_to_message->message_id;
$from_id    = $message->from->id;
$re_id   = $update->message->reply_to_message->message_id;
$re_id    = $message->from->id;
$text= $message->text;
$chat_id    = $message->chat->id;
$new = $message->new_chat_member;
$left= $update->message->left_chat_member;
$result2    = $json2->result;
$contact    = $update->message->contact;
$audio      = $update->message->audio;
$location   = $update->message->location;
$memb= $update->message->message_id;
$game= $update->message->game; 
$name= $update->message->from->first_name;
$re  = $update->message->reply_to_message;
$re_msgid   = $update->message->reply_to_message->message_id;
$re_id      = $update->message->reply_to_message->from->id;
$gp_name    = $update->message->chat->title;
$user= $update->message->from->username;
$for = $update->message->from->id;
$sticker    = $update->message->sticker;
$video      = $update->message->video;
$photo      = $update->message->photo;
$voice      = $update->message->voice;
$doc = $update->message->document;
$fwd = $update->message->forward_from;
$re  = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$re_user    = $update->message->reply_to_message->from->username;
$re_msgid   = $update->message->reply_to_message->message_id;
$type= $update->message->chat->type;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$chat_id2 = $message->chat->id;
$id = $message->from->id;
$message_id = $message->message_id;
  $LE_C4_KR = $message->message_id;
$me = $message->message_id;
$forward = $update->message->forward_from_id;

$new = $message->new_chat_member;
$MOSYRIA = $update->message->reply_to_message->from->id;
$MOSSYRIA = $update->message->reply_to_message->from->username;
$from_user = $message->from->username;
$get             = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$MOSTYRIA        = $info['result']['status'];
if($message){$msgs = json_decode(file_get_contents('msgs.json'),true); $msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1); file_put_contents('msgs.json', json_encode($msgs));}
$MOSY = array_rand($MOSYRIA,1); $photo = "https://t.me/$user";
$setnamebot = file_get_contents("setname.txt");
$namebot = file_get_contents("namebot.txt");
$MOSTYRIA1 = $message->message_id;
$gp_name    = $update->message->chat->title;
$gp_name    = $update->message->chat->title;
$gpname = $update->callback_query->message->chat->title;
$caption = $update->message->caption;

$devhelp = file_get_contents("set1name.txt");
$devhelpp = file_get_contents("devhelpp.txt");
$devhelp1 = file_get_contents("set1name1.txt");
$devhelpp1 = file_get_contents("devhelpp1.txt");
if(isset($update->callback_query)){
$callbackMessage = '';
var_dump(AntarSD('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>$callbackMessage]));
$chat_id = $update->callback_query->message->chat->id;
$from_id = $update->callback_query->from->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;}
/* </>=============== teamamort===============</> */
$amort ="hama_refaat"; // پێناسەی سەرۆک
$sudo = " 511311707"; // ناسنامەی سەرۆک بۆت
$botid = "1153423104"; // ناسنامەی بۆت
$channels = "xawnakam_lm"; //کەناڵـ
$info = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=".$from_id), true);
$group = $info['result']['status']; $admin = "administrator"; $mudir = "creator";
$info_ = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$edit_chat_id&user_id=".$edit_from_id), true); $group_ = $info_['result']['status'];
$bot = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$botid");
/* </>===============  ===============</> */
function en($text) {if(stristr($text,"a") or stristr($text, 'b') or stristr($text, 'c') or stristr($text, 'd') or stristr($text, 'e') or stristr($text, 'f') or stristr($text, 'g') or stristr($text, 'h') or stristr($text, 'i') or stristr($text, 'j') or stristr($text, 'k') or stristr($text, 'l') or stristr($text, 'm') or stristr($text, 'n') or stristr($text, 'o') or stristr($text, 'p') or stristr($text, 'q') or stristr($text, 'r') or stristr($text, 's') or stristr($text, 't') or stristr($text, 'u') or stristr($text, 'v') or stristr($text, 'w') or stristr($text, 'x') or stristr($text, 'y') or stristr($text, 'z')){
return true;}else{return false;}} $en = en($text);
function ar($text) {if(stristr($text,"ض") or stristr($text, 'ص') or stristr($text, 'ث') or stristr($text, 'ق') or stristr($text, 'ف') or stristr($text, 'غ') or stristr($text, 'ع') or stristr($text, 'ه') or stristr($text, 'خ') or stristr($text, 'ح') or stristr($text, 'ج') or stristr($text, 'ش') or stristr($text, 'س') or stristr($text, 'ي') or stristr($text, 'ب') or stristr($text, 'ل') or stristr($text, 'ا') or stristr($text, 'ت') or stristr($text, 'ن') or stristr($text, 'م') or stristr($text, 'ك') or stristr($text, 'ط') or stristr($text, 'ذ') or stristr($text, 'ء') or stristr($text, 'ؤ') or stristr($text, 'ر') or stristr($text, 'ى') or stristr($text, 'ئ') or stristr($text, 'ة') or stristr($text, 'و') or stristr($text, 'ز') or stristr($text, 'ظ') or stristr($text, 'د') or stristr($text, 'أ') or stristr($text, 'إ') or stristr($text, 'آ')){
return true;}else{return false;}} $ar = ar($text);
/* </>=============== ===============</> */
$_gif = file_get_contents("data/gif.json"); $gif_ = explode("\n", $_gif);
$_link = file_get_contents("data/link.json"); $link_ = explode("\n", $_link);
$_fwd = file_get_contents("data/fwd.json"); $fwd_ = explode("\n", $_fwd);
$_voice = file_get_contents("data/voice.json"); $voice_ = explode("\n", $_voice);
$_audio = file_get_contents("data/audio.json"); $audio_ = explode("\n", $_audio);
$_video = file_get_contents("data/video.json"); $video_ = explode("\n", $_video);
$_sticker = file_get_contents("tg/sticker.json"); $sticker_ = explode("\n", $_sticker);
$_photo = file_get_contents("data/photo.json"); $photo_ = explode("\n", $_photo);
$_hash = file_get_contents("data/hash.json"); $hash_ = explode("\n", $_hash);
$_ar = file_get_contents("data/ar.json"); $ar_ = explode("\n", $_ar);
$_en = file_get_contents("data/en.json"); $en_ = explode("\n", $_en);
$_game = file_get_contents("data/game.json"); $game_ = explode("\n", $_game);
$_contact = file_get_contents("data/contact.json"); 
$contact_ = explode("\n", $_contact);
$_document = file_get_contents("data/document.json"); 
$document_ = explode("\n", $_document);
$_username = file_get_contents("data/username.json");
$username_ = explode("\n", $_username);
$_bots = file_get_contents("data/bots.json"); $bots_ = explode("\n", $_bots);
$_edited = file_get_contents("data/edited.json"); $edited_ = explode("\n", $_edited);
$_inline = file_get_contents("data/inline.json"); $inline_ = explode("\n", $_inline);
$_spam = file_get_contents("data/spam.json"); $spam_ = explode("\n", $_spam);
$_mute = file_get_contents("data/mute.json"); $mute_ = explode("\n", $_mute);
$_add = file_get_contents("data/add.json"); $add_ = explode("\n", $_add);
$_replay = file_get_contents("data/replay.json"); $replay_ = explode("\n", $_replay);
$_wlc = file_get_contents("data/wlc.json"); $wlc_ = explode("\n", $_wlc);
$selict = explode("\n", file_get_contents("data/selict/s$chat_id.json"));
/* </>===============hama==============</> */
mkdir("data/member");
mkdir("data/member/$chat_id");

$Cmember = file_get_contents("data/member/$chat_id/Cmember.txt");
$CCmember = file_get_contents("data/member/$chat_id/member.txt");
$getCCmember = explode("\n",$CCmember);
if($text == "/start" | $text =="ئایدی" | $text =="/add@anyambot" | $text =="/my@anyambot" | $text =="/id@anyambot" | $text =="/t@anyambot"){
$from_id = $message->from->id;
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@xawnakam_lm&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>" جۆینـ بکەهـ ئیجا ئەتوانیتـ بەکاربێنیـ🙂🖤
@xawnakam_lm",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
      'inline_keyboard'=>[
   [
     ],
   ]
   ])
   ]); return false;}
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"",'reply_to_message_id'=>$message->$message_id,]);}

if($text == "/start" and !strpos($inch , '"status":"left"') !== false and $message->chat->type == "private"){
mkdir("data");
mkdir("qunen");
mkdir("qunen/$chat_id");
mkdir("data/selict");
mkdir("data/filter");
bot('sendMessage',['chat_id'=>$chat_id, 'parse_mode'=>'MARKDOWN','message_id'=>$message_id,'reply_to_message_id'=>$message->message_id,
'text'=>"💯¦ سڵاوو بەخێربیت بۆ بۆتی $namebot 🎖
💰¦ کارم پاراستنیـ گرووپ چاتە
📛¦ بمکە گرووپ و بمکە ئەدمین ...
⚖️¦ ئەندامـ *$c* : 🌿
",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"داڕێژەریـ بۆتـ ™",'url'=>"t.me/$amort"],['text'=>"ناردنی نامە ",'callback_data'=>"hama"]],[['text'=>"⚙ چەناڵـ ⚙",'url'=>"https://t.me/$channels"]],]])]);}
/* </>=============== حەمە ===============</> */

$hloobot = str_replace("ئایدی ","$hloobot",$text); 
if($text == "ئایدی $hloobot"){
$Data_ch = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$hloobot"));
$Name_ch =$Data_ch->result->title;
$Id_ch =$Data_ch->result->id;
$bio_ch =$Data_ch->result->description;
$user_ch =$Data_ch->result->username;
$ns = "`";
bot('sendmessage', [
'chat_id'=>$chat_id,
'text'=>"
*•🙊 ناوو $Name_ch
• 🙈 یورزنەیم @$user_ch
• 🚧 دەربارەی *$bio_ch*
• 💫 ئایدیـ *$ns$Id_ch$ns
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
   ]);
   }
 
if($text == "/add@anyambot" or $text =="/add" and !in_array($chat_id, $add_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/add.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',[
'chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ سڵاوو 
📡¦ بۆت دڵنیابووەوە
☑️¦ ناسنامەیـ گرووپـ`$chat_id`
✓",]);}}
if($text == "/add@anyambot" and in_array($chat_id, $add_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ سڵاوو 
📡¦ بۆت بەدڵنیایەوە لە گرووپ کارابووە
☑️¦ ناسنامەیـ گرووپـ`$chat_id`
✓",]);}}
if($text == "/of@anyambot" and in_array($chat_id, $add_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/add.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/add.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown", 'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦سڵاوو
📡¦ بەسەرکەوتوی ڕاگیرا بۆت
☑️¦ ناسنامەیـ  گرووپـ`$chat_id`
✓",]);}}
if($text == "/of@anyambot" and !in_array($chat_id, $add_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',[
'chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ سڵاوو بەڕێزم 
📡¦ بۆت ڕاگیراوە لەگرووپـت
☑️¦ ناسنامەیـ گرووپـ`$chat_id`
✓",]);}}

/* </>===============hama===============</> */
if($update->message->new_chat_members and $newid == $botid and !in_array($chat_id, $wlc_)){
file_put_contents("data/wlc.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',[ 
'chat_id'=>$chat_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'text'=>"💯¦ سڵاوو من ناووم $namebot 🎖
💰¦ کاریـ من پاراستنیـ گرووپ چاتە
📛¦ زیادی گرووپتم بکە و بمکەرە ئەدمین ...
🧠︓ڕێگریـ لەفۆروارد و لینک و بێزار،کردنیـ گرووپ ئەکا
⚖️¦ سەرۆک بۆت : @$amort
 👨🏽‍🔧",'parse_mode'=>markdown,'disable_web_page_preview'=>true,]);}
/* </>=============== hama ===============</> */
if($text == "$namebot دەرچۆ"){if($from_id == $sudo){
$send = file_get_contents("data/add.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/add.json', $send);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"💯¦ @$amort",
]); bot('leaveChat',['chat_id'=>$chat_id,]);}}
/* </>=============== hamaa ===============</> */
$id = $message->from->id;
$iBadlz = $update->message->reply_to_message->from->id;
$TlllllT = $update->message->reply_to_message->from->username;
if($text =="کردنە ئەدمین"){if($from_id == $sudo or $group == $mudir){
bot('promoteChatMember',['chat_id'=>$chat_id,'user_id'=>$iBadlz,
'can_delete_messages'=>true,'can_invite_users'=>true,'can_restrict_members'=>true,'can_pin_messages'=>true,]); 
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"👤¦ بەڕێز »  @$TlllllT
🎫¦ ناسنامە » (  $iBadlz 🗳 )
🛠¦ کرایت بە ئەدمینی گرووپ
✓️️",'reply_to_message_id'=>$message->message_id,
]);}elseif($text =="کردنە ئەدمین" and $id != $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=> "📛¦ تەنیا فەرمانە هی {داڕێژەریـ بۆت,سەرۆک گرووپ} ئەتوانـم جێ بەجێ بکەم
🚶",'reply_to_message_id'=>$message->message_id,]);}}
/* </>===============hama===============</> */
if($text =="لادانی ئەدمین"){if($from_id == $sudo or $group == $mudir){
bot('promoteChatMember',['chat_id'=>$chat_id,'user_id'=>iBadlz,
'can_delete_messages'=>false,'can_invite_users'=>false,'can_restrict_members'=>false,'can_pin_messages'=>false,]);
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"👤¦ بەڕێز »  @$TlllllT
🎫¦ ناسنامە » ( $iBadlz 🗳 )
🛠¦ لە ئەدمینیـ لادرایـ
✓️️",'reply_to_message_id'=>$message->message_id,]);}elseif($text =="لادانی ئەدمین" and $id != $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=> "📛¦ تەنیا فەرمانە هی {داڕێژەریـ بۆت,سەرۆک گرووپ} ئەتوانـم جێ بەجێ بکەم
🚶",'reply_to_message_id'=>$message->message_id,]);}}
/* </>===============hama===============</> */
if($re and $re_id != $bot and $re_id != $sudo and $re_id !== $mudir and $re_id !== $admin and $text=="ئاگاداری" ){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',[
'chat_id'=>$chat_id,'text'=>"👤¦ بەڕێز »  @$TlllllT
🎫¦ ناسنامە » ( $iBadlz 🗳 )
🛠¦ ئاگاداری درا پێتـ 
✓️️",'reply_to_message_id'=>$message->message_id,]);
bot('restrictChatMember',[
'chat_id'=>$chat_id,'user_id'=>$iBadlz]);
}elseif( $text=="ئاگاداری" || $text == "تقييد" and $id != $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📛¦ تەنیا فەرمانە هی {داڕێژەریـ بۆت,سەرۆک گرووپ} ئەتوانـم جێ بەجێ بکەم
🚶",'reply_to_message_id'=>$message->message_id,]);}}
/* </>===============  ===============</> */
){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('promoteChatMember',[
'chat_id'=>$chat_id,'user_id'=>$iBadlz,'can_send_messages'=>true,]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ بەڕێز »  @$TlllllT
🎫¦ ناسنامە » ( $iBadlz 🗳 )
🛠¦ ئاگاداریـت لەسەر لادرا    
✓️️",'reply_to_message_id'=>$message->message_id,]);
}elseif($text =="لادانی ئاگاداری"  and $id != $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📛¦ تەنیا فەرمانە هی {داڕێژەریـ بۆت,سەرۆک گرووپ} ئەتوانـم جێ بەجێ بکەم
🚶",'reply_to_message_id'=>$message->message_id,]);}}
/* </>===============  ===============</> */
if($re and $re_id != $bot and $re_id != $sudo and $re_id !== $mudir and $re_id !== $admin and $text == "دەرکردن" || $text == "/kick" and $replay){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('kickChatMember',[
'chat_id'=>$chat_id,'user_id'=>$reply_id,]);
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"👤¦ بەڕێز »  [@$reply_user]
🎫¦ ناسنامە » ( $reply_id 🗳 )
🛠¦  دەرکرا لەگرووپ 
✓️",'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>$reply_name,'url'=>"https://telegram.me/$reply_user"]],]])]);}elseif($text =="دەرکردن" || $text =="/kick" || $text =="ban" || $text =="kick" and $id != $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📛¦ تەنیا فەرمانە هی {داڕێژەریـ بۆت,سەرۆک گرووپ} ئەتوانـم جێ بەجێ بکەم
🚶",'reply_to_message_id'=>$message->message_id,]);}}

if(preg_match('/^(دەرکردن) (.*)/s', $text, $ban)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$info = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$ban[2]"), true);
$_user = $info['result']['user']['username'];
$_name = $info['result']['user']['first_name'];
$_id = $info['result']['user']['id'];
bot('kickChatMember',[
'chat_id'=>$chat_id,'user_id'=>$_id,]);
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"👤¦ بەڕێز »  [@$reply_user]
🎫¦ ناسنامەـ » ( $reply_id 🗳 )
🛠¦ دەکراا لەگرووپ  
✓️️",'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>$_name, 'url'=>"https://telegram.me/$_user"]],]])]);}}
/* </>===============  ===============</> */
if($replay and $text == "راگرتنی چاتی" and in_array($reply_id, $selict) and $re and $re_id != $bot and $re_id != $sudo and $re_id !== $mudir and $re_id !== $admin ){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"👤¦ بەڕێز »  [@$reply_user]
🎫¦ ناسنامە » ( $reply_id 🗳 )
🛠¦ چاتت ڕاگیرا
✓️",]);}}
/* </>===============  ===============</> */
if($re and $re_id != $bot and $re_id != $sudo and $re_id !== $mudir and $re_id !== $admin and $text == "راگرتنی چاتی"  and !in_array($reply_id, $selict) and $reply_id != $sudo){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/selict/s$chat_id.json", "$reply_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"👤¦ بەڕێز »  [@$reply_user]
🎫¦ ناسنامە » ( $reply_id 🗳 )
🛠¦ چاتت ڕاگیرااا
✓️",]);}}
/* </>===============  ===============</> */
 and !in_array($reply_id, $selict) and $reply_id != $sudo){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"👤¦ بەڕێز »  [@$reply_user]
🎫¦ ناسنامە » ( $reply_id 🗳 )
🛠¦ چات کراوە بەڕێزم
✓️",]);}}
/* </>===============  ===============</> */
if($re and $re_id != $bot and $re_id != $sudo and $re_id !== $mudir and $re_id !== $admin and $text == "لادانی راگرتنی چاتی" and in_array($reply_id, $selict) and $reply_id != $sudo){if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/selict/s$chat_id.json"); $send = str_replace($reply_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents("data/selict/s$chat_id.json", $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"👤¦ بەڕێز »  [@$reply_user]
🎫¦ ناسنامە » ( $reply_id 🗳 )
🛠¦ چاتت کڕاوە
✓️",]);}}
/* </>===============  ===============</> */
if($text == "راگرتنی لینک" and !in_array($chat_id, $link_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/link.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی لینک" and in_array($chat_id, $link_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی لینک" and in_array($chat_id, $link_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/link.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/link.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی لینک" and !in_array($chat_id, $link_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی پێناسە" and !in_array($chat_id, $username_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/username.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی پێناسە" and in_array($chat_id, $username_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی پێناسە" and in_array($chat_id, $username_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/username.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/username.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی پێناسە" and !in_array($chat_id, $username_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی تاگ" and !in_array($chat_id, $hash_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/hash.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی تاگ" and in_array($chat_id, $hash_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی تاگ" and in_array($chat_id, $hash_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/hash.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);file_put_contents('data/hash.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی تاگ" and !in_array($chat_id, $hash_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی هاووبەشکردن" and !in_array($chat_id, $fwd_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/fwd.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,
'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی هاووبەشکردن" and in_array($chat_id, $fwd_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی هاووبەشکردن" and in_array($chat_id, $fwd_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/fwd.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/fwd.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی هاووبەشکردن" and !in_array($chat_id, $fwd_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی بێزاری" and !in_array($chat_id, $spam_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/spam.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی بێزاری" and in_array($chat_id, $spam_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی بێزاری" and in_array($chat_id, $spam_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/spam.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);file_put_contents('data/spam.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی بێزاری " and !in_array($chat_id, $spam_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی عرەبی" and !in_array($chat_id, $ar_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/ar.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی عرەبی"   and in_array($chat_id, $ar_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی عرەبی" and !strpos($inch , '"status":"left"') !== false and in_array($chat_id, $add_) and in_array($chat_id, $ar_)){if($from_id == $admin | strpos($inch , '"status":"member"') == false){ $send = file_get_contents("data/ar.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);file_put_contents('data/ar.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی عرەبی"   and !in_array($chat_id, $ar_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی ئینگلیزی" and !in_array($chat_id, $en_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){ file_put_contents("data/en.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی ئینگلیزی" and in_array($chat_id, $en_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی ئینگلیزی" and in_array($chat_id, $en_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/en.json");$send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/en.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی ئینگلیزی" and !in_array($chat_id, $en_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی نامەی دەنگی" and !in_array($chat_id, $voice_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){ file_put_contents("data/voice.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی نامەی دەنگی" and in_array($chat_id, $voice_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی نامەی دەنگی" and in_array($chat_id, $voice_)){ if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/voice.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);file_put_contents('data/voice.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,
'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی نامەی دەنگی" and !in_array($chat_id, $voice_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی گۆرانی" and !in_array($chat_id, $audio_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/audio.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی گۆرانی" and in_array($chat_id, $audio_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی گۆرانی" and in_array($chat_id, $audio_)){ if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/audio.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);file_put_contents('data/audio.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی گۆرانی" and !in_array($chat_id, $audio_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی ڤیدیۆ" and !in_array($chat_id, $video_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/video.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text ==  "راگرتنی ڤیدیۆ" and in_array($chat_id, $video_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی ڤیدیۆ" and in_array($chat_id, $video_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/video.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/video.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی ڤیدیۆ" and !in_array($chat_id, $video_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی ستیکەر" and !in_array($chat_id, $sticker_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){ file_put_contents("data/sticker.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی ستیکەر" and in_array($chat_id, $sticker_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی ستیکەر" and in_array($chat_id, $sticker_)){ if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/sticker.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/sticker.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی ستیکەر" and !in_array($chat_id, $sticker_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی وێنە" and !in_array($chat_id, $photo_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){ file_put_contents("data/photo.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی وێنە" and in_array($chat_id, $photo_)){ if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',[
'chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی وێنە" and in_array($chat_id, $photo_)){ if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/photo.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/photo.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی وێنە" and !in_array($chat_id, $photo_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی بۆتەکان" and !in_array($chat_id, $bots_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){ file_put_contents("data/bots.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی بۆتەکان" and in_array($chat_id, $bots_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی بۆتەکان" and in_array($chat_id, $bots_)){ if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/bots.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/bots.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی بۆتەکان" and !in_array($chat_id, $bots_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',[
'chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی گیف" and !in_array($chat_id, $document_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/document.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی گیف" and in_array($chat_id, $document_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی گیف" and in_array($chat_id, $document_)){ if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/document.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/document.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی گیف" and !in_array($chat_id, $document_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی ژمارە تیل" and !in_array($chat_id, $contact_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/contact.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی ژمارە تیل" and in_array($chat_id, $contact_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی ژمارە تیل" and in_array($chat_id, $contact_)){ if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/contact.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/contact.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی ژمارە تیل" and !in_array($chat_id, $contact_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی فایل" and !in_array($chat_id, $gif_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/gif.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی فایل" and in_array($chat_id, $gif_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی فایل" and in_array($chat_id, $gif_)){ if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/gif.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/gif.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی فایل" and !in_array($chat_id, $gif_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی دەسکاری" and !in_array($chat_id, $edited_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/edited.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی دەسکاری" and in_array($chat_id, $edited_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی دەسکاری" and in_array($chat_id, $edited_)){ if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/edited.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/edited.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی دەسکاری" and !in_array($chat_id, $edited_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی ئۆنلاین" and !in_array($chat_id, $inline_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/inline.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "راگرتنی ئۆنلاین" and in_array($chat_id, $inline_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی ئۆنلاین" and in_array($chat_id, $inline_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/inline.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/inline.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی ئۆنلاین" and !in_array($chat_id, $inline_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "را" and !in_array($chat_id, $mute_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){file_put_contents("data/mute.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "قفل" and in_array($chat_id, $mute_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "فتح" and in_array($chat_id, $mute_)){ if($from_id == $sudo or $group == $mudir or  $group == $admin){ $send = file_get_contents("data/mute.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/mute.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "فتح " and !in_array($chat_id, $mute_)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}

if($text == "راگرتنی گشتی" and $message->chat->type == "supergroup"){if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/contact.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/document.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/photo.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/voice.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/spam.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/username.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/link.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/hash.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/fwd.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/audio.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/video.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/sticker.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/bots.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/game.json", "$chat_id\n", FILE_APPEND);
file_put_contents("data/gif.json", "$chat_id\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",]);}}
if($text == "کردنەوەی گشتی" and $message->chat->type == "supergroup"){ if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/contact.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/contact.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/contact.json', $send);
file_put_contents("data/document.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/document.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/document.json', $send);
file_put_contents("data/photo.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/photo.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/photo.json', $send);
file_put_contents("data/voice.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/voice.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/voice.json', $send);
file_put_contents("data/spam.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/spam.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/spam.json', $send);
file_put_contents("data/username.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/username.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/username.json', $send);
file_put_contents("data/link.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/link.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/link.json', $send);
file_put_contents("data/hash.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/hash.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/hash.json', $send);
file_put_contents("data/fwd.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/fwd.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/fwd.json', $send);
file_put_contents("data/audio.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/audio.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/audio.json', $send);
file_put_contents("data/video.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/video.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/video.json', $send);
file_put_contents("data/sticker.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/sticker.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/sticker.json', $send);
file_put_contents("data/bots.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/bots.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/bots.json', $send);
file_put_contents("data/game.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/game.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/game.json', $send);
file_put_contents("data/gif.json", "$chat_id\n", FILE_APPEND); $send = file_get_contents("data/gif.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/gif.json', $send);
bot('sendMessage',['chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"*- بەڕێز $name * 💘
*- لەگرووپتـ $text کاراکرا 🤎*",
]);
}}
if(preg_match("/^(.*)([Tt].[Mm][Ee])|(.*)([Tt].[Mm][Ee])(.*)|([Tt].[Mm][Ee])(.*)|(.*)([Tt][Ee][Ll][Ee][Gg][Rr][Aa][Mm].[Mm][Ee])|(.*)([Tt][Ee][Ll][Ee][Gg][Rr][Aa][Mm].[Mm][Ee])(.*)|([Tt][Ee][Ll][Ee][Gg][Rr][Aa][Mm].[Mm][Ee])(.*)|(.*)([Ww][Ww][Ww])|(.*)([Ww][Ww][Ww])(.*)|(.*)([Cc][Oo][Mm])|(.*)([Cc][Oo][Mm])(.*)|([Cc][Oo][Mm])(.*)/", $text) and in_array($chat_id, $link_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($message->text_entities->type == "text_link" and in_array($chat_id, $link_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if(preg_match('/^(.*)([Bb][Oo][Tt])/s',$newbots) and in_array($chat_id, $bots_)){if($group == "member"){
bot('sendMessage',['chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"👤¦ بەڕێز »  [@$user]
🎫¦ ناسنامە » ( $from_id )
🛠¦ بەسەرکەوتوی بۆتەکان دەرکران✓️", ]);bot('kickChatMember',['chat_id'=>$chat_id,'user_id'=>$update->message->new_chat_member->id]);bot('kickChatMember',[
'chat_id'=>$chat_id,'user_id'=>$from_id]);}}
if(preg_match("/^(@)(.*)|(.*)(@)|(.*)(@)(.*)/s", $text) and in_array($chat_id, $username_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if(preg_match("/^(#)(.*)|(.*)(#)|(.*)(#)(.*)/s", $text) and in_array($chat_id, $hash_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($edited and in_array($chat_id, $edited_)){if($group_ == "member"){
bot('deleteMessage',['chat_id'=>$edit_chat_id,'message_id'=>$edit_id]);}}
if($inline and in_array($chat_id, $inline_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if(str_word_count($text) > 100 and in_array($chat_id, $spam_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($fwd and in_array($chat_id, $fwd_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($fwd0 and in_array($chat_id, $fwd_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($voice and in_array($chat_id, $voice_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($audio and in_array($chat_id, $audio_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($video and in_array($chat_id, $video_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($sticker and in_array($chat_id, $sticker_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($text == $en and in_array($chat_id, $en_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($text == $ar and in_array($chat_id, $ar_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($photo and in_array($chat_id, $photo_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($game and in_array($chat_id, $game_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($document and in_array($chat_id, $document_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($contact and in_array($chat_id, $contact_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($document and in_array($chat_id, $gif_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
if($text and in_array($from_id, explode("\n", file_get_contents("data/selict/s$chat_id.json")))){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id,]);}}
if($text and in_array($text, explode("\n", file_get_contents("data/filter/s$chat_id.json")))){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id,]);}}
if($message and in_array($chat_id, $mute_)){if($group == "member"){
bot('deleteMessage',['chat_id'=>$chat_id,'message_id'=>$message->message_id]);}}
/* </>===============  ===============</> */
if($text == "/help@anyambot" and $message->chat->type == "supergroup"){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
 'text'=>"❂
 
  ‌‌‏❋¦ فەرمانەکانیـ بۆت ⇊
 
 👨‍⚖️¦ م1 » فەرمانی سزا و دەرکردنیـ ئەندام‌‏
 📟¦ م2 » فەرمانەکانیـ ڕێکسختنیـ گرووپـ
 🛡¦ م3 » فەرمانەکانیـ پاراستنـ گرووپـ
 🕹¦ سەرۆک »  فەرمانەکانـ داڕێژەریـ بۆت
 
 
  ‌‌‏❋¦ داڕێژەریـ بۆتـ ☜ { @$amort } ✓",]);}}
/* </>===============  ===============</> */
if($text == "م1" and $message->chat->type == "supergroup"){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['reply_to_message_id'=>$message->message_id,'chat_id'=>$chat_id,
'text'=>"•⊱ { فەرمانەکان بەرزکردنەوە و دابەزاندنی پڵە  } ⊰•


📿¦ کردنە ئەدمین ‿ لادانی ئەدمین
 

⦅فەرمانەکانی دەرکردن و چات ڕاگرتن  ⦆
      
🔱¦ دەکردن (بە ڕیپڵەی چات) •⊱ بۆ دەرکردنی ئەندام
🌀¦ ئاگاداری (بەڕیپڵەی چات) •⊱ بۆ راگرتن
🚫¦ قەدەغە + وشە •⊱ بۆ قەدەغە کردنی وشە لەگرووپ
🚸¦ لادانی دەرکردن (بەڕیپڵەی چات) •⊱ 
🔆¦ لادانی ئاگاداری (بەریپڵەی چات) •⊱ 
⭕️¦ سرینەوەی قەدەغە •⊱ بۆ لادانی قەدەغەی لەسەر وشەکە
🗯┇ سەرۆکٮـ بۆتـ 💡↭ @$amort",]);}}
/* </>===============  ===============</> */
if($text == "م2" and $message->chat->type == "supergroup"){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"👨🏽‍✈️¦  فەرمانەکانی ببینی و دەسکاری ::

📮¦ـ➖➖➖➖➖
💭¦ دانانی یاسا :↜ ببینی یاسا 
💭¦ دانانی وەسف :↜ ببینی وەسف
💭¦ دانانی لینک :↜ لینک
💭¦ لینک :↜  ببینی لینکی گرووپ
📮¦ـ➖➖➖➖➖

👨🏽‍💻¦  فەرمان ::

🗯¦ یاسا : ببینی یاسای گرووپ
🗯¦ ئەدمینەکان : ببینی ئەدمینەکان
🗯¦ المكتومين :↜لعرض  المكتومين 
🗯¦ سەرۆک : بینی زانیاری سەرۆک
🗯¦ زانیاری - ئایدی - id :↜ببینی زانیاری  
🗯¦ پاراستن : بۆ ببینی هەموو پاراستنەکان
🗯¦ زانیاری بۆت : بۆ ببینی زانیاریەکانیـ بۆت

ناوویـ بۆت + دەرچۆ بۆ ڕۆشتنی بۆت لەگرووپ

➖➖➖➖➖➖➖
👨🏻‍💻¦ داڕێژەریـ بۆتـ 💡↭ @$amort",]);}}
/* </>=============== hama ===============</> */
if($text == "م3" and $message->chat->type == "supergroup"){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"⚡️ فەرمانەکانیـ پاراستنیـ گرووپـ چات ⚡️
🗯¦ـ➖➖➖➖
🗯¦ راگرتنی «» کردنەوەی •⊱ دەسکاری  ⊰•
🗯¦️ راگرتنی «» کردنەوەی •⊱ نامەی دەنگی ⊰•
🗯¦ راگرتنی «» کردنەوەی •⊱ ڤیدیۆ ⊰•
🗯¦ راگرتنی «» کردنەوەی •⊱ گۆرانی ⊰•
🗯¦ راگرتنی «» کردنەوەی •⊱ وێنە ⊰•
🗯¦ راگرتنی «» کردنەوەی •⊱ ستیکەر ⊰•

🗯¦ راگرتنی «» کردنەوەی •⊱ گیف ⊰•
🗯¦ راگرتنی «» کردنەوەی •⊱ بێزاری ⊰•

🗯¦ راگرتنی «» کردنەوەی •⊱ لینک ⊰•
🗯¦ راگرتنی «» کردنەوەی •⊱ تاگ ⊰•
🗯¦ راگرتنی «» کردنەوەی •⊱ بۆتەکان ⊰•
🗯¦ ️راگرتنی «» کردنەوەی •⊱ پێناسە ⊰•
🗯¦ راگرتنی «» کردنەوەی •⊱ بۆتەکان  ⊰•
🗯¦ راگرتنی «» کردنەوەی •⊱ بێزاری ⊰•
🗯¦ راگرتنی «» کردنەوەی •⊱ هاووبەشکردن ⊰•
🗯¦ راگرتنی «» کردنەوەی •⊱ ئۆنلاین ⊰•

🗯¦ راگرتنی «» کردنەوەی •⊱ ژمارە تیل ⊰•
🗯¦ راگرتنی «» کردنەوەی •⊱ گشتی ⊰•
🔅¦ـ➖➖➖➖➖
📌¦ دانانی  «» بەخێرهاتن •⊱  دانانی بەخێرچون ⊰•
🔅¦ـ➖➖➖➖➖

👨🏻‍💻¦ داڕێژەریـ بۆتـ 💡↭ @$amort",]);}}
/* </>===============  ===============</> */
if($text == "سەرۆک" and $message->chat->type == "supergroup"){if($from_id == $sudo ){bot('sendMessage',['reply_to_message_id'=>$message->message_id,'chat_id'=>$chat_id,
'text'=>"فەرموو ئەزیزمـ",
]);}else{bot('sendMessage',['chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"🔅¦داڕێژراویـ بۆت🎖",]);}}
/* </>===============  ===============</> */

if($text=="وێنە"){
$photo = "https://t.me/$user";
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>$photo,
'caption'=>"
وێنەکەتـ💜 : @$from_user
",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}

/* </>===============  ===============</> */
if ($text == "بەشی ئەدمین" and $from_id == $sudo){
file_put_contents("set1name.txt","nam1");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"📭¦ بەڵێ سەرۆک
🗯¦ ئیستا بنێرە بۆ دەسکاری ئەدمین بکەیت
√ ",'parse_mode'=>"MARKDOWN","reply_to_message_id"=>$MOSTYRIA1,]);} if($text && $devhelp =="nam1" and $from_id == $sudo){file_put_contents("devhelpp.txt",$text); file_put_contents("set1name.txt","");
bot("sendmessage",["chat_id"=>$chat_id,
"text" =>"✓ناووی ئەدمین زیاکرا👮‍♀
 √",'parse_mode'=>"MARKDOWN","reply_to_message_id"=>$MOSTYRIA1,]);}
if($text == "سەرۆک" || $text == "مطور"){
bot('sendMessage',['chat_id'=>$chat_id, 
'text'=>$devhelpp,'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id, 
]);}elseif ($text == "بەشی ئەدمین" and $from_id != $sudo){
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>"
*☑┇ ببوورە خاوەن بۆت نیت ،!*
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]);}
/* </>===============  ===============</> */
$id = $message->from->id;
mkdir("MOSTYRIA2");
mkdir("MOSTYRIA2/$chat_id");
$put = file_get_contents("MOSTYRIA2/$chat_id/link.txt"); $link = file_get_contents("MOSTYRIA2/$chat_id/put.txt");
$ex = explode("\n",$put);
if( $text == "دانانی لینک"){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("MOSTYRIA2/$chat_id/put.txt","link");
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>"
📚ئیستا لینکی نوێ بنێرە
",'reply_to_message_id'=>$message->message_id,]);}}
if($text and $link == "link"){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("MOSTYRIA2/$chat_id/link.txt",$text); file_put_contents("MOSTYRIA2/$chat_id/put.txt"," ");
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>"
ڵینکی تایبەتـ بەگرووپـ هەڵگیرا،!
",'reply_to_message_id'=>$message->message_id,]);}}
if($text == "لینک" ){
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>"لینکەی درووستت کردوە : $put",
'reply_to_message_id'=>$message->message_id,]);}
if( $text == "سرینەوەی لینک" ){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("MOSTYRIA2/$chat_id/link.txt"," ");
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>"لینکی تایبەت سراوە",'reply_to_message_id'=>$message->message_id,]);}}
if( $text == "سرینەوەی لینک" and $id != $sudo){
bot('sendmessage',['chat_id'=>$chat_id,
'text'=> "لینک سراوەتەوە",'reply_to_message_id'=>$message->message_id,]);}
/* </>===============  ===============</> */
if ($text == "گۆرینی ناووی بۆت"  and $from_id == $sudo){
file_put_contents("setname.txt","nam");
bot("sendMessage",["chat_id"=>$chat_id,
"text"=>"📭¦ سەرۆک،
🗯¦ ئیستا ناووی بۆت بنێرە
√",'parse_mode'=>"MARKDOWN","reply_to_message_id"=>$MOSTYRIA1,]);}
if($text && $setnamebot =="nam" and $from_id == $sudo){
file_put_contents("namebot.txt",$text); file_put_contents("setname.txt","");
bot("sendmessage",["chat_id"=>$chat_id,
"text" => "✓ ناووی بۆت زیاکرا 🚀 
 -",'parse_mode'=>"MARKDOWN","reply_to_message_id"=>$MOSTYRIA1,]);}
if($text == "بۆت" || $text == "@anyambot"){
bot('sendMessage',['chat_id'=>$chat_id, 
'text'=>"ناوومـ $namebot 🌚🌸",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);}elseif($text == "گۆرینی ناووی بۆت"  and $from_id != $sudo){
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>"
*☑┇ ببوورە تۆ سەرۆک بۆت نیت ،!*
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]);}

$id = $message->from->id;
mkdir("qunen");
mkdir("qunen/$chat_id");
$put = file_get_contents("qunen/$chat_id/link.txt"); $link = file_get_contents("qunen/$chat_id/put.txt");
$ex = explode("\n",$put);
/* </>=============== ===============</> */
if( $text == "دانانی یاسا" ){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("qunen/$chat_id/put.txt","link1");
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>"📭¦بەڕێزم پیستا ✋🏿
🗯¦ ایاسایـ گرووپ بنێرە هەڵیبگرم 🍃",'reply_to_message_id'=>$message->message_id,]);}}
if($text and $link == "link1"){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("qunen/$chat_id/link.txt",$text); file_put_contents("qunen/$chat_id/put.txt"," ");
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>"📜¦سڵاوو بەڕێزم
📦¦ یاسای گرووپ هەڵگیرا
🔖¦ بۆ بینینی یاسای گرووپ بنوسە [یاسا]
💬✓",'reply_to_message_id'=>$message->message_id,]);}}
/* </>===============  ===============</> */
if($text == "یاسا" ){
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>$put,
'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id, 
'reply_to_message_id'=>$message->message_id,]);}
/* </>===============  ===============</> */
if( $text == "سرینەوەی یاسا"  ){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("qunen/$chat_id/link.txt"," ");
bot("sendmessage",['chat_id'=>$chat_id,
'text'=>"📜¦ سڵاوو بەڕێزم
📦¦ یاسا سراوە ✓
💬✓",'reply_to_message_id'=>$message->message_id,]);}}
/* </>===============  ===============</> */
$aname = str_replace("گۆرینی ناوو ", "$aname", $text);
if($text == "گۆرینی ناوو $aname"){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('setChatTitle',['chat_id'=>$chat_id,'title'=>$aname ]);}}
/* </>===============  ===============</> */

if(preg_match('/^(قەدەغە) (.*)/s', $text, $filter)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
if(in_array($filter[2], explode("\n", file_get_contents("data/filter/s$chat_id.json")))){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ سڵاوو بەڕێزم 
📡¦ ئەم وشەیە قەدەغە کرا لەگرووپ ($filter[2])
✓",]);}}}
if(preg_match('/^(قەدەغە) (.*)/s', $text, $filter)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
if(!in_array($filter[2], explode("\n", file_get_contents("data/filter/s$chat_id.json")))){
file_put_contents("data/filter/s$chat_id.json", "$filter[2]\n", FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,
'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦سڵاوو بەڕێزم
ئەم وشەیە قەدەغە کرا لەگرووپ ($filter[2])
✓",]);}}}
if(preg_match('/^(لادانی قەدەغە) (.*)/s', $text, $filter)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
if(!in_array($filter[2], explode("\n", file_get_contents("data/filter/s$chat_id.json")))){
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ سڵاوو بەڕێزم
📡¦ بەسەرکەوتوی بەڕێزم ئەم وشەیە لادرا($filter[2])
✓",]);}}}
if(preg_match('/^(لادانی قەدەغە) (.*)/s', $text, $filter)){if($from_id == $sudo or $group == $mudir or  $group == $admin){
if(in_array($filter[2], explode("\n", file_get_contents("data/filter/s$chat_id.json")))){
$send = file_get_contents("data/filter/s$chat_id.json"); $send = str_replace($filter[2], " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents("data/filter/s$chat_id.json", $send);
bot('sendMessage',['chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ 
📡¦ بەڕێزم وشەی قەدەغە کراو لادرا($filter[2])
✓",]);}}}
if($text == "لیستی قەدەغە"){if($from_id == $sudo or $group == $mudir or  $group == $admin){
$filter = file_get_contents("data/filter/s$chat_id.json");
bot('sendMessage',[
'chat_id'=>$chat_id,'parse_mode'=>"markdown",'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ سڵاوو بەڕێزم
📡¦ ئەمەش فۆڕمی وشە قەدەغەکراوەکانە
` $filter `
✓",'parse_mode'=>markdown,'disable_web_page_preview'=>true,]);}}
if($text == "سرینەوەی لیستی قەدەغە" and !file_exists("data/filter/s$chat_id.json")){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('sendMessage',['chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦سڵاوو بەڕێزم
📡¦ هەموو وشە قەدەغەکراوەکان سرانەو
✓",]);}}
if($text == "سرینەوەی لیستی قەدەغە" and file_exists("data/filter/s$chat_id.json")){if($from_id == $sudo or $group == $mudir or  $group == $admin){
unlink("data/filter/s$chat_id.json");
bot('sendMessage',['chat_id'=>$chat_id,'reply_to_message_id'=>$message->message_id,
'text'=>"🙋🏼‍♂️¦ سڵاوو بەڕێزم
📡¦ هەموو وشە قەدەغەکراوەکان سرانەوە
✓",]);}}
/* </>=============== ===============</> */
if($replay and $text == "هەلواسین" or $text =="/pin@anyambot"){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('pinChatMessage',['chat_id'=>$chat_id,'message_id'=>$message->reply_to_message->message_id,]);bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$me
]);
}}
if($replay and $text =="لادانی هەلواسین" or $text =="/unpin@anyambot"){if($from_id == $sudo or $group == $mudir or  $group == $admin){
bot('unpinChatMessage',['chat_id'=>$chat_id,'message_id'=>$message_id,]);bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$me
]);}}
/* </>=============================</> */
if($text == '/start' and $from_id == $sudo){ 
bot('sendMessage',['chat_id'=>$chat_id, 
'text'=>"
'🎖¦سڵاوو سەرۆک",'reply_markup'=>json_encode(['keyboard'=>[[['text'=>'گۆرینی ناووی بۆت'],['text'=>'بەشی ئەدمین']],]])]);}


// کەناڵـ@teamamort 
