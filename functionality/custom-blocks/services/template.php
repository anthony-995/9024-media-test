<?php
$service_title_1 = get_field( 'service_title_1' ) ?: 'COMMERCIAL';
$service_bg_type_1 = get_field( 'service_bg_type_1' ) ?: 'image';
$service_image_1 = get_field( 'service_image_1' );
$service_video_1 = get_field( 'service_video_1' );

$subtitles_1 = [];
if ( have_rows( 'service_subtitles_1' ) ) {
	while ( have_rows( 'service_subtitles_1' ) ) {
		the_row();
		$subtitles_1[] = get_sub_field( 'subtitle_text' );
	}
}
$subtitle_str_1 = !empty($subtitles_1) ? implode( ' | ', $subtitles_1 ) : 'PLAYERS | BRANDS | AGENCIES | CLUBS';


$service_title_2 = get_field( 'service_title_2' ) ?: 'SOCIAL';
$service_bg_type_2 = get_field( 'service_bg_type_2' ) ?: 'image';
$service_image_2 = get_field( 'service_image_2' );
$service_video_2 = get_field( 'service_video_2' );

$subtitles_2 = [];
if ( have_rows( 'service_subtitles_2' ) ) {
	while ( have_rows( 'service_subtitles_2' ) ) {
		the_row();
		$subtitles_2[] = get_sub_field( 'subtitle_text' );
	}
}
$subtitle_str_2 = !empty($subtitles_2) ? implode( ' | ', $subtitles_2 ) : 'PLAYERS | BRANDS | CLUBS | AGENCIES';


$service_title_3 = get_field( 'service_title_3' ) ?: 'PRODUCTION';
$service_bg_type_3 = get_field( 'service_bg_type_3' ) ?: 'image';
$service_image_3 = get_field( 'service_image_3' );
$service_video_3 = get_field( 'service_video_3' );

$subtitles_3 = [];
if ( have_rows( 'service_subtitles_3' ) ) {
	while ( have_rows( 'service_subtitles_3' ) ) {
		the_row();
		$subtitles_3[] = get_sub_field( 'subtitle_text' );
	}
}
$subtitle_str_3 = !empty($subtitles_3) ? implode( ' | ', $subtitles_3 ) : 'PLAYERS | BRANDS | AGENCIES';

$align_class = $block['align'] ? 'align' . $block['align'] : 'alignfull';
?>

<section class="services-block relative w-full h-[400px] md:h-[600px] lg:h-[1082px] bg-brand-black overflow-hidden flex items-center justify-center <?php echo esc_attr( $align_class ); ?>">
	
	<div class="absolute inset-0 z-0">
		<div class="service-bg-layer absolute inset-0 opacity-0 transition-opacity duration-700 ease-in-out" data-bg-index="1">
			<?php if ( 'video' === $service_bg_type_1 && $service_video_1 ) : ?>
				<video autoplay loop muted playsinline class="w-full h-full object-cover">
					<source src="<?php echo esc_url( $service_video_1 ); ?>" type="video/mp4">
				</video>
			<?php elseif ( 'image' === $service_bg_type_1 && $service_image_1 ) : ?>
				<img src="<?php echo esc_url( $service_image_1 ); ?>" class="w-full h-full object-cover" alt="<?php echo esc_attr( $service_title_1 ); ?>">
			<?php endif; ?>
		</div>

		<div class="service-bg-layer absolute inset-0 opacity-0 transition-opacity duration-700 ease-in-out" data-bg-index="2">
			<?php if ( 'video' === $service_bg_type_2 && $service_video_2 ) : ?>
				<video autoplay loop muted playsinline class="w-full h-full object-cover">
					<source src="<?php echo esc_url( $service_video_2 ); ?>" type="video/mp4">
				</video>
			<?php elseif ( 'image' === $service_bg_type_2 && $service_image_2 ) : ?>
				<img src="<?php echo esc_url( $service_image_2 ); ?>" class="w-full h-full object-cover" alt="<?php echo esc_attr( $service_title_2 ); ?>">
			<?php endif; ?>
		</div>

		<div class="service-bg-layer absolute inset-0 opacity-0 transition-opacity duration-700 ease-in-out" data-bg-index="3">
			<?php if ( 'video' === $service_bg_type_3 && $service_video_3 ) : ?>
				<video autoplay loop muted playsinline class="w-full h-full object-cover">
					<source src="<?php echo esc_url( $service_video_3 ); ?>" type="video/mp4">
				</video>
			<?php elseif ( 'image' === $service_bg_type_3 && $service_image_3 ) : ?>
				<img src="<?php echo esc_url( $service_image_3 ); ?>" class="w-full h-full object-cover" alt="<?php echo esc_attr( $service_title_3 ); ?>">
			<?php endif; ?>
		</div>

		<div class="absolute inset-0 bg-[#1D1E1C] mix-blend-multiply opacity-80 z-10 pointer-events-none"></div>
	</div>

	<div class="relative z-20 w-full px-4 md:px-12 flex flex-col items-center justify-center">
		
		<div class="services-menu flex flex-row flex-nowrap items-center justify-center gap-4 md:gap-8 lg:gap-16 relative w-full select-none">
			
			<div class="hover-square absolute w-[24px] h-[24px] bg-[#00D2FF] opacity-0 pointer-events-none z-30"></div>

			<div class="services-menu-item cursor-pointer relative py-4 px-2 md:px-6 lg:px-10 text-center flex flex-col items-center" data-index="1">
				<div class="service-item-title font-heading text-[5vw] md:text-[6vw] lg:text-[100px] font-medium leading-none uppercase tracking-tight select-none">
					<?php echo esc_html( $service_title_1 ); ?>
				</div>
				<div class="service-item-subtitle font-heading text-[10px] md:text-xs lg:text-base text-white opacity-0 transform translate-y-2 transition-all duration-300 absolute bottom-[-30px] whitespace-nowrap">
					<?php echo esc_html( $subtitle_str_1 ); ?>
				</div>
			</div>

			<div class="services-menu-item cursor-pointer relative py-4 px-2 md:px-6 lg:px-10 text-center flex flex-col items-center" data-index="2">
				<div class="service-item-title font-heading text-[5vw] md:text-[6vw] lg:text-[100px] font-medium leading-none uppercase tracking-tight select-none">
					<?php echo esc_html( $service_title_2 ); ?>
				</div>
				<div class="service-item-subtitle font-heading text-[10px] md:text-xs lg:text-base text-white opacity-0 transform translate-y-2 transition-all duration-300 absolute bottom-[-30px] whitespace-nowrap">
					<?php echo esc_html( $subtitle_str_2 ); ?>
				</div>
			</div>

			<div class="services-menu-item cursor-pointer relative py-4 px-2 md:px-6 lg:px-10 text-center flex flex-col items-center" data-index="3">
				<div class="service-item-title font-heading text-[5vw] md:text-[6vw] lg:text-[100px] font-medium leading-none uppercase tracking-tight select-none">
					<?php echo esc_html( $service_title_3 ); ?>
				</div>
				<div class="service-item-subtitle font-heading text-[10px] md:text-xs lg:text-base text-white opacity-0 transform translate-y-2 transition-all duration-300 absolute bottom-[-30px] whitespace-nowrap">
					<?php echo esc_html( $subtitle_str_3 ); ?>
				</div>
			</div>

		</div>

	</div>

</section>
