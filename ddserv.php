<?php

session_start();

if(isset($_POST['submit']))
{

  ob_end_clean();


  validate($_POST['user'],$_POST['password'],$_POST['Tcsrf'],$_COOKIE['sign_in']);
}

function validate ($username,$password, $username_csrf, $user_sessioncookie)
{
  if($username =="world && $passowrd =="1234")
  {

    if ($user_csrf == $_SESSION['server_csrf'] &&  $user_sessioncookie == session_id())
    {
      header ("Location :indec.html")
    }
    else
    {
      echo "CSRF Failed"."</br>";
      echo "User Token :".$user_csrf."</br>";
      echo "Server Token :".$_SESSION['server_csrf']."</br>";
      exit();
    }

  }
  else
  {
    header ("Location: login.php");
  }
}

?>
