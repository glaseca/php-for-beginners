<?php
/*
Instrucciones:
 # Desde el terminal
  php -S localhost:8888
 # Desde el navegador
  http://localhost:8888
*/

$query = require 'bootstrap.php';

$tasks = $query->selectAll('todos');

require 'index.view.php';
