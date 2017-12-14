<?php

  $id = $_POST['id'];

  $sql = "SELECT * FROM doctors WHERE id=$id";
  $result = mysqli_query($conn,$sql);
  while($row = $result->fetch_assoc()){
	  echo "<option value='".$row['id']."'>".$row['first_name']." ".$row['last_name']."</option>";
  }

?>
