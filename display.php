

<html>
<head>
<style>
.table{
	margin-top:100px;
	margin-left:100px;
	
}

</style></head>
<body>
<h1> show data</h1>
<table border='1' class="table">
<tr><th>id</th><th>username</th><th>password</th><th>delete</th><th>update</th>
</tr>

<tr>
<?php
$con=mysqli_connect("localhost","root","","user");
$sql="select * from user_info";
$query=mysqli_query($con,$sql);
while($res=mysqli_fetch_array($query)){
?> 
    <td><?php echo $res['id']; ?></td><td><?php echo $res['username']; ?></td><td><?php echo $res['password']; ?></td><td><a href="update.php? sid=<?php echo $res['id']; ?>">update</a></td><td><a href="delete.php?sid=<?php echo $res['id'];?>">delete</a></td>

</tr>

<?php
}
	?>
</table>
</body>
</html>

<?php


$con=mysqli_connect("localhost","root","","user");
$sql="select * from user_info";
$query=mysqli_query($con,$sql);

?> 