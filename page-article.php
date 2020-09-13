<?php
/*
 * Template Name: Article
 */

get_header(); ?>

	<div id="primary" class="content-area home">
		<main id="main" class="site-main" role="main">
			<section class="diamond-wrap campaign-header">
				<div class="container">

					<?php the_title( sprintf( '<h1>', esc_url( get_permalink() ) ), '</h1>' ); ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'article' ); ?>

					<?php endwhile; // End of the loop. ?>

					<div class="col-sm-3 col-xs-12">
						<!-- <div class="mc-form career-form sidebar-form">
							<div class="ninja-forms-error-msg">
								<p>Please input a valid email address and select an option from the drop-down list below.</p>
							</div>
							<div class="mc_embed_signup">

								<?php #if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 190 ); }; ?> 
					
							</div> 
						</div> -->
						<div class="cta-wrap">
							<div class="cta-base" id="long-cta">
								<h3><span>EXPLORE</span>
								COLLEGE & CAREER POSSIBILITIES AT COA FOR:</h3>
								<ul>
									<li>Four-Year Transfer</li>
									<li>Business</li>
									<li>Industrial Technology</li>
									<li>Health Sciences & Wellness</li>
									<li>Public & Emergency Services</li>
								</ul>
								<div class="button-base">
									<a href="http://explore.albemarle.edu/">START TODAY</a>
								</div>
							</div>
							<div class="cta-base" id="short-cta">
								<h3>Still in High School?</h3>
								<p>Find the College or Career path that's right for you.</p>
								<div class="button-base">
									<a href="http://explore.albemarle.edu/four-year-transfer/">GO</a>
								</div>
							</div>
						</div>
					</div>
					<div class='mc-form-header' id="mc-form-header">
						<div class='formhead-icon'>
							<img src="../../wp-content/themes/coa_micro/img/spikes.png" alt="">
						</div>
						<div class='formhead-overflow'>
							<div class='formhead-wrap'>
								<div class='formhead-container'>
									<p><span>What possibility seems most exciting to you? Let us know.</span>We'd love to send you some information and help you take the first steps.</p>
								</div>
							</div>
						</div>
					</div>
					<div id="hs-form" class="mc-form career-form">
						<div id="mc_error_message">
							<p>Please input a valid email address and select an option from the drop-down list below.</p>
						</div>
						<!-- Begin MailChimp Signup Form -->
						<div id="mc_embed_signup">

							<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 190 ); }; ?> 
				
						</div>
						<!--End mc_embed_signup-->
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<!-- <?php # get_sidebar(); ?>  -->

<?php get_footer(); ?>
