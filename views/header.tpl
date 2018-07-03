<!doctype html>
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
        background: url('{$img}') no-repeat center center;
        {*background: url('{$img}');*}
        background-size: cover;
        {*background-repeat: no-repeat;*}
        {*background-attachment: fixed;*}
        {*background-position:center top!important;*}
        "
>
{*<img src="{$img}">*}
</div>
<div id="header"><a href="#"><img id="logo" src="./img/logo.png"></a><a class="coolbutton" href="index.php?page=contact">CONTACT US</a></div>
<script>
    setTimeout(function(){ document.getElementById("banner").style.opacity =  "0.4  "; }, 1200);
    setTimeout(function(){ document.getElementById("banner").style.height =  "10em"; }, 1);
    setTimeout(function(){ document.getElementById("header").style.opacity =  "1"; }, 1200);

</script>
<div class="shadowBox"></div>