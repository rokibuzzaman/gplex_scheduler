<?php
class Login{

    public function index(){
        $data = ['name' => 'Anis'];
        return view('admin.login.index')->with(['data'=> $data, 'name'=>'Anisur Rahman'])->render();
    }

}