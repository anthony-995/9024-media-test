<?php
$section_title = get_field( 'section_title' ) ?: 'OUR WORK';
$see_all_text = get_field( 'see_all_text' ) ?: 'SEE ALL CASE STUDIES';
$see_all_url = get_field( 'see_all_url' ) ?: '#';
$case_studies = get_field( 'case_studies' ) ?: [];

$theme_uri = get_template_directory_uri();
$default_cases = [
	[
		'case_title' => 'ONEPLUS+',
		'case_hover_title' => 'ONEPLUS+',
		'case_desc' => 'We launched OnePlus flagship devices to a sport-loving demographic, driving record engagement rates across Instagram and TikTok.',
		'case_bg_type' => 'image',
		'case_image' => $theme_uri . '/assets/images/about_post_1.jpg',
		'case_link' => '#'
	],
	[
		'case_title' => 'RED BULL',
		'case_hover_title' => 'RED BULL',
		'case_desc' => 'We partnered with Red Bull to build the Red Bull Neymar Jr’s Five brand and community across Facebook and Instagram, as well as growing participation in the event among the 16-25 demographic.',
		'case_bg_type' => 'image',
		'case_image' => $theme_uri . '/assets/images/about_post_2.jpg',
		'case_link' => '#'
	],
	[
		'case_title' => 'ABOUT YOU',
		'case_hover_title' => 'ABOUT YOU',
		'case_desc' => 'Driving Gen-Z fashion awareness through high-impact social-first content campaigns with top tier European football clubs.',
		'case_bg_type' => 'image',
		'case_image' => $theme_uri . '/assets/images/about_post_3.jpg',
		'case_link' => '#'
	],
	[
		'case_title' => 'WISH.COM',
		'case_hover_title' => 'WISH.COM',
		'case_desc' => 'Re-inventing e-commerce marketing through interactive social media gamification and global athlete partnerships.',
		'case_bg_type' => 'image',
		'case_image' => $theme_uri . '/assets/images/about_post_4.jpg',
		'case_link' => '#'
	]
];

for ($i = 0; $i < 4; $i++) {
	if (!isset($case_studies[$i])) {
		$case_studies[$i] = $default_cases[$i];
	}
}

$align_class = $block['align'] ? 'align' . $block['align'] : 'alignfull';
?>

