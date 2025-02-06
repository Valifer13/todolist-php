const navbar = document.getElementById('navbar');
const sideNavbar = document.querySelector('.side-navbar');
const burgerMenu = document.querySelector('.mobile-navbar .burger-menu');

function gotoURL(url) {
    window.location.assign(url);
}

//* Track Window & Navbar operation
window.addEventListener('scroll', () => {
    if (window.scrollY > 0) {
        navbar.style.borderBottom = '1px solid #999';
    } else {
        navbar.style.borderBottom = 'none';
    }
})

//* Sidebar Operation
var sidebarState = false;
burgerMenu.addEventListener('click', () => {
    if (sidebarState) {
        sidebarState = false;
        sideNavbar.classList.remove('show');
        burgerMenu.classList.remove('active');
    } else {
        sidebarState = true;
        sideNavbar.classList.add('show');
        burgerMenu.classList.add('active');
    }
})
