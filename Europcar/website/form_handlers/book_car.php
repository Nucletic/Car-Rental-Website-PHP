<?php
session_start();
include('db_connect.php');
if (!isset($_SESSION['user_name'])) {
    header("location:../loyal.php");
} else {
    if (isset($_POST['get_info'])) {
        $car_type = $_POST['car_type'];
        $pickup_office = $_POST['pickup_office'];
        $pick_up_date = $_POST['pick_up_date'];
        $pick_up_time = $_POST['pick_up_time'];
        $return_office = $_POST['return_office'];
        $return_date = $_POST['return_date'];
        $return_time = $_POST['return_time'];

        // Variables from session 
        $user_id = $_SESSION['user_id'];
        $user_email = $_SESSION['user_email'];

        $sql = "INSERT INTO `book_car` (`user_id`, `car_type`, `pick_up_office`, `pick_up_date`, `pick_up_time`,
        `return_office`, `return_date`, `return_time`) VALUES ('$user_id', '$car_type', '$pickup_office',
        '$pick_up_date', '$pick_up_time', '$return_office', '$return_date', '$return_time')";

        $query = mysqli_query($conn, $sql);

        $affrow = mysqli_affected_rows($conn);
        if ($query) {
            if ($affrow == 1) {
                $_SESSION['car_type'] = $car_type;
                $_SESSION['pickup_office'] = $pickup_office;
                $_SESSION['pickup_date'] = $pick_up_date;
                $_SESSION['pickup_time'] = $pick_up_time;
                $_SESSION['return_office'] = $return_office;
                $_SESSION['return_date'] = $return_date;
                $_SESSION['return_time'] = $return_time;
                $_SESSION['form_filled'] = "filled";
                header("location:../choose_car.php");
            }
        } else {
            echo "*Can't execute the query please try again in a moment";
            echo "Redirecting to the home page in 3 seconds";
            sleep(3);
            header("location:../mainpage.php");
        }
    }
}
