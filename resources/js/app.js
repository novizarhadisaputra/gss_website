
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
