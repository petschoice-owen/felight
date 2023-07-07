<?php
/**
 *
 */
get_header(); ?>
<body <?php body_class(); ?>>
    <?php include 'top-navigation.php'; ?>
	<main class="page-404">
		<section class="banner-404 background-pink <?php the_field('404_banner_background_color', 'option'); ?>">
			<div class="container">
				<div class="wrapper">
					<span class="background-text">404</span>
					<h1 class="heading-404" data-cue="fadeIn" data-duration="1000">Oops!</h1>
					<h2 class="subheading-404" data-cue="fadeIn" data-duration="1000" data-delay="200">Sorry. We can't find the page you're looking for.</h2>
					<div class="content-404" data-cue="fadeIn" data-duration="1000" data-delay="600">
						<p>You can return to the <a href="#">homepage</a> or browse our products in <a href="#">shop page</a>.</p>
					</div>
				</div>
			</div>
		</section>
		<?php // get_search_form(); ?>
	</main>
    <?php include 'footer-section.php'; ?>
<?php get_footer(); ?>