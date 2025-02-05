const navbar = document.getElementById('navbar');

function gotoURL(url) {
    window.location.assign(url);
}

//* Track Window & Navbar operation
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.style.borderBottom = '1px solid #999';
    } else {
        navbar.style.borderBottom = 'none';
    }
})

//* Colorscheme
