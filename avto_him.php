<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/swiper-bundle.min.css">
    <title>Автомобильная химия - Aliance Production</title>
</head>

<body>
   <?php include_once('mobileMenu.php') ?>
    <!-- /.mobile-menu -->

    <nav class="navbar navbar-light">
        <a href="#" class="mobile-menu-toggle">
            <div class="mobile-menu-line"></div>
            <div class="mobile-menu-line"></div>
            <div class="mobile-menu-line"></div>
        </a>
        <a href="./" class="header-logo">
            <svg class="logo-svg logo-light">
                <use href="./img/sprite.svg#logo-light"></use>
            </svg>
            <svg class="logo-svg logo-dark">
                <use href="./img/sprite.svg#logo"></use>
            </svg>
        </a>
        <ul class="header-nav">
            <li class="header-nav-item"><a href="./about.php" class="header-nav-link">О компании</a></li>
            <li class="header-nav-item"><a href="./contract.php" class="header-nav-link">Контрактное производство</a>
            </li>
            <li class="header-nav-item"><a href="./trademarks.php" class="header-nav-link">Собственные торговые
                    марки</a></li>
            <li class="header-nav-item"><a href="./news.html" class="header-nav-link">Новости</a></li>
            <li class="header-nav-item"><a href="./contact.html" class="header-nav-link">Контакты</a></li>
        </ul>
        <div class="header-phone">
            <svg class="phone-icon" width="24" height="24">
                <use href="img/sprite.svg#phone"></use>
            </svg>
            <a href="tel:+74996861014" class="header-phone-link">+7 (499) 686-10-14</a>
        </div>
        <!-- /.header-phone -->
        <button class="navbar-button button" data-toggle="modal">
            <svg class="button-icon" width="24" height="24">
                <use href="./img/sprite.svg#phone"></use>
            </svg>
            <span class="button-text">Получить консультацию</span>
        </button>
    </nav>
    <!-- /.navbar -->


    <header class="header hero hero-with-image">
        <div class="container hero hero-with-image">

            <div class="hero-content">
                <div class="seporator"></div>
                <h1 class="hero-title">Автомобильная химия</h1>


            </div>
            <!-- /.header-content -->

            <div class="breadcrumbs hero-with-image">
                <nav class="breadcrumbs">
                    <a href="./index.php" class="hero-link">Главная</a> — <a href="./contract.php"
                        class="hero-link">Контрактное производство</a> — <span>Автомобильная химия</span>
                </nav>
            </div>
            <div class="image hero-image"><img src="./img/avto-him-hero.png" alt="Автомобильная химия"
                    class="hero-image" /></div>

        </div>
        <!-- /.container-->
    </header>




    <?php include_once('./template-parts/footer.php') ?>






</body>

</html>