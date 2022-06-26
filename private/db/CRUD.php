<?php
require_once(PRIVATE_PATH . 'db/Connection.php');

class CRUD{
    public $tableName;
    private $con;
    private $select;
    private $selectSql;
    private $whereData = '';
    private $orderData = '';
    private $perPage;

    public function __construct(){
        $this->perPage  = config()['PAGINATION_PER_PAGE'] ?? 5;
        $this->con      = (new Connection())->getConnection();
    }

    public function table($tableName){
        $this->tableName = $tableName;
        return $this;
    }

    public function select(Array $data){
        $select = [];
        foreach($data as $key => $val){
            $select[] = $val;
        }
        $this->select = implode(',', $select);
        $this->selectSql = "SELECT {$this->select} FROM {$this->tableName}";
        return $this;
    }

    /**
     * orderBy method only works after select method call
     */
    public function orderBy(Array $orderData){
        $orderBy = [];
        foreach($orderData as $key => $val){
            $orderBy[] = "{$key} {$val}";
        }
        $this->orderData = implode(' ,', $orderBy);
        return $this;
    }

    /**
     * get method only works after select method call
     */
    public function get(){
        if(!empty($this->whereData)){
            $this->selectSql .= " WHERE {$this->whereData}";
        }
        if(!empty($this->orderData)){
            $this->selectSql .= " ORDER BY {$this->orderData}";
        }
        $selectResult = $this->con->query($this->selectSql);
        return $selectResult->fetch_all(MYSQLI_ASSOC);
    }

    /**
     * For pagination
     */
    public function getFrom($startFrom = null){
        if(!empty($this->whereData)){
            $this->selectSql .= " WHERE {$this->whereData}";
        }
        if(!empty($this->orderData)){
            $this->selectSql .= " ORDER BY {$this->orderData}";
        }
        $offest = '';
        if($startFrom){
            $offest = "OFFSET " . $startFrom;
        }
        $this->selectSql .= " LIMIT {$this->perPage} {$offest}";
        $selectResult = $this->con->query($this->selectSql);

        /* Counting page */
        $count = $this->con->query("SELECT COUNT(*) as count FROM {$this->tableName}")->fetch_all(MYSQLI_ASSOC)[0]['count'];
        return [
            'page_start'    => $startFrom,
            'per_page'      => $this->perPage,
            'total_page'    => ceil( $count / $this->perPage),
            'data'          => $selectResult->fetch_all(MYSQLI_ASSOC)
        ];
    }

    public function where(Array $whereData){
        $select = [];
        foreach($whereData as $key => $val){
            $select[] = "{$key} = '" . $this->con->real_escape_string($val) . "'";
        }
        $this->whereData = implode(' AND ', $select);
        return $this;
    }

    public function insert(Array $data){
        $set = [];
        foreach($data as $key => $val){
            $set[] = "{$key} = '" . $this->con->real_escape_string($val) . "'";
        }
        $set = implode(',', $set);
        $sql = "INSERT INTO {$this->tableName} SET {$set}";
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

    public function delete(){
        $sql = "DELETE FROM {$this->tableName} WHERE {$this->where}";
        return $this->con->query($sql);
    }
}




?>