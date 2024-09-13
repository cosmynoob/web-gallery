<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/site.webmanifest">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

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
