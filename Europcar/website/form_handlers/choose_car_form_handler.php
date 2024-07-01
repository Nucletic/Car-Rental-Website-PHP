<?php
session_start();
include('db_connect.php');
if (isset($_POST['pay_online'])) {
    $selected_car = $_POST['selected_car'];
    if (empty($selected_car)) {
        header("location:../choose_car.php");
    } else {
        // Variables from session 
        $user_id = $_SESSION['user_id'];

        $sql = "UPDATE `book_car` SET selected_car = '$selected_car' WHERE user_id = '$user_id'";

        $query = mysqli_query($conn, $sql);


        echo $affrow;
        if ($query) {
            $_SESSION['choosed_car'] = "choosed";
            $_SESSION['Beat_Hatchback_Std_price'] = "$ 300.00";
            $_SESSION['Kwid_Std_price'] = "$ 317.00";
            $_SESSION['Beat_Sedan_Std_price'] = "$ 212.00";
            $_SESSION['Aveo_Sedan_Std_price'] = "$ 478.00";
            $_SESSION['Aveo_Sedan_Aut_price'] = "$ 507.00";
            $_SESSION['MIRAGE_G4_GLX_CVT_price'] = "$ 530.00";
            $_SESSION['Passat_Sportline_price'] = "$ 850.00";
            $_SESSION['Camry_LE_price'] = "$ 1180.00";
            $_SESSION['Teramont_Aut_price'] = "$ 1400.00";
            $_SESSION['Kicks_Aut_price'] = "$ 1405.00";
            $_SESSION['TRACKER_SUV_2LS_PAQ_B_price'] = "$ 1420.00";
            $_SESSION['Duster_ZEN_TA_2_0_LT_price'] = "$ 1500.00";
            $_SESSION['Trax_Aut_price'] = "$ 1435.00";
            $_SESSION['X_Trail_Aut_price'] = "$ 1627.00";
            $_SESSION['T_Cross_Trendline_Triptoni_price'] = "$ 1800.00";
            $_SESSION['Hilux_Std_price'] = "$ 2000.00";
            $_SESSION['GRAND_CARAVAN_SE_price'] = "$ 3200.00";
            $_SESSION['Sienna_Auto_price'] = "$ 3809.00";
            header("location:../pay_online.php");
        } else {
            echo "*Can't execute the query please try again in a moment";
            echo "Redirecting to the home page in 3 seconds";
            sleep(3);
            header("location:../mainpage.php");
        }
    }
}
