// Бургер меню
const btnMenuHeader = document.querySelector(".header-profile__menu-btn");
const burgerMenuHeader = document.querySelector(".header-profile__burger");
const burgerCloseHeader = document.querySelector(".burger-close");

btnMenuHeader.addEventListener("click", (e) => {
  e.preventDefault();
  burgerMenuHeader.classList.toggle("jp");
});

burgerCloseHeader.addEventListener("click", (e) => {
  e.preventDefault();
  burgerMenuHeader.classList.remove("appear");
});

// Кнопка разварачивания меню
const navClick = document.querySelector(".nav__click");
const navListHidden = document.querySelector(".nav__list-hidden");
const navListVisible = document.querySelector(".nav__list-visible");
const nav = document.querySelector(".nav");
const navText = document.querySelector(".nav__text");
const arrowDown = document.querySelector(".arrow_down");
const navLinksHidden = document.querySelectorAll(
  ".nav__list-hidden .nav__link"
);

navClick.addEventListener("click", (event) => {
  event.preventDefault();
  navClick.classList.toggle("open");
  navListHidden.classList.toggle("opacity");
  nav.classList.toggle("open");
  navListVisible.classList.toggle("open");
  arrowDown.classList.toggle("open");
  navText.classList.toggle("hidden");
});

navLinksHidden.forEach((link) => {
  link.addEventListener("click", () => {
    navClick.classList.remove("open");
    navListHidden.classList.add("opacity");
    nav.classList.remove("open");
    navListVisible.classList.remove("open");
    arrowDown.classList.remove("open");
    navText.classList.remove("hidden");
  });
});

//

const avatarButton = document.querySelector('.header-profile__button')
const headerProfileSelect = document.querySelector('.header-profile__select')
const headerProfileOption = document.querySelectorAll('.header-profile__option')

avatarButton.addEventListener("click", () => {
  headerProfileSelect.classList.toggle('header-profile__select-open')
})

headerProfileOption.forEach((button) => {
  button.addEventListener("click", () => {
    headerProfileSelect.classList.remove('header-profile__select-open')
  })
})
