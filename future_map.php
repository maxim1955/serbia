<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Карта будущего</title>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script defer src="js/script.js"></script>
    <script defer src="js/menu-modals.js"></script>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/styles/choices.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/media.css" />
    <link rel="stylesheet" href="css/future_map.css"/>
    <script src="https://api-maps.yandex.ru/v3/?apikey=409c56c9-7868-499c-af77-f29e4cde70d9&lang=ru_RU"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>


</head>

<body>
<!-- Модальное окно бургер-меню -->
<div class="burger-menu">
    <div class="header-burger flex">
        <div class="burger-logo-block flex">
            <a href="index.php" class="logo">
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

<main class="">
    <section class="title_block">
        <?php include 'components/header/header.php'; ?>
        <div class="container">
            <h1 class="section-subtitle ">Карта будущего</h1>
            <p class="section-text">
                Твой гид в мире образования завтрашнего дня. Здесь ты сможешь познакомиться с ведущими образовательными
                учреждениями России, предлагающими обучение по специальностям робототехника, мехатроника, VR и AR.
            </p>
        </div>
        <div class="bg-lines-right"></div>
        <div class="bg-lines-left"></div>
    </section>
    <section>
        <div class="bg-bottom-map"></div>
    </section>
    <section class="map_block">
        <div class="tab_map_wrapper container">
            <p class="section-text">Направление:</p>
            <div class="tab_map">
                <input type="checkbox" id="vr" class="tab_map__checkbox" checked value="VR">
                <label for="vr" class="tab_map__button">
                    <img src="img/vr_btn.svg" alt="br_btn">
                    VR
                </label>

                <input type="checkbox" id="ar" class="tab_map__checkbox" checked value="AR">
                <label for="ar" class="tab_map__button">
                    <img src="img/vr_btn.svg" alt="br_btn">
                    AR
                </label>

                <input type="checkbox" id="robotics" class="tab_map__checkbox" checked value="Робототехника">
                <label for="robotics" class="tab_map__button">
                    <img src="img/vr_btn.svg" alt="br_btn">
                    Робототехника
                </label>
            </div>
        </div>

        <div class="container map_wrapper ">
            <div id="map"></div>
            <svg viewBox="0 0 1360 760" fill="none" xmlns="http://www.w3.org/2000/svg" class="map-bg-xl">
                <path d="M688.225 0H0L0.5 117L60.5 57.5H634L688.225 0Z" fill="#0E0214"/>
                <path d="M1359.5 0L1360 265L1302.5 208.5L1300.03 2.5H1300L1298 0H1300H1359.5Z" fill="#0E0214"/>
                <path
                    d="M446 758H165.5H6C3.79086 758 2 756.209 2 754V659V117.501C2 116.434 2.42622 115.411 3.18391 114.66L1.78445 113.248L3.18391 114.66L59.1695 59.1593C59.9187 58.4167 60.9308 58 61.9856 58H630.384C632.608 58 634.732 57.0737 636.246 55.4436L684.685 3.2782C685.442 2.46313 686.504 2 687.616 2H1298C1300.21 2 1302 3.79086 1302 6V205.483C1302 207.63 1302.86 209.686 1304.39 211.191L1356.8 262.663C1357.57 263.415 1358 264.444 1358 265.517V754C1358 756.209 1356.21 758 1354 758H446Z"
                    stroke="url(#paint0_linear_2254_24991)" stroke-width="4" style="height: 300px"/>
                <path d="M115 0H649L621 28H87L115 0Z" fill="url(#paint1_linear_2254_24991)"/>
                <path d="M1332 197L1360 225V0H1332V197Z" fill="url(#paint2_linear_2254_24991)"/>
                <defs>
                    <linearGradient id="paint0_linear_2254_24991" x1="0" y1="380" x2="1360" y2="380"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFAA00"/>
                        <stop offset="1" stop-color="#AA00FF"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_2254_24991" x1="87" y1="14" x2="649" y2="14"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFAA00"/>
                        <stop offset="1" stop-color="#AA00FF"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear_2254_24991" x1="1332" y1="112.5" x2="1360" y2="112.5"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFAA00"/>
                        <stop offset="1" stop-color="#AA00FF"/>
                    </linearGradient>
                </defs>
            </svg>
            <img src="img/map-bg-md.png" alt="" class="map-bg-md">
            <span class="help-modal-btn">
                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M30 54.9999C43.75 54.9999 55 43.7499 55 29.9999C55 16.2499 43.75 4.99988 30 4.99988C16.25 4.99988 5 16.2499 5 29.9999C5 43.7499 16.25 54.9999 30 54.9999Z"
                        fill="#0E0214" fill-opacity="0.5" stroke="url(#paint0_linear_2111_52721)" stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"/>
                    <path
                        d="M28.0075 35.4957V34.8054C28.016 33.4588 28.1651 32.3636 28.4549 31.5199C28.7447 30.6761 29.1708 29.9645 29.7333 29.3849C30.3043 28.7969 31.0117 28.2344 31.8555 27.6974C32.4862 27.2883 33.0146 26.8579 33.4407 26.4062C33.8754 25.946 34.2035 25.4432 34.4251 24.8977C34.6552 24.3437 34.7702 23.7429 34.7702 23.0951C34.7702 22.1747 34.5529 21.3693 34.1183 20.679C33.6921 19.9886 33.1126 19.4559 32.3796 19.0809C31.6467 18.6974 30.8327 18.5057 29.9379 18.5057C29.0856 18.5057 28.2887 18.6932 27.5472 19.0682C26.8143 19.4346 26.2134 19.9801 25.7447 20.7045C25.2844 21.4204 25.033 22.3068 24.9904 23.3636H22.5742C22.6168 21.9574 22.9663 20.7386 23.6225 19.7074C24.2788 18.6761 25.1566 17.8792 26.256 17.3167C27.3555 16.7457 28.5827 16.4602 29.9379 16.4602C31.3526 16.4602 32.5969 16.7542 33.6708 17.3423C34.7447 17.9219 35.5842 18.7187 36.1893 19.7329C36.7944 20.7386 37.0969 21.8934 37.0969 23.1974C37.0969 24.0582 36.9606 24.8423 36.6879 25.5497C36.4151 26.2571 36.006 26.9091 35.4606 27.5057C34.9237 28.1023 34.2504 28.6648 33.4407 29.1932C32.6737 29.7045 32.0643 30.2116 31.6126 30.7145C31.1609 31.2173 30.837 31.7926 30.641 32.4403C30.445 33.0795 30.3384 33.8679 30.3214 34.8054V35.4957H28.0075ZM29.2347 43.1917C28.7319 43.1917 28.2972 43.0128 27.9308 42.6548C27.5728 42.2883 27.3938 41.8537 27.3938 41.3508C27.3938 40.8395 27.5728 40.4048 27.9308 40.0469C28.2972 39.6889 28.7319 39.5099 29.2347 39.5099C29.7376 39.5099 30.168 39.6889 30.5259 40.0469C30.8924 40.4048 31.0756 40.8395 31.0756 41.3508C31.0756 41.6832 30.9904 41.99 30.82 42.2713C30.658 42.5525 30.4364 42.7784 30.1552 42.9488C29.8825 43.1108 29.5756 43.1917 29.2347 43.1917Z"
                        fill="white"/>
                    <defs>
                    <linearGradient id="paint0_linear_2111_52721" x1="5" y1="29.9999" x2="55" y2="29.9999"
                                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FFAA00"/>
                    <stop offset="1" stop-color="#AA00FF"/>
                    </linearGradient>
                    </defs>
                    </svg>
            </span>
            <div class="help-modal">
                <img src="./img/container_info.svg" alt="info_block">
                <p>Пользоваться картой легко и удобно: достаточно указать направление обучения и тип учебного заведения,
                    и карта покажет их расположение в России. Выбери место обучения в нужном регионе, и карта
                    предоставит краткую информацию о нем.</p>
            </div>

            <div class="detail-modal">
                <svg viewBox="0 0 348 658" fill="none" xmlns="http://www.w3.org/2000/svg" class="detail-modal__bg">
                    <rect x="1" y="1" width="316" height="656" fill="#0E0214"/>
                    <rect x="1" y="1" width="316" height="656" stroke="url(#paint0_linear_4001_24673)"
                          stroke-width="2"/>
                    <rect x="306" y="117" width="4" height="63" fill="url(#paint1_linear_4001_24673)"/>
                    <mask id="path-3-inside-1_4001_24673" fill="white">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M348 0H316V32V64L348 32V0Z"/>
                    </mask>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M348 0H316V32V64L348 32V0Z" fill="#0E0214"/>
                    <path
                        d="M316 0V-2H314V0H316ZM348 0H350V-2H348V0ZM316 64H314V68.8284L317.414 65.4142L316 64ZM348 32L349.414 33.4142L350 32.8284V32H348ZM316 2H348V-2H316V2ZM318 32V0H314V32H318ZM318 64V32H314V64H318ZM346.586 30.5858L314.586 62.5858L317.414 65.4142L349.414 33.4142L346.586 30.5858ZM346 0V32H350V0H346Z"
                        fill="url(#paint2_linear_4001_24673)" mask="url(#path-3-inside-1_4001_24673)"/>
                    <path d="M322 26L341.799 6.20101" stroke="url(#paint3_linear_4001_24673)" stroke-width="1.5"
                          stroke-linecap="round" stroke-linejoin="round" id="closeDetail"/>
                    <path d="M341.799 25.799L322 6" stroke="url(#paint4_linear_4001_24673)" stroke-width="1.5"
                          stroke-linecap="round" stroke-linejoin="round"/>
                    <defs>
                        <linearGradient id="paint0_linear_4001_24673" x1="0" y1="329" x2="357.735" y2="78.0358"
                                        gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FFAA00"/>
                            <stop offset="0.789328" stop-color="#AA00FF"/>
                            <stop offset="0.965" stop-color="#AA00FF"/>
                        </linearGradient>
                        <linearGradient id="paint1_linear_4001_24673" x1="306" y1="148.5" x2="310" y2="148.5"
                                        gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FFAA00"/>
                            <stop offset="1" stop-color="#AA00FF"/>
                        </linearGradient>
                        <linearGradient id="paint2_linear_4001_24673" x1="316" y1="32" x2="348" y2="32"
                                        gradientUnits="userSpaceOnUse">
                            <stop stop-color="#AA00FF"/>
                            <stop offset="0.445417" stop-color="#FFAA00"/>
                        </linearGradient>
                        <linearGradient id="paint3_linear_4001_24673" x1="322.354" y1="26.3536" x2="342.153"
                                        y2="6.55456" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FFAA00"/>
                            <stop offset="1" stop-color="#AA00FF"/>
                        </linearGradient>
                        <linearGradient id="paint4_linear_4001_24673" x1="331.899" y1="15.8995" x2="332.607"
                                        y2="15.1924" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FFAA00"/>
                            <stop offset="1" stop-color="#AA00FF"/>
                        </linearGradient>
                    </defs>
                </svg>
                <div class="detail-modal__body">
                    <div class="modal__body__img">
                        <img src="#" alt="info_block">
                    </div>
                    <div class="pb-40">
                        <p id="modalCity" class="font-16 pb-10 pt-10">г.Жатай</p>
                        <span id="modalTitle" class="font-24">
                        Федеральное государственное автономное образовательное учреждение высшего образования «Новосибирский национальный исследовательский государственный университет»
                        </span>
                    </div>
                    <div class="pb-40">
                        <p class="font-20 pb-10">Направление профессиональной подготовки:</p>
                        <span id="modalDirection" class="font-16 pb-40">15.03.06 «Мехатроника и робототехника. Искусственный интеллект» («Когнитивная робототехника»)</span>
                    </div>

                    <div class="pb-40">
                        <p class="font-20 pb-10">О программе:</p>
                        <span id="modalDescription" class="font-16 pb-40">
                        Программа бакалавриата «Когнитивная робототехника» готовит к тому, что будет завтра: беспилотный транспорт, умные и ловкие роботы, производство будущего. Студенты изучают и создают продукты на базе глубокого машинного обучения.
                        </span>
                    </div>
                </div>
                <div>
                    <div class="pb-40">
                        <p class="font-20 pb-10">Формат и сроки обучения:</p>
                        <span id="modalFormat" class="font-16 pb-10">бакалавриат, 4 года</span>
                    </div>
                </div>
            </div>
            <div class="add-modal">
                <img src="img/icon-add-modal.png" alt="icon-add-modal">
                <p></p>
            </div>
        </div>

    </section>
    <section>
        <div class="btn-education-wrap">
            <a href="#">Скачать список учебных заведений</a>
        </div>
    </section>
</main>


<?php include 'components/footer/footer.php'; ?>
<script defer src="js/map/init.js"></script>
</body>

</html>