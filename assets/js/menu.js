const body = document.querySelector("body")
const btn = document.querySelector(".menu-btn-inner")
const slider = document.getElementById("header-slide")

const initializer = (() => {
  body.classList.remove("scroll-y-lock")
  btn.classList.remove("menu-bar-close")
  slider.classList.remove("slide-in")
})()

btn.addEventListener("click", () => {
  body.classList.toggle("scroll-y-lock")
  btn.classList.toggle("menu-bar-close")
  slider.classList.toggle("slide-in")
})

console.log('loaded menu.js')