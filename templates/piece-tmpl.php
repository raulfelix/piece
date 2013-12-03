<?php
/*
Template Name: piece
*/
?>
<div class="p-1-3 bp3-p-1">
  <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail('medium') ?>
  </a>
  <div class="caption"><?php the_title(); ?></div>
</div>