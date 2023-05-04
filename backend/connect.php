<?
    //подключение к бд
    $connect = mysqli_connect('127.0.0.1', 'root', '', 'flowers_world');

    // проверка на подключение
    if(!$connect){
        die('DB dead');
    }

?>