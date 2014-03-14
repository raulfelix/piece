<?php
/*
Template Name: classes
*/
?>

<?php get_header(); ?>

<div class="hero hero-classes">
  <div class="p-grid p-grid-row">
    <div class="p-1 p-indent">
      <h1 class="title">Classes</h1>
      <div class="button">
        <a href="<?php echo get_page_link(136); ?>">View term calendar</a>
      </div>
    </div>
  </div>
</div>
<div class="content">
  <div class="p-grid p-grid-row">
    <div class="p-1 p-indent">
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
      <?php the_content(); ?>
      <?php endwhile; endif; ?>
      <div class="feature">
        <img src="<?php echo get_template_directory_uri(); ?>/images/shop1.jpg">
        <img src="<?php echo get_template_directory_uri(); ?>/images/shop2.jpg">
        <img src="<?php echo get_template_directory_uri(); ?>/images/shop3.jpg">
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>