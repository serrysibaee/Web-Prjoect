<?php

if (isset($_POST["register"])) {
    # code...
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $confpass = $_POST["confpass"];
    $uname = $_POST["uname"];
    $phoneNum = $_POST["phoneNum"];

    require_once 'db.inc.php';
    require_once 'fonctions.inc.php';

    if (emptyInputSignup($email, $pass, $uname, $phoneNum) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUsername($uname) !== false) {
        header("location: ../signup.php?error=invalidUsername");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidEmail");
        exit();
    }
    if (existUsername($conn, $uname, $email) !== false) {
        header("location: ../signup.php?error=usernameTaken");
        exit();
    }
	
	if ($pass != $confpass){
		header("location: ../signup.php?error=unmatch passwords");
        exit();
	}

    createUser($conn, $email, $pass, $uname, $phoneNum);
} else {
    header("location: ../signup.php");
    exit();
}
