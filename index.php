<?php 
	require_once('./vendor/autoload.php');
    define('DEBUG', false);
    if (DEBUG) {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }
    define('BASEPATH', dirname(__FILE__)."/");



    const PRIVATE_PATH = BASEPATH . 'private/';
    require_once(PRIVATE_PATH . 'config.php');
    require_once(PRIVATE_PATH . 'helper.php');
    require_once(PRIVATE_PATH . 'db/CRUD.php');
    

    if( isset($_GET['task']) ){
        $controller = taskToControllerName($_GET['task']);        
        if(file_exists(PRIVATE_PATH . "Controller/{$controller}.php")){
            
            require_once(PRIVATE_PATH . "Controller/{$controller}.php");
            $reqObj = new $controller;
            $reqObj->index();
            /* DB()->insert([
                'fname' => 'xxxx',
                'lname' => 'Rahman',
                'email' => 'a@gmail.com',
                'mobile' => '01747984783',
                'message' => 'Hello',
                'created_at' => date('Y-m-d H:m:i'),
                'updated_at' => date('Y-m-d H:m:i')
            ]); */

            /* DB()->table('patient_profile')
                ->update(
                [
                    'id' => 2
                ],
                [
                    'fname' => 'DDDDDD',
                    'lname' => 'Rahman'
                ]); */


            DB()->table('patient_profile')
                ->delete(
                [
                    'id' => 2
                ]);

        }
    }


?>
