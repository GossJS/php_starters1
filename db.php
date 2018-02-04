<?php
$connection=mysqli_connect("92.53.66.41", "root2", "23111991");
$db=mysqli_select_db($connection, "my_bd");

if(!$connection || !$db)
{
	exit (mysql_error());
}
else
{
	echo " ЕСТЬ соединение...";
}

?>

