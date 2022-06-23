<?php
class Profile{

    public function index(){
        $data = ['name' => 'Anis'];
        return view('admin.profile.index')->with(['data'=> $data, 'name'=>'Anisur Rahman'])->render();
    }

}