<?php
/**
 *Template Name: Project
 *
 *
 * @file           template-project.php
 * @package        Fleck
 * @author         Prakash poudel
 * @copyright      2003 - 2014 Prakash Poudel
 * @license        license.txt
 * @version        Release: 1.0
 * @link           http://sharmaprakash.com.np/
 * @since          available since Release 1.0
 */
 ?>
 <?php get_header( ); ?>

 <div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<?php 
			fleck_breadcrumb();
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<p><em><?php the_time('l, F jS, Y'); ?></em></p>

			  	<?php 
			  	the_content(); ?>

			  

			<?php endwhile; else: ?>
				<p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php endif; ?>
		 
		</div>
				<!-- Blog Sidebar Widgets Column -->
		
	</div>
	
</div>

 <?php get_footer( ); ?>