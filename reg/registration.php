<?php

include "1.php";

$full_up = 0;
session_start();
$_SESSION['error_sign']=0;
// $error_sign =0 ;


$name;
$email;
$address;
$num;
$password;
$conferm;

$passPattern = "/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/ ";
// Must be a minimum of 8 characters
// Must contain at least 1 number
// Must contain at least one uppercase character
// Must contain at least one lowercase character

$namePattern =  "/^[a-z ]+$/i ";

$phonePattern = "/[07]{2,3}[7-9]{1,2}[0-9]{7,8}/ ";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {



    include "connect.php";

    $button = $_POST['btn'];
    if ($button == "Sign-up") {


        $name = $_POST["name"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $num = $_POST["num"];
        $password = $_POST["password"];
        $conferm = $_POST["conferm"];
      //  echo $_SESSION['error_sign'];

        if ($name != '' && $email != '' && $password != '' && $conferm != '' && $address != '' && $num != '') {

            if (!$_SESSION['error_sign']) {

                //$sql = "INSERT INTO `userstable` (user_name, user_address, user_email, user_password, user_phone) VALUES ('$name', '$address', '$email', '$password', '$num');";

                $insertUser = "INSERT INTO `userstable` (user_name, user_address, user_email, user_password, user_phone) VALUES ('$name', '$address', '$email', '$password', '$num');";

                // injection

                $result = $pdo->prepare($insertUser);
                $result->execute([':user_name' => $name, ':user_address' => $address, ':user_email' => $email, ':user_password' => $password, ':user_phone' => $num]);
                if ($result) {

                   // header('location:login.php');
                    echo "true";
                    echo $_SESSION['error_sign'];
                }
            }
        } else {
            $full_up = 1;
        }
    }


    //***************************************************************************************************************************** */


    else {

        global $error_sign, $full_up;
        include "connect.php";

        $email = $_POST["email"];
        $password = $_POST["password"];

        //echo  $email, $password;

        if ($email != '' && $password != '') {

            if (!$error_sign) {

                // $sql = "UPDATE `userstable` SET flage ='1' WHERE user_email = '$email';";
                // mysqli_query($conn, $sql);

                $insertUser = "UPDATE `userstable` SET flage ='1' WHERE user_email = '$email';";
                // injection
                $result = $pdo->prepare($insertUser);
                $result->execute([':user_email' => $email]);

                session_start();
                $_SESSION['uesr_email'] = $email;
                header('location:Home.php');
            }
        } else {
            $full_up = 1;
        }
    }
}
