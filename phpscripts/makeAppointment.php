<?php

  $servername = "localhost";
  $server_username = "root";
  $server_password = "";
  $dbName = "endless_runner";

  $id = $_POST["idPost"];
  $score = $_POST["scorePost"];
  $time = date("Y-m-d");
  //Make Connetction
  $conn = new mysqli($servername,$server_username,$server_password,$dbName);
  //Check connection
  if(!$conn){
    die("Connection Failed". mysqli_connect_error());
  }
  //else echo("Connection Success");



  $sql = "INSERT INTO scores (userId, score, time) VALUES ('".$id. "','". $score."','". $time."')";
  $result = mysqli_query($conn,$sql);


?>
