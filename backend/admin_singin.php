<?
    require_once 'connect.php';
    session_start();

    $login = $_POST['login'];
    $password = $_POST['password'];

    $query_result = mysqli_query($connect, "SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");
    $row = mysqli_fetch_assoc($query_result);
    // если логин админовский, то входим в админку
    if($row['login'] = "admin"){
        $_SESSION['admin'] = $row;
        header('Location: ../all_orders.php');
    } else {
        header('Location: ../admin.php');  
    }
?>