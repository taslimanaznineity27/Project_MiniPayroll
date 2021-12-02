<?php

class EmployeeController{
    static public function crtShowEmployeeList($item,$value){
        $table = "employee_info";
        $response = EmployeeModel::showEmployeeList($table,$item,$value);
        return $response;
    }
}
