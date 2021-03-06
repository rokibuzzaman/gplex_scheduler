<?php
class View{

    private $viewPath;
    private $data=null;

    public function __construct($viewPath){
        $this->viewPath = $this->generateViewFilePath($viewPath);
    }

    private function generateViewFilePath($viewPath){
        return PRIVATE_PATH . "view/" . str_replace('.', '/', $viewPath) . '.php';
    }

    public function with(Array $data){
        $this->data = $data;
        return $this;
    }

    public function render(){
        $this->data ? extract($this->data) : '';
        include($this->viewPath);
    }

}