<?php
/**
 * Main fallback index template
 *
 * @package    WordPress
 * @subpackage 9024_Media
 * @since      1.0
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content container mx-auto px-6 py-12">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; endif; ?>
</main>

<?php
get_footer();
