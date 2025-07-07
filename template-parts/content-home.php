<?php
/**
 * Template part for displaying the one-page content.
 *
 * @package marhennord
 */
?>

<!-- Section 1: Accueil -->
<section id="accueil" class="section-height bg-accueil flex flex-col md:flex-row items-center justify-center">
    <div class="home-text-content md:w-1/2 p-8 flex justify-center md:justify-start">
        <div class="max-w-lg w-full flex flex-col items-center md:items-start">
            <img src="<?php echo esc_url( get_theme_mod( 'marhennord_logo_image', get_template_directory_uri() . '/assets/images/marhennord.png' ) ); ?>" alt="Logo Ma RH en Nord" class="w-full max-w-[14rem] mb-4">
            
            <p class="text-[#D47344] text-3xl font-light mb-24 text-center md:text-left">
                <?php echo esc_html( get_theme_mod( 'marhennord_accueil_slogan', 'À consommer sans modération' ) ); ?>
            </p>

            <p class="section-text text-[#D47344] text-center md:text-left">
                <?php echo wp_kses_post( get_theme_mod( 'marhennord_accueil_mission', '<span class="font-bold">Ma mission ?</span><br>Remettre du mouvement dans vos projets RH, avec sens et rythme, pour une approche qui vous ressemble.' ) ); ?>
            </p>
        </div>
    </div>
    <div class="home-image-container md:w-1/2 flex justify-center">
        <img src="<?php echo esc_url( get_theme_mod( 'marhennord_accueil_image', get_template_directory_uri() . '/assets/images/accueil.png' ) ); ?>" alt="Vue stylisée de la ville de Lille" class="w-full">
    </div>
</section>

<!-- Section 2: Vision -->
<section id="vision" class="section-height bg-vision flex items-center justify-center text-white">
    <div class="max-w-6xl p-8">
        <p class="section-text mb-4 text-left">
             <?php echo wp_kses_post( get_theme_mod( 'marhennord_vision_p1', 'Trop de <span class="font-bold">dysfonctionnements</span> en entreprise viennent de zones floues : outils bricolés, rôles informels, process inexistants ou <span class="font-bold">obsolètes</span>.' ) ); ?>
        </p>
        <p class="section-text mb-8 text-left">
            <?php echo wp_kses_post( get_theme_mod( 'marhennord_vision_p2', 'Le problème, ce n’est pas la mauvaise <span class="font-bold">volonté</span>, c’est le manque de <span class="font-bold">temps</span> pour revoir la copie.' ) ); ?>
        </p>
        <p class="section-text mb-8 text-left">
            <?php echo wp_kses_post( get_theme_mod( 'marhennord_vision_p3', 'Mon job, c’est d’entrer dans l’organisation, d’identifier les <span class="font-bold">irritants</span> et de structurer tout ça <span class="font-bold">intelligemment</span>, sans plaquer des modèles tout faits.' ) ); ?>
        </p>
        <div class="section-text text-left">
           <?php echo wp_kses_post( get_theme_mod( 'marhennord_vision_p4_block', 'Car oui, <span class="font-bold">les process, c’est la vie</span>.<br>Mais pas pour rendre les choses rigides.<br>Bien pensés, <span class="font-bold">les process rassurent</span>, <span class="font-bold">fluidifient</span>, et <span class="font-bold">fédèrent</span>.<br>Ils permettent à chacun de <span class="font-bold">savoir</span> ce qu’il fait, pourquoi il le fait, et comment <span class="font-bold">avancer</span> avec les autres.' ) ); ?>
        </div>
    </div>
</section>

