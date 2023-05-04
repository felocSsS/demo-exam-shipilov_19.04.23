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
        <form method="post" action="backend/add_category.php">
            <h1 class="h3 mb-3 fw-normal">Добавить категоррию</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="category" name="category" placeholder="name@example.com">
                <label for="floatingInput">Категория</label>
            </div>
        
            <button class="w-100 btn btn-outline-dark mt-3" type="submit">Добавить</button>
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