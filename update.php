
<html>
<head></head>
<body>
<form method="post">
<label>Name:</label>
<input type="text" name="user" value="<?php echo $row['id']?>" >
<label>Password:</label>
<input type="password" name="pass" value="<?php echo $ ?> ">
<input type="submit" name="submit" value="login">
</form>
</body>
</html>

<?php
$con=mysqli_connect("localhost","root","","user");
if(isset($_POST['submit'])){
$id=$_GET['sid'];
$q=$_POST['user'];
$r=$_POST['pass'];
$query="update user_info set username='$q',password='$r' where id='$id'";
$update=mysqli_query($con,$query);
header('location:display.php');
}
//$res=mysqli_fetch_array($query)
?>