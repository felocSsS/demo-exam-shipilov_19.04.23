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
        <form method="post" action="backend/singup.php">
            <h1 class="h3 mb-3 fw-normal">Зарегистрируйтесь</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="name" name="name" placeholder="name@example.com">
                <label for="floatingInput">Имя</label>
            </div>
            <div class="form-floating mt-3">
                <input type="text" class="form-control" id="surname" name="surname" placeholder="name@example.com">
                <label for="floatingInput">Фамилия</label>
            </div>
            <div class="form-floating mt-3">
                <input type="text" class="form-control" id="patronymic" name="patronymic" placeholder="name@example.com">
                <label for="floatingInput">Отчество</label>
            </div>
            <div class="form-floating mt-3">
                <input type="text" class="form-control" id="login" name="login" placeholder="name@example.com">
                <label for="floatingInput">Логин</label>
            </div>
            <div class="form-floating mt-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mt-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="floatingPassword">Пароль</label>
            </div>
            <div class="form-floating mt-3">
                <input type="password" class="form-control" id="password_repeat" name="password_repeat" placeholder="Password">
                <label for="floatingPassword">Повторите пароль</label>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="same-check" name="check" value="Yes">
                        <label class="form-check-label" for="same-address">Я согласен с условиями пользовательского соглашения</label>
                    </div>
                </div>
            </div>

            <button class="w-100 btn btn-outline-dark mt-3" type="submit">Войти</button>
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
