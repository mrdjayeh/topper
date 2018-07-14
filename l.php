<?php
date_default_timezone_set('Asia/Islamabad');
$yx = opendir('DJ');
while($isi=readdir($yx))
if($isi != '.' && $isi != '..'){ 
$token=$isi;

$stat= json_decode(auto('https://graph.facebook.com/me/home?fields=id,from,comments&limit=01&access_token='.$token),true);
for($i=1;$i<=count($stat[data]);$i++){ 
$x=$stat[data][$i-1][id].'~'; 
$y= fopen('komen.txt','a');
fwrite($y,$x); fclose($y);

$name = json_decode(auto('https://graph.facebook.com/'.$stat[data][$i-1][from][id].'?fields=name&access_token='.$token),true);
$exp_nam = explode(' ',$stat[data][$i-1][from][name]);
$nama = $gender.' '.$exp_nam[0];
$tags = explode(' ',$stat[data][$i-1][from][id]);
$tagged_name = ' @['.$tags[0].':1] ';
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

$emo=array (
'🕊','🦅','🦆','🦉','🐸','🐊','🐢','🦎','🐍','🐲','🐉','🐬','🐟','🐠','🦈','🐌','🦋','🐛','🏵','🌹','🥀','🌺','🌻','🌼','🌷','🌲','🌳','🌴','🌵','✅','✔','☑','🇵🇰',
);

$emoticon=$emo[rand(0,count($emo)-1)];

$text = array(
 '♥ '.$tagged_name.' Pic Ma tu Bilkul Tom cruise Lag Raha ha tu ♥ 
 
◄◕◕◕ Site ► X3Ayeshu,tk ◕◕◕►   
◄◕◕◕ Owner @[100012710855164:] ◕◕◕►',
  ' ♥ Ye Pic Dal K sabit krna Kya chah rahe o '.$tagged_name.' :p
  
◄◕◕◕ Site ► X3Ayeshu,tk ◕◕◕►   
◄◕◕◕ Owner @[100012710855164:] ◕◕◕►',
   '♥ Aise Pic Dobara dali na tu tere mama ko Shikayat Krongi :D
   
◄◕◕◕ Site ► X3Ayeshu,tk ◕◕◕►   
◄◕◕◕ Owner @[100012710855164:] ◕◕◕►',
    ' ♥ :p Daikh Bhai Jinna v Editing Krwalo '.$tagged_name.' :p Hame pata chal jata ha Kon Kaisa ha :D
    
◄◕◕◕ Site ► X3Ayeshu,tk ◕◕◕►   
◄◕◕◕ Owner @[100012710855164:] ◕◕◕►',
 
  'Jb be Hamre Post Ko Like Kroge Pahle Ache Se Khusbo laga k (y) krna :p '.$tagged_name.' !
  
 ◄◕◕◕ Site ► X3Ayeshu,tk ◕◕◕►   
◄◕◕◕ Owner @[100012710855164:] ◕◕◕►',
'Bhai '.$tagged_name.' ! Suna Ha Apke Id Pe Number Plate Laga hwa ha :V

◄◕◕◕ Site ► X3Ayeshu,tk ◕◕◕►   
◄◕◕◕ Owner @[100012710855164:] ◕◕◕►',
''.$tagged_name.' ! bhai ek bhaat pochne te :D Tere v new Verified Id udha raha ha kiya Zuku :p

◄◕◕◕ Site ► X3Ayeshu,tk ◕◕◕► 
◄◕◕◕ Owner @[100012710855164:] ◕◕◕►',
'Haterz Log Pyar se Mojy ! Ayeshu ! bolte ha Apko Kya Bolte ha '.$tagged_name.' ?

◄◕◕◕ Site ► X3Ayeshu,tk ◕◕◕►   
◄◕◕◕ Owner @[100012710855164:] ◕◕◕►',
'Aur Bhai '.$tagged_name.' ! Ye Orignal Naam Ha kiya Tumhara :p

◄◕◕◕ Site ► X3Ayeshu,tk ◕◕◕►   
 ◄◕◕◕ Owner @[100012710855164:] ◕◕◕►',
'HAHHAHAAH Bot nhii  Apna Brand Chalta ha babu '.$tagged_name.'!

◄◕◕◕ Site ► X3Ayeshu,tk ◕◕◕►   
◄◕◕◕ Owner @[100012710855164:] ◕◕◕►',

);

$comments = $text[rand(0,count($text)-1)];

$site = ''.$emoticon.' MRDJ AYASH BOTTER '.$emoticon.'';

$return = ' '.$comments.' 
'.$site.' ';

$react = array(
'WOW',
'LIKE',
'LOVE',
);

$reaction = $react[rand(0,count($react)-1)];

auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?message='.urlencode($comments).'&attachment_id='.$mess.'&access_token='.$token.'&method=POST');
auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/reactions?type=LOVE&method=POST&access_token='.$token.'');
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
