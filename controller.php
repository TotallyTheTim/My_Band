<?php

function goTest($smarty){
    $vars = getData();
    $smarty->assign('vars', $vars);
    $smarty->assign('voornaam','Tim');
    $smarty->display('test.tpl');
}

function goHome($smarty){

    $author = getMyAuthor("home");
    $text = getMyText("home");
    $img = getMyImg("home");
    $title = getMyTitle("home");
    $smarty->assign('title',$title);
    $smarty->assign('text',$text);
    $smarty->assign('author',$author);
    $smarty->assign('img',$img);
    $smarty->display('header.tpl');
    $smarty->display('home.tpl');
    $smarty->display('footer.tpl');
}

function goLogin($smarty){

}
function goContact($smarty){
    $smarty->display('contact.tpl');
}