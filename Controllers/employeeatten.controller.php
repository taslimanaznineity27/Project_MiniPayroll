<?php 
class EmployeeAtteController{  
    static public function ctrShowEmployeeAtte($item, $value){
        $table = "employee_attens";
        $answer = EmployeeAtteModel::mdlShowEmployeeAtte($table, $item, $value);
        // var_dump($answer);
        return $answer;  
    }
    static public function ctrCreateEmployeeAtte(){
        if(isset($_POST["empoloyee_id"]) && isset($_POST["atten_date"]) && isset($_POST["login"]) && isset($_POST["logout"]) && isset($_POST["atten_status"])){
            $countEmployee = count($_POST["empoloyee_id"]);
            for ($i = 0; $i < $countEmployee; $i++) {
                $data = array(
                    "empoloyee_id" => $_POST["empoloyee_id"][$i],
                    "atten_date" => $_POST["atten_date"],
                    "login" => $_POST["login"][$i],
                    "logout" => $_POST["logout"][$i],
                    "atten_status" => $_POST["atten_status"][$i]
                );
                // var_dump($data);
                $table = "employee_attens";
                $answer = EmployeeAtteModel::mdlCreateEmployeeAtte($table, $data);
                if ($answer == "ok") {
                    echo '<script>
                    swal({
                        type: "success",
                        title: "The employee attendance has been created successfully",
                        showConfirmButton: true,
                        confirmButtonText: "Close",
                        closeOnConfirm: false
                    }).then((result)=>{
                        if(result.value){
                            window.location = "index.php?route=empattview";
                        }
                    });
                    </script>';
                } else {
                    echo '<script>
                    swal({
                        type: "error",
                        title: "The employee attendance has not been created",
                        showConfirmButton: true,
                        confirmButtonText: "Close",
                        closeOnConfirm: false
                    }).then((result)=>{
                        if(result.value){
                            window.location = "index.php?route=empattview";
                        }
                    });
                    </script>';
                }
            }
        }
        else{
            // var_dump($_POST);
        }
        
    } 

}


?>