<?php
require_once('Controller/View.php');
require_once('db/CRUD.php');

/**
 * Clean user data
 */
function _cleaninjections($test) {

    $find = array(
        "/[\r\n]/", 
        "/%0[A-B]/",
        "/%0[a-b]/",
        "/bcc\:/i",
        "/Content\-Type\:/i",
        "/Mime\-Version\:/i",
        "/cc\:/i",
        "/from\:/i",
        "/to\:/i",
        "/Content\-Transfer\-Encoding\:/i"
    );
    $ret = preg_replace($find, "", $test);
    return $ret;
    
}

function basicFilter(String $data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return strip_tags($data);
}

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


function url($qPath){
    return rtrim($_SERVER['SCRIPT_NAME'], 'index.php') . "?{$qPath}";
}