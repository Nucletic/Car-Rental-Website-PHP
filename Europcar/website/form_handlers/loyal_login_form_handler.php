<?php
include("db_connect.php");

if (isset($_POST['login'])) {
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $sql = "SELECT * FROM `user_account2` WHERE user_email = '$user_email'";

    $query = mysqli_query($conn, $sql);
    $numrow = mysqli_num_rows($query);

    if ($query) {
        if ($numrow == 1) {
            while ($row = mysqli_fetch_assoc($query)) {
                $user_password_hash = $row['user_password'];
                $user_name = $row['user_name'];
                $user_id = $row['user_id'];
            }
            $password_verify = password_verify($user_password, $user_password_hash);
            if ($password_verify) {
                session_start();
                $_SESSION["user_id"] = $user_id;
                $_SESSION["user_name"] = $user_name;
                $_SESSION["user_email"] = $user_email;
                $_SESSION["loggedin"] = true;
                header("location:../mainpage.php");
            } else {
                echo '
                <div id="myModal" class="modal">
                    <div class="modal-content" id="modal_content">
                    <a href="../loyal.php">&times;</a>
                        <p>No account found with this email try using any different email!</p>
                    </div>
                </div>';
            }
        }
    }
}

?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }

    .modal {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        width: 100%;
    }

    .modal-content {
        height: 120px;
        width: 380px;
        background: #f0f0f0;
        color: #fff;
        overflow: hidden;
    }

    a {
        width: 100%;
        background: #009900;
        padding: 0 10px 0 92.8%;
        font-size: 30px;
        cursor: pointer;
        color: #fff;
        text-decoration: none;
    }

    .modal-content p {
        color: #333;
        margin: 20px;
        font-size: 18px;
    }
</style>