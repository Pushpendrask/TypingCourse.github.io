<?php
$conn=mysqli_connect('localhost','root','');

if($conn){
	echo "Connection Successfull";
}
else{
	echo "Connection Failed";
}

mysqli_select_db( $conn, 'typingcourse');

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$mobile=$_REQUEST['mobile'];

$query="insert into userinfo(name, email, password, mobile) 
values('$name','$email','$password','$mobile')";

mysqli_query($conn,$query);
header('location:index.php');
?>


