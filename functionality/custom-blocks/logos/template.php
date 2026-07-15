<?php
$logos = get_field( 'logos_list' ) ?: [];
$align_class = !empty( $block['align'] ) ? 'align' . $block['align'] : 'alignfull';

if ( empty( $logos ) ) {
	$theme_uri = get_template_directory_uri();
	$logos = [
		[ 'logo_image' => $theme_uri . '/assets/images/about_post_1.jpg', 'logo_name' => 'FIFA' ],
		[ 'logo_image' => $theme_uri . '/assets/images/about_post_2.jpg', 'logo_name' => 'WOW HYDRATE' ],
		[ 'logo_image' => $theme_uri . '/assets/images/about_post_3.jpg', 'logo_name' => 'Wish' ],
		[ 'logo_image' => $theme_uri . '/assets/images/about_post_4.jpg', 'logo_name' => 'Red Bull' ],
	];
}
?>

<section class="logos-block w-full bg-white py-16 overflow-hidden <?php echo esc_attr( $align_class ); ?>">
	
	<div class="logos-track flex flex-row flex-nowrap items-center gap-[104px]">
		
		<div class="logos-slide flex flex-row flex-nowrap items-center gap-[104px]">
			<?php foreach ( $logos as $logo ) : ?>
				<?php if ( !empty($logo['logo_image']) ) : ?>
					<div class="logo-item flex items-center justify-center flex-shrink-0">
						<img src="<?php echo esc_url( $logo['logo_image'] ); ?>" alt="<?php echo esc_attr( $logo['logo_name'] ?: 'Partner Logo' ); ?>">
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>

		<div class="logos-slide flex flex-row flex-nowrap items-center gap-[104px]" aria-hidden="true">
			<?php foreach ( $logos as $logo ) : ?>
				<?php if ( !empty($logo['logo_image']) ) : ?>
					<div class="logo-item flex items-center justify-center flex-shrink-0">
						<img src="<?php echo esc_url( $logo['logo_image'] ); ?>" alt="<?php echo esc_attr( $logo['logo_name'] ?: 'Partner Logo' ); ?>">
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>

	</div>

</section>
