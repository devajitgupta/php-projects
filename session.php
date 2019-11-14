<?php
//---SESSION START----//
session_start();
echo "<br>";

//---CREATE SESSION---//
$_SESSION["FirstMan"]="Ajit";
$_SESSION["LastName"]="Gupta";
echo "Hello! My First Name Is ".$_SESSION["FirstMan"]." & My Last Name Is " .$_SESSION["LastName"];
?>