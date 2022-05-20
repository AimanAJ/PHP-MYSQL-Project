<?php

session_start();
unset($_SESSION["uesr_email"]);
header("Location:login.php");

?>