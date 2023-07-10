<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<body <?php body_class(); ?>>
    <?php include(get_template_directory() . '/top-navigation.php'); ?>
    <main class="page-product">
        <section class="product-section background-<?php the_field('product_details_background_color'); ?>">
            <?php if( get_field('product_roundel_visibility') == 'show' ): ?>
                <a href="<?php if( get_field('product_roundel_link') ) { the_field('product_roundel_link'); } else { echo "#"; } ?>" class="product-roundel" data-cue="fadeIn" data-duration="800" data-delay="800"><?php if( get_field('product_roundel_text') ) { the_field('product_roundel_text'); } else { echo "Available for purchase in most major retailers"; } ?></a>
            <?php endif; ?>
            <div class="container">
                <div class="product">
                    <div class="product-image" data-cue="fadeIn" data-duration="1000">
                        <div class="swiper-js swiper-js-product-page">
                            <div class="swiper swiper-featured">
                                <div class="background-white background-color"></div>
                                <?php if( get_field('product_size_variation') == 'show' ): ?>
                                    <div class="product-variation">
                                        <span class="background-<?php the_field('product_size_variation_background_color'); ?>"><?php the_field('product_size_variation_text'); ?></span>
                                    </div>
                                <?php endif; ?>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" alt="" />
                                    </div>
                                    <?php
                                        $product_id = $product->get_image_id();
                                        $attachment_ids = $product->get_gallery_image_ids();
                                        foreach( $attachment_ids as $attachment_id ) { ?>
                                            <div class="swiper-slide">
                                                <img src="<?php echo $image_url = wp_get_attachment_url( $attachment_id ); ?>" alt="product" />
                                            </div>
                                        <?php }
                                    ?>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div class="swiper swiper-thumbnails">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-wrapper">
                                            <div class="background-white background-color"></div>
                                            <img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" alt="" />
                                        </div>
                                    </div>
                                    <?php
                                        $product_id = $product->get_image_id();
                                        $attachment_ids = $product->get_gallery_image_ids();
                                        foreach( $attachment_ids as $attachment_id ) { ?>
                                            <div class="swiper-slide">
                                                <div class="swiper-slide-wrapper">
                                                    <div class="background-white background-color"></div>
                                                    <img src="<?php echo $image_url = wp_get_attachment_url( $attachment_id ); ?>" alt="product" />
                                                </div>
                                            </div>
                                        <?php }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <h1 class="product_title" data-cue="fadeIn" data-duration="500" data-delay="200"><?php the_title(); ?></h1>
                        <?php if( have_rows('product_claims') ): ?>
                            <ul class="product-claims">
                                <?php while( have_rows('product_claims') ): the_row(); ?>
                                    <li data-cue="fadeInUp" data-duration="500" data-delay="200">
                                        <img src="<?php the_sub_field('icon'); ?>" alt="product claims icon" />
                                        <div><?php the_sub_field('content'); ?></div>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                    <div class="product-tabs product-tabs-<?php the_field('product_details_tab_color'); ?>">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist" data-cues="fadeInUp" data-duration="500" data-delay="200">
                                <?php if ( get_field('product_tabs_tab_name_1') || get_field('product_tabs_tab_content_1') ): ?>
                                    <button class="nav-link" id="nav_one" data-bs-toggle="tab" data-bs-target="#tab_one" type="button" role="tab" aria-controls="tab_one" aria-selected="false"><?php the_field('product_tabs_tab_name_1'); ?></button>
                                <?php endif; ?>
                                <?php if ( get_field('product_tabs_tab_name_2') || get_field('product_tabs_tab_content_2') ): ?>
                                    <button class="nav-link" id="nav_two" data-bs-toggle="tab" data-bs-target="#tab_two" type="button" role="tab" aria-controls="tab_two" aria-selected="false"><?php the_field('product_tabs_tab_name_2'); ?></button>
                                <?php endif; ?>
                                <?php if ( get_field('product_tabs_tab_name_3') || get_field('product_tabs_tab_content_3') ): ?>
                                    <button class="nav-link" id="nav_three" data-bs-toggle="tab" data-bs-target="#tab_three" type="button" role="tab" aria-controls="tab_three" aria-selected="false"><?php the_field('product_tabs_tab_name_3'); ?></button>
                                <?php endif; ?>
                                <?php if ( get_field('product_tabs_tab_name_4') || get_field('product_tabs_tab_content_4') ): ?>
                                    <button class="nav-link" id="nav_four" data-bs-toggle="tab" data-bs-target="#tab_four" type="button" role="tab" aria-controls="tab_four" aria-selected="false"><?php the_field('product_tabs_tab_name_4'); ?></button>
                                <?php endif; ?>
                                <?php if ( get_field('product_tabs_tab_name_5') || get_field('product_tabs_tab_content_5') ): ?>
                                    <button class="nav-link" id="nav_five" data-bs-toggle="tab" data-bs-target="#tab_five" type="button" role="tab" aria-controls="tab_five" aria-selected="false"><?php the_field('product_tabs_tab_name_5'); ?></button>
                                <?php endif; ?>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent" data-cue="fadeIn" data-duration="1000" data-delay="1000">
                            <?php if ( get_field('product_tabs_tab_name_1') || get_field('product_tabs_tab_content_1') ): ?>
                                <div class="tab-pane fade" id="tab_one" role="tabpanel" aria-labelledby="nav_one"><!-- fade show active -->
                                    <div class="tab-content-wrapper"><?php the_field('product_tabs_tab_content_1'); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ( get_field('product_tabs_tab_name_2') || get_field('product_tabs_tab_content_2') ): ?>
                                <div class="tab-pane fade" id="tab_two" role="tabpanel" aria-labelledby="nav_two">
                                    <div class="tab-content-wrapper"><?php the_field('product_tabs_tab_content_2'); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ( get_field('product_tabs_tab_name_3') || get_field('product_tabs_tab_content_3') ): ?>
                                <div class="tab-pane fade" id="tab_three" role="tabpanel" aria-labelledby="nav_three">
                                    <div class="tab-content-wrapper"><?php the_field('product_tabs_tab_content_3'); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ( get_field('product_tabs_tab_name_4') || get_field('product_tabs_tab_content_4') ): ?>
                                <div class="tab-pane fade" id="tab_four" role="tabpanel" aria-labelledby="nav_four">
                                    <div class="tab-content-wrapper"><?php the_field('product_tabs_tab_content_4'); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ( get_field('product_tabs_tab_name_5') || get_field('product_tabs_tab_content_5') ): ?>
                                <div class="tab-pane fade" id="tab_five" role="tabpanel" aria-labelledby="nav_five">
                                    <div class="tab-content-wrapper"><?php the_field('product_tabs_tab_content_5'); ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php
                    /**
                     * woocommerce_before_main_content hook.
                     *
                     * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                     * @hooked woocommerce_breadcrumb - 20
                     */
                    // do_action( 'woocommerce_before_main_content' );
                ?>
                <?php // while ( have_posts() ) : ?>
                    <?php // the_post(); ?>

                    <?php // wc_get_template_part( 'content', 'single-product' ); ?>

                <?php // endwhile; // end of the loop. ?>
                <?php
                    /**
                     * woocommerce_after_main_content hook.
                     *
                     * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                     */
                    // do_action( 'woocommerce_after_main_content' );
                ?>
            </div>
        </section>
        <?php if( get_field('product_instructions_visibility') == 'show' ): ?>
            <section class="usage-instructions background-<?php the_field('product_instructions_background_color'); ?>">
                <div class="container">
                    <div class="section-text">
                        <h2 class="heading-underlined line-<?php the_field('product_instructions_heading_underline_color'); ?>" data-cue="fadeIn" data-duration="1000">
                            <?php if( have_rows('product_instructions_section_heading') ): ?>
                                <?php while( have_rows('product_instructions_section_heading') ): the_row(); ?>
                                    <span class="heading-<?php the_sub_field('heading_color'); ?>"><?php the_sub_field('heading'); ?></span>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </h2>
                    </div>
                    <?php if( have_rows('product_instructions_items') ): ?>
                        <div class="instructions">
                            <?php while( have_rows('product_instructions_items') ): the_row(); ?>
                                <div class="instruction">
                                    <div class="instruction-wrapper" data-cue="fadeIn" data-duration="500" data-delay="200">
                                        <div class="instruction-image">
                                            <img src="<?php the_sub_field('image'); ?>" alt="instruction" />
                                        </div>
                                        <div class="instruction-text">
                                            <?php the_sub_field('content'); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>
        <?php if( get_field('product_suggestion_visibility') == 'show' ): ?>
            <section class="product-listing product-listing-suggestion background-<?php the_field('product_suggestion_background_color'); ?>" id="product-suggestion">
                <div class="container">
                    <div class="section-text">
                        <h2 class="heading-underlined line-<?php the_field('product_suggestion_heading_underline_color'); ?>" data-cue="fadeIn" data-duration="1000">
                            <?php if( have_rows('product_suggestion_section_heading') ): ?>
                                <?php while( have_rows('product_suggestion_section_heading') ): the_row(); ?>
                                    <span class="heading-<?php the_sub_field('heading_color'); ?>"><?php the_sub_field('heading'); ?></span>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </h2>
                    </div>
                    <div class="product-items" data-cues="fadeIn" data-duration="1000" data-delay="200">
                        <?php
                            $productCategoryLitters = get_field('product_suggestion_category_litters');
                            if( $productCategoryLitters ): ?>
                                <div class="product-item">
                                    <div class="product-wrapper product-stars product-stars-1">
                                        <div class="product-background background-white"></div>
                                        <a href="<?php echo esc_url( get_permalink( $productCategoryLitters[0]->ID ) ); ?>" class="product-image">
                                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $productCategoryLitters[0]->ID ) ); ?>" alt="product" />
                                        </a>
                                        <h4 class="product-name">
                                            <a href="<?php echo esc_url( get_permalink( $productCategoryLitters[0]->ID ) ); ?>"><?php echo esc_html( $productCategoryLitters[0]->post_title ); ?></a>
                                        </h4>
                                        <div class="product-button">
                                            <a href="<?php echo esc_url( get_permalink( $productCategoryLitters[0]->ID ) ); ?>" class="button btn-burgundy">Find Out More</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; 
                        ?>
                        <?php
                            $productCategoryAccessories = get_field('product_suggestion_category_accessories');
                            if( $productCategoryAccessories ): ?>
                                <div class="product-item">
                                    <div class="product-wrapper product-stars product-stars-2">
                                        <div class="product-background background-white"></div>
                                        <a href="<?php echo esc_url( get_permalink( $productCategoryAccessories[0]->ID ) ); ?>" class="product-image">
                                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $productCategoryAccessories[0]->ID ) ); ?>" alt="product" />
                                        </a>
                                        <h4 class="product-name">
                                            <a href="<?php echo esc_url( get_permalink( $productCategoryAccessories[0]->ID ) ); ?>"><?php echo esc_html( $productCategoryAccessories[0]->post_title ); ?></a>
                                        </h4>
                                        <div class="product-button">
                                            <a href="<?php echo esc_url( get_permalink( $productCategoryAccessories[0]->ID ) ); ?>" class="button btn-burgundy">Find Out More</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; 
                        ?>
                        <?php
                            $productCategoryFresheners = get_field('product_suggestion_category_fresheners');
                            if( $productCategoryFresheners ): ?>
                                <div class="product-item">
                                    <div class="product-wrapper product-stars product-stars-3">
                                        <div class="product-background background-white"></div>
                                        <a href="<?php echo esc_url( get_permalink( $productCategoryFresheners[0]->ID ) ); ?>" class="product-image">
                                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $productCategoryFresheners[0]->ID ) ); ?>" alt="product" />
                                        </a>
                                        <h4 class="product-name">
                                            <a href="<?php echo esc_url( get_permalink( $productCategoryFresheners[0]->ID ) ); ?>"><?php echo esc_html( $productCategoryFresheners[0]->post_title ); ?></a>
                                        </h4>
                                        <div class="product-button">
                                            <a href="<?php echo esc_url( get_permalink( $productCategoryFresheners[0]->ID ) ); ?>" class="button btn-burgundy">Find Out More</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; 
                        ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php
            /**
             * woocommerce_sidebar hook.
             *
             * @hooked woocommerce_get_sidebar - 10
             */
            // do_action( 'woocommerce_sidebar' );
        ?>
    </main>
    <?php include(get_template_directory() . '/footer-section.php'); ?>
<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
