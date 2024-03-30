const label = document.querySelector('.tab-label')
const panel = document.querySelector('.tab-panel')
const labelItem = label.querySelectorAll('.tab-label-item')
const panelItem = panel.querySelectorAll('.tab-panel-item')

const initializer = (() => {
  labelItem[0].classList.add('is_active')
  panelItem[0].classList.add('is_show')
})()

labelItem.forEach(label => {
  label.addEventListener('click', tabSwitch)
})

function tabSwitch(e) {
  const targetTab = e.currentTarget.dataset.tab
  labelItem.forEach(item => {
    if (item.dataset.tab === targetTab) {
      item.classList.add('is_active')
    } else {
      item.classList.remove('is_active')
    }
  })
  panelItem.forEach(item => {
    if (item.dataset.panel === targetTab) {
      item.classList.add('is_show')
    } else {
      item.classList.remove('is_show')
    }
  })
}

console.log('loaded tabpanel.js')