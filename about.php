<?php 
$page_title = 'О компании';
$header_style = "hero-text-only"; 
$navbar_style = "navbar-light";

$breadcrumbs = [
    ['title' => 'Главная', 'url' => 'index.php'],
    ['title' => 'О компании', 'url' => '']
];
include_once('./template-parts/menu_navbar.php'); ?>
<?php include_once('./template-parts/header-page.php'); ?>

<?php 
$topic_title = 'мы - эксперты в области производства химии';
$topic_text = 'Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.';
$topic_image = '../img/experts.png'; 
$image_alt = 'experts';

include_once('./template-parts/first_topic.php'); ?>
<div class="container">
<?php 
$slider_style = "dark-features-slider";
include_once('./template-parts/slider_main.php'); ?>
</div>
<?php 
$topic_title = 'Наше производство';
$topic_text = 'Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий.';
$topic_text2 = 'Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.';

$topic_image = '../img/production.png'; 
$image_alt = 'doctor';

include_once('./template-parts/second_topic.php'); ?>

<?php include_once('./template-parts/founder.php'); ?>

<?php include_once('./template-parts/research_center.php'); ?>

<?php include_once('./template-parts/blog_template.php'); ?>

<?php include_once('./template-parts/clients.php'); ?>

<?php include_once('./template-parts/cta.php'); ?>
<?php include_once('./template-parts/footer.php'); ?>



