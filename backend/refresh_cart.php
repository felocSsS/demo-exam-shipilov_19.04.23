<?php
    $counter = 0;
    session_start();

    // обновляем значение в корзине
    foreach($_POST as $key => $value) {
        $_SESSION['cart'][$counter]['quantity'] = $value;
        $counter++;
    }

    header('Location: ../ready_order.php'); 
?>