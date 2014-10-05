<?php get_header( );
 ?>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-8 column">
			<?php 
			
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<p><em><?php the_time('l, F jS, Y'); ?></em></p>

			  	<?php the_excerpt(); ?>

			  	<hr>
				<?php comments_template(); ?>

			<?php endwhile; else: ?>
				<p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php endif; ?>
		 
		</div>
				<!-- Blog Sidebar Widgets Column -->
		<div class="col-md-4 column">
			<div class="well">
				<?php 
					//this is for sidebar
					get_sidebar( ); ?>
			</div>
		</div>
	</div>
	<hr />
</div>


<?php get_footer( );?>



  
  