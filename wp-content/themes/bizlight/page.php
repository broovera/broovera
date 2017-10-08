<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bizlight
 */

get_header(); ?>
<div style="background-image: url('<?php the_field('immagine_di_sfondo');?>')" class="wrapper page-inner-title">
	<header class="entry-header">
	   <div class="titolo"> <h1><?php the_field('titolo'); ?></h1></div>
       <div class="sottotitolo"><?php the_field('sottotitolo'); ?></div>
	</header><!-- .entry-header -->
</div>
<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar(); ?>
</div><!-- #content -->
<?php get_footer(); ?>
