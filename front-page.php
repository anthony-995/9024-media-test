<?php
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
