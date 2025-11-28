
window.addEventListener('scroll', function() {
    const header = document.getElementById('main-header');
    const logo = document.getElementById('logo');
    const navLinks = document.querySelectorAll('.nav-link');

    if (window.scrollY > 50) {
        header.classList.add('bg-white', 'shadow-lg');
        header.classList.remove('text-white');
        logo.classList.remove('text-white');
        logo.classList.add('text-blue-600');
        navLinks.forEach(link => {
            link.classList.remove('text-white');
            link.classList.add('text-gray-600');
        });
    } else {
        header.classList.remove('bg-white', 'shadow-lg');
        header.classList.add('text-white');
        logo.classList.add('text-white');
        logo.classList.remove('text-blue-600');
        navLinks.forEach(link => {
            link.classList.add('text-white');
            link.classList.remove('text-gray-600');
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuButton) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }

    const animatedElements = document.querySelectorAll('.animate-on-scroll');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in-up');
            }
        });
    }, {
        threshold: 0.1
    });

    animatedElements.forEach(element => {
        observer.observe(element);
    });
});
