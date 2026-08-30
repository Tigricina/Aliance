<?php 
$page_title = 'Собственные торговые марки';
$header_style = "hero-text-only";
$navbar_style = "navbar-light";
$breadcrumbs = [
    ['title' => 'Главная', 'url' => 'index.php'],
    ['title' => 'О компании', 'url' => '']
];

include_once('./template-parts/menu_navbar.php'); ?>
<?php include_once('./template-parts/header-page.php'); ?>

 <?php include_once('./template-parts/trademarks-block.php');?>
<?php include_once('./template-parts/footer.php'); ?>





