<?php

class EmployeeController{
    static public function crtShowEmployeeList($item,$value){
        $table = "employee_info";
        $response = EmployeeModel::showEmployeeList($table,$item,$value);
        return $response;
    }
    static public function crtShowEmployee($item,$value){
        $table = "employee_info";
        if(isset($_GET['userId'])){
            $response = EmployeeModel::showEmployeeList($table,$item,$value);
            // var_dump($response);
            return $response;
        }

       
    }
    static public function ctrCreateEmployee(){
        if(isset($_POST["full_name"])){
            if( 
                preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["full_name"])&&
                preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["fname"])&&
                preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["mname"]) &&
                preg_match('/^[0-9]+$/', $_POST["phone"]) &&
                preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["email"]) 
                // &&
                // preg_match('/^[a-zA-Z0-9]+$/', $_POST["password"])
            ){

            
                $photo = "";
                if (isset($_FILES["image"]["tmp_name"])) {
                    $randomNumber = mt_rand(100, 999);
                    list($width, $height
                    ) = getimagesize($_FILES["image"]["tmp_name"]);

                    $newWidth = 500;
                    $newHeight = 500;

                    /*=============================================
					Let's create the folder for each user
					=============================================*/

                    $folder = "views/img/users/" . $randomNumber;

                    mkdir($folder, 0755);

                    /*=============================================
					PHP functions depending on the image
					=============================================*/

                    if ($_FILES["image"]["type"] == "image/jpeg") {

                        $randomNumber = mt_rand(100, 999);

                        $photo = "views/img/users/" . $randomNumber . "/" . $randomNumber . ".jpg";

                        $srcImage = imagecreatefromjpeg($_FILES["image"]["tmp_name"]);

                        $destination = imagecreatetruecolor($newWidth, $newHeight);

                        imagecopyresized($destination, $srcImage, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

                        imagejpeg($destination, $photo);
                    }

                    if ($_FILES["image"]["type"] == "image/png") {

                        $randomNumber = mt_rand(100, 999);

                        $photo = "views/img/users/" . $randomNumber . "/" . $randomNumber . ".png";

                        $srcImage = imagecreatefrompng($_FILES["image"]["tmp_name"]);

                        $destination = imagecreatetruecolor($newWidth, $newHeight);

                        imagecopyresized($destination, $srcImage, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

                        imagepng($destination, $photo);
                    }
                }
                
                $table = "employee_info";
                $checkYear = date('Ym', strtotime($_POST["joining_date"]));
                $id_no = $checkYear;
                $data = array(
                    "full_name" => $_POST["full_name"],
                    "fname" => $_POST["fname"],
                    "mname" => $_POST["mname"],
                    "phone" => $_POST["phone"],
                    "email" => $_POST["email"],
                    "gender" => $_POST["gender"],
                    "religion" => $_POST["religion"],
                    "dob" => $_POST["dob"],
                    "joining_date" => $_POST["joining_date"],
                    "company_id" => $_POST["company_id"],
                    "dept_id" => $_POST["dept_id"],
                    "desig_id" => $_POST["desig_id"],
                    "salary" => $_POST["salary"],
                    "conttries_id" => $_POST["conttries_id"],
                    "id_no" => $id_no,
                    "image" => $photo
                );
                // print_r($data);
                $response = EmployeeModel::mdlCreateEmployee($table,$data);

                if($response == "ok"){

                    echo '<br><div class="alert alert-danger">Employee Added</div>';
                    echo '
                        <script>
                            windows.location = "employeeinfo"
                        </script>
                    ';
                }else{
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

    // static public function ctrViewEmployee($id){
    //     $table = "employee_info";
    //     $response = EmployeeModel::mdlViewEmployee($table,$id);
    //     return $response;
    // }
}
