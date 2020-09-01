<?php
/*
Instrucciones:
 # Desde el terminal
  php -S localhost:8888
 # Desde el navegador
  http://localhost:8888
*/

require 'functions.php';
require 'Task.php';

$pdo = connectToDb();
$tasks = fetchAllTasks($pdo);

require 'index.view.php';