<!-- Section 3: Services -->
<section id="services" class="section-height bg-services flex flex-col md:flex-row items-center justify-center">
    <div class="md:w-1/2 flex justify-center p-8 order-1 md:order-2">
        <img src="<?php echo esc_url( get_theme_mod( 'marhennord_services_image', get_template_directory_uri() . '/assets/images/services.png' ) ); ?>" alt="Personne réfléchissant à une stratégie sur un tableau blanc" class="w-full max-w-lg h-auto">
    </div>
    <div class="md:w-1/2 p-8 md:pl-16 md:pr-4 order-2 md:order-1">
        <p class="section-text text-[#D47344] mb-4 text-left md:text-justify">
             <?php echo wp_kses_post( get_theme_mod( 'marhennord_services_item1', '<span class="font-bold">Vous voulez digitaliser vos processus RH sans mobiliser vos équipes ?</span><br>Je pilote le projet de A à Z, en lien avec les prestataires, pour vous faire gagner du temps.' ) ); ?>
        </p>
        <p class="section-text text-[#D47344] mb-4 text-left md:text-justify">
             <?php echo wp_kses_post( get_theme_mod( 'marhennord_services_item2', '<span class="font-bold">Vous cherchez un SIRH, un ATS ou un LMS adapté à votre taille et vos besoins ?</span><br>Je vous aide à rédiger le cahier des charges, choisir la bonne solution (et le bon prestataire) que je déploie en formant les collaborateurs.' ) ); ?>
        </p>
        <p class="section-text text-[#D47344] mb-4 text-left md:text-justify">
            <?php echo wp_kses_post( get_theme_mod( 'marhennord_services_item3', '<span class="font-bold">Votre fonction RH est peu structurée ou inexistante ?</span><br>Je deviens votre DRH externalisé pour poser des bases solides, structurer et piloter la fonction RH.' ) ); ?>
        </p>
        <p class="section-text text-[#D47344] text-left md:text-justify">
            <?php echo wp_kses_post( get_theme_mod( 'marhennord_services_item4', '<span class="font-bold">Vous voulez renforcer votre attractivité pour mieux recruter et fidéliser ?</span><br>Je vous aide à valoriser votre marque employeur via votre communication RH et vos événements internes.' ) ); ?>
        </p>
    </div>
</section>

<!-- Section 4: Facilitation RH -->
<section id="facilitation-rh" class="section-height bg-facilitation-rh flex flex-col md:flex-row items-center justify-center text-white">
    <div class="md:w-1/2 flex justify-center p-8">
        <img src="<?php echo esc_url( get_theme_mod( 'marhennord_superrh_image', get_template_directory_uri() . '/assets/images/superrh.png' ) ); ?>" alt="Portrait d'Adeline Manier, facilitatrice RH" class="w-full max-w-md h-auto">
    </div>
    <div class="md:w-1/2 p-8 md:pr-16 md:pl-4">
        <p class="section-text mb-4 text-left md:text-justify">
            <?php echo wp_kses_post( get_theme_mod( 'marhennord_facilitation_p1', 'J’ai appris le métier sur le <span class="font-bold">terrain</span>, en RH généraliste, puis en management d’équipe. J’ai <span class="font-bold">dirigé</span> un service pédagogique, géré des projets transverses, <span class="font-bold">formé</span> des collaborateurs et des étudiants, tout cela avec la passion de <span class="font-bold">transmettre</span> et de <span class="font-bold">donner du sens</span>.' ) ); ?>
        </p>
        <p class="section-text mb-4 text-left md:text-justify">
            <?php echo wp_kses_post( get_theme_mod( 'marhennord_facilitation_p1_bis', 'Puis un jour, <span class="font-bold">j’ai changé de cap !</span>' ) ); ?>
        </p>
        <p class="section-text mb-4 text-left md:text-justify">
            <?php echo wp_kses_post( get_theme_mod( 'marhennord_facilitation_p2', 'De ce grand saut est né l’envie de faire un pas de plus... vers <span class="font-bold">l’entrepreneuriat</span> et les RH. Mais pas les RH old school du type "remplis ce formulaire en trois exemplaires".' ) ); ?>
        </p>
        <p class="section-text mb-4 text-left md:text-justify">
            <?php echo wp_kses_post( get_theme_mod( 'marhennord_facilitation_p3', 'Non, moi, ce qui me passionne, c’est la transformation digitale, la conduite de projets concrets, et l’idée qu’on peut vraiment <span class="font-bold">améliorer la vie des entreprises et des équipes</span>.' ) ); ?>
        </p>
        <p class="section-text mb-4 text-left md:text-justify">
            <?php echo wp_kses_post( get_theme_mod( 'marhennord_facilitation_p4', 'Aujourd’hui, j’aide les entreprises à <span class="font-bold">revoir leurs pratiques</span>, à <span class="font-bold">mettre en œuvre</span> des projets laissés à l’abandon, à faire des <span class="font-bold">RH</span> un vrai levier de performance.' ) ); ?>
        </p>
         <p class="section-text mb-4 text-left md:text-justify">
            <?php echo wp_kses_post( get_theme_mod( 'marhennord_facilitation_p5', 'J’apporte mon <span class="font-bold">regard pragmatique</span>, mon <span class="font-bold">humour</span> (parfois involontaire) et ma capacité à rendre les projets RH un peu moins austères.' ) ); ?>
        </p>
         <p class="section-text text-left md:text-justify">
            <?php echo wp_kses_post( get_theme_mod( 'marhennord_facilitation_p6', 'Bref, je ne fais pas des RH pour cocher des <span class="font-bold">cases</span>. Je les fais pour voir des <span class="font-bold">sourires</span>, des idées qui <span class="font-bold">avancent</span>, et des projets qui prennent enfin <span class="font-bold">vie</span>.' ) ); ?>
        </p>
        <p class="section-text text-left md:text-justify">
            <?php echo wp_kses_post( get_theme_mod( 'marhennord_facilitation_p7', 'C’est ce que je <span class="font-bold">facilite</span>, grâce à l’écoute, le bon sens et… une pincée de méthode !' ) ); ?>
        </p>
    </div>
