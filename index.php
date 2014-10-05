<?php
/**
* The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @file           index.php
 * @package        Fleck
 * @author         Prakash poudel
 * @copyright      2014 Prakash Poudel
 * @license        license.txt
 * @version        Release: 1.0
 * @link           https://github.com/prakash014/wp-fleck
 * @since          available since Release 1.0
 */
 ?>
 <?php get_header( ); ?>

 <div class="container">
	<div class="row clearfix">
		<div class="col-md-9 column">
			<?php 
			fleck_breadcrumb();
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<p><em><?php the_time('l, F jS, Y'); ?></em></p>

			  	<?php the_content(); ?>

			  

			<?php endwhile; else: ?>
				<p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php endif; ?>
		 
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
	<hr />
</div>

 <?php get_footer( ); ?>