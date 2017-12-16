<?php



  $sql = "SELECT * FROM doctors";
  $result = mysqli_query($conn,$sql);
  while($row = $result->fetch_assoc()){
	  echo "<option value='".$row['id']."'>".$row['profession']." ".$row['first_name']." ".$row['last_name']."</option>";
  }

?>
