<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require("db-config.php");
if (isset($_SESSION['username']))
    $userid = $_SESSION['userid'];
else {
    header("Location: ../../Main.php");
}
if (isset($_POST['submit'])) {

    //handle profile photo upload
    if (isset($_FILES['photo_path']) || isset($_FILES['bg_path'])) {
        $file_tmp = $_FILES['photo_path']['tmp_name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . "profile-img-" . $userid . "-" . basename($_FILES["photo_path"]["name"]);
        // Check if image file is a actual image or fake image
        if (!empty($_FILES["photo_path"]["tmp_name"])) {
            $imageFileType = strtolower(pathinfo($_FILES["photo_path"]["tmp_name"], PATHINFO_EXTENSION));
            $check = getimagesize($_FILES["photo_path"]["tmp_name"]);
            if ($check !== false) {
                move_uploaded_file($file_tmp, "../" . $target_file);
                $sql = "UPDATE user_details SET photo_path = ? WHERE user_id = ? ;";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss", $target_file, $userid);
                $stmt->execute();
                $result = $stmt->get_result();
            } else {
                //header("Location: update.inc.php");
                echo "The uploaded image is corrupted! Try again";
                exit();
            }
        }
    }

    //handle background image upload
    if (isset($_FILES['bg_path'])) {
        $file_tmp = $_FILES['bg_path']['tmp_name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . "bg-img-" . $userid . "-" . basename($_FILES["bg_path"]["name"]);
        // Check if image file is a actual image or fake image
        if (!empty($_FILES["bg_path"]["tmp_name"])) {
            $imageFileType = strtolower(pathinfo($_FILES["bg_path"]["tmp_name"], PATHINFO_EXTENSION));
            $check = getimagesize($_FILES["bg_path"]["tmp_name"]);
            if ($check !== false) {
                move_uploaded_file($file_tmp, "../" . $target_file);
                $sql = "UPDATE user_details SET bg_path = ? WHERE user_id = ? ;";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss", $target_file, $userid);
                $stmt->execute();
                $result = $stmt->get_result();
            } else {
                //header("Location: update.inc.php");
                echo "The uploaded background image is corrupted! Try again";
                exit();
            }
        }
    }

    //update userDetails data with database
    $sql = "UPDATE user_details SET job = ? , full_name = ? , age = ? , degree = ? , about = ? WHERE user_id = ? ;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql))
        header("location: dashboard.php?error=stmt2failed");
    if (!mysqli_stmt_bind_param(
        $stmt,
        "ssssss",
        $_POST['job'],
        $_POST['full_name'],
        $_POST['age'],
        $_POST['degree'],
        $_POST['about'],
        $userid
    ));
    if (!mysqli_stmt_execute($stmt)) {
        echo "error in personal details, please go back and try again "; // . $conn->error;
        exit();
    }


    //update education 1 data with database
    $sql = "UPDATE education SET edu1_name = ? , edu1_start = ? , edu1_end = ? , edu1_loc = ? , edu1_desc = ? WHERE user_id = ? ;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: dashboard.php?error=stmt2failed");
    }
    mysqli_stmt_bind_param(
        $stmt,
        "ssssss",
        $_POST['edu1_name'],
        $_POST['edu1_start'],
        $_POST['edu1_end'],
        $_POST['edu1_loc'],
        $_POST['edu1_desc'],
        $userid
    );
    if (!mysqli_stmt_execute($stmt)) {
        echo "error in education 1 details, please go back and try again "; // . $conn->error;
        exit();
    }

    //update education 2 data with database
    if (!empty($_POST['edu2_name'])) {

        $sql = "UPDATE education SET edu2_name = ? , edu2_start = ? , edu2_end = ? , edu2_loc = ? , edu2_desc = ? WHERE user_id = ? ;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: dashboard.php?error=stmt2failed");
        }
        mysqli_stmt_bind_param(
            $stmt,
            "ssssss",
            $_POST['edu2_name'],
            $_POST['edu2_start'],
            $_POST['edu2_end'],
            $_POST['edu2_loc'],
            $_POST['edu2_desc'],
            $userid
        );
        if (!mysqli_stmt_execute($stmt)) {
            echo "error in education 2 details, please go back and try again "; //. $conn->error;
            exit();
        }
    }

    //update experience 1 data with database
    $sql = "UPDATE experience SET cv_summary = ? , exp1_name = ? , exp1_start = ? , exp1_end = ? , exp1_loc = ? , exp1_desc = ? WHERE user_id = ? ;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: dashboard.php?error=stmt2failed");
    }
    mysqli_stmt_bind_param(
        $stmt,
        "sssssss",
        $_POST['cv_summary'],
        $_POST['exp1_name'],
        $_POST['exp1_start'],
        $_POST['exp1_end'],
        $_POST['exp1_loc'],
        $_POST['exp1_desc'],
        $userid
    );
    if (!mysqli_stmt_execute($stmt)) {
        echo "error in experience 1 details, please go back and try again " . $conn->error;
        exit();
    }

    //update experience 2 data with database
    if (!empty($_POST['exp2_name'])) {

        $sql = "UPDATE experience SET exp2_name = ? , exp2_start = ? , exp2_end = ? , exp2_loc = ? , exp2_desc = ? WHERE user_id = ? ;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: dashboard.php?error=stmt2failed");
        }
        mysqli_stmt_bind_param(
            $stmt,
            "ssssss",
            $_POST['exp2_name'],
            $_POST['exp2_start'],
            $_POST['exp2_end'],
            $_POST['exp2_loc'],
            $_POST['exp2_desc'],
            $userid
        );
        if (!mysqli_stmt_execute($stmt)) {
            echo "error in experience 2 details, please go back and try again "; // . $conn->error;
            exit();
        }
    }

    //update address data with database
    $sql = "UPDATE address SET address_line = ? , city = ? , postal_code = ? , country = ? WHERE user_id = ? ;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql))
        header("location: dashboard.php?error=stmt2failed");
    if (!mysqli_stmt_bind_param(
        $stmt,
        "sssss",
        $_POST['address_line'],
        $_POST['city'],
        $_POST['postal_code'],
        $_POST['country'],
        $userid
    ));
    if (!mysqli_stmt_execute($stmt)) {
        echo "error in address details, please go back and try again "; // . $conn->error;
        exit();
    }

    //update skills 1,2 data with database
    $sql = "UPDATE skills SET skills_desc = ? , skill1 = ? , skill1_perc = ? , skill2 = ? , skill2_perc = ?  WHERE user_id = ? ;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql))
        header("location: dashboard.php?error=stmt2failed");
    if (!mysqli_stmt_bind_param(
        $stmt,
        "ssssss",
        $_POST['skills_desc'],
        $_POST['skill1'],
        $_POST['skill1_perc'],
        $_POST['skill2'],
        $_POST['skill2_perc'],
        $userid
    ));
    if (!mysqli_stmt_execute($stmt)) {
        echo "error in skills 1,2 details, please go back and try again "; // . $conn->error;
        exit();
    }

    //update skills 3,4 data with database
    if (isset($_POST['skill3'])) {
        $sql = "UPDATE skills SET skill3 = ? , skill3_perc = ? , skill4 = ? , skill4_perc = ?  WHERE user_id = ? ;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
            header("location: dashboard.php?error=stmt3failed");
        if (!mysqli_stmt_bind_param(
            $stmt,
            "sssss",
            $_POST['skill3'],
            $_POST['skill3_perc'],
            $_POST['skill4'],
            $_POST['skill4_perc'],
            $userid
        ));
        if (!mysqli_stmt_execute($stmt)) {
            echo "error in skills 3,4 details, please go back and try again "; // . $conn->error;
            exit();
        }
    }

    //update social media data with database
    $sql = "UPDATE social_media SET linkedin = ? , twitter = ? , facebook = ? WHERE user_id = ? ;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql))
        header("location: dashboard.php?error=stmt2failed");
    if (!mysqli_stmt_bind_param(
        $stmt,
        "ssss",
        $_POST['linkedin'],
        $_POST['twitter'],
        $_POST['facebook'],
        $userid
    ));
    if (!mysqli_stmt_execute($stmt)) {
        echo "error in social media, please go back and try again "; // . $conn->error;
        exit();
    }

    header("location: ../main.php");
}
