<?session_start();?>
<header class="p-3 text-bg-dark" style="background-color: #212529;">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <img src="/images/logo.png" width="50" height="50">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 text-white">О нас</a></li>
          <li><a href="catalog.php" class="nav-link px-2 text-white">Каталог</a></li>
          <li><a href="where_we_are.php" class="nav-link px-2 text-white">Где нас найти?</a></li>
          <?
            if(isset($_SESSION['user'])):?>
                <li><a href="my_orders.php" class="nav-link px-2 text-white">Мои заказы</a></li>
            <?endif;?>
        </ul>

        <div class="text-end">
            <?
            if(!isset($_SESSION['user'])):?>
                <a href="login.php" class="btn btn-outline-light me-2">Вход</a>
                <a href="registration.php" class="btn btn-outline-light me-2">Зарегистрироваться</a>
            <?endif;?>
            <?if(isset($_SESSION['user'])):?>
                <a href="cart.php" class="btn btn-outline-light me-2">Корзина</a>
                <a href="backend/logout.php" class="btn btn-outline-light me-2">Выйти</a>
            <?endif;?>
        </div>
      </div>
    </div>
</header>