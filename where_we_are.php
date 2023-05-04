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

    <div class="container mt-5 text-center">
        <div class="row">
          <div class="col">
            <img width="800" height="500" alt="map" src="/images/map.jpg">
          </div>
          <div class="col">
            <p class="text-start f30" ><b>Где нас найти?</b></p>
            <p class="text-start f20" ><b>Адрес:</b> Капитолий, штат Вашингтон</p>
            <p class="text-start f20" ><b>Номер телефона:</b> +7 800 555 35 35</p>
            <p class="text-start f20" ><b>Email:</b> flowers_world@gmail.com</p>
          </div>
        </div>
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