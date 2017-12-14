<?php
  
  echo "test";

  //validation

  $sql = "SELECT * FROM professions";
  $result = mysqli_query($conn,$sql);
  while($row = $result->fetch_assoc()){
	  echo "<option value='".$row['id']."'>".$row['title']."</option>";
  }

?>
