<?php

  $sql = "SELECT * FROM doctors";
  $result = mysqli_query($conn,$sql);
  echo "<table class='work-schedule'>";
  while($row = $result->fetch_assoc()){
	  echo "<tr><td>".$row['profession']."</td><td>".$row['first_name']." ".$row['last_name']."</td><td>I-V</td><td>8-16</td></tr>";
  }
  echo "</table>";

?>
