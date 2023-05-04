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

    <main class="container mt-5 pad" >
        <form method="post" action="backend/add_product.php">
            <h1 class="h3 mb-3 fw-normal">Добавить товар</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="name" name="name" placeholder="name@example.com">
                <label for="floatingInput">Название</label>
            </div>
            <div class="form-floating mt-3">
                <input type="text" class="form-control" id="bio" name="bio" placeholder="name@example.com">
                <label for="floatingInput">Описание</label>
            </div>
            <div class="form-floating mt-3">
                <input type="number" class="form-control" id="price" name="price" placeholder="name@example.com">
                <label for="floatingInput">Цена</label>
            </div>
            <div class="form-floating mt-3">
                <input type="text" class="form-control" id="country" name="country" placeholder="name@example.com">
                <label for="floatingInput">Страна</label>
            </div>
            <div class="form-floating mt-3">
                <input type="text" class="form-control" id="category" name="category" placeholder="name@example.com">
                <label for="floatingInput">Категория</label>
            </div>
            <div class="form-floating mt-3">
                <input type="text" class="form-control" id="color" name="color" placeholder="Password">
                <label for="floatingPassword">Цвет</label>
            </div>
            <div class="form-floating mt-3">
                <input type="text" class="form-control" id="photo" name="photo" placeholder="Password">
                <label for="floatingPassword">Фото (путь : 3.jpg)</label>
            </div>
    

            <button class="w-100 btn btn-outline-dark mt-3" type="submit">Добавить товар</button>
            <?php
                if (isset($_SESSION['message'])){
                    echo '<p class="msg mt-3">' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
            ?>
        </form>
    </main>


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