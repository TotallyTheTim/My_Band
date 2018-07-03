<?php
/* Smarty version 3.1.32, created on 2018-07-03 09:29:57
  from 'D:\_School\_Bewijzenmap\PROJ\SMARTY\private\views\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b3b25f5cb41d6_36188898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67b1ae5aa9d95fd7959861dd3b377df36d85de94' => 
    array (
      0 => 'D:\\_School\\_Bewijzenmap\\PROJ\\SMARTY\\private\\views\\header.tpl',
      1 => 1530602996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3b25f5cb41d6_36188898 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
</head>
<body>
<div id="banner"
        style="
        background: url('<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
') no-repeat center center;
                background-size: cover;
                                "
>
</div>
<div id="header"><a href="#"><img id="logo" src="./img/logo.png"></a><a class="coolbutton" href="index.php?page=contact">CONTACT US</a></div>
<?php echo '<script'; ?>
>
    setTimeout(function(){ document.getElementById("banner").style.opacity =  "0.4  "; }, 1200);
    setTimeout(function(){ document.getElementById("banner").style.height =  "10em"; }, 1);
    setTimeout(function(){ document.getElementById("header").style.opacity =  "1"; }, 1200);

<?php echo '</script'; ?>
>
<div class="shadowBox"></div><?php }
}
