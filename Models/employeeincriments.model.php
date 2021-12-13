<?php
require_once "db_connections.php";
    class EmployeeincrimentsModel{
        static public function mdlShowEmployeeincriments($table, $item, $value){
            if($item != null){
                $stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item order by id desc");
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
 


        //insert into employeeincriments table
        static public function mdlCreateEmployeeincriments($table, $data){
        var_dump($table);

        // array(7) { 
        //     ["employee_id"]=> string(1) "1" 
        //     ["incriments_salary"]=> string(4) "1000" 
        //     ["incriments_type"]=> string(7) "Monthly" 
        //     ["effected_date"]=> string(10) "2021-12-13" 
        //     ["present_salary"]=> string(8) "25550.00" 
        //     ["prv_salary"]=> string(8) "25550.00" 
        //     ["remark"]=> string(2) "ok" 
        // }
        $salinc = Connection::connect()
        ->prepare("INSERT INTO $table(employee_id, prv_salary, present_salary, incriments_salary, incriments_type,effected_date,remark)
                            VALUES (:employee_id, :prv_salary, :present_salary, :incriments_salary, :incriments_type, :effected_date, :remark)");
        $salinc->bindParam(":employee_id", $data["employee_id"], PDO::PARAM_INT);
        $salinc->bindParam(":prv_salary", $data["prv_salary"], PDO::PARAM_INT);
        $salinc->bindParam(":present_salary", $data["present_salary"], PDO::PARAM_INT);
        $salinc->bindParam(":incriments_salary", $data["incriments_salary"], PDO::PARAM_INT);
        $salinc->bindParam(":remark", $data["remark"], PDO::PARAM_STR);
        $salinc->bindParam(":effected_date", $data["joining_date"], PDO::PARAM_STR);
        $salinc->bindParam(":incriments_type", $data["incriments_type"], PDO::PARAM_STR);
        if ($salinc->execute()) {
            return "ok";
        } else {
            return "error";
        }
        $salinc->close();
        $salinc = null;
        }


       
}
