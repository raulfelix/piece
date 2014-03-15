<?php
/*
Template Name: calendar
*/
?>

<?php get_header(); ?>

<div class="header-secondary">
  <div class="p-grid p-grid-row">
    <div class="p-1 p-indent">
      <h1 class="title">Class Calendar</h1>
    </div>
  </div>
</div>
<div class="content content-heroless calendar">
  <div class="p-grid p-grid-row">
    <div class="p-1 p-indent">
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
      <?php the_content(); ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>