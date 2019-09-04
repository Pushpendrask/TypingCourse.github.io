<?php
if(isset($_REQUEST['submit']))
{
		if(isset($_REQUEST['text']))
		{
			$text= $_REQUEST['text'];
		}
}
if($text=='typing'||'english'||'30'||'English'||'english 30'||'English 30'||'Typing')
{
		header('location:courses.php');
}
else if($text=='english'||'40'||'English'||'english 40'||'English 40')
{
		header('location:courses.php');
}
else if($text=='marathi'||'Marathi'||'marathi 30'||'Marathi 30')
{
		header('location:courses.php');
}
else if($text=='hindi'||'Hindi'||'hindi 30'||'Hindi 30')
{
		header('location:courses.php');
}
else
{
	header('location:index.php');

}
		

?>