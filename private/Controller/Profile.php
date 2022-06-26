<?php
include(PRIVATE_PATH . 'Controller/Login.php');

class Profile{

    public function __construct(){
        (new Login)->isLoggedIn();
    }

    public function index(){
        //$data = [];
        $data = DB()->table('users')->select(['*'])->get();
        //dd($data[0]['name']);
        return view('admin.profile.index')->with(['data'=> $data])->render();
    }

}