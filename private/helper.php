<?php
require_once('Controller/View.php');
require_once('db/CRUD.php');

/* 
    Generate view page
*/
function view($viewPath){
    return new View($viewPath);
}

/**
 * Task name to controller name
 */
function taskToControllerName($task){

    $task = explode('-', $task);
    $cn = '';// Controller Name
    array_walk($task, function($i, $k)use(&$cn){
        $cn .= ucfirst($i);
    });
    return $cn;

}

function config(){
    return include(PRIVATE_PATH . 'config.php');
}

function DB(){
    return new CRUD;
}
