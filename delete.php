<?php
$id=$_GET['sid'];
$con=mysqli_connect("localhost","root","","user");
$query="delete from user_info where id=$id";

mysqli_query($con,$query);
header('location:display.php');

?>