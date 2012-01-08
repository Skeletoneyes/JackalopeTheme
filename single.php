<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>
	<div id="title-container-wrapper">
		<div class="title-container">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</div><!-- .title-container -->
		<div class='triangle left'> </div>
		<div class='triangle right'> </div>
	</div><!-- #title-container-wrapper -->
	
	<div id="container">
		<div id="primary">
			<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php //toolbox_content_nav( 'nav-above' ); ?>

				<?php get_template_part( 'content' ); ?>

				<?php //toolbox_content_nav( 'nav-below' ); ?>

				<?php //comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>
			<div class="clear"></div>
			</div><!-- #content -->
		<div class="clear"></div>
		</div><!-- #primary -->
		<div class="clear"></div>
	</div><!-- #container -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>