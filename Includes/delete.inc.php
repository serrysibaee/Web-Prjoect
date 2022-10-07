<?php 
require_once 'db.inc.php';
if(@$_GET['id']==true)
{
	$ID = $_GET['id'];
	
	// sql to delete a record
	$sql = "DELETE FROM users WHERE id=$ID";

	if ($conn->query($sql) === TRUE) {
	  	header("location: ../AdminDashboard.php?success");
		exit();
	} else {
		header("location: ../AdminDashboard.php?error");
		exit();
	}

	$conn->close();
}

?>