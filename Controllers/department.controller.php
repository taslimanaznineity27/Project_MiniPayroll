<?php


class DepartmentController{
    static public function ctrShowDepartments($item,$value){
        $table = "departments";
        $answer = DepartmentModel::mdlShowDepartment($table,$item,$value);
        return $answer;
    }
}