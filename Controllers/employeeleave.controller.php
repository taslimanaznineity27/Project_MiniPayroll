<?php 
class EmployeeleaveController{

    static public function crtShowEmpLeaveList($item,$value){
        $table = 'emp_leave_log';
        $answer = EmployeeleaveModel::showEmpLeaveList($table,$item,$value);
        return $answer;
    }
        
    static public function ctrCreateEmployeeLeave(){
        if(isset($_POST['employee_id'])&&isset($_POST['leave_purposes'])){
            $table = 'emp_leave_log';
            $data = array(
                        'employee_id'=>$_POST['employee_id'],
                        'leave_purposes'=>$_POST['leave_purposes'],
                        'leave_start_date'=>$_POST['leave_start_date'],
                        'leave_end_date'=>$_POST['leave_end_date'],
                        'remarks'=>$_POST['remarks']
                    );
            $answer = EmployeeleaveModel::createEmployeeLeave($table,$data);
            return $answer;
        }
    }
    
}

?>