<?php
class Appoinment{

    private $requiredFields = [
        'First Name'=>'fname',
        'Last Name'=>'lname',
        'Mobile'=>'mobile'
    ];

    public function getList(){
        return DB()->table('patient_profile')
                    ->select(['*'])
                    ->orderBy(['created_at'=>'desc'])
                    ->get();
    }

    public function index(){
        $data = ['name' => 'Anis'];
        return view('setupAppoinment.index')->with(['data'=> $data, 'name'=>'Anisur Rahman'])->render();
    }

    public function store(){
        /* Validation */
        $errors = [];
        foreach($this->requiredFields as $key => $requiredField){
            if(!array_key_exists($requiredField, $_POST) || empty($_POST[$requiredField])){
                $errors[$requiredField] = "{$key} field is required";
            }
        }

        //Return with error
        if(count($errors)){
            return view('setupAppoinment.index')->with(['errors'=> $errors, 'old'=>$_POST])->render();
        }

        $insert = DB()->table('patient_profile')
                        ->insert([
                            'fname'     => basicFilter($_POST['fname']),
                            'lname'     => basicFilter($_POST['lname']),
                            'email'     => basicFilter($_POST['email']),
                            'mobile'    => basicFilter($_POST['mobile']),
                            'message'   => basicFilter($_POST['message']),
                            'created_at' => date('Y-m-d H:m:i'),
                            'updated_at' => date('Y-m-d H:m:i')
                        ]);
        if($insert){
            return view('setupAppoinment.index')->with(['success'=> 'Thank you for providing your information. One of our staffs will call you back ASAP.'])->render();
        }else{
            return view('setupAppoinment.index')->with(['cannotSave'=> ['Cannot save! Please try again.']])->render();
        }
    }

}