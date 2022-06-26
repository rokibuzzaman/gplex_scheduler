<?php
include(PRIVATE_PATH . 'Controller/Login.php');
include(PRIVATE_PATH . 'Controller/Appointment.php');

class Dashboard{

    public function __construct(){
        (new Login)->isLoggedIn();
    }

    public function index(){
        $appointmentData = $this->getAppoinmentData();
        return view('admin.dashboard.index')->with(['appointmentData'=> $appointmentData])->render();
    }

    public function getAppoinmentData(){
        /* Check pagination */
        return (new Appointment)->getList( isset($_REQUEST['page']) ? (int)$_REQUEST['page'] : null );
    }

}