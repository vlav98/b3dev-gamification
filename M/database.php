<?php
$host="locahost";
$user="root";
$password="";
$db="projet_b3dev";
$con = mysqli_connect($host,$user,$password,$db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>