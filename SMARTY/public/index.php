<?php
session_start();

require ('../private/smarty-3.1.32/libs/Smarty.class.php');
require ('../private/model.php');
require ('../private/controller.php');

$smarty = new Smarty;
$smarty->setCompileDir('../private/tmp');
$smarty->setTemplateDir('../private/views');

//Initialisation
define('ARTICLES_PER_PAGE',5);
if (isset($_GET['newpage'])){
    $title = $_GET['title'];
    $content = $_GET['content'];
    $img = $_GET['img'];
    $imgname = $_GET['imgname'];
    newPost($title,$content,$img,$imgname);
} elseif (isset($_GET['title'])){
    $id = $_GET['id'];
    $title = $_GET['title'];
    $content = $_GET['content'];
    $img = $_GET['img'];
    $imgname = $_GET['imgname'];
    ChangePost($id,$title,$content,$img,$imgname);
}

$username = isset($_POST['username']) ? $_POST['username'] : $username = "FALSE";
$password = isset($_POST['password']) ? $_POST['password'] : $password = "FALSE";
//echo "USERNAME=" . $username ."<br>PASSWORD=" . $password;
if ($username == "admin"){
    $_SESSION['loggedin'] = true;
}

// TERNARY OPERATOR
$page = isset($_GET['page']) ? $page = $_GET['page'] : $page = "home";
$page = strtolower($page);
$pageNum = isset($_GET['pagenum']) ? $_GET['pagenum'] : $pageNum = '1';
$src = isset($_GET['src']) ? $_GET['src'] : $src = "";
$id = isset($_GET['id']) ? $_GET['id'] : $id = "";
define('SEARCH_DATA',$src);
switch ($page) {
    case 'home': goHome($smarty); break;
    case 'delete': goDelete($smarty,$id); break;
    case 'test': goTest($smarty); break;
    case 'news': goNews($smarty); break;
    case 'contact': goContact($smarty); break;
    case 'edit': goEdit($smarty,$id); break;
    case 'login': goLogin($smarty); break;
    case 'logout': goLogout($smarty); break;
    default: goNotFound($smarty); break;
}

?>
