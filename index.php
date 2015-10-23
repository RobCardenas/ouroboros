<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ouroboros
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<!-- Main Content -->
		<div class="container main-content">
			<div class="row">

				<?php if ( have_posts() ) : ?>

				<?php if ( is_home() && ! is_front_page() ) : ?>

				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
			
			<?php /* Start the Loop */ ?>
			
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="col-xs-6 col-sm-4 col-md-4">
				<div class="thumbnail">
					<a href="<?php the_permalink(); ?>">
						<?php if (has_post_thumbnail()) {
							the_post_thumbnail('thumbnail');
						}
						?>
					
					<div class="caption">
						<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
					</div>
				</div>
			</div>
				<?php endwhile; ?>
		
		
				<?php the_posts_navigation(); ?>


	<?php else : ?>

	<?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
