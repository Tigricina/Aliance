<?php
// Переменная, которую вы будете задавать перед подключением шаблона
// $blog_layout = 'blog--large';    // Вариант 1: 2 элемента с заголовками
// $blog_layout = 'blog--gallery';  // Вариант 2: много мелких картинок без текста

// Если переменная не задана, по умолчанию используем первый вариант
$blog_layout = $blog_layout ?? 'blog--large';
?>

<section class="section blog <?php echo htmlspecialchars($blog_layout); ?>">
    <div class="container">
        <!-- Сепаратор и заголовок показываем ТОЛЬКО для первого варианта -->
        <?php if ($blog_layout === 'blog--large'): ?>
            <div class="seporator"></div>
            <h2 class="section-title">Блог экспертов в области производства</h2>
        <?php endif; ?>

        <!-- Начало Slider Блог экспертов -->
        <div class="swiper blog-slider">
            <div class="swiper-wrapper">
                
                <!-- Слайд 1 -->
                <a href="#" class="swiper-slide blog-card">
                    <img src="./img/blog/blog_photo_1.jpg" alt="blog_photo_1" class="blog-card-image">
                    <!-- Текст показываем ТОЛЬКО для первого варианта -->
                    <?php if ($blog_layout === 'blog--large'): ?>
                        <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию...</p>
                    <?php endif; ?>
                </a>

                <!-- Слайд 2 -->
                <a href="#" class="swiper-slide blog-card">
                    <img src="./img/blog/blog_photo_2.jpg" alt="blog_photo_2" class="blog-card-image">
                    <?php if ($blog_layout === 'blog--large'): ?>
                        <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены...</p>
                    <?php endif; ?>
                </a>

                <!-- Слайд 3 -->
                <a href="#" class="swiper-slide blog-card">
                    <img src="./img/blog/blog_photo_1.jpg" alt="blog_photo_1" class="blog-card-image">
                    <?php if ($blog_layout === 'blog--large'): ?>
                        <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию...</p>
                    <?php endif; ?>
                </a>

                <!-- Слайд 4 -->
                <a href="#" class="swiper-slide blog-card">
                    <img src="./img/blog/blog_photo_2.jpg" alt="blog_photo_2" class="blog-card-image">
                    <?php if ($blog_layout === 'blog--large'): ?>
                        <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены...</p>
                    <?php endif; ?>
                </a>

            </div>

            <div class="blog-slider-footer">
                <a href="" class="button-link">Весь блог</a>
                <!-- navigation buttons -->
                <div class="blog-buttons primary-buttons-wrapper">
                    <div class="blog-button-prev primary-button-prev">
                        <svg width="24" height="24">
                            <use href="./img/sprite.svg#prev"></use>
                        </svg>
                    </div>
                    <div class="blog-button-next primary-button-next">
                        <svg width="24" height="24">
                            <use href="./img/sprite.svg#next"></use>
                        </svg>
                    </div>
                </div>
            </div>

        </div>
        <!-- окончание Slider -->

    </div>
    <!-- /.container-->
</section>