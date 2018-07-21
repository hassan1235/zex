
/home/juninew/public_html/setvalue.php

<?php
include_once 'tokek.php';
    
if(file_exists('cmy2_log')){
$log=json_encode(file('cmy2_log'));
}else{
$log='';
}
$jam=array('01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','00',);
$sapa=array('Met dini 🌙 hari .. ','Met jelang pagi . ','Selamat 🌷 Pagi 🌷 ','Met 🌷 Pagi 🌱 ','｡◕‿◕｡ ','☀~ ','Breakfast time 🍔☕🍸🍺 . ','Met Tifitas 💻 ','Have a nice day ☀ . ','Good ☀ Day . ','Time for 🍔☕🍸🍺 lunch . ','Met 🍴 makan 🍵  🍔☕🍸🍺 siang ☀ .','Good siang ☀ . ','Met jelang sore . ','Good afternoon . ','☀~ ','Salam kompak 👈👍 jempol er👉 ','Good evening . ','Time for 🍔☕🍸🍺 dinner . ','Met 📺 Online ~ . ','Met 💤 rehat .','Have 💤 nice 💤 dream . ','Good 🌙 night 🌙 ','Good merem 💤💤 ','Met rehat 💤💤 ',);
$ucapan = gmdate('H',time()+7*3600);
$ucapan = str_replace($jam,$sapa,$ucapan);
$aiueo = array('Q','W','E','R','T','Y','U','I','O','P','A','S','D','F','G','H','J','K','L','Z','X','C','V','B','N','M','q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m',);
$uuu = array('ҩ','ω','є','ʀ','т','γ','µ','ɨ','ღ','ρ','ɑ','s','∂','ƒ','ɢ','ɦ','ʆ','ќ','ℓ','ẕ','х','ς','ν','в','и','ʍ','ҩ','ω','є','ʀ','т','γ','µ','ɨ','ღ','ρ','ɑ','s','∂','ƒ','ɢ','ɦ','ʆ','ќ','ℓ','ẕ','х','ς','ν','в','и','ʍ',);
$me = json_decode(auto('https://graph.facebook.com/me?access_token='.$access_token.'&fields=id'),true);
$stat=json_decode(auto('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$access_token.'&offset=0&limit=15'),true);

for($i=1;$i<=count($stat[data]);$i++){
if(!ereg($stat[data][$i-1][id],$log)){
if($stat[data][$i-1][from][id] != $me[id]){
$x=$stat[data][$i-1][id].'  ';
$y = fopen('cmy2_log','a');
fwrite($y,$x);
fclose($y);
$bot=array('nomer','latah','biasa',);
$robot=$bot[rand(0,count($bot)-1)];
$s=$stat[data][$i-1][message];
$qwerty = array('0','1','2','3','4','5','6','7','8','9','10',);
$font = array(
urldecode('%F3%BE%80%80'),
urldecode('%F3%BE%80%81'),
urldecode('%F3%BE%80%82'),
urldecode('%F3%BE%80%83'),
urldecode('%F3%BE%80%84'),
urldecode('%F3%BE%80%85'),
urldecode('%F3%BE%80%87'),
urldecode('%F3%BE%80%B8'),
urldecode('%F3%BE%80%BC'),
urldecode('%F3%BE%80%BD'),
urldecode('%F3%BE%80%BE'),
urldecode('%F3%BE%80%BF'),
urldecode('%F3%BE%81%80'),
urldecode('%F3%BE%81%81'),
urldecode('%F3%BE%81%82'),
urldecode('%F3%BE%81%83'),
urldecode('%F3%BE%81%85'),
urldecode('%F3%BE%81%86'),
urldecode('%F3%BE%81%87'),
urldecode('%F3%BE%81%88'),
urldecode('%F3%BE%81%89'),
urldecode('%F3%BE%81%91'),
urldecode('%F3%BE%81%92'),
urldecode('%F3%BE%81%93'),
urldecode('%F3%BE%86%90'),
urldecode('%F3%BE%86%91'),
urldecode('%F3%BE%86%92'),
urldecode('%F3%BE%86%93'),
urldecode('%F3%BE%86%94'),
urldecode('%F3%BE%86%96'),
urldecode('%F3%BE%86%9B'),
urldecode('%F3%BE%86%9C'),
urldecode('%F3%BE%86%9D'),
urldecode('%F3%BE%86%9E'),
urldecode('%F3%BE%86%A0'),
urldecode('%F3%BE%86%A1'),
urldecode('%F3%BE%86%A2'),
urldecode('%F3%BE%86%A4'),
urldecode('%F3%BE%86%A5'),
urldecode('%F3%BE%86%A6'),
urldecode('%F3%BE%86%A7'),
urldecode('%F3%BE%86%A8'),
urldecode('%F3%BE%86%A9'),
urldecode('%F3%BE%86%AA'),
urldecode('%F3%BE%86%AB'),
urldecode('%F3%BE%86%AE'),
urldecode('%F3%BE%86%AF'),
urldecode('%F3%BE%86%B0'),
urldecode('%F3%BE%86%B1'),
urldecode('%F3%BE%86%B2'),
urldecode('%F3%BE%86%B3'),
urldecode('%F3%BE%86%B5'),
urldecode('%F3%BE%86%B6'),
urldecode('%F3%BE%86%B7'),
urldecode('%F3%BE%86%B8'),
urldecode('%F3%BE%86%BB'),
urldecode('%F3%BE%86%BC'),
urldecode('%F3%BE%86%BD'),
urldecode('%F3%BE%86%BE'),
urldecode('%F3%BE%86%BF'),
urldecode('%F3%BE%87%80'),
urldecode('%F3%BE%87%81'),
urldecode('%F3%BE%87%82'),
urldecode('%F3%BE%87%83'),
urldecode('%F3%BE%87%84'),
urldecode('%F3%BE%87%85'),
urldecode('%F3%BE%87%86'),
urldecode('%F3%BE%87%87'),
urldecode('%F3%BE%87%88'),
urldecode('%F3%BE%87%89'),
urldecode('%F3%BE%87%8A'),
urldecode('%F3%BE%87%8B'),
urldecode('%F3%BE%87%8C'),
urldecode('%F3%BE%87%8D'),
urldecode('%F3%BE%87%8E'),
urldecode('%F3%BE%87%8F'),
urldecode('%F3%BE%87%90'),
urldecode('%F3%BE%87%91'),
urldecode('%F3%BE%87%92'),
urldecode('%F3%BE%87%93'),
urldecode('%F3%BE%87%94'),
urldecode('%F3%BE%87%95'),
urldecode('%F3%BE%87%96'),
urldecode('%F3%BE%87%97'),
urldecode('%F3%BE%87%98'),
urldecode('%F3%BE%87%99'),
urldecode('%F3%BE%87%9B'),
urldecode('%F3%BE%8C%AC'),
urldecode('%F3%BE%8C%AD'),
urldecode('%F3%BE%8C%AE'),
urldecode('%F3%BE%8C%AF'),
urldecode('%F3%BE%8C%B0'),
urldecode('%F3%BE%8C%B2'),
urldecode('%F3%BE%8C%B3'),
urldecode('%F3%BE%8C%B4'),
urldecode('%F3%BE%8C%B6'),
urldecode('%F3%BE%8C%B8'),
urldecode('%F3%BE%8C%B9'),
urldecode('%F3%BE%8C%BA'),
urldecode('%F3%BE%8C%BB'),
urldecode('%F3%BE%8C%BC'),
urldecode('%F3%BE%8C%BD'),
urldecode('%F3%BE%8C%BE'),
urldecode('%F3%BE%8C%BF'),
urldecode('%F3%BE%8C%A0'),
urldecode('%F3%BE%8C%A1'),
urldecode('%F3%BE%8C%A2'),
urldecode('%F3%BE%8C%A3'),
urldecode('%F3%BE%8C%A4'),
urldecode('%F3%BE%8C%A5'),
urldecode('%F3%BE%8C%A6'),
urldecode('%F3%BE%8C%A7'),
urldecode('%F3%BE%8C%A8'),
urldecode('%F3%BE%8C%A9'),
urldecode('%F3%BE%8C%AA'),
urldecode('%F3%BE%8C%AB'),
urldecode('%F3%BE%8D%80'),
urldecode('%F3%BE%8D%81'),
urldecode('%F3%BE%8D%82'),
urldecode('%F3%BE%8D%83'),
urldecode('%F3%BE%8D%84'),
urldecode('%F3%BE%8D%85'),
urldecode('%F3%BE%8D%86'),
urldecode('%F3%BE%8D%87'),
urldecode('%F3%BE%8D%88'),
urldecode('%F3%BE%8D%89'),
urldecode('%F3%BE%8D%8A'),
urldecode('%F3%BE%8D%8B'),
urldecode('%F3%BE%8D%8C'),
urldecode('%F3%BE%8D%8D'),
urldecode('%F3%BE%8D%8F'),
urldecode('%F3%BE%8D%90'),
urldecode('%F3%BE%8D%97'),
urldecode('%F3%BE%8D%98'),
urldecode('%F3%BE%8D%99'),
urldecode('%F3%BE%8D%9B'),
urldecode('%F3%BE%8D%9C'),
urldecode('%F3%BE%8D%9E'),
urldecode('%F3%BE%93%B2'),
urldecode('%F3%BE%93%B4'),
urldecode('%F3%BE%93%B6'),
urldecode('%F3%BE%94%90'),
urldecode('%F3%BE%94%92'),
urldecode('%F3%BE%94%93'),
urldecode('%F3%BE%94%96'),
urldecode('%F3%BE%94%97'),
urldecode('%F3%BE%94%98'),
urldecode('%F3%BE%94%99'),
urldecode('%F3%BE%94%9A'),
urldecode('%F3%BE%94%9C'),
urldecode('%F3%BE%94%9E'),
urldecode('%F3%BE%94%9F'),
urldecode('%F3%BE%94%A4'),
urldecode('%F3%BE%94%A5'),
urldecode('%F3%BE%94%A6'),
urldecode('%F3%BE%94%A8'),
urldecode('%F3%BE%94%B8'),
urldecode('%F3%BE%94%BC'),
urldecode('%F3%BE%94%BD'),
urldecode('%F3%BE%9F%9C'),
urldecode('%F3%BE%A0%93'),
urldecode('%F3%BE%A0%94'),
urldecode('%F3%BE%A0%9A'),
urldecode('%F3%BE%A0%9C'),
urldecode('%F3%BE%A0%9D'),
urldecode('%F3%BE%A0%9E'),
urldecode('%F3%BE%A0%A3'),
urldecode('%F3%BE%A0%A7'),
urldecode('%F3%BE%A0%A8'),
urldecode('%F3%BE%A0%A9'),
urldecode('%F3%BE%A5%A0'),
urldecode('%F3%BE%A6%81'),
urldecode('%F3%BE%A6%82'),
urldecode('%F3%BE%A6%83'),
urldecode('%F3%BE%AC%8C'),
urldecode('%F3%BE%AC%8D'),
urldecode('%F3%BE%AC%8E'),
urldecode('%F3%BE%AC%8F'),
urldecode('%F3%BE%AC%90'),
urldecode('%F3%BE%AC%91'),
urldecode('%F3%BE%AC%92'),
urldecode('%F3%BE%AC%93'),
urldecode('%F3%BE%AC%94'),
urldecode('%F3%BE%AC%95'),
urldecode('%F3%BE%AC%96'),
urldecode('%F3%BE%AC%97'),
);
$mess = $font[rand(0,count($font)-1)];
$mess2 = $font[rand(0,count($font)-1)];
$mess3 = $font[rand(0,count($font)-1)];
$mess4 = $font[rand(0,count($font)-1)];
$mess5 = $font[rand(0,count($font)-1)];
$mess6 = $font[rand(0,count($font)-1)];
$mess7 = $font[rand(0,count($font)-1)];
$mess8 = $font[rand(0,count($font)-1)];
$mess9 = $font[rand(0,count($font)-1)];
$mess10 = $font[rand(0,count($font)-1)];
$mess11 = $font[rand(0,count($font)-1)];
$mess12 = $font[rand(0,count($font)-1)];
$mess13 = $font[rand(0,count($font)-1)];
$mess14 = $font[rand(0,count($font)-1)];



$emmi = $mess;
$emmi2 = $mess2;
$emmi3 = $mess3;
$emmi4 = $mess4;
$emmi5 = $mess5;
$emmi6 = $mess6;
$emmi7 = $mess7;
$emmi8 = $mess8;
$emmi9 = $mess9;
$emmi10 = $mess10;
$emmi11 = $mess11;
$emmi12 = $mess12;
$emmi13 = $mess13;
$emmi14 = $mess14;



$gen=json_decode(auto('http://graph.facebook.com/'.$stat[data][$i-1][from][id].'?fields=gender'),true);

if($gen[gender] == 'male'){
$arr_gen = array(' 👮 Mas_',' 👮 Mas_',);
$gender = $arr_gen[rand(0,count ($arr_gen)-1)];
}else{
$arr_gen = array('',);
$gender = $arr_gen[rand(0,count ($arr_gen)-1)];
}


$exp_nam = explode(' ',$stat[data][$i-1][from][name]);
$nama = $gender.' '.$exp_nam[0];
$tags = explode(' ',$stat[data][$i-1][from][id]);
$tagged_name = ' @['.$tags[0].':1] ';




if($stat[data][$i-1][type] == 'photo' ){
$salah= array(
'
💚 '.$tagged_name.' 💚

'.$emmi.' ι’м '.$emmi1.' noт '.$emmi2.' тнe '.$emmi3.' вeѕт '.$emmi4.' вυт '.$emmi5.' ι’м '.$emmi6.' тrιng '.$emmi7.' мy '.$emmi8.' вeѕт '.$emmi9.'

✅ powered вy 💚 Muhammad Junaid 💚

',
'
💚 '.$tagged_name.' 💚

'.$emmi10.' lιғe '.$emmi11.' ιѕ '.$emmi12.' ѕнorт. '.$emmi13.' don’т '.$emmi14.' вe '.$emmi.' lazy. '.$emmi1.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi2.' never '.$emmi3.' geт '.$emmi4.' тoo '.$emmi5.' aттacнed. '.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' coυldn’т '.$emmi7.' love '.$emmi9.' мe '.$emmi10.' ιғ '.$emmi11.' yoυ '.$emmi12.' тιred. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' тнe '.$emmi.' вeѕт '.$emmi1.' prooғ '.$emmi2.' oғ '.$emmi3.' love '.$emmi4.' ιѕ '.$emmi5.' тrυѕт.'.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' ѕoмe '.$emmi8.' тнιngѕ '.$emmi9.' are '.$emmi10.' вeттer '.$emmi11.' leғт '.$emmi12.' υnĸnown. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' ѕelғ '.$emmi.' care '.$emmi1.' ιѕ '.$emmi2.' noт '.$emmi3.' ѕelғιѕн. '.$emmi5.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi5.' ιғ '.$emmi6.' yoυ '.$emmi6.' are '.$emmi8.' нappy '.$emmi9.' ι’м '.$emmi10.' нappy '.$emmi11.' тoo. '.$emmi12.'


✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi13.' ι’м '.$emmi14.' glad '.$emmi1.' тo '.$emmi.' ever '.$emmi3.' ιn '.$emmi5.' yoυr '.$emmi4.' нearт.'.$emmi2.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi6.' lιғe '.$emmi7.' ιѕ '.$emmi8.' тнe '.$emmi9.' ғlower '.$emmi10.' ғor '.$emmi11.' wнιcн '.$emmi12.' love '.$emmi13.' ιѕ '.$emmi14.' тнe '.$emmi.' нoney. '.$emmi11.'

✅ powered вy 💚 Muhammad Junaid 💚
',
);

}else{
if(ereg('jancok',$s) || ereg(' asu ',$s) || ereg('taek',$s) || ereg('jancox',$s) || ereg('jamput',$s) || ereg('raimu',$s) || ereg('ndasmu',$s) || ereg('kontol',$s) || ereg('itil',$s) || ereg('anjing',$s) || ereg('hancok',$s) ){
$salah=array(
'
💚 '.$tagged_name.' 💚

'.$emmi.' ι’м '.$emmi1.' noт '.$emmi2.' тнe '.$emmi3.' вeѕт '.$emmi4.' вυт '.$emmi5.' ι’м '.$emmi6.' тrιng '.$emmi7.' мy '.$emmi8.' вeѕт '.$emmi9.'

✅ powered вy 💚 Muhammad Junaid 💚

',
'
💚 '.$tagged_name.' 💚

'.$emmi10.' lιғe '.$emmi11.' ιѕ '.$emmi12.' ѕнorт. '.$emmi13.' don’т '.$emmi14.' вe '.$emmi.' lazy. '.$emmi1.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi2.' never '.$emmi3.' geт '.$emmi4.' тoo '.$emmi5.' aттacнed. '.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' coυldn’т '.$emmi7.' love '.$emmi9.' мe '.$emmi10.' ιғ '.$emmi11.' yoυ '.$emmi12.' тιred. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' тнe '.$emmi.' вeѕт '.$emmi1.' prooғ '.$emmi2.' oғ '.$emmi3.' love '.$emmi4.' ιѕ '.$emmi5.' тrυѕт.'.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' ѕoмe '.$emmi8.' тнιngѕ '.$emmi9.' are '.$emmi10.' вeттer '.$emmi11.' leғт '.$emmi12.' υnĸnown. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' ѕelғ '.$emmi.' care '.$emmi1.' ιѕ '.$emmi2.' noт '.$emmi3.' ѕelғιѕн. '.$emmi5.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi5.' ιғ '.$emmi6.' yoυ '.$emmi6.' are '.$emmi8.' нappy '.$emmi9.' ι’м '.$emmi10.' нappy '.$emmi11.' тoo. '.$emmi12.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi13.' ι’м '.$emmi14.' glad '.$emmi1.' тo '.$emmi.' ever '.$emmi3.' ιn '.$emmi5.' yoυr '.$emmi4.' нearт.'.$emmi2.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi6.' lιғe '.$emmi7.' ιѕ '.$emmi8.' тнe '.$emmi9.' ғlower '.$emmi10.' ғor '.$emmi11.' wнιcн '.$emmi12.' love '.$emmi13.' ιѕ 
'.$emmi14.' тнe '.$emmi.' нoney. '.$emmi11.'

✅ powered вy 💚 Muhammad Junaid 💚
',
);
}else{
if(ereg('panas',$s) || ereg('sumuk',$s) || ereg('puanas',$s) || ereg('puanaz',$s) || ereg('panaz',$s) || ereg('gerah',$s) || ereg('neroko',$s) || ereg('koyo kobong',$s) || ereg('Panas',$s) ){
$salah=array(
'
💚 '.$tagged_name.' 💚

'.$emmi.' ι’м '.$emmi1.' noт '.$emmi2.' тнe '.$emmi3.' вeѕт '.$emmi4.' вυт '.$emmi5.' ι’м '.$emmi6.' тrιng '.$emmi7.' мy '.$emmi8.' вeѕт '.$emmi9.'

✅ powered вy 💚 Muhammad Junaid 💚

',
'
💚 '.$tagged_name.' 💚

'.$emmi10.' lιғe '.$emmi11.' ιѕ '.$emmi12.' ѕнorт. '.$emmi13.' don’т '.$emmi14.' вe '.$emmi.' lazy. '.$emmi1.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi2.' never '.$emmi3.' geт '.$emmi4.' тoo '.$emmi5.' aттacнed. '.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' coυldn’т '.$emmi7.' love '.$emmi9.' мe '.$emmi10.' ιғ '.$emmi11.' yoυ '.$emmi12.' тιred. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' тнe '.$emmi.' вeѕт '.$emmi1.' prooғ '.$emmi2.' oғ '.$emmi3.' love '.$emmi4.' ιѕ '.$emmi5.' тrυѕт.'.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' ѕoмe '.$emmi8.' тнιngѕ '.$emmi9.' are '.$emmi10.' вeттer '.$emmi11.' leғт '.$emmi12.' υnĸnown. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' ѕelғ '.$emmi.' care '.$emmi1.' ιѕ '.$emmi2.' noт '.$emmi3.' ѕelғιѕн. '.$emmi5.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi5.' ιғ '.$emmi6.' yoυ '.$emmi6.' are '.$emmi8.' нappy '.$emmi9.' ι’м '.$emmi10.' нappy '.$emmi11.' тoo. '.$emmi12.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi13.' ι’м '.$emmi14.' glad '.$emmi1.' тo '.$emmi.' ever '.$emmi3.' ιn '.$emmi5.' yoυr '.$emmi4.' нearт.'.$emmi2.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi6.' lιғe '.$emmi7.' ιѕ '.$emmi8.' тнe '.$emmi9.' ғlower '.$emmi10.' ғor '.$emmi11.' wнιcн '.$emmi12.' love '.$emmi13.' ιѕ '.$emmi14.' тнe '.$emmi.' нoney. '.$emmi11.'

✅ powered вy 💚 Muhammad Junaid 💚
',

);
}else{
if(ereg('cape',$s) || ereg('kesel',$s) || ereg('keju',$s) || ereg('linu',$s) || ereg('klenger',$s) || ereg('lempoh',$s) || ereg('lesu',$s) || ereg('kemeng',$s) || ereg('nggregesi',$s)){
$salah=array(
'
💚 '.$tagged_name.' 💚

'.$emmi.' ι’м '.$emmi1.' noт '.$emmi2.' тнe '.$emmi3.' вeѕт '.$emmi4.' вυт '.$emmi5.' ι’м '.$emmi6.' тrιng '.$emmi7.' мy '.$emmi8.' вeѕт '.$emmi9.'

✅ powered вy 💚 Muhammad Junaid 💚

',
'
💚 '.$tagged_name.' 💚

'.$emmi10.' lιғe '.$emmi11.' ιѕ '.$emmi12.' ѕнorт. '.$emmi13.' don’т '.$emmi14.' вe '.$emmi.' lazy. '.$emmi1.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi2.' never '.$emmi3.' geт '.$emmi4.' тoo '.$emmi5.' aттacнed. '.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' coυldn’т '.$emmi7.' love '.$emmi9.' мe '.$emmi10.' ιғ '.$emmi11.' yoυ '.$emmi12.' тιred. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' тнe '.$emmi.' вeѕт '.$emmi1.' prooғ '.$emmi2.' oғ '.$emmi3.' love '.$emmi4.' ιѕ '.$emmi5.' тrυѕт.'.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' ѕoмe '.$emmi8.' тнιngѕ '.$emmi9.' are '.$emmi10.' вeттer '.$emmi11.' leғт '.$emmi12.' υnĸnown. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚
'.$emmi14.' ѕelғ '.$emmi.' care '.$emmi1.' ιѕ '.$emmi2.' noт '.$emmi3.' ѕelғιѕн. '.$emmi5.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi5.' ιғ '.$emmi6.' yoυ '.$emmi6.' are '.$emmi8.' нappy '.$emmi9.' ι’м '.$emmi10.' нappy '.$emmi11.' тoo. '.$emmi12.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi13.' ι’м '.$emmi14.' glad '.$emmi1.' тo '.$emmi.' ever '.$emmi3.' ιn '.$emmi5.' yoυr '.$emmi4.' нearт.'.$emmi2.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi6.' lιғe '.$emmi7.' ιѕ '.$emmi8.' тнe '.$emmi9.' ғlower '.$emmi10.' ғor '.$emmi11.' wнιcн '.$emmi12.' love '.$emmi13.' ιѕ '.$emmi14.' тнe '.$emmi.' нoney. '.$emmi11.'

✅ powered вy 💚 Muhammad Junaid 💚
',

);
}else{
if(ereg('cinta',$s) || ereg('love',$s) || ereg('rindu',$s) || ereg('kangen',$s) || ereg('LOVE',$s) || ereg('nyayang',$s) || ereg('kekasih',$s) || ereg('peluk',$s) || ereg('Cinta',$s)){
$salah=array(
'
💚 '.$tagged_name.' 💚

'.$emmi.' ι’м '.$emmi1.' noт '.$emmi2.' тнe '.$emmi3.' вeѕт '.$emmi4.' вυт '.$emmi5.' ι’м '.$emmi6.' тrιng '.$emmi7.' мy '.$emmi8.' вeѕт '.$emmi9.'

✅ powered вy 💚 Muhammad Junaid 💚

',
'
💚 '.$tagged_name.' 💚

'.$emmi10.' lιғe '.$emmi11.' ιѕ '.$emmi12.' ѕнorт. '.$emmi13.' don’т '.$emmi14.' вe '.$emmi.' lazy. '.$emmi1.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi2.' never '.$emmi3.' geт '.$emmi4.' тoo '.$emmi5.' aттacнed. '.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' coυldn’т '.$emmi7.' love '.$emmi9.' мe '.$emmi10.' ιғ '.$emmi11.' yoυ '.$emmi12.' тιred. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' тнe '.$emmi.' вeѕт '.$emmi1.' prooғ '.$emmi2.' oғ '.$emmi3.' love '.$emmi4.' ιѕ '.$emmi5.' тrυѕт.'.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' ѕoмe '.$emmi8.' тнιngѕ '.$emmi9.' are '.$emmi10.' вeттer '.$emmi11.' leғт '.$emmi12.' υnĸnown. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' ѕelғ '.$emmi.' care '.$emmi1.' ιѕ '.$emmi2.' noт '.$emmi3.' ѕelғιѕн. '.$emmi5.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi5.' ιғ '.$emmi6.' yoυ '.$emmi6.' are '.$emmi8.' нappy '.$emmi9.' ι’м '.$emmi10.' нappy '.$emmi11.' тoo. '.$emmi12.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi13.' ι’м '.$emmi14.' glad '.$emmi1.' тo '.$emmi.' ever '.$emmi3.' ιn '.$emmi5.' yoυr '.$emmi4.' нearт.'.$emmi2.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi6.' lιғe '.$emmi7.' ιѕ '.$emmi8.' тнe '.$emmi9.' ғlower '.$emmi10.' ғor '.$emmi11.' wнιcн '.$emmi12.' love '.$emmi13.' ιѕ 
'.$emmi14.' тнe '.$emmi.' нoney. '.$emmi11.'

✅ powered вy 💚 Muhammad Junaid 💚
',

);
}else{
if(ereg('like',$s) || ereg('Like',$s) || ereg('salkomsel',$s) || ereg('SALKOMSEL',$s) || ereg('jempol',$s) || ereg('Jempol',$s) || ereg('Salkomsel',$s) || ereg('JEMPOL',$s) || ereg('LIKE',$s)){
$salah=array(

'
💚 '.$tagged_name.' 💚

'.$emmi.' ι’м '.$emmi1.' noт '.$emmi2.' тнe '.$emmi3.' вeѕт '.$emmi4.' вυт '.$emmi5.' ι’м '.$emmi6.' тrιng '.$emmi7.' мy '.$emmi8.' вeѕт '.$emmi9.'

✅ powered вy 💚 Muhammad Junaid 💚

',
'
💚 '.$tagged_name.' 💚

'.$emmi10.' lιғe '.$emmi11.' ιѕ '.$emmi12.' ѕнorт. '.$emmi13.' don’т '.$emmi14.' вe '.$emmi.' lazy. '.$emmi1.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi2.' never '.$emmi3.' geт '.$emmi4.' тoo '.$emmi5.' aттacнed. '.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' coυldn’т '.$emmi7.' love '.$emmi9.' мe '.$emmi10.' ιғ '.$emmi11.' yoυ '.$emmi12.' тιred. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' тнe '.$emmi.' вeѕт '.$emmi1.' prooғ '.$emmi2.' oғ '.$emmi3.' love '.$emmi4.' ιѕ '.$emmi5.' тrυѕт.'.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' ѕoмe '.$emmi8.' тнιngѕ '.$emmi9.' are '.$emmi10.' вeттer '.$emmi11.' leғт '.$emmi12.' υnĸnown. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' ѕelғ '.$emmi.' care '.$emmi1.' ιѕ '.$emmi2.' noт '.$emmi3.' ѕelғιѕн. '.$emmi5.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi5.' ιғ '.$emmi6.' yoυ '.$emmi6.' are '.$emmi8.' нappy '.$emmi9.' ι’м '.$emmi10.' нappy '.$emmi11.' тoo. '.$emmi12.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi13.' ι’м '.$emmi14.' glad '.$emmi1.' тo '.$emmi.' ever '.$emmi3.' ιn '.$emmi5.' yoυr '.$emmi4.' нearт.'.$emmi2.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi6.' lιғe '.$emmi7.' ιѕ '.$emmi8.' тнe '.$emmi9.' ғlower '.$emmi10.' ғor '.$emmi11.' wнιcн '.$emmi12.' love '.$emmi13.' ιѕ '.$emmi14.' тнe '.$emmi.' нoney. '.$emmi11.'

✅ powered вy 💚 Muhammad Junaid 💚
',

);
}else{
if(ereg('sepi',$s) || ereg('sunyi',$s) || ereg('sendiri',$s) || ereg('Sepi',$s) || ereg('Sunyi',$s) || ereg('Sendiri',$s) || ereg('Dewean',$s) || ereg('dewekan',$s) || ereg('dewean',$s))
{
$salah=array(
'
💚 '.$tagged_name.' 💚

'.$emmi.' ι’м '.$emmi1.' noт '.$emmi2.' тнe '.$emmi3.' вeѕт '.$emmi4.' вυт '.$emmi5.' ι’м '.$emmi6.' тrιng '.$emmi7.' мy '.$emmi8.' вeѕт '.$emmi9.'

✅ powered вy 💚 Muhammad Junaid 💚

',
'
💚 '.$tagged_name.' 💚

'.$emmi10.' lιғe '.$emmi11.' ιѕ '.$emmi12.' ѕнorт. '.$emmi13.' don’т '.$emmi14.' вe '.$emmi.' lazy. '.$emmi1.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi2.' never '.$emmi3.' geт '.$emmi4.' тoo '.$emmi5.' aттacнed. '.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' coυldn’т '.$emmi7.' love '.$emmi9.' мe '.$emmi10.' ιғ '.$emmi11.' yoυ '.$emmi12.' тιred. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' тнe '.$emmi.' вeѕт '.$emmi1.' prooғ '.$emmi2.' oғ '.$emmi3.' love '.$emmi4.' ιѕ '.$emmi5.' тrυѕт.'.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' ѕoмe '.$emmi8.' тнιngѕ '.$emmi9.' are '.$emmi10.' вeттer '.$emmi11.' leғт '.$emmi12.' υnĸnown. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' ѕelғ '.$emmi.' care '.$emmi1.' ιѕ '.$emmi2.' noт '.$emmi3.' ѕelғιѕн. '.$emmi5.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi5.' ιғ '.$emmi6.' yoυ '.$emmi6.' are '.$emmi8.' нappy '.$emmi9.' ι’м '.$emmi10.' нappy '.$emmi11.' тoo. '.$emmi12.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi13.' ι’м '.$emmi14.' glad '.$emmi1.' тo '.$emmi.' ever '.$emmi3.' ιn '.$emmi5.' yoυr '.$emmi4.' нearт.'.$emmi2.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi6.' lιғe '.$emmi7.' ιѕ '.$emmi8.' тнe '.$emmi9.' ғlower '.$emmi10.' ғor '.$emmi11.' wнιcн '.$emmi12.' love '.$emmi13.' ιѕ '.$emmi14.' тнe '.$emmi.' нoney. '.$emmi11.'

✅ powered вy 💚 Muhammad Junaid 💚
',

);
}else{
if(ereg('off',$s) || ereg('OFF',$s) || ereg('Off',$s) || ereg('ngantuk',$s) || ereg('ngantok',$s) || ereg('bobo',$s) || ereg('bubu',$s) || ereg('tidur',$s) || ereg('molor',$s)){
$salah=array(
'
💚 '.$tagged_name.' 💚

'.$emmi.' ι’м '.$emmi1.' noт '.$emmi2.' тнe '.$emmi3.' вeѕт '.$emmi4.' вυт '.$emmi5.' ι’м '.$emmi6.' тrιng '.$emmi7.' мy '.$emmi8.' вeѕт '.$emmi9.'

✅ powered вy 💚 Muhammad Junaid 💚

',
'
💚 '.$tagged_name.' 💚

'.$emmi10.' lιғe '.$emmi11.' ιѕ '.$emmi12.' ѕнorт. '.$emmi13.' don’т '.$emmi14.' вe '.$emmi.' lazy. '.$emmi1.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi2.' never '.$emmi3.' geт '.$emmi4.' тoo '.$emmi5.' aттacнed. '.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' coυldn’т '.$emmi7.' love '.$emmi9.' мe '.$emmi10.' ιғ '.$emmi11.' yoυ '.$emmi12.' тιred. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' тнe '.$emmi.' вeѕт '.$emmi1.' prooғ '.$emmi2.' oғ '.$emmi3.' love '.$emmi4.' ιѕ '.$emmi5.' тrυѕт.'.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' ѕoмe '.$emmi8.' тнιngѕ '.$emmi9.' are '.$emmi10.' вeттer '.$emmi11.' leғт '.$emmi12.' υnĸnown. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' ѕelғ '.$emmi.' care '.$emmi1.' ιѕ '.$emmi2.' noт '.$emmi3.' ѕelғιѕн. '.$emmi5.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi5.' ιғ '.$emmi6.' yoυ '.$emmi6.' are '.$emmi8.' нappy '.$emmi9.' ι’м '.$emmi10.' нappy '.$emmi11.' тoo. '.$emmi12.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi13.' ι’м '.$emmi14.' glad '.$emmi1.' тo '.$emmi.' ever '.$emmi3.' ιn '.$emmi5.' yoυr '.$emmi4.' нearт.'.$emmi2.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi6.' lιғe '.$emmi7.' ιѕ '.$emmi8.' тнe '.$emmi9.' ғlower '.$emmi10.' ғor '.$emmi11.' wнιcн '.$emmi12.' love '.$emmi13.' ιѕ '.$emmi14.' тнe '.$emmi.' нoney. '.$emmi11.'

✅ powered вy 💚 Muhammad Junaid 💚
',
);
}else{
if(ereg('Good morning',$s) || ereg('Good afternoon',$s) || ereg('nite',$s) || ereg('pagi',$s) || ereg('malam',$s) || ereg('Good nite',$s) || ereg('hello',$s) || ereg('hallo',$s) || ereg('pa kabar',$s)){
$salah=array(
'
💚 '.$tagged_name.' 💚

'.$emmi.' ι’м '.$emmi1.' noт '.$emmi2.' тнe '.$emmi3.' вeѕт '.$emmi4.' вυт '.$emmi5.' ι’м '.$emmi6.' тrιng '.$emmi7.' мy '.$emmi8.' вeѕт '.$emmi9.'

✅ powered вy 💚 Muhammad Junaid 💚

',
'
💚 '.$tagged_name.' 💚

'.$emmi10.' lιғe '.$emmi11.' ιѕ '.$emmi12.' ѕнorт. '.$emmi13.' don’т '.$emmi14.' вe '.$emmi.' lazy. '.$emmi1.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi2.' never '.$emmi3.' geт '.$emmi4.' тoo '.$emmi5.' aттacнed. '.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' coυldn’т '.$emmi7.' love '.$emmi9.' мe '.$emmi10.' ιғ '.$emmi11.' yoυ '.$emmi12.' тιred. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' тнe '.$emmi.' вeѕт '.$emmi1.' prooғ '.$emmi2.' oғ '.$emmi3.' love '.$emmi4.' ιѕ '.$emmi5.' тrυѕт.'.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' ѕoмe '.$emmi8.' тнιngѕ '.$emmi9.' are '.$emmi10.' вeттer '.$emmi11.' leғт '.$emmi12.' υnĸnown. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' ѕelғ '.$emmi.' care '.$emmi1.' ιѕ '.$emmi2.' noт '.$emmi3.' ѕelғιѕн. '.$emmi5.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi5.' ιғ '.$emmi6.' yoυ '.$emmi6.' are '.$emmi8.' нappy '.$emmi9.' ι’м '.$emmi10.' нappy '.$emmi11.' тoo. '.$emmi12.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi13.' ι’м '.$emmi14.' glad '.$emmi1.' тo '.$emmi.' ever '.$emmi3.' ιn '.$emmi5.' yoυr '.$emmi4.' нearт.'.$emmi2.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi6.' lιғe '.$emmi7.' ιѕ '.$emmi8.' тнe '.$emmi9.' ғlower '.$emmi10.' ғor '.$emmi11.' wнιcн '.$emmi12.' love '.$emmi13.' ιѕ '.$emmi14.' тнe '.$emmi.' нoney. '.$emmi11.'

✅ powered вy 💚 Muhammad Junaid 💚
',
);
}else{
if(ereg('luwe',$s) || ereg('lapar',$s) || ereg('laper',$s) || ereg('mangan',$s) || ereg('mbadok',$s) || ereg('nguntal',$s) || ereg('nyosor',$s) || ereg('ewul',$s) || ereg('hungry',$s)){
$salah=array(
'
💚 '.$tagged_name.' 💚

'.$emmi.' ι’м '.$emmi1.' noт '.$emmi2.' тнe '.$emmi3.' вeѕт '.$emmi4.' вυт '.$emmi5.' ι’м '.$emmi6.' тrιng '.$emmi7.' мy '.$emmi8.' вeѕт '.$emmi9.'

✅ powered вy 💚 Muhammad Junaid 💚

',
'
💚 '.$tagged_name.' 💚

'.$emmi10.' lιғe '.$emmi11.' ιѕ '.$emmi12.' ѕнorт. '.$emmi13.' don’т '.$emmi14.' вe '.$emmi.' lazy. '.$emmi1.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi2.' never '.$emmi3.' geт '.$emmi4.' тoo '.$emmi5.' aттacнed. '.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' coυldn’т '.$emmi7.' love '.$emmi9.' мe '.$emmi10.' ιғ '.$emmi11.' yoυ '.$emmi12.' тιred. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' тнe '.$emmi.' вeѕт '.$emmi1.' prooғ '.$emmi2.' oғ '.$emmi3.' love '.$emmi4.' ιѕ '.$emmi5.' тrυѕт.'.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' ѕoмe '.$emmi8.' тнιngѕ '.$emmi9.' are '.$emmi10.' вeттer '.$emmi11.' leғт '.$emmi12.' υnĸnown. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' ѕelғ '.$emmi.' care '.$emmi1.' ιѕ '.$emmi2.' noт '.$emmi3.' ѕelғιѕн. '.$emmi5.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi5.' ιғ '.$emmi6.' yoυ '.$emmi6.' are '.$emmi8.' нappy '.$emmi9.' ι’м '.$emmi10.' нappy '.$emmi11.' тoo. '.$emmi12.'


✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi13.' ι’м '.$emmi14.' glad '.$emmi1.' тo '.$emmi.' ever '.$emmi3.' ιn '.$emmi5.' yoυr '.$emmi4.' нearт.'.$emmi2.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi6.' lιғe '.$emmi7.' ιѕ '.$emmi8.' тнe '.$emmi9.' ғlower '.$emmi10.' ғor '.$emmi11.' wнιcн '.$emmi12.' love '.$emmi13.' ιѕ '.$emmi14.' тнe '.$emmi.' нoney. '.$emmi11.'

✅ powered вy 💚 Muhammad Junaid 💚
',

);
}else{
if(ereg('benci',$s) || ereg('sebel',$s) || ereg('muak',$s) || ereg('muntah',$s) || ereg('gila',$s) || ereg('gendeng',$s) || ereg('edan',$s) || ereg('koclok',$s) || ereg('cengoh',$s) ){
$salah=array(
'
💚 '.$tagged_name.' 💚

'.$emmi.' ι’м '.$emmi1.' noт '.$emmi2.' тнe '.$emmi3.' вeѕт '.$emmi4.' вυт '.$emmi5.' ι’м '.$emmi6.' тrιng '.$emmi7.' мy '.$emmi8.' вeѕт '.$emmi9.'

✅ powered вy 💚 Muhammad Junaid 💚

',
'
💚 '.$tagged_name.' 💚

'.$emmi10.' lιғe '.$emmi11.' ιѕ '.$emmi12.' ѕнorт. '.$emmi13.' don’т '.$emmi14.' вe '.$emmi.' lazy. '.$emmi1.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi2.' never '.$emmi3.' geт '.$emmi4.' тoo '.$emmi5.' aттacнed. '.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' coυldn’т '.$emmi7.' love '.$emmi9.' мe '.$emmi10.' ιғ '.$emmi11.' yoυ '.$emmi12.' тιred. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' тнe '.$emmi.' вeѕт '.$emmi1.' prooғ '.$emmi2.' oғ '.$emmi3.' love '.$emmi4.' ιѕ '.$emmi5.' тrυѕт.'.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' ѕoмe '.$emmi8.' тнιngѕ '.$emmi9.' are '.$emmi10.' вeттer '.$emmi11.' leғт '.$emmi12.' υnĸnown. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' ѕelғ '.$emmi.' care '.$emmi1.' ιѕ '.$emmi2.' noт '.$emmi3.' ѕelғιѕн. '.$emmi5.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi5.' ιғ '.$emmi6.' yoυ '.$emmi6.' are '.$emmi8.' нappy '.$emmi9.' ι’м '.$emmi10.' нappy '.$emmi11.' тoo. '.$emmi12.'


✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi13.' ι’м '.$emmi14.' glad '.$emmi1.' тo '.$emmi.' ever '.$emmi3.' ιn '.$emmi5.' yoυr '.$emmi4.' нearт.'.$emmi2.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi6.' lιғe '.$emmi7.' ιѕ '.$emmi8.' тнe '.$emmi9.' ғlower '.$emmi10.' ғor '.$emmi11.' wнιcн '.$emmi12.' love '.$emmi13.' ιѕ '.$emmi14.' тнe '.$emmi.' нoney. '.$emmi11.'

✅ powered вy 💚 Muhammad Junaid 💚
',
);
}else{
if(ereg('adus',$s) || ereg('mandi',$s) || ereg('mande',$s) || ereg('siram',$s) || ereg('Mandi',$s) || ereg('lumban',$s) || ereg('MANDI',$s) || ereg('Lumban',$s) || ereg('slulop',$s) ){
$salah=array(
'
💚 '.$tagged_name.' 💚

'.$emmi.' ι’м '.$emmi1.' noт '.$emmi2.' тнe '.$emmi3.' вeѕт '.$emmi4.' вυт '.$emmi5.' ι’м '.$emmi6.' тrιng '.$emmi7.' мy '.$emmi8.' вeѕт '.$emmi9.'

✅ powered вy 💚 Muhammad Junaid 💚

',
'
💚 '.$tagged_name.' 💚

'.$emmi10.' lιғe '.$emmi11.' ιѕ '.$emmi12.' ѕнorт. '.$emmi13.' don’т '.$emmi14.' вe '.$emmi.' lazy. '.$emmi1.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi2.' never '.$emmi3.' geт '.$emmi4.' тoo '.$emmi5.' aттacнed. '.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' coυldn’т '.$emmi7.' love '.$emmi9.' мe '.$emmi10.' ιғ '.$emmi11.' yoυ '.$emmi12.' тιred. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' тнe '.$emmi.' вeѕт '.$emmi1.' prooғ '.$emmi2.' oғ '.$emmi3.' love '.$emmi4.' ιѕ '.$emmi5.' тrυѕт.'.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' ѕoмe '.$emmi8.' тнιngѕ '.$emmi9.' are '.$emmi10.' вeттer '.$emmi11.' leғт '.$emmi12.' υnĸnown. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' ѕelғ '.$emmi.' care '.$emmi1.' ιѕ '.$emmi2.' noт '.$emmi3.' ѕelғιѕн. '.$emmi5.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi5.' ιғ '.$emmi6.' yoυ '.$emmi6.' are '.$emmi8.' нappy '.$emmi9.' ι’м '.$emmi10.' нappy '.$emmi11.' тoo. '.$emmi12.'


✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi13.' ι’м '.$emmi14.' glad '.$emmi1.' тo '.$emmi.' ever '.$emmi3.' ιn '.$emmi5.' yoυr '.$emmi4.' нearт.'.$emmi2.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi6.' lιғe '.$emmi7.' ιѕ '.$emmi8.' тнe '.$emmi9.' ғlower '.$emmi10.' ғor '.$emmi11.' wнιcн '.$emmi12.' love '.$emmi13.' ιѕ '.$emmi14.' тнe '.$emmi.' нoney. '.$emmi11.'

✅ powered вy 💚 Muhammad Junaid 💚
',
);
}else{

if($robot == 'kata-kata'){
$konyol=auto('http://zbot.ap01.aws.af.cm/motivasi.php');
$motivasi=auto('http://zbot.ap01.aws.af.cm/motivasi.php');
$salah=array($konyol,$motivasi,);

}

if($robot == 'latah'){
if(($i-1 > 0 ) && ($i-1< count($stat[data])-1)){
$salah = array(
'
💚 '.$tagged_name.' 💚

'.$emmi.' ι’м '.$emmi1.' noт '.$emmi2.' тнe '.$emmi3.' вeѕт '.$emmi4.' вυт '.$emmi5.' ι’м '.$emmi6.' тrιng '.$emmi7.' мy '.$emmi8.' вeѕт '.$emmi9.'

✅ powered вy 💚 Muhammad Junaid 💚

',
'
💚 '.$tagged_name.' 💚

'.$emmi10.' lιғe '.$emmi11.' ιѕ '.$emmi12.' ѕнorт. '.$emmi13.' don’т '.$emmi14.' вe '.$emmi.' lazy. '.$emmi1.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi2.' never '.$emmi3.' geт '.$emmi4.' тoo '.$emmi5.' aттacнed. '.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' coυldn’т '.$emmi7.' love '.$emmi9.' мe '.$emmi10.' ιғ '.$emmi11.' yoυ '.$emmi12.' тιred. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' тнe '.$emmi.' вeѕт '.$emmi1.' prooғ '.$emmi2.' oғ '.$emmi3.' love '.$emmi4.' ιѕ '.$emmi5.' тrυѕт.'.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' ѕoмe '.$emmi8.' тнιngѕ '.$emmi9.' are '.$emmi10.' вeттer '.$emmi11.' leғт '.$emmi12.' υnĸnown. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' ѕelғ '.$emmi.' care '.$emmi1.' ιѕ '.$emmi2.' noт '.$emmi3.' ѕelғιѕн. '.$emmi5.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi5.' ιғ '.$emmi6.' yoυ '.$emmi6.' are '.$emmi8.' нappy '.$emmi9.' ι’м '.$emmi10.' нappy '.$emmi11.' тoo. '.$emmi12.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi13.' ι’м '.$emmi14.' glad '.$emmi1.' тo '.$emmi.' ever '.$emmi3.' ιn '.$emmi5.' yoυr '.$emmi4.' нearт.'.$emmi2.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi6.' lιғe '.$emmi7.' ιѕ '.$emmi8.' тнe '.$emmi9.' ғlower '.$emmi10.' ғor '.$emmi11.' wнιcн '.$emmi12.' love '.$emmi13.' ιѕ '.$emmi14.' тнe '.$emmi.' нoney. '.$emmi11.'

✅ powered вy 💚 Muhammad Junaid 💚
',

);
}
}
if($robot == 'biasa'){
$salah = array(
'
💚 '.$tagged_name.' 💚

'.$emmi.' ι’м '.$emmi1.' noт '.$emmi2.' тнe '.$emmi3.' вeѕт '.$emmi4.' вυт '.$emmi5.' ι’м '.$emmi6.' тrιng '.$emmi7.' мy '.$emmi8.' вeѕт '.$emmi9.'

✅ powered вy 💚 Muhammad Junaid 💚

',
'
💚 '.$tagged_name.' 💚

'.$emmi10.' lιғe '.$emmi11.' ιѕ '.$emmi12.' ѕнorт. '.$emmi13.' don’т '.$emmi14.' вe '.$emmi.' lazy. '.$emmi1.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi2.' never '.$emmi3.' geт '.$emmi4.' тoo '.$emmi5.' aттacнed. '.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' coυldn’т '.$emmi7.' love '.$emmi9.' мe '.$emmi10.' ιғ '.$emmi11.' yoυ '.$emmi12.' тιred. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' тнe '.$emmi.' вeѕт '.$emmi1.' prooғ '.$emmi2.' oғ '.$emmi3.' love '.$emmi4.' ιѕ '.$emmi5.' тrυѕт.'.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' ѕoмe '.$emmi8.' тнιngѕ '.$emmi9.' are '.$emmi10.' вeттer '.$emmi11.' leғт '.$emmi12.' υnĸnown. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' ѕelғ '.$emmi.' care '.$emmi1.' ιѕ '.$emmi2.' noт '.$emmi3.' ѕelғιѕн. '.$emmi5.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi5.' ιғ '.$emmi6.' yoυ '.$emmi6.' are '.$emmi8.' нappy '.$emmi9.' ι’м '.$emmi10.' нappy '.$emmi11.' тoo. '.$emmi12.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi13.' ι’м '.$emmi14.' glad '.$emmi1.' тo '.$emmi.' ever '.$emmi3.' ιn '.$emmi5.' yoυr '.$emmi4.' нearт.'.$emmi2.'


✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi6.' lιғe '.$emmi7.' ιѕ '.$emmi8.' тнe '.$emmi9.' ғlower '.$emmi10.' ғor '.$emmi11.' wнιcн '.$emmi12.' love '.$emmi13.' ιѕ '.$emmi14.' тнe '.$emmi.' нoney. '.$emmi11.'

✅ powered вy 💚 Muhammad Junaid 💚
',

);
}

if($robot == 'nomer'){
$compret=json_decode(auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?access_token='.$access_token.'&limit=50&fields=message,from'),true);
$nom = $stat[data][$i-1][comments][count]+1;
$cm_id_a = $compret[data][0][from][id];
$taga='@['.$cm_id_a.':1]';
if(count($compret[data]) == 1 ) $hahay = '0'; else $hahay = count($compret[data])-1;
$cm_id_z = $compret[data][$hahay][from][id];
$tagz='@['.$cm_id_z.':1]';
$cmno = count($compret[data])-1;
if($cmno <= 0 ){
$mescma = $compret[data][0][message];
$mescmz = $mescma;
}else{
$mescma = $compret[data][0][message];
$mescmz = $compret[data][$hahay][message];
}
if($nom == 1){
$salah = array(

'
💚 '.$tagged_name.' 💚

'.$emmi.' ι’м '.$emmi1.' noт '.$emmi2.' тнe '.$emmi3.' вeѕт '.$emmi4.' вυт '.$emmi5.' ι’м '.$emmi6.' тrιng '.$emmi7.' мy '.$emmi8.' вeѕт '.$emmi9.'

✅ powered вy 💚 Muhammad Junaid 💚

',
'
💚 '.$tagged_name.' 💚

'.$emmi10.' lιғe '.$emmi11.' ιѕ '.$emmi12.' ѕнorт. '.$emmi13.' don’т '.$emmi14.' вe '.$emmi.' lazy. '.$emmi1.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi2.' never '.$emmi3.' geт '.$emmi4.' тoo '.$emmi5.' aттacнed. '.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' coυldn’т '.$emmi7.' love '.$emmi9.' мe '.$emmi10.' ιғ '.$emmi11.' yoυ '.$emmi12.' тιred. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi14.' тнe '.$emmi.' вeѕт '.$emmi1.' prooғ '.$emmi2.' oғ '.$emmi3.' love '.$emmi4.' ιѕ '.$emmi5.' тrυѕт.'.$emmi6.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi7.' ѕoмe '.$emmi8.' тнιngѕ '.$emmi9.' are '.$emmi10.' вeттer '.$emmi11.' leғт '.$emmi12.' υnĸnown. '.$emmi13.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚
'.$emmi14.' ѕelғ '.$emmi.' care '.$emmi1.' ιѕ '.$emmi2.' noт '.$emmi3.' ѕelғιѕн. '.$emmi5.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚
'.$emmi5.' ιғ '.$emmi6.' yoυ '.$emmi6.' are '.$emmi8.' нappy '.$emmi9.' ι’м '.$emmi10.' нappy '.$emmi11.' тoo. '.$emmi12.'


✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi13.' ι’м '.$emmi14.' glad '.$emmi1.' тo '.$emmi.' ever '.$emmi3.' ιn '.$emmi5.' yoυr '.$emmi4.' нearт.'.$emmi2.'

✅ powered вy 💚 Muhammad Junaid 💚
',
'
💚 '.$tagged_name.' 💚

'.$emmi6.' lιғe '.$emmi7.' ιѕ '.$emmi8.' тнe '.$emmi9.' ғlower '.$emmi10.' ғor '.$emmi11.' wнιcн '.$emmi12.' love '.$emmi13.' ιѕ '.$emmi14.' тнe '.$emmi.' нoney. '.$emmi11.'

✅ powered вy 💚 Muhammad Junaid 💚
',

);
}
}


}
}
}
}
}
}
}
}
}
}
}
}


$TimeZone="+5";
$_time=gmdate("H", time() + ($TimeZone * 60 * 60));
if ($_time > 01) $_sambutan = "Met dini hari .";
else if ($_time > 24) $_sambutan = "Good merem . ";
else $_sambutan = "Selamat Pagi  ";

$gentime = microtime();
$gentime = explode(' ',$gentime);
$gentime = $gentime[0];
$pg_end = $gentime;
$totaltime = ($pg_end - $pg_start);
$showtime = number_format($totaltime, 1, '.', '');

$hari=gmdate("D", time()+60*60*7);
if((gmdate("D", time()+60*60*7))=="Sun"){ $hari="Sunday"; }
if((gmdate("D", time()+60*60*7))=="Mon"){ $hari="Monday"; }
if((gmdate("D", time()+60*60*7))=="Tue"){ $hari="Tuesday"; }
if((gmdate("D", time()+60*60*7))=="Wed"){ $hari="Wednesday"; }
if((gmdate("D", time()+60*60*7))=="Thu"){ $hari="Thursday"; }
if((gmdate("D", time()+60*60*7))=="Fri"){ $hari="Friday"; }
if((gmdate("D", time()+60*60*7))=="Sat"){ $hari="Saturday"; }
$jame=" ".gmdate("g:i:s a", time()+60*60*7);
$tgl=" ".gmdate("j - m - Y", time()+60*60*7);

$nomerku = $stat[data][$i-1][comments][count]+1;
$total = $stat[data][$i-1][comments][count];
$habiscomment = $stat[data][$i-2][from][name];

$crot = $me[id];
$tot='@['.$crot.':1]';
$we='@[0:0: ]';

$habiscomment1=array(
);
$habiscomment2=$habiscomment1[rand(0,count($habiscomment1)-1)];
$habiscomment3 = '';
$promosi = '';
$message1 = ''
.$salah[rand(0,count($salah)-1)];

$message=($habiscomment3.$message1.$habiscomment2.$promosi);

auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/likes?access_token='.$access_token.'&method=post');
auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?access_token='.$access_token.'&message='.urlencode($message).'&method=post');
echo $stat[data][$i-1][from][name].'=> '.htmlspecialchars($stat[data][$i-1][message]).'
Komeng => '.$message.'';
}
}
}

function auto($url){
$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl);
return $ch;
}

?>
