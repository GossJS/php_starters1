<?php
   session_start();
   echo '<meta charset="utf-8">';
   if (empty($_SESSION['success'])) die ('<a  href="login.php" >Авторизоваться!</a>');
   echo '<h1>Добро пожаловать в закрытый раздел!</h1>';
   die ('<h2><a  href="logout.php" >Logout!</a></h2>');
 ?>
