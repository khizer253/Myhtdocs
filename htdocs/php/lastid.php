<?php 

  require "conn.php";
  

  $title = "title number ten";
  $body = "body number ten";

 

  $insert = $conn->prepare("INSERT INTO posts (title, body) VALUES (?, ?)");
  $insert->execute(array(

     $title,
     $body

  ));

  echo ($conn->lastInsertId());