<?php
/**
 * The front page template file for rendering custom Gutenberg blocks.
 *
 * @package    WordPress
 * @subpackage 9024_Media
 * @since      1.0
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	<?php endwhile; endif; ?>
</main>

<?php
get_footer();
