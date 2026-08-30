<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
   
    <link rel="stylesheet" href="./css/style.css">
    
    <title><?php echo $page_title ?> - Aliance Production</title>
</head>

<body>
    <div class="mobile-menu">
        <ul class="mobile-menu-nav">
            <li class="mobile-menu-nav-item">
                <a href="./about.php" class="mobile-menu-link">О компании</a>
            </li>
            <li class="mobile-menu-nav-item">
                <a href="./contract.php" class="mobile-menu-link">Контрактное производство</a>
                <ul class="mobile-submenu">
                    <li class="mobile-submenu-item"><a href="./avto_him.php" class="mobile-submenu-link">Автомобильная
                            химия</a></li>
                    <li class="mobile-submenu-item"><a href="" class="mobile-submenu-link">Бытовая химия</a></li>
                    <li class="mobile-submenu-item"><a href="" class="mobile-submenu-link">Дезинфицирующие средства</a>
                    </li>
                    <li class="mobile-submenu-item"><a href="" class="mobile-submenu-link">Пищевые аэрозоли</a></li>
                    <li class="mobile-submenu-item"><a href="" class="mobile-submenu-link">Косметическая продукция</a>
                    </li>
                    <li class="mobile-submenu-item"><a href="" class="mobile-submenu-link">Краски аэрозольные</a></li>
                </ul>
            </li>
            <li class="mobile-menu-nav-item"><a href="./trademarks.php" class="mobile-menu-link">Собственные торговые
                    марки</a></li>
            <li class="mobile-menu-nav-item"><a href="./news.html" class="mobile-menu-link">Новости</a></li>
            <li class="mobile-menu-nav-item"><a href="./contact.html" class="mobile-menu-link">Контакты</a></li>
        </ul>

        <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
        <div class="mobile-info">
            <svg class="phone-icon" width="24" height="24">
                <use href="./img/sprite.svg#mark"></use>
            </svg>
            <address class="mobile-info-address">г. Мосвка, Холодильный пер. 4к1с8</address>
        </div>
        <!-- .mobile-info -->
        <div class="mobile-info">
            <svg class="phone-icon" width="24" height="24">
                <use href="./img/sprite.svg#mail"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">a.dragunov@tdaliance.ru</a>
        </div>
        <!-- /.mobile-info -->
    </div>
    
    <!-- /.mobile-menu -->
   

    <nav class="navbar <?= $navbar_style;?>">
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




