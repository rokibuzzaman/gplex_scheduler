<?php
class Login{

    public function index(){
        $data = ['name' => 'Anis'];
        return view('admin.login.index')->with(['data'=> $data, 'name'=>'Anisur Rahman'])->render();
    }

    public function processLogin(){
        
        /* Clean injection */
        foreach($_POST as $key => $value){
            $_POST[$key] = cleaninjections(trim($value));
        }

        if (isset($_POST['email'])) {            
            $emailusername= basicFilter($_POST['email']);
            $password= $_POST['password'];
            if($user = $this->checkAuth($emailusername, $password)){
                $_SESSION['login']      = true;
                $_SESSION['id']         = $user['id'];
                $_SESSION['username']   = $user['username'];
                /* Redirect to dashboard */
                header('Location: ' . url('task=dashboard'));
            }else{
                return view('admin.login.index')->with(['errors'=> 'Oppes! You have entered invalid credentials'])->render();
            }
        }

    }

    /* Check if logged in or not */
    public function isLoggedIn(){
        if (isset($_SESSION['login'])){
            /* Logged in */
            return true;
        }else{
            /* Not Logged in */
            header("Location: " . url('task=login'));
            exit();
        }
    }

    /*** for login process ***/
    public function checkAuth($emailusername, $password){
        
        //Checking if the username is available in the table
        $result = DB()->table('users')->select(['*'])->where(['email'=>$emailusername, 'password'=>sha1($password)])->get();
        if (count($result) === 1) {
            return $result[0];
        }else{
            return false;
        }

    }
    

}