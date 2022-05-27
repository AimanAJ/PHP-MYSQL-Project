<?php 
require "../connect.php";
function add_category ($connect , $category_name , $category_image){
    $sql_insert_category = "INSERT INTO categories (category_name , category_image) VALUES (:name , :image)
    
    ";

    $stat = $connect->prepare($sql_insert_category);
    $stat->execute([
        ':name'=>$category_name, 
        ':image'=>$category_image
    ]);
}

function select_category($connect){
    $sql_select = "SELECT * FROM categories";
    $stat = $connect->query($sql_select);
    $row = $stat->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}

function select_one_category($connect ,$id){
    $sql_select = "SELECT * FROM categories WHERE category_id = '$id'" ;
    $stat = $connect->query($sql_select);
    $row = $stat->fetch(PDO::FETCH_ASSOC);

    return $row;
}


function update_category($connect ,$name ,$image, $id){
    $sql_update = "UPDATE categories SET category_name=:name,category_image=:image WHERE category_id = '$id'";
    $stat = $connect->prepare($sql_update);
    $stat->execute([
        ":name"=>$name,
        ":image"=>$image
    ]);
}

function delete_category($connect , $id){
    $sql_delete = "DELETE FROM categories WHERE category_id = :id";
    $stat = $connect->prepare($sql_delete);
    $stat->execute([
        ":id"=>$id
    ]);
}

// Admin function 

function add_admin($connect ,$name , $email , $pass ){
    $sql_add = "INSERT INTO admin (admin_name , admin_email , admin_password) VALUES (:name , :email , :pass)";
    $stat = $connect->prepare($sql_add);
    $stat->execute([
        ":name"=>$name,
        ":email"=>$email,
        ":pass"=>$pass
    ]);
}

function view_one_admin($connect , $id){
    $sql_select = "SELECT * FROM admin WHERE admin_id = '$id'" ;
    $stat = $connect->query($sql_select);
    $row = $stat->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function view_all_admin($connect){
    $sql_select = "SELECT * FROM admin" ;
    $stat = $connect->query($sql_select);
    $row = $stat->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}

function delete_admin($connect , $id){
    $sql_delete = "DELETE FROM admin WHERE admin_id = :id";
    $stat = $connect->prepare($sql_delete);
    $stat->execute([
        ":id"=>$id
    ]);
}

function update_admin($connect ,$name ,$email, $password , $id){
    $sql_update = "UPDATE admin SET admin_name=:name,admin_email=:email , admin_password = :pass WHERE admin_id = '$id'";
    $stat = $connect->prepare($sql_update);
    $stat->execute([
        ":name"=>$name,
        ":email"=>$email,
        ":pass"=>$password
    ]);
}

function select_orders($connect){
    $sql_select = "SELECT * FROM orders";
    $stat = $connect->query($sql_select);
    $row = $stat->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}

function select_orders_id($connect,$i){
    $sql_select = "SELECT * FROM orders WHERE order_id  = $i";
    $stat = $connect->query($sql_select);
    $row = $stat->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function move($connect, $id){
    $order = select_orders_id($connect,$id);   
    $i1 = $order['order_id'];
    $i2 = $order['order_time'];
    $i3 = $order['user_id'];

    $adding = $connect->prepare("INSERT INTO `paid_order`(`order_id`, `order_time`, `user_id`) VALUES ('$i1','$i2','$i3')");
    $adding->execute();
}

function delete_move($connect , $id){
    $sql_delete = "DELETE FROM orders WHERE order_id  = :id";
    $stat = $connect->prepare($sql_delete);
    $stat->execute([
        ":id"=>$id
    ]);



}



function user_name($connect , $i){
    $sql_select = "SELECT user_name FROM userstable WHERE user_id = $i";
    $stat = $connect->query($sql_select);
    $row = $stat->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function select_orders_details($connect , $i){
    $sql_select = "SELECT * FROM orders_details WHERE order_id = $i";
    $stat = $connect->query($sql_select);
    $row = $stat->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}


function select_product($connect , $i){
    $sql_select = "SELECT * FROM products WHERE product_id = $i";
    $stat = $connect->query($sql_select);
    $row = $stat->fetch(PDO::FETCH_ASSOC);

    return $row;
}




function delete_order($connect , $id){
    $sql_delete = "DELETE FROM orders WHERE order_id  = :id";
    $stat = $connect->prepare($sql_delete);
    $stat->execute([
        ":id"=>$id
    ]);

    $sql_delete = "DELETE FROM orders_details WHERE order_id  = :id";
    $stat = $connect->prepare($sql_delete);
    $stat->execute([
        ":id"=>$id
    ]);


}

function delete_paid_order($connect , $id){
    $sql_delete = "DELETE FROM paid_order WHERE order_id  = :id";
    $stat = $connect->prepare($sql_delete);
    $stat->execute([
        ":id"=>$id
    ]);

    $sql_delete = "DELETE FROM orders_details WHERE order_id  = :id";
    $stat = $connect->prepare($sql_delete);
    $stat->execute([
        ":id"=>$id
    ]);


}

function select_paid_orders($connect){
    $sql_select = "SELECT * FROM paid_order";
    $stat = $connect->query($sql_select);
    $row = $stat->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}

function delete_product_in_order($connect , $id){
    $sql = "DELETE FROM orders_details WHERE product_id = '$id'";
    $connect->exec($sql);

}

function Update_quantity($connect,$order_id,$prd_id,$new_quantity){
    $sql_update = "UPDATE orders_details SET quantity=:qut WHERE order_id = '$order_id' and product_id ='$prd_id'";
    $stat = $connect->prepare($sql_update);
    $stat->execute([
        ":qut"=>$new_quantity,

    ]);

}