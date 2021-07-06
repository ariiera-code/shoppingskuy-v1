<?php
    session_start();
    $product_id = $_GET['id'];

    if (isset($_SESSION['newcart'][$product_id])) {
        $_SESSION['newcart'][$product_id]+=1;
    }
    else {
        $_SESSION['newcart'][$product_id] = 1;
    }
    //echo "<pre>";
    //print_r($_SESSION['cart']);
    //echo "</pre>";
    header('location:index.php');
?>