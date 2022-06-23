<?php
    class Connection
    {
        public $connection;

        public function getConnection(){
            $config = config();
            $this->connection = new mysqli($config['DB_HOST'], $config['DB_USERNAME'], $config['DB_PASSWORD'], $config['DB_NAME']);
            if($this->connection->connect_errno){
                die("DB connection failed!");
            }
            return $this->connection;
        }

        /* public function check($a)
        {
            $return = mysqli_real_escape_string($this->connection,$a);
            return $return;
        } */

    }




?>