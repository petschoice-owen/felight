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
                                <li class="menu-item">
                                    <a href="#products" class="nav-link">
                                        <img src="assets/images/icon-product.png" alt="" />
                                        <span>Products</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#features" class="nav-link">
                                        <img src="assets/images/icon-features.png" alt="" />
                                        <span>features</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#about" class="nav-link">
                                        <img src="assets/images/icon-about.png" alt="" />
                                        <span>ABOUT</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#faqs" class="nav-link">
                                        <img src="assets/images/icon-faq.png" alt="" />
                                        <span>faqs</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#contact" class="nav-link">
                                        <img src="assets/images/icon-contactg.png" alt="" />
                                        <span>ContAct</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="social-holder-mobile">
                                <ul class="socials">
                                    <li>
                                        <a href="#" title="Facebook" target="_blank">
                                            <img src="assets/images/icon-facebook.png" alt="">
                                        </i></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Twitter" target="_blank">
                                            <img src="assets/images/icon-instagram.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Instagram" target="_blank">
                                            <img src="assets/images/icon-twitter.png" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="menu-holder" data-cues="fadeIn" data-delay="500">
                        <ul class="socials">
                            <?php if( get_field('social_media_facebook', 'option') ): ?>
                                <li>
                                    <a href="<?php the_field('social_media_facebook', 'option'); ?>" title="Facebook" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-facebook.png" alt="Facebook Icon" />
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if( get_field('social_media_instagram', 'option') ): ?>
                                <li>
                                    <a href="<?php the_field('social_media_instagram', 'option'); ?>" title="Instagram" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-instagram.png" alt="Instagram Icon" />
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if( get_field('social_media_twitter', 'option') ): ?>
                                <li>
                                    <a href="<?php the_field('social_media_twitter', 'option'); ?>" title="Twitter" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-twitter.png" alt="Twitter Icon" />
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                        <ul class="account">
                            <li>
                                <div class="search-holder icon-holder">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-search.png" alt="" />
                                    <a href="#" class="search" title="Search"></a>
                                </div>
                            </li>
                            <!-- <li>
                                <div class="cart-holder icon-holder">
                                    <img src="<?php // echo get_template_directory_uri(); ?>/assets/images/icon-cart.png" class="icon-cart" alt="" />
                                    <a href="#" class="cart-contents menu-item cart" title="Cart"></a>
                                </div>
                            </li> -->
                            <li>
                                <div class="user-holder icon-holder">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-user.png" alt="" />
                                    <a href="/my-account" class="user" title="Account"></a>
                                </div>
                            </li>
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
            <form action="/" method="get">
                <label>
                    <input type="search" class="search-field" placeholder="Search for a product..." value="" name="s" />
                </label>
                <input type="submit" class="search-submit" value="Search" />
            </form>
        </div>
    </div>