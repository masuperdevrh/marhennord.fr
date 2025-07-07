<?php
/**
 * The template for displaying the front page.
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
            
            // On charge le contenu de la page depuis le template part
            get_template_part( 'template-parts/content', 'home' );

        endwhile;
    endif;
    ?>
</main><!-- #main -->

<?php get_footer(); ?>
