<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php include_once "include/headerA_admin.php"; ?>
<link rel="stylesheet" href="sidebar/css/style.css">
<div class="nav-side-menu">
  <div class="brand ">Sport</div>
  <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

  <div class="menu-list">

    <ul id="menu-content" class="menu-content collapse out">
      <li class="mt-4">
        <a href="index.php?dashboard">

          <i class="fa fa-dashboard fa-sm"></i> Dashboard
        </a>
      </li>

      <li data-toggle="collapse" data-target="#order" class="collapsed mt-2">
        <a href="#"><i class="fa fa-gift fa-lg"></i>Orders <span class="arrow"></span></a>
      </li>
      <ul class="sub-menu collapse" id="order">
        <li><a href="index.php?Waiting_orders">Waiting orders</a></li>
        <li><a href="index.php?Paid_orders">Paid orders</a></li>

      </ul>


      <li data-toggle="collapse" data-target="#products" class="collapsed mt-2">
        <a href="#"><i class="fa fa-gift fa-lg"></i>Categories <span class="arrow"></span></a>
      </li>
      <ul class="sub-menu collapse" id="products">
        <li><a href="index.php?add_category">Add Categories</a></li>
        <li><a href="index.php?view_category">View Categories</a></li>

      </ul>


      <li data-toggle="collapse" data-target="#service" class="collapsed mt-2">
        <a href="#"><i class="fa fa-globe fa-lg"></i> Prdoucts <span class="arrow"></span></a>
      </li>
      <ul class="sub-menu collapse" id="service">
        <li><a href="index.php?add_product">Add Prdoucts</a></li>
        <li><a href="index.php?view_product">View Prdoucts</a></li>

      </ul>


      <li data-toggle="collapse" data-target="#new" class="collapsed mt-2">
        <a href="#"><i class="fa fa-car fa-lg"></i> Users <span class="arrow"></span></a>
      </li>
      <ul class="sub-menu collapse" id="new">
        <li><a href="index.php?add_user">Add Users</a></li>
        <li><a href="index.php?view_user">View Users</a></li>
      </ul>
      <li data-toggle="collapse" data-target="#Copoun" class="collapsed mt-2">
        <a href="#"><i class="fa fa-gift fa-lg"></i>Copoun <span class="arrow"></span></a>
      </li>
      <ul class="sub-menu collapse" id="Copoun">
        <li><a href="index.php?add_coupon">Add Copoun</a></li>
        <li><a href="index.php?view_coupon">View Copoun</a></li>

      </ul>

      <?php
      //-------------------2022-----------------------------------------------
      // include "../connect.php";
      // $admin_id = $_SESSION['admin_id'];
      // $login = "SELECT * FROM `admin` where admin_id= '$admin_id'";
      // $result = $connect->query($login);
      // $user = $result->fetch();
      // if ($user['admin_id'] == 1) {
      // 
      // ?>
      <li data-toggle="collapse" data-target="#admin" class="collapsed mt-2">
        <a href="#"><i class="fa fa-gift fa-lg"></i>Admin <span class="arrow"></span></a>
      </li>
      <ul class="sub-menu collapse" id="admin">
        <li><a href="index.php?add_admin">Add Admin</a></li>
        <li><a href="index.php?view_admin">View Admin</a></li>
      </ul>

      <li data-toggle="collapse" data-target="#comment" class="collapsed mt-2">
        <a href="#"><i class="fa fa-gift fa-lg"></i>Comment <span class="arrow"></span></a>
      </li>
      <ul class="sub-menu collapse" id="comment">
        <li><a href="index.php?comment">Products</a></li>
      </ul>

    </ul>
  </div>
</div>
<div class="container float-end">


  <?php if (isset($_GET['Waiting_orders'])) include "Waiting_orders.php"; ?>
  <?php if (isset($_GET['Paid_orders'])) include "Paid_orders.php"; ?>
  <?php if (isset($_GET['view_order'])) include "view_order.php"; ?>



  <?php if (isset($_GET['view_category'])) include "viewCategory.php"; ?>
  <?php if (isset($_GET['update'])) include "update_category.php"; ?>
  <?php if (isset($_GET['add_category'])) include "addCategory.php"; ?>


  <?php if (isset($_GET['add_product'])) include "creatproduct.php"; ?>
  <?php if (isset($_GET['view_product'])) include "products.php"; ?>
  <?php if (isset($_GET['upadteproduct'])) include "updateproduct.php"; ?>

  <?php if (isset($_GET['add_user'])) include "creatuser.php"; ?>
  <?php if (isset($_GET['view_user'])) include "users.php"; ?>
  <?php if (isset($_GET['updateuser'])) include "updateuser.php"; ?>

  <?php if (isset($_GET['add_coupon'])) include "creatcoupon.php"; ?>
  <?php if (isset($_GET['view_coupon'])) include "coupons.php"; ?>
  <?php if (isset($_GET['updatecoupon'])) include "updatecoupon.php"; ?>

  <?php if (isset($_GET['add_admin'])) include "createAdmin.php"; ?>
  <?php if (isset($_GET['view_admin'])) include "view_admin.php"; ?>
  <?php if (isset($_GET['updateadmin'])) include "update_admin.php"; ?>

  <?php if (isset($_GET['dashboard'])) include "dashboard.php"; ?>

  <?php if (isset($_GET['comment'])) include "comment.php"; ?>
  <?php if (isset($_GET['veiw_comment'])) include "view_comment.php"; ?>




</div>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>