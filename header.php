<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1.0, maximum-scale=1.0">
	
  <title><?php wp_title(' | ', true, 'right'); bloginfo('name'); ?></title>



  <?php
    
    if(current_user_can("administrator")):
      $v = rand();
    else:
      $v = "1";
    endif;

    wp_enqueue_script( "jquery" );
    wp_enqueue_script( "plugins", get_template_directory_uri()."/a/js/plugins.js", 0, $v);
    wp_enqueue_script( "site", get_template_directory_uri()."/a/js/site.js", 0, $v);

  ?>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/a/css/base.css?v=<?php echo $v; ?>" />

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
