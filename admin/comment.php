<?php 
  require_once "../connect2.php";
  
  $sql = "SELECT * FROM products";
  $stat = $conn->query($sql);
    $rows= $stat->fetchAll(PDO::FETCH_ASSOC);
?>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Comments</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($rows as $row) : ?>
    <tr>
      <th scope="row"><?= $row['product_id']?></th>
      <td><?= $row['product_name']?></td>
      <td><a href="index.php?veiw_comment=<?=$row['product_id']?>">View Comment</a></td>

    </tr>
<?php endforeach?>
  </tbody>
</table>