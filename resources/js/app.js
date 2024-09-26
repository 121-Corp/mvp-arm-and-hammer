import './bootstrap';

function initMobileMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenuCloseButton = document.getElementById('mobileMenuCloseButton');

    if (mobileMenu && mobileMenuButton) {
        mobileMenuButton.addEventListener('click', function(event) {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('flex');
            event.stopPropagation();
        });
    }

    if (mobileMenu && mobileMenuCloseButton) {
        mobileMenuCloseButton.addEventListener('click', function(event) {
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('flex');
            event.stopPropagation();
        });
    }
}

document.addEventListener('DOMContentLoaded', () => {
    initMobileMenu();
}, false);
