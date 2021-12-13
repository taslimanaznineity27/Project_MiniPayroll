<?php
require_once "db_connections.php";
class EmployeeModel
{
    static public function showEmployeeList($table, $item, $value)
    {
        // var_dump($table, $item, $value);
        if ($item != null) {
            
            $stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item LIMIT 1" );
            
            $stmt->bindParam(":" . $item, $value, PDO::PARAM_STR);
            
            $stmt->execute();
            // var_dump($stmt->fetch());
            return $stmt->fetch();
        } else {
            $stmt = Connection::connect()->prepare("SELECT * FROM $table");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        $stmt->close();

        $stmt = null;
    }

    static public function mdlCreateEmployee($table, $data)
    {
        //get lasd user id
        $employee = Connection::connect()->prepare("SELECT id FROM $table ORDER BY id DESC LIMIT 1");
        $employee->execute();
        $employee_id = $employee->fetch();
        if ($employee_id == null) {
            $firstReg = 0;
            $employeeId = $firstReg + 1;
            if ($employeeId < 10) {
                $id_no = '0000' . $employeeId;
            } elseif ($employeeId < 100) {
                $id_no = '000' . $employeeId;
            } elseif ($employeeId < 1000) {
                $id_no = '00' . $employeeId;
            } elseif ($employeeId < 10000) {
                $id_no = '0' . $employeeId;
            }
        } else {
            $employee = Connection::connect()->prepare("SELECT id FROM $table ORDER BY id DESC LIMIT 1");
            $employee->execute();
            $employee_id = $employee->fetch();

            print_r($employee_id[0]);
            $employeeId = $employee_id[0] + 1;
            if ($employeeId < 10) {
                $id_no = '0000' . $employeeId;
            } elseif ($employeeId < 100) {
                $id_no = '000' . $employeeId;
            } elseif ($employeeId < 1000) {
                $id_no = '00' . $employeeId;
            } elseif ($employeeId < 10000) {
                $id_no = '0' . $employeeId;
            }
        }

        $new_id =  $data["id_no"].$id_no;
        $stmt = Connection::connect()->prepare("INSERT INTO $table(
            full_name, fname, mname, phone, email, 
            gender ,religion ,dob ,joining_date ,
            company_id ,dept_id ,desig_id ,salary ,
            conttries_id ,id_no ,image 
            ) VALUES (
                :full_name, :fname, :mname, :phone, :email, :gender ,
                :religion, :dob, :joining_date, :company_id, :dept_id, :desig_id ,
                :salary, :conttries_id, :id_no, :image
                
                )");
        $stmt->bindParam(":full_name", $data["full_name"], PDO::PARAM_STR);
        $stmt->bindParam(":fname", $data["fname"], PDO::PARAM_STR);
        $stmt->bindParam(":mname", $data["mname"], PDO::PARAM_STR);
        $stmt->bindParam(":phone", $data["phone"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
        $stmt->bindParam(":gender", $data["gender"], PDO::PARAM_STR);
        $stmt->bindParam(":religion", $data["religion"], PDO::PARAM_STR);
        $stmt->bindParam(":dob", $data["dob"], PDO::PARAM_STR);
        $stmt->bindParam(":joining_date", $data["joining_date"], PDO::PARAM_STR);
        $stmt->bindParam(":company_id", $data["company_id"], PDO::PARAM_STR);
        $stmt->bindParam(":dept_id", $data["dept_id"], PDO::PARAM_STR);
        $stmt->bindParam(":desig_id", $data["desig_id"], PDO::PARAM_STR);
        $stmt->bindParam(":salary", $data["salary"], PDO::PARAM_STR);
        $stmt->bindParam(":conttries_id", $data["conttries_id"], PDO::PARAM_STR);
        // $stmt->bindParam(":salary", $data["salary"], PDO::PARAM_STR);
        $stmt->bindParam(":id_no", $new_id, PDO::PARAM_STR);
        $stmt->bindParam(":image", $data["image"], PDO::PARAM_STR);
        if ($stmt->execute()) {
            // // insert initial incriment info 
            // $table1 = "employee_info";
            // $item = "id_no";
            // $value = $new_id;
            // $last_id = EmployeeModel::showEmployeeList($table1, $item, $value);
            // var_dump($last_id["id"]);
            // $table2 = "emp_sall_log";
            // $salinc = Connection::connect()->prepare("INSERT INTO $table2(employee_id, prv_salary, present_salary, incriments_salary, incriments_type,effected_date,remark)VALUES (:employee_id, :prv_salary, :present_salary, :incriments_salary, :incriments_type, :effected_date, :remark))");
            // $salinc->bindParam(":employee_id", $last_id["id"], PDO::PARAM_INT);
            // $salinc->bindParam(":prv_salary", $data["salary"], PDO::PARAM_STR);
            // $salinc->bindParam(":present_salary", $data["salary"], PDO::PARAM_STR);
            // $salinc->bindParam(":incriments_salary", "0", PDO::PARAM_STR);
            // $salinc->bindParam(":remark", 'Ctraet at time', PDO::PARAM_STR);
            // $salinc->bindParam(":effected_date", $data["joining_date"], PDO::PARAM_STR);
            // $salinc->bindParam(":incriments_type", "Intial", PDO::PARAM_STR);
            // if ($salinc->execute()) {
            //     var_dump("ok");
            //     return 'ok';
            // } else {
            //     return "error";
            // }


            return 'ok';
        } else {

            return 'error';
        }
            



        $stmt->close();

        $stmt = null;
    }
}
