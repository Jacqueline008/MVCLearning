<?php

require_once "libs/Controller/TestController.class.php";
require_once "libs/Model/TestModel.class.php";
require_once "libs/View/TestView.class.php";

$testController=new TestController();
$testController->show();

?>