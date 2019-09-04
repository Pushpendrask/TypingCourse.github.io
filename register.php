<?php
session_start();
header('location:signin.php');
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'typingcourse');
$name=$_REQUEST['user'];
$mobile=$_REQUEST['mobile'];
$password=$_REQUEST['password'];


$s ="select * from register where name='$name'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);

if($num==1)
{
	echo " Username Exist";
}
else
{
	$reg="insert into register(name,mobile,password) values('$name','$mobile','$password')";
	mysqli_query($conn, $reg);
	echo "Registration Successfull.";
}

?>