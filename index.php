<?php
// its controllers
require_once "Controllers/template.controller.php";
require_once "Controllers/users.controller.php";
require_once "Controllers/locations.controller.php";
require_once "Controllers/company.controller.php";
require_once "Controllers/department.controller.php";
require_once "Controllers/designations.controller.php";
require_once "Controllers/announcement.controller.php";
require_once "Controllers/employeeinfo.controller.php";
require_once "Controllers/country.controller.php";



// its Models 
require_once "Models/users.model.php";
require_once "Models/locations.model.php";
require_once "Models/company.model.php";
require_once "Models/department.model.php";
require_once "Models/designations.model.php";
require_once "Models/announcement.model.php";
require_once "Models/employeeinfo.model.php";
require_once "Models/country.model.php";




$template = new ControllersTemplate();
$template->crtTemplate();
