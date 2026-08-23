const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page");

const lightModeOn = (event) => {
    navbar.classList.add("navbar-light");
};

const lightModeOff = (event) => {
    navbar.classList.remove("navbar-light");
};

const changeNavHeight = (height) => {
    navbar.style.height = height;
};

const openMenu = (event) => {
    menu.classList.add("is-open");
    mMenuToggle.classList.add("close-menu");
    document.body.style.overflow = "hidden";
    lightModeOn();
}
const closeMenu = (event) => {
    menu.classList.remove("is-open");
    mMenuToggle.classList.remove("close-menu");
    document.body.style.overflow = "";
    lightModeOff();
}

window.addEventListener("scroll", () => {
    this.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");
    if (isFront) {
        this.scrollY > 1 ? lightModeOn() : lightModeOn();
    }
});

mMenuToggle.addEventListener("click", (event) => {
    event.preventDefault();
    menu.classList.contains('is-open') ? closeMenu() : openMenu();
});

const swiperSteps = new Swiper('.steps-slider', {
    speed: 400,
    slidesPerView: 4,
    navigation: {
        nextEl: '.steps-button-next',
        prevEl: '.steps-button-prev',
    },
    breakpoints: {
        576: {
            slidesPerView: 2,
        },
        760: {
            slidesPerView: 3
        },
        1024: {
            slidesPerView: 4
        },
    }
});

const swiper = new Swiper('.features-slider', {
    speed: 400,
    slidesPerView: 1,
    navigation: {
        nextEl: '.slider-button-next',
        prevEl: '.slider-button-prev',
    },
    breakpoints: {
        576: {
            slidesPerView: 2,
        },
        760: {
            slidesPerView: 3
        },
        1024: {
            slidesPerView: 4
        },
        1200: {
            slidesPerView: 5
        }
    }
});

const swiperBlog = new Swiper('.blog-slider', {
    speed: 400,
    slidesPerView: 1,
    spaceBetween: 30,
    navigation: {
        nextEl: '.blog-button-next',
        prevEl: '.blog-button-prev',
    },
    breakpoints: {
        760: {
            slidesPerView: 2
        }
    }
});

// ============================================
// МОДАЛЬНОЕ ОКНО "ЕСТЬ ВОПРОСЫ?" (ПЕРВАЯ МОДАЛКА)
// ============================================

const modal = document.querySelector(".modal:not(.modal-success)");
const modalDialog = document.querySelector(".modal:not(.modal-success) .modal-dialog");

// Открытие/закрытие первой модалки
document.addEventListener("click", (event) => {
    // Проверяем, кликнули ли по кнопке открытия
    const isToggleBtn = event.target.closest('[data-toggle="modal"]');

    // Проверяем, кликнули ли по крестику
    const isCloseBtn = event.target.closest('.modal-close');

    // Проверяем, открыта ли модалка успеха - если да, то игнорируем
    const successModal = document.querySelector(".modal-success");
    if (successModal && successModal.classList.contains("is-open")) {
        return;
    }

    if (isToggleBtn) {
        event.preventDefault();
        if (modal) {
            modal.classList.add("is-open");
            document.body.style.overflow = "hidden";
        }
    }

    if (isCloseBtn && modal && modal.classList.contains("is-open")) {
        event.preventDefault();
        modal.classList.remove("is-open");
        document.body.style.overflow = "";
    }
});

// Закрытие первой модалки по клику на фон (только если клик НЕ по инпуту)
document.addEventListener("click", (event) => {
    if (modal && modal.classList.contains("is-open")) {
        // Проверяем, что клик был по фону, а не по содержимому модалки
        const isDialog = event.target.closest('.modal-dialog');
        const isInput = event.target.closest('input, textarea, select, button');

        // Если клик не по диалогу И не по инпуту - закрываем
        if (!isDialog && !isInput) {
            modal.classList.remove("is-open");
            document.body.style.overflow = "";
        }
    }
});

