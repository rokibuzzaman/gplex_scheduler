<?php
class Profile{

    public function index(){
        //$data = [];
        $data = DB()->table('users')->select(['*'])->get();
        //dd($data[0]['name']);
        return view('admin.profile.index')->with(['data'=> $data])->render();
    }

}