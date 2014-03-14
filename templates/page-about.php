<?php
/*
Template Name: about
*/
?>

<?php get_header(); ?>

<div class="hero about">
  <div class="p-grid p-grid-row">
    <div class="p-1 p-indent">
      <h1 class="title">John Gallagher</h1>
    </div>
  </div>
</div>
<div class="content">
  <div class="p-grid p-grid-row">
    <div class="p-1 p-indent">
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
      <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>