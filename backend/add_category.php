<?
    require_once 'connect.php';
    $category = $_POST['category'];
    //добавляем категорию
    mysqli_query($connect, "INSERT INTO `category` (`id`, `name`) VALUES (NULL, '$category')");
    header('Location: ../add_category.php'); 
?>