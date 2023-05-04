<?
    require_once 'connect.php';
    $id = $_GET['id'];
    // удаляем заказ из бд
    mysqli_query($connect, "DELETE FROM `orders` WHERE `id` = '$id'");
    header('Location: ../my_orders.php');
?>