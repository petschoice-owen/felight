    <div class="top-navigation">
        <div class="wrapper">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a href="/" class="logo-link" data-cue="fadeIn" data-duration="1000">
                        <img src="<?php the_field('theme_header_logo', 'option'); ?>" class="logo-image lazyload" alt="Logo" />
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navbar-collapse-wrapper">
                            <ul class="navbar-nav" data-cues="fadeIn" data-duration="300" data-delay="100">
                                <?php if( have_rows('top_navigation', 'option') ): ?>
                                    <?php while( have_rows('top_navigation', 'option') ): the_row(); ?>
                                        <li class="menu-item">
                                            <a href="<?php the_sub_field('nav_url', 'option'); ?>" class="nav-link">
                                                <img src="<?php the_sub_field('nav_icon', 'option'); ?>" alt="<?php the_sub_field('nav_text', 'option'); ?>" />
                                                <span><?php the_sub_field('nav_text', 'option'); ?></span>
                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                            <?php
                                if( (get_field('social_media_facebook', 'option') == 'show') || (get_field('social_media_instagram', 'option') == 'show') || (get_field('social_media_twitter', 'option') == 'show') ) { ?>
                                    <div class="social-holder-mobile" data-cues="fadeIn" data-duration="300" data-delay="200">
                                        <ul class="socials">
                                            <?php 
                                                if( get_field('social_media_facebook', 'option') == 'show' ) { ?>
                                                    <li>
                                                        <a href="<?php the_field('social_media_facebook_url', 'option'); ?>" title="Facebook" target="_blank">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-facebook.png" alt="Facebook" />
                                                        </i></a>
                                                    </li>
                                                <?php }
                                            ?>
                                            <?php 
                                                if( get_field('social_media_instagram', 'option') == 'show' ) { ?>
                                                    <li>
                                                        <a href="<?php the_field('social_media_instagram_url', 'option'); ?>" title="Instagram" target="_blank">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-instagram.png" alt="Instagram" />
                                                        </i></a>
                                                    </li>
                                                <?php }
                                            ?>
                                            <?php 
                                                if( get_field('social_media_twitter', 'option') == 'show' ) { ?>
                                                    <li>
                                                        <a href="<?php the_field('social_media_twitter_url', 'option'); ?>" title="Twitter" target="_blank">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-twitter.png" alt="Twitter" />
                                                        </i></a>
                                                    </li>
                                                <?php }
                                            ?>
                                        </ul>
                                    </div>
                                <?php }
                            ?>
                        </div>
                    </div>
                    <div class="menu-holder" data-cues="fadeIn" data-delay="500">
                        <?php
                            if( (get_field('social_media_facebook', 'option') == 'show') || (get_field('social_media_instagram', 'option') == 'show') || (get_field('social_media_twitter', 'option') == 'show') ) { ?>
                                <ul class="socials">
                                    <?php 
                                        if( get_field('social_media_facebook', 'option') == 'show' ) { ?>
                                            <li>
                                                <a href="<?php the_field('social_media_facebook_url', 'option'); ?>" title="Facebook" target="_blank">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-facebook.png" alt="Facebook" />
                                                </i></a>
                                            </li>
                                        <?php }
                                    ?>
                                    <?php 
                                        if( get_field('social_media_instagram', 'option') == 'show' ) { ?>
                                            <li>
                                                <a href="<?php the_field('social_media_instagram_url', 'option'); ?>" title="Instagram" target="_blank">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-instagram.png" alt="Instagram" />
                                                </i></a>
                                            </li>
                                        <?php }
                                    ?>
                                    <?php 
                                        if( get_field('social_media_twitter', 'option') == 'show' ) { ?>
                                            <li>
                                                <a href="<?php the_field('social_media_twitter_url', 'option'); ?>" title="Twitter" target="_blank">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-twitter.png" alt="Twitter" />
                                                </i></a>
                                            </li>
                                        <?php }
                                    ?>
                                </ul>
                            <?php }
                        ?>
                        <ul class="account">
                            <?php 
                                if( get_field('header_search', 'option') == 'show' ) { ?>
                                    <li>
                                        <div class="search-holder icon-holder">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-search.png" alt="" />
                                            <a href="#" class="search" title="Search"></a>
                                        </div>
                                    </li>
                                <?php }
                            ?>
                            <?php 
                                if( get_field('header_cart', 'option') == 'show' ) { ?>
                                    <li>
                                        <div class="cart-holder icon-holder">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-cart.png" alt="" />
                                            <a href="<?php the_field('header_cart_url', 'option'); ?>" class="cart-contents cart" title="Cart"></a>
                                        </div>
                                    </li>
                                <?php }
                            ?>
                            <?php 
                                if( get_field('header_account', 'option') == 'show' ) { ?>
                                    <li>
                                        <div class="user-holder icon-holder">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-user.png" alt="" />
                                            <a href="<?php the_field('header_account_url', 'option'); ?>" class="user" title="My Account"></a>
                                        </div>
                                    </li>
                                <?php }
                            ?>
                        </ul>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </nav>
        </div>
        <div class="search-section">
            <?php get_search_form(); ?>
        </div>
    </div>
    <?php if( get_field('theme_newsletter_icon', 'option') ): ?>
        <a href="#" class="floating-subscribe animate__animated animate__rubberBand">
            <img src="<?php the_field('theme_newsletter_icon', 'option'); ?>" alt="floating subscribe" />
        </a>
    <?php endif; ?>
    <div class="klaviyo-newsletter"></div>