<?php
include("db_connect.php");

if (isset($_POST['following_submit'])) {
    $user_name = $_POST['user_name'];
    $user_surname = $_POST['user_surname'];
    $user_day_dob = $_POST['user_day_dob'];
    $user_month_dob = $_POST['user_month_dob'];
    $user_year_dob = $_POST['user_year_dob'];
    $user_email = $_POST['user_email'];
    $user_direction = $_POST['user_direction'];
    $user_town = $_POST['user_town'];
    $user_country = $_POST['user_country'];
    $user_telephone = $_POST['user_telephone'];
    $user_postal_code = $_POST['user_postal_code'];
    $user_password = $_POST['user_password'];
    $passhash = password_hash("$user_password", PASSWORD_DEFAULT);

    $sql = "INSERT INTO `user_account2` (`user_name`, `user_surname`, `user_day_dob`, 
    `user_month_dob`, `user_year_dob`, `user_email`, `user_direction`, `user_town`,
    `user_country`, `user_telephone`, `user_postal_code`, `user_password`) VALUES
    ('$user_name', '$user_surname', '$user_day_dob', '$user_month_dob', '$user_year_dob',
    '$user_email', '$user_direction', '$user_town', '$user_country', '$user_telephone',
    '$user_postal_code', '$passhash')";

    $query = mysqli_query($conn, $sql);
    $affrow = mysqli_affected_rows($conn);

    if ($query) {
        if ($affrow > 0) {
            header("location:../loyal.php");
        }
    } else {
        echo "
        <script>alert('Cant sign you up please try again later in a moment');</script>
        ";
    }














    // 
}





































// if (isset($_POST['following_submit'])) {
//     // $user_id = $_GET['user_id'];
//     $user_name = $_POST['user_name'];
//     $user_surname = $_POST['user_surname'];
//     $user_day_dob = $_POST['user_day_dob'];
//     $user_month_dob = $_POST['user_month_dob'];
//     $user_year_dob = $_POST['user_year_dob'];
//     $user_email = $_POST['user_email'];
//     $following_submit = $_POST['following_submit'];
//     $level_one_passed = false;

//     $sql = "INSERT INTO `user_accounts` (`user_name`, `user_surname`, `user_day_dob`, 
//     `user_month_dob`, `user_year_dob`, `user_email`) VALUES ('$user_name', '$user_surname',
//     '$user_day_dob', '$user_month_dob', '$user_year_dob', '$user_email')";

//     $sql2 = "SELECT user_id FROM user_accounts WHERE user_email='$user_email'";

//     $query = mysqli_query($conn, $sql);
//     $query2 = mysqli_query($conn, $sql2);
//     $affrow = mysqli_affected_rows($conn);

//     while ($fetchrow = mysqli_fetch_assoc($query2)) {
//         $user_data_id = $fetchrow['user_id'];
//     }

//     if ($query) {
//         if ($affrow > 0) {
//             $level_one_passed = true;
//             header("location:../creat_acc_data.php?user_id=$user_data_id");
//         }
//     } else {
//         $level_one_passed = false;
//     }
// }
