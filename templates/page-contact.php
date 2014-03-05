<?php
/*
Template Name: contact
*/
?>

<?php get_header(); ?>

<div class="content has-secondary-title contact">
  <div class="extra-header">
    <div class="p-grid p-grid-row">
      <div class="p-1 indented">
        <h1 class="title">Contact</h1>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="p-grid p-grid-row">
      <div class="p-1 indented address">
        <p class="intro">John Gallagher is available 7 days by appointment only</p>

        <div class="p-1-2 bp3-p-1">
          <p>Phone 02 8068 8482</br/>
          Mobile 0213 324 123<br/>
          Email <a mailto="johng@piecefurniture.com.au">johng@piecefurniture.com.au</a></p>
        </div>
        <div class="p-1-2 bp3-p-1">
          <p>81 Sydenham Road, Marrickville,<br/>
          NSW 2204, <br/>
          Australia</p>
        </div>
      </div>
    </div>
    <div class="p-grid p-grid-row">
      <div class="p-1 indented">
        <div id="map-canvas"></div>
        <a class="map-link" href="javascript:void(0)">View on a map</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function initialize() {

    var latLng = new google.maps.LatLng(-33.908021, 151.159555);
    var mapOptions = {
      zoom: 14,
      center: latLng
    };

    var marker = new google.maps.Marker({
      position: latLng,
      title: "Piece Furniture"
    });

    var map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);

    marker.setMap(map);
  }

  function loadScript() {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBKWK2F558TwkR52T7QziOlYvmHFRvMg44&v=3.exp&sensor=false&' +
        'callback=initialize';
    document.body.appendChild(script);
  }

  window.onload = loadScript;
</script>

<?php get_footer(); ?>