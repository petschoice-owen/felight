<?php
/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */
?>
<?php get_header(); ?>
<body <?php body_class(); ?>>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php include 'top-navigation.php'; ?>
			<main class="page-index">
				<section class="index background-color background-pink">
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