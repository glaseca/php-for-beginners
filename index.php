<?php
/*
Instrucciones:
 # Desde el terminal
  php -S localhost:8888
 # Desde el navegador
  http://localhost:8888/?name=will
*/

$person = [
    'age' => 31,
    'hair' => 'brown',
    'carrer' => 'web developer'
];

$person['name'] = 'Jeffrey';

unset($person['age']);

require 'index.view.php';
