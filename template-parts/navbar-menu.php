<a href="<?php echo home_url() ?>" class="z-30 absolute left-8 mt-2 sm:block hidden"><img
        src="<?php echo get_theme_mod('navbar_logo'); ?>" type="image/x-icon" alt="header logo" height="300" width="300"
        loading="eager"></a>

<header id="navbar"
    class="fixed flex justify-between z-20 w-full py-4 px-8 transition-transform duration-100 ease-in-out bg-gradient-to-b from-black/20 to-transparent">
    <a href="<?php echo home_url() ?>"><img id="navbar-logo" src="<?php echo get_theme_mod('navbar_logo'); ?>"
            class="max-w-[40vw] transition-transform duration-100 ease-in-out origin-top-left" type="image/x-icon"
            alt="header logo" height="150" width="150" loading="eager"></a>
    <div class="flex items-center">
        <div class="hidden sm:block mr-8">
            <?php
            if (is_active_sidebar('menu-button')) {
                dynamic_sidebar('menu-button');
            } ?>
        </div>
        <button id="navbar-button" aria-label="open menu"
            class="menu-icon text-white gap-0 flex flex-col items-center font text-xs transition-transform duration-300 hover:scale-110">
            <svg class="mb-[-3px]" width="40px" height="40px" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M3 6.00092H21M3 12.0009H21M3 18.0009H21" stroke="#ffffff" stroke-width="2.5"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            MENU
        </button>
    </div>

</header>

<div id="menu" role="dialog"
    class="opacity-0 fixed left-0 w-full h-full bg-white z-40 pointer-events-none transition-opacity duration-300 ease-in-out top-0">
    <button id="close-menu" aria-label="close menu" class="absolute top-8 right-8 z-10">
        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="5 5 14 14" width="40" height="40">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M5.29289 5.29289C5.68342 4.90237 6.31658 4.90237 6.70711 5.29289L12 10.5858L17.2929 5.29289C17.6834 4.90237 18.3166 4.90237 18.7071 5.29289C19.0976 5.68342 19.0976 6.31658 18.7071 6.70711L13.4142 12L18.7071 17.2929C19.0976 17.6834 19.0976 18.3166 18.7071 18.7071C18.3166 19.0976 17.6834 19.0976 17.2929 18.7071L12 13.4142L6.70711 18.7071C6.31658 19.0976 5.68342 19.0976 5.29289 18.7071C4.90237 18.3166 4.90237 17.6834 5.29289 17.2929L10.5858 12L5.29289 6.70711C4.90237 6.31658 4.90237 5.68342 5.29289 5.29289Z"
                fill="#0F1729"></path>
        </svg></button>
    <div class="w-full h-full bg-white">
        <?php
        if (is_active_sidebar('menu')) {
            dynamic_sidebar('menu');
        }
        ?>
        <?php
        if (is_active_sidebar('menu-bottom')) {
            dynamic_sidebar('menu-bottom');
        }
        ?>
    </div>

</div>