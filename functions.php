<?php

function dd($data){
    echo '<pre>';

    die(var_dump($data));

    echo '</pre>';

}

// Homework function
function adult($age){
    return $age >= 21 ? true : false; 
}
