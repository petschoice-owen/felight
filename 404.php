<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */
get_header(); ?>
<body <?php body_class(); ?>>
    <?php include 'top-navigation.php'; ?>
	<main class="page-404">
		<section class="banner-404 background-<?php the_field('404_background_color', 'option'); ?>">
			<div class="container">
				<div class="wrapper">
					<?php if( get_field('404_background_text', 'option') ): ?>
						<span class="background-text"><?php the_field('404_background_text', 'option'); ?></span>
					<?php endif; ?>
					<?php if( get_field('404_heading', 'option') ): ?>
						<h1 class="heading-404" data-cue="fadeIn" data-duration="1000"><?php the_field('404_heading', 'option'); ?></h1>
					<?php endif; ?>
					<?php if( get_field('404_subheading', 'option') ): ?>
						<h2 class="subheading-404" data-cue="fadeIn" data-duration="1000" data-delay="200"><?php the_field('404_subheading', 'option'); ?></h2>
					<?php endif; ?>
					<?php if( get_field('404_content', 'option') ): ?>
						<div class="content-404" data-cue="fadeIn" data-duration="1000" data-delay="600">
							<?php the_field('404_content', 'option'); ?>
						</div>
					<?php endif; ?>					
				</div>
			</div>
		</section>
	</main>
    <?php include 'footer-section.php'; ?>
<?php get_footer(); ?>