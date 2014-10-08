<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @file           404.php
 * @package        Fleck
 * @author         Prakash poudel
 * @copyright      2014 Prakash Poudel
 * @license        license.txt
 * @version        Release: 1.0
 * @link           https://github.com/prakash014/wp-fleck
 * @since          available since Release 1.0
 */


get_header(); ?>

	<div class="container">
		<div class="row clearfix">
			<div class="col-md-9 column">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Not Found', 'twentyfourteen' ); ?></h1>
				</header>

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfourteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			 
			</div>
					<!-- Blog Sidebar Widgets Column -->
			<div class="col-md-3 column">
				<div class="well">
					<?php 
						//this is for sidebar
						get_sidebar( ); ?>
				</div>
			</div>
		</div>
		
	</div>
	

<?php
get_footer(); ?>
