<?php
/*
Template Name: commission
*/
?>

<?php get_header(); ?>

<div class="hero commission">
  <img src="<?php echo get_template_directory_uri(); ?>/images/commission.jpg">
  <div class="p-grid p-grid-row">
    <div class="p-1 indented">
      <h1 class="title">commission a piece</h1>
    </div>
  </div>
</div>
<div class="content">
  <div class="p-grid p-grid-row">
    <div class="p-1 indented">
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
      <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>