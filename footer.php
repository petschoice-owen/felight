    </main>
    <div class="footer-section">
        <img src="assets/images/logo-footer-background-opacity.png" class="footer-background" alt="" />
        <div class="container">
            <div class="images">
                <div class="logo-holder">
                    <img src="assets/images/logo-footer.png" data-cue="fadeIn" data-duration="1000" alt="logo" />
                </div>
                <ul class="socials" data-cues="fadeIn" data-duration="1000" data-delay="200">
                    <?php if( get_field('social_media_facebook', 'option') ): ?>
                        <li>
                            <a href="<?php the_field('social_media_facebook', 'option'); ?>" title="Facebook" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-facebook-footer-blue.png" alt="Facebook Icon" />
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if( get_field('social_media_instagram', 'option') ): ?>
                        <li>
                            <a href="<?php the_field('social_media_instagram', 'option'); ?>" title="Instagram" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-instagram-footer-blue.png" alt="Instagram Icon" />
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if( get_field('social_media_twitter', 'option') ): ?>
                        <li>
                            <a href="<?php the_field('social_media_twitter', 'option'); ?>" title="Twitter" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-twitter-footer-blue.png" alt="Twitter Icon" />
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <ul class="links" data-cues="fadeIn" data-duration="500" data-delay="400">
                <li><a href="#">Copyright</a></li>
                <li><a href="#">Delivery Information</a></li>
                <li><a href="#">Disclaimer</a></li>
                <li><a href="#">Cookie Policy</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Sitemap</a></li>
            </ul>
            <?php if( get_field('theme_footer_copyright', 'option') ): ?>
                <div class="copyright-text" data-cue="fadeIn" data-duration="1000" data-delay="1000">
                    <p><?php the_field('theme_footer_copyright', 'option'); ?>Felight is a registered trademark of Pets Choice Limited</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>
</html>