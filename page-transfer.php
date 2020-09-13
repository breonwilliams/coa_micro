<?php
/*
 * Template Name: Four Year Transfer
 */

get_header(); ?>

	<div id="primary" class="content-area home category">
		<main id="main" class="site-main" role="main">
			<section id="cta-bar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<a href="#mc-form-header">Learn more about Four-Year Transfers<span class="fa fa-arrow-circle-down" style="font-family:FontAwesome; margin-left:30px;"></span></a>
						</div>
					</div>
				</div>
			</section>
			<section class="diamond-wrap campaign-header">
				<div class="container">

					<?php the_title( sprintf( '<h1>', esc_url( get_permalink() ) ), '</h1>' ); ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'transfer' ); ?>

					<?php endwhile; // End of the loop. ?>

				</div>
			</section>
			<div class="career-wrap transfer-wrap">
				<article <?php post_class(); ?>>
					<section class="">
						<div class="column-info">
							<h2><?php the_field('first_section_header'); ?></h2>
							<?php $image = get_field('first_section_photo'); ?>
							<img alt="<?php echo $image['alt']; ?>" class="bk-img" src="<?php echo $image['url']; ?>"/>	
							<div class='info'>
								<?php the_field('first_section_body'); ?>
							</div>
						</div>
						<div class="column-stats">
							<div class="savings">
								<h3>Save <span><?php the_field('first_section_savings'); ?></span></h3>
								<p>on college, depending on your four-year institution</p>
							</div>
						</div>
					</section>
				</article>
				<article <?php post_class(); ?>>
					<section class="dark">
						<div class="column-info">
							<h2><?php the_field('second_section_header'); ?></h2>
							<?php $image = get_field('second_section_photo'); ?>
							<img alt="<?php echo $image['alt']; ?>" class="bk-img" src="<?php echo $image['url']; ?>"/>	
							<div class='info'>
								<?php the_field('second_section_body'); ?>
							</div>
						</div>
						<div class="column-stats">
							<div class="college-list">
								<?php the_field('second_section_list'); ?>
							</div>
						</div>
					</section>
				</article>
				<article <?php post_class(); ?>>
					<section class="">
						<div class="column-info">
							<h2><?php the_field('third_section_header'); ?></h2>
							<?php $image = get_field('third_section_photo'); ?>
							<img alt="<?php echo $image['alt']; ?>" class="bk-img" src="<?php echo $image['url']; ?>"/>	
							<div class='info'>
								<?php the_field('third_section_body'); ?>
							</div>
						</div>
						<div class="column-stats">
							<div class="free-hours">
								<h3><span class="hour-span"><?php the_field('third_section_hours'); ?></span>
								<span>Free</span></h3>
								<p class="credit-hours">Credit Hours or More</p>
								<div>
									<div class="left-list">
										<?php the_field('third_section_programs_left'); ?>
									</div>
									<div class="right-list">
										<?php the_field('third_section_programs_right'); ?>
									</div>
								</div>
							</div>
						</div>
					</section>
				</article>
				<article <?php post_class(); ?>>
					<section class="dark">
						<div class="column-info">
							<h2><?php the_field('fourth_section_header'); ?></h2>
							<?php $image = get_field('fourth_section_photo'); ?>
							<img alt="<?php echo $image['alt']; ?>" class="bk-img" src="<?php echo $image['url']; ?>"/>	
							<div class='info'>
								<?php the_field('fourth_section_body'); ?>
							</div>
						</div>
						<div class="column-stats line-bg">
							<div class="row">
								<div class="col-xs-4">
									<h3><?php the_field('fourth_section_coa_gpa'); ?></h3>
								</div>
								<div class="col-xs-8">
									<p>Junior GPA of students who earn an associate degree <span>at COA</span> before transferring</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4">
									<p class="versus">vs.</p>
								</div>
								<div class="col-xs-8">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4">
									<h3><?php the_field('fourth_section_4_year_gpa'); ?></h3>
								</div>
								<div class="col-xs-8">
									<p>GPA of students who start at a <span>four-year institution</span></p>
								</div>
							</div>
						</div>
					</section>
				</article>
				<article <?php post_class(); ?>>
					<section class="">
						<div class="column-info">
							<h2><?php the_field('fifth_section_header'); ?></h2>
							<?php $image = get_field('fifth_section_photo'); ?>
							<img alt="<?php echo $image['alt']; ?>" class="bk-img" src="<?php echo $image['url']; ?>"/>	
							<div class='info'>
								<?php the_field('fifth_section_body'); ?>
							</div>
						</div>
						<div class="column-stats">
							<div class="sizes-degrees">
								<h3><span><?php the_field('fifth_section_avg_class_size'); ?></span></h3>
								<p>average class size</p>
								<h3><span><?php the_field('fifth_section_highest_degree'); ?>%</span></h3>
								<p>of college transfer classes are taught by teachers who have master's or doctorate degrees</p>
							</div>
						</div>
					</section>
				</article>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 rm-padding">
						<div class='coa-program-list'>
							<h3>COA Transfer and Dual Enrollment Programs</h3>
							<div class="container">
								<div class="row">
									<div class="col-md-4 col-xs-12">
										<div class='jobs toggle-parent'>
							    		    <span class='toggle'>Four-Year Transfer Programs</span>
							       			<div class='toggle-content'>
												<h4>Four-Year Transfer Programs</h4>
												<?php the_field('last_section_transfer_programs'); ?>
											</div>
										</div>
									</div>
									<div class="col-md-8 col-xs-12">
										<div class='jobs toggle-parent'>
							        		<span class='toggle'>Dual Enrollment Pathway Programs</span>
							       			<div class='toggle-content'>
												<h4>Dual Enrollment</h4>
												<div class="col-md-6">
													<?php the_field('last_section_dual_enrollment'); ?>
												</div>
												<div class="col-md-6">
													<?php the_field('last_section_dual_enrollment_2'); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<p class='footnote-col'><span>*</span> All programs endorsed by NC Articulation and/or Other Transfer Agreements</p>
										<p class="footnote-row"><span>*</span> All programs endorsed by NC Articulation and/or Other Transfer Agreements</p>
									</div>
								</div>	
							</div>
						</div>
						<div class='mc-form-header' id="mc-form-header">
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
						</div>
						<div id="hs-form" class="mc-form career-form">
							<div id="mc_error_message">
								<p>Please input a valid email address and select an option from the drop-down list below.</p>
							</div>
							<!-- Begin MailChimp Signup Form -->
							<div id="mc_embed_signup">

								<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); }; ?> 
								
							</div>
							<!--End mc_embed_signup-->
						</div>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<!-- <?php # get_sidebar(); ?>  -->

<?php get_footer(); ?>
