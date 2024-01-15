var btn__cart = document.querySelector(".btn__item .btn__item-link");
var model = document.querySelector(".toasts");

function addBlock() {
  model.classList.toggle("block");
}
btn__cart.addEventListener("click", addBlock);
