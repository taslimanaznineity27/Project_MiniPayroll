<?php 

class DesignationsController{

    static public function ctrShowDesignations($item, $value){
        $table = "designations";
        $answer = DesignationsModel::mdlShowDesignations($table, $item, $value);
        return $answer;
    }

} 