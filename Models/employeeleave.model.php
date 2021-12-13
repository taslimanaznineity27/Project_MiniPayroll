<?php
require_once "db_connections.php";
class EmployeeleaveModel{
    static public function showEmpLeaveList($table, $item, $value){
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

    static public function createEmployeeLeave($table, $data){
        $leave = Connection::connect()
        ->prepare("INSERT INTO $table(employee_id, leave_purposes, leave_start_date, leave_end_date, remarks) 
        VALUES (:employee_id, :leave_purposes, :leave_start_date, :leave_end_date, :remarks)");
        $leave -> bindParam(":employee_id", $data["employee_id"], PDO::PARAM_INT);
        $leave -> bindParam(":leave_purposes", $data["leave_purposes"], PDO::PARAM_STR);
        $leave -> bindParam(":leave_start_date", $data["leave_start_date"], PDO::PARAM_STR);
        $leave -> bindParam(":leave_end_date", $data["leave_end_date"], PDO::PARAM_STR);
        $leave -> bindParam(":remarks", $data["remarks"], PDO::PARAM_STR);
        if($leave -> execute()){
            return "ok";}
        else{
            return "error";
        }
        $leave -> close();
        $leave = null;
    }
        
}


?>