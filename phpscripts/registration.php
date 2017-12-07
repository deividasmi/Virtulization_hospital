<?php

  require '../imports/connect.php';

  $lastname = $_POST["lastname"];
  $snumber = $_POST["snumber"];
  $email = $_POST["email"];

  //validation

  $sql = "SELECT * FROM users WHERE snumber = '". $snumber."'";
  $result = mysqli_query($conn,$sql);


  if (mysqli_num_rows($result) == 0) {
    $sql = "INSERT INTO users (lastname, email, snumber) VALUES ('".$lastname."','". $email."','". $snumber."')";
    $result = mysqli_query($conn,$sql);
    echo "Registration complete";
  }else{
    echo "User exists";
  }


?>
