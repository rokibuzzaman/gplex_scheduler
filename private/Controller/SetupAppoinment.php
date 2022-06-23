<?php
class SetupAppoinment{

    public function index(){
        $data = ['name' => 'Anis'];
        return view('setupAppoinment.index')->with(['data'=> $data, 'name'=>'Anisur Rahman'])->render();
    }

    public function store(){
        DB()->table('patient_profile')
            ->insert([
                'fname'     => "xxxx'",
                'lname'     => 'Rahman',
                'email'     => 'a@gmail.com',
                'mobile'    => '01747984783',
                'message'   => 'Hello',
                'created_at' => date('Y-m-d H:m:i'),
                'updated_at' => date('Y-m-d H:m:i')
            ]);
    }

}