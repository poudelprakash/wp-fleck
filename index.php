<?php
/**
* The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @file           header.php
 * @package        Fleck
 * @author         Prakash poudel
 * @copyright      2014 Prakash Poudel
 * @license        license.txt
 * @version        Release: 1.0
 * @link           https://github.com/prakash014/wp-fleck
 * @since          available since Release 1.0
 */
 ?>

<?php
	get_header(); 
	include('jumbotron.php');
?>
	<div class="container">
		<div class="row clearfix">
			<div class="col-md-6 column">
				 <span class="label label-default">From The Blog</span>
				 
				 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			    <p><em><?php the_time('l, F jS, Y'); ?></em></p>
			    <p><?php the_excerpt(); ?> </p>
			    <hr />

			    <?php endwhile; else: ?>
			      <p><?php _e('Sorry, there are no posts.'); ?></p>
			    <?php endif; ?>
			</div>
			<div class="col-md-6 column">
			</div>
		</div>
	</div>

	

<?php get_footer(); ?>
