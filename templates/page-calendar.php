<?php
/*
Template Name: calendar
*/
?>

<?php get_header(); ?>

<div class="content has-secondary-title">
  <div class="extra-header">
    <div class="p-grid p-grid-row">
      <div class="p-1 indented">
        <h1 class="title">Class Calendar</h1>
      </div>
    </div>
  </div>
  <div class="content p-grid">
    <div class="p-grid-row calendar">
      <div class="p-1 indented">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>