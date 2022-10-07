<?php
session_start();
require("db-config.php");
if (isset($_SESSION['username']))
    $userid = $_SESSION['userid'];
else {
    header("Location: ../../Main.php");
}
//update user password from database
if (isset($_POST['submit'])) {
    if (isset($_POST['newpass'])) {
        if ($_POST['newpass'] !== $_POST['confnewpass']) {
            echo "passwords do not match";
            exit();
        }
        $sql = "SELECT password FROM users where id = $userid;";
        $resultData = $conn->query($sql);
        $pass = mysqli_fetch_assoc($resultData);
        $oldhash = $pass['password'];

        $newhash = password_hash($_POST['newpass'], PASSWORD_DEFAULT);

        $checkPassword = password_verify($_POST['pass'], $oldhash);
        if (!$checkPassword) {
            echo "old password is incorrect";
            exit();
        } else {
            $sql = "UPDATE users SET password = ? WHERE id = ? ;";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $newhash, $userid);
            $stmt->execute();
            $stmt->get_result();
        }
    }
    //update user data from database
    $sql = "UPDATE users SET username = ? , email = ? , phone = ? WHERE id = ? ;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql))
        header("location: dashboard.php?error=stmt2failed");
    if (!mysqli_stmt_bind_param(
        $stmt,
        "ssss",
        $_POST['uname'],
        $_POST['email'],
        $_POST['phoneNum'],
        $userid
    ));
    if (!mysqli_stmt_execute($stmt)) {
        echo "error in account details, please go back and try again " . $conn->error;
        exit();
    }
    header("Location: ../main.php");
}
