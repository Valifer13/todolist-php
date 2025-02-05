const navbar = document.getElementById('navbar');
const sideNavbar = document.querySelector('.side-navbar');
const mobileNavbarButton = document.querySelector('.mobile-navbar h1');
const closeSideNavbarButton = document.querySelector('.side-navbar button');

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
mobileNavbarButton.addEventListener('click', () => {
    sidebarState = true;
    sideNavbar.classList.add('show');
})

closeSideNavbarButton.addEventListener('click', () => {
    sidebarState = false;
    sideNavbar.classList.remove('show');
})