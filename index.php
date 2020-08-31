<?php
/*
Instrucciones:
 # Desde el terminal
  php -S localhost:8888
 # Desde el navegador
  http://localhost:8888
*/

require 'functions.php';

if(adult(15)){
    echo 'You are an adult.';
} else { 
    echo 'You are not old enough.';
}

$task = [
    'title' => 'Finish homework',
    'due' => 'Today',
    'assigned_to' => 'Jeffrey',
    'completed' => true,
];

require 'index.view.php';
