<?php
/**
 *Template Name: Blog
 *
 *
 * @file           template-blog.php
 * @package        Fleck
 * @author         Prakash poudel
 * @copyright      2003 - 2014 Prakash Poudel
 * @license        license.txt
 * @version        Release: 1.0
 * @link           http://sharmaprakash.com.np/
 * @since          available since Release 1.0
 */
 ?>
 <?php get_header( );
 ?>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-9 column">
			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array( 'post_type' => 'post', 'posts_per_page' => 10, 'paged' => $paged );
			$wp_query = new WP_Query($args);
			while ( have_posts() ) : the_post(); ?>
			    <?php the_title( '<h2 ><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>
                        <?php if ( has_post_thumbnail( ) ) { ?>
                        <div class="col-md-6"><?php the_post_thumbnail();?></div>
                        <div class="col-md-6"><?php the_excerpt();?></div>
                        <div class="clearfix"></div>
					<?php } else {
					the_excerpt();
					} ?>
                         <br /><hr />
			<?php endwhile; ?>

			<!-- then the pagination links -->
			<?php next_posts_link( '&larr; Older posts', $wp_query ->max_num_pages); ?>
			<?php previous_posts_link( 'Newer posts &rarr;' ); ?>
		 
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


<?php get_footer( );?>