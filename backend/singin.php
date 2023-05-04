<?
    require_once 'connect.php';
    session_start();

    $login = $_POST['login'];
    $password = $_POST['password'];

    $query_result = mysqli_query($connect, "SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");
    
    // если пользователь есть то авторизируем его через сессию, а если нет то выводим сообщение об ошибке
    if(mysqli_num_rows($query_result) > 0){
        $_SESSION['user'] = mysqli_fetch_assoc($query_result);
        header('Location: ../index.php');
    } else {
        $_SESSION['message'] = "Такого пользователя нет!";
        header('Location: ../login.php');  
    }
?>