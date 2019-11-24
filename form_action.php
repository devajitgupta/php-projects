<?php
echo "Name-".$_POST["name"];
echo "<br>";
echo "E-mail-".$_POST["email"];
echo "<br>";
echo "Password".$_POST["password"];
echo "<br>";
echo "Gender".$_POST["gender"];
echo "<br>";
echo "City".$_POST["option"];
echo "<br>";
echo "date".$_POST["date"];
echo "<br>";
echo "Hobby:-".$_POST["hobby"];
echo "<br>";
echo "Address".$_POST["address"];
echo "</br>";
echo $_FILES["upload"]["name"];
echo "<br>";					      
echo $_FILES["upload"]["type"]; 
echo "<br>";					
echo "<br>";					     
echo $_FILES["upload"]["size"]; 
echo "<br>";					     
echo $_FILES["upload"]["error"];
echo "<br>";


?>