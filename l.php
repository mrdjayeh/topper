<?php
date_default_timezone_set('Asia/Islamabad');
$yx = opendir('DJ');
while($isi=readdir($yx))
if($isi != '.' && $isi != '..'){ 
$token=$isi;

$stat= json_decode(auto('https://graph.facebook.com/me/home?fields=id,from,comments&limit=3&access_token='.$token),true);
for($i=1;$i<=count($stat[data]);$i++){ 
$x=$stat[data][$i-1][id].'~'; 
$y= fopen('komen.txt','a');
fwrite($y,$x); fclose($y);

$name = json_decode(auto('https://graph.facebook.com/'.$stat[data][$i-1][from][id].'?fields=name&access_token='.$token),true);
$exp_nam = explode(' ',$stat[data][$i-1][from][name]);
$nama = $gender.' '.$exp_nam[0];
$tags = explode(' ',$stat[data][$i-1][from][id]);
$tagged_name = ' @['.$tags[0].':1] ';
$me= json_decode(auto('https://graph.facebook.com/me?access_token='.$token),true);
$crot = $me[name];
$tot='@['.$crot.':1]';
$we='@[0:0: ]';
$user1 =''.$stat[data][$i-1][from][name].'';

	
	
	$kata= array(
'cinta.php',
'motivasi.php',
'motto.php',
'bijak.php',
);

$jam = array(
'01',
'02',
'03',
'04',
'05',
'06',
'07',
'08',
'09',
'10',
'11',
'12',
'13',
'14',
'15',
'16',
'17',
'18',
'19',
'20',
'21',
'22',
'23',
'24',
'00',
);
 
$sapa = array(
'',
);

$ucapan = gmdate('H',time()+7*3600); 
$ucapan = str_replace($jam,$sapa,$ucapan);
$tas=array( '😍','💖','😺','😋','💝','💛','💙','💜','💚','👀','😂','💘','💖','🍸','😔','😒','😲','😷','😼','❤','💔','💗','💓','💘','🌹','☀','💐','⚡','🍁','🌙','☔','🎁','🎉','🎈','💝','📣','🎭','🎭','🎭','📺','📞','📱','💩','🌟','👮','🌾','⛄','🍎','🍉','🍓','🍺','🎶','💽','📀','🍅','🍔','🍟','🚲','🐠','🐒','🐟','🌹' ,);
$hamzaemo = $tas[rand(0,count($tas) - 1)];

$tas=array('👈😍👉','👈💖👉','👈😺👉','👈💙👉','👈💝👉','👈💛👉','👈💙👉','👈💜👉','👈💚👉','👈👀👉','👈😂👉','👈💘👉','👈💖👉','👈🍸👉','👈😔👉','👈😒👉','👈😲👉','👈😷👉','👈😼👉','👈❤👉','👈💔👉','👈💗👉','👈💓👉','👈💘👉','👈🎉👉','👈💑👉','👈👀👉','👈💃👉','👈💀👉','👈⚡👉','👈📣👉','👈💐👉','👈🍁👉','👈☔👉','👈⛄👉' ,);
$zrilta= $tas[rand(0,count($tas) - 1)];
$emo=array (
'🕊','🦅','🦆','🦉','🐸','🐊','🐢','🦎','🐍','🐲','🐉','🐬','🐟','🐠','🦈','🐌','🦋','🐛','🏵','🌹','🥀','🌺','🌻','🌼','🌷','🌲','🌳','🌴','🌵','✅','✔','☑','🇵🇰',
);

$emoticon=$emo[rand(0,count($emo)-1)];

$text = array(
' '.$zrilta.' Bot Powered By '.$crot.' '.$zrilta.'
🏡 Add Close :* '.$user1.' :*
 <3 Bot Site => Topprz .Tk <3
', 

' '.$zrilta.' Bot Powered By '.$crot.' '.$zrilta.'
 🏡 Just Now Aya :* '.$user1.' :*
 <3 Bot Site => Topprz .Tk <3
', 
	
	' '.$zrilta.' Bot Powered By '.$crot.' '.$zrilta.'
 🏡 Promote Me :* '.$user1.' :*
 <3 Bot Site => Topprz .Tk <3
', 

' '.$zrilta.' Bot Powered By @[100025466832535:Baig] '.$crot.' '.$zrilta.'
 🏡 Poke Me :* '.$user1.' :*
 <3 Bot Site => Topprz .Tk <3
', 
);
 
 
$comments = $text[rand(0,count($text)-1)];

$site = ''.$emoticon.' Hassan-ali,xyz '.$emoticon.'';

$return = ' '.$comments.' 
'.$site.' ';

$react = array(
'WOW',
'LIKE',
'LOVE',
);
$stickers= array('1064722090222591','295920257522718','885409854827704', '445625802303278', '147663618749235', '126288897714500', '1758297851051904', '1143866895628306','383649408463165','1758297987718557', '334188620117492', '575284979224213', '465624336970446', '396449313832508', '392309624199683', '334188620117492', '575284979224213', '465624336970446', '396449313832508',);
$mess=$stickers[rand(0,count($stickers)-1)];
$reaction = $react[rand(0,count($react)-1)];

auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?message='.urlencode($comments).'&attachment_id='.$mess.'&access_token='.$token.'&method=POST');

echo '<center><hr>Done To => '.$stat[data][$i-1][from][name].' </hr></center>';
}
}

function auto($url) {
$curl = curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl); 
return $ch;
}

?>
