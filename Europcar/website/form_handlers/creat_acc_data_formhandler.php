<?php
include("../db_connect.php");
include("creat_acc_form_handler.php");
if (isset($_POST['create_account_submit'])) {
    $user_direction = $_POST['user_direction'];
    $user_town = $_POST['user_town'];
    $user_condition = $_POST['user_condition'];
    $user_country = $_POST['user_country'];
    $user_telephone = $_POST['user_telephone'];
    $user_postal_code = $_POST['user_postal_code'];
    $level_two_passed = false;

    $sql = "INSERT INTO `user_account_data` (`user_direction`, `user_town`, `user_condition`,
    `user_telephone`, `user_postal_code`) VALUES ('$user_direction', '$user_town', '$user_condition',
    '$user_country', '$user_telephone', '$user_postal_code')";

    $sql2 = "SELECT user_id FROM user_accounts WHERE user_email='$user_email'";

    $query = mysqli_query($conn, $sql);
    $query2 = mysqli_query($conn, $sql2);
    $affrow = mysqli_affected_rows($conn);

    while ($fetchrow = mysqli_fetch_assoc($query2)) {
        $user_data_id = $fetchrow['user_id'];
    }

    if ($query) {
        echo "some error occured";
        if ($affrow > 0) {
            $level_two_passed = true;
            header("location:../mainpage.php?user_id=$user_data_id");
        } else {
            $level_two_passed = false;
            echo "<script>alert('Cant sign you in please try again in a moment');</script>";
        }
    } else {
        echo "some error occured";
    }
}
