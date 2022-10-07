<?php

if (isset($_POST["ADD"])) {
    # code...
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $confpass = $_POST["confpass"];
    $uname = $_POST["uname"];
    $phoneNum = $_POST["phoneNum"];

    require_once 'db.inc.php';
    require_once 'AdminAddFonctions.inc.php';

    if (emptyInputAdminAdd($email, $pass, $uname, $phoneNum) !== false) {
        header("location: ../AdminAdd.php?error=emptyinput");
        exit();
    }
    if (invalidUsername($uname) !== false) {
        header("location: ../AdminAdd.php?error=invalidUsername");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../AdminAdd.php?error=invalidEmail");
        exit();
    }
    if (existUsername($conn, $uname, $email) !== false) {
        header("location: ../AdminAdd.php?error=usernameTaken");
        exit();
    }
	
	if ($pass != $confpass){
		header("location: ../AdminAdd.php?error=unmatch passwords");
        exit();
	}

    createUser($conn, $email, $pass, $uname, $phoneNum);
} else {
    header("location: ../AdminAdd.php");
    exit();
}
