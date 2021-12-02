<?php
require_once "db_connections.php";
class CountryModel{
    static public function mdlShowCountry($table, $item, $value){
        if ($item != null) {
            $sql = "SELECT * FROM $table WHERE $item = :$item";

            $stmt = Connection::connect()->prepare($sql);

            $stmt->bindParam(":" . $item, $value, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch();
        } else {
            $sql = "SELECT * FROM $table";

            $stmt = Connection::connect()->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        }
        $stmt->close();

        $stmt = null;
    }
    
}