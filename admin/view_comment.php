<?php 
  require_once "../connect2.php";

$product_id = $_GET['veiw_comment'];

$sql = "SELECT * FROM comment WHERE product_id='$product_id'";
$stat = $conn->query($sql);
$rows= $stat->fetchAll(PDO::FETCH_ASSOC);

$sql_product = "SELECT * FROM products WHERE product_id = '$product_id'";
$stat_product = $conn->query($sql_product);
$row_product= $stat_product->fetch(PDO::FETCH_ASSOC);

$count=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Product ID :  <span><?= $product_id?></span></th>
                
                <th scope="col">Product Name : <span> <?= $row_product['product_name']?></sapn></th>
                
                <th scope="col">User</th>
                <th scope="col">Comment Date </th>
                <th scope="col">Action</th>
                
                
            </tr>
        </thead>
        <tbody>
            <?php foreach($rows as $row):?>
                <tr>
                    <td><?=$count++?></td>
                    <td><?= $row['comment']?></td>
                    <td><?= $row['name']?></td>
                    <td><?= $row['date']?></td>
                    <td> 
                        <form action="" method="post" style="display:inline-block;">
                            <input type="hidden" value="<?php echo $row["comment_id"] ?>" name="deleteuser">
                            <input type="submit" name ="delete1" class="btn btn-sm btn btn-danger" value="delete">
                        </form>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        
</body>
</html>


<?php 
if(isset($_POST['delete1'])){

    $comment_id = $_POST['deleteuser'];
    $sql = "DELETE FROM comment WHERE comment_id = '$comment_id'";
    $conn->query($sql);

    echo "<script>
    Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: 'Coment has been deleted successfully',
    showConfirmButton: false,
    timer: 2500
  })
</script>";

echo "
<script>
setTimeout(() => {
    window.location.href = 'index.php?veiw_comment=$product_id'
  }, '1000')
</script>";

}
?>