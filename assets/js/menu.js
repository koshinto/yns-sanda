const body = document.querySelector("body")
const open = document.getElementById("sp-menu-open")
const close = document.getElementById("sp-menu-close")

open.addEventListener("click", () => {
  body.classList.toggle("sp-menu-open")
})

close.addEventListener("click", () => {
  body.classList.toggle("sp-menu-open")
})