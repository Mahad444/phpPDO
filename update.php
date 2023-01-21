<?php

require "connection.php";


$update = $connection->prepare("UPDATE posts SET title = 'this is title1'  WHERE p_id = 2 ");

$update-> execute (array(
))

?>