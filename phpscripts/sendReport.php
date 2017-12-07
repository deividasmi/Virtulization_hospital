<?php

  $servername = "localhost";
  $server_username = "root";
  $server_password = "";
  $dbName = "endless_runner";

  $id = $_POST["idPost"];
  $report = $_POST["messagePost"];
  $time = date("Y-m-d H:i:s");
  //Make Connetction
  $conn = new mysqli($servername,$server_username,$server_password,$dbName);
  //Check connection
  if(!$conn){
    die("Connection Failed". mysqli_connect_error());
  }
  //else echo("Connection Success");



  $sql = "INSERT INTO reports (userId, message, time) VALUES ('".$id. "','". $report."','". $time."')";
  $result = mysqli_query($conn,$sql);


?>
