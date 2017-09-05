<?php

require_once ("function.php");

$controller=isset($_GET["controller"])?$_GET["controller"]:"Test";
$method=isset($_GET["method"])?$_GET["method"]:"show";

C($controller,$method);

?>