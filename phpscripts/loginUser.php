<?php

  require '../imports/connect.php';

  $name = $_POST["lastname"];
  $password = $_POST["password"];

	echo $name. " ". $password;

  //
  $sql = "SELECT * FROM users WHERE lastname = '". $name."' AND password = '".$password."'";
  $result = mysqli_query($conn,$sql);


  if (mysqli_num_rows($result) > 0) {
	  $_SESSION["lastname"] = $name;
	  $_SESSION["password"] = $password;
	  header('Location: http://localhost/');
  }else{
    echo "User not found";
  }

?>
