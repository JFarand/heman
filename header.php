<?php get_template_part('head'); ?>
<body <?php body_class(); ?>>
   <style>
      #header {
         display: block;
         position: relative;
         height: 99px;
      }

      #site-title {
         display: block;
         position: relative;
         width: 51%;
         min-height: 42px;
         text-align: center;
         margin: 0 auto;
      }

      #site-title h1 a {
         color: #f9d531 !important;
      }


   </style>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<section id="branding">
<div id="site-title"><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?></div>

</section>

</header>
<div id="container">
