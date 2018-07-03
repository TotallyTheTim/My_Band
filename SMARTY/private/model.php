<?php
require 'db.php';
function make_conection()
{
//    $mysqli =  new mysqli('localhost','root','','smarty');
    $mysqli =  new mysqli('localhost','24721','kmdiydsz','24721_global');
    if ($mysqli->connect_errno) {
        die('Connection Error: ' . $mysqli->connect_errno . '<br>');
    }
    return $mysqli;
}

function getData() {
    $mysqli = make_conection();
    $query = "SELECT name FROM test";
    $stmt = $mysqli->prepare($query) or die ('Error preparing Data.<br>');
    $stmt->bind_result($name) or die ('Error binding results Data.<br>');
    $stmt->execute() or die ('Error executing Data.<br>');
    $results = array();
    while ($result = $stmt->fetch()) {
//        var_dump($name);
        $results[] = $name;
//        var_dump($result);

    }
//    $results = array(1000, 1001, 1002);
    return $results;
}



function getMyTitle($database){
    $mysqli = make_conection();                                             //WERKT
    $query = "SELECT title FROM home";                         //WERKT
    $stmt = $mysqli->prepare($query) or die ('Error preparing Title.<br>');
    $stmt->bind_result($title) or die ('Error binding results Title.<br>');
    $stmt->execute() or die ('Error executing Title.<br>');
    $stmt->fetch();
//    var_dump($title);
    return $title;
}
function getMyAuthor($database){
    $mysqli = make_conection();
    $query = "SELECT author FROM $database WHERE id = 1";
    $stmt = $mysqli->prepare($query) or die ('Error preparing Author.<br>');
    $stmt->bind_result($author) or die ('Error binding results Author.<br>');
    $stmt->execute() or die ('Error executing Author.<br>');
    $stmt->fetch();
    return $author;
}
function getMyText($database){
    $mysqli = make_conection();
    $query = "SELECT text FROM $database WHERE id = 1";
    $stmt = $mysqli->prepare($query) or die ('Error preparing Text.<br>');
    $stmt->bind_result($text) or die ('Error binding results Text.<br>');
    $stmt->execute() or die ('Error executing Text.<br>');
    $stmt->fetch();
    return $text;
}

function getMyImg($database){
    $mysqli = make_conection();
    $query = "SELECT banner_url FROM $database WHERE id = 1";
    $stmt = $mysqli->prepare($query) or die ('Error preparing Img.<br>');
    $stmt->bind_result($img) or die ('Error binding results Img.<br>');
    $stmt->execute() or die ('Error executing Img.<br>');
    $stmt->fetch();
    return $img;
}



?>