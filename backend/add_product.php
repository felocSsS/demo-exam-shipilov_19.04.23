<?
    require_once 'connect.php';

    $name = $_POST['name'];
    $bio = $_POST['bio'];
    $price = $_POST['price'];
    $country = $_POST['country'];
    $category = $_POST['category'];
    $color = $_POST['color'];
    $photo = $_POST['photo'];

    //добавляем товар
    mysqli_query($connect, "INSERT INTO `products` 
    (`id`, `name`, `bio`, `price`, `country`, `category`, `color`, `photo`) 
    VALUES (NULL, '$name', '$bio', '$price', '$country', '$category', '$color', '$photo')");
    $_SESSION['message'] = "Товар добавлен";
    header('Location: ../add_product.php'); 
?>