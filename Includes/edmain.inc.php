<?php
require("db.inc.php");

// $sql = "SELECT * FROM main;";
// $resultData = $conn->query($sql);
// $info =  mysqli_fetch_assoc($resultData);
// echo $info['about'];
// $userids = mysqli_fetch_all($resultData, MYSQLI_ASSOC);
// $usercount = mysqli_num_rows($resultData);
//echo $userids[1]['id'];


$query = "UPDATE main SET about = '$_POST[about]', serv_ab = '$_POST[serv_ab]', serv_bl1_title = '$_POST[serv_bl1_title]', serv_bl2_title = '$_POST[serv_bl2_title]', serv_bl3_title = '$_POST[serv_bl3_title]', serv_bl4_title = '$_POST[serv_bl4_title]', serv_bl1_txt = '$_POST[serv_bl1_txt]', serv_bl2_txt = '$_POST[serv_bl2_txt]', serv_bl3_txt = '$_POST[serv_bl3_txt]', serv_bl4_txt = '$_POST[serv_bl4_txt]';";

if (!$conn->query($query))
    echo $conn->error;
else
    header("location: ../main.php");

//    //update education 1 data with database
//    $sql = "UPDATE main SET about = ? , serv_ab = ? , serv_bl1_title = ? , serv_bl2_title = ? , serv_bl3_title = ? , serv_bl4_title = ? , serv_bl1_txt = ? , serv_bl2_txt = ?, serv_bl3_txt = ? , serv_bl4_txt = ?;";
//    $stmt = mysqli_stmt_init($conn);
//    if (!mysqli_stmt_prepare($stmt, $sql)) {
//        header("location: edmain.inc.php?error=stmt2failed");
//    }
//    mysqli_stmt_bind_param(
//        $stmt,
//        "ssssssssss",
//        $_POST['about'],
//        $_POST['serv_ab'],
//        $_POST['serv_bl1_title'],
//        $_POST['serv_bl2_title'],
//        $_POST['serv_bl3_title'],
//        $_POST['serv_bl4_title'],
//        $_POST['serv_bl1_txt'],
//        $_POST['serv_bl2_txt'],
//        $_POST['serv_bl3_txt'],
//        $_POST['serv_bl4_txt']
       
//    );
//    if (!mysqli_stmt_execute($stmt)) {
//        echo "error in education 1 details, please go back and try again "; // . $conn->error;
//        exit();
//    }

//     header("location: ../main.php");
   


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
