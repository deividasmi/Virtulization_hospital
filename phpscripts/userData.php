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

  $name = $_POST["namePost"];
  $password = $_POST["passwordPost"];

  //else echo("Connection Success");

  //
  $sql = "SELECT * FROM users WHERE name = '". $name."'";
  $result = mysqli_query($conn,$sql);




  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
      if($row['password'] == $password){
        echo $row['id']."|".$row['tester'];
      }
    }
  }


?>
