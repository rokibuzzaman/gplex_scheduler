<?php
include(PRIVATE_PATH . 'Controller/Login.php');

class Profile{

    public function __construct(){
        (new Login)->isLoggedIn();
    }

    public function index(){
        return view('admin.profile.index')->render();
    }

}