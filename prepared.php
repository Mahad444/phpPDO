<?php

require "connection.php";

$title = "title5";
$body = "this is body 5";

$insert = $connection ->prepare("INSERT INTO posts (title,body) VALUES(?,?)");

$insert ->execute(array(
    $title,
    $body
))




?>