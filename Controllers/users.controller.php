
<?php
class ControllerUsers
{
    static public function crtLoginUser()
    {
        if (isset($_POST["loginUser"])) {
            // to prevent sqlincition 
            if (
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["loginUser"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["loginPass"])
            ) {
                // chacking this informations is in DB Employees Table 
                // declearing table name 
                $table = "users";
                $items = "username";
                $value = $_POST["loginUser"];
                // now controller send this data to Model if user are exists on DB 
                // first create instance of Empolyees Model then passing this data to object 
                $response = EmployeesModel::mdlShowEmpolyee($table, $items, $value);
                // var_dump($response["username"]);

                // now if response have data ,then set it to session data to enter this system or again login from 
                if ($response["username"] == $_POST["loginUser"] && $response["password"] == $_POST["loginPass"]) {
                    // now set session data to ok 
                    $_SESSION["loggedIn"] = "ok";
                    echo '
                        <script>
                            windows.location = "home"
                        </script>
                    ';
                }
            } else {
                echo '<br><div class="alert alert-danger">User or password incorrect</div>';
            }
        }
    }

    // for showe user 
    static public function crtShowUsers($item, $value)
    {
        // declearing table name 
        $table = "users";
        // now controller send this data to Model if user are exists on DB 
        // first create instance of Empolyees Model then passing this data to object 
        $response = EmployeesModel::mdlShowEmpolyee($table, $item, $value);
        // var_dump($response);
        // now if response have data ,then set it to session data to enter this system or again login from
        return $response;

    }  
}
