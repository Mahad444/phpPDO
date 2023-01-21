<?php
try{
$host  = "localhost";
$dbname ="blogpost";
$user="user";
$password ="password";

$connection = new PDO("mysql:host=$host; dbname=$dbname","$user","$password");

if ($connection ==  true){
    echo "Connected to the database successfully";
}else{
    echo "Cnnection Failed";
}
$connection ->setAttribute(PDO :: ATTR_ERRMODE,PDO :: ERRMODE_EXCEPTION);
} catch(PDOException $e ){
     echo $e->getMessage();
};

// $rows = $connection->query ("SELECT title FROM posts");

//      while ($row = $rows->fetch()){
//           echo $row ['title'] . "<br>";
//      };
//   foreach($rows as $row){
//      echo ['title'] ."<br>";
//   }
?>