<?php


  require "conn.php";

  $data = $conn->query("SELECT * FROM posts");

  $one = $data->fetchColumn(3);

  echo $one;