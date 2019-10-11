<?php
session_start();
$length = 32;
$_SESSION['token'] = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $length);
?>
<form method="post" action="step-3.php">

  
  <input type="text" name="hello" value="world"/>
  <input type="password" name="Password" value="1234"/>
  <input type="hidden" name="token" value ="<?=$_SESSION['token']?>"/>
  <input type="submit" value="GO"/>

</form>
