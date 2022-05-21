<?php


 
session_start();
$sess= $_SESSION['user_id '];
require "../connect2.php";

 
include_once "../headFoot/header.php";
 

?>
<?php

 
 $stmt = $conn->query("SELECT * FROM userstable WHERE user_id='$sess'");
//  $stmt->execute();
 
 $users = $stmt->fetch(PDO::FETCH_ASSOC);
 
 // Send the user to the place order page if they click the Place Order button, also the cart should not be empty
if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    header('Location: orderplaced.php');
    exit;
}


// Update product quantities in cart if the user clicks the "Update" button on the shopping cart page
if (isset($_POST['update']) && isset($_SESSION['cart'])) {
    // Loop through the post data so we can update the quantities for every product in cart
    foreach ($_POST as $k => $v) {
        if (strpos($k, 'quantity') !== false && is_numeric($v)) {
            $id = str_replace('quantity-', '', $k);
            $quantity = (int)$v;
            // Always do checks and validation
            if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                // Update new quantity
                $_SESSION['cart'][$id] = $quantity;
            }
        }
    }
}
// Check the session variable for products in cart
$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;
// print_r($products_in_cart) ;
// If there are products in cart
// if ($products_in_cart) {
//     // There are products in the cart so we need to select those products from the database
//     // Products in cart array to question mark string array, we need the SQL statement to include IN (?,?,?,...etc)
//     $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
//     $stmt = $conn->query('SELECT * FROM products WHERE product_id IN (' . $array_to_question_marks . ')');
//     // We only need the array keys, not the values, the keys are the id's of the products
//     // $stmt->execute(array_keys($products_in_cart));
//     // Fetch the products from the database and return the result as an Array
//     $products = $stmt->fetch(PDO::FETCH_ASSOC);
//     // Calculate the subtotal
//     foreach ($products as $product) {
//         $subtotal += (float)$product['product_price'] * (int)$products_in_cart[$product['product_id']];
//     }
//}
 ?>
 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/price-range.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/checkout.css" rel="stylesheet">
    <link href="../css/cart2.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>
<section id="cart_items">
    <div class="container">
        <div class="step-one">
            <h2 class="heading">Check Out </h2>
        </div>




        <div class="shopper-informations">
            <div class="row">
                <div class="col-sm-3">
                    <div class="shopper-info">
                        <p>Shopper Information</p>
                        <form>
                            <label>User Name: </label><p><?php echo $users['user_name']?></P>
                            <label>Email: </label><p><?php echo $users['user_email']?></P>

                            <label>Address: </label><p><?php echo $users['user_address']?></P>
                            <label>Phone No.: </label><p><?php echo $users['user_phone']?></P>

                            

                        </form>
                        <a class="btn btn-primary" href="orderplaced.php">proceed to Check Out </a>
                       
                    </div>
                </div>
              
            </div>
        </div>
        <div class="review-payment">
            <h2>Review & Payment</h2>
        </div>

        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                <?php 
                foreach ($products as $product):
                 ?>
                 
              
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="fwy6zosqphc8hzjk0rgr.webp" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href=""><?php $product['product_name']?></a></h4>
                            <p>  ID: <?php echo $product['product_id']?></p>
                        </td>
                        <td class="cart_price">
                            <p><?php echo $product['product_price']?></p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                 
                        <input class="cart_quantity_input" type="text" name="quantity-<?=$product['product_id']?>" value="1" autocomplete="off" size="2">
                                
                            </div>
                           
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price"> <?php echo $product['product_price']?></p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                    </tr>

                    <?php 
                endforeach; 
                ?>

                    
                    <tr>
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                            <table class="table table-condensed total-result">
                                <tr>
                                    <td>Cart Sub Total</td>
                                    <td><?php $subtotal ?> </td>
                                </tr>
                                 
                                <tr class="shipping-cost">
                                    <td>Shipping Cost</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td><span><?php $subtotal ?> </span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
        <div class="payment-options">
            <span>
                <label><input type="checkbox">Cash On Delivery</label>
            </span>

        </div>
        </div>
</section>

  
</body>

</html>