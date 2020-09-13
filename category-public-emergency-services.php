
<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package COA_Microsite
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="diamond-wrap">

				<?php if ( have_posts() ) : ?>
				<div class="container">
					<header class="archive-header">
						<h1 class="archive-title"><?php printf( __( '%s', 'coa_micro' ), single_cat_title( '', false ) ); ?></h1>

						<?php
							// Show an optional term description.
							$term_description = term_description();
							if ( ! empty( $term_description ) ) :
								printf( '<div class="taxonomy-description">%s</div>', $term_description );
							endif;
						?>
					</header><!-- .archive-header -->
					<div class='toggle-parent careers-menu'>
				        <span class='toggle'>Careers</span>
				       	<div class='toggle-content ps-menu'>
							<ul>
								<?php $args = array(
										'category_name'=>'public-emergency-services',
										'orderby' => 'date',
										'order'   => 'ASC'
									);

									$servicesMenu = new WP_Query( $args );

									while ( $servicesMenu->have_posts() ) : $servicesMenu->the_post();

									$sanitizedTitle = get_the_title();
									$sanitizedTitle = strtolower($sanitizedTitle);
									//Make alphanumeric (removes all other characters)
									$sanitizedTitle = preg_replace("/[^a-z0-9_\s-]/", "", $sanitizedTitle);
									//Clean up multiple dashes or whitespaces
									$sanitizedTitle = preg_replace("/[\s-]+/", " ", $sanitizedTitle);
									//Convert whitespaces and underscore to dash
									$sanitizedTitle = preg_replace("/[\s_]/", "-", $sanitizedTitle);

									echo '<li><a href="#' . $sanitizedTitle  . '">' . get_the_title() . '</a></li>';

								endwhile;
								wp_reset_postdata(); ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="career-wrap">

				<?php $args = array(
						'category_name'=>'public-emergency-services',
						'orderby' => 'date',
						'order'   => 'ASC'
					);

					$servicesPosts = new WP_Query( $args );

					while ( $servicesPosts->have_posts() ) : $servicesPosts->the_post();

					get_template_part( 'template-parts/content-career', get_post_format() );

					endwhile; 
				
					wp_reset_postdata();
				
					else :
				
					get_template_part( 'template-parts/content-career', 'none' ); ?>

			</div>
			<?php endif; ?>

			<div class="container">
				<div class="row">
					<div class="col-xs-12 rm-padding">
						<div class='coa-program-list'>
							<h3>COA Public &amp; Emergency Services Programs</h3>
							<div class="container">
							<div class="row">
								<?php if ( have_posts() ) : ?>

								<div class="col-md-4 col-xs-12">
								<div class='jobs toggle-parent'>
							        <span class='toggle'>Associate Degrees</span>
							       	<div class='toggle-content'>
											<h4>Associate Degrees</h4>
											<ul>
												
												<?php $args = array(
														'category_name'=>'public-emergency-services',
														'orderby' => 'date',
														'order'   => 'ASC'
													);

													$servicesDegrees = new WP_Query( $args );

													while ( $servicesDegrees->have_posts() ) : $servicesDegrees->the_post();

													if( have_rows('coa_programs') ):

														while ( have_rows('coa_programs') ) : the_row();

															if( get_sub_field('program_type') == "Associate Degree" ): ?>

																<li><?php the_sub_field('program_title') ?></li>

															<?php endif;
														endwhile;
													endif;
													endwhile;
													wp_reset_postdata(); ?>

											</ul>
										</div>
									
									</div>
								</div>
								<div class="col-md-4 col-xs-12">
								<div class='jobs toggle-parent'>
							        <span class='toggle'>Diplomas</span>
							       	<div class='toggle-content'>
											<h4>Diplomas</h4>
											<ul>

												<?php $args = array(
														'category_name'=>'public-emergency-services',
														'orderby' => 'date',
														'order'   => 'ASC'
													);

													$servicesDiplomas = new WP_Query( $args );

													while ( $servicesDiplomas->have_posts() ) : $servicesDiplomas->the_post();

													if( have_rows('coa_programs') ):

														while ( have_rows('coa_programs') ) : the_row();

															if( get_sub_field('program_type') == "Diploma" ): ?>

																<li><?php the_sub_field('program_title') ?></li>

															<?php endif;
														endwhile;
													endif;
													endwhile;
													wp_reset_postdata(); ?>

											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-xs-12">
								<div class='jobs toggle-parent'>
							        <span class='toggle'>Certificates</span>
							       	<div class='toggle-content'>
											<h4>Certificates</h4>
											<ul>

												<?php $args = array(
														'category_name'=>'public-emergency-services',
														'orderby' => 'date',
														'order'   => 'ASC'
													);

													$servicesCertificates = new WP_Query( $args );

													while ( $servicesCertificates->have_posts() ) : $servicesCertificates->the_post();

													if( have_rows('coa_programs') ):

														while ( have_rows('coa_programs') ) : the_row();

															if( get_sub_field('program_type') == "Certificate" ): ?>

																<li><?php the_sub_field('program_title') ?></li>

															<?php endif;
														endwhile;
													endif;
													endwhile;
													wp_reset_postdata(); ?>

											</ul>
										</div>
									</div>
								</div>
								<?php endif ?>
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

								<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 59 ); }; ?> 

							</div>
							<!--End mc_embed_signup-->
						</div>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
