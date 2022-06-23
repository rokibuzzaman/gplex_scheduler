<?php
class Login{

    public function index(){
        $data = ['name' => 'Anis'];
        return view('admin.login.index')->with(['data'=> $data, 'name'=>'Anisur Rahman'])->render();
    }


    /*** for login process ***/
		public function checkAuth($emailusername, $password){

        	$password = sha1($password);
			$sql2="SELECT id from users WHERE email='$emailusername' or username='$emailusername' and password='$password'";

			//checking if the username is available in the table
        	$result = mysqli_query($this->db,$sql2);
        	$user_data = mysqli_fetch_array($result);
        	$count_row = $result->num_rows;

	        if ($count_row == 1) {
	            // this login var will use for the session thing
	            $_SESSION['login'] = true;
	            $_SESSION['id'] = $user_data['id'];
	            return true;
	        }
	        else{
			    return false;
			}
    	}

    

}