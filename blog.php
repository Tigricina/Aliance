<?php 
$page_title = 'Блог';
$header_style = "hero-text-only";
$navbar_style = "navbar-light";
$breadcrumbs = [
    ['title' => 'Главная', 'url' => 'index.php'],
    ['title' => 'Блог', 'url' => '']
];

include_once('./template-parts/menu_navbar.php'); ?>
<?php include_once('./template-parts/header-page.php'); ?>
    <section class="section blog">
        <div class="container">
            <div class="blog-wrapper">
          
                 
                    <a href="./article.php" class="blog-card"><img src="./img/blog/blog_photo_1.jpg" alt="blog_photo_1"
                            class="blog-card-image">
                        <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных
                        </h3>
                        <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую
                            экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>
                    <a href="./article.php" class="blog-card"><img src="./img/blog/blog_photo_2.jpg" alt="blog_photo_1"
                            class="blog-card-image">
                        <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна
                        </h3>
                        <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально
                            разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>
                    <a href="./article.php" class="blog-card"><img src="./img/blog/blog_photo_1.jpg" alt="blog_photo_1"
                            class="blog-card-image">
                        <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных
                        </h3>
                        <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую
                            экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>
                    <a href="./article.php" class="blog-card"><img src="./img/blog/blog_photo_2.jpg" alt="blog_photo_1"
                            class="blog-card-image">
                        <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна
                        </h3>
                        <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально
                            разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>
                </div>

                    <!-- Пагинация цифрами -->
            <div class="blog-pagination">
                <a href="./blog.php" class="page-link active">1</a>
                <a href="./blog.php" class="page-link">2</a>
                <a href="./blog.php" class="page-link">3</a>
                <a href="./blog.php" class="page-link">4</a>
                <a href="./blog.php" class="page-link">5</a>
            </div>
                </div>

 <?php include_once('./template-parts/cta.php'); ?>
<?php include_once('./template-parts/footer.php'); ?>