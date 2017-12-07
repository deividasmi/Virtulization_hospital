<?php
 
  $servername = "localhost";
  $serverusername = "student";
  $serverpassword = "voras";
  $dbName = "hospital";

  //Make Connetction
  $conn = new mysqli($servername,$serverusername,$serverpassword,$dbName);
  //Check connection
  if(!$conn){
    die("Connection Failed". mysqli_connect_error());
  }
