<html>
<body>
<form  action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
	</form>
<?php
echo $_FILES["fileToUpload"]["name"];
?>
</body>
</html>