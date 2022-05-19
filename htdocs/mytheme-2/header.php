<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mytheme
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo get_bloginfo( 'name' ); ?> <?php echo get_bloginfo( 'description' ); ?> <?php wp_title(); ?> </title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php bloginfo('template_directory'); ?>/assets/img/favicon.png" rel="icon">
  <link href="<?php bloginfo('template_directory'); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo get_template_directory_uri();  ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();  ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();  ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();  ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();  ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();  ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo get_template_directory_uri();  ?>/assets/css/style.css" rel="stylesheet">

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="<?php echo site_url(); ?>" class="logo d-flex align-items-center">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="">
        <span><?php echo get_bloginfo( 'name' ); ?></span>
      </a>

      <nav id="navbar" class="navbar">
  <?php wp_nav_menu(array('
theme_location'=>'menu-1','menu-class'=>'nav')) ?>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->