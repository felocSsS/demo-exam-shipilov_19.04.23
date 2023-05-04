<? 
    session_start();

    require_once 'connect.php';

    $id_user = $_SESSION['user']['id'];

    $query_result = mysqli_query($connect, "SELECT * FROM `orders` WHERE `id_user` = '$id_user'");

    // сколько позиций в заказе
    while($row = mysqli_fetch_assoc($query_result)):
        $position = explode(';', $row['products']);
        foreach($position as $item){
            $arr = explode(',', $item);
        }
        $cost = 0;
    //заполняем таблицу?>
    <tr>
            <th scope="row"></th>
            <td><?php echo $row['date']?></td>
            <td><?php echo count($position)?></td>
            <td>Тут будет цена</td>
            <td><?php echo $row['status']?></td>
            <td><a href="backend/delete_order.php?id=<?php echo $row['id']?>" class="btn btn-outline-dark me-2">Удалить заказ</a></td>
    </tr>
    <?endwhile;?>