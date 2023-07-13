<?php
/**
 * The template for displaying any single post.
 *
 */
 
get_header(); ?>
<body <?php body_class(); ?>>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php include 'top-navigation.php'; ?>
			<main class="page-default"> <!-- data-bs-spy="scroll" data-bs-target="#navbar_main" data-bs-offset="0" tabindex="0" -->
				<section class="default background-color background-pink">
					<div class="container">
						<div class="section-text">
							<h2 class="heading-underlined line-burgundy" data-cue="fadeIn" data-duration="1000">
								<span class="heading-white"><?php the_title(); ?></span>
							</h2>
						</div>
						<div class="content" data-cue="fadeIn" data-duration="1000" data-delay="200">
							<?php the_content(); ?>
						</div>
					</div>
				</section>
			</main>
			<?php include 'footer-section.php'; ?>
		<?php endwhile; ?>
		<?php else : ?>
	<?php endif; ?>
<?php get_footer(); ?>