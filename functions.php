<?php

// --- Enqueue Scripts and Styles ---
function marhennord_scripts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap', array(), null );
    wp_enqueue_script( 'tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null, false );
    wp_enqueue_style( 'marhennord-style', get_stylesheet_uri(), array(), '3.4' ); 
    wp_enqueue_script( 'marhennord-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '3.0', true );
}
add_action( 'wp_enqueue_scripts', 'marhennord_scripts' );


// --- Theme Setup ---
function marhennord_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'marhennord' ),
    ) );
}
add_action( 'after_setup_theme', 'marhennord_setup' );


// --- Nav Menu Customizations ---
function add_nav_li_class( $classes, $item, $args ) {
    if ( 'primary' === $args->theme_location ) {
        $classes[] = 'nav-link-item';
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'add_nav_li_class', 10, 3 );

function add_menu_link_attributes( $atts, $item, $args ) {
  if (property_exists($args, 'theme_location') && 'primary' === $args->theme_location ) {
    $atts['class'] = 'nav-link';
    $atts['data-text'] = $item->title;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_attributes', 10, 3 );


// --- Theme Customizer Options ---
function marhennord_customize_register( $wp_customize ) {
    
    // SECTION POUR LES IMAGES
    $wp_customize->add_section( 'marhennord_images_section', array('title' => __( 'Images des sections', 'marhennord' ), 'priority' => 30) );
    $wp_customize->add_setting( 'marhennord_logo_image', ['default' => get_template_directory_uri() . '/assets/images/marhennord.png'] );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'marhennord_logo_image_control', ['label' => __( 'Logo (section Accueil)', 'marhennord' ), 'section' => 'marhennord_images_section', 'settings' => 'marhennord_logo_image'] ) );
    $wp_customize->add_setting( 'marhennord_accueil_image', ['default' => get_template_directory_uri() . '/assets/images/accueil.png'] );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'marhennord_accueil_image_control', ['label' => __( 'Image de la section Accueil', 'marhennord' ), 'section' => 'marhennord_images_section', 'settings' => 'marhennord_accueil_image'] ) );
    $wp_customize->add_setting( 'marhennord_services_image', ['default' => get_template_directory_uri() . '/assets/images/services.png'] );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'marhennord_services_image_control', ['label' => __( 'Image de la section Services', 'marhennord' ), 'section' => 'marhennord_images_section', 'settings' => 'marhennord_services_image'] ) );
    $wp_customize->add_setting( 'marhennord_superrh_image', ['default' => get_template_directory_uri() . '/assets/images/superrh.png'] );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'marhennord_superrh_image_control', ['label' => __( 'Image de la section Facilitation RH', 'marhennord' ), 'section' => 'marhennord_images_section', 'settings' => 'marhennord_superrh_image'] ) );

    
    // SECTION POUR LES TEXTES
    $wp_customize->add_section( 'marhennord_text_section', array('title' => __( 'Contenu des sections', 'marhennord' ), 'priority' => 35) );
    $wp_customize->add_setting( 'marhennord_accueil_slogan', ['default' => 'À consommer sans modération'] );
    $wp_customize->add_control( 'marhennord_accueil_slogan_control', ['label' => __( 'Slogan (Accueil)', 'marhennord' ), 'section' => 'marhennord_text_section', 'settings' => 'marhennord_accueil_slogan', 'type' => 'text'] );
    $wp_customize->add_setting( 'marhennord_accueil_mission', ['default' => '<span class="font-bold">Ma mission ?</span><br>Remettre du mouvement dans vos projets RH, avec sens et rythme, pour une approche qui vous ressemble.'] );
    $wp_customize->add_control( 'marhennord_accueil_mission_control', ['label' => __( 'Texte Mission (Accueil)', 'marhennord' ), 'section' => 'marhennord_text_section', 'settings' => 'marhennord_accueil_mission', 'type' => 'textarea'] );
    $wp_customize->add_setting( 'marhennord_vision_p1', ['default' => 'Trop de <span class="font-bold">dysfonctionnements</span> en entreprise viennent de zones floues : outils bricolés, rôles informels, process inexistants ou <span class="font-bold">obsolètes</span>.'] );
    $wp_customize->add_control( 'marhennord_vision_p1_control', ['label' => __( 'Paragraphe 1 (Vision)', 'marhennord' ), 'section' => 'marhennord_text_section', 'settings' => 'marhennord_vision_p1', 'type' => 'textarea'] );
    $wp_customize->add_setting( 'marhennord_vision_p2', ['default' => 'Le problème, ce n’est pas la mauvaise <span class="font-bold">volonté</span>, c’est le manque de <span class="font-bold">temps</span> pour revoir la copie.'] );
    $wp_customize->add_control( 'marhennord_vision_p2_control', ['label' => __( 'Paragraphe 2 (Vision)', 'marhennord' ), 'section' => 'marhennord_text_section', 'settings' => 'marhennord_vision_p2', 'type' => 'textarea'] );
    $wp_customize->add_setting( 'marhennord_vision_p3', ['default' => 'Mon job, c’est d’entrer dans l’organisation, d’identifier les <span class="font-bold">irritants</span> et de structurer tout ça <span class="font-bold">intelligemment</span>, sans plaquer des modèles tout faits.'] );
    $wp_customize->add_control( 'marhennord_vision_p3_control', ['label' => __( 'Paragraphe 3 (Vision)', 'marhennord' ), 'section' => 'marhennord_text_section', 'settings' => 'marhennord_vision_p3', 'type' => 'textarea'] );
    $wp_customize->add_setting( 'marhennord_vision_p4_block', ['default' => 'Car oui, <span class="font-bold">les process, c’est la vie</span>.<br>Mais pas pour rendre les choses rigides.<br>Bien pensés, <span class="font-bold">les process rassurent</span>, <span class="font-bold">fluidifient</span>, et <span class="font-bold">fédèrent</span>.<br>Ils permettent à chacun de <span class="font-bold">savoir</span> ce qu’il fait, pourquoi il le fait, et comment <span class="font-bold">avancer</span> avec les autres.'] );
    $wp_customize->add_control( 'marhennord_vision_p4_block_control', ['label' => __( 'Bloc final de phrases (Vision)', 'marhennord' ), 'description' => 'Utilisez &lt;br&gt; pour les sauts de ligne.', 'section' => 'marhennord_text_section', 'settings' => 'marhennord_vision_p4_block', 'type' => 'textarea'] );
    $wp_customize->add_setting( 'marhennord_services_item1', ['default' => '<span class="font-bold">Vous voulez digitaliser vos processus RH sans mobiliser vos équipes ?</span><br>Je pilote le projet de A à Z, en lien avec les prestataires, pour vous faire gagner du temps.'] );
    $wp_customize->add_control( 'marhennord_services_item1_control', ['label' => __( 'Service 1', 'marhennord' ), 'section' => 'marhennord_text_section', 'settings' => 'marhennord_services_item1', 'type' => 'textarea'] );
    $wp_customize->add_setting( 'marhennord_services_item2', ['default' => '<span class="font-bold">Vous cherchez un SIRH, un ATS ou un LMS adapté à votre taille et vos besoins ?</span><br>Je vous aide à rédiger le cahier des charges, choisir la bonne solution (et le bon prestataire) que je déploie en formant les collaborateurs.'] );
    $wp_customize->add_control( 'marhennord_services_item2_control', ['label' => __( 'Service 2', 'marhennord' ), 'section' => 'marhennord_text_section', 'settings' => 'marhennord_services_item2', 'type' => 'textarea'] );
    $wp_customize->add_setting( 'marhennord_services_item3', ['default' => '<span class="font-bold">Votre fonction RH est peu structurée ou inexistante ?</span><br>Je deviens votre DRH externalisé pour poser des bases solides, structurer et piloter la fonction RH.'] );
    $wp_customize->add_control( 'marhennord_services_item3_control', ['label' => __( 'Service 3', 'marhennord' ), 'section' => 'marhennord_text_section', 'settings' => 'marhennord_services_item3', 'type' => 'textarea'] );
    $wp_customize->add_setting( 'marhennord_services_item4', ['default' => '<span class="font-bold">Vous voulez renforcer votre attractivité pour mieux recruter et fidéliser ?</span><br>Je vous aide à valoriser votre marque employeur via votre communication RH et vos événements internes.'] );
    $wp_customize->add_control( 'marhennord_services_item4_control', ['label' => __( 'Service 4', 'marhennord' ), 'section' => 'marhennord_text_section', 'settings' => 'marhennord_services_item4', 'type' => 'textarea'] );
    $wp_customize->add_setting( 'marhennord_facilitation_p1', ['default' => 'J’ai appris le métier sur le <span class="font-bold">terrain</span>, en RH généraliste, puis en management d’équipe. J’ai <span class="font-bold">dirigé</span> un service pédagogique, géré des projets transverses, <span class="font-bold">formé</span> des collaborateurs et des étudiants, tout cela avec la passion de <span class="font-bold">transmettre</span> et de <span class="font-bold">donner du sens</span>.'] );
    $wp_customize->add_control( 'marhennord_facilitation_p1_control', ['label' => __( 'Paragraphe 1 (Facilitation RH)', 'marhennord' ), 'section' => 'marhennord_text_section', 'settings' => 'marhennord_facilitation_p1', 'type' => 'textarea'] );
    $wp_customize->add_setting( 'marhennord_facilitation_p1_bis', ['default' => 'Puis un jour, <span class="font-bold">j’ai changé de cap !</span>'] );
    $wp_customize->add_control( 'marhennord_facilitation_p1_bis_control', ['label' => __( 'Paragraphe 1 (suite)', 'marhennord' ), 'section' => 'marhennord_text_section', 'settings' => 'marhennord_facilitation_p1_bis', 'type' => 'textarea'] );
    $wp_customize->add_setting( 'marhennord_facilitation_p2', ['default' => 'De ce grand saut est né l’envie de faire un pas de plus... vers <span class="font-bold">l’entrepreneuriat</span> et les RH. Mais pas les RH old school du type "remplis ce formulaire en trois exemplaires".'] );
    $wp_customize->add_control( 'marhennord_facilitation_p2_control', ['label' => __( 'Paragraphe 2 (Facilitation RH)', 'marhennord' ), 'section' => 'marhennord_text_section', 'settings' => 'marhennord_facilitation_p2', 'type' => 'textarea'] );
    $wp_customize->add_setting( 'marhennord_facilitation_p3', ['default' => 'Non, moi, ce qui me passionne, c’est la transformation digitale, la conduite de projets concrets, et l’idée qu’on peut vraiment <span class="font-bold">améliorer la vie des entreprises et des équipes</span>.'] );
    $wp_customize->add_control( 'marhennord_facilitation_p3_control', ['label' => __( 'Paragraphe 3 (Facilitation RH)', 'marhennord' ), 'section' => 'marhennord_text_section', 'settings' => 'marhennord_facilitation_p3', 'type' => 'textarea'] );
    $wp_customize->add_setting( 'marhennord_facilitation_p4', ['default' => 'Aujourd’hui, j’aide les entreprises à <span class="font-bold">revoir leurs pratiques</span>, à <span class="font-bold">mettre en œuvre</span> des projets laissés à l’abandon, à faire des <span class="font-bold">RH</span> un vrai levier de performance.'] );
    $wp_customize->add_control( 'marhennord_facilitation_p4_control', ['label' => __( 'Paragraphe 4 (Facilitation RH)', 'marhennord' ), 'section' => 'marhennord_text_section', 'settings' => 'marhennord_facilitation_p4', 'type' => 'textarea'] );
    $wp_customize->add_setting( 'marhennord_facilitation_p5', ['default' => 'J’apporte mon <span class="font-bold">regard pragmatique</span>, mon <span class="font-bold">humour</span> (parfois involontaire) et ma capacité à rendre les projets RH un peu moins austères.'] );
    $wp_customize->add_control( 'marhennord_facilitation_p5_control', ['label' => __( 'Paragraphe 5 (Facilitation RH)', 'marhennord' ), 'section' => 'marhennord_text_section', 'settings' => 'marhennord_facilitation_p5', 'type' => 'textarea'] );
    $wp_customize->add_setting( 'marhennord_facilitation_p6', ['default' => 'Bref, je ne fais pas des RH pour cocher des <span class="font-bold">cases</span>. Je les fais pour voir des <span class="font-bold">sourires</span>, des idées qui <span class="font-bold">avancent</span>, et des projets qui prennent enfin <span class="font-bold">vie</span>.'] );
    $wp_customize->add_control( 'marhennord_facilitation_p6_control', ['label' => __( 'Paragraphe 6 (Facilitation RH)', 'marhennord' ), 'section' => 'marhennord_text_section', 'settings' => 'marhennord_facilitation_p6', 'type' => 'textarea'] );
    $wp_customize->add_setting( 'marhennord_facilitation_p7', ['default' => 'C’est ce que je <span class="font-bold">facilite</span>, grâce à l’écoute, le bon sens et… une pincée de méthode !'] );
    $wp_customize->add_control( 'marhennord_facilitation_p7_control', ['label' => __( 'Paragraphe 7 (Facilitation RH)', 'marhennord' ), 'section' => 'marhennord_text_section', 'settings' => 'marhennord_facilitation_p7', 'type' => 'textarea'] );

    // SECTION POUR LES LIENS DES RÉSEAUX SOCIAUX
    $wp_customize->add_section( 'marhennord_social_links_section', array('title' => __( 'Liens des Réseaux Sociaux', 'marhennord' ), 'priority' => 40) );
    $wp_customize->add_setting( 'marhennord_linkedin_url', ['default' => 'https://www.linkedin.com/in/adelinemarhennord/'] );
    $wp_customize->add_control( 'marhennord_linkedin_url_control', ['label' => __( 'URL du profil LinkedIn', 'marhennord' ), 'section' => 'marhennord_social_links_section', 'settings' => 'marhennord_linkedin_url', 'type' => 'url'] );
    $wp_customize->add_setting( 'marhennord_instagram_url', ['default' => 'https://www.instagram.com/marhennord'] );
    $wp_customize->add_control( 'marhennord_instagram_url_control', ['label' => __( 'URL du profil Instagram', 'marhennord' ), 'section' => 'marhennord_social_links_section', 'settings' => 'marhennord_instagram_url', 'type' => 'url'] );

    // SECTION POUR LES COORDONNÉES
    $wp_customize->add_section( 'marhennord_contact_section', array('title' => __( 'Coordonnées (Section Contact)', 'marhennord' ), 'priority' => 45) );
    $wp_customize->add_setting( 'marhennord_contact_name', ['default' => 'Adeline Manier'] );
    $wp_customize->add_control( 'marhennord_contact_name_control', ['label' => __( 'Nom', 'marhennord' ), 'section' => 'marhennord_contact_section', 'settings' => 'marhennord_contact_name', 'type' => 'text'] );
    $wp_customize->add_setting( 'marhennord_contact_phone', ['default' => '+33 (0)6 58 40 71 88'] );
    $wp_customize->add_control( 'marhennord_contact_phone_control', ['label' => __( 'Numéro de téléphone', 'marhennord' ), 'section' => 'marhennord_contact_section', 'settings' => 'marhennord_contact_phone', 'type' => 'text'] );
    $wp_customize->add_setting( 'marhennord_contact_email', ['default' => 'adeline@marhennord.fr'] );
    $wp_customize->add_control( 'marhennord_contact_email_control', ['label' => __( 'Adresse e-mail', 'marhennord' ), 'section' => 'marhennord_contact_section', 'settings' => 'marhennord_contact_email', 'type' => 'email'] );
}
add_action( 'customize_register', 'marhennord_customize_register' );
