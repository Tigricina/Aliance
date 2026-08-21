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
    //функция открывания меню
    menu.classList.add("is-open");  //вешает класс is-open
    mMenuToggle.classList.add("close-menu");
    document.body.style.overflow = "hidden";  //запрещает прокрутку сайта под меню
    lightModeOn();
}
const closeMenu = (event) => {
    //функция закрывания меню
    menu.classList.remove("is-open");  //убирает класс is-open
    mMenuToggle.classList.remove("close-menu");
    document.body.style.overflow = "";  //возвращает прокрутку сайта под меню
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
    //menu.classList.toggle("is-open");
    //openMenu();
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
        // when window width is >= 320px

        576: {
            slidesPerView: 2,


        },
        // when window width is >= 480px
        760: {
            slidesPerView: 3

        },
        // when window width is >= 640px
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
        // when window width is >= 320px

        576: {
            slidesPerView: 2,


        },
        // when window width is >= 480px
        760: {
            slidesPerView: 3

        },
        // when window width is >= 640px
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



const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");

document.addEventListener("click", (event) => {
    // 1. Проверяем, кликнули ли по кнопке открытия (data-toggle="modal")
    const isToggleBtn = event.target.closest('[data-toggle="modal"]');

    // 2. Проверяем, кликнули ли по крестику закрытия (.modal-close)
    const isCloseBtn = event.target.closest('.modal-close');

    // 3. Проверяем клик по темному фону (оверлею) вне диалога
    const isBackdropClick = modal.classList.contains("is-open") &&
        !event.composedPath().includes(modalDialog);

    if (isToggleBtn || isCloseBtn || isBackdropClick) {
        event.preventDefault();
        modal.classList.toggle("is-open");
    }
});

document.addEventListener("keyup", (event) => {
    if (event.key === "Escape" && modal.classList.contains("is-open")) {
        modal.classList.remove("is-open");
    }
});