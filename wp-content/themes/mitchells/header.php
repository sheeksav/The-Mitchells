<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>The Mitchells</title>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!--
    <nav class="navbar">
      <div class="container-fluid">
      	<?php wp_nav_menu( array( 'theme_location' => 'main-nav-menu' ) ); ?>
      </div>
    </nav>
    -->



    <nav class="navbar">
      <div class="container-fluid">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
          <div class="nav navbar-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'main-nav-menu' ) ); ?>
          </div>
        </div><!--/.nav-collapse -->

      </div>
    </nav>
    
    <?php wp_head(); ?>
	
