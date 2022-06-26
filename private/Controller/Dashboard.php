<?php
include(PRIVATE_PATH . 'Controller/Login.php');
include(PRIVATE_PATH . 'Controller/Appoinment.php');

class Dashboard{

    public function __construct(){
        (new Login)->isLoggedIn();
    }

    public function index(){
        $appointments = $this->getAppoinmentData();
        return view('admin.dashboard.index')->with(['appoint    ments'=> $appointments])->render();
    }

    public function getAppoinmentData(){
        return (new Appoinment)->getList();
    }

}