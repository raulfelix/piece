<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

<div class="hero home">
  <div class="introduction">
    <h1 class="title">Hand-crafted, modern, thoughtfully designed furniture</h1>
  </div>
  <div class="more-wrap">
    <a href="<?php echo get_page_link(7); ?>" class="jos">See more of John Gallagher's work</a>
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