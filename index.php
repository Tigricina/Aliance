<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   
  
    <link rel="stylesheet" href="./css/style.css">
    
    <title>Aliance Production</title>
</head>

<body class="front-page">
<?php 

include_once('./template-parts/menu_navbar.php') ?>

 
    <header class="header header-image">
        <div class="container">
            <div class="header-content">
                <div class="seporator"></div>
                <h1 class="header-title">Комплексное обеспечение товарами и&nbsp;расходными материалами бизнеса</h1>
                <p class="header-text">Высокий уровень вовлечения представителей целевой аудитории является четким
                    доказательством простого факта: высококачественный прототип будущего проекта напрямую зависит от
                    анализа существующих паттернов поведения.</p>
                <button class="button header-button" data-toggle="modal" data-target="#feedback-modal">Подробнее о компании</button>
            </div>
            <!-- /.header-content -->

            

<?php 

$slider_style = "header-features";
include_once('./template-parts/slider_main.php'); ?>

             </div>
        <!-- /.container-->
    </header>

    <section class="section section-light">
        <div class="container">
            <div class="seporator"></div>
            <h2 class="section-title">схема работы</h2>
            <!-- Начало Slider схема работы -->
            <div class="swiper steps-slider">
                <!-- Additional required wrapper -->
                <ol class="swiper-wrapper steps">
                    <!-- Slides -->
                    <li class="swiper-slide steps-item"><span class="steps-num">01</span>
                        <h3 class="steps-title">Знакомство</h3>
                        <p class="steps-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение
                            форм воздействия.</p>
                        <a href="#" class="button-link">Оставить заявку</a>
                    </li>
                    <li class="swiper-slide steps-item"><span class="steps-num">02</span>
                        <h3 class="steps-title">Заключение договора</h3>
                        <p class="steps-text">Лишь интерактивные прототипы призваны к ответу.</p>
                    </li>
                    <li class="swiper-slide steps-item"><span class="steps-num">03</span>
                        <h3 class="steps-title">Производство</h3>
                        <p class="steps-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии
                            функционально разнесены на независимые элементы.</p>
                    </li>
                    <li class="swiper-slide steps-item"><span class="steps-num">04</span>
                        <h3 class="steps-title">Доставка</h3>
                        <p class="steps-text">В частности, экономическая повестка сегодняшнего дня говорит о
                            возможностях приоритизации разума над эмоциями.</p>
                    </li>
                </ol>

                <!-- navigation buttons -->
                <div class="steps-buttons primary-buttons-wrapper">
                    <div class="steps-button-prev primary-button-prev">
                        <svg width="24" height="24">
                            <use href="./img/sprite.svg#prev"></use>
                        </svg>
                    </div>
                    <div class="steps-button-next primary-button-next">
                        <svg width="24" height="24">
                            <use href="./img/sprite.svg#next"></use>
                        </svg>
                    </div>
                </div>
                <!-- navigation buttons steps-buttons-->

            </div>
            <!-- окончание Slider схема работы -->

        </div>
        <!-- /.container-->
    </section>

    <section class="section production">
        <div class="container">
            <div class="seporator"></div>
            <h2 class="section-title">Контрактное производство</h2>
            <div class="cards">
                <a href="./avto_him.php" class="card">
                    <div class="card-content">
                        <h3 class="card-title">Автомобильная химия</h3>
                        <!-- /.card-title -->
                        <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение
                            форм
                            воздействия.</p>
                        <!-- /.card-text -->
                        <img src="./img/avto-him.png" alt="Автомобильная химия" class="card-image">
                    </div>
                    <!-- /.card-content -->
                </a>
                <!-- /.card -->

                <a href="#" class="card">
                    <div class="card-content">
                        <h3 class="card-title">Бытовая химия</h3>
                        <!-- /.card-title -->
                        <p class="card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии
                            функционально разнесены на независимые элементы.</p>
                        <!-- /.card-text -->
                        <img src="./img/bit-him.png" alt="Бытовая химия" class="card-image">
                    </div>
                    <!-- /.card -->
                </a>
                <a href="#" class="card">
                    <div class="card-content">
                        <h3 class="card-title">Дезинфицирующие средства</h3>
                        <!-- /.card-title -->
                        <p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p>
                        <!-- /.card-text -->
                        <img src="./img/dezinfect.png" alt="Дезинфицирующие средства" class="card-image">
                    </div>
                    <!-- /.card-content -->
                </a>
                <!-- /.card -->
                <a href="#" class="card">
                    <div class="card-content">
                        <h3 class="card-title">Пищевые аэрозоли</h3>
                        <!-- /.card-title -->
                        <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить
                            значение форм
                            воздействия.</p>
                        <!-- /.card-text -->
                        <img src="./img/dezinfect.png" alt="Пищевые аэрозоли" class="card-image">
                    </div>
                    <!-- /.card-content -->
                </a>
                <!-- /.card -->
                <a href="#" class="card">
                    <div class="card-content">
                        <h3 class="card-title">Косметическая продукция</h3>
                        <!-- /.card-title -->
                        <p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p>
                        <!-- /.card-text -->
                        <img src="./img/avto-him.png" alt="Косметическая продукция" class="card-image">
                    </div>
                    <!-- /.card-content -->
                </a>
                <!-- /.card -->
                <a href="#" class="card">
                    <div class="card-content">
                        <h3 class="card-title">Краски аэрозольные</h3>
                        <!-- /.card-title -->
                        <p class="card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии
                            функционально разнесены на независимые элементы.</p>
                        <!-- /.card-text -->
                        <img src="./img/bit-him.png" alt="Краски аэрозольные" class="card-image">
                    </div>
                    <!-- /.card-content -->
                </a>
                <!-- /.card -->
            </div>
            <!-- /.cards -->
    </section>

    <?php 
    $block_title = "Контрактное производство"; 
    include_once('./template-parts/contract-block.php')?>

    <?php 
    $block_title = "cобственные торговые марки"; 
    include_once('./template-parts/trademarks-block.php')?>


<?php include_once('./template-parts/founder.php'); ?>


<?php include_once('./template-parts/clients.php'); ?>
  

<?php include_once('./template-parts/blog-slider.php'); ?>


<?php include_once('./template-parts/footer.php') ?>


</body>
</html>