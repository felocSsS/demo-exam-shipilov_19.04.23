<? 
    require_once 'connect.php';
    $query_result = mysqli_query($connect, $query);
    // выводим все товары бд с учетом фильтров и сортировок
    while($row = mysqli_fetch_assoc($query_result)):?>
        <div class="col">
            <div class="card mb-4">
                <img src="/images/<?php echo $row['photo']?>" class="d-block w-100" alt="..." height="300" >
                <div class="card-body">
                    <p class="text-start" class="card-text"><?php echo $row['name']?></p>
                    <p class="text-start" class="card-text"><?php echo $row['bio']?></p>
                    <p class="text-start" class="card-text"><?php echo $row['price']?> руб.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn">
                            <a href="product_card.php?id=<?php echo $row['id']?>" class="btn btn-outline-dark">Подробнее</a>
                            <?if(isset($_SESSION['user'])):// если пользователь авторизирован, то показываем ему кнопку в корзину?>
                                <a href="./backend/go_to_cart.php?id=<?php echo $row['id']?>" class="btn btn-outline-dark">В корзину</a>
                            <?endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile;?>