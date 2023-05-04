<? 
    require_once 'connect.php';

    $query_result = mysqli_query($connect, "SELECT * FROM `orders`");

    // сколько позиций в заказе
    while($row = mysqli_fetch_assoc($query_result)):
        $position = explode(';', $row['products']);
        foreach($position as $item){
            $arr = explode(',', $item);
        }
        $cost = 0;
    //заполняем таблицу?>
    <tr>
            <th scope="row"><?php echo $row['id']?></th>
            <td><?php echo $row['date']?></td>
            <td><?php echo count($position)?></td>
            <td>Тут будет цена</td>
            <td>
                <select name="sortBy" class="form-select" aria-label="Default select example">
                    <option selected><?php echo $row['status']?></option>
                    <option value="price1">Отменить</option>
                    <option value="price2">Подтвердить</option>    
                </select></td>
            <td><?php echo $row['id_user']?></td>
    </tr>
    <?endwhile;?>