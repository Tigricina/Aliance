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
    <title>Современная методология разработки - Aliance Production</title>
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
                    <li class="mobile-submenu-item"><a href="" class="mobile-submenu-link">Автомобильная химия</a></li>
                    <li class="mobile-submenu-item"><a href="" class="mobile-submenu-link">Бытовая химия</a></li>
                    <li class="mobile-submenu-item"><a href="" class="mobile-submenu-link">Дезинфицирующие средства</a>
                    </li>
                    <li class="mobile-submenu-item"><a href="" class="mobile-submenu-link">Пищевые аэрозоли</a></li>
                    <li class="mobile-submenu-item"><a href="" class="mobile-submenu-link">Косметическая продукция</a>
                    </li>
                    <li class="mobile-submenu-item"><a href="" class="mobile-submenu-link">Краски аэрозольные</a></li>
                </ul>
            </li>
            <li class="mobile-menu-nav-item"><a href="./services.html" class="mobile-menu-link">Собственные торговые
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
            <li class="header-nav-item"><a href="./services.html" class="header-nav-link">Собственные торговые
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


    <header class="header hero hero-background">
        <div class="container hero">

            <div class="hero-content">
                <div class="seporator"></div>
                <h1 class="hero-title background">Современная методология разработки одухотворила всех причастных
                </h1>


            </div>
            <!-- /.header-content -->




            <nav class="breadcrumbs background">
                <a href="./index.html" class="hero-link">Главная</a> —
                <a href="./blog.html" class="hero-link">Блог</a> —
                <span>Современная методология разработки одухотворила всех причастных</span>
            </nav>



        </div>
        <!-- /.container-->
    </header>




    <?php include_once('footer.php') ?>


    <div class="modal">
        <div class="modal-dialog">
            <h2 class="modal-title">Есть вопросы?</h2>
            <a href="#" class="modal-close">
                <svg class="modal-close-icon" width="24" height="24">
                    <use href="img/sprite.svg#close"></use>
                </svg>
            </a>
            <p class="modal-text">
                Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время,
                ответит на все интересующие вопросы и поможет даже в самых сложных случаях!
            </p>


            <form action="#" class="modal-form">

                <div class="input-group-wrapper input-group-vertical">
                    <div class="input-group modal-input-group">
                        <input id="modal-user-name" type="text" class="input modal-input" placeholder=" " />
                        <label class="input-group-label modal-input-label" for="user-name">Имя</label>
                    </div>
                    <!-- /.input-group -->
                    <div class="input-group modal-input-group">
                        <input id="modal-user-phone" type="tel" class="input modal-input" placeholder=" " />
                        <label class="input-group-label modal-input-label" for="user-phone">Номер телефона</label>
                    </div>
                    <!-- /.input-group -->


                </div>
                <!-- /.input-group-wrapper -->
                <div class="modal-form-footer">
                    <button type="submit" class="button modal-form-button">Отправить заявку</button>
                    <div class="notify">
                        <svg class="notify-icon">
                            <use href="img/sprite.svg#shield"></use>
                        </svg>
                        <p class="notify-text">
                            Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную
                            конфиденциальность информации!
                        </p>
                    </div>
                </div>

            </form>



        </div>
    </div>




    <script src="./js/swiper-bundle.min.js"></script>
    <script src="./js/main.js"></script>

</body>

</html>