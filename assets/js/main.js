document.addEventListener('DOMContentLoaded', () => {
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Mobile menu dropdown toggle
    if (window.innerWidth <= 768) {
        const dropdowns = document.querySelectorAll('.has-dropdown > a');
        dropdowns.forEach(dropdown => {
            dropdown.addEventListener('click', function(e) {
                e.preventDefault();
                const submenu = this.nextElementSibling;
                if (submenu.style.display === 'flex') {
                    submenu.style.display = 'none';
                } else {
                    // Close others
                    document.querySelectorAll('.dropdown').forEach(d => d.style.display = 'none');
                    submenu.style.display = 'flex';
                }
            });
        });
    }
});
