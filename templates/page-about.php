<?php
/*
Template Name: about
*/
?>

<?php get_header(); ?>

<div class="hero about">
  <img src="<?php echo get_template_directory_uri(); ?>/images/about.jpg">
  <div class="p-grid p-grid-row">
    <div class="p-1 indented">
      <h1 class="title">John Gallagher</h1>
    </div>
  </div>
</div>
<div class="content about">
  <div class="p-grid p-grid-row">
    <div class="p-1 indented">
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
      <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>