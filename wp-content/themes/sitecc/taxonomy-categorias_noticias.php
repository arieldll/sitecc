<?php get_template_part('templates/page', 'header'); ?>
<?php if (have_posts()) : ?>
  <?php get_template_part('templates/content', 'categorias_noticias'); ?>
<?php endif; ?>
