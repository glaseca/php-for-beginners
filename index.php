<?php
/*
Instrucciones:
 # Desde el terminal
  php -S localhost:8888
 # Desde el navegador
  http://localhost:8888
*/

require 'core/bootstrap.php';


require Router::load('routes.php')->direct(Request::uri());
