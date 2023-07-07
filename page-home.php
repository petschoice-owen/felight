<?php
/**
 * Template Name: Home Page
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
        <section class="about background-<?php the_field('about_background_color_left'); ?>" 
            id="<?php if( have_rows('about_section_id') ): 
                while( have_rows('about_section_id') ): the_row(); 
                    the_sub_field('section_id'); 
                endwhile;
            endif; ?>">
            <?php if( get_field('about_top_image_background') ): ?>
                <img src="<?php the_field('about_top_image_background'); ?>" class="image-paw" data-cue="fadeInDown" data-duration="1000" data-delay="800" alt="cat paw" />
            <?php endif; ?>
            <div class="container">
                <div class="wrapper">
                    <div class="section-text">
                        <h2 class="heading-underlined line-<?php the_field('about_heading_underline_color'); ?>" data-cue="fadeIn" data-duration="1000">
                            <?php if( have_rows('about_section_heading') ): ?>
                                <?php while( have_rows('about_section_heading') ): the_row(); ?>
                                    <span class="heading-<?php the_sub_field('heading_color'); ?>"><?php the_sub_field('heading'); ?></span>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </h2>
                        <?php if( get_field('about_section_subheading') ): ?>
                            <p class="text-center" data-cue="fadeIn" data-duration="1000" data-delay="200"><?php the_field('about_section_subheading'); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php if( get_field('about_section_image') ): ?>
                        <div class="section-image">
                            <span class="background-color background-<?php the_field('about_background_color_right'); ?>"></span>
                            <img src="<?php the_field('about_section_image'); ?>" data-cue="fadeIn" data-duration="1000" data-delay="600" alt="cat litter" />
                        </div>
                    <?php endif; ?>                    
                </div>
            </div>
        </section>
        <section class="faqs background-<?php the_field('faqs_background_color'); ?>" 
            id="<?php if( have_rows('faqs_section_id') ): 
                while( have_rows('faqs_section_id') ): the_row(); 
                    the_sub_field('section_id'); 
                endwhile;
            endif; ?>">
            <div class="container">
                <?php if( get_field('faqs_section_image') ): ?>
                    <img src="<?php the_field('faqs_section_image'); ?>" class="image-castle" data-cue="fadeIn" data-duration="1000" data-delay="400" alt="faqs image" />
                <?php endif; ?>
                <div class="wrapper">
                    <div class="section-text">
                        <h2 class="heading-underlined line-<?php the_field('faqs_heading_underline_color'); ?>" data-cue="fadeIn" data-duration="1000">
                            <?php if( have_rows('faqs_section_heading') ): ?>
                                <?php while( have_rows('faqs_section_heading') ): the_row(); ?>
                                    <span class="heading-<?php the_sub_field('heading_color'); ?>"><?php the_sub_field('heading'); ?></span>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </h2>
                        <?php if( get_field('faqs_section_subheading') ): ?>
                            <p class="text-center" data-cue="fadeIn" data-duration="1000" data-delay="200"><?php the_field('faqs_section_subheading'); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="accordion" id="accordion_faq" data-cues="fadeIn" data-duration="1000" data-delay="200">
                        <?php if( have_rows('faqs_items') ): ?>
                            <?php $counter = 1; ?>
                            <?php while( have_rows('faqs_items') ): the_row(); ?>
                                <div class="accordion-item background-<?php the_sub_field('heading_background_color'); ?>">
                                    <h2 class="accordion-header" id="accordion_heading_<?php echo $counter; ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_<?php echo $counter; ?>" aria-expanded="false" aria-controls="accordion_collapse_<?php echo $counter; ?>"><?php the_sub_field('heading'); ?></button>
                                    </h2>
                                    <div id="accordion_collapse_<?php echo $counter; ?>" class="accordion-collapse collapse background-<?php the_sub_field('content_background_color'); ?>" aria-labelledby="accordion_heading_<?php echo $counter; ?>" data-bs-parent="#accordion_faq">
                                        <div class="accordion-body"><?php the_sub_field('content'); ?></div>
                                    </div>
                                </div>
                            <?php $counter++; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact background-<?php the_field('contact_background_color'); ?>" 
            id="<?php if( have_rows('contact_section_id') ): 
                while( have_rows('contact_section_id') ): the_row(); 
                    the_sub_field('section_id'); 
                endwhile;
            endif; ?>">
            <?php if( get_field('contact_image_left') ): ?>
                <img src="<?php the_field('contact_image_left'); ?>" class="image-contact image-left" data-cue="fadeInLeft" data-duration="1000" data-delay="800" alt="product image" />
            <?php endif; ?>
            <?php if( get_field('contact_image_right') ): ?>
                <img src="<?php the_field('contact_image_right'); ?>" class="image-contact image-right" data-cue="fadeInRight" data-duration="1000" data-delay="800" alt="product image" />
            <?php endif; ?>
            <div class="container">
                <div class="wrapper">
                    <div class="section-text" data-cue="fadeIn" data-duration="1000">
                        <h2 class="heading-underlined line-<?php the_field('contact_heading_underline_color'); ?>">
                            <?php if( have_rows('contact_section_heading') ): ?>
                                <?php while( have_rows('contact_section_heading') ): the_row(); ?>
                                    <span class="heading-<?php the_sub_field('heading_color'); ?>"><?php the_sub_field('heading'); ?></span>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </h2>
                    </div>
                    <div class="columns">
                        <div class="column column-info">
                            <?php if( get_field('contact_section_subheading') ): ?>
                                <p class="text-center" data-cue="fadeIn" data-duration="1000" data-delay="200"><?php the_field('contact_section_subheading'); ?></p>
                            <?php endif; ?>
                            <div class="contact-details">
                                <?php if( get_field('contact_detail_address') ): ?>
                                    <div class="detail detail-full" data-cue="fadeIn" data-duration="1000" data-delay="400">
                                        <img src="<?php the_field('contact_detail_address_icon'); ?>" class="icon" alt="location" >
                                        <a href="#" class="address not-clickable"><?php the_field('contact_detail_address'); ?></a>
                                    </div>
                                <?php endif; ?>
                                <?php if( get_field('contact_detail_telephone') ): ?>
                                    <div class="detail detail-half" data-cue="fadeIn" data-duration="1000" data-delay="600">
                                        <img src="<?php the_field('contact_detail_telephone_icon'); ?>" class="icon" alt="telephone" >
                                        <a href="#" class="telephone clickable"><?php the_field('contact_detail_telephone'); ?></a>
                                    </div>
                                <?php endif; ?>
                                <?php if( get_field('contact_detail_email') ): ?>
                                    <div class="detail detail-half" data-cue="fadeIn" data-duration="1000" data-delay="800">
                                        <img src="<?php the_field('contact_detail_email_icon'); ?>" class="icon" alt="email address" >
                                        <a href="#" class="email clickable"><?php the_field('contact_detail_email'); ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="column column-contact contact-form" data-cue="fadeIn" data-duration="1000" data-delay="1000">
                            <?php echo do_shortcode(('[contact-form-7 id="'.get_field('contact_form_id').'"]')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer-section.php'; ?>
<?php get_footer(); ?>