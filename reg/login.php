<?php

session_start();
global $full_up;


global $email;
global $password;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  include "connect.php";

  $button = $_POST['btn'];
  if ($button == "Login") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email != '' && $password != '') {

      $login = "SELECT * FROM `userstable` where user_email='$email' and user_password='$password'";
      $result = $pdo->query($login);
      $user = $result->fetch();
      $count = $result->rowCount();
      if ($count != 0) {

        $insertUser = "UPDATE `userstable` SET flage ='1' WHERE user_email = '$email';";
        // injection
        $result = $pdo->prepare($insertUser);
        $result->execute([':user_email' => $email]);
        if ($result) {
          $_SESSION['user_email'] = $email;
          header('location:Home.php');
        } else {
          echo "faild login";
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
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Sign in & Sign up Form</title> -->
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">




        <form action="#" class="sign-in-form" method="post">
          <h2 class="title">Login</h2>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="email" />
          </div>

          <?php
          if ($email != '') {
            //$sql = mysqli_query($conn, "SELECT * FROM `userstable` where user_email='$email'");
            $login = "SELECT * FROM `userstable` where user_email='$email'";
            $result = $pdo->query($login);
            $user = $result->fetch();
            $count = $result->rowCount();
            if ($count == 0) {
              echo "<label style='color:red ;'>*Email not found</label>";
            } 
          }
          ?>



          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" />
          </div>


          <?php
          if ($password != '') {
            //$sql = mysqli_query($conn, "SELECT * FROM `userstable` where user_password='$password'");

            $login = "SELECT user_password FROM `userstable` where user_email='$email'";
            $result = $pdo->query($login);
            $user = $result->fetch();
            $count = $result->rowCount();
            if ($user != $password) {
              echo "<label style='color:red ;'>*Enter correct password</label>";
            } 
          }


          if ($full_up) {
            $full_up = 0;
            echo "<label style='color:red ;'>You have to fill all fields </label>";
          }
          ?>

          <input type="submit" value="Login" class="btn " name="btn" />
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


    <form action="sign up.php">
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              If this is not already an account, click on the button below Create a new account
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
      </div>
    </form>




  </div>


</body>

</html>