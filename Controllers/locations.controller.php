<?php

class LocationsController{

    static public function crtShowLocation($item, $value){
        $table = 'locations';
        $response = LocationModel::mdlShowLocation($table, $item, $value);
        return $response;
    }

}