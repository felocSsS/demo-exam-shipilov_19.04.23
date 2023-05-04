<?
    require_once 'connect.php';
        
    $id = $_GET['id'];
    $query_result = mysqli_query($connect, "SELECT * FROM products WHERE id = '$id'");
    $row = mysqli_fetch_assoc($query_result);//заполняем карточку товара?>
    <div class="container mt-5 text-center">
        <div class="row">
        <div class="col">
            <img width="800" height="500" alt="map" src="/images/<?php echo $row['photo']?>">
        </div>
        <div class="col">
            <p class="text-start f30"><b><?php echo $row['name']?></b></p>
            <p class="text-start f20" ><b>Цена:</b><?php echo $row['price']?> руб.</p>
            <p class="text-start f20" ><b>Страна производитель:</b> <?php echo $row['country']?></p>
            <p class="text-start f20" ><b>Вид товара:</b> <?php echo $row['category']?></p>
            <p class="text-start f20" ><b>Цвет товара:</b> <?php echo $row['color']?></p>
            <?if(isset($_SESSION['user'])):?>
                <a href="./backend/go_to_cart.php?id=<?php echo $row['id']?>" class="btn btn-outline-dark">В корзину</a>
            <?endif;?>
        </div>
        </div>
    </div>