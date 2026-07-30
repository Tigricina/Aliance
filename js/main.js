const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector('.mobile-menu');

const openMenu = (event) => {
    //функция открывания меню
    menu.classList.add("is-open");  //вешает класс is-open
    document.body.style.overflow = "hidden";  //запрещает прокрутку сайта под меню
}
const closeMenu = (event) => {
    //функция закрывания меню
    menu.classList.remove("is-open");  //убирает класс is-open
    document.body.style.overflow = "";  //возвращает прокрутку сайта под меню
}
window.addEventListener("scroll", () => {
    if (this.scrollY > 1) {
        navbar.classList.add("navbar-light");
        logo.href.baseVal = "img/sprite.svg#logo";
    } else {
        navbar.classList.remove("navbar-light");
        logo.href.baseVal = "img/sprite.svg#logo-light";
    }
})
mMenuToggle.addEventListener("click", (event) => {
    event.preventDefault();
    //menu.classList.toggle("is-open");
    //openMenu();
    if (menu.classList.contains('is-open')) { //если меню открыто...
        closeMenu(); //закрыть меню
    } else { //иначе...
        openMenu(); //открыть меню
    }

});