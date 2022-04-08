//NAVBAR
const burger = document.querySelector('.burger')
const navbar = document.querySelector('.njs')
burger.addEventListener('click', () => {
    navbar.classList.toggle('vertical_nav')
});
//PRELOADER
const loader = document.querySelector('.preloader')
window.addEventListener('load', () => {
    loader.classList.toggle('null')
});