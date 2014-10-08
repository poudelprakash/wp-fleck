<?php get_header( );
 ?>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-9 column">
			<?php 
			fleck_breadcrumb();
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<p><em><?php the_time('l, F jS, Y'); ?></em></p>

			  	<?php the_content(); ?>
			  	
			  	

			  	<hr>
				<?php comments_template();
				 ?>

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
	
</div>


<?php get_footer( );?>



  
  