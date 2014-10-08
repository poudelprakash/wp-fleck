<?php
/**
 * The main template file i.e home
 *
 *
 * @file           home.php
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
?>	
	<!--jumbotron -->
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div class="jumbotron">
                    <h1 class="text-center">
                    <?php bloginfo('name'); ?>
                    </h1>
                    
                    <p class="text-center">
                        <?php bloginfo('description' ); ?> 
                    </p>
                    <hr>
                   
                        <div class="container" >
                            <div class="col-md-3 column">
                                <a href="<?php echo get_theme_mod( 'linkedin', $default );?>" target="_blank" class="btn btn-block" type="button"><i class="fa fa-linkedin-square fa-5x"></i><br />Linkedin</a>
                            </div>
                            <div class="col-md-3 column">
                                <a href="<?php echo get_theme_mod( 'github', $default );?>" target="_blank" class="btn btn-block" type="button"><i class="fa fa-github-alt fa-5x"></i><br />Github</a>
                            </div>
                            <div class="col-md-3 column">
                                <a href="<?php echo get_theme_mod( 'bitbucket', $default );?>" target="_blank" class="btn btn-block" type="button"><i class="fa fa-bitbucket fa-5x"></i><br />Bit Bucket</a>
                            </div>
                            <div class="col-md-3 column">
                                <a href="<?php echo get_theme_mod( 'playstore', $default );?>" target="_blank" class="btn btn-block" type="button"><i class="fa fa-android fa-5x"></i><br />Playstore</a>
                            </div>
                        </div> <!--social link container ends-->
                </div><!--jumbotron div ends-->
           
            </div>
        </div><!--row clearfix div ends-->
    </div> <!--container div  ends-->
    <!--here ends jumbotron -->
	<div class="container">
        <div class="row clearfix">
            <div class="col-md-6 column">
                <span class="label label-default">Projects Portfolio</span>

                <p>
                    <?php $loop = new WP_Query( array( 'post_type' => 'lumia_porfolio', 'posts_per_page' => 4 ) ); ?>

                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="thumbnail col-md-6">
                    <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="caption col-md-6">
                    <?php the_title( '<h2 ><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>
                        <?php the_content(); ?>
                        <a href="<?php echo get_permalink(); ?>" class="btn btn-primary" role="button"> Visit </a> 
                    </div>.
                    <?php echo "<hr />"; endwhile; ?>
                </p>
            </div>
            <div class="col-md-6 column">
                <span class="label label-default">Android Applications</span>
                <p>
                    <?php $loop = new WP_Query( array( 'post_type' => 'android', 'posts_per_page' => 4 ) ); ?>

                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="thumbnail col-md-6">
                    <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="caption col-md-6">
                    <?php the_title( '<h2 ><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>
                        <?php the_content(); ?>
                        <a href="<?php echo get_permalink(); ?>" class="btn btn-primary" role="button"> Visit </a> 
                    </div>.
                    
                    <?php echo "<hr />"; endwhile; ?>
                </p>
            </div>
        </div>
    <!--project section ends-->
    <!--blog section-->
		<div class="row clearfix">
			<div class="col-md-6 column">
				 <span class="label label-default">From The Blog</span>
				 
				 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				 static $count=0;
				 if ($count==3) {
				  	break;
				  }else{ ?>
			    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			    <p><em><?php the_time('l, F jS, Y'); ?></em></p>
			    <p><?php the_excerpt(); ?> </p>
			    <hr />

			    <?php 
			    $count++;}
			    endwhile; else: ?>
			      <p><?php _e('Sorry, there are no posts.'); ?></p>
			    <?php endif; ?>
			</div>
			<div class="col-md-6 column">
                <p>
                <span class="label label-default">Testimonials</span></p>
                <blockquote>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    </p> <small>Someone famous <cite>Source Title</cite></small>
                </blockquote>
                <blockquote>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    </p> <small>Someone famous <cite>Source Title</cite></small>
                </blockquote>
			</div>
		</div>
	</div>
    <?php get_footer( );?>
    
    

	


