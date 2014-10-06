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
                                <a href="#" class="btn btn-block" type="button"><i class="fa fa-linkedin-square fa-5x"></i><br />Linkedin</a>
                            </div>
                            <div class="col-md-3 column">
                                <a href="#" class="btn btn-block" type="button"><i class="fa fa-github-alt fa-5x"></i><br />Github</a>
                            </div>
                            <div class="col-md-3 column">
                                <a href="#" class="btn btn-block" type="button"><i class="fa fa-bitbucket fa-5x"></i><br />Bit Bucket</a>
                            </div>
                            <div class="col-md-3 column">
                                <a href="#" class="btn btn-block" type="button"><i class="fa fa-android fa-5x"></i><br />Playstore</a>
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
                <span class="label label-default">Projets Portfolio</span>
                <p>
                    Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
                </p>
                <ul class="pagination">
                    <li>
                        <a href="#">Prev</a>
                    </li>
                    <li>
                        <a href="#">Next</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 column">
                <span class="label label-default">Android Applications</span>
                <p>
                    <?php $loop = new WP_Query( array( 'post_type' => 'android', 'posts_per_page' => 4 ) ); ?>

                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="attachment-post-thumbnail">
                    <?php the_post_thumbnail(); ?>
                    </div>
                    
                    <?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>
                    
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                    <?php endwhile; ?>
                </p><p>
                <ul class="pagination">
                    <li>
                        <a href="#">Prev</a>
                    </li>
                    <li>
                        <a href="#">Next</a>
                    </li>
                </ul>
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

    <div class="row clearfix">
        <div class="col-md-12 column">
            <p class="text-center">
                All Rights Reserved By <strong>Prakash Poudel </strong>
            </p>
        </div>
    </div>
    </body>   
    </html>

	


