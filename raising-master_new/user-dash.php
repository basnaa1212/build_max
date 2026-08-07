<?php
include 'user-side.php';
include 'user-main.php';
session_start();
?>
<?php
if(isset($_SESSION['username']))	
{ 
  echo $_SESSION["username"];
}
?>
