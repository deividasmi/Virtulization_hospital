<?php
  session_start();

  require '../imports/connect.php';

  $name = $_POST["lastname"];
  $password = $_POST["password"];

 // echo $name. " ". $password;

  //
  $sql = "SELECT * FROM users WHERE lastname = '". $name."' AND password = '".$password."'";
  $result = mysqli_query($conn,$sql);
  

  
  if (mysqli_num_rows($result) > 0) {
	  //echo $name;
	  $_SESSION["lastname"] = $name;
	  $_SESSION["password"] = $password;
	  header("Location: http://".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"]."/appointment.php");
	  //header("Location: http://".$servername."/ligonine/appointment.php");
  }else{
	  //header("Location: http://".$servername."/ligonine/failedLogin.php");
	  header("Location: http://".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"]."/failedLogin.php");
  }

?>
