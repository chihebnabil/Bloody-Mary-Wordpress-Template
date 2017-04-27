    <div class="container-fluid">
        <div class="row blooymary">
            <div>
                <div class="container footer blooymary">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <h3>About us</h3>
                        <p><?php echo esc_attr( get_theme_mod('footer_box_1') ); ?></p>
                   
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <h3>Contact </h3>
                         <p><?php echo esc_attr( get_theme_mod('footer_box_2') ); ?></p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <h3>Social Network</h3>
                        <p><?php echo esc_attr( get_theme_mod('footer_box_3') ); ?></p>
                        <a href="<?php echo esc_attr( get_theme_mod('facebook_url') ); ?>" target="_blank">
                        <i class="fa fa-facebook"></i>
                        </a>
                        <a href="<?php echo esc_attr( get_theme_mod('twitter_url') ); ?>" target="_blank">
                        <i class="fa fa-twitter"></i>
                        </a>
                        
                        <a href="<?php echo esc_attr( get_theme_mod('github_url') ); ?>" target="_blank">
                        <i class="fa fa-github"></i>
                        </a>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>
     <?php wp_footer(); ?>
 <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
   <?php wp_link_pages(  ); ?>

</body>