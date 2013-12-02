<?php
/*
Template Name: contact
*/
?>

<?php get_header(); ?>

<div class="content contact">
  <div class="p-grid p-grid-row">
    <div class="p-1 indented">
      <h1>Contact</h1>
      <p class="intro">John Gallagher is available 7 days by appointment only</p>
    </div>
  </div>
  <div class="p-grid p-grid-row">
    <div class="p-1 indented address">
      <div class="p-1-2 bp3-p-1">
        <p>Phone 02 8068 8482</p>
        <p>Mobile 0213 324 123</p>
        <p>Email <a mailto="johng@piecefurniture.com.au">johng@piecefurniture.com.au</a></p>
      </div>
      <div class="p-1-2 bp3-p-1">
        <p>81 Sydenham Road, Marrickville,</p>
        <p>NSW 2204, </p>
        <p>Australia</p>
      </div>
    </div>
  </div>
  <div class="p-grid p-grid-row">
    <div class="p-1 indented">
      <a class="map-link" href="javascript:void(0)">View on a map</a>
      <img src="<?php echo get_template_directory_uri(); ?>/images/map.jpg">
    </div>
  </div>
</div>

<?php get_footer(); ?>