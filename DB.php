<?php  
require("utility.php"); 


$name=$_POST['username'];
$email=$_POST['email'];
$mob=$_POST['number'];
$teach=$_POST['teach'];
$learn=$_POST['learn'];
$password=$_POST['password'];
$password1=$_POST['password1'];

echo $name."  ";

$sql=" INSERT INTO enter(user_name,email,mobile,teach,learn,password,Repassword) values ('$name','$email','$mob','$teach','$learn','$password','$password1')";
//$sql="INSERT INTO reg(Name) values ('$fname')";
$result=ExecuteNonQuery ($sql);

if($result)
{
	echo "<h1> YOU ARE REGISTERED </h1> " ;
	echo "Redirecting...";
        header("refresh:2;url=index.html");
}
else
{
	echo "<h1> Register again </h1> " ;	
	echo "Redirecting...";
        header("refresh:2;url=register.html");
}
?> 	