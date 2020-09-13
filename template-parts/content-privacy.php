<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package COA_Microsite
 */

?>

			</div>
		</section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<section class="article-content campaign-content">

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<div class="entry-content">					
							
								<?php the_content(); ?>
								<footer class="entry-footer">
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
								</footer><!-- .entry-footer -->
							
							</div><!-- .entry-content -->

						</article><!-- #post-## -->	

					</section>
				</div>
