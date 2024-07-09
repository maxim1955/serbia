// Кнопка разварачивания меню
const navClick = document.querySelector(".nav__click");
const navListHidden = document.querySelector(".nav__list-hidden");
const navListVisible = document.querySelector(".nav__list-visible");
const nav = document.querySelector(".nav");
const navText = document.querySelector(".nav__text");
const arrowDown = document.querySelector(".arrow_down");

navClick.addEventListener("click", (event) => {
  event.preventDefault();
  navClick.classList.toggle("open");
  navListHidden.classList.toggle("opacity");
  nav.classList.toggle("open");
  navListVisible.classList.toggle("open");
  arrowDown.classList.toggle("open");
  navText.classList.toggle("hidden");
});

// Выделение текущей ссылки в меню
document.addEventListener("DOMContentLoaded", function () {
  const currentUrl = window.location.pathname;
  const links = document.querySelectorAll("nav a");
  const navItems = document.querySelectorAll(".nav__item");

  links.forEach((link, index) => {
    if (link.getAttribute("href") === currentUrl) {
      navItems[index].setAttribute("aria-current", "page");
    } else {
      navItems[index].removeAttribute("aria-current");
    }
  });
  //   console.log(currentUrl);
});

// Переворачивание карточек в Программе
const cards = document.querySelectorAll(".program-card");
cards.forEach((card) => {
  card.addEventListener("click", () => {
    card.classList.toggle("flipped");
  });
});

// Слайдер модалки отзывов
var swiperModal = new Swiper(".swiper-modal", {
  slidesPerView: 1,
  loop: true,
  navigation: {
    nextEl: "#swiper-button-next",
    prevEl: "#swiper-button-prev",
  },
  on: {
    slideChange(swiper) {
      console.log(swiper.realIndex);
    },
  },
});

// Слайдер отзывов
let swiperReviews = new Swiper(".swiper-review", {
  slidesPerView: 3,
  centeredSlides: true,
  loop: true,
  initialSlide: 1,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  on: {
    click(swiper) {
      swiperModal.slideToLoop(Number(swiper.clickedSlide.id), 0);
      reviewsModal.style.display = "flex";
      body.classList.add("noscroll");
    },
  },
});

const reviewsSlideClick = document.querySelectorAll(".reviews-slide-click"); //карточки, по которым кликаем
const swiperSlide = document.querySelectorAll(".swiper-slide");
const reviewsModal = document.querySelector(".reviews-modal-background");
const closeButton = document.querySelector(".close-button");
const body = document.body;

// Кнопки управления видео для модалки отзывов
const swiperSlideContent = document.querySelectorAll(".reviews-modal_left");

