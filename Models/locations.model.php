<?php
require_once "db_connections.php";
class LocationModel{
    static public function mdlShowLocation($table, $item, $value){
        if($item != null){
            $sql = "SELECT * FROM $table WHERE $item = :$item";

            $stmt = Connection::connect()->prepare($sql);

            $stmt->bindParam(":".$item, $value, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch();}
        else{
            $stmt = Connection::connect()->prepare("SELECT * from $table");

            $stmt->execute();

            return $stmt->fetchAll();
        }
        $stmt -> close();

		$stmt = null;
    }
}