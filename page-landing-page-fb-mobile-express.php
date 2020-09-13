<?php
/*
 * Template Name: Landing Page for FB Mobile Express
 */

get_header(); ?>

	<div id="primary" class="content-area home landing-page-fb-mob-express">
		<main id="main" class="site-main" role="main">
			<section class="diamond-wrap">
				<div class="container">

					<?php while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

						endwhile; ?>

					</section>

				</div>
			</section>
			<section id="mc-form-header-section" class='mc-form-header'>
				<div class='formhead-icon'>
					<img src="../wp-content/themes/coa_micro/img/spikes.png" alt="">
				</div>
				<div class='formhead-overflow'>
					<div class='formhead-wrap'>
						<div class='formhead-container'>
							<p><span>What possibility seems most exciting to you? Let us know.</span>We'd love to send you some information and help you take the first steps.</p>
						</div>
					</div>
				</div>
			</section>
			<section id="hs-form" class="mc-form">
				<div class="container">
					<div id="mc_error_message">
						<p>Please select an option from the drop-down list below.</p>
					</div>
					<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">

						<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 314 ); }; ?>

						
					</div>
					<!--End mc_embed_signup-->
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<!-- <?php # get_sidebar(); ?> -->
<?php get_footer(); ?>
