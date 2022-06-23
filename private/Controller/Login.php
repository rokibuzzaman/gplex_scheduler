<?php
class Login{

    public function index(){
        $data = ['name' => 'Anis'];
        return view('admin.login.index')->with(['data'=> $data, 'name'=>'Anisur Rahman'])->render();
    }


public function login(){
        
        if (isset($_POST['email'])) {            
            $emailusername= basicFilter($_POST['email']);
            $password= $_POST['password'];
            if($user = $this->checkAuth($emailusername, $password)){
                // this login var will use for the session thing
                $_SESSION['login']  = true;
                $_SESSION['id']     = $user['id'];
                return view('admin.dashboard.index')->with(['success'=> ['You have Successfully loggedin']])->render();
            }else{
                return view('admin.login.index')->with(['errors'=> ['Oppes! You have entered invalid credentials']])->render();
            }
            
        }
    }


    public function isLoggedIn(){
        return true;
    }




    

    /*** for login process ***/
    public function checkAuth($emailusername, $password){
        
        //checking if the username is available in the table
        $result = DB()->table('users')->select(['*'])->where(['email'=>$emailusername, 'password'=>sha1($password)])->get();
        if (count($result) === 1) {
            return $result[0];
        }else{
            return false;
        }

    }
    

}