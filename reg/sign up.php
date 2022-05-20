<?php
include "fun.php";

global $name;
global $email;
global $address;
global $num;
global $password;
global $conferm;



$full_up = 0;


$passPattern = "/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/ ";
// Must be a minimum of 8 characters
// Must contain at least 1 number
// Must contain at least one uppercase character
// Must contain at least one lowercase character

$namePattern =  "/^[a-z ]+$/i ";

$phonePattern = "/[07]{2,3}[7-9]{1,2}[0-9]{7,8}/ ";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {



  include "connect.php";

  //$button = $_POST['btn'];
  if (isset($_POST['btn'])) {


    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $num = $_POST["num"];
    $password = $_POST["password"];
    $conferm = $_POST["conferm"];

    if ($name != '' && $email != '' && $password != '' && $conferm != '' && $address != '' && $num != '') {
      if (!email_check($email) && name_check($namePattern, $name) && phone_check($phonePattern, $num) && pass_check($passPattern, $password) && $conferm == $password) {

        $insertUser = "INSERT INTO `userstable` (user_name, user_address, user_email, user_password, user_phone) VALUES ('$name', '$address', '$email', '$password', '$num');";
        // injection
        $result = $pdo->prepare($insertUser);
        $result->execute([':user_name' => $name, ':user_address' => $address, ':user_email' => $email, ':user_password' => $password, ':user_phone' => $num]);
        if ($result) {

          header('location:login.php');
          // echo "true";
          $email = "";
        }
      }
    } else {
      $full_up = 1;
    }
  }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" />
  <title>Sign in & Sign up Form</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">

        <?php $error = 'ok';  ?>



        <form action="#" class="sign-in-form" method="post">
          <h2 class="title">Sign up</h2>

          <!--***************** name********************* -->
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="name" />

          </div>

          <?php
          if ($name != '') {
            if (!name_check($namePattern, $name)) {
              echo "<label name='error' value='error1' style='color:red ;'>*Enter valid name</label>";
            }
          }
          ?>



          <!--***************** email********************* -->
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="email" />
          </div>

          <?php
          if ($email != '') {
            if (email_check($email)) {
              echo "<label name='error' value='error2' style='color:red ;'>*Email Already Exists</label>";
            }
          }
          ?>


          <!--***************** address********************* -->
          <div class="input-field">
            <i class="fa fa-address-book"></i>
            <input type="text" placeholder="address" name="address" />
          </div>



          <!--***************** phone********************* -->
          <div class="input-field">
            <i class="fa fa-phone"></i>
            <input type="number" placeholder="Phone number" name="num" />
          </div>

          <?php
          if ($num != '') {
            if (!phone_check($phonePattern, $num)) {
              echo "<label name='error' value='error3' style='color:red ;'>*Enter valid Phone number</label>";
            }
          }
          ?>



          <!--***************** password ********************* -->
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="password" name="password" />
          </div>

          <?php
          if ($password != '') {
            if (!pass_check($passPattern, $password)) {
              echo "<label name='error' value='error4' style='color:red ;'>*Enter more than 8 charecter </label>";
              echo "<label name='error' value='error4' style='color:red ;'>*Include Upper and Lower case  </label>";
            }
          }
          ?>



          <!--***************** conferm ********************* -->
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirm your password" name="conferm" />
          </div>

          <?php
          if ($conferm != '') {
            if ($conferm != $password) {

              echo "<label name='error' value='error5' style='color:red ;'>conferm your password</label>";
            }
          }
          ?>

          <?php
          if ($full_up) {
            $full_up = 0;
            echo "<label style='color:red ;'>You have to fill all field </label>";
          }
          ?>

          <button type="submit" class="btn" name="btn" value="Sign-up">
            Sign up
          </button>
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>

      </div>
    </div>


    <form action="login.php">
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              You must first log in to complete the purchase process
            </p>
            <button class="btn transparent" id="sign-up-btn">
              login
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </form>




  </div>


</body>

</html>