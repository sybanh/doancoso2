const myInterval = setInterval(setColor, 500);

function setColor() {
  var header = document.querySelector(".header__text");
  header.style.color = header.style.color == "white" ? "red" : "white";
}
const myAppInterval = setInterval(setColorContent, 500);

function setColorContent() {
  var header__sale = document.querySelector(".content__top");
  header__sale.style.color =
    header__sale.style.color == "yellow" ? "red" : "yellow";
}
