<?php
class Logout{

    function index(){
        session_unset();
        session_destroy();
        header("Location: " . url('task=login'));
        exit();
    }

}