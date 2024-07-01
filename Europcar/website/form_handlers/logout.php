<?php
include('loyal_login_form_handler.php');
session_start();
$_SESSION["loggedin"] = false;
session_destroy();
header("location:../mainpage.php");
