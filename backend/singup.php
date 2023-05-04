<?
    require_once 'connect.php';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $patronymic = $_POST['patronymic'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_repeat = $_POST['password_repeat'];
    $check = $_POST['check'];

    $check_user = mysqli_query($connect, "SELECT * FROM `user` WHERE `login` = '$login'");

    if($password === $password_repeat && $check == "Yes"){
        if(mysqli_num_rows($check_user) > 0){
            $_SESSION['message'] = "Такой пользователь уже существует!";
            header('Location: ../registration.php');  
        } else {
            mysqli_query($connect, "INSERT INTO `user` 
            (`id`, `name`, `surname`, `patronymic`, `login`, `email`, `password`, `role`) 
            VALUES (NULL, '$name', '$surname', '$patronymic', '$login', '$email', '$password', '2')");
            header('Location: ../login.php'); 
        }
    }
?>