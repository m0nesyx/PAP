<?php
$con = mysqli_connect("localhost", "root","root", "PAP", 8889);

mysqli_query($con, "SET time_zone='+00:00'");

date_default_timezone_set("UTC");

if (!$con) {
    echo "Não foi possivel ligar a Base de dados".mysqli_connect_error(); exit();
}