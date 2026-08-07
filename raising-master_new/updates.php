<?php
include 'arch-side.php';
echo"
<form  method='POST'>";
echo"
<label for='message'>Message:</label>
        <textarea name='message' rows='4'></textarea><br><br>
        <input type='submit' name='send' id='send' value='Send'>
 
 </form>";
 ?>