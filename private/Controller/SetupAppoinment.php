<?php
class SetupAppoinment{

    public function index(){
        $data = ['name' => 'Anis'];
        return view('setupAppoinment.index')->with(['data'=> $data, 'name'=>'Anisur Rahman'])->render();
    }

    public function store(){
        DB()->insert([]);
    }

}