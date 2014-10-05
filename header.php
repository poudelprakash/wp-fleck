<?php
/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Fleck
 * @author         Prakash poudel
 * @copyright      2014 Prakash Poudel
 * @license        license.txt
 * @version        Release: 1.0
 * @link           http://sharmaprakash.com.np/
 * @since          available since Release 1.0
 */
 ?>
 <!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

     <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <!-- styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <title><?php wp_title('&#124;', true, 'right'); ?><?php bloginfo('name'); ?></title>
   
   	<!--enque javascript from functions.php-->
	<?php wp_enqueue_script('jquery');?>   
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!--[if lt IE 8]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
	
    <!--header-->
    <div class="container">
        <div class="row clearfix">   
          <div class="col-md-12 column">
                    <!--nav menu-->
                    <nav class="navbar navbar-default" role="navigation">
                      <!-- Mobile display -->
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                      </div>
                     
                      <!-- Collect the nav links for toggling -->
                      <?php // Loading WordPress Custom Menu
                         wp_nav_menu( array(
                            'container_class' => 'collapse navbar-collapse navbar-ex1-collapse ',
                            'menu_class'      => 'nav navbar-nav',
                            'menu_id'         => 'main-menu',
                            'depth' => '3'
                            //'walker'          => new Cwd_wp_bootstrapwp_Walker_Nav_Menu()
                        ) );
                      ?>
                    </nav>
              </div>                           
        </div><!--row clearfix div for navigation ends-->
    </div><!--navbar container end-->
   
        