import {  foot} from './common.js'

    
const linksContainer = document.querySelector('.links-container');
const nav = document.querySelector('.nav');
const logo = document.querySelector('.logo');
const menu = document.querySelector('.menu');
const links = linksContainer.querySelectorAll('.nav-links li a')
menu.addEventListener('click', () =>{
    
    linksContainer.classList.toggle('show-links');
})
window.addEventListener('scroll', ()=>{
    const navheight = nav.getBoundingClientRect().height;
    const scorllheight = window.pageYOffset;
    const down = document.querySelector('.down-icon')
    if(scorllheight > navheight)
    {
        menu.innerHTML = ` <img src="./img/menu-black.svg" class="ham" alt="" />`
        links.forEach(item =>{
            item.classList.add('black')
        })
        down.setAttribute('src', './img/dropdown-black.svg')
        logo.innerHTML = `<a href="./index.html"><img src="./img/second_logo.svg" alt="Battery World Logo"></a>`
        nav.classList.add('fixed-nav')
    }else{
        logo.innerHTML = `<a href="./index.html"><img src="./img/fiker_logo.svg" alt="Fiker legal service Logo" /> </a>`
        nav.classList.remove('fixed-nav')
        down.setAttribute('src', './img/dropdown.svg')
        menu.innerHTML = ` <img src="./img/menu-white.svg" class="ham" alt="" />`
        links.forEach(item =>{
            item.classList.remove('black')
        })
    }
})
const dropdown = document.querySelector('.drop-down')
const dropdownContent = document.querySelector('.drop-down-link')

dropdown.addEventListener('mouseenter', () => {
    
    dropdownContent.classList.add('display-links')
})
dropdown.addEventListener('mouseleave', () => {

    dropdownContent.classList.remove('display-links')
})
foot()
