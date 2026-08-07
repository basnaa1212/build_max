<?php
include 'arch-side.php';
include 'arch-main.php';
session_start();
?>
<?php
if(isset($_SESSION['username']))	
{ 
echo $_SESSION["username"];
}
?>
