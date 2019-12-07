<?php
$a=$_POST['user'];
$b=$_POST['pass'];

$con=mysqli_connect("localhost","root","","user");
$sql="insert into user_info(username,password)values('$a','$b')";
$query=mysqli_query($con,$sql);
if(isset($query)){
	echo "insewted";
}
?>


<html>
<head></head>
<body>
<form method="post" action="">
<label>Name:</label>
<input type="text" name="user" >
<label>Password:</label>
<input type="password" name="pass">
<input type="submit" name="submit" value="login">
</form>
</body>
</html>
