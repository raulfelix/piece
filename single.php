<?php get_header(); ?>

<div class="header-secondary">
  <div class="p-grid p-grid-row">
    <div class="p-1">
      <h1 class="title"><?php the_title(); ?></h1>
    </div>
  </div>
</div>
<div class="content content-heroless gallery-detail">
  <div class="p-grid">
    <div class="p-grid-row">
      <div class="p-1">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
          <?php $attachments = new Attachments( 'my_attachments' ); ?>
          <?php if( $attachments->exist() ) : ?>
            <?php while( $attachment = $attachments->get() ) : ?>
              <?php echo $attachments->image( 'original' ); ?>
            <?php endwhile; ?>
          <?php endif; ?>
          <div class="details">
            <?php the_content(); ?>
          </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
    <div class="p-grid-row">
      <div class="p-1">
        <div class="button">
          <a href="<?php echo get_page_link(10); ?>">Back to gallery</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>