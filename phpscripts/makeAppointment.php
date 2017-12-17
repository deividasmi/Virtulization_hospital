<?php
	require '../imports/connect.php';
    session_start();
    $usr_lname = $_SESSION["lastname"];
    $doc_id = $_POST['doctor'];
    $hour = intval($_POST['hour']);
    $time =  $hour*3600 + strtotime($_POST['date']);    //date("Y-m-d h:i:s", hour*3600 + strtotime($_POST['date']));

    
    $sql_user = "SELECT * FROM users WHERE lastname = '".$usr_lname."'";
   
    $sql_time = "SELECT * FROM appointments WHERE time ='".$time."' AND doctor_id ='".$doc_id."'";

    $result_time = mysqli_query($conn,$sql_time);

   // $sql_rez = "INSERT INTO appointments (doctor_id, user_id, time) VALUES (".$doc_id.","."1".",".$time.")";
   // $result2 = mysqli_query($conn,$sql_rez);
   //echo mysqli_num_rows($result_time);
    if (mysqli_num_rows($result_time) == 0) {
        $result_usr = mysqli_query($conn,$sql_user);
		//$row = mysql_fetch_assoc($result_usr);
		while($row = mysqli_fetch_assoc($result_usr)){
			$sql_rez = "INSERT INTO appointments (doctor_id, user_id, time) VALUES (".$doc_id.",".$row['id'].",".$time.")";
	        $result2 = mysqli_query($conn,$sql_rez);
        }
        header("Location: http://".$_SERVER["SERVER_ADDR"]."/success_appointment.php");
    	//header("Location: http://".$servername."/ligonine/success_appointment.php");
    }else{
		//header("Location: http://".$servername."/ligonine/failed_appointment.php");
		header("Location: http://".$_SERVER["SERVER_ADDR"]."/failed_appointment.php");
	}
?>
