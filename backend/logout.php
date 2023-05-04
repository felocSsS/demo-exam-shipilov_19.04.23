<?
    session_start();
    // удаляем сессию
    unset($_SESSION['user']);
    unset($_SESSION['admin']);
    unset($_SESSION['message']);
    unset($_SESSION['admin']);

    header('Location: ../index.php'); 
?>