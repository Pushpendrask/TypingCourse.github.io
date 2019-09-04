<?php
session_start();
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'typingcourse');
$name=$_REQUEST['user'];
$mobile=$_REQUEST['mobile'];
$password=$_REQUEST['password'];


$s ="select * from register where name='$name' && password='$password'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);

if($num==1)
{
	$_SESSION['username']= $name;
	header('location:test.php');
}
else
{
	header('location:signin.php');
}

?>