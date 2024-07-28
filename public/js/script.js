document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.nav-link');

    const updateActiveLink = () => {
        let currentSection = '';

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const scrollPosition = window.scrollY + window.innerHeight / 2;

            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                currentSection = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('text-white', 'bg-gray-900');
            link.classList.add('text-gray-300');
            
            // Perbaiki perbandingan href
            if (link.getAttribute('href') === `/#${currentSection}`) {
                link.classList.add('text-white', 'bg-gray-900');
                link.classList.remove('text-gray-300');
            } else if (window.location.pathname === '/member' && link.getAttribute('href') === '/member') {
                link.classList.add('text-white', 'bg-gray-900');
                link.classList.remove('text-gray-300');
            }
        });
    };

    window.addEventListener('scroll', updateActiveLink);
    window.addEventListener('load', updateActiveLink);

    updateActiveLink();
});
