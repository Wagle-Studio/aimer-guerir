<?php
/**
 * Title: Google — Appel aux témoignages
 * Slug: aimer-guerir/google-cta
 * Categories: aimer-guerir
 * Post Types: page
 * Keywords: google, avis, témoignages, cta
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"pattern_google_cta","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull pattern_google_cta">

  <!-- wp:group {"className":"pattern_google_cta__wrapper","layout":{"type":"default"}} -->
  <div class="wp-block-group pattern_google_cta__wrapper">

    <!-- wp:group {"className":"pattern_google_cta__badge","layout":{"type":"default"}} -->
    <div class="wp-block-group pattern_google_cta__badge">

      <!-- wp:html -->
      <?php include get_theme_file_path('assets/icons/icon-google.php'); ?>
      <!-- /wp:html -->

      <!-- wp:html -->
      <p class="pattern_google_cta__rating">4,9 <span class="pattern_google_cta__stars">★★★★★</span> · 79 avis</p>
      <!-- /wp:html -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"pattern_google_cta__text","layout":{"type":"default"}} -->
    <div class="wp-block-group pattern_google_cta__text">

      <!-- wp:paragraph {"className":"pattern_google_cta__intro"} -->
      <p class="pattern_google_cta__intro">Vos maux sont précieux à mes yeux,<br>Vos mots sont importants dans le regard des autres,<br>Vos témoignages sont mes meilleurs ambassadeurs.</p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph {"className":"pattern_google_cta__body"} -->
      <p class="pattern_google_cta__body">Chaque jour des personnes viennent à moi parce qu'elles ont entendu des histoires de guérison par un voisin, un ami, un membre de leur famille.<br>Chaque jour des personnes viennent à moi parce qu'elles ont lu un témoignage sur les réseaux sociaux ou sur les moteurs de recherche.<br>Si vous souhaitez contribuer à cette diffusion, vous pouvez m'adresser votre témoignage sur les avis Google ou par mail à <a href="mailto:contact@aimerguerir.com">contact@aimerguerir.com</a></p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph {"className":"pattern_google_cta__signature"} -->
      <p class="pattern_google_cta__signature">Avec mes remerciements,<br>Christophe Rebours</p>
      <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

    <!-- wp:html -->
    <div class="pattern_google_cta__actions">
      <a class="btn btn--secondary btn--icon" href="https://g.page/r/VOTRE_ID_GOOGLE/review" target="_blank" rel="noopener noreferrer">
        <?php include get_theme_file_path('assets/icons/icon-google.php'); ?>
        Déposer un avis Google
      </a>
    </div>
    <!-- /wp:html -->

  </div>
  <!-- /wp:group -->

</section>
<!-- /wp:group -->
