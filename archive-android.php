<?php get_header( );
 ?>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-9 column">
			<?php $loop = new WP_Query( array( 'post_type' => 'android', 'posts_per_page' => 10 ) ); ?>

			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				
				
				<?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>
				<div class="attachment-post-thumbnail">
				<?php the_post_thumbnail(); ?>
				</div>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
		 
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