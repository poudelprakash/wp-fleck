<?php
/**
 *Footer Template
 *
 *
 *
 * @file           Footer.php
 * @package        Fleck
 * @author         Prakash poudel
 * @copyright      2014 Prakash Poudel
 * @license        license.txt
 * @version        Release: 1.0
 * @link           https://github.com/prakash014/wp-fleck
 * @since          available since Release 1.0
 */
 ?>
<!--footer -->
        <div class="container">
    <div class="row clearfix">
        <div class="col-md-4 column">
             <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <div id="secondary" class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                    </div>
                <?php endif; ?>
        </div>
        <div class="col-md-4 column">
            <h3>
                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                    <div id="secondary" class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                    </div>
                <?php endif; ?>
            </h3>
        </div>
        <div class="col-md-4 column">
            <h3>
                 <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                    <div id="secondary" class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                    </div>
                <?php endif; ?>
            </h3>
        </div>
    </div>
</div>


<!--here ends the footer -->
<?php wp_footer(); ?>
</body>
</html>