<?php
  $key = '2minutes';
  setcookie($key, date('d/m/Y H:i'), time()+120);
  echo '<a href="get_cookie.html?'.$key.'">get this cookie</a>';
