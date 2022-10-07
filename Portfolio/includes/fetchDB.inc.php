<?php
require("db-config.php");


//Session
if (session_status() === PHP_SESSION_NONE) {
    session_start();

    if (isset($_SESSION['userid']))
        $userid = $_SESSION['userid'];
    elseif (isset($_GET['vid'])) {
        $userid = $_GET['vid'];
    } else
        header("location: ../Main.php");
}


//fetch user data from database
$sql = "SELECT * FROM users WHERE id = ? ;";

$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: dashboard.php?error=stmt1failed");
}
mysqli_stmt_bind_param($stmt, "s", $userid);
mysqli_stmt_execute($stmt);
$resultData = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($resultData);



//fetch userDetails data from database
$sql = "SELECT * FROM user_details WHERE user_id = ? ;";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: dashboard.php?error=stmt2failed");
}
mysqli_stmt_bind_param($stmt, "s", $userid);
mysqli_stmt_execute($stmt);
$resultData = mysqli_stmt_get_result($stmt);
$userDetails = mysqli_fetch_assoc($resultData);

//fetch education data from database
$sql = "SELECT * FROM education WHERE user_id = ? ;";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: dashboard.php?error=stmt3failed");
}
mysqli_stmt_bind_param($stmt, "s", $userid);
mysqli_stmt_execute($stmt);
$resultData = mysqli_stmt_get_result($stmt);
$education = mysqli_fetch_assoc($resultData);

//fetch experience data from database
$sql = "SELECT * FROM experience WHERE user_id = ? ;";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: dashboard.php?error=stmt4failed");
}
mysqli_stmt_bind_param($stmt, "s", $userid);
mysqli_stmt_execute($stmt);
$resultData = mysqli_stmt_get_result($stmt);
$experience = mysqli_fetch_assoc($resultData);

//fetch skills data from database
$sql = "SELECT * FROM skills WHERE user_id = ? ;";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: dashboard.php?error=stmt5failed");
}
mysqli_stmt_bind_param($stmt, "s", $userid);
mysqli_stmt_execute($stmt);
$resultData = mysqli_stmt_get_result($stmt);
$skills = mysqli_fetch_assoc($resultData);

//fetch address data from database
$sql = "SELECT * FROM address WHERE user_id = ? ;";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: dashboard.php?error=stmt6failed");
}
mysqli_stmt_bind_param($stmt, "s", $userid);
mysqli_stmt_execute($stmt);
$resultData = mysqli_stmt_get_result($stmt);
$address = mysqli_fetch_assoc($resultData);

//fetch social media data from database
$sql = "SELECT * FROM social_media WHERE user_id = ? ;";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: dashboard.php?error=stmt7failed");
}
mysqli_stmt_bind_param($stmt, "s", $userid);
mysqli_stmt_execute($stmt);
$resultData = mysqli_stmt_get_result($stmt);
$smedia = mysqli_fetch_assoc($resultData);



//update database
if (isset($_POST['submit'])) {
}
