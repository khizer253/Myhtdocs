<?php 

  require "conn.php";

  $rows = $conn->query("SELECT * FROM posts");

 // print_r($data->rowCount());

  if($rows->rowCount() > 0) {
  	while($row = $rows->fetch(PDO::FETCH_ASSOC)) {
     echo $row['body'] . "<br>"; 
    }
  } else {
  	echo "no posts yet";
  }