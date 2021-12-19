<?php 
require_once "db_connections.php";
class EmployeeAtteModel{
    static public function mdlShowEmployeeAtte($table, $item, $value){
        if($item != null){
            $sql = "SELECT * FROM $table WHERE $item = :$item ORDER BY id DESC";

            $stmt = Connection::connect()->prepare($sql);

            $stmt->bindParam(":".$item, $value, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch();
        }
        else{ 
            $sql = "SELECT * FROM $table ORDER BY id DESC";

            $stmt = Connection::connect()->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        }
    }
    static public function mdlCreateEmployeeAtte($table, $data){
        $sql = "INSERT INTO $table (empoloyee_id, atten_date, login, logout, atten_status) VALUES (:empoloyee_id, :atten_date, :login, :logout, :atten_status)";
        // var_dump($data);
        $stmt = Connection::connect()->prepare($sql);

        $stmt->bindParam(":empoloyee_id", $data["empoloyee_id"], PDO::PARAM_STR);
        $stmt->bindParam(":atten_date", $data["atten_date"], PDO::PARAM_STR);
        $stmt->bindParam(":login", $data["login"], PDO::PARAM_STR);
        $stmt->bindParam(":logout", $data["logout"], PDO::PARAM_STR);
        $stmt->bindParam(":atten_status", $data["atten_status"], PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
        }
        else{
            return "error";
        }
    }

}
?>