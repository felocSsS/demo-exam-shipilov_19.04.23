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
        include('./elements/header.php');
    ?>

    <div class="container mt-5">
        <div class="mt-5 text-start">
            <div class="row">
                <div class="col">
                    <p class="fw-bold f50">Корзина</p>
                </div>
            </div>
        </div>
        <form method="post" action="backend/refresh_cart.php">
            <table class="table table-striped ">
                <thead>
                    <tr class="w100">
                        <th scope="col">Фото</th>
                        <th scope="col">Название</th>
                        <th scope="col">Количество</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Итого</th>
                    </tr>
                </thead>
                <tbody>
                    <?
                        include ('./backend/fill_cart.php');
                    ?>
                </tbody>
            </table>

            <div class="mt-3 text-end">
                <div class="row">
                    <div class="col">
                        <button class="btn btn-outline-dark me-2">Оформить заказ</button>
                    </div>
                </div>
            </div>
        </form>
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