</section>

<!-- Section 5: Contact -->
<section id="contact" class="section-height bg-contact flex items-center justify-center p-8 md:p-16">
    <div class="w-full">
        <div class="contact-title text-center md:text-left">
            <p class="text-[#D47344] font-bold text-3xl md:text-5xl leading-tight">
                <span class="block">Vos projets RH sont en attente ?</span>
                <span class="block">Il est temps de les faire avancer !</span>
            </p>
        </div>
        <div class="contact-bottom-container w-full flex flex-col md:flex-row justify-between items-center">
            <div class="contact-info-block text-center md:text-left mt-8 md:mt-0">
                <div class="text-[#D47344] text-lg">
                    <p class="font-semibold"><?php echo esc_html(get_theme_mod('marhennord_contact_name', 'Adeline Manier')); ?></p>
                    <p><a href="tel:<?php echo esc_attr(preg_replace('/[^+0-9]/', '', get_theme_mod('marhennord_contact_phone', '+33 (0)6 58 40 71 88'))); ?>" class="contact-link"><?php echo esc_html(get_theme_mod('marhennord_contact_phone', '+33 (0)6 58 40 71 88')); ?></a></p>
                    <p><a href="mailto:<?php echo esc_attr(get_theme_mod('marhennord_contact_email', 'adeline@marhennord.fr')); ?>" class="contact-link"><?php echo esc_html(get_theme_mod('marhennord_contact_email', 'adeline@marhennord.fr')); ?></a></p>
                </div>
            </div>
            <div class="social-info-block mt-8 md:mt-0">
                <div class="flex items-center mb-2">
                    <a href="<?php echo esc_url( get_theme_mod( 'marhennord_linkedin_url', 'https://www.linkedin.com/in/adelinemarhennord/' ) ); ?>" target="_blank" rel="noopener noreferrer" class="social-icon-contact">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <a href="<?php echo esc_url( get_theme_mod( 'marhennord_instagram_url', 'https://www.instagram.com/marhennord' ) ); ?>" target="_blank" rel="noopener noreferrer" class="social-icon-contact">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.149 3.228-1.664 4.771-4.919 4.919-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-3.251-.148-4.771-1.691-4.919-4.919-.058-1.265-.07-1.646-.07-4.85s.012-3.584.07-4.85c.149-3.227 1.664-4.77 4.919-4.919 1.266-.057 1.646-.07 4.85-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.947.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.073 4.948.073s3.668-.014 4.947-.072c4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
            </div>
            <p><button id="open-modal-btn" class="contact-link text-sm">mentions légales</button></p>
        </div>
    </div>
</section>
