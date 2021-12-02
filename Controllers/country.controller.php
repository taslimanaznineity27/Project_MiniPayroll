<?php 

class CountryController{
    static public function crlShowCountry($item, $value){
        $table = "countries";
        $answer = CountryModel::mdlShowCountry($table, $item, $value);
        return $answer;
        
    }
}