<?php
/**
 * The template for displaying archive pages
 *
 */

get_header(); ?>
<body <?php body_class(); ?>>
	<?php
		$args = array(
			'post_status' => 'publish',
			'posts_per_page' => -1, 
			'orderby' => 'date', 
			'order' => 'DESC',
		);
		$products = new WP_Query($args);
	?>
	<?php if ($products->have_posts()) : ?>
		<?php include 'top-navigation.php'; ?>
		<main class="page-shop">
			<section class="product-listing product-listing-accessories background-pink" >
				<div class="container">
					<div class="section-text">
						<h2 class="heading-underlined line-burgundy" data-cue="fadeIn" data-duration="1000">
							<span class="heading-white"><?php single_term_title(); ?></span>
						</h2>
					</div>
					<div class="product-items" data-cues="fadeIn" data-duration="1000" data-delay="200">
						<?php while ($products->have_posts()) : $products->the_post() ; ?>
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
				</div>
			</section>
		</main>
		<?php include 'footer-section.php'; ?>
	<?php else : ?>
		<main class="page-shop">
			<section class="product-listing product-listing-accessories background-<?php the_field('shop_accessories_background_color', 'option'); ?>" id="<?php if( get_field('shop_accessories_section_id', 'option') ) { the_field('shop_accessories_section_id', 'option'); } else { echo "accessories"; } ?>">
				<?php if( get_field('shop_accessories_image_left', 'option') ): ?>
					<img src="<?php the_field('shop_accessories_image_left', 'option'); ?>" class="image-listing image-left" data-cue="fadeInLeft" data-duration="500" data-delay="1000" alt="paw" />
				<?php endif; ?>
				<?php if( get_field('shop_accessories_image_right', 'option') ): ?>
					<img src="<?php the_field('shop_accessories_image_right', 'option'); ?>" class="image-listing image-right" data-cue="fadeInRight" data-duration="500" data-delay="1000" alt="cat litter" />
				<?php endif; ?>
				<div class="container">
					<div class="section-text">
						<h2 class="heading-underlined line-burgundy" data-cue="fadeIn" data-duration="1000">
							<span class="heading-white"><?php single_term_title(); ?></span>
						</h2>
					</div>
					<div class="product-items" data-cues="fadeIn" data-duration="1000" data-delay="200">
						<div class="no-products">
						<h4>Sorry, there are no products under this category.</h4>
					</div>
				</div>
			</section>
		</main>
	<?php endif; wp_reset_query(); ?>
<?php get_footer(); ?>