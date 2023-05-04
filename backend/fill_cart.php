<?php 
    session_start();

    require_once 'connect.php';

    $numberOfPositions = 0;

    if(isset($_SESSION['cart'])):
        $cost = 0;
        // заполняем корзины
        foreach($_SESSION['cart'] as $item):  
            $numberOfPositions++;          
            $id = $item['id'];
            $product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$id'");
            while ($row = mysqli_fetch_assoc($product)):
                $cost = $cost + $row['price']?>
                <tr>
                    <td>
                        <img width="100" height="100" alt="logo" src="/images/<?php echo $row['photo']?>">
                    </td>
                    <td><?php echo $row['name']?></td>
                    <td><input type="number" min="1" name="quantity_input_<?php echo $numberOfPositions?>" value="<?php echo $item['quantity']?>"></td>
                    <td><?php echo $row['price']?></td>
                    <td><?php echo $row['price'] * $item['quantity']?></td>
                </tr>
        <?php endwhile; endforeach; endif;?>
