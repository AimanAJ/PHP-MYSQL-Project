<?php


// function pdo_connect_mysql(){
$dbname='sport_goods';
$host='localhost';
$username='root';
$pass='';





    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    
</body>
</html>

