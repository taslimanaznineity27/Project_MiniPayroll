<?php 
    class EmployeeincrimentsController 
    {
        static public function ctrShowEmployeeincriments($item, $value)
        {
            $table = "employeeincriments";
            $answer = EmployeeincrimentsModel::mdlShowEmployeeincriments($table, $item, $value);
            return $answer;
        }

        static public function crtCreateEmployeeincriments()
        {
            if (isset($_POST["employee_id"]) && isset($_POST["incriments_salary"])) {

          
                
                $table = "emp_sall_log";

                $data = array(
                "employee_id" => $_POST["employee_id"],
                "incriments_salary" => $_POST["incriments_salary"],
                "incriments_type" => $_POST["incriments_type"],
                "effected_date" => $_POST["effected_date"],
                "present_salary" => $_POST["present_salary"],
                "prv_salary" => $_POST["present_salary"],
                "remark" => $_POST["remark"]
                ); 
                
                // var_dump($data);
                $answer = EmployeeincrimentsModel::mdlCreateEmployeeincriments($table, $data);

            if ($answer == "ok") {

                echo '<div class="alert alert-danger">Incriments Added</div>';
                echo '
                        <script>
                            windows.location = "employeeinfo"
                        </script>
                    ';
            } else {
                echo '<br><div class="alert alert-danger">Some thing Wrong</div>'; 
            }
            }

        }
    }
