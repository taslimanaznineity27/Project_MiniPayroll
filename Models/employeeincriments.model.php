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
        static public function mdlCreateEmployeeincrimentsTest($table, $data){
        //get selected employee information 
        // var_dump($data);
        $item = 'id';
        $value = $data["employee_id"];
        $curEmpinfo = EmployeeController::crtShowEmployeeList($item, $value);
        //get current employee prv incriments information 
        
        $item = "employee_id";
        $value = $data["employee_id"];

        $curEmpincriments = EmployeeincrimentsController::ctrShowEmployeeincriments($item, $value);
        $curEmpincriments = 
        var_dump($curEmpincriments);
        echo '<br>';
        // var_dump($curEmpinfo);
        if($curEmpincriments !== null){
            
            echo "Employee already have a incriments record";
        }else{
            // $table = "emp_sall_log";
            //get current employee prv incriments information

            $salinc = Connection::connect()->
            prepare("INSERT INTO $table(employee_id, prv_salary, present_salary, incriments_salary, incriments_type,effected_date,remark)
            VALUES (:employee_id, :prv_salary, :present_salary, :incriments_salary, :incriments_type, :effected_date, :remark))");
            
            $salinc->bindParam(":employee_id", $data["employee_id"], PDO::PARAM_INT);
            $salinc->bindParam(":prv_salary", $data["prv_salary"], PDO::PARAM_STR);
            $salinc->bindParam(":present_salary", $data["present_salary"], PDO::PARAM_STR);
            $salinc->bindParam(":incriments_salary", $data["incriments_salary"], PDO::PARAM_STR);
            $salinc->bindParam(":remark", $data["remark"], PDO::PARAM_STR);
            $salinc->bindParam(":effected_date", $data["effected_date"], PDO::PARAM_STR);
            $salinc->bindParam(":incriments_type", $data["incriments_type"], PDO::PARAM_STR);
            if ($salinc->execute()) {
                return "ok";
            } else {
                return "error";
            }





            
        }




        // $salinc = Connection::connect()->prepare("INSERT INTO $table(employee_id, prv_salary, present_salary, incriments_salary, incriments_type,effected_date,remark)VALUES (:employee_id, :prv_salary, :present_salary, :incriments_salary, :incriments_type, :effected_date, :remark))");
        // $salinc->bindParam(":employee_id", $data["employee_id"], PDO::PARAM_INT);
        // $salinc->bindParam(":prv_salary", $data["salary"], PDO::PARAM_STR);
        // $salinc->bindParam(":present_salary", $data["salary"], PDO::PARAM_STR);
        // $salinc->bindParam(":incriments_salary", 0, PDO::PARAM_STR);
        // $salinc->bindParam(":remark", 'Ctraet at time', PDO::PARAM_STR);
        // $salinc->bindParam(":effected_date", $data["joining_date"], PDO::PARAM_STR);
        // $salinc->bindParam(":incriments_type", 1, PDO::PARAM_STR);
        // if ($salinc->execute()) {
        //     return "ok";
        // } else {
        //     return "error";
        // }
        // $salinc->close();
        // $salinc = null;
        }


        static public function mdlCreateEmployeeincriments($table, $data){
            var_dump('New Function are calling');
        $salinc = Connection::connect()->prepare("INSERT INTO $table(employee_id, prv_salary, present_salary, incriments_salary, incriments_type,effected_date,remark)
            VALUES (:employee_id, :prv_salary, :present_salary, :incriments_salary, :incriments_type, :effected_date, :remark))");

        $salinc->bindParam(":employee_id", $data["employee_id"], PDO::PARAM_INT);
        $salinc->bindParam(":prv_salary", $data["prv_salary"], PDO::PARAM_STR);
        $salinc->bindParam(":present_salary", $data["present_salary"], PDO::PARAM_STR);
        $salinc->bindParam(":incriments_salary", $data["incriments_salary"], PDO::PARAM_STR);
        
        $salinc->bindParam(":effected_date", $data["effected_date"], PDO::PARAM_STR);
        $salinc->bindParam(":incriments_type", $data["incriments_type"], PDO::PARAM_STR);
        $salinc->bindParam(":remark", $data["remark"], PDO::PARAM_STR);
        if ($salinc->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }
}
?>