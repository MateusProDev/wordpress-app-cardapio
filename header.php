<?php $inicio_id = get_page_by_title('Início')->ID; ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar</title>
    <script src="<?= get_stylesheet_directory_uri(); ?>/mobile-navbar.js" defer></script>
    <?php wp_head(); ?>
  </head>

  <body>
    <header>
      <nav>
        <a class="logo" href="/"><?php echo get_post_meta($inicio_id, 'logo', true); ?></a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <?php
          wp_nav_menu([
          'menu' => 'nav-list',
          'theme_location' => 'nav-list',
          'menu_class' => 'nav-list',
          'container' => false
          ])
        ?>
      </nav>
    </header>