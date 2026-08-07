<?php

include 'admin-side.php';


include 'admin-main.php';
session_start();
?>
<?php
if(isset($_SESSION['username']))	
{ 
echo $_SESSION["username"];
}
?>