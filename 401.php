<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>401</title>
  <script defer src="js/menu-modals.js"></script>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/401_404.css"/>
  <link rel="stylesheet" href="css/media.css" />
  <link rel="stylesheet" href="css/modals.css"/>
  <link rel="icon" href="img/favicon.png" type="image/x-icon">
</head>

<body class="body-401">

  <!-- Модальное окно бургер-меню -->
  <div class="burger-menu">
    <div class="header-burger flex">
      <div class="burger-logo-block flex">
        <a href="/index.php" class="logo">
          <img src="img/logo_mobile.svg" alt="logo">
        </a>
        <a href="https://rs.gov.ru/" class="logo" target="_blank">
          <img src="img/logo-ros.png" class="burger-logo2" alt="logo">
        </a>
        <a href="https://concord.ac/" class="logo" target="_blank">
          <img src="img/logo-sodruzestvo.png" class="burger-logo3" alt="logo">
        </a>
      </div>
      <button class="btn-reset burger-close">
        <img src="img/close.svg" alt="">
      </button>
    </div>

    <div class="main-burger">
      <ul class="list-reset burger-list">
        <li class="burger-item">
          <a href="#" class="burger__link">Карта будущего</a>
        </li>
        <li class="burger-item">
          <a href="tests.html" class="burger__link">Профтест</a>
        </li>
        <li class="burger-item">
          <a href="materials.php" class="burger__link">Материалы</a>
        </li>
        <li class="burger-item">
          <a href="#" class="burger__link">Контакты</a>
        </li>
      </ul>

      <button class="btn-reset btn btn-color burger__btn flex">Войти</button>
    </div>

    <div class="burger-footer flex">
      <div class="footer_contacts">
        <a class="burger_contacts_text phone-burger flex" href="tel:+74951651508">
          <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M15.052 20.133C13.612 20.08 9.531 19.516 5.257 15.243C0.984 10.969 0.421 6.88897 0.367 5.44797C0.287 3.25197 1.969 1.11897 3.912 0.285971C4.14598 0.184938 4.4022 0.146472 4.65553 0.174347C4.90886 0.202222 5.15059 0.29548 5.357 0.444971C6.957 1.61097 8.061 3.37497 9.009 4.76197C9.21758 5.0667 9.30677 5.43752 9.25956 5.80377C9.21235 6.17002 9.03204 6.5061 8.753 6.74797L6.802 8.19697C6.70774 8.26504 6.64139 8.365 6.61528 8.47829C6.58916 8.59159 6.60505 8.71051 6.66 8.81297C7.102 9.61597 7.888 10.812 8.788 11.712C9.689 12.612 10.941 13.45 11.8 13.942C11.9077 14.0024 12.0345 14.0193 12.1543 13.9892C12.274 13.9591 12.3777 13.8842 12.444 13.78L13.714 11.847C13.9475 11.5368 14.2919 11.329 14.6752 11.2672C15.0584 11.2053 15.4508 11.2941 15.77 11.515C17.177 12.489 18.819 13.574 20.021 15.113C20.1826 15.3209 20.2854 15.5684 20.3187 15.8296C20.3519 16.0908 20.3144 16.3562 20.21 16.598C19.373 18.551 17.255 20.214 15.052 20.133Z"
              fill="white" />
          </svg>
          +7 (495) 165-15-08</a>
      </div>
      <div class="footer_contacts">
        <a class="burger_contacts_text flex" href="mailto:vr-rs@concord.ac">
          <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M2.5 16C1.95 16 1.47933 15.8043 1.088 15.413C0.696667 15.0217 0.500667 14.5507 0.5 14V2C0.5 1.45 0.696 0.979333 1.088 0.588C1.48 0.196666 1.95067 0.000666667 2.5 0H18.5C19.05 0 19.521 0.196 19.913 0.588C20.305 0.98 20.5007 1.45067 20.5 2V14C20.5 14.55 20.3043 15.021 19.913 15.413C19.5217 15.805 19.0507 16.0007 18.5 16H2.5ZM10.5 9L18.5 4V2L10.5 7L2.5 2V4L10.5 9Z"
              fill="white" />
          </svg>
          vr-rs@concord.ac</a>
      </div>
    </div>
  </div>

  <!-- Модальное окно авторизации -->
  <div class="auth">
    <div class="auth__modal flex">
      <div class="auth__close"></div>
      <div class="auth__container">
        <hi class="auth__title">АВТОРИЗАЦИЯ</hi>
        <form class="auth__form">
          <label class="auth__input-label">E-mail</label>
          <div class="auth__input-border">
            <input class="auth__input" placeholder="Введите E-mail">
          </div>
          <label class="auth__input-label">Пароль</label>
          <div class="auth__input-border">
            <input class="auth__input" placeholder="Введите пароль">
          </div>
          <a class="auth__miss-pass">Забыли пароль?</a>
          <span class="auth__text">Еще нет аккаунта? <a class="auth__link-reg">Зарегистрироваться</a></span>
          <button class="auth__button">Войти</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Модальное окно регистрации -->
  <div class="reg">
    <div class="reg__modal">
      <div class="reg__mask">
        <div class="reg__close"></div>
        <div class="reg__info-container">
          <h1 class="reg__title">ОТКРОЙ МИР НОВЫХ ВОЗМОЖНОСТЕЙ</h1>
          <h3 class="reg__text">При авторизации вы получите сертификат участника, программу мероприятий и
            эксклюзивные бонусы. Успейте забрать ваш ключ к новым знаниям, навыкам и незабываемым впечатлениям!</h3>
          <div class="reg__robot-image"></div>
          <div class="reg__info-figure"></div>
        </div>
        <form class="reg__form">
          <label class="reg__input-label">Ф.И.О.</label>
          <div class="reg__input-border">
            <input class="reg__input" placeholder="Введите Ф.И.О">
          </div>
          <label class="reg__input-label">Email</label>
          <div class="reg__input-border">
            <input class="reg__input" placeholder="Введите Email">
          </div>
          <label class="reg__input-label">Телефон</label>
          <div class="reg__input-border">
            <input class="reg__input" placeholder="Введите телефон">
          </div>
          <label class="reg__input-label">Город</label>
          <div class="reg__input-border">
            <input class="reg__input" placeholder="Выберите город">
          </div>
          <label class="reg__input-label">Категория</label>
          <div class="reg__input-border">
            <input class="reg__input" placeholder="Выберите категорию">
          </div>
          <label class="reg__input-label">Наименование учебного заведения</label>
          <div class="reg__input-border">
            <input class="reg__input reg__input-360" placeholder="Введите наименование учебного заведения">
          </div>
          <label class="reg__input-label">Вам есть 14 лет?</label>
          <div class="reg__radio-container reg__radio-container-first">
            <label class="reg__radio-label">
              <input class="reg__radio" name="age" type="radio">
              <span class="reg__fake-radio"></span>
              <span class="reg__input-label-rad">Да</span>
            </label>
          </div>
          <div class="reg__radio-container">
            <label class="reg__radio-label">
              <input class="reg__radio" name="age" type="radio" checked>
              <span class="reg__fake-radio"></span>
              <span class="reg__input-label-rad">Нет</span>
            </label>
          </div>
          <label class="reg__input-label reg__input-label-last">ФИО представителя</label>
          <div class="reg__input-border reg__input-border-last">
            <input class="reg__input" placeholder="Введите ФИО представителя">
          </div>
          <div class="reg__checkbox-container">

            <label class="reg__checkbox-label">
              <input class="reg__checkbox" type="checkbox">
              <span class="reg__fake-checkbox"></span>
              <span class="reg__checkbox-text">Соглашаюсь с условиями <span class="reg__checkbox-text-span">Политики
                  конфиденциальности,
                  Согласия на обработку персональных данных</span> и <span class="reg__checkbox-text-span">Согласия
                  Пользователя на обработку персональных
                  данных</span></span>
            </label>
          </div>
          <div class="reg__button-container">
            <button class="reg__button">Зарегистрироваться</button>
            <div class="reg__button-figure"></div>
          </div>
        </form>
      </div>
    </div>

    <div class="reg__notice">
      <div class="reg__notice-close"></div>
      <h1 class="reg__notice-title">ВЫ УСПЕШНО ЗАРЕГИСТРИРОВАЛИСЬ</h1>
      <span class="reg__notice-text">В ближайшее время на вашу электронную почту придёт письмо с логином и паролем для
        входа в
        аккаунт. Проверьте папку «Входящие» или «Спам», чтобы получить доступ к личному кабинету.</span>
      <img class="reg__notice-robot" src="img/robot-phone.svg" alt="">
    </div>

  </div>

  <!-- Модальное окно обратной связи -->
  <div class="fb">
    <div class="fb__modal">
      <div class="fb__close"></div>
      <div class="fb__container">
        <h1 class="fb__title">НЕ НАШЛИ ОТВЕТА НА СВОЙ ВОПРОС?</h1>
        <h3 class="fb__text">Воспользуйтесь формой, задайте вопрос, и мы лично свяжемся с вами в ближайшее время.</h3>
        <form class="fb__form">
          <label class="fb__input-label">Ф.И.О.*</label>
          <div class="fb__input-border">
            <input class="fb__input" placeholder="Введите Ф.И.О">
          </div>
          <label class="fb__input-label">E-mail*</label>
          <div class="fb__input-border">
            <input class="fb__input" placeholder="Введите E-mail">
          </div>
          <label class="fb__input-label">Телефон*</label>
          <div class="fb__input-border">
            <input class="fb__input" placeholder="Введите телефон">
          </div>
          <label class="fb__input-label">Задать вопрос *</label>
          <div class="fb__input-border">
            <textarea class="fb__input fb__input-textarea"></textarea>
          </div>
          <label class="fb__checkbox-label">
            <input class="fb__checkbox" type="checkbox">
            <span class="fb__fake-checkbox"></span>
            <span class="fb__checkbox-text">Соглашаюсь с условиями <span class="fb__checkbox-text-span">Политики
                конфиденциальности</span></span>
          </label>
          <label class="fb__checkbox-label fb__checkbox-label-second">
            <input class="fb__checkbox" type="checkbox">
            <span class="fb__fake-checkbox"></span>
            <span class="fb__checkbox-text">Соглашаюсь с условиями <span class="fb__checkbox-text-span">
                Согласия на обработку персональных данных, Согласия Пользователя на обработку персональных данных
              </span></span>
          </label>
          <button class="fb__button">Задать вопрос</button>
        </form>
      </div>
    </div>

    <div class="fb__notice fb__notice-display-none">
      <div class="fb__notice-close"></div>
      <h1 class="fb__notice-title">СПАСИБО!</h1>
      <span class="fb__notice-text">Мы ценим каждое обращение и ответим в ближайшее время на e-mail</span>
    </div>
  </div>

  <!-- ------------------------- -->

  <section class="main-block-401">
    <header class="header container flex">
      <div class="logo-block flex">
        <a href="/index.php" class="logo">
          <picture>
            <source srcset="img/logo_mobile.svg" media="(max-width: 730px)">
            <source srcset="img/logo_tablet.svg" media="(max-width: 1024px)">
            <img src="img/logo.svg" alt="logo">
          </picture>
        </a>
        <a href="https://rs.gov.ru/" class="logo" target="_blank">
          <img src="img/logo-ros.png" class="logo-2" alt="logo">
        </a>
        <a href="https://concord.ac/" class="logo" target="_blank">
          <img src="img/logo-sodruzestvo.png" class="logo-3" alt="logo">
        </a>
      </div>


      <nav class="nav">
        <ul class="nav__list nav__list-visible list-reset flex">
          <li class="nav__item">
            <a href="#" class="nav__link" id="link-map">Карта будущего</a>
          </li>
          <li class="nav__item">
            <a href="tests.html" class="nav__link">Профтест</a>
          </li>
          <li class="nav__item">
            <a href="materials.php" class="nav__link" id="link-home">Материалы</a>
          </li>
          <li class="nav__item nav__click flex">
            <p class="nav__link nav__text flex">Еще</p>
            <i class="arrow_down"></i>
          </li>
        </ul>
        <ul class="nav__list nav__list-hidden opacity list-reset flex">
          <li class="nav__item">
            <a href="/index.php#program" class="nav__link">Программа</a>
          </li>
          <li class="nav__item">
            <a href="/index.php#video" class="nav__link">Запись трансляции</a>
          </li>
          <li class="nav__item">
            <a href="/index.php#partners" class="nav__link">Партнеры</a>
          </li>
        </ul>
      </nav>

      <button class="btn-reset btn btn-color header__btn flex">Войти</button>

      <div class="menu-btn hidden">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </header>

    <div class="p401 container flex">
      <div class="p401-img">
        <picture>
          <source srcset="img/401-401WPlanet_mobile.webp" media="(max-width: 480px)">
          <source srcset="img/401-401WPlanet_tablet.webp" media="(max-width: 768px)">
          <img class="p404-img-img" src="img/401-401WPlanet.webp" alt="404Planet">
        </picture>
      </div>

      <div class="hero-content" style="animation: none;">
        <div class="hero-wrap">
          <p class="section-title preview-title" style="margin-bottom: 16px;">Страница</p>
          <p class="section-title preview-title" style="margin-bottom: 64px;">Недоступна</p>
          <p class="section-text">Чтобы получить доступ к этой странице, пожалуйста, авторизуйтесь или зарегистрируйтесь.</p>
        </div>

        <div>
          <div class="hero-btn-wrap" style="margin-bottom: 30px;">
            <button class="btn-reset btn section-btn hero-btn" style="width: 100%;">Зарегистрироваться</button>
            <svg width="120" height="14" viewBox="0 0 120 14">
              <use xlink:href="sprite.svg#figure"></use>
            </svg>
          </div>
          <button onclick="window.location.href ='index.php'" class="btn-reset btn p401-btn" style="width: 100%;">Вернуться на главную</button>
        </div>
      </div>

    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <div class="footer-top flex">
        <div class="footer-left">
          <div class="footer-logo-wrap flex">
            <a href="https://concord.ac/" class="logo" target="_blank">
              <picture>
                <source srcset="img/logo-sodruzestvo-mobile.png" media="(max-width: 730px)">
                <source srcset="img/logo-sodruzestvo-tablet.png" media="(max-width: 768px)">
                <img src="img/logo-sodruzestvo.png" alt="logo">
              </picture>
            </a>
            <div class="footer-logo-wrap2 flex">
              <a href="https://rs.gov.ru/" class="logo" target="_blank">
                <picture>
                  <source srcset="img/logo-ros-mobile.png" media="(max-width: 730px)">
                  <source srcset="img/logo-ros-tablet.png" media="(max-width: 768px)">
                  <img src="img/logo-ros.png" alt="logo">
                </picture>
              </a>
              <a href="https://ruskidom.rs/" class="logo" target="_blank">
                <picture>
                  <source srcset="img/logo-Rus-house_slider-mobile.png" media="(max-width: 730px)">
                  <source srcset="img/logo-Russian-tablet.png" media="(max-width: 768px)">
                  <img src="img/logo-Russian.png" alt="logo">
                </picture>
              </a>
            </div>

          </div>

          <div class="footer_contacts">
            <a class="footer_contacts_text phone-contacts flex" href="tel:+74951651508">
              <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M23.7142 17.014C22.1529 17.014 20.6222 16.77 19.1702 16.29C18.4742 16.054 17.6195 16.27 17.1929 16.7087L14.3155 18.8807C11.0142 17.1193 8.90353 15.0073 7.16619 11.7327L9.27953 8.92599C9.81286 8.39265 10.0035 7.61532 9.77419 6.88598C9.29286 5.42465 9.04753 3.89398 9.04753 2.33398C9.04753 1.23132 8.15019 0.333984 7.04753 0.333984H2.38086C1.27819 0.333984 0.380859 1.23132 0.380859 2.33398C0.380859 15.1993 10.8489 25.6673 23.7142 25.6673C24.8169 25.6673 25.7142 24.77 25.7142 23.6673V19.014C25.7142 17.9113 24.8169 17.014 23.7142 17.014Z" />
              </svg>+7 (495) 165-15-08</a>
          </div>
          <div class="footer_contacts">
            <a class="footer_contacts_text flex" href="mailto:vr-rs@concord.ac"><svg width="32" height="22"
                viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M28.6667 0.333984H3.33333C1.496 0.333984 0 1.82998 0 3.66732V18.334C0 20.1713 1.496 21.6673 3.33333 21.6673H28.6667C30.504 21.6673 32 20.1713 32 18.334V3.66732C32 1.82998 30.504 0.333984 28.6667 0.333984ZM11.76 12.1793L3.76 18.846C3.636 18.95 3.484 19.0006 3.33333 19.0006C3.14133 19.0006 2.952 18.9193 2.82 18.7606C2.584 18.478 2.62267 18.0566 2.90533 17.8206L10.9053 11.154C11.188 10.9193 11.6093 10.958 11.8453 11.2393C12.0813 11.5233 12.0427 11.9447 11.76 12.1793ZM16 12.3567C15.2667 12.3567 14.532 12.138 13.892 11.6993L2.95733 4.21798C2.65333 4.00998 2.576 3.59532 2.78267 3.29132C2.98933 2.98732 3.404 2.90865 3.70933 3.11798L14.644 10.5993C15.4667 11.162 16.5307 11.162 17.3547 10.5993L28.2893 3.11798C28.5947 2.91132 29.0093 2.98732 29.216 3.29132C29.424 3.59532 29.3467 4.00998 29.0427 4.21798L18.108 11.6993C17.468 12.138 16.7333 12.3567 16 12.3567ZM29.1787 18.7606C29.0467 18.9193 28.8573 19.0006 28.6667 19.0006C28.516 19.0006 28.3653 18.95 28.24 18.846L20.24 12.1793C19.9573 11.9433 19.9187 11.5233 20.1547 11.2393C20.3907 10.958 20.8107 10.9193 21.0947 11.154L29.0947 17.8206C29.376 18.0566 29.4147 18.478 29.1787 18.7606Z" />
              </svg>vr-rs@concord.ac</a>
          </div>
        </div>

        <div class="footer-center flex">
          <p class="section-title footer-title">Погрузись в науку легко</p>
          <button class="btn-reset btn btn-color footer__btn flex">Задать вопрос</button>
        </div>

        <div class="footer-right flex">
          <a class="footer-links" href="#">Вход в личный кабинет</a>
          <a class="footer-links" href="docs/Политика_обработки_ПДн_на_сайте_Содружество_проект.pdf" target="blank"
            download="">Политика конфиденциальности</a>
          <a class="footer-links" href="docs/Согласие_на_обработку_ПДн_на_сайте_Содружество_проект.pdf" target="blank"
            download="">Согласие на обработку персональных данных</a>
          <a class="footer-links" href="docs/Согласие_на_обработку_персональных_данных_для_Содружество_для_детей.pdf"
            target="blank" download="">Согласие Пользователя на обработку персональных
            данных</a>
        </div>
      </div>

      <div class="footer-bottom flex">
        <p class="footer_bottomtext">© 2023 ООО СП «СОДРУЖЕСТВО»</p>
        <div class="logos flex">
          <p class="logos_text logos_text__margin">Сделано в </p>
          <a href="https://xn--g1ani7c.xn--p1ai/" class="logos_1T" target="_blank">
            <img src="img/logo-1T.png" alt="logo_1T">
          </a>
          <svg width="2" height="18" viewBox="0 0 2 18">
            <use xlink:href="sprite.svg#line"></use>
          </svg>
          <a href="https://xn--g1ani7c.xn--p1ai/my/teams/2989122108225482194?name=ITitans&space=610" target="_blank">
            <p class="logos_text">ITitans</p>
          </a>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>