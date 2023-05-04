<?php
    session_start();
    // если корзина не пустая
    if(isset($_SESSION['cart'])){
        $fail = true;
        foreach($_SESSION['cart'] as $product){
            if($product['id'] == $_GET['id']){
                $fail = false;
            }
        }

        if($fail){
            $oldArray = $_SESSION['cart'];
            $newArray = array(
                "id" => $_GET['id'],
                "quantity" => 1
            );
            array_push($oldArray, $newArray);
            $_SESSION['cart'] = $oldArray;
        }
    }
    // если корзина была пустая
    else {
        $array = array(
            0 => array(
                "id" => $_GET['id'],
                "quantity" => 1
        ));
        $_SESSION['cart'] = $array;
    }

    header('Location: ../cart.php'); 
?>