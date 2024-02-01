const body = document.getElementsByTagName("body")[0];
const btn = document.getElementById("menu-open-btn");
const subGroup = document.getElementById("header-sub-group");

btn.addEventListener("click", () => {
  body.classList.toggle("scroll-y-lock");
  subGroup.classList.toggle("sp-hidden");
});

console.log("loaded menu.js");