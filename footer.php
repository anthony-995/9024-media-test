<?php
/**
 * The footer template for the 9024 Media theme
 *
 * @package    WordPress
 * @subpackage 9024_Media
 * @since      1.0
 */
?>

<footer id="colophon" class="site-footer bg-brand-black text-white py-16 border-t border-solid border-neutral-900">
	<div class="max-w-[1440px] mx-auto px-6 md:px-12 flex flex-col md:flex-row justify-between items-center gap-8">
		
		<div class="footer-info text-sm text-neutral-400">
			<p>&copy; <?php echo date( 'Y' ); ?> 9024 Media Ltd. All Rights Reserved.</p>
		</div>
		
		<div class="footer-links flex gap-8 text-sm text-neutral-400">
			<a href="#" class="hover:text-brand-orange transition-colors duration-300">Privacy Policy</a>
			<a href="#" class="hover:text-brand-orange transition-colors duration-300">Terms of Use</a>
		</div>

	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
