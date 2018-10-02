<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Landscaping Bubble
 * @subpackage Landscaping_Bubble
 * @since 1.0
 * @version 1.0
 *
 * Duplication of font-page.php from parent
 *
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">


		<section id="hero">
			<div class="wrap">
				<div class="row full-w">
	 			<div class="col">
		 			<div class="hero-text">
			 			<h1>Connect with landscapers just like you</h1>
			 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				 		Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.</p>
			 			<div class="hero-cta">
				 			<button id="hero-sign-up">Sign Up</button>
				 			<button id="hero-more-info" class"hollow">Find out more</button>
			 			</div>
	 				</div>
	 			</div>
	 			<div class="col">
		 		<!-- col 2 -->
				<img src="/wp-content/themes/landscaping-bubble/img/hero-image.png">
	 			</div>
			</div>

			</div><!--end of wrap-->
		</section>

		<section>
			<div class="wrap">

			</div>
		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
