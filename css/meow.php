<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Модальное окно - тест</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/swiper-bundle.min.css">
</head>

<body>

    <!-- СТРАНИЦА С КОНТЕНТОМ -->
  

    <!-- ===== МОДАЛЬНОЕ ОКНО ===== -->
    <!-- Сейчас НЕТ класса active, поэтому скрыто -->
    <div class="modal-success active" id="successModal">
        <div class="modal-success-dialog">
            <!-- Крестик закрытия -->
            <a href="#" class="modal-success-close"
                onclick="document.getElementById('successModal').classList.remove('active'); return false;">
                <svg class="modal-success-close-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </a>

            <div class="modal-success-content">
                <!-- Картинка (временно заглушка) -->
                <div class="modal-success-image-wrapper">
                    <div class="modal-success-image-placeholder">✓</div>

                    <img src="./img/thanks.png" alt="Заявка отправлена" class="modal-success-image">

                </div>

                <h2 class="modal-success-title">СПАСИБО ЗА ЗАЯВКУ!</h2>

                <p class="modal-success-text">
                    Наш менеджер свяжется с Вами в ближайшее время, ответит на все интересующие вопросы и поможет даже в
                    самых сложных случаях!
                </p>

                <a href="/" class="modal-success-button">Вернуться на главную</a>
            </div>
        </div>
    </div>

 

</body>

</html>