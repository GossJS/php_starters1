<?php
  session_start();
 ?>
<meta charset="utf-8">
<h1>Работа с сессиями... </h1>
<?php
  $private = '<a  href="private.php" >Приватный раздел</a>';
  if (isset($_SESSION['success'])) {
     die("Уже авторизованы! {$private}");
  }
  $script = "{$_SERVER['SCRIPT_NAME']}";
  if ($_SERVER['REQUEST_METHOD']==='POST') {
       $r =  sha1($_POST['password']);
       $f = fopen('password.txt', 'r'); $line = fgets($f); fclose($f);
       if  ($r !== $line) die ("<a  href=\"{$script}\" >Попробовать ещё раз</a>");
       echo 'Инициализируем сессию... ';
       $_SESSION['success'] = 'yes';
       echo $private;
  } else {
       echo "<form method=\"post\" action=\"{$script}\" >";
       echo <<<_END
    				<div>
    					<label>Кодовое слово (пароль)</label>
    					<input id="password" name="password" required="required" type="password">
              <button type="submit">Авторизоваться</button>
    				</div>
_END;
       echo "</form>";
  }
