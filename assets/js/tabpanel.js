const label = document.querySelector('.tab-label')
const panel = document.querySelector('.tab-panel-wrap')
const labelItem = label.querySelectorAll('.tab-label-item')
const panelItem = panel.querySelectorAll('.tab-panel')

const initializer = (() => {
  labelItem[0].classList.add('is-active')
  panelItem[0].classList.add('is-show')
})()

labelItem.forEach(label => {
  label.addEventListener('click', tabSwitch)
})

function tabSwitch(e) {
  const targetTab = e.currentTarget.dataset.tab
  labelItem.forEach(item => {
    if (item.dataset.tab === targetTab) {
      item.classList.add('is-active')
    } else {
      item.classList.remove('is-active')
    }
  })
  panelItem.forEach(item => {
    if (item.dataset.panel === targetTab) {
      item.classList.add('is-show')
    } else {
      item.classList.remove('is-show')
    }
  })
}

console.log('loaded tabpanel.js')