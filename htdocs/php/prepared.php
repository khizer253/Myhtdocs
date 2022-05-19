<?php

  require "conn.php";

  $title = "title fifth";
  $body = "body fifth";

  //query for selecting data
  //prepare to do insert update and delete

  $insert = $conn->prepare("INSERT INTO posts (title, body) VALUES (?, ?)");
  $insert->execute(array(

     $title,
     $body

  ));

  
