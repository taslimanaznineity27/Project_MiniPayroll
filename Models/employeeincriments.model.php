<?php
require_once "db_connections.php";
    class EmployeeincrimentsModel{
        static public function mdlShowEmployeeincriments($table, $item, $value){
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


        static public function mdlCreateEmployeeincriments($table, $data){
        $table = "emp_sall_log";
        $salinc = Connection::connect()->prepare("INSERT INTO $table(employee_id, prv_salary, present_salary, incriments_salary, incriments_type,effected_date,remark)VALUES (:employee_id, :prv_salary, :present_salary, :incriments_salary, :incriments_type, :effected_date, :remark))");
        $salinc->bindParam(":employee_id", $new_id, PDO::PARAM_INT);
        $salinc->bindParam(":prv_salary", $data["salary"], PDO::PARAM_STR);
        $salinc->bindParam(":present_salary", $data["salary"], PDO::PARAM_STR);
        $salinc->bindParam(":incriments_salary", 0, PDO::PARAM_STR);
        $salinc->bindParam(":remark", 'Ctraet at time', PDO::PARAM_STR);
        $salinc->bindParam(":effected_date", $data["joining_date"], PDO::PARAM_STR);
        $salinc->bindParam(":incriments_type", 1, PDO::PARAM_STR);
        if ($salinc->execute()) {
            return "ok";
        } else {
            return "error";
        }
        $salinc->close();
        $salinc = null;
        }
    }
?>