<?php
session_start();
if ($_SESSION['token']==$_POST['token']) {
  // VALID TOKEN PROVIDED - PROCEED WITH PROCESS
  echo "The token process is a success";
} else {
  // ERROR - INVALID TOKEN
  echo "An error occured in the Process ";
}
?>