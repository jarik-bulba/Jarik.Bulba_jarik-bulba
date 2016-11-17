<?php

class DB {
    protected $db_name = 'worksite';
    protected $db_user = 'users';
    protected $db_pass = 'nodive1996';
    protected $db_host = 'localhost';

    public function connect(){
        $connection = mysqli_connect($this->db_host, $this->db_user, $this->db_pass);
        mysqli_select_db($this->db_name);
        return true;
    }

    public function processRowSet($rowSet, $singleRow = false){

        $resultArray = array();

        while($row = mysqli_fetch_assoc($rowSet)){
            array_push($resultArray, $row);
        }
        if($singleRow === true){
            return $resultArray[0];
            return $resultArray;
        }
    }

    public function select($table, $where){
        $sql = "SELECT * FROM $table WHERE $where";
        $result = mysqli_query($sql);
        if(mysqli_num_rows($result) == 1)
            return $this->processRowSet($result, true);
            return $this->processRowSet($result);
    }

    public function update($data, $table, $where){
        foreach ($data as $column => $value){
            $sql = "UPDATE $table SET $column => $value WHERE $where";
            mysqli_query($sql) or die (mysqli_errno());
        }
        return true;
    }

    public function insert($date, $table){
        $columns = "";
        $values = "";
        foreach ($data as $column => $value) {
            $columns .= ($columns == "") ? "" : ", ";
            $columns .= $column;
            $values .= ($values == "") ? "" : ", ";
            $values .= $value;
        }

        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        mysqli_query($sql) or die (mysqli_error());

        return mysqli_insert_id();
    }

}