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
            if (isset($_POST["employee_id"])) {
                
                $table = "emp_sall_log";
                $data = array("employee_id" => $_POST["employee_id"]);
                $data = array("incriments_salary" => $_POST["incriments_salary"]);
                $data = array("incriments_type" => $_POST["incriments_type"]);
                $data = array("effected_date" => $_POST["effected_date"]);
                $data = array("present_salary" => $_POST["present_salary"]);
                $data = array("remark" => $_POST["remark"]);
                $answer = EmployeeincrimentsModel::mdlCreateEmployeeincriments($table, $data);

            if ($answer == "ok") {

                echo '<br><div class="alert alert-danger">Incriments Added</div>';
                echo '
                        <script>
                            windows.location = "employeeinfo"
                        </script>
                    ';
            } else {
                echo '<br><div class="alert alert-danger">Some thing Wrong</div>';
                echo '
                        <script>
                            windows.location = "addemployee"
                        </script>
                    ';
            }
            }

        }
    }
