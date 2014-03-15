<?php

add_theme_support( 'post-thumbnails' ); 

register_nav_menu( 'primary', 'Primary Menu' );

function add_scripts() {
  wp_enqueue_script( 'responsive_nav', get_template_directory_uri() . '/scripts/nav.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'add_scripts' );


add_action('init', 'editor_customisation');
function editor_customisation() {
  add_filter( 'mce_external_plugins', 'piece_buttons' );
  add_filter( 'mce_buttons', 'register_buttons' );
}

function piece_buttons($plugin_array) {
  $plugin_array['piece_buttons'] = get_template_directory_uri() . '/scripts/custom-editor.js';
  return $plugin_array;
}

function register_buttons( $buttons ) {
  array_push($buttons, 'primary_title', 'calendar_entry');
  return $buttons;
}

// add styles to the editor
function add_editor_styles() {
  add_editor_style( 'editor-styles.css' );
}
add_action( 'init', 'add_editor_styles' );



function my_attachments( $attachments )
{
  $fields         = array( );

  $args = array(

    // title of the meta box (string)
    'label'         => 'Gallery Images',

    // all post types to utilize (string|array)
    'post_type'     => array( 'post'),

    // meta box position (string) (normal, side or advanced)
    'position'      => 'side',

    // meta box priority (string) (high, default, low, core)
    'priority'      => 'high',

    // allowed file type(s) (array) (image|video|text|audio|application)
    'filetype'      => array('image'),

    // include a note within the meta box (string)
    'note'          => 'Please add your gallery images here.',

    // by default new Attachments will be appended to the list
    // but you can have then prepend if you set this to false
    'append'        => true,

    // text for 'Attach' button in meta box (string)
    'button_text'   => __( 'Add to an image to gallery', 'attachments' ),

    // text for modal 'Attach' button (string)
    'modal_text'    => __( 'Add', 'attachments' ),

    // which tab should be the default in the modal (string) (browse|upload)
    'router'        => 'browse',

    // fields array
    'fields'        => $fields,

  );

  $attachments->register( 'my_attachments', $args ); // unique instance name
}
add_action( 'attachments_register', 'my_attachments' );




// add admin JS
add_action('admin_enqueue_scripts', 'custom_admin_scripts');
 
function custom_admin_scripts() {
  wp_register_script('custom-admin-js', get_template_directory_uri() . '/scripts/custom-editor.js', array('jquery'));
  wp_enqueue_script('custom-admin-js');
}

/**
 * Adds a meta box to inject a class time
 * this depends on the custom-editor.js file being injected above
 */
function class_time_callback( $post ) {
  ?>
    <p>
    <label>Day</label><br/>
    <input type="text" id="day" placeholder="Enter a day"/>
    </p>
    <p>
    <label>Period</label><br/>
    <input type="text" id="period" placeholder="Enter a month"/>
    </p>
    <p>
    <label>Time</label><br/>
    <input type="text" id="time" placeholder="Enter a time"/>
    </p>
    <p>
     <a href="javascript:void(0)" id="class-time-insert" class="button button-primary">Insert</a>
    </p>
    <p>NOTE: This is best used in the 'Text' tab of the editor</p>
  <?php
}

function event_callback( $post ) {
  ?>
    <div id="event-form">
      <p>
      <label>Year</label><br/>
      <input type="text" id="year" placeholder="Enter a year"/>
      </p>
      <p>
      <label>Event description</label><br/>
      <textarea type="text" id="event" placeholder="What was the event?"></textarea>
      </p>
      <p>
       <a href="javascript:void(0)" id="event-insert" class="button button-primary">Insert</a>
      </p>
      <p>NOTE: This is best used in the 'Text' tab of the editor</p>
    </div>
  <?php
}

/**
 * Adds a meta box to the post editing screen
 */
function add_custom_meta_box() {
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
  if ($post_id == '78') {
    add_meta_box( 'class_time', 'Inject class time', 'class_time_callback', 'page', 'side', 'core' );
  }

  if ($post_id == '11') {
    add_meta_box( 'event_time', 'Inject an event', 'event_callback', 'page', 'side', 'core' );
  }
}
add_action( 'add_meta_boxes', 'add_custom_meta_box' );

?>