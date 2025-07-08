<?php

class TASK {

    private $table = "tasks";
    private $conn;

    public $id;
    public $task;
    public $is_completed;

    public function __construct($db){
        $this->conn = $db;
    }
    public function create(){
        $query = "INSERT INTO " . $this->table . " (task) VALUES (?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s',$this->task);
        return $stmt->execute();
        
    }
    



}