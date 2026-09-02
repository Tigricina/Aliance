    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <svg class="logo-svg footer-logo">
                    <use href="img/sprite.svg#logo"></use>
                </svg>
                <a href="tel:+74996861014" class="footer-phone">+7 (499) 686-10-14</a>
                <div class="footer-info">
                    <svg class="phone-icon" width="24" height="24">
                        <use href="img/sprite.svg#mark"></use>
                    </svg>
                    <address class="footer-info-address">
                        г. Москва, Холодильный пер. 4к1с8
                    </address>
                </div>
                <!-- /.footer-info -->
                <div class="footer-info">
                    <svg class="phone-icon" width="24" height="24">
                        <use href="img/sprite.svg#mail"></use>
                    </svg>
                    <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">
                        a.dragunov@tdaliance.ru
                    </a>
                </div>
                <!-- /.footer-info -->

                <div class="footer-social">
                    <a href="#" class="footer-social-link">
                        <svg class="footer-social-icon" width="24" height="24">
                            <use href="img/sprite.svg#vk"></use>
                        </svg>
                    </a>
                    <a href="#" class="footer-social-link">
                        <svg class="footer-social-icon" width="24" height="24">
                            <use href="img/sprite.svg#inst"></use>
                        </svg>
                    </a>
                </div>
                <!-- /.footer-social -->




            </div>


        </div>
        <hr class="footer-seporator" />

        <div class="container">
            <div class="footer-bottom">
                <div class="footer-menu-wrapper">
                    <h2 class="footer-menu-title">Контрактное производство</h2>
                    <ul class="footer-menu-list footer-menu-column-2 deep">
                        <li class="footer-menu-item">
                            <a href="./avto_him.php" class="footer-menu-link">Автомобильная химия</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Бытовая химия</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Дезинфицирующие средства</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Косметическая продукция</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Краски аэрозольные</a>
                        </li>
                    </ul>
                </div>
                <!-- /.footer-menu-wrapper -->
                <div class="footer-menu-wrapper">
                    <h2 class="footer-menu-title">Собственные марки</h2>
                    <ul class="footer-menu-list deep">
                        <li class="footer-menu-item">
                            <a href="./ag_tech.php" class="footer-menu-link">Автохимия AG-Tech</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Автохимия AP</a>
                        </li>
                    </ul>
                </div>
                <!-- /.footer-menu-wrapper -->
                <div class="footer-menu-wrapper">
                    <ul class="footer-menu-list">
                        <li class="footer-menu-item">
                            <a href="./about.php" class="footer-menu-link footer-menu-link-bold">О компании</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link footer-menu-link-bold">Новости</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link footer-menu-link-bold">Контакты</a>
                        </li>
                    </ul>
                </div>
                <!-- /.footer-menu-wrapper -->
            </div>
        </div>

        <hr class="footer-seporator" />
        <div class="container"> 
        <div class="footer-wrapper">
            <div class="footer-legal">
                <p class="footer-copyright">
                    &copy; <?php echo date('Y') ?>  «Aliance Production». Все права защищены.
                </p>
                <a href="./Privacy_policy.php" class="footer-policy">Политики конфиденциальности</a>
            </div>
            <!-- /.footer-legal -->
            <div class="footer-author">
                <span class="made-in">Сделано в</span>
                <svg class="footer-author-logo" width="52" height="12">
                    <use href="img/sprite.svg#ruso"></use>
                </svg>
            </div>
            <!-- /.footer-author -->
        </div>
        <!-- /.footer-wrapper -->
         </div>





    </footer>

    <div class="modal" id="alert-modal">
        <div class="modal-dialog">
            <h2 class="modal-title">Есть вопросы?</h2>
            <a href="#" class="modal-close" data-toggle="modal" data-target="#alert-modal">
                <svg class="modal-close-icon" width="24" height="24">
                    <use href="img/sprite.svg#close"></use>
                </svg>
            </a>
            <p class="modal-text">
                Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время,
                ответит на все интересующие вопросы и поможет даже в самых сложных случаях!
            </p>


            <form action="handler.php" method="POST" class="modal-form">

                <div class="input-group-wrapper input-group-vertical">
                    <div class="input-group modal-input-group">
                        <input id="modal-user-name" type="text" class="input modal-input" placeholder=" " 
                        name ="username"/>
                        <label class="input-group-label modal-input-label" for="user-name">Имя</label>
                    </div>
                    <!-- /.input-group -->
                    <div class="input-group modal-input-group">
                        <input id="modal-user-phone" type="tel" class="input modal-input" placeholder=" " 
                        name ="userphone"/>
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



<!-- Модальное окно успешной отправки -->
<div class="modal modal-success" id="successModal">
    <div class="modal-dialog modal-success-dialog">
        <a href="#" class="modal-close">
            <svg class="modal-close-icon" width="24" height="24">
                <use href="img/sprite.svg#close"></use>
            </svg>
        </a>
        
        <div class="modal-success-content">
            <!-- Картинка успеха -->
            <div class="modal-success-image-wrapper">
                <img src="./img/thanks.png" alt="Заявка отправлена" class="modal-success-image">
            </div>
            
            <h2 class="modal-title">СПАСИБО ЗА ЗАЯВКУ!</h2>
            
            <p class="modal-text">
                Наш менеджер свяжется с Вами в ближайшее время, ответит на все интересующие вопросы и поможет даже в самых сложных случаях!
            </p>
            
            <button type="button" class="button modal-form-button">Вернуться на главную</button>
        </div>
    </div>
</div>


    <script src="./js/swiper-bundle.min.js"></script>
    <script src="./js/just-validate.production.min.js"></script>
    <script src="https://unpkg.com/imask"></script>
    <script src="./js/main.js"></script>

</body>
</html>