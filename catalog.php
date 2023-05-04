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

    <?
        $query = "SELECT * FROM `products`";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["sortBy"] == "price1") {
                $query = "SELECT * FROM `products` ORDER BY `price` ASC";
            } elseif ($_POST["sortBy"] == "price2") {
                $query = "SELECT * FROM `products` ORDER BY `price` DESC";
            }elseif ($_POST["sortBy"] == "name1") {
                $query = "SELECT * FROM `products` ORDER BY `name` ASC";
            }elseif ($_POST["sortBy"] == "name2") {
                $query = "SELECT * FROM `products` ORDER BY `name` DESC";
            } 
            if ($_POST["filterBy"] == "category") {
                $query = "SELECT * FROM `products` ORDER BY `category` ASC";
            } elseif ($_POST["sortBy"] == "country") {
                $query = "SELECT * FROM `products` ORDER BY `country` DESC";  
            }
        }
    ?>
        
    <div class="container mt-5 text-center">
        <div class="row">
            <div class="col">
                <p class="fw-bold f50" >Каталог товаров</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="f20">На данной странице представлены товары компании</p>
            </div>
        </div>
        <!-- 
            Начало фильтрации 
        -->
        <div class="container mt-5">
            <div class="row">
                <div class="col pad">
                    <form method="post">
                        <select name="sortBy" class="form-select" aria-label="Default select example">
                            <option selected>Сортировать по:</option>
                            <option value="price1">Дешевле</option>
                            <option value="price2">Дороже</option>
                            <option value="name1">Алфавиту от А-Я</option>
                            <option value="name2">Алфавиту от Я-А</option>
                        </select>
                        
                        <select name="filterBy" class="form-select mt-3" aria-label="Default select example">
                            <option selected>Фильтровать по:</option>
                            <option value="category">Категории</option>
                            <option value="country">Стране</option>
                        </select>
                        <button class="btn btn-outline-dark mt-3">Применить</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- 
            Конец фильтрации
         -->
    </div>

    <!-- 
        Начало каталога
     -->
        <div class="container mt-5 text-center">
            <div class="row row-cols-3">
            <?php
                include ('./backend/get_products.php');
            ?>  
            </div>
        </div>
    <!-- 
        Конец каталога
     -->

    <!--
        Подвал сайта
    -->
    <?
        include ('./elements/footer.php');
    ?>

    <script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>