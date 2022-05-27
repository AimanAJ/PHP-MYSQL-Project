<?php

$full_up = 0;
$email;
$password;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    global $error_signup, $full_up;
    include "connect.php";

    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email != '' && $password != '') {

        $login = "SELECT * FROM `admin` where admin_email='$email' and admin_password='$password'";
        $result = $pdo->query($login);
        $user = $result->fetch();
        $count = $result->rowCount();
        if ($count != 0) {

            session_start();
            $login = "SELECT admin_id ,admin_name FROM `admin` where admin_email='$email' and admin_password='$password'";
            $result = $pdo->query($login);
            $user = $result->fetch();

            $_SESSION['admin_id'] = $user['admin_id'];
            $_SESSION['admin_name'] = $user['admin_name'];
           // echo  $_SESSION['admin_id'], $_SESSION['admin_name'];
           header('location: ../admin/index.php');
        } else {
            //  echo "login faild";
        }
    } else {
        $full_up = 1;
    }
}
