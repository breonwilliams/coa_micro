<?php
/*
 * Template Name: Program
 */

get_header('program'); ?>

	<div id="primary" class="content-area landing">
		<main id="main" class="site-main" role="main">

			<section class="hero-wrap diamond-left-wrap">
				<div class="container-fluid">
					<div class="edit-container">
						<?php
							edit_post_link(
								sprintf(
									/* translators: %s: Name of current post */
									esc_html__( 'Edit %s', 'coa_micro' ),
									the_title( '<span class="screen-reader-text">"', '"</span>', false )
								),
								'<span class="edit-link">',
								'</span>'
							);
						?>
					</div>
					<div class="row">
						<div class="img-container">
							<?php
							$image = get_field('hero_image');
							if( !empty($image) ): ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<?php endif; ?>

						</div>
					</div>
					<div class="fact-container container">
						<?php if( have_rows('factoid') ): ?>

							<?php while ( have_rows('factoid') ) : the_row(); ?>
								<div class="factoid">
									<div class="text-container">
								        <h2><?php the_sub_field('heading'); ?></h2>
								        <h3><?php the_sub_field('subheading'); ?></h3>
								        <hr>
								        <?php the_sub_field('description'); ?>
							     	</div>
						        </div>
							<?php endwhile; ?>
						<?php else : ?>

						<?php endif; ?>
					</div>
				</div>
			</section>

			<section class="intro-wrap diamond-right-wrap">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<?php the_title( '<h2>', '</h2>' ); ?>
							<?php the_field('intro_copy'); ?>
						</div>
					</div>
				</div>
			</section>

			<?php if( have_rows('testimonial') ): ?>
				<section class="testimonial-wrap">
					<div class="container">
						<div class="row">
						<?php while ( have_rows('testimonial') ) : the_row(); ?>
							<div class="testimonial">
								<div class="img-container col-xs-12 col-md-4">
									<?php
									$image = get_sub_field('image');
									if( !empty($image) ): ?>
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									<?php endif; ?>
								</div>

								<div class="text-container col-xs-12 col-md-8">
									<p><span class="fa fa-quote-left" aria-hidden="true"></span>
							        <?php the_sub_field('quote'); ?> <span class="fa fa-quote-right" aria-hidden="true"></span></p>
							        <h3><?php the_sub_field('name'); ?></h3>
						        </div>
					        </div>
						<?php endwhile; ?>
						</div>
					</div>
				</section>
			<?php endif; ?>

			<?php if( have_rows('overlay_center') ): ?>
				<section class="overlay-wrap">
					<div class="container-fluid">
						<div class="row">
						<?php while ( have_rows('overlay_center') ) : the_row(); ?>
							<div class="img-container overlay-center">
								<?php
								$image = get_sub_field('image');
								if( !empty($image) ): ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?>
								<div class="text-container">
							        <?php the_sub_field('copy'); ?>
						        </div>
					        </div>
						<?php endwhile; ?>
						</div>
					</div>
				</section>
			<?php endif; ?>

			<?php if( have_rows('image_section_right') ): ?>
				<section class="img-section-wrap">
					<div class="container">
						<div class="row">
						<?php while ( have_rows('image_section_right') ) : the_row(); ?>
							<div class="text-container col-xs-12 col-md-8">
						        <?php the_sub_field('copy'); ?>
					        </div>
					        <div class="img-container col-xs-12 col-md-4">
					        	<?php
					        	$image = get_sub_field('image');
					        	if( !empty($image) ): ?>
					        		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					        	<?php endif; ?>
					        </div>
						<?php endwhile; ?>
						</div>
					</div>
				</section>
			<?php endif; ?>

			<?php if( have_rows('overlay_left') ): ?>
				<section class="overlay-wrap">
					<div class="container-fluid">
						<div class="row">
						<?php while ( have_rows('overlay_left') ) : the_row(); ?>
							<div class="img-container overlay-left">
								<?php
								$image = get_sub_field('image');
								if( !empty($image) ): ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?>
								<div class="text-container">
							        <?php the_sub_field('copy'); ?>
						        </div>
					        </div>
						<?php endwhile; ?>
						</div>
					</div>
				</section>
			<?php endif; ?>

			<?php if( have_rows('image_section_left') ): ?>
				<section class="img-section-wrap">
					<div class="container">
						<div class="row">
						<?php while ( have_rows('image_section_left') ) : the_row(); ?>
							<div class="img-container col-xs-12 col-md-4">
								<?php
								$image = get_sub_field('image');
								if( !empty($image) ): ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?>
							</div>
							<div class="text-container col-xs-12 col-md-8">
						        <?php the_sub_field('copy'); ?>
					        </div>
						<?php endwhile; ?>
						</div>
					</div>
				</section>
			<?php endif; ?>

             <?php if( have_rows('overlay_right') ): ?>
				<section class="overlay-wrap">
					<div class="container-fluid">
						<div class="row">
						<?php while ( have_rows('overlay_right') ) : the_row(); ?>
							<div class="img-container overlay-right">
								<?php
								$image = get_sub_field('image');
								if( !empty($image) ): ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?>
								<div class="text-container">
							        <?php the_sub_field('copy'); ?>
						        </div>
					        </div>
						<?php endwhile; ?>
						</div>
					</div>
				</section>
			<?php endif; ?>

			<section id="<?php if ( get_field( 'cta_bar_custom_url' ) ): ?>cta-bar-custom<?php else: // field_name returned false ?>cta-bar<?php endif; // end of if field_name logic ?>">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<a href="<?php if ( get_field( 'cta_bar_custom_url' ) ): ?><?php the_field('cta_bar_custom_url'); ?><?php else: // field_name returned false ?>#form-anchor<?php endif; // end of if field_name logic ?>">

								<?php if ( get_field( 'cta_bar_custom_text' ) ): ?>

								<?php the_field('cta_bar_custom_text'); ?>

								<?php else: // field_name returned false ?>

								See if the <?php the_title( '<span>', '</span>' ); ?> is right for you. <span class="fa fa-download"></span>

								<?php endif; // end of if field_name logic ?>
							</a>
						</div>
					</div>
				</div>
			</section>
			<section class="form-section-wrap">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="form-wrapper" id="form-anchor">
								<div class="form-container">
									<span id="close-form" class="fa fa-times" aria-hidden="true"></span>
									<p class="form-header">Yes! I want to take the quiz to see if the <?php the_title( '<span>', '</span>' ); ?> is right for me.</p>
									<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 302 ); }; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<?php
				/*
				$postid = get_the_ID();
                echo $postid;
                */
            ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
