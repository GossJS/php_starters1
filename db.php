<?php
$connection=mysql_connect("localhost", "root", "23111991");
$db=mysql_select_db("my_bd");

if(!$connection || !$db)
{
	exit (mysql_error());
}
else
{
	echo "Нет соединения...";
}

?>
