<?session_start(); if(isset($_SESSION['admin'])):?>
<!DOCTYPE html>
</html>
<head>
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
    <!--
        Шапка сайта
    -->
    <?
        include('./elements/header_admin.php');
    ?>

    <div class="container mt-5">
        <div class="mt-5 text-start">
            <div class="row">
                <div class="col">
                    <p class="fw-bold f50">Все заказы</p>
                </div>
            </div>
        </div>
            <table class="table table-striped ">
                <thead>
                    <tr class="w100">
                        <th scope="col">id заказа</th>
                        <th scope="col">Дата заказа</th>
                        <th scope="col">Количество товара</th>
                        <th scope="col">Цена заказа</th>
                        <th scope="col">Статус заказа</th>
                        <th scope="col">id пользователя</th>
                    </tr>
                </thead>
                <tbody>
                    <?
                        include ('./backend/fill_all_orders.php');
                    ?>
                </tbody>
            </table>
    </div>

    <!--
        Подвал сайта
    -->
    <?
        include ('./elements/footer.php');
    ?>

    <script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>
<?endif;?>