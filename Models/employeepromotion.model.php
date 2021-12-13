<?php 

require_once "db_connections.php";

class EmployeePromotionModel{
    static public function mdlShowEmployeePromotion($table, $item, $value){
        if($item != null){
            $stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
            $stmt -> bindParam(":".$item, $value, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        }else{
            $stmt = Connection::connect()->prepare("SELECT * FROM $table");
            $stmt -> execute();
            return $stmt -> fetchAll();
        }
        $stmt -> close();   
        $stmt = null;
    }

    static public function mdlCreateEmployeePromotion($table, $data){
        $stmt = Connection::connect()
        ->prepare("INSERT INTO $table(employee_id, promotion_type, old_deg_id, new_deg_id, effected_date) 
        VALUES (:employee_id, :promotion_type, :old_deg_id, :new_deg_id, :effected_date)");
        $stmt -> bindParam(":employee_id", $data["employee_id"], PDO::PARAM_INT);
        $stmt -> bindParam(":promotion_type", $data["promotion_type"], PDO::PARAM_STR);
        $stmt -> bindParam(":old_deg_id", $data["old_deg_id"], PDO::PARAM_INT);
        $stmt -> bindParam(":new_deg_id", $data["new_deg_id"], PDO::PARAM_INT);
        $stmt -> bindParam(":effected_date", $data["effected_date"], PDO::PARAM_STR);
        if($stmt -> execute()){
            return "ok";
        }else{
            return "error";
        }
        $stmt -> close();
        $stmt = null;
        
    }

}