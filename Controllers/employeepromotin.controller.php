<?php 
class EmployeepromotinController 
{
    static public function ctrShowEmployeepromotin($item, $value)
    {
        $table = "emp_deg_log";

        $answer = EmployeePromotionModel::mdlShowEmployeePromotion($table, $item, $value);

        return $answer;
    }
    static public function ctrCreateEmployeePromotion(){
        if(isset($_POST["employee_id"]) && isset($_POST["old_deg_id"])){
            $table = "emp_deg_log";
            $data = array("employee_id"=>$_POST["employee_id"],
                        "old_deg_id"=>$_POST["old_deg_id"],
                        "new_deg_id" => $_POST["new_deg_id"],
                        "effected_date"=>$_POST["effected_date"],
                        "promotion_type"=>$_POST["promotion_type"]);
            $answer = EmployeePromotionModel::mdlCreateEmployeePromotion($table, $data);
            return $answer;

            if($answer == "ok"){
                echo '<script>
                swal({
                    type: "success",
                    title: "Employee Promotion",
                    text: "Employee Promotion Successfully Created",
                    showConfirmButton: true,
                    confirmButtonText: "Close",
                    closeOnConfirm: false
                }).then((result)=>{
                    if(result.value){
                        window.location = "employeepromotion";
                    }
                });
                </script>';
            }else{
                echo '<script>
                swal({
                    type: "error",
                    title: "Employee Promotion",
                    text: "Employee Promotion Not Created",
                    showConfirmButton: true,
                    confirmButtonText: "Close",
                    closeOnConfirm: false
                }).then((result)=>{
                    if(result.value){
                        window.location = "employeepromotion";
                    }
                });
                </script>';
            }
        }

    }
}

?>