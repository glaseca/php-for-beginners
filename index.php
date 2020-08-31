<?php
/*
Instrucciones:
 # Desde el terminal
  php -S localhost:8888
 # Desde el navegador
  http://localhost:8888
*/

$task = [
    'title' => 'Finish homework',
    'due' => 'Today',
    'assigned_to' => 'Jeffrey',
    'completed' => false,
];

require 'index.view.php';
