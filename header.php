<!DOCTYPE html>
<html lang=" <?php get_language_attributes() ?> ">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>
<body>
<!-- header -->
  <header class="header container-fluid" id="header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href=" <?php echo home_url() ?> ">Navegapy</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php 
        wp_nav_menu([
          'menu' => 'primary',
          'theme_location' => 'top_menu',
          'depth' => 2,
          'container' => 'div',
          'container_class' => 'collapse navbar-collapse',
          'container_id' => 'navbarNav',
          'menu_class' => 'navbar-nav ml-auto',
          'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
          'walker' => new wp_bootstrap_navwalker(),
        ]);
      ?>
    </nav>
  </header>
<!-- /header -->
