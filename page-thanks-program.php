<?php
/*
 * Template Name: Thanks Program
 */

get_header('thanks'); ?>

	<div id="primary" class="content-area home">
		<main id="main" class="site-main" role="main">

			<section class="diamond-wrap campaign-header">
				<div class="container">
					<?php the_title( sprintf( '<h1>', esc_url( get_permalink() ) ), '</h1>' ); ?>
				</div>
			</section>

			<section class="thank-you-content-wrap">
				<div class="container">
					<?php the_content(); ?>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<!-- <?php # get_sidebar(); ?>  -->

<?php get_footer('thanks'); ?>
