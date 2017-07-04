<!DOCTYPE html>
<html lang="en">
  <?php wp_head(); ?>
  <!--head>
  <meta charset="utf-8">
  <meta name="description" content="Keyserve">
  <meta name="author" content="Keyserve">
  <title>Keyserve</title>

    <!-- Bootstrap -->
    <!--link href="vendors/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="vendors/owl/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="vendors/owl/owl.theme.default.min.css" rel="stylesheet" type="text/css">
    <link href="vendors/fa/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="res/css/style.css" rel="stylesheet" type="text/css">
    <link href="res/css/fonts.css" rel="stylesheet" type="text/css"-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-fixed-top">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
          <button type="button" id="nav-icon3" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
          </button>
          <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri()?>/prod/img/logo.png" height="53px"></img></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
              <!--li class=""><a href="index.php">Bevezető<span class="sr-only">(current)</span></a></li>
              <li class=""><a href="services.php">Szolgáltatások</a></li>
              <li><a href="partners.php" class="hvr-underline-reveal">Partnerek</a></li>
              <li><a href="contact.php">Kapcsolat</a></li-->
              <?php wp_nav_menu(array("theme_location" => "primary", 'container' => '', 'items_wrap' => '%3$s')); ?>
          </ul>
          </div><!-- /.navbar-collapse -->
      </div>
    </nav>