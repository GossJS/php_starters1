<?php
   session_start();
   unset($_SESSION['success']);
   session_destroy();
   echo '<meta charset="utf-8"><h1>Вы успешно деавторизовались!</h1>';
   die ('<a  href="login.php" >Авторизуйтесь снова!</a>');
 ?>
