<?php
/**
 * The main template file.
 * This file is required for a theme to be valid.
 *
 * @package marhennord
 */

get_header(); ?>

<main id="main" class="site-main" role="main">
    <?php
    // Démarrage de la boucle WordPress
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            
            // Pour le cas par défaut, on charge le contenu de la page d'accueil
            get_template_part( 'template-parts/content', 'home' );

        endwhile;
    else :
        // Contenu à afficher si aucun article n'est trouvé
        echo '<p>Désolé, aucun contenu à afficher.</p>';
    endif;
    ?>
</main><!-- #main -->

<?php get_footer(); ?>
