
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>

  <meta chartset="<?php bloginfo('charset'); ?> ">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('descritpion'); ?>">

   <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

 
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"> 


   <!-- custom CSS -->
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <title>
     <?php bloginfo('name'); ?> |
     <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <?php wp_head(); ?>
    <style>
    .kinav{
      margin-top:0;
      padding-top:0;
      <?php if(!is_front_page()): ?>
          background: rgba(110, 110, 110, 0.4) !important;
          position: absolute; 
          z-index: 1;
      <?php endif; ?>
    }
    nav{
      margin-top:0;
      padding-top:0;
      <?php if(!is_front_page()): ?>
          position: absolute; 
          z-index: 1;
      <?php endif; ?>
    }
    .navbar{
      
      background:rgba(110, 110, 110, 0.1);
      <?php if(!is_front_page()): ?>
      background:rgba(0, 0, 0, 0.1);
      <?php endif; ?>
    }

    </style>
  </head>
  
<body>
  <?php if(is_front_page()): ?>
    <div id="box1">
      <a id="equality_banner" href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/img/race.png " alt="there are no superior races">
      </a>
      <p> All men are created equal</p>
    
      <a id="about_img" href="<?php echo site_url('/about'); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Kev.png" alt="About Kevin" >
      </a> 
   </div>
  <?php endif; ?>

  <nav class="kinav" >
      <?php if(is_front_page()): ?>
        <div id="logo_img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="KevDev logo">
        </div>
    <?php endif; ?>
    <ul>
      <?php if(!is_front_page()): ?>
        <li>
          <a href="<?php echo site_url(' '); ?>"> Home </a>
        </li>
      <?php endif; ?>
      <li>
        <a href="<?php echo site_url('/services'); ?>"> Services </a>
      </li>
      <li>
        <a href="<?php echo site_url('/projects'); ?>"> Projects </a>
      </li>
      <li>
        <a href="<?php echo site_url('/blog'); ?>"> Blogs </a>
      </li>
    </ul>
    <button>
      <a href="#"> Get in touch</a>
    </button>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-light">
  
      <button>
        <a class="navbar-brand" href="#"> Get in touch</a>
      </button>
  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <?php if(!is_front_page()) : ?>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url(' '); ?>">Home</a>
          </li>
        <?php endif; ?>
        <li class="nav-item ">
          <a class="nav-link" href="<?php echo site_url('/services'); ?>">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/projects'); ?>">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/blog'); ?>">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/about'); ?>">Blogs</a>
        </li>
      </ul>
    </div>
  </nav>