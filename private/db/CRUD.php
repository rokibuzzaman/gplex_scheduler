<?php   
require_once(PRIVATE_PATH . 'db/Connection.php');

class CRUD{
    public $tableName;
    private $con;

    public function __construct(){
        $this->con = (new Connection())->getConnection();
    }

    public function table($tableName){
        $this->tableName = $tableName;
        return $this;
    }

    public function insert(Array $data){
        $set = [];
        foreach($data as $key => $val){
            $set[] = "{$key} = '{$val}'";
        }
        $set = implode(',', $set);
        echo $sql = "INSERT INTO {$this->tableName} SET {$set}";
        return $this->con->query($sql);
    }

    public function update(Array $whereData, Array $data){
        $set    = [];
        $where  = [];
        foreach($whereData as $key => $val){
            $where[] = "{$key} = '{$val}'";
        }
        foreach($data as $key => $val){
            $set[] = "{$key} = '{$val}'";
        }
        $where  = implode(' AND ', $where);
        $set    = implode(',', $set);
        $sql = "UPDATE {$this->tableName} SET {$set} WHERE {$where}";
        return $this->con->query($sql);
    }

    public function delete(Array $whereData){
        $where  = [];
        foreach($whereData as $key => $val){
            $where[] = "{$key} = '{$val}'";
        }
        $where  = implode(' AND ', $where);
        $sql = "DELETE FROM {$this->tableName} WHERE {$where}";
        return $this->con->query($sql);
    }
}




?>