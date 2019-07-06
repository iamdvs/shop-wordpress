<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name');?></title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">

  <?php wp_head(); ?>
  
</head>
<body class="bg-shape">

  <!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="<?php bloginfo('home')?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu')); ?>
<!-- 
            <div class="nav-right text-center text-lg-right py-4 py-lg-0">
              <a class="button" href="#">Get Started</a>
            </div> -->


           <div class="mr-auto">

           <?php get_search_form(); ?>


           </div> 




          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->
