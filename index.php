<?php
/*
Instrucciones:
 # Desde el terminal
  php -S localhost:8888
 # Desde el navegador
  http://localhost:8888
*/

class Task {
    public $description;
    public $completed = false;

    public function __construct($description){
        $this->description = $description;
    }

    public function complete(){
        $this->completed = true;
    }

    public function isComplete(){
        return $this->completed;
    }
}

$tasks = [
    new Task ('Go to the store'), // 0
    new Task ('Finish my screencast'), // 1
    new Task ('Clean my room')  //2
];

$tasks[0]->complete();

require 'index.view.php';
