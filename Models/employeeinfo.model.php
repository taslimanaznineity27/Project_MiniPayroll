<?php
require_once "db_connections.php";
class EmployeeModel{
    static public function showEmployeeList($table, $item, $value){
        if($item != null){
            $stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
            $stmt->bindParam(":".$item, $value, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll();
        }else{
            $stmt = Connection::connect()->prepare("SELECT * FROM $table");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        $stmt->close();

        $stmt = null;
    }
}