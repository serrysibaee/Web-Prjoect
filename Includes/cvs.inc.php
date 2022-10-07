<?php
require("db.inc.php");


//users count & id's

$sql = "SELECT * FROM users;";
$resultData = $conn->query($sql);
$userids = mysqli_fetch_all($resultData, MYSQLI_ASSOC);
$usercount = mysqli_num_rows($resultData);
//echo $userids[1]['id'];

function getUser($id)
{
    require("db.inc.php");
    $sql = "SELECT * FROM user_details WHERE user_id = ? ;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: dashboard.php?error=stmt2failed");
    }
    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    $userDetails = mysqli_fetch_assoc($resultData);
    return $userDetails;
}
