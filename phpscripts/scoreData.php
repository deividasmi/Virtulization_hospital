<?php

  $servername = "localhost";
  $serverusername = "root";
  $serverpassword = "";
  $dbName = "endless_runner";

  //Make Connetction
  $conn = new mysqli($servername,$serverusername,$serverpassword,$dbName);
  //Check connection
  if(!$conn){
    die("Connection Failed". mysqli_connect_error());
  }

  $type = $_POST["typePost"];
  $userId = $_POST["userIdPost"];
  //$userId = 0;
  //else echo("Connection Success");

  //SELECT amount FROM mytable ORDER BY amount DESC LIMIT 5
  if($type == 0){
    $sql = "SELECT users.name ,score, time FROM scores, users WHERE userId = users.id ORDER BY score DESC LIMIT 5";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)){
        echo "Name: ".$row['name']." | "."Score: ".$row['score']." | "." Date: ".$row['time'].";";
      }
    }
  }else{
    $sql = "SELECT score, time FROM scores WHERE userId = '". $userId."' ORDER BY score DESC LIMIT 5";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)){
        echo "Score: ".$row['score']." | "." Date: ".$row['time'].";";
      }

    }
  }


?>
