    <div class="footer-section">
        <img src="<?php the_field('theme_footer_background_image', 'option'); ?>" class="footer-background" alt="" />
        <div class="container">
            <?php
                if( (get_field('social_media_facebook', 'option') == 'show') || (get_field('social_media_instagram', 'option') == 'show') || (get_field('social_media_twitter', 'option') == 'show') ) { ?>
                    <div class="images">
                        <div class="logo-holder">
                            <img src="<?php the_field('theme_footer_logo', 'option'); ?>" data-cue="fadeIn" data-duration="1000" alt="logo" />
                        </div>
                        <ul class="socials" data-cues="fadeIn" data-duration="1000" data-delay="200">
                            <?php 
                                if( get_field('social_media_facebook', 'option') == 'show' ) { ?>
                                    <li>
                                        <a href="<?php the_field('social_media_facebook_url', 'option'); ?>" title="Facebook" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-facebook-footer-blue.png" alt="Facebook" />
                                        </i></a>
                                    </li>
                                <?php }
                            ?>
                            <?php 
                                if( get_field('social_media_instagram', 'option') == 'show' ) { ?>
                                    <li>
                                        <a href="<?php the_field('social_media_instagram_url', 'option'); ?>" title="Instagram" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-instagram-footer-blue.png" alt="Instagram" />
                                        </i></a>
                                    </li>
                                <?php }
                            ?>
                            <?php 
                                if( get_field('social_media_twitter', 'option') == 'show' ) { ?>
                                    <li>
                                        <a href="<?php the_field('social_media_twitter_url', 'option'); ?>" title="Twitter" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-twitter-footer-blue.png" alt="Twitter" />
                                        </i></a>
                                    </li>
                                <?php }
                            ?>
                        </ul>
                    </div>
                <?php }
                else { ?>
                    <div class="image">
                        <div class="logo-holder">
                            <img src="<?php the_field('theme_footer_logo', 'option'); ?>" data-cue="fadeIn" data-duration="1000" alt="logo" />
                        </div>
                    </div>
                <?php }
            ?>
            <?php if( have_rows('footer_links', 'option') ): ?>
                <ul class="links" data-cues="fadeIn" data-duration="500" data-delay="400">
                    <?php while( have_rows('footer_links', 'option') ): the_row(); ?>
                        <li>
                            <a href="<?php the_sub_field('url', 'option'); ?>"><?php the_sub_field('text', 'option'); ?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            <?php if( get_field('theme_footer_copyright', 'option') ): ?>
                <div class="copyright-text" data-cue="fadeIn" data-duration="1000" data-delay="1000">
                    <p><?php the_field('theme_footer_copyright', 'option'); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>