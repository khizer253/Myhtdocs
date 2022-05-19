<?php

  require "conn.php";
  /*
  15-Transactions , Commits, rollbacks what are they? Why use them? How to use them ?

  //try catch, 
  */
  
  try {
  	// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	// $conn->beginTransaction();
  	$conn->query("INSERT INTO posts (title, body) VALUES ('ruby','body abot ruby')");
  	$conn->query("INSERT INTO posts (title, body) VALUES ('php','body abot php')");
  	//$conn->commit();

  } catch(Exception $e) {
    // $conn->rollback();
     echo $e->getMessage();

     //this line for closing the connection
      $conn = null;
  }

