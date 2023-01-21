<?php

 require 'connection.php';

//  $id = 4 ;

 $delete = $connection->prepare("DELETE FROM posts WHERE p_id = 1");

 $delete->execute(array());