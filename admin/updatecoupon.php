<?php



$id = $_GET['updatecoupon'] ?? null;
if (!$id) {
  exit;
}

$pdo = new PDO('mysql:host=localhost;dbname=sport_goods', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $pdo->prepare('SELECT * FROM discount WHERE discount_id = :id');
$statement->bindValue(':id', $id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);


$name = $product["discount_name"];
$address = $product["discount_amount"];
$email = $product["discount_active"];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $name = $_POST["name"];
  $address = $_POST["address"];
  $email = $_POST["email"];



  if (!$name) {
    $errors[] = 'Product title is required';
  }

  if (!$email) {
    $errors[] = 'Product price is required';
  }

  if (empty($errors)) {
    $statement = $pdo->prepare("UPDATE discount SET discount_name = :name, 
                                        discount_amount = :address, 
                                        discount_active = :email WHERE discount_id = :id");

    $statement->bindValue(':id', $id);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':address', $address);
    $statement->bindValue(':email', $email);


    $statement->execute();

    echo "<script>
    Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: 'Coupon has been updated successfully',
    showConfirmButton: false,
    timer: 2500
  })
</script>";

echo "
<script>
setTimeout(() => {
    window.location.href = 'index.php?updatecoupon=$id'
  }, '1000')
</script>";
  }
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="app.css" rel="stylesheet" />
  <title> Coupon</title>
</head>

<body>



  <div class="continer" style="min-height: 700px; width:60%">
    <h2>Edit Coupon:</h2>


    <div class="container">
      <form method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleFormControlInput1">Coupon Name</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="<?php echo $name ?>">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Coupon Amount</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="address" value="<?php echo $address ?>">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Active</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="email" value="<?php echo $email ?>">
        </div>

        <button type="submit" class="btn btn-primary">Update</button><br>
      </form>
    </div>
  </div>


</body>

</html>