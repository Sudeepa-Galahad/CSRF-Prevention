<?php
session_start();
$_SESSIONID =session_id();
setcookie ("sign_in",$_SESSIONID,time()+3600,"/","localhost",false,true);

if(empty($_SESSION['key']))
{
  $_SESSION['key']= bin2hex(random_byte(32));
}

$token = hash_hmac('sha256', 'sigin_csrf', $_SESSION['key']);
$_SESSION['server_csrf'] = $token;

setcookie("csrftoken", $token, time()=3600, "/","localhost", false,true);
$length = 32;
$_SESSION['token'] = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $length);
?>
<form method="post" action="ddserv.php">


  <input type="text" name="user" value="world" required ="required"/>
  <input type="password" name="password" value="1234" required= "required"/>
  <input type="hidden" name="Tcsrf"  id="tok_csrf" value ="<?php echo $token ;?>"/>
  <input type="submit" value="GO"/>

</form>