// Закрытие первой модалки по ESC
document.addEventListener("keyup", (event) => {
    if (event.key === "Escape") {
        const successModal = document.querySelector(".modal-success");
        if (successModal && successModal.classList.contains("is-open")) {
            // Если открыта модалка успеха - закрываем её
            successModal.classList.remove("is-open");
            document.body.style.overflow = "";
            return;
        }

        if (modal && modal.classList.contains("is-open")) {
            modal.classList.remove("is-open");
            document.body.style.overflow = "";
        }
    }
});

// ============================================
// МОДАЛЬНОЕ ОКНО УСПЕХА (ВТОРАЯ МОДАЛКА)
// ============================================

const successModal = document.querySelector(".modal-success");
const successModalDialog = document.querySelector(".modal-success .modal-dialog");

function showSuccessModal() {
    if (successModal) {
        successModal.classList.add("is-open");
        document.body.style.overflow = "hidden";
    }
}

function hideSuccessModal() {
    if (successModal) {
        successModal.classList.remove("is-open");
        document.body.style.overflow = "";
    }
}

// Закрытие модалки успеха по крестику
document.addEventListener("click", (event) => {
    const isCloseBtn = event.target.closest('.modal-close');
    if (isCloseBtn && successModal && successModal.classList.contains("is-open")) {
        event.preventDefault();
        hideSuccessModal();
    }
});

// Закрытие модалки успеха по клику на фон (только если клик НЕ по инпуту)
document.addEventListener("click", (event) => {
    if (successModal && successModal.classList.contains("is-open")) {
        const isDialog = event.target.closest('.modal-dialog');
        const isInput = event.target.closest('input, textarea, select, button');

        if (!isDialog && !isInput) {
            hideSuccessModal();
        }
    }
});

// Кнопка "Вернуться на главную" в модалке успеха
document.addEventListener("click", (event) => {
    const isHomeBtn = event.target.closest('.modal-form-button');
    if (isHomeBtn && successModal && successModal.classList.contains("is-open")) {
        window.location.href = "/";
    }
});

// ============================================
// МАСКА ТЕЛЕФОНА
// ============================================

document.querySelectorAll('[name="userphone"]').forEach((input) => {
    IMask(input, {
        mask: '+{7} (000) 000-00-00',
        lazy: false,
        placeholderChar: '_'
    });
});

// ============================================
// ВАЛИДАЦИЯ И ОТПРАВКА ФОРМ
// ============================================

const forms = document.querySelectorAll("form");

forms.forEach((form) => {
    const validation = new JustValidate(form, {
        errorFieldCssClass: "is-invalid",
    });

    validation
        .addField("[name=username]", [
            {
                rule: "required",
                errorMessage: "Укажите имя",
            },
            {
                rule: "maxLength",
                value: 30,
                errorMessage: "Максимально 30 символов"
            }
        ])
        .addField("[name=userphone]", [
            {
                rule: "required",
                errorMessage: "Укажите телефон",
            },
            {
                rule: "customRegexp",
                value: /^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$/,
                errorMessage: "Введите номер в формате +7 (999) 123-45-67"
            }
        ])
        .onSuccess((event) => {
            const thisForm = event.target;
            const formData = new FormData(thisForm);

            fetch(thisForm.getAttribute("action"), {
                method: thisForm.getAttribute("method"),
                body: formData,
            })
                .then((response) => response.text())
                .then((data) => {
                    if (data.trim() === "Success") {
                        thisForm.reset();

                        // Закрываем первую модалку
                        if (modal && modal.classList.contains("is-open")) {
                            modal.classList.remove("is-open");
                        }

                        // Открываем модалку успеха
                        showSuccessModal();
                    } else {
                        alert("Ошибка при отправке. Попробуйте позже.");
                    }
                })
                .catch((error) => {
                    console.error("Ошибка:", error);
                    alert("Произошла ошибка при отправке. Попробуйте позже.");
                });
        });
});