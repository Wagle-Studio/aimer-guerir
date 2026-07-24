<?php

/**
 * Title: Séances — À propos
 * Slug: aimer-guerir/appointment-about
 * Categories: aimer-guerir
 * Post Types: page
 * Keywords: séances, cabinet, distance, domicile
 */
?>
<!-- wp:group {"tagName":"section","anchor":"a-propos-des-seances","align":"full","className":"appointment-about","layout":{"type":"default"}} -->
<section id="a-propos-des-seances" class="wp-block-group alignfull appointment-about">
  <!-- wp:group {"className":"appointment-about__wrapper","layout":{"type":"default"}} -->
  <div class="wp-block-group appointment-about__wrapper">
    <!-- wp:heading {"level":2} -->
    <h2>À propos des séances</h2>
    <!-- /wp:heading -->

    <!-- wp:group {"className":"appointment-about__content","layout":{"type":"default"}} -->
    <div class="wp-block-group appointment-about__content">
      <!-- wp:paragraph {"className":"appointment-about__text"} -->
      <p class="appointment-about__text">Lors de la première séance, nous échangeons sur le problème rencontré, vos ressentis, votre état général, vos antécédents médicaux et les traitements en cours. Les séances durent en moyenne 30 minutes.</p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph {"className":"appointment-about__text"} -->
      <p class="appointment-about__text">Le traitement peut s'étaler sur plusieurs séances et varie en fonction de l'âge de la personne et de l'ancienneté du problème.</p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph {"className":"appointment-about__text"} -->
      <p class="appointment-about__text">Les soins se déroulent toujours habillé, sans manipulation et en présence d'un adulte pour les personnes mineures.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"appointment-about__sessions-intro","layout":{"type":"default"}} -->
    <div class="wp-block-group appointment-about__sessions-intro">
      <!-- wp:heading {"level":3,"className":"appointment-about__sessions-title"} -->
      <h3 class="appointment-about__sessions-title">La séance qui vous convient</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"appointment-about__sessions-text"} -->
      <p class="appointment-about__sessions-text">Chaque accompagnement est personnalisé. Choisissez une séance au cabinet, à distance ou à domicile selon votre situation, votre disponibilité et vos besoins. Nous échangeons ensemble pour retenir la formule la plus adaptée.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"className":"appointment-about__sessions"} -->
    <div class="wp-block-columns appointment-about__sessions">
      <!-- wp:column {"width":"33.33%","className":"appointment-about__session-card"} -->
      <div class="wp-block-column appointment-about__session-card" style="flex-basis:33.33%">
        <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"appointment-about__session-image"} -->
        <figure class="wp-block-image size-large appointment-about__session-image">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/pattern-placeholder-400.svg')); ?>" alt="" />
        </figure>
        <!-- /wp:image -->

        <!-- wp:group {"className":"appointment-about__session-body","layout":{"type":"default"}} -->
        <div class="wp-block-group appointment-about__session-body">
          <!-- wp:heading {"level":3,"className":"appointment-about__session-title"} -->
          <h3 class="appointment-about__session-title"><span><?php include get_theme_file_path('assets/icons/hearth.php'); ?></span>Séance au cabinet</h3>
          <!-- /wp:heading -->

          <!-- wp:paragraph {"className":"appointment-about__session-price"} -->
          <p class="appointment-about__session-price">Prix d'une séance : 50 €</p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"className":"appointment-about__session-text"} -->
          <p class="appointment-about__session-text">Accueil au cabinet sur rendez-vous uniquement.</p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"className":"appointment-about__session-text"} -->
          <p class="appointment-about__session-text">Règlement en espèces, carte bancaire ou chèque à l'ordre de « Aimer Guérir »</p>
          <!-- /wp:paragraph -->

          <!-- wp:group {"className":"appointment-about__session-actions","layout":{"type":"default"}} -->
          <div class="wp-block-group appointment-about__session-actions">
            <!-- wp:buttons -->
            <div class="wp-block-buttons">
              <!-- wp:button {"className":"btn--secondary"} -->
              <div class="wp-block-button btn--secondary">
                <a class="wp-block-button__link btn" href="#">Prendre rendez-vous au cabinet</a>
              </div>
              <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->

      <!-- wp:column {"width":"33.33%","className":"appointment-about__session-card"} -->
      <div class="wp-block-column appointment-about__session-card" style="flex-basis:33.33%">
        <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"appointment-about__session-image"} -->
        <figure class="wp-block-image size-large appointment-about__session-image">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/pattern-placeholder-400.svg')); ?>" alt="" />
        </figure>
        <!-- /wp:image -->

        <!-- wp:group {"className":"appointment-about__session-body","layout":{"type":"default"}} -->
        <div class="wp-block-group appointment-about__session-body">
          <!-- wp:heading {"level":3,"className":"appointment-about__session-title"} -->
          <h3 class="appointment-about__session-title"><span><?php include get_theme_file_path('assets/icons/remote.php'); ?></span>Séance à distance</h3>
          <!-- /wp:heading -->

          <!-- wp:paragraph {"className":"appointment-about__session-price"} -->
          <p class="appointment-about__session-price">Prix d'une séance : 50 €</p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"className":"appointment-about__session-text"} -->
          <p class="appointment-about__session-text">Je vous remercie de m'adresser à l'adresse email contact@aimerguerir.com une photo récente de votre visage (sans lunettes de soleil) afin que je puisse me connecter à votre champ énergétique.</p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"className":"appointment-about__session-text"} -->
          <p class="appointment-about__session-text">A l'heure convenue, je vous contacterai par téléphone afin que vous m'exposiez votre problématique. Puis, je réaliserai le travail énergétique nécessaire. Préparer un kit main libre si vous utilisez un portable.</p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"className":"appointment-about__session-text"} -->
          <p class="appointment-about__session-text">Le paiement s'effectue par carte bancaire AVANT la séance. Une séance non réglée ne peut être honorée.</p>
          <!-- /wp:paragraph -->

          <!-- wp:group {"className":"appointment-about__session-actions","layout":{"type":"default"}} -->
          <div class="wp-block-group appointment-about__session-actions">
            <!-- wp:buttons -->
            <div class="wp-block-buttons">
              <!-- wp:button {"className":"btn--secondary"} -->
              <div class="wp-block-button btn--secondary">
                <a class="wp-block-button__link btn" href="#">Prendre rendez-vous à distance</a>
              </div>
              <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->

      <!-- wp:column {"width":"33.33%","className":"appointment-about__session-card"} -->
      <div class="wp-block-column appointment-about__session-card" style="flex-basis:33.33%">
        <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"appointment-about__session-image"} -->
        <figure class="wp-block-image size-large appointment-about__session-image">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/images/pattern-placeholder-400.svg')); ?>" alt="" />
        </figure>
        <!-- /wp:image -->

        <!-- wp:group {"className":"appointment-about__session-body","layout":{"type":"default"}} -->
        <div class="wp-block-group appointment-about__session-body">
          <!-- wp:heading {"level":3,"className":"appointment-about__session-title"} -->
          <h3 class="appointment-about__session-title"><span><?php include get_theme_file_path('assets/icons/home-visit.php'); ?></span>Séance à domicile</h3>
          <!-- /wp:heading -->

          <!-- wp:paragraph {"className":"appointment-about__session-price"} -->
          <p class="appointment-about__session-price">Prix d'une séance : 70 €</p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"className":"appointment-about__session-text"} -->
          <p class="appointment-about__session-text">Je me déplace uniquement sur la Commune de Vernon pour les personnes ne pouvant pas venir au cabinet. Réservations uniquement par téléphone au 06 95 64 54 76.</p>
          <!-- /wp:paragraph -->

          <!-- wp:paragraph {"className":"appointment-about__session-text"} -->
          <p class="appointment-about__session-text">Le paiement peut se faire en espèces ou par chèque à l'ordre de « AIMER GUÉRIR ». Merci de réserver pour le bon déroulement de la séance un espace calme et propre.</p>
          <!-- /wp:paragraph -->

          <!-- wp:group {"className":"appointment-about__session-actions","layout":{"type":"default"}} -->
          <div class="wp-block-group appointment-about__session-actions">
            <!-- wp:buttons -->
            <div class="wp-block-buttons">
              <!-- wp:button {"className":"btn--secondary"} -->
              <div class="wp-block-button btn--secondary">
                <a class="wp-block-button__link btn" href="#">Téléphonez moi pour réserver une séance</a>
              </div>
              <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
  <!-- /wp:group -->
</section>
<!-- /wp:group -->