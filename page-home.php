<?php
/**
 *  Template Name: Home Page
 *
 */
 
get_header(); ?>
<body <?php body_class(); ?>>
    <?php include 'top-navigation.php'; ?>
    <main class="page-home"> <!-- data-bs-spy="scroll" data-bs-target="#navbar_main" data-bs-offset="0" tabindex="0" -->
        <section class="banner banner-home background-<?php the_field('banner_background_color_left'); ?> border-bottom-2 border-color-<?php the_field('banner_border_color'); ?>"
            id="<?php if( have_rows('banner_section_id') ): 
                while( have_rows('banner_section_id') ): the_row(); 
                    the_sub_field('section_id'); 
                endwhile;
            endif; ?>">
            <?php if( get_field('banner_image_bottom_left') ): ?>
                <img src="<?php the_field('banner_image_bottom_left'); ?>" class="image-confetti image-right" data-cue="zoomIn" data-duration="500" data-delay="500" alt="confetti" />
            <?php endif; ?>
            <?php if( get_field('banner_image_upper_right') ): ?>
                <img src="<?php the_field('banner_image_upper_right'); ?>" class="image-confetti image-left" data-cue="zoomIn" data-duration="500" data-delay="500" alt="confetti" />
            <?php endif; ?>            
            <div class="container">
                <div class="wrapper">
                    <div class="section-heading">
                        <h1 class="heading-underlined heading-underlined-bigger line-<?php the_field('banner_heading_underline_color'); ?>" data-cue="fadeIn" data-duration="1000" data-delay="200">
                            <?php if( have_rows('banner_section_heading') ): ?>
                                <?php while( have_rows('banner_section_heading') ): the_row(); ?>
                                    <span class="heading-<?php the_sub_field('heading_color'); ?>"><?php the_sub_field('heading'); ?></span>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </h1>
                        <p data-cue="fadeIn" data-duration="1000" data-delay="400">
                            <?php the_field('banner_section_subheading'); ?>
                        </p>
                    </div>
                    <?php if( get_field('banner_image') ): ?>
                        <div class="banner-image">
                            <span class="background-color background-<?php the_field('banner_background_color_right'); ?>"></span>
                            <img src="<?php the_field('banner_image'); ?>" data-cue="fadeIn" data-duration="800" data-delay="800" alt="banner image" />
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="category-boxes" 
            id="<?php if( have_rows('categories_section_id') ): 
                while( have_rows('categories_section_id') ): the_row(); 
                    the_sub_field('section_id'); 
                endwhile;
            endif; ?>">
            <div class="container-none">
                <div class="categories" data-cues="fadeIn" data-duration="1000" data-delay="200">
                    <?php if( have_rows('category_items') ): ?>
                        <?php while( have_rows('category_items') ): the_row(); ?>
                            <div class="category background-<?php the_sub_field('category_background_color'); ?>">
                                <a href="<?php if( get_sub_field('category_url') ) { the_sub_field('category_url'); } else { echo "#"; } ?>" 
                                    class="category-link <?php if( get_sub_field('category_url') ) { echo "clickable animate__animated"; } else { echo "not-clickable"; } ?>">
                                    <h2 class="heading-underlined heading-underlined-big line-<?php the_sub_field('category_heading_underline_color'); ?> <?php if( get_sub_field('category_url') ) { ?> heading-whisker heading-whisker-<?php the_sub_field('category_heading_underline_color'); ?> <?php } else { echo "#"; } ?>">
                                        <?php if( have_rows('category_heading') ): ?>
                                            <?php while( have_rows('category_heading') ): the_row(); ?>
                                                <span class="heading-<?php the_sub_field('heading_color'); ?>"><?php the_sub_field('heading'); ?></span>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </h2>
                                    <?php if( get_sub_field('category_description') ): ?>
                                        <p class="text-center"><?php the_sub_field('category_description'); ?></p>
                                    <?php endif; ?>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="features background-<?php the_field('features_bckground_color'); ?>" 
            id="<?php if( have_rows('features_section_id_copy') ): 
                while( have_rows('features_section_id_copy') ): the_row(); 
                    the_sub_field('section_id'); 
                endwhile;
            endif; ?>">
            <?php if( get_field('features_image_upper_left') ): ?>
                <img src="<?php the_field('features_image_upper_left'); ?>" class="image-leaf image-left" alt="leaf" />
            <?php endif; ?>
            <?php if( get_field('features_image_bottom_right') ): ?>
                <img src="<?php the_field('features_image_bottom_right'); ?>" class="image-leaf image-right" alt="leaf" />
            <?php endif; ?>
            <div class="container">
                <div class="wrapper">
                    <h2 class="heading-underlined line-<?php the_field('features_heading_underline_color'); ?>" data-cue="fadeIn" data-duration="1000">
                        <?php if( have_rows('features_section_heading') ): ?>
                            <?php while( have_rows('features_section_heading') ): the_row(); ?>
                                <span class="heading-<?php the_sub_field('heading_color'); ?>"><?php the_sub_field('heading'); ?></span>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </h2>
                </div>
                <div class="items" data-cues="fadeIn" data-duration="1000" data-delay="200">
                    <?php if( have_rows('features') ): ?>
                        <?php while( have_rows('features') ): the_row(); ?>
                            <div class="item">
                                <img src="<?php the_sub_field('icon'); ?>" class="item-icon" alt="" />
                                <h4 class="item-heading text-center"><?php the_sub_field('title'); ?></h4>
                                <p class="item-description text-center"><?php the_sub_field('description'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="about" id="about">
            <img src="assets/images/image-cat-paw.png" class="image-paw" data-cue="fadeInDown" data-duration="1000" data-delay="800" alt="cat paw" />
            <div class="container">
                <div class="wrapper">
                    <div class="section-text">
                        <h2 class="heading-underlined line-blue" data-cue="fadeIn" data-duration="1000">
                            <span class="heading-white">Lorem Ipsum</span>
                            <span class="heading-pink">Dolor Sit Amet</span>
                        </h2>
                        <p class="text-center" data-cue="fadeIn" data-duration="1000" data-delay="200">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                    <div class="section-image">
                        <span class="background-color background-pink"></span>
                        <img src="assets/images/image-cat-litter-pink.png" data-cue="fadeIn" data-duration="1000" data-delay="600" alt="cat litter" />
                    </div>
                </div>
            </div>
        </section>
        <section class="faqs background-blue" id="faqs">
            <div class="container">
                <img src="assets/images/image-cat-castle.png" class="image-castle" data-cue="fadeIn" data-duration="1000" data-delay="400" alt="" />
                <div class="wrapper">
                    <div class="section-text">
                        <h2 class="heading-underlined line-pink" data-cue="fadeIn" data-duration="1000">
                            <span class="heading-white">Lorem Ipsum</span>
                            <span class="heading-burgundy">Dolor Sit Amet</span>
                        </h2>
                        <p class="text-center" data-cue="fadeIn" data-duration="1000" data-delay="200">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.
                        </p>
                    </div>
                    <div class="accordion" id="accordion_faq" data-cues="fadeIn" data-duration="1000" data-delay="200">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordion_heading_1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_1" aria-expanded="true" aria-controls="accordion_collapse_1">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit?
                            </button>
                            </h2>
                            <div id="accordion_collapse_1" class="accordion-collapse collapse show" aria-labelledby="accordion_heading_1" data-bs-parent="#accordion_faq">
                                <div class="accordion-body">
                                    <p>B-Calm is available in a standard 100ml bottle, or a smaller more convenient 30ml travel-size option. This is ideal if travelling with your dog, as journeys in the car can often be stressful experiences for them.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordion_heading_2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_2" aria-expanded="false" aria-controls="accordion_collapse_2">
                                Lorem ipsum dolor sit amet consectetur?
                            </button>
                            </h2>
                            <div id="accordion_collapse_2" class="accordion-collapse collapse" aria-labelledby="accordion_heading_2" data-bs-parent="#accordion_faq">
                                <div class="accordion-body">
                                    <p>Several factors cause stress and anxiety for our pets, including boredom, frustration, fear or even simple changes in routine. Other seasonal factors (i.e. bonfire night, new year's eve, etc.) are known contributors to stress and anxiety.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordion_heading_3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_3" aria-expanded="false" aria-controls="accordion_collapse_3">
                                Lorem ipsum dolor sit?
                            </button>
                            </h2>
                            <div id="accordion_collapse_3" class="accordion-collapse collapse" aria-labelledby="accordion_heading_3" data-bs-parent="#accordion_faq">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Loss of appetite</li>
                                        <li>Excessive scratching or chewing</li>
                                        <li>Pacing, circling or restlessness</li>
                                        <li>Becoming more withdrawn or hiding</li>
                                        <li>Becoming more aggressive or less tolerant</li>
                                        <li>Reluctant of using the litter tray</li>
                                        <li>Sleep disturbance</li>
                                        <li>Over-grooming</li>
                                        <li>Overeating</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordion_heading_4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_4" aria-expanded="false" aria-controls="accordion_collapse_4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit sed do?
                            </button>
                            </h2>
                            <div id="accordion_collapse_4" class="accordion-collapse collapse" aria-labelledby="accordion_heading_4" data-bs-parent="#accordion_faq">
                                <div class="accordion-body">
                                    <p>B-Calm is available in a standard 100ml bottle, or a smaller more convenient 30ml travel-size option. This is ideal if travelling with your dog, as journeys in the car can often be stressful experiences for them.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordion_heading_5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_5" aria-expanded="false" aria-controls="accordion_collapse_5">
                                Lorem ipsum dolor amet consectetur adipisicing?
                            </button>
                            </h2>
                            <div id="accordion_collapse_5" class="accordion-collapse collapse" aria-labelledby="accordion_heading_5" data-bs-parent="#accordion_faq">
                                <div class="accordion-body">
                                    <p>B-Calm is available in a standard 100ml bottle, or a smaller more convenient 30ml travel-size option. This is ideal if travelling with your dog, as journeys in the car can often be stressful experiences for them.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordion_heading_6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_6" aria-expanded="false" aria-controls="accordion_collapse_6">
                                Lorem ipsum dolor sit amet elit?
                            </button>
                            </h2>
                            <div id="accordion_collapse_6" class="accordion-collapse collapse" aria-labelledby="accordion_heading_6" data-bs-parent="#accordion_faq">
                                <div class="accordion-body">
                                    <p>B-Calm is available in a standard 100ml bottle, or a smaller more convenient 30ml travel-size option. This is ideal if travelling with your dog, as journeys in the car can often be stressful experiences for them.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact background-pink" id="contact">
            <img src="assets/images/image-contact-left.png" class="image-contact image-left" data-cue="fadeInLeft" data-duration="1000" data-delay="800" alt="product image" />
            <img src="assets/images/image-contact-right.png" class="image-contact image-right" data-cue="fadeInRight" data-duration="1000" data-delay="800" alt="product image" />
            <div class="container">
                <div class="wrapper">
                    <div class="section-text" data-cue="fadeIn" data-duration="1000">
                        <h2 class="heading-underlined line-blue">
                            <span class="heading-white">Lorem Ipsum</span>
                            <span class="heading-burgundy">Dolor Sit Amet</span>
                        </h2>
                    </div>
                    <div class="columns">
                        <div class="column column-info">
                            <p class="text-center" data-cue="fadeIn" data-duration="1000" data-delay="200">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                            <div class="contact-details">
                                <div class="detail detail-full" data-cue="fadeIn" data-duration="1000" data-delay="400">
                                    <img src="assets/images/icon-pin-burgundy.png" class="icon" alt="location" >
                                    <a href="#" class="address not-clickable">Pets Choice Ltd, Brentwood House Lower Philips Road, Whitebirk Industrial Estate, Blackburn, BB1 5UD, UK.</a>
                                </div>
                                <div class="detail detail-half" data-cue="fadeIn" data-duration="1000" data-delay="600">
                                    <img src="assets/images/icon-telephone-burgundy.png" class="icon" alt="telephone" >
                                    <a href="#" class="telephone clickable">01254 54545</a>
                                </div>
                                <div class="detail detail-half" data-cue="fadeIn" data-duration="1000" data-delay="800">
                                    <img src="assets/images/icon-mail-burgundy.png" class="icon" alt="email address" >
                                    <a href="#" class="email clickable">info@petschoice.co.uk</a>
                                </div>
                            </div>
                        </div>
                        <div class="column column-contact contact-form" data-cue="fadeIn" data-duration="1000" data-delay="1000">
                            <div class="wpcf7 js" id="wpcf7-felight" lang="en-US" dir="ltr">
                                <form action="" method="post" class="wpcf7-form" aria-label="Contact form">
                                    <div class="form-items">
                                        <div class="form-item item-input item-input-row">
                                            <div class="item-input-column">
                                                <p>
                                                    <span class="wpcf7-form-control-wrap">
                                                        <input size="40" class="wpcf7-form-control wpcf7-text cf-input" id="firstname" placeholder="First Name*" type="text">
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="item-input-column">
                                                <p>
                                                    <span class="wpcf7-form-control-wrap">
                                                        <input size="40" class="wpcf7-form-control wpcf7-text cf-input" id="lastname" placeholder="Last Name*" type="text">
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="form-item item-input item-input-row">
                                            <div class="item-input-column">
                                                <p>
                                                    <span class="wpcf7-form-control-wrap">
                                                        <input size="40" class="wpcf7-form-control wpcf7-text cf-input" id="emailaddress" placeholder="Email Address*" type="email">
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="item-input-column">
                                                <p>
                                                    <span class="wpcf7-form-control-wrap">
                                                        <input size="40" class="wpcf7-form-control wpcf7-text cf-input" id="phonenumber" placeholder="Phone Number" type="text">
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="form-item item-input item-input-row">
                                            <div class="item-input-column">
                                                <p>
                                                    <span class="wpcf7-form-control-wrap">
                                                        <input size="40" class="wpcf7-form-control wpcf7-text cf-input" id="street" placeholder="Street" type="text">
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="item-input-column">
                                                <p>
                                                    <span class="wpcf7-form-control-wrap">
                                                    <input size="40" class="wpcf7-form-control wpcf7-text cf-input" id="city/county" placeholder="City/County" type="text"></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="form-item item-input item-input-row">
                                            <div class="item-input-column">
                                                <p>
                                                    <span class="wpcf7-form-control-wrap">
                                                        <input size="40" class="wpcf7-form-control wpcf7-text cf-input" id="postcode" placeholder="Post Code" type="text"></span>
                                                    </p>
                                            </div>
                                            <div class="item-input-column">
                                                <div class="field-select">
                                                    <p>
                                                        <span class="wpcf7-form-control-wrap">
                                                            <select class="wpcf7-form-control wpcf7-select cf-select" id="social">
                                                                <option value="Subject">Subject</option>
                                                                <option value="General Enquiry">General Enquiry</option>
                                                                <option value="Become a stockist">Become a stockist</option>
                                                                <option value="Delivery/Order Enquiry">Delivery/Order Enquiry</option>
                                                                <option value="Feedback">Feedback</option>
                                                                <option value="Other">Other</option>
                                                            </select>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-item item-input item-input-row">
                                            <div class="item-input-column item-input-column-full">
                                                <p>
                                                    <span class="wpcf7-form-control-wrap">
                                                        <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea cf-textarea" id="message" placeholder="Message*"></textarea>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="form-item item-submit item-submit-purple button-right">
                                            <div class="field-submit">
                                                <p>
                                                    <input class="wpcf7-form-control has-spinner wpcf7-submit cf-submit" id="submitform" type="submit" value="SUBMIT">
                                                    <span class="wpcf7-spinner"></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer-section.php'; ?>
<?php get_footer(); ?>