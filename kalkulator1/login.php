<?php
session_start();
include "config.php";

if(isset($_SESSION['username']) && isset($_SESSION['password'])){

  $username=$_SESSION['username'];
  $password=$_SESSION['password'];
  
  $session='fill';
}
else{
  $session='empty';
}
?>

<?php
  if($session=="empty"){
    include "index.php";
  }
  elseif($session=="fill"){
    include"papar.php";
  }
?>