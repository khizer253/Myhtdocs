<?php

  require "conn.php";
  $data = $conn->query("SELECT * FROM posts");

  $all = $data->fetchAll(PDO::FETCH_ASSOC);

  echo "<pre>";
  print_r ($all);
  echo "</pre>"; 

  // echo $all["0"]->title;

  echo $all['1']['body'];

