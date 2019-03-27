<?php
  $path = 'http://kodaktor.ru/api2/enigma/2/3';
  $options = [ 'http'=> [ 'method'=> "POST" ] ];
  $context = stream_context_create($options);
  $res = json_decode(file_get_contents ($path, 0, $context));
  echo $res -> result; // 1000
