
window.addEventListener('scroll', function() {
    const header = document.getElementById('main-header');
    if (window.scrollY > 50) {
        header.classList.add('bg-white', 'text-gray-600', 'shadow-lg', 'dark:bg-gray-800', 'dark:text-gray-300');
        header.classList.remove('text-white');
    } else {
        header.classList.remove('bg-white', 'text-gray-600', 'shadow-lg', 'dark:bg-gray-800', 'dark:text-gray-300');
        header.classList.add('text-white');
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
                const animation = entry.target.getAttribute('data-animation') || 'animate__fadeInUp';
                entry.target.classList.add('animate__animated', animation);
            }
        });
    }, {
        threshold: 0.1
    });

    animatedElements.forEach(element => {
        observer.observe(element);
    });

    const darkModeToggle = document.getElementById('dark-mode-toggle');
    const darkModeToggleMobile = document.getElementById('dark-mode-toggle-mobile');
    const sunIcon = document.getElementById('sun-icon');
    const moonIcon = document.getElementById('moon-icon');
    const sunIconMobile = document.getElementById('sun-icon-mobile');
    const moonIconMobile = document.getElementById('moon-icon-mobile');

    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
        sunIcon.classList.add('hidden');
        moonIcon.classList.remove('hidden');
        sunIconMobile.classList.add('hidden');
        moonIconMobile.classList.remove('hidden');
    } else {
        document.documentElement.classList.remove('dark');
        sunIcon.classList.remove('hidden');
        moonIcon.classList.add('hidden');
        sunIconMobile.classList.remove('hidden');
        moonIconMobile.classList.add('hidden');
    }

    function toggleDarkMode() {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.theme = 'light';
            sunIcon.classList.remove('hidden');
            moonIcon.classList.add('hidden');
            sunIconMobile.classList.remove('hidden');
            moonIconMobile.classList.add('hidden');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.theme = 'dark';
            sunIcon.classList.add('hidden');
            moonIcon.classList.remove('hidden');
            sunIconMobile.classList.add('hidden');
            moonIconMobile.classList.remove('hidden');
        }
    }

    darkModeToggle.addEventListener('click', toggleDarkMode);
    darkModeToggleMobile.addEventListener('click', toggleDarkMode);
});
