///hamo
mkdir("users");
$user = $message->from->username;
$id   = $message->from->id;
$user_fi = file_get_contents("users/users.txt");
$ex_user = explode("\n@",$user_fi);
if ( $text =="/start" and !in_array($user,$ex_user)){
file_put_contents("users/users.txt","\n@$user",FILE_APPEND);
}
if ( $text == "تاگ" and $id =$admin){
bot ('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📋¦لیستیـ ئەندامان :
$user_fi",
]);
}
mkdir("tag");
$user = $message->from->username;
$ftag = file_get_contents("tag/$chat_id.txt");
$tags = explode("\n",$ftag);
$chtag = $chat_id ."a";
if ( $text  and !in_array($id,$tags)){
file_put_contents("tag/$chat_id.txt","\n$id",FILE_APPEND);
file_put_contents("tag/$chtag.txt","\n𓆩 @$user 𓆪",FILE_APPEND);
}
$tagss = file_get_contents("tag/$chtag.txt");
if ( $text == "/t" or $text == "/t@anyambot"){
bot ('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📋¦لیستـیـ ئەندامانـ :
 $tagss",
]);
}
