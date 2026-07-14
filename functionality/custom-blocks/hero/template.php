<?php
$bg_type = get_field( 'bg_type' ) ?: 'image';
$bg_image = get_field( 'bg_image' );
$bg_video = get_field( 'bg_video' );
$heading = get_field( 'heading' );
$subheading = get_field( 'subheading' );
$align_class = $block['align'] ? 'align' . $block['align'] : 'alignfull';
?>

<section class="hero-block relative w-full h-screen bg-brand-black flex items-center justify-center overflow-hidden <?php echo esc_attr( $align_class ); ?>">
	
	<div class="absolute inset-0 z-0">
		<?php if ( 'video' === $bg_type && $bg_video ) : ?>
			<video autoplay loop muted playsinline class="w-full h-full object-cover">
				<source src="<?php echo esc_url( $bg_video ); ?>" type="video/mp4">
			</video>
		<?php elseif ( 'image' === $bg_type && $bg_image ) : ?>
			<img src="<?php echo esc_url( $bg_image ); ?>" class="w-full h-full object-cover" alt="<?php echo esc_attr( $heading ); ?>">
		<?php else : ?>
			<div class="w-full h-full bg-neutral-950"></div>
		<?php endif; ?>
	</div>

	<div class="relative z-10 max-w-[1440px] w-full px-[48px] pt-[86px] flex flex-col items-center justify-center text-center">

		<?php if ( $heading ) : ?>
			<h1 class="text-white text-5xl md:text-8xl lg:text-[120px] font-heading font-medium tracking-tight mb-6">
				<?php echo esc_html( $heading ); ?>
			</h1>
		<?php endif; ?>
		
		<?php if ( $subheading ) : ?>
			<p class="text-white/80 text-lg md:text-xl font-body max-w-2xl">
				<?php echo esc_html( $subheading ); ?>
			</p>
		<?php endif; ?>
	</div>

</section>
