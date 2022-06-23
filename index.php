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
    require_once(PRIVATE_PATH . 'helper.php');
    require_once(PRIVATE_PATH . 'db/CRUD.php');

    // Set timezone
    date_default_timezone_set(config()['TIME_ZONE']);

    if( isset($_GET['task']) ){

        $controller = taskToControllerName($_GET['task']);
        $action     = isset($_GET['act']) ? $_GET['act'] : 'index';
        if(file_exists(PRIVATE_PATH . "Controller/{$controller}.php")){
            
            require_once(PRIVATE_PATH . "Controller/{$controller}.php");
            if(method_exists($controller, $action)){
                $reqObj = new $controller;
                // return $reqObj->$action();
            }


            DB()->table('patient_profile')->select(['*'])->get();

            /* var_dump(DB()->table('patient_profile')->insert([
                'fname' => "xxxx'",
                'lname' => 'Rahman',
                'email' => 'a@gmail.com',
                'mobile' => '01747984783',
                'message' => 'Hello',
                'created_at' => date('Y-m-d H:m:i'),
                'updated_at' => date('Y-m-d H:m:i')
            ])); */

            /* DB()->table('patient_profile')
                ->update(
                [
                    'id' => 2
                ],
                [
                    'fname' => 'DDDDDD',
                    'lname' => 'Rahman'
                ]); */


            /* DB()->table('patient_profile')
                ->delete(
                [
                    'id' => 2
                ]); */

        }
    }
    // If url not valid
    echo '404 Not found!';


?>