<section class="work-block relative w-full bg-white py-24 lg:py-32 overflow-hidden <?php echo esc_attr( $align_class ); ?>">
	
	<div class="max-w-[1440px] mx-auto px-6 md:px-12 relative z-10 flex flex-col items-center">
		
		<h2 class="work-section-title font-heading text-[60px] md:text-[180px] lg:text-[300px] font-medium leading-[0.8] text-[#1D1E1C] uppercase tracking-tighter mb-16 lg:mb-24 select-none text-center">
			<?php echo esc_html( $section_title ); ?>
		</h2>

		<div class="work-grid flex flex-col gap-[26px] items-start justify-center w-full relative">
			
			<div class="work-col-left">
				
				<?php if (isset($case_studies[0])) : $case = $case_studies[0]; ?>
					<div class="relative w-full">
						<div class="work-card card-1 group" data-card-id="1">
							<div class="absolute inset-0 z-0 bg-neutral-900">
								<?php if ( 'video' === $case['case_bg_type'] && $case['case_video'] ) : ?>
									<video autoplay loop muted playsinline class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-700">
										<source src="<?php echo esc_url( $case['case_video'] ); ?>" type="video/mp4">
									</video>
								<?php elseif ( $case['case_image'] ) : ?>
									<img src="<?php echo esc_url( $case['case_image'] ); ?>" class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-700" alt="<?php echo esc_attr( $case['case_title'] ); ?>">
								<?php endif; ?>
							</div>
							<div class="card-initial-overlay absolute inset-0 flex items-center justify-center z-10 group-hover:opacity-0 transition-opacity duration-500">
								<div class="card-initial-bg-overlay absolute inset-0 pointer-events-none"></div>
								<h3 class="card-initial-title font-heading text-[32px] md:text-[60px] lg:text-[100px] font-medium uppercase tracking-tight text-[#FB3C1E] relative z-10">
									<?php echo esc_html( $case['case_title'] ); ?>
								</h3>
							</div>
							<div class="card-hover-overlay absolute inset-0 flex flex-col items-center justify-center p-6 md:p-12 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-20">
								<h3 class="card-hover-title font-heading text-[24px] md:text-[40px] lg:text-[50px] font-medium uppercase tracking-tight text-white mb-4">
									<?php echo esc_html( $case['case_hover_title'] ); ?>
								</h3>
								<p class="card-hover-desc font-body text-[14px] md:text-[16px] lg:text-[24px] leading-relaxed text-white text-center mb-8 max-w-[500px]">
									<?php echo esc_html( $case['case_desc'] ); ?>
								</p>
								<a href="<?php echo esc_url( $case['case_link'] ); ?>" class="card-hover-btn bg-[#FB3C1E] text-white px-8 py-4 font-heading text-[16px] lg:text-[18px] font-bold uppercase tracking-wider transition-transform duration-300 hover:scale-105">
									VIEW CASE STUDY
								</a>
							</div>
						</div>
						<div class="work-pixel-left absolute left-[-60px] md:left-[-100px] lg:left-[-140px] top-1/2 -translate-y-1/2 z-0 pointer-events-none select-none">
							<svg width="126" height="215" viewBox="0 0 126 215" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.25" d="M126 29H97V0H126V29Z" fill="#1D1E1C"/>
								<path opacity="0.25" d="M16 84H0V68H16V84Z" fill="#1D1E1C"/>
								<path d="M48 215H16V183H48V215Z" fill="#1D1E1C"/>
							</svg>
						</div>
					</div>
				<?php endif; ?>

				<?php if (isset($case_studies[2])) : $case = $case_studies[2]; ?>
					<div class="work-card card-3 group" data-card-id="3">
						<div class="absolute inset-0 z-0 bg-neutral-900">
							<?php if ( 'video' === $case['case_bg_type'] && $case['case_video'] ) : ?>
								<video autoplay loop muted playsinline class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-700">
									<source src="<?php echo esc_url( $case['case_video'] ); ?>" type="video/mp4">
								</video>
							<?php elseif ( $case['case_image'] ) : ?>
								<img src="<?php echo esc_url( $case['case_image'] ); ?>" class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-700" alt="<?php echo esc_attr( $case['case_title'] ); ?>">
							<?php endif; ?>
						</div>
						<div class="card-initial-overlay absolute inset-0 flex items-center justify-center z-10 group-hover:opacity-0 transition-opacity duration-500">
							<div class="card-initial-bg-overlay absolute inset-0 pointer-events-none"></div>
							<h3 class="card-initial-title font-heading text-[32px] md:text-[60px] lg:text-[100px] font-medium uppercase tracking-tight text-[#FB3C1E] relative z-10">
								<?php echo esc_html( $case['case_title'] ); ?>
							</h3>
						</div>
						<div class="card-hover-overlay absolute inset-0 flex flex-col items-center justify-center p-6 md:p-12 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-20">
							<h3 class="card-hover-title font-heading text-[24px] md:text-[40px] lg:text-[50px] font-medium uppercase tracking-tight text-white mb-4">
								<?php echo esc_html( $case['case_hover_title'] ); ?>
							</h3>
							<p class="card-hover-desc font-body text-[14px] md:text-[16px] lg:text-[24px] leading-relaxed text-white text-center mb-8 max-w-[500px]">
								<?php echo esc_html( $case['case_desc'] ); ?>
							</p>
							<a href="<?php echo esc_url( $case['case_link'] ); ?>" class="card-hover-btn bg-[#FB3C1E] text-white px-8 py-4 font-heading text-[16px] lg:text-[18px] font-bold uppercase tracking-wider transition-transform duration-300 hover:scale-105">
									VIEW CASE STUDY
							</a>
						</div>
					</div>
				<?php endif; ?>

			</div>

			<div class="work-col-right">
				
				<?php if (isset($case_studies[1])) : $case = $case_studies[1]; ?>
					<div class="relative w-full">
						<div class="work-card card-2 group" data-card-id="2">
							<div class="absolute inset-0 z-0 bg-neutral-900">
								<?php if ( 'video' === $case['case_bg_type'] && $case['case_video'] ) : ?>
									<video autoplay loop muted playsinline class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-700">
										<source src="<?php echo esc_url( $case['case_video'] ); ?>" type="video/mp4">
									</video>
								<?php elseif ( $case['case_image'] ) : ?>
									<img src="<?php echo esc_url( $case['case_image'] ); ?>" class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-700" alt="<?php echo esc_attr( $case['case_title'] ); ?>">
								<?php endif; ?>
							</div>
							<div class="card-initial-overlay absolute inset-0 flex items-center justify-center z-10 group-hover:opacity-0 transition-opacity duration-500">
								<div class="card-initial-bg-overlay absolute inset-0 pointer-events-none"></div>
								<h3 class="card-initial-title font-heading text-[32px] md:text-[60px] lg:text-[100px] font-medium uppercase tracking-tight text-[#FB3C1E] relative z-10">
									<?php echo esc_html( $case['case_title'] ); ?>
								</h3>
							</div>
							<div class="card-hover-overlay absolute inset-0 flex flex-col items-center justify-center p-6 md:p-12 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-20">
								<h3 class="card-hover-title font-heading text-[24px] md:text-[40px] lg:text-[50px] font-medium uppercase tracking-tight text-white mb-4">
									<?php echo esc_html( $case['case_hover_title'] ); ?>
								</h3>
								<p class="card-hover-desc font-body text-[14px] md:text-[16px] lg:text-[24px] leading-relaxed text-white text-center mb-8 max-w-[500px]">
									<?php echo esc_html( $case['case_desc'] ); ?>
								</p>
								<a href="<?php echo esc_url( $case['case_link'] ); ?>" class="card-hover-btn bg-[#FB3C1E] text-white px-8 py-4 font-heading text-[16px] lg:text-[18px] font-bold uppercase tracking-wider transition-transform duration-300 hover:scale-105">
									VIEW CASE STUDY
								</a>
							</div>
						</div>
						<div class="work-pixel-right absolute right-[-60px] md:right-[-100px] lg:right-[-140px] top-[60%] -translate-y-1/2 z-0 pointer-events-none select-none">
							<svg width="236" height="215" viewBox="0 0 236 215" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.25" d="M0 186H29V215H0V186Z" fill="#1D1E1C"/>
								<path opacity="0.25" d="M110 131H126V147H110V131Z" fill="#1D1E1C"/>
								<path d="M172 104H236V167H172V104Z" fill="#1D1E1C"/>
								<path d="M73 0H105V32H73V0Z" fill="#1D1E1C"/>
							</svg>
						</div>
					</div>
				<?php endif; ?>

				<?php if (isset($case_studies[3])) : $case = $case_studies[3]; ?>
					<div class="relative w-full">
						<div class="work-card card-4 group" data-card-id="4">
							<div class="absolute inset-0 z-0 bg-neutral-900">
								<?php if ( 'video' === $case['case_bg_type'] && $case['case_video'] ) : ?>
									<video autoplay loop muted playsinline class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-700">
										<source src="<?php echo esc_url( $case['case_video'] ); ?>" type="video/mp4">
									</video>
								<?php elseif ( $case['case_image'] ) : ?>
									<img src="<?php echo esc_url( $case['case_image'] ); ?>" class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-700" alt="<?php echo esc_attr( $case['case_title'] ); ?>">
								<?php endif; ?>
							</div>
							<div class="card-initial-overlay absolute inset-0 flex items-center justify-center z-10 group-hover:opacity-0 transition-opacity duration-500">
								<div class="card-initial-bg-overlay absolute inset-0 pointer-events-none"></div>
								<h3 class="card-initial-title font-heading text-[32px] md:text-[60px] lg:text-[100px] font-medium uppercase tracking-tight text-[#FB3C1E] relative z-10">
									<?php echo esc_html( $case['case_title'] ); ?>
								</h3>
							</div>
							<div class="card-hover-overlay absolute inset-0 flex flex-col items-center justify-center p-6 md:p-12 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-20">
								<h3 class="card-hover-title font-heading text-[24px] md:text-[40px] lg:text-[50px] font-medium uppercase tracking-tight text-white mb-4">
									<?php echo esc_html( $case['case_hover_title'] ); ?>
								</h3>
								<p class="card-hover-desc font-body text-[14px] md:text-[16px] lg:text-[24px] leading-relaxed text-white text-center mb-8 max-w-[500px]">
									<?php echo esc_html( $case['case_desc'] ); ?>
								</p>
								<a href="<?php echo esc_url( $case['case_link'] ); ?>" class="card-hover-btn bg-[#FB3C1E] text-white px-8 py-4 font-heading text-[16px] lg:text-[18px] font-bold uppercase tracking-wider transition-transform duration-300 hover:scale-105">
									VIEW CASE STUDY
								</a>
							</div>
						</div>
						<div class="work-pixel-bottom absolute left-[20%] top-[100%] pt-[40px] z-0 pointer-events-none select-none">
							<svg width="93" height="238" viewBox="0 0 93 238" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M32 161H0V129H32V161Z" fill="#1D1E1C"/>
								<path opacity="0.25" d="M32 0H48V16H32V0Z" fill="#1D1E1C"/>
								<path opacity="0.25" d="M64 209H93V238H64V209Z" fill="#1D1E1C"/>
							</svg>
						</div>
					</div>
				<?php endif; ?>

				<div class="see-all-wrap w-full md:w-[560px] flex justify-center py-12">
					<a href="<?php echo esc_url( $see_all_url ); ?>" class="see-all-link font-body text-[20px] md:text-[30px] font-bold uppercase tracking-wider text-[#1D1E1C] relative pb-3 block select-none">
						<?php echo esc_html( $see_all_text ); ?>
					</a>
				</div>

			</div>

		</div>

	</div>

</section>
