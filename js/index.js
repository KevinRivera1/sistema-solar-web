document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.getElementById('menu-btn');
    const navMenu = document.getElementById('nav-menu');

    const handleResize = () => {
        if (window.innerWidth > 768) {
            navMenu.classList.remove('header__nav--active');
        }
    };

    menuBtn.addEventListener('click', () => {
        navMenu.classList.toggle('header__nav--active');
    });

    window.addEventListener('resize', handleResize);

    handleResize();
});