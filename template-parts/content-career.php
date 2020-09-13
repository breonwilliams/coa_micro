<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package COA_Microsite
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="">
		<div class="column-info">
			
			<?php
				$sanitizedTitle = get_the_title();
				$sanitizedTitle = strtolower($sanitizedTitle);
				//Make alphanumeric (removes all other characters)
				$sanitizedTitle = preg_replace("/[^a-z0-9_\s-]/", "", $sanitizedTitle);
				//Clean up multiple dashes or whitespaces
				$sanitizedTitle = preg_replace("/[\s-]+/", " ", $sanitizedTitle);
				//Convert whitespaces and underscore to dash
				$sanitizedTitle = preg_replace("/[\s_]/", "-", $sanitizedTitle);
			?>
			<a id="<?php echo $sanitizedTitle; ?>"></a>

			<?php if ( get_field('subtitle') == '' || get_field('subtitle') == false ) : ?>

				<?php the_title( sprintf( '<h2>', esc_url( get_permalink() ) ), '</h2>' ); ?>

			<?php else : ?>

				<?php the_title( sprintf( '<h2>', esc_url( get_permalink() ) ), '' ); ?>

				<?php echo '<span>('; the_field('subtitle'); echo ')</span></h2>'; ?>

			<?php endif; ?>

			<?php $image = get_field('worker_photo'); ?>

			<img alt="<?php echo $image['alt']; ?>" class="bk-img" src="<?php echo $image['url']; ?>"/>

			<div class='info'>
			
				<?php the_content(); ?>
				
				 <div class='jobs toggle-parent'>
			        <span class='toggle'>Where You'll Work</span>
			       	<div class='toggle-content'>

						<?php the_field('career_where'); ?>
					
					</div>
				</div>
				<div class='programs toggle-parent'>
					<span class='toggle toggle2'>COA Programs</span>
					<div class='toggle-content'>
						<h3>COA Programs</h3>
						<ul>

							<?php if( have_rows('coa_programs') ): ?>

								<?php while ( have_rows('coa_programs') ) : the_row(); ?>

									<li><?php the_sub_field('program_title') ?><span><?php the_sub_field('program_length') ?></span></li>

								<?php endwhile; ?>

							<?php endif; ?>

						</ul>
					</div>
				</div>
				<!--a id="" class='bottom-form-anchor button' href='#mc-form-header'>Learn More</a-->
			</div>
		</div>
		<div class="column-stats">
			<div class="salary">
				<h3>Salary in NC</h3>
	      		<hr>
	      		<ul>
	        		<li>
	          			<h4>Entry</h4>
						<p><?php the_field('entry_salary'); ?></p>
					</li>
					<li>
	          			<h4>Median</h4>
						<p><?php the_field('med_salary'); ?></p>
					</li>
					<li>
	          			<h4>Experienced</h4>
						<p><?php the_field('exp_salary'); ?></p>
					</li>
				</ul>
			</div>
			<div class='outlook'>
				<h3>Job Outlook</h3>
				<div class='stat'>
					<p class='number'>+<?php the_field('job_percent'); ?>%</p>
					<p class='byline'>Growth</p>
					<p class='byline-2'>in NC by <?php the_field('job_year'); ?></p>
				</div>
			</div>
			<div class='qualifications'>
				<h3>Qualifications</h3>
			
				<p><?php the_field('job_qualifications'); ?></p>

			</div>
		</div>
	</section>
</article><!-- #post-## -->
