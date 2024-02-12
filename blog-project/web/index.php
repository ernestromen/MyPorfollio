<?php
// phpinfo();
// die();
$link = mysqli_connect('db', 'root', 'mypass', 'icar');
// mysqli_query($link, "SET NAMES utf8");
$sql = "SELECT * FROM posts";
       
        

$result = mysqli_query($link, $sql);

var_dump($result);die;