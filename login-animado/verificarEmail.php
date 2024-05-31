<?php
include("con_db.php");

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($conex, $email);

    $verificarEmail = "
