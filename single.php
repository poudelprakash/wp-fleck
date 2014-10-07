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
			  	
			  	<!--BEGIN .author-bio-->
				<div class="author-bio">
							<?php echo get_avatar( get_the_author_meta('email'), '90' ); ?>
							<div class="author-info">
								<h3 class="author-title">Written by <?php the_author_link(); ?></h3>
								<p class="author-description"><?php the_author_meta('description'); ?></p>
								<p>Website: <a href="<?php the_author_meta('user_url');?>"><?php the_author_meta('user_url');?></a></p>
								<ul class="icons">
									<?php 
										$rss_url = get_the_author_meta( 'rss_url' );
										if ( $rss_url && $rss_url != '' ) {
											echo '<li class="rss"><a href="' . esc_url($rss_url) . '"></a></li>';
										}
										
										$google_profile = get_the_author_meta( 'google_profile' );
										if ( $google_profile && $google_profile != '' ) {
											echo '<li class="google"><a href="' . esc_url($google_profile) . '" rel="author"></a></li>';
										}
										
										$twitter_profile = get_the_author_meta( 'twitter_profile' );
										if ( $twitter_profile && $twitter_profile != '' ) {
											echo '<li class="twitter"><a href="' . esc_url($twitter_profile) . '"></a></li>';
										}
										
										$facebook_profile = get_the_author_meta( 'facebook_profile' );
										if ( $facebook_profile && $facebook_profile != '' ) {
											echo '<li class="facebook"><a href="' . esc_url($facebook_profile) . '"></a></li>';
										}
										
										$linkedin_profile = get_the_author_meta( 'linkedin_profile' );
										if ( $linkedin_profile && $linkedin_profile != '' ) {
											echo '<li class="linkedin"><a href="' . esc_url($linkedin_profile) . '"></a></li>';
										}
									?>
								</ul>
							</div>
				<!--END .author-bio-->
				</div>

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



  
  