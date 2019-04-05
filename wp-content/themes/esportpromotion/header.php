<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

  <title><?php echo get_bloginfo( 'name' ); ?></title>
  
  <?php wp_head();?>
</head>

<body>

<nav>
    <div class="hamburger-menu">
      <div class="line-1"></div>
      <div class="line-2"></div>
      <div class="line-3"></div>
    </div>
  <div class="navigation menu-display-none">
    <div class="logo">
      <?php 
        if ( function_exists( 'the_custom_logo' ) ) {
          the_custom_logo();
        }
      ?>
    </div>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
  </div>
  
</nav>

<?php if (is_admin_bar_showing()) { ?>
 <style>
  nav {
    padding-top: 32px;
  }

  @media only screen and (max-width: 782px) {
  
  nav {
    padding-top: 46px;
  }
 </style>
<?php } ?>
  
