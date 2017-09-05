<?php

require_once ("function.php");
require_once ("config.php");

$sm=ORG("smarty","Smarty",$viewconfig);

$controller=isset($_GET["controller"])?$_GET["controller"]:"Test";
$method=isset($_GET["method"])?$_GET["method"]:"show";
C($controller,$method);

?>

