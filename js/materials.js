// Вкладки (табы)
const tabs = document.querySelectorAll(".materials_cards");
const contents = document.querySelectorAll(".materials_content");

for (let i = 0; i < tabs.length; i++) {
  tabs[i].addEventListener("click", (event) => {
    document.querySelectorAll(".materials_cards").forEach((el) => {
      if (el.classList.contains("materials_cards--active")) {
        el.classList.remove("materials_cards--active");
      }
    });
    tabs[i].classList.add("materials_cards--active");

    document.querySelectorAll(".materials_content").forEach((el) => {
      if (el.classList.contains("materials_content--active")) {
        el.classList.remove("materials_content--active");
      }
    });
    contents[i].classList.add("materials_content--active");
  });
}

// Открытие материалов в мобильной версии
const mediaQuery = window.matchMedia("(max-width: 768px)");
function handleTabletChange(e) {
  if (e.matches) {
    document.querySelector(".materials_information").style.display = "none";
    document.querySelectorAll(".materials_content").forEach((el) => {
      el.classList.remove("materials_content--active");
    });

    document.querySelectorAll(".materials_cards").forEach((el) => {
      el.classList.remove("materials_cards--active");
    });

    const cards = document.querySelectorAll(".materials_cards");
    const materials = document.querySelectorAll(".materials_content");

    for (let i = 0; i < cards.length; i++) {
      cards[i].addEventListener("click", (e) => {
        e.preventDefault();
        materials[i].classList.add("materials_content--active");
        document.querySelector(".materials_information").style.display =
          "block";
        document.querySelector(".materials_name").style.display = "none";
        document.body.append(document.querySelector(".materials_information"));
        document.querySelector(".materials").style.marginBottom = "0";
      });
    }

    const close = document.querySelectorAll(".materials_img_close");

    for (let i = 0; i < close.length; i++) {
      close[i].addEventListener("click", (e) => {
        e.preventDefault();
        document.body.style = "";
        materials[i].classList.remove("materials_content--active");
        cards[i].classList.remove("materials_cards--active");
        document.querySelector(".materials_information").style.display = "none";
        document.querySelector(".materials_name").style.display = "block";
        document.querySelector(".materials").style.marginBottom = "60px";
      });
    }
  }
}
mediaQuery.addListener(handleTabletChange);
handleTabletChange(mediaQuery);

// Читать подробнее
const detailsTop = document.querySelectorAll(".details-top");
const detailsBottom = document.querySelectorAll(".details-bottom");
const arrowsDown = document.querySelectorAll(".arrow_down-white");

detailsTop.forEach((button, index) => {
  button.addEventListener("click", (event) => {
    event.preventDefault();
    const detailBottom = detailsBottom[index];
    const arrowDown = arrowsDown[index];
    detailBottom.classList.toggle("open");
    arrowDown.classList.toggle("open");
  });
});

// Рубрики
const captionTop = document.querySelector(".caption-top");
const captionBottom = document.querySelector(".caption-bottom");

captionTop.addEventListener("click", function (e) {
  e.preventDefault();
  captionBottom.classList.toggle("caption-bottom-open");
});
