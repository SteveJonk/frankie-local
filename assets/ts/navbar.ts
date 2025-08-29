export const navbar = () => {
  const navbarButton = document.getElementById('navbar-button');
  const navbar = document.getElementById('navbar');
  const menu = document.getElementById('menu');
  const closeMenuButton = document.getElementById('close-menu');
  const navbarLogo = document.getElementById('navbar-logo');

  let lastScrollY = window.scrollY;

  // Handle scroll events for navbar hide/show and logo resize
  const handleScroll = () => {
    const currentScrollY = window.scrollY;

    // Hide/show navbar based on scroll direction
    if (currentScrollY > lastScrollY && currentScrollY > 30) {
      // Scrolling down and past 100px - hide navbar
      navbar?.classList.add('-translate-y-full');
    } else {
      // Scrolling up or at top - show navbar
      navbar?.classList.remove('-translate-y-full');
    }

    lastScrollY = currentScrollY;
  };

  // Add scroll event listener
  window.addEventListener('scroll', handleScroll, { passive: true });

  navbarButton?.addEventListener('click', () => {
    if (menu?.classList.contains('opacity-0')) {
      // Show menu
      menu.classList.remove('opacity-0', 'pointer-events-none');
      menu.classList.add('opacity-100', 'pointer-events-auto');
      document.body.style.overflow = 'hidden';
    } else {
      // Hide menu
      menu?.classList.remove('opacity-100', 'pointer-events-auto');
      menu?.classList.add('opacity-0', 'pointer-events-none');
      document.body.style.overflow = 'auto';
    }
  });

  closeMenuButton?.addEventListener('click', () => {
    menu?.classList.remove('opacity-100', 'pointer-events-auto');
    menu?.classList.add('opacity-0', 'pointer-events-none');
    document.body.style.overflow = 'auto';
  });
};
