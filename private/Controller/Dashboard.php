<?php
class Dashboard{

    public function index(){
        $data = ['name' => 'Anis'];
        return view('admin.dashboard.index')->with(['data'=> $data, 'name'=>'Anisur Rahman'])->render();
    }

}