<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-gray-50'); ?>>
<?php wp_body_open(); ?>

    <!-- MODIFICATION: Les classes bg-white ont été retirées. La couleur est gérée par style.css -->
    <header class="fixed top-0 left-0 w-full shadow-lg z-50">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-end h-20">
                <!-- Menu pour ordinateur (caché sur mobile) -->
                <div class="hidden md:flex">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'flex items-center space-x-8',
                    ) );
                    ?>
                </div>

                <!-- Bouton Burger pour mobile (visible uniquement sur mobile) -->
                <div class="md:hidden">
                    <button id="burger-btn" type="button" class="p-2 rounded-md text-[#D47344] hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-[#D47344]" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Ouvrir le menu principal</span>
                        <!-- Icône du burger (trois lignes) -->
                        <svg id="burger-icon" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Icône de fermeture (croix), cachée par défaut -->
                        <svg id="close-icon" class="h-6 w-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Menu Mobile, caché par défaut et géré par JavaScript -->
        <div id="mobile-menu" class="hidden md:hidden shadow-lg">
             <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'mobile-nav-links', // Classe CSS pour styler les liens sur mobile
                ) );
            ?>
        </div>
    </header>
