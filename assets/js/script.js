/* JavaScript do Menu Hambúrguer */
document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.getElementById('menu-hamburger');
    const menu = document.getElementById('menu');

    if (hamburger && menu) {
        hamburger.addEventListener('click', () => {
            menu.classList.toggle('active');

            if (menu.classList.contains('active')) {
                hamburger.textContent = '✕';
            } else {
                hamburger.textContent = '☰';
            }
        });
    }
});