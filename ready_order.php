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
                    <p class="fw-bold f50">Подтвердите заказ</p>
                </div>
            </div>
        </div>
        <form method="post" action="backend/ready_order.php">
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

            <div class="mt-3 text-center pad">
                <div class="row">
                    <div class="col">
                        <h3 class="h5 mb-3 fw-normal">Подвердите пароль</h1>
                        <div class="form-floating mt-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <label for="floatingPassword">Пароль</label>
                        </div>
                        <button class="btn btn-outline-dark me-2 mt-3">Оформить заказ</button>
                        <?php
                            if (isset($_SESSION['message'])){
                                echo '<p class="msg mt-3">' . $_SESSION['message'] . '</p>';
                            }
                            unset($_SESSION['message']);
                        ?>
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