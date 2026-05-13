document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('#site-navigation');
    const menuLinks = document.querySelectorAll('.main-navigation a');
    
    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('show');
            const expanded = navMenu.classList.contains('show');
            menuToggle.setAttribute('aria-expanded', expanded);
            
            // Prevenir scroll en el cuerpo cuando el menú está abierto
            document.body.style.overflow = expanded ? 'hidden' : '';
        });

        // Cerrar menú al hacer clic en un enlace
        menuLinks.forEach(link => {
            link.addEventListener('click', function() {
                navMenu.classList.remove('show');
                menuToggle.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            });
        });
    }
});