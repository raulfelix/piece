<?php get_header(); ?>

<div class="content gallery-detail">
  <div class="p-grid">
    <div class="p-grid-row">
      <div class="p-1">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
    <div class="p-grid-row">
      <div class="p-1">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
    <div class="p-grid-row">
      <div class="p-1">
        <a class="more" href="<?php echo get_page_link(10); ?>">Back to gallery</a>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>