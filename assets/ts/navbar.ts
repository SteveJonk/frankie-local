export const navbar = () => {
  const navbarButton = document.getElementById('navbar-button');
  const navbar = document.getElementById('navbar');
  const menu = document.getElementById('menu');
  const closeMenuButton = document.getElementById('close-menu');

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
