const main = document.querySelector("main");
const btn = document.querySelector(".menu-btn-inner");
const menus = document.getElementById("header-menus");

const initializer = (() => {
  btn.classList.remove("menu-bar-close");
  menus.classList.remove("sp-menu-group-hidden")
  console.log(btn);
})();

btn.addEventListener("click", () => {
  main.classList.toggle("sp-scroll-y-lock");
  btn.classList.toggle("menu-bar-close");
  menus.classList.toggle("sp-menu-group-hidden");
});

console.log('loaded menu.js');