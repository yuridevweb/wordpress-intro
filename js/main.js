//Hamburger Menu
const menuIcon = document.getElementById('menu-icon')
const navigation = document.getElementById('navigation')

menuIcon.addEventListener('click', () => {
  navigation.classList.toggle('show')
})

// Slider

let itemContainer = document.getElementById('slider')

let items = itemContainer.getElementsByClassName('item-bg')
console.log(itemContainer)
console.log(items)

for (let i = 0; i < items.length; i++) {
  items[i].addEventListener('click', function () {
    let current = document.getElementsByClassName('active-item')
    console.log(current)
    current[0].className = current[0].className.replace(' active-item', '')
    this.className += ' active-item'
    console.log(this.className)
  })
}
