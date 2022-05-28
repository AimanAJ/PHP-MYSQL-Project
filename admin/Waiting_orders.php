<?php

require "category_backend.php";

$all_orders = select_orders($connect);

// echo "<pre>";
// print_r($all_categories);
// echo "</pre>";
?>
<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Order ID </th>
                <th scope="col">order_time</th>
                <th scope="col">user_id </th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < count($all_orders); $i++) { ?>
                <tr>
                    <th scope="row"><?php echo ($i + 1) ?></th>
                    <td><?php echo $all_orders[$i]['order_id'] ?></td>
                    <td><?php echo $all_orders[$i]['order_time'] ?></td>
                    <td><?php echo $all_orders[$i]['user_id'] ?></td>
                    <td><?php echo user_name($connect, $all_orders[$i]['user_id'])['user_name'] ?></td>
                    <td>
                        <form action="index.php?" method="get" style="display:inline-block;">
                            <input type="hidden" value="<?php echo $all_orders[$i]["order_id"] ?>" name="view_order">
                            <button type="submit" class="btn btn-sm btn-secondary">View order details</button>
                        </form>
                        <form action="" method="post" style="display:inline-block;">
                            <input type="hidden" value="<?php echo $all_orders[$i]["order_id"] ?>" name="move">
                            <input type="submit" name="move1" class="btn btn-sm btn-primary" value="Move to paid prders">
                        </form>
                        <form action="" method="post" style="display:inline-block;">
                            <input type="hidden" value="<?php echo $all_orders[$i]["order_id"] ?>" name="delete">
                            <input type="submit" name="delete1" class="btn btn-sm btn-danger" value="delete">
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
<?php
if (isset($_POST['move1']) && $_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['move'];
    // echo $id;
    move($connect, $id);
    delete_move($connect , $id);


    echo "<script>
    Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: 'Order has been moveed to paid orders successfully',
    showConfirmButton: false,
    timer: 2500
  })
</script>";

echo "
<script>
setTimeout(() => {
    window.location.href = 'index.php?Waiting_orders'
  }, '1000')
</script>";
}


if(isset($_POST['delete1']) && $_SERVER['REQUEST_METHOD'] === 'POST'){

    $id = $_POST['delete'];

    delete_order($connect , $id);

    
    echo "<script>
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Order has been deleted successfully',
        showConfirmButton: false,
        timer: 2500
    })
    </script>";

    echo "
    <script>
    setTimeout(() => {
        window.location.href = 'index.php?Waiting_orders'
      }, '1000')
    </script>";
}
?>