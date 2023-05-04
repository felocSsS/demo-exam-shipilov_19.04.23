<?
    require_once 'connect.php';

    $count = 0;

    $query_result = mysqli_query($connect, "SELECT * FROM `products` ORDER BY `id` DESC LIMIT 5");
    //перебираем 5 элементов для слайдера
    while($row = mysqli_fetch_assoc($query_result)):
        if($count === 0):?>
            <div class="carousel-item active">
                <img src="/images/<?echo $row['photo']?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-dark"><? echo $row['name']?></h5>
                    <p class="text-dark"><? echo $row['bio']?></p>
                    <a href="product_card.php?id=<?php echo $row['id']?>" class="btn btn-dark">Подробнее</a>
                </div>
            </div>
        <?endif;
        if($count != 0):?>
            <div class="carousel-item">
                <img src="/images/<?echo $row['photo']?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-dark"><? echo $row['name']?></h5>
                    <p class="text-dark"><? echo $row['bio']?></p>
                </div>
            </div>
        <?endif; $count++; endwhile;?>