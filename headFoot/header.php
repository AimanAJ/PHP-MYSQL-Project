

<?php
//add check if user loged in or not
include "../connect2.php";
session_status();

if (isset($_SESSION['user_id ']) && $_SESSION['user_id '] != 0) {
    echo "<li><a href='../registration/logout.php'>logout</a></li>";
} else {
    echo "<a href='../registration/sign up.php'>Register</a>";
    echo "<a href='../registration/login.php'>Login</a>";
}
?>