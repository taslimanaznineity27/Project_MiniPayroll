<?php 

class CompanyController {
    static public function ctrShowCompanies($item, $value) {
        $table = "companies";
        $answer = CompanyModel::mdlShowCompany($table, $item, $value);
        return $answer;
    }
}