<?php   
require_once(PRIVATE_PATH . 'db/Connection.php');

class CRUD{
    public $tableName;
    private $con;
    private $select;
    private $selectResult;
    private $whereData = '';

    public function __construct(){
        $this->con = (new Connection())->getConnection();
    }

    public function table($tableName){
        $this->tableName = $tableName;
        return $this;
    }

    public function select(Array $data){
        $select = [];
        foreach($data as $key => $val){
            $select[] = $this->con->real_escape_string($val);
        }
        $this->select = implode(',', $select);
        $sql = "SELECT {$this->select} FROM {$this->tableName}";
        if(!empty($this->whereData)){
            $sql .= " WHERE {$this->whereData}";
        }
        $this->selectResult = $this->con->query($sql);
        return $this;
    }

    public function get(){
        return $this->selectResult->fetch_all(MYSQLI_ASSOC);
    }

    public function where(Array $whereData){
        $select = [];
        foreach($whereData as $key => $val){
            $select[] = "{$key} = '" . $this->con->real_escape_string($val) . "'";
        }
        $this->whereData = implode(',', $select);
        return $this;
    }

    public function insert(Array $data){
        $set = [];
        foreach($data as $key => $val){
            $set[] = "{$key} = '" . $this->con->real_escape_string($val) . "'";
        }
        $set = implode(',', $set);
        echo $sql = "INSERT INTO {$this->tableName} SET {$set}";
        return $this->con->query($sql);
    }

    public function update(Array $data){
        $set    = [];
        foreach($data as $key => $val){
            $set[] = "{$key} = '" . $this->con->real_escape_string($val) . "'";
        }
        $where  = implode(' AND ', $this->where);
        $set    = implode(',', $set);
        $sql = "UPDATE {$this->tableName} SET {$set} WHERE {$where}";
        return $this->con->query($sql);
    }

    public function delete(Array $whereData){
        $where  = [];
        $sql = "DELETE FROM {$this->tableName} WHERE {$this->where}";
        return $this->con->query($sql);
    }
}




?>