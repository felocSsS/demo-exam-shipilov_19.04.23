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

    <main class="container mt-5 pad" >
        <form method="post" action="backend/admin_singin.php">
            <h1 class="h3 mb-3 fw-normal">Авторизируйтесь как админ</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="login" name="login" placeholder="name@example.com">
                <label for="floatingInput">Логин</label>
            </div>
            <div class="form-floating mt-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="floatingPassword">Пароль</label>
            </div>
            <button class="w-100 btn btn-outline-dark mt-3" type="submit">Войти</button>
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
