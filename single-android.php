<?php get_header( );
 ?>

<div class="container">
	<div class="row clearfix">
	<div class="col-md-12 column">
				<div class="col-md-6 column">

					
						<label>Features</label>
						<ol>
							<li>Aphorisms of Divine Love</li>
							<li>Sanskrit texts</li>
							<li>English Translations</li>

						</ol>
						
				</div>
				<div class="col-md-6 column">

					<?php the_post_thumbnail( ); ?>
				</div>
		</div><!--12 column end-->
		<div class="col-md-12 column">
			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				

			  	<?php the_content(); ?>
			  	
			  	

			  	

			<?php endwhile; else: ?>
				<p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php endif; ?>
		 
		</div>


<?php get_footer( );?>
