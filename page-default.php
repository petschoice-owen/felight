<?php
/**
 *  Template Name: Default Page
 *
 */
 
get_header(); ?>
<body <?php body_class(); ?>>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php include 'top-navigation.php'; ?>
			<main class="page-default page-default-1"> <!-- data-bs-spy="scroll" data-bs-target="#navbar_main" data-bs-offset="0" tabindex="0" -->
				<section class="default background-color background-pink">
					<div class="container">
						<?php if( have_rows('section_heading') ): ?>
							<div class="section-text">
								<h2 class="heading-underlined line-<?php the_field('section_heading_underline_color'); ?>" data-cue="fadeIn" data-duration="1000">
									<?php while( have_rows('section_heading') ): the_row(); ?>
										<span class="heading-<?php the_sub_field('heading_color'); ?>"><?php the_sub_field('heading'); ?></span>
									<?php endwhile; ?>
								</h2>
							</div>
						<?php endif; ?>
						<?php if ( get_the_content() ) { ?>
							<div class="content" data-cue="fadeIn" data-duration="1000" data-delay="200">
								<?php the_content(); ?>
							</div>
						<?php } ?>
					</div>
				</section>
			</main>
			<?php include 'footer-section.php'; ?>
		<?php endwhile; ?>
		<?php else : ?>
	<?php endif; ?>
<?php get_footer(); ?>