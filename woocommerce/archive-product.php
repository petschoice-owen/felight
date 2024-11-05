<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); ?>

<body <?php body_class(); ?>>
    <?php include(get_template_directory() . '/top-navigation.php'); ?>
    <ul class="product-listing-nav d-none">
        <li>
            <a href="#<?php if( get_field('shop_banner_section_id', 'option') ) { the_field('shop_banner_section_id', 'option'); } else { echo "banner"; } ?>">Banner</a>
            <a href="#<?php if( get_field('shop_litters_section_id', 'option') ) { the_field('shop_litters_section_id', 'option'); } else { echo "litters"; } ?>">Litters</a>
            <a href="#<?php if( get_field('shop_accessories_section_id', 'option') ) { the_field('shop_accessories_section_id', 'option'); } else { echo "accessories"; } ?>">Accessories</a>
            <a href="#<?php if( get_field('shop_fresheners_section_id', 'option') ) { the_field('shop_fresheners_section_id', 'option'); } else { echo "fresheners"; } ?>">Fresheners</a>
        </li>
    </ul>
    <main class="page-shop">
        <section class="banner banner-shop background-<?php the_field('shop_banner_background_color_primary', 'option'); ?> border-bottom-2 border-color-<?php the_field('shop_banner_background_color_primary', 'option'); ?>" id="<?php if( get_field('shop_banner_section_id', 'option') ) { the_field('shop_banner_section_id', 'option'); } else { echo "banner"; } ?>">
            <?php if( get_field('shop_roundel_visibility', 'option') == 'show' ): ?>
                <a href="<?php if( get_field('shop_roundel_link', 'option') ) { the_field('shop_roundel_link', 'option'); } else { echo "#"; } ?>" class="product-roundel" data-cue="fadeIn" data-duration="800" data-delay="800"><?php if( get_field('shop_roundel_text', 'option') ) { the_field('shop_roundel_text', 'option'); } else { echo "Available for purchase in most major retailers"; } ?></a>
            <?php endif; ?>
            <div class="container">
                <div class="wrapper">
                    <div class="section-heading">
                        <h1 class="heading-underlined heading-underlined-bigger line-<?php the_field('shop_banner_heading_underline_color', 'option'); ?>" data-cue="fadeIn" data-duration="1000" data-delay="200">
                            <?php if( have_rows('shop_banner_heading', 'option') ): ?>
                                <?php while( have_rows('shop_banner_heading', 'option') ): the_row(); ?>
                                    <span class="heading-<?php the_sub_field('heading_color', 'option'); ?>"><?php the_sub_field('heading', 'option'); ?></span>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </h1>
                        <?php if( get_field('shop_banner_description', 'option') ): ?>
                            <p data-cue="fadeIn" data-duration="1000" data-delay="400"><?php the_field('shop_banner_description', 'option'); ?></p>
                        <?php endif; ?>                        
                    </div>
                </div>
            </div>
            <div class="banner-image">
                <span class="background-color background-<?php the_field('shop_banner_background_color_secondary', 'option'); ?>"></span>
                <img src="<?php the_field('shop_banner_image', 'option'); ?>" data-cue="fadeIn" data-duration="800" data-delay="800" alt="banner image" />
            </div>
        </section>
        <section class="product-listing product-listing-litters background-<?php the_field('shop_litters_background_color', 'option'); ?>" id="<?php if( get_field('shop_litters_section_id', 'option') ) { the_field('shop_litters_section_id', 'option'); } else { echo "litters"; } ?>">
            <?php if( get_field('shop_litters_image_left', 'option') ): ?>
                <img src="<?php the_field('shop_litters_image_left', 'option'); ?>" class="image-listing image-left" data-cue="fadeInLeft" data-duration="500" data-delay="1000" alt="paw" />
            <?php endif; ?>
            <?php if( get_field('shop_litters_image_right', 'option') ): ?>
                <img src="<?php the_field('shop_litters_image_right', 'option'); ?>" class="image-listing image-right" data-cue="fadeInRight" data-duration="500" data-delay="1000" alt="cat litter" />
            <?php endif; ?>
            <div class="container">
                <div class="section-text">
                    <h2 class="heading-underlined line-<?php the_field('shop_litters_heading_underline_color', 'option'); ?>" data-cue="fadeIn" data-duration="1000">
                        <?php if( have_rows('shop_litters_heading', 'option') ): ?>
                            <?php while( have_rows('shop_litters_heading', 'option') ): the_row(); ?>
                                <span class="heading-<?php the_sub_field('heading_color', 'option'); ?>"><?php the_sub_field('heading', 'option'); ?></span>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </h2>
                    <?php if( get_field('shop_litters_subheading', 'option') ): ?>
                        <p class="text-center" data-cue="fadeIn" data-duration="1000" data-delay="200"><?php the_field('shop_litters_subheading', 'option'); ?></p>
                    <?php endif; ?>
                </div>
                <div class="product-items" data-cues="fadeIn" data-duration="1000" data-delay="200">
                    <?php
                        $args = array(
                            'post_type' => 'product',
                            'post_status' => 'publish',
                            'product_cat' => 'litters', 
                            'posts_per_page' => -1, 
                            'orderby' => 'date', 
                            'order' => 'DESC',
                        );
                        $products = new WP_Query($args);
                    ?>
                    <?php if ($products->have_posts()) : ?>
                        <?php while ($products->have_posts()) : $products->the_post(); ?>
                            <div class="product-item">
                                <div class="product-wrapper product-stars product-stars-<?php the_field('product_stars'); ?>">
                                    <div class="product-background background-white"></div>
                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                    <a href="<?php the_permalink(); ?>" class="product-image">
                                        <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
                                    </a>
                                    <h4 class="product-name">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>
                                    <div class="product-button">
                                        <a href="<?php the_permalink(); ?>" class="button btn-burgundy">Find Out More</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    <?php else: ?>
                        <div class="no-products">
                            <h4>Sorry, there are no products under this category.</h4>
                        </div>
                    <?php endif; wp_reset_query(); ?>
                </div>
            </div>
        </section>
        <section class="product-listing product-listing-fresheners background-<?php the_field('shop_fresheners_background_color', 'option'); ?>" id="<?php if( get_field('shop_fresheners_section_id', 'option') ) { the_field('shop_fresheners_section_id', 'option'); } else { echo "fresheners"; } ?>">
            <?php if( get_field('shop_fresheners_image_left', 'option') ): ?>
                <img src="<?php the_field('shop_fresheners_image_left', 'option'); ?>" class="image-listing image-left" data-cue="fadeInLeft" data-duration="500" data-delay="1000" alt="paw" />
            <?php endif; ?>
            <?php if( get_field('shop_fresheners_image_right', 'option') ): ?>
                <img src="<?php the_field('shop_fresheners_image_right', 'option'); ?>" class="image-listing image-right" data-cue="fadeInRight" data-duration="500" data-delay="1000" alt="cat litter" />
            <?php endif; ?>
            <div class="container">
                <div class="section-text">
                    <h2 class="heading-underlined line-<?php the_field('shop_fresheners_heading_underline_color', 'option'); ?>" data-cue="fadeIn" data-duration="1000">
                        <?php if( have_rows('shop_fresheners_heading', 'option') ): ?>
                            <?php while( have_rows('shop_fresheners_heading', 'option') ): the_row(); ?>
                                <span class="heading-<?php the_sub_field('heading_color', 'option'); ?>"><?php the_sub_field('heading', 'option'); ?></span>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </h2>
                    <?php if( get_field('shop_fresheners_subheading', 'option') ): ?>
                        <p class="text-center" data-cue="fadeIn" data-duration="1000" data-delay="200"><?php the_field('shop_fresheners_subheading', 'option'); ?></p>
                    <?php endif; ?>
                </div>
                <div class="product-items" data-cues="fadeIn" data-duration="1000" data-delay="200">
                    <?php
                        $args = array(
                            'post_type' => 'product',
                            'post_status' => 'publish',
                            'product_cat' => 'fresheners', 
                            'posts_per_page' => -1, 
                            'orderby' => 'date', 
                            'order' => 'DESC',
                        );
                        $products = new WP_Query($args);
                    ?>
                    <?php if ($products->have_posts()) : ?>
                        <?php while ($products->have_posts()) : $products->the_post(); ?>
                            <div class="product-item">
                                <div class="product-wrapper product-stars product-stars-<?php the_field('product_stars'); ?>">
                                    <div class="product-background background-white"></div>
                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                    <a href="<?php the_permalink(); ?>" class="product-image">
                                        <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
                                    </a>
                                    <h4 class="product-name">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>
                                    <div class="product-button">
                                        <a href="<?php the_permalink(); ?>" class="button btn-burgundy">Find Out More</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    <?php else: ?>
                        <div class="no-products">
                            <h4>Sorry, there are no products under this category.</h4>
                        </div>
                    <?php endif; wp_reset_query(); ?>
                </div>
            </div>
        </section>
        <section class="product-listing product-listing-accessories background-<?php the_field('shop_accessories_background_color', 'option'); ?>" id="<?php if( get_field('shop_accessories_section_id', 'option') ) { the_field('shop_accessories_section_id', 'option'); } else { echo "accessories"; } ?>">
            <?php if( get_field('shop_accessories_image_left', 'option') ): ?>
                <img src="<?php the_field('shop_accessories_image_left', 'option'); ?>" class="image-listing image-left" data-cue="fadeInLeft" data-duration="500" data-delay="1000" alt="paw" />
            <?php endif; ?>
            <?php if( get_field('shop_accessories_image_right', 'option') ): ?>
                <img src="<?php the_field('shop_accessories_image_right', 'option'); ?>" class="image-listing image-right" data-cue="fadeInRight" data-duration="500" data-delay="1000" alt="cat litter" />
            <?php endif; ?>
            <div class="container">
                <div class="section-text">
                    <h2 class="heading-underlined line-<?php the_field('shop_accessories_heading_underline_color', 'option'); ?>" data-cue="fadeIn" data-duration="1000">
                        <?php if( have_rows('shop_accessories_heading', 'option') ): ?>
                            <?php while( have_rows('shop_accessories_heading', 'option') ): the_row(); ?>
                                <span class="heading-<?php the_sub_field('heading_color', 'option'); ?>"><?php the_sub_field('heading', 'option'); ?></span>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </h2>
                    <?php if( get_field('shop_accessories_subheading', 'option') ): ?>
                        <p class="text-center" data-cue="fadeIn" data-duration="1000" data-delay="200"><?php the_field('shop_accessories_subheading', 'option'); ?></p>
                    <?php endif; ?>
                </div>
                <div class="product-items" data-cues="fadeIn" data-duration="1000" data-delay="200">
                    <?php
                        $args = array(
                            'post_type' => 'product',
                            'post_status' => 'publish',
                            'product_cat' => 'accessories', 
                            'posts_per_page' => -1, 
                            'orderby' => 'date', 
                            'order' => 'DESC',
                        );
                        $products = new WP_Query($args);
                    ?>
                    <?php if ($products->have_posts()) : ?>
                        <?php while ($products->have_posts()) : $products->the_post(); ?>
                            <div class="product-item">
                                <div class="product-wrapper product-stars product-stars-<?php the_field('product_stars'); ?>">
                                    <div class="product-background background-white"></div>
                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                    <a href="<?php the_permalink(); ?>" class="product-image">
                                        <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
                                    </a>
                                    <h4 class="product-name">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>
                                    <div class="product-button">
                                        <a href="<?php the_permalink(); ?>" class="button btn-burgundy">Find Out More</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    <?php else: ?>
                        <div class="no-products">
                            <h4>Sorry, there are no products under this category.</h4>
                        </div>
                    <?php endif; wp_reset_query(); ?>
                </div>
            </div>
        </section>
    </main>
    <?php include(get_template_directory() . '/footer-section.php'); ?>
<?php
get_footer( 'shop' );
