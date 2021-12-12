<?php
//get all contorller from folder
foreach (glob("Controllers/*.php") as $filename) {
    require_once $filename;
}



// its controllers
// require_once "Controllers/template.controller.php";
// require_once "Controllers/users.controller.php";
// require_once "Controllers/locations.controller.php";
// require_once "Controllers/company.controller.php";
// require_once "Controllers/department.controller.php";
// require_once "Controllers/designations.controller.php";
// require_once "Controllers/announcement.controller.php";
// require_once "Controllers/employeeinfo.controller.php";
// require_once "Controllers/country.controller.php";

// // its models added 
// require_once "Controllers/employeeincriments.controller.php";
// require_once "Controllers/employeeleave.controller.php";
// require_once "Controllers/employeepromotin.controller.php";


//get all models from folder
foreach (glob("Models/*.php") as $filename) {
    require_once $filename;
}

// // its Models 
// require_once "Models/users.model.php";
// require_once "Models/locations.model.php";
// require_once "Models/company.model.php";
// require_once "Models/department.model.php";
// require_once "Models/designations.model.php";
// require_once "Models/announcement.model.php";
// require_once "Models/employeeinfo.model.php";
// require_once "Models/country.model.php";


// // its Models added
// require_once "Models/employeepromotion.model.php";
// require_once "Models/employeeleave.model.php";
// require_once "Models/employeeincriments.model.php";




$template = new ControllersTemplate();
$template->crtTemplate();
