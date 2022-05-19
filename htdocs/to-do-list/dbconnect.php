<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname= 'first_blog';
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(mysqli_connect_errno()){
  echo "Failed to connect".mysqli_connect_errno();
}
 ?>
