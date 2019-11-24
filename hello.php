<?php
session_start();
setcookie("uname","ajit",time()+5*60);
echo $_COOKIE["uname"];
$uname="my name is ajit ";
print_r ($uname);
var_dump ($uname);
echo "<br>";
echo $_SESSION["FirstMan"];
?>





