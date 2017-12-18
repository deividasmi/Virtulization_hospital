<?php

  require '../imports/connect.php';

  $lastname = $_POST["lastname"];
  $snumber = $_POST["snumber"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  //validation

  $sql = "SELECT * FROM users WHERE snumber = '". $snumber."'";
  $result = mysqli_query($conn,$sql);


  if (mysqli_num_rows($result) == 0) {
    $sql = "INSERT INTO users (lastname, password, email, snumber) VALUES ('".$lastname."','". $password."','".$email."','". $snumber."')";
    $result = mysqli_query($conn,$sql);
    //header("Location: http://".$servername."/ligonine/index.php");
    header("Location: http://".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"]."/index.php");
  }else{
    echo "User exists";
  }


?>
