<?php
/**
 * The template for displaying any page.
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
								<span class="heading-white">Default Page</span>
							</h2>
						</div>
						<?php the_title(); ?>
							<?php the_content(); ?>
							<?php
								if ( the_content() ) {
									the_content();
								}
							?>
						<div class="content" data-cue="fadeIn" data-duration="1000" data-delay="200">
						
							<!-- <h1>This is a sample preview of heading 1.</h1>
							<br>
							<h2>This is a sample preview of heading 2.</h2>
							<br>
							<h3>This is a sample preview of heading 3.</h3>
							<br>
							<h4>This is a sample preview of heading 4.</h4>
							<br>
							<h5>This is a sample preview of heading 5.</h5>
							<br>
							<h6>This is a sample preview of heading 6.</h6>
							<br>
							<ul>
								<li>This is a sample preview of list item 1</li>
								<li>This is a sample preview of list item 2</li>
								<li>This is a sample preview of list item 3</li>
							</ul>
							<br>
							<p>This is a sample preview of a paragraph.</p>
							<br>
							<p>This is a sample preview of an <a href="#">anchor tag</a> inside a paragraph.</p>
							<br>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, consequuntur ad esse iure natus recusandae, quibusdam, architecto error nemo officia quidem facere perferendis? Ducimus, facilis. Magni autem deserunt quos error.
							Similique veniam placeat voluptatem, eaque recusandae atque, repellendus doloremque qui excepturi aliquam quis, veritatis eveniet rem perspiciatis maiores. Iure laboriosam dicta quia est amet eligendi neque similique pariatur reprehenderit corrupti.
							Id architecto incidunt quisquam odio numquam blanditiis voluptatem voluptates suscipit veniam quod porro consequatur doloremque voluptate similique placeat ducimus corporis magnam harum, deleniti quia delectus perferendis labore eligendi exercitationem! Placeat.
							Deleniti doloremque laudantium minima, provident in natus. Eaque dolores hic ab voluptatum doloremque nulla ex officiis adipisci quam laboriosam nihil deserunt cupiditate, sapiente laudantium perspiciatis reiciendis accusantium qui. Repudiandae, ipsa.
							Rem fugit tempora explicabo quisquam officia, corrupti repudiandae a pariatur tenetur enim ipsam, velit non perferendis in porro dolor commodi eaque ratione exercitationem molestias dolores. Ipsa tempore voluptatibus possimus eum?
							Et ullam harum id officia laborum sapiente, minima, voluptatum quia earum incidunt quae, maiores omnis ipsam est. Molestias vero qui sequi, ullam non, cum ea, accusamus quam nemo aut deleniti!
							Accusantium atque voluptates doloribus fugit deleniti? Atque quod necessitatibus neque qui laboriosam a hic. Rem nam iure laboriosam sequi aut commodi, modi hic molestiae repudiandae aliquam ex. Facere, exercitationem in?
							Dolor nulla deserunt atque corporis, accusamus quis possimus. Cumque sequi quos eligendi dolor voluptatum voluptatibus dicta eius ad praesentium! Quis sed soluta incidunt explicabo inventore odit aliquam a molestias cupiditate.
							Fugit quibusdam pariatur quod eos minima quas doloremque sint ullam temporibus in quaerat iusto error, fugiat veritatis animi cum aspernatur perspiciatis totam libero labore nesciunt ut maiores sed illum. Adipisci.
							Eveniet veritatis ullam, ea beatae iure expedita dignissimos repellat inventore. Accusantium ullam repudiandae quo aut quasi perspiciatis. Est quasi, quidem officia vero tempore nulla accusantium ea corrupti, cupiditate enim debitis?</p> -->
						</div>
					</div>
				</section>
			</main>
			<?php include 'footer-section.php'; ?>
		<?php endwhile; ?>
		<?php else : ?>
	<?php endif; ?>
<?php get_footer(); ?>