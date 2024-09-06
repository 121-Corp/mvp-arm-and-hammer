import './bootstrap';

const menuMoobile = document.getElementById('mobileMenu');

function closeMenu() {
    if (!menuMoobile.classList.contains('hidden')) {
        menuMoobile.classList.add('hidden');
    }
}

// Toggle the mobile menu
document.getElementById('mobileMenuButton').addEventListener('click', function(event) {
    menuMoobile.classList.toggle('hidden');
    menuMoobile.classList.add('flex');
    event.stopPropagation();
});
