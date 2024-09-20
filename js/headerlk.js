
const avatarButton = document.querySelector('.header-profile__button')
const headerProfileSelect = document.querySelector('.header-profile__select')
const headerProfileOption = document.querySelectorAll('.header-profile__option')

if (avatarButton) {
  avatarButton.addEventListener("click", () => {
    headerProfileSelect.classList.toggle('header-profile__select-open')
  })
}

if (headerProfileOption) {
  headerProfileOption.forEach((button) => {
    button.addEventListener("click", () => {
      headerProfileSelect.classList.remove('header-profile__select-open')
    })
  })
}
