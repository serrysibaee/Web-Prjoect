<?php

if (isset($_POST["login"])) {
    # code...
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    require_once 'db.inc.php';
    require_once 'fonctions.inc.php';

    if (emptyInputLogin($email, $pass) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();   
    }

    loginUser($conn, $email, $pass);

}
else {
    header("location: ../login.php?error=emptyinput");
    exit(); 
}