<?php

require ('../private/smarty-3.1.32/libs/Smarty.class.php');
require ('../private/model.php');
require ('../private/controller.php');

$smarty = new Smarty;
$smarty->setCompileDir('../private/tmp');
$smarty->setTemplateDir('../private/views');

// TERNARY OPERATOR
$page = isset($_GET['page']) ? $page = $_GET['page'] : $page = "home";
$page = strtolower($page);
switch ($page) {
    case 'home': goHome($smarty); break;
    case 'test': goTest($smarty); break;
    case 'contact': goContact($smarty); break;
    case 'login': goLogin($smarty); break;
    default: goNotFound(); break;
}

?>
