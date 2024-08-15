const passwordBtns = document.querySelectorAll(".input-figure-eye");
const inputPasswords = document.querySelectorAll(".input__pass");

for (let i = 0; i < passwordBtns.length; i++) {
  passwordBtns[i].addEventListener("click", function (e) {
    e.preventDefault();

    const inputPassword = inputPasswords[i];
    if (inputPassword.getAttribute("type") === "password") {
      inputPassword.setAttribute("type", "text");
    } else {
      inputPassword.setAttribute("type", "password");
    }
  });
}

let profileValidation = new JustValidate('#profile-form')

profileValidation.addField('#name', [
  {
    rule: 'required',
    errorMessage: 'Введите Ф.И.О.'
  },
  {
    rule: "customRegexp",
    value: /[a-zа-яё]/i,
    errorMessage: "Введите корректное Ф.И.О.",
  },
  {
    rule: "maxLength",
    value: 100,
    errorMessage: "Фамилия не может содержать больше 100 символов",
  },
])
  .addField('#email', [
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
  .addField('#phone', [
    {
      rule: "required",
      errorMessage: "Введите ваш телефон",
    },
    {
      rule: "customRegexp",
      value: /\+?[0-9\s\-\+\(\)]+/i,
      errorMessage: "Введите корректный номер телефона",
    },
    {
      rule: "maxLength",
      value: 18,
      errorMessage: "Номер телефона не может содержать больше 18 символов",
    },
  ])
  .addField('#profname', [
    {
      rule: 'required',
      errorMessage: 'Введите Ф.И.О. представителя'
    },
    {
      rule: "customRegexp",
      value: /[a-zа-яё]/i,
      errorMessage: "Введите корректное Ф.И.О. представителя",
    },
    {
      rule: "maxLength",
      value: 100,
      errorMessage: "Ф.И.О. представителя не может содержать больше 100 символов",
    },
  ])
  .addField('#school', [
    {
      rule: 'required',
      errorMessage: 'Введите наименование учебного заведения'
    },
    {
      rule: "customRegexp",
      value: /[a-zа-яё]/i,
      errorMessage: "Введите корректное наименование учебного заведения",
    },
    {
      rule: "maxLength",
      value: 100,
      errorMessage: "Наименование учебного заведения не может содержать больше 156 символов",
    },
  ])
  .addField('#city', [
    {
      rule: 'required',
      errorMessage: 'Выберите город'
    }
  ])
  .addField('#cat', [
    {
      rule: 'required',
      errorMessage: 'Выберите категорию'
    }
  ])

// форма пароля в лк

let profilePassValidation = new JustValidate('#profile-pass-form')

profilePassValidation.addField('#pass', [
  {
    rule: 'required',
    errorMessage: 'Введите текущий пароль'
  },
  {
    rule: "maxLength",
    value: 64,
    errorMessage: "Пароль не может содержать больше 64 символов",
  },
  {
    rule: "minLength",
    value: 6,
    errorMessage: "Пароль не может содержать меньше 6 символов",
  }
])
  .addField('#newpass', [
    {
      rule: 'required',
      errorMessage: 'Введите новый пароль'
    },
    {
      rule: "maxLength",
      value: 64,
      errorMessage: "Новый пароль не может содержать больше 64 символов",
    },
    {
      rule: "minLength",
      value: 6,
      errorMessage: "Новый пароль не может содержать меньше 6 символов",
    }
  ])
  .addField('#rep-newpass', [
    {
      rule: 'required',
      errorMessage: 'Повторите новый пароль'
    },
    {
      validator: (value, fields) => {
        if (
          fields['#newpass'] &&
          fields['#rep-newpass'].elem
        ) {
          const repeatPasswordValue =
            fields['#newpass'].elem.value;

          return value === repeatPasswordValue;
        }

        return true;
      },
      errorMessage: 'Пароли не совпадают',
    }
  ])

//Кнопка очистки инпута

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

const inputWithClear = document.querySelectorAll(".input__clear");

inputWithClear.forEach((item) => {
  item.addEventListener("input", () => {
    updateButtonVisibility(item);
  });

  const clearButton = item.nextElementSibling;
  clearButton.addEventListener("click", (event) => {
    event.preventDefault();
    clearField(item);
  });
});

const cityButton = document.querySelector('.city-button')

cityButton.addEventListener("click", () => {
  const regSelect = document.querySelector('.reg-select')
  regSelect.classList.toggle('reg-select-hidden')
})

const catButton = document.querySelector('.cat-button')

catButton.addEventListener("click", () => {
  const regSelectCat = document.querySelector('.reg-select-cat')
  regSelectCat.classList.toggle('reg-select-cat-hidden')
})
//Получения значения из спика в инпут
const inp_cat = document.querySelector('.profilelk__input-cat');
const li_item_cat = document.querySelectorAll('.reg-select-cat-option');

for (let i = 0;i < li_item_cat.length;i = i + 1) {
	li_item_cat[i].addEventListener('click',function () {
  	inp_cat.value = this.dataset.value;
  }, false)
}

const inp_city = document.querySelector('.profilelk__input-city');
const li_item_city = document.querySelectorAll('.reg-select-option');

for (let i = 0;i < li_item_cat.length;i = i + 1) {
	li_item_city[i].addEventListener('click',function () {
  	inp_city.value = this.dataset.value;
  }, false)
}