<?php

function emptyInputAdminAdd($email, $pass, $uname, $phone)
{
    $result = true;
    if (empty($email) || empty($pass) || empty($uname) || empty($phone)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function invalidUsername($uname)
{
    $result = true;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $uname)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function invalidEmail($email)
{
    $result = true;
    if (!filter_var($email)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function existUsername($conn, $uname, $email)
{
    $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../AdminAdd.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $uname, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}
function createUser($conn, $email, $pass, $uname, $phone)
{
    $sql = "INSERT INTO users (email, password, username, phone) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../AdminDashboard.php?error=stmtfailed");
        exit();
    }

    $hashPass = password_hash($pass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $email, $hashPass, $uname, $phone);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    initDB($conn, $email);
    header("location: ../AdminDashboard.php?error=none");
    exit();
}
function initDB($conn, $email)
{
    $user = existUsername($conn, $email, $email);

    $sql = "INSERT INTO user_details (user_id) VALUES ($user[id]);";
    $conn->query($sql);
    $sql = "INSERT INTO education (user_id) VALUES ($user[id]);";
    $conn->query($sql);
    $sql = "INSERT INTO address (user_id) VALUES ($user[id]);";
    $conn->query($sql);
    $sql = "INSERT INTO experience (user_id) VALUES ($user[id]);";
    $conn->query($sql);
    $sql = "INSERT INTO skills (user_id) VALUES ($user[id]);";
    $conn->query($sql);
    $sql = "INSERT INTO social_media (user_id) VALUES ($user[id]);";
    $conn->query($sql);
}
