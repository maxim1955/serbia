const passModal = document.querySelector('.pass__modal-z')
const passModalEmail = document.querySelector('.pass__container-email')

const passModalCode = document.querySelector('.pass__container-code')

const passModalPasswords = document.querySelector('.pass__container-pass')

const passModalClose = document.querySelector('.pass__close')

passModalClose.addEventListener('click', (e) => {
  window.location.href = '/login';
})

function updateButtonVisibility(input) {
  const button = input.nextElementSibling;
  if (input.value.length === 0) {
    button.classList.add("input-figure-hidden");
  } else {
    button.classList.remove("input-figure-hidden");
  }
}

function clearField(input) {
  input.value = "";
  updateButtonVisibility(input);
}

function clearFields(input) {
  input.value = "";
}

const inputWithClear = document.querySelectorAll(".input__clear");

inputWithClear.forEach((item) => {
  item.addEventListener("input", () => {
    updateButtonVisibility(item);
  });

  const clearButton = item.nextElementSibling;
  if (clearButton) {
    clearButton.addEventListener("click", () => {
      clearField(item);
    });
  }
});

let passValidation = new JustValidate('#passform', {
  focusInvalidField: false,
});

passValidation.addField('#emailpassform', [
  {
    rule: 'required',
    errorMessage: 'Введите Email'
  },
  {
    rule: "email",
    errorMessage: "Введите корректный E-mail",
  },
  {
    rule: "maxLength",
    value: 256,
    errorMessage: "E-mail не может содержать больше 256 символов",
  },
])
  .onSuccess((e) => {
    e.preventDefault()
    window.location.href = 'recovery-code.html'
  })

