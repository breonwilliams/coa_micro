<?php
/*
 * Template Name: Form
 */

get_header(); ?>

	<div id="primary" class="content-area home">
		<main id="main" class="site-main" role="main">
			<section class="diamond-wrap campaign-header">
				<div class="container">

					<h1>&nbsp;</h1>

				</div>
			</div>
			<section class='mc-form-header'>
				<div class='formhead-icon'>
					<img src="../wp-content/themes/coa_micro/img/spikes.png">
				</div>
				<div class='formhead-overflow'>
					<div class='formhead-wrap'>
						<div class='formhead-container'>
							<p><span>Enter the student's information below.</span>Press "Learn More" to add them to the workflow.</p>
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

						<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 13 ); }; ?>

						
					</div>
					<!--End mc_embed_signup-->
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<!-- <?php # get_sidebar(); ?>  -->

<?php get_footer(); ?>
