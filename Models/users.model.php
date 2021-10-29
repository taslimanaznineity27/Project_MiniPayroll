<?php
require_once "db_connections.php";
class EmployeesModel
{
    static public function mdlShowEmpolyee($table, $item, $value)
    {
        $stmt = Connection::connect()->prepare("SELECT* from $table where $item =:item");
        $stmt->bindParam(':item', $value, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }
}
