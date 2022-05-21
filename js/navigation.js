// let menu = document.querySelector('#menu')
let navbar = document.querySelector('.navbar');
let header2 = document.querySelector('.header-2');

// function navToggle(){
//     menu.classList.toggle('fa-times');
//     navbar.classList.toggle('nav-toggle');
// }

window.addEventListener('scroll', function () {

    // menu.classList.remove('fa-times');
    // navbar.classList.remove('nav-toggle');

    if (window.scrollY > 60) {
        header2.classList.add('sticky');
    } else {
        header2.classList.remove('sticky');
    }

});