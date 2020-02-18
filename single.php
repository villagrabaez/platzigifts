<?php get_header() ?>

  <main class="container my-3">

      <?php
      
        if ( have_posts() ) {
          while( have_posts() ) {
            the_post();
            $post_title = the_title_attribute('echo=0');
            $post_id = get_the_ID();
            ?>
              <h1 class="my-3"><?php the_title() ?></h1>
              <div class="row">
                <div class="col-md-6">
                  <?php the_post_thumbnail(
                    'large',
                      [
                        'class' => 'img-fluid', 
                        'id' => 'imagen-' . $post_id, 
                        'alt' => $post_title
                      ]) 
                  ?>
                </div>
                <div class="col-md-6">
                  <?php the_content()?>
                </div>
              </div>
            <?php
          }
        }
      
      ?>

  </main>

<?php get_footer() ?>