<?php 
    require_once('../app/cart.php');
    $cart = new Cart();
    session_start();
    if(isset($_POST['submit'])){  
        if(isset($_SESSION['id_user'])){
            $id_i = $_POST['id_i'];
            $id_user = $_SESSION['id_user'];
            $quantity = $_POST['quantity'];
            $cart->addToCart($id_i, $id_user, $quantity);
        }else{
            session_start();
            $_SESSION['msg'] = "Can't add item to cart !! You are not login/register";
            header("Location: $cart->baseUrl");  
        }
    }
?>