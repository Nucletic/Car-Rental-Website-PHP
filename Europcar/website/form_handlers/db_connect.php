<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "europcar";

$conn = mysqli_connect("$servername", "$username", "$password", "$database");
if (!$conn) {
    echo "not connected" . mysqli_connect_error();
}