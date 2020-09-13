<?php
/*
 * Template Name: Thanks
 */

get_header('thanks'); ?>

	<div id="primary" class="content-area home">
		<main id="main" class="site-main" role="main">
			<section class="diamond-wrap campaign-header">
				<div class="container">

					<?php the_title( sprintf( '<h1>', esc_url( get_permalink() ) ), '</h1>' ); ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'thanks' ); ?>

					<?php endwhile; // End of the loop. ?>

				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<!-- <?php # get_sidebar(); ?>  -->

<?php get_footer('thanks'); ?>
