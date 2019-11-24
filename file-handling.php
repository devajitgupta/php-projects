<?php
//------File Handling ----//
$a=fopen("www.google.com","r");
//var_dump($a);
//echo fread($a,7);
if ($a)
{
	echo "File open";
	
}
else {
	echo "something wrong";}
?>
echo "<br>";
<?php
//----- Read File Handling----//
readfile("geek.txt");

?>