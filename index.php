<?php
// its controllers
require_once "Controllers/template.controller.php";
require_once "Controllers/users.controller.php";

// its Models 
require_once "Models/users.model.php";


$template = new ControllersTemplate();
$template->crtTemplate();
