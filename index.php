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

 
     <?php include_once('./template-parts/work_scheme.php')?>

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