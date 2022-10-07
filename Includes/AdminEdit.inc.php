<?php

if (isset($_POST["EDIT"])) {
    # code...
    $ID = $_POST["id"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $confpass = $_POST["confpass"];
    $uname = $_POST["uname"];
    $phoneNum = $_POST["phoneNum"];

    require_once 'db.inc.php';

	if(empty($email) || empty($uname) || empty($phoneNum) || empty($ID)){
		header("location: ../AdminEdit.php?error=Empty values&id=$ID");
        exit();
	}
	
	if(empty($pass) || empty($confpass)){
		$sql= "UPDATE `users` SET `email` = '$email' , `username` = '$uname' , `phone` = '$phoneNum' WHERE `users`.`id` = $ID;";
		if ($conn->query($sql) === TRUE) {
			header("location: ../AdminDashboard.php?error=none");
			exit();
		} else {
			//echo "Error updating record: " . $conn->error;
			header("location: ../AdminEdit.php?error=can-not-edit-the-data&id=$ID");
			exit();
		}

		$conn->close();
		
	}else{
		
		if ($pass != $confpass){
			header("location: ../AdminEdit.php?error=unmatch-passwords&id=$ID");
			exit();
		}else{
			$hashPass = password_hash($pass, PASSWORD_DEFAULT);
			$sql= "UPDATE `users` SET `email` = '$email' , `username` = '$uname' , `phone` = '$phoneNum' , `password` = '$hashPass' WHERE `users`.`id` = $ID;";
			if ($conn->query($sql) === TRUE) {
				header("location: ../AdminDashboard.php?error=none");
				exit();
			} else {
				//echo "Error updating record: " . $conn->error;
				header("location: ../AdminEdit.php?error=can-not-edit-the-data&id=$ID");
				exit();
			}

			$conn->close();
			
		}
	}

    createUser($conn, $email, $pass, $uname, $phoneNum);
} else {
    header("location: ../AdminEdit.php");
    exit();
}
