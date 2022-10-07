<?php
//require("db.inc.php");


//users count & id's

// $sql = "SELECT * FROM main;";
// $resultData = $conn->query($sql);
// $info =  mysqli_fetch_assoc($resultData);
// // $userids = mysqli_fetch_all($resultData, MYSQLI_ASSOC);
// // $usercount = mysqli_num_rows($resultData);
// //echo $userids[1]['id'];
// echo $info['about'];

// function getUser($id)
// {
//     require("db.inc.php");
//     $sql = "SELECT * FROM user_details WHERE user_id = ? ;";
//     $stmt = mysqli_stmt_init($conn);
//     if (!mysqli_stmt_prepare($stmt, $sql)) {
//         header("location: dashboard.php?error=stmt2failed");
//     }
//     mysqli_stmt_bind_param($stmt, "s", $id);
//     mysqli_stmt_execute($stmt);
//     $resultData = mysqli_stmt_get_result($stmt);
//     $userDetails = mysqli_fetch_assoc($resultData);
//     return $userDetails;
// }

if (isset($_SESSION['username']))
    if (!$_SESSION['username'] == 'Admin')
        header("Location: Main.php");

include_once 'includes/db.inc.php';

//jan
$sql = "SELECT created_at FROM users WHERE MONTH(created_at) = 1";
$jan = mysqli_num_rows($conn->query($sql));

//Feb
$sql = "SELECT created_at FROM users WHERE MONTH(created_at) = 2";
$feb = mysqli_num_rows($conn->query($sql));

//Mar
$sql = "SELECT created_at FROM users WHERE MONTH(created_at) = 3";
$mar = mysqli_num_rows($conn->query($sql));

//apr
$sql = "SELECT created_at FROM users WHERE MONTH(created_at) = 4";
$apr = mysqli_num_rows($conn->query($sql));

//may
$sql = "SELECT created_at FROM users WHERE MONTH(created_at) = 5";
$may = mysqli_num_rows($conn->query($sql));

//jun
$sql = "SELECT created_at FROM users WHERE MONTH(created_at) = 6";
$jun = mysqli_num_rows($conn->query($sql));

//jul
$sql = "SELECT created_at FROM users WHERE MONTH(created_at) = 7";
$jul = mysqli_num_rows($conn->query($sql));

//aug
$sql = "SELECT created_at FROM users WHERE MONTH(created_at) = 8";
$aug = mysqli_num_rows($conn->query($sql));

//sep
$sql = "SELECT created_at FROM users WHERE MONTH(created_at) = 9";
$sep = mysqli_num_rows($conn->query($sql));

//oct
$sql = "SELECT created_at FROM users WHERE MONTH(created_at) = 10";
$oct = mysqli_num_rows($conn->query($sql));

//nov
$sql = "SELECT created_at FROM users WHERE MONTH(created_at) = 11";
$nov = mysqli_num_rows($conn->query($sql));

//dec
$sql = "SELECT created_at FROM users WHERE MONTH(created_at) = 12";
$dec = mysqli_num_rows($conn->query($sql));


$dataPoints = array(
    array("y" => $jan, "label" => "Jan"),
    array("y" => $feb, "label" => "Feb"),
    array("y" => $mar, "label" => "Mar"),
    array("y" => $apr, "label" => "Apr"),
    array("y" => $may, "label" => "May"),
    array("y" => $jun, "label" => "Jun"),
    array("y" => $jul, "label" => "Jul"),
    array("y" => $aug, "label" => "Aug"),
    array("y" => $sep, "label" => "Sep"),
    array("y" => $nov, "label" => "Nov"),
    array("y" => $dec, "label" => "Dec")
);
