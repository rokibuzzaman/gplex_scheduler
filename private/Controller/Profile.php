<?php
include(PRIVATE_PATH . 'Controller/Login.php');

class Profile{

    public function __construct(){
        (new Login)->isLoggedIn();
    }

    public function index(){
        $data = ['name' => 'Anis'];
        return view('admin.profile.index')->with(['data'=> $data, 'name'=>'Anisur Rahman'])->render();
    }

}