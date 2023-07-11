<?php
/**
 * Template for displaying Search Results pages.
 *
 */
 
get_header(); ?>
<body <?php body_class(); ?>>
	<?php include 'top-navigation.php'; ?>
    <main class="page-search">
        <section class="search-results banner-section product-listing background-pink">
            <div class="container">
                <?php
                    $s = get_search_query();
                    // $args = array(
                    //     's' => $s 
                    // );
                    $args = array(
                        'post_type' => 'product',
                        'post_status' => 'publish',
                        'posts_per_page' => -1, 
                        's' => $_GET['s']
                    );
                    $results = new WP_Query($args);
                ?>
                <?php if ($results->have_posts()) : ?>
                    <div class="section-text">
                        <h1 class="search-heading"><span>You searched for: </span><span class="searched-word"><?php echo $s; ?></span></h1>
                    </div>
                    <div class="product-items" data-cues="fadeIn" data-duration="1000" data-delay="200">
                        <!-- <div class="section-text">
                            <h2 class="heading-underlined line-<?php the_field('search_heading_underline_color', 'option'); ?>" data-cue="fadeIn" data-duration="1000">
                                <?php if( have_rows('search_heading', 'option') ): ?>
                                    <?php while( have_rows('search_heading', 'option') ): the_row(); ?>
                                        <span class="heading-<?php the_sub_field('heading_color', 'option'); ?>"><?php the_sub_field('heading', 'option'); ?></span>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </h2>
                            <?php if( get_field('search_subheading', 'option') ): ?>
                                <p class="text-center" data-cue="fadeIn" data-duration="1000" data-delay="200"><?php the_field('search_subheading', 'option'); ?></p>
                            <?php endif; ?>
                        </div> -->
                        <?php while ($results->have_posts()) : $results->the_post(); ?>
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
                    </div>
                <?php else: ?>
                    <div class="no-products">
                        <h1 class="search-heading"><span>Sorry, there are no products for your search:</span> <span class="searched-word"><?php echo $s; ?></span></h1>
                        <h4>Please try your search again or browse our products in our <a href="/shop">shop</a>.</h4>
                    </div>
                <?php endif; wp_reset_query(); ?>
            </div>
        </section>
    </main>
	<?php include 'footer-section.php'; ?>
<?php get_footer(); ?>