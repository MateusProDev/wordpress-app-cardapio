<?php
// Template name: Início
get_header();
?>

<?php if (have_posts()) { while (have_posts()) { the_post(); ?>

<main><?php echo get_post_meta(get_the_ID(), 'greetings', true); ?></main>

<?php }; }; ?>

<?php get_footer(); ?>