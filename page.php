<?php get_header() ?>

  <main class="container">
    <div class="row">
      <?php

        if ( have_posts() ) {
          while(have_posts()) {
            
            the_post(); ?>
            
            <h1 class="my-3"> <?php the_title() ?> </h1>

            <p> <?php the_content() ?> </p>

          <?php }
        }
      ?>
    </div>
  </main>

<?php get_footer() ?>