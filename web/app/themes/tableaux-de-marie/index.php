<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/favicon.ico"/>
    <link rel="canonical" href="<?php echo bloginfo( 'url' ); ?>"/>
    <?php  
        do_action('get_header');
        wp_head();
    ?>
  </head>

  <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>

        <div id="app">
            <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>
        </div>

        <?php 
            do_action('get_footer');
            wp_footer()
        ?>
    </body>
</html>
