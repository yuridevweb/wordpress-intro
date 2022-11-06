//Menu-icon

const menuIcon = document.getElementById('menu-icon')
const navigation = document.getElementById('navigation')

menuIcon.addEventListener('click', () => {
  navigation.classList.toggle('show')
})


// On click clider

const images = document.querySelectorAll('[data-carousel-item]')
images.forEach((image) => {
  image.addEventListener('click', () => {
   const images = image
     .closest('[data-carousel]')
      .querySelector('[data-slides]')
    
    const currentActive = images.querySelector('[data-active]')
    image.dataset.active = true
    delete currentActive.dataset.active

  })
})


// button slider

const buttons = document.querySelectorAll('[data-carousel-button]')

buttons.forEach((button) => {
  button.addEventListener('click', () => {
    const offset = button.dataset.carouselButton === 'next' ? 1 : -1
    const slides = button
      .closest('[data-carousel]')
      .querySelector('[data-slides]')

    const activeSlide = slides.querySelector('[data-active]')
    let newIndex = [...slides.children].indexOf(activeSlide) + offset
    if (newIndex < 0) newIndex = slides.children.length - 1
    if (newIndex >= slides.children.length) newIndex = 0
    slides.children[newIndex].dataset.active = true
    delete activeSlide.dataset.active
  })
})
