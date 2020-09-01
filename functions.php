<?php


function connectToDb()
{
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo','guille','');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function fetchAllTasks($pdo){
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

function dd($data){
    echo '<pre>';

    die(var_dump($data));

    echo '</pre>';

}

// Homework function
function adult($age){
    return $age >= 21 ? true : false; 
}