swiperSlideContent.forEach((sideContent) => {
  const play = sideContent.querySelector(".control-play");
  const back = sideContent.querySelector(".control-back");
  const forward = sideContent.querySelector(".control-forward");
  const video = sideContent.querySelector(".reviews-modal_video");
  const timeline = sideContent.querySelector(".timeline");
  const volumeTimeline = sideContent.querySelector(".volume-timeline");
  const volumeWrap = sideContent.querySelector(".volume-wrap");
  const muteButton = sideContent.querySelector(".mute-button");

  play.addEventListener("click", function (e) {
    e.preventDefault();

    if (play.classList.contains("active")) {
      video.pause();
      play.classList.remove("active");
    } else {
      play.classList.add("active");
      video.play();
    }
  });

  // видео ставится на паузу при смене слайда
  swiperModal.on("slideChange", function () {
    video.pause();
    play.classList.remove("active");
  });

  // прогресс-бар
  video.addEventListener("timeupdate", function () {
    const currentTime = video.currentTime;
    const duration = video.duration;
    const progressWidth = (currentTime / duration) * 100;
    timeline.style.width = progressWidth + "%";
  });

  timeline.addEventListener("click", function (e) {
    const timelineWidth = timeline.offsetWidth;
    const clickPosition = e.clientX - timeline.offsetLeft;
    const clickedTime = (clickPosition / timelineWidth) * video.duration;
    video.currentTime = clickedTime;
  });

  // Кнопки Вперед и Назад
  back.addEventListener("click", function () {
    video.currentTime -= 10;
    updateTimeline();
  });

  forward.addEventListener("click", function () {
    video.currentTime += 10;
    updateTimeline();
  });

  function updateTimeline() {
    const currentTime = video.currentTime;
    const duration = video.duration;
    const progressWidth = (currentTime / duration) * 100;
    timeline.style.width = progressWidth + "%";
  }

  // Громкость видео
  let isDragging = false;
  let isMuted = false;
  let savedVolume = 0.3;

  video.volume = savedVolume;
  volumeTimeline.style.width = video.volume * 100 + "%";

  volumeWrap.addEventListener("mousedown", function (event) {
    isDragging = true;
    adjustVolume(event);

    volumeWrap.addEventListener("mousemove", adjustVolume);
  });

  document.addEventListener("mouseup", function () {
    isDragging = false;
    volumeWrap.removeEventListener("mousemove", adjustVolume);
  });

  volumeWrap.addEventListener("mouseleave", function () {
    isDragging = false;
    volumeWrap.removeEventListener("mousemove", adjustVolume);
  });

  // Кнопка выключения звука
  muteButton.addEventListener("click", function () {
    if (isMuted) {
      video.volume = savedVolume;
      volumeTimeline.style.width = video.volume * 100 + "%";
      isMuted = false;
      muteButton.src = "img/volume-on.svg";
    } else {
      savedVolume = video.volume;
      video.volume = 0;
      volumeTimeline.style.width = 0;
      isMuted = true;
      muteButton.src = "img/volume-off.svg";
    }
  });

  // регулятор громкости звука
  function adjustVolume(event) {
    if (isDragging) {
      const moveX = event.clientX - volumeWrap.getBoundingClientRect().left;
      const percentage = Math.max(
        0,
        Math.min(100, (moveX / volumeWrap.offsetWidth) * 100)
      );

      volumeTimeline.style.width = percentage + "%";
      video.volume = percentage / 100;
    }
  }

  // Закрытие модального окна
  closeButton.addEventListener("click", function (e) {
    e.preventDefault();
    reviewsModal.style.display = "none";
    body.classList.remove("noscroll");
    video.pause();
  });
});

// Открытие модального окна
reviewsSlideClick.forEach((slide, index) => {
  slide.addEventListener("click", function (e) {
    e.preventDefault();
    reviewsModal.style.display = "flex";
    body.classList.add("noscroll");
    swiperModal.slideTo(index);
  });
});

// Трансляции
// Выпадающий список
const select = document.querySelector(".broadcast-select");
const choices = new Choices(select, {
  searchEnabled: false,
  itemSelectText: "",
});

// Слайдер партнеров
var swiperPartners = new Swiper(".swiper-partners", {
  slidesPerView: 3,
  spaceBetween: 20,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// Кнопка play в трансляциях
const broadcastPlay = document.querySelector(".broadcast-play");
const broadcastVideo = document.querySelector(".broadcast-video");
const dateSelect = document.querySelector(".broadcast-select");

broadcastPlay.disabled = true;

broadcastPlay.addEventListener("click", function (e) {
  e.preventDefault();

  if (broadcastVideo.paused) {
    broadcastVideo.play();
    broadcastPlay.classList.add("hidden");
  } else {
    broadcastVideo.pause();
    broadcastPlay.classList.remove("hidden");
  }
});

broadcastVideo.addEventListener("ended", function () {
  broadcastPlay.classList.remove("hidden");
  broadcastPlay.classList.remove("active");
  broadcastPlay.disabled = false;
});

// Выбор видео по дате
dateSelect.addEventListener("change", () => {
  const selectedDate = dateSelect.value;

  let videoSource;
  switch (selectedDate) {
    case "october_5":
      videoSource = "video/cathedral.mp4";
      break;
    case "october_6":
      videoSource = "video/Esmeralda.mp4";
      break;
    case "october_8":
      videoSource = "video/kings.mp4";
      break;
    case "october_9":
      videoSource = "video/Maria.mp4";
      break;
    case "october_11":
      videoSource = "video/cathedral.mp4";
      break;
    case "october_12":
      videoSource = "video/Esmeralda.mp4";
      break;
    default:
      videoSource = "";
  }

  if (videoSource) {
    broadcastVideo.src = videoSource;
    broadcastPlay.classList.remove("hidden");
    broadcastPlay.disabled = false; 
  } else {
    broadcastVideo.src = "";
    broadcastPlay.classList.add("hidden");
    broadcastPlay.disabled = true; 
  }
});
