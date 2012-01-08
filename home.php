<?php
	/**
	 * The main template file.
	 *
	 * This is the most generic template file in a WordPress theme
	 * and one of the two required files for a theme (the other being style.css).
	 * It is used to display a page when nothing more specific matches a query.
	 * E.g., it puts together the home page when no home.php file exists.
	 * Learn more: http://codex.wordpress.org/Template_Hierarchy
	 *
	 * @package WordPress
	 * @subpackage Toolbox
	 * @since Toolbox 0.1
	 */
	
	get_header(); ?>
<!-- #headwrapper -->
		<div id="primary">
			<div id="content" role="main">
			
			<?php $the_query = new WP_Query ('post_type=any' ); ?>
			
			<?php if ( $the_query->have_posts() ) : ?>
		
					<p class='categorytitle'>Game Development:</p>
					
					<?php /* Start the Loop - Game Development */ ?>
					
					<?php $i = 0;/* Initialize the Counter */ ?>				
					<?php /* Start the Loop - Client Work */ ?>
					<?php $cat = 5;/* Set the Category */ ?>
					<?php 
						$args = array( 'numberposts' => 7, 'category' => $cat );
						$myposts = get_posts( $args );
						$i = 0;/* Initialize the Counter */ 
					?>
					<?php foreach( $myposts as $post ) : setup_postdata($post); ?>
						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to overload this in a child theme then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							if (in_category ($cat,$post)) {
								get_template_part( 'content-preview', get_post_format() );
								$i++;
							}
							else {
								//echo 'false';
								echo "<div class='post'>";
								the_title();
								the_category();
								echo "</div>";
							}
						?>
	
					<?php endforeach; ?>

					<p class='categorytitle' style='clear:both;'>Client Work:</p>
					
					<?php /* Start the Loop - Client Work */ ?>
					<?php $cat = 10;/* Set the Category */ ?>
					<?php 
						$args = array( 'numberposts' => 7, 'category' => $cat );
						$myposts = get_posts( $args );
						$i = 0;/* Initialize the Counter */ 
					?>
					<?php foreach( $myposts as $post ) : setup_postdata($post); ?>
					<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to overload this in a child theme then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							if (in_category ('clientwork')) {
								get_template_part( 'content', 'preview' );
								$i++;
							}
							else {
								echo "<div class='post'>";
								the_title();
								the_category();
								echo "</div>";
							}
						?>
	
					<?php endforeach; ?>
			
				<?php //toolbox_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'toolbox' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'toolbox' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->
			
			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>