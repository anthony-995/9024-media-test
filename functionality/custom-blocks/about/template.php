<?php
$title_line_1 = preg_replace( '/^\s+|\s+$/u', '', get_field( 'title_line_1' ) ?: 'WE ARE' );
$title_line_2 = preg_replace( '/^\s+|\s+$/u', '', get_field( 'title_line_2' ) ?: '9024' );
$subheading = get_field( 'subheading' ) ?: 'WE TELL YOUR STORY';
$description_text = get_field( 'description_text' );
$button_text = get_field( 'button_text' ) ?: 'LEARN MORE ABOUT US';
$button_url = get_field( 'button_url' ) ?: '#';

$theme_uri = get_template_directory_uri();
$post_image_1 = get_field( 'post_image_1' ) ?: $theme_uri . '/assets/images/about_post_1.jpg';
$post_image_2 = get_field( 'post_image_2' ) ?: $theme_uri . '/assets/images/about_post_3.jpg';
$post_image_3 = get_field( 'post_image_3' ) ?: $theme_uri . '/assets/images/about_post_2.jpg';
$post_image_4 = get_field( 'post_image_4' ) ?: $theme_uri . '/assets/images/about_post_4.jpg';

$align_class = $block['align'] ? 'align' . $block['align'] : 'alignfull';
?>

<section class="about-block relative w-full bg-white text-brand-black py-24 lg:py-0 lg:h-[1245px] overflow-hidden <?php echo esc_attr( $align_class ); ?>">
	
	<div class="max-w-[1440px] mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start relative z-10">
		
		<div class="lg:col-span-5 flex flex-col items-start relative lg:pt-[100px]">
			
			<div class="about-title-wrap font-heading text-brand-black leading-none uppercase tracking-tighter mb-16 lg:mb-[80px] relative z-0">
				<div class="text-[60px] md:text-[180px] lg:text-[300px] font-medium leading-[0.8] relative z-0 select-none whitespace-nowrap">
					<?php echo esc_html( $title_line_1 ); ?>
				</div>
				<div class="relative mt-2 lg:pl-[120px] pt-3">
					<div class="text-[60px] md:text-[180px] lg:text-[300px] font-medium leading-[0.8] relative z-0 select-none whitespace-nowrap">
						<?php echo esc_html( $title_line_2 ); ?>
					</div>
					<div class="about-pixel-left absolute left-[-80px] md:left-[-160px] lg:left-[-240px] top-[30%] -translate-y-1/2 z-0 pointer-events-none select-none">
						<svg width="126" height="215" viewBox="0 0 126 215" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M126 29H97V0H126V29Z" fill="#1D1E1C"/>
							<path d="M16 84H0V68H16V84Z" fill="#1D1E1C"/>
							<path d="M48 215H16V183H48V215Z" fill="#1D1E1C"/>
						</svg>
					</div>
				</div>
			</div>

			<div class="pl-0 lg:pl-[124px] max-w-lg relative z-10 flex flex-col items-start">
				<?php if ( $subheading ) : ?>
					<h2 class="text-2xl md:text-[36px] font-heading font-bold text-brand-black uppercase tracking-tight mb-6">
						<?php echo esc_html( $subheading ); ?>
					</h2>
				<?php endif; ?>

				<?php if ( $description_text ) : ?>
					<p class="text-brand-black text-[18px] md:text-[20px] font-body leading-relaxed mb-12">
						<?php echo esc_html( $description_text ); ?>
					</p>
				<?php endif; ?>

				<?php if ( $button_text ) : ?>
					<a href="<?php echo esc_url( $button_url ); ?>" class="btn-underline text-lg font-heading font-bold uppercase tracking-wider text-brand-black">
						<?php echo esc_html( $button_text ); ?>
					</a>
				<?php endif; ?>
			</div>

		</div>

		<div class="lg:col-span-7 flex flex-col md:flex-row gap-8 lg:gap-[56px] relative items-start w-full lg:w-[1258px] max-w-none">
			
			<div class="about-grid-col-left flex flex-col gap-8 lg:gap-[40px] w-full lg:w-[601px] lg:pt-[100px] flex-shrink-0 relative z-10">
				
				<div class="instagram-post w-full relative z-10 group" data-post-id="1">
					<div class="post-header">
						<div class="flex gap-[8px]">
							<span class="w-[15.66px] h-[15.66px] rounded-full bg-[#9B9B9B]"></span>
							<span class="w-[15.66px] h-[15.66px] rounded-full bg-[#9B9B9B]"></span>
							<span class="w-[15.66px] h-[15.66px] rounded-full bg-[#9B9B9B]"></span>
						</div>
					</div>
					<div class="post-image-wrap cursor-pointer">
						<img src="<?php echo esc_url( $post_image_1 ); ?>" class="w-full h-full object-cover" alt="Sports highlight 1">
						<div class="absolute inset-0 bg-white mix-blend-overlay opacity-25 pointer-events-none"></div>
						<div class="about-heart-pop absolute inset-0 flex items-center justify-center pointer-events-none z-20" style="opacity: 0; transform: scale(0);">
							<svg width="117" height="108" viewBox="0 0 117 108" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.85875" d="M58.3613 107.744L49.8978 100.109C19.8423 72.5145 0 54.6043 0 32.2937C0 14.0912 14.0061 0 32.0987 0C42.3116 0 51.9407 4.69752 58.3613 12.3308C64.7816 4.69752 74.4104 0 84.6239 0C102.716 0 116.723 14.0912 116.723 32.2937C116.723 54.6046 96.88 72.5147 66.8248 100.109L58.3613 107.744Z" fill="white"/>
							</svg>
						</div>
					</div>
					<div class="post-footer">
						<div class="flex items-center gap-6">
							<button class="action-btn action-like bg-transparent border-none p-0 cursor-pointer text-[#9B9B9B] hover:text-[#FB3C1E] transition-colors" aria-label="Like post">
								<svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M10.3513 18.425L10.5813 18.567L10.8063 18.425C11.9343 17.767 20.6602 9.85901 21.0533 7.70801C21.1913 6.71002 21.1913 4.82898 21.0533 4.22998C20.9263 3.67999 19.4553 0 15.6003 0C11.7463 0 10.5793 2.72803 10.5793 2.72803C10.5793 2.72803 8.67125 0 5.55625 0C1.70225 0 0.231256 3.67999 0.10425 4.22998C-0.03475 4.82898 -0.03475 6.71002 0.10425 7.70801C0.497255 9.85901 9.22325 17.767 10.3513 18.425Z"/>
								</svg>
							</button>
							<div class="text-[#9B9B9B] flex items-center justify-center pointer-events-none" aria-hidden="true">
								<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M19.37 19.059L18.374 12.955C18.71 12.015 18.902 11.006 18.902 9.95099C18.902 5.00696 14.895 1 9.95099 1C5.008 1 1 5.00696 1 9.95099C1 14.894 5.008 18.901 9.95099 18.901C11.496 18.901 12.949 18.5099 14.217 17.821L19.37 19.059Z" stroke="#9B9B9B" stroke-width="2"/>
								</svg>
							</div>
							<div class="text-[#9B9B9B] flex items-center justify-center pointer-events-none" aria-hidden="true">
								<svg width="25" height="22" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2.67676 1.72754H22.6389L12.4541 19.0417L10.4172 8.44952L2.67676 1.72754Z" stroke="#9B9B9B" stroke-width="2"/>
									<line x1="9.92377" y1="7.98906" x2="22.1354" y2="0.863771" stroke="#9B9B9B" stroke-width="2"/>
								</svg>
							</div>
						</div>
						<div class="text-[#9B9B9B] flex items-center justify-center pointer-events-none" aria-hidden="true">
							<svg width="19" height="23" viewBox="0 0 19 23" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1.01758 1H17.5902V19.1974L9.71008 11.3173L1.34253 19.6849L1.01758 1Z" stroke="#9B9B9B" stroke-width="2"/>
							</svg>
						</div>
					</div>
				</div>

				<div class="instagram-post w-full relative z-10 group" data-post-id="2">
					<div class="post-header">
						<div class="flex gap-[8px]">
							<span class="w-[15.66px] h-[15.66px] rounded-full bg-[#9B9B9B]"></span>
							<span class="w-[15.66px] h-[15.66px] rounded-full bg-[#9B9B9B]"></span>
							<span class="w-[15.66px] h-[15.66px] rounded-full bg-[#9B9B9B]"></span>
						</div>
					</div>
					<div class="post-image-wrap cursor-pointer">
						<img src="<?php echo esc_url( $post_image_2 ); ?>" class="w-full h-full object-cover" alt="Sports typography graphic">
						<div class="absolute inset-0 bg-white mix-blend-overlay opacity-25 pointer-events-none"></div>
						<div class="about-heart-pop absolute inset-0 flex items-center justify-center pointer-events-none z-20" style="opacity: 0; transform: scale(0);">
							<svg width="117" height="108" viewBox="0 0 117 108" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.85875" d="M58.3613 107.744L49.8978 100.109C19.8423 72.5145 0 54.6043 0 32.2937C0 14.0912 14.0061 0 32.0987 0C42.3116 0 51.9407 4.69752 58.3613 12.3308C64.7816 4.69752 74.4104 0 84.6239 0C102.716 0 116.723 14.0912 116.723 32.2937C116.723 54.6046 96.88 72.5147 66.8248 100.109L58.3613 107.744Z" fill="white"/>
							</svg>
						</div>
					</div>
					<div class="post-footer">
						<div class="flex items-center gap-6">
							<button class="action-btn action-like bg-transparent border-none p-0 cursor-pointer text-[#9B9B9B] hover:text-[#FB3C1E] transition-colors" aria-label="Like post">
								<svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M10.3513 18.425L10.5813 18.567L10.8063 18.425C11.9343 17.767 20.6602 9.85901 21.0533 7.70801C21.1913 6.71002 21.1913 4.82898 21.0533 4.22998C20.9263 3.67999 19.4553 0 15.6003 0C11.7463 0 10.5793 2.72803 10.5793 2.72803C10.5793 2.72803 8.67125 0 5.55625 0C1.70225 0 0.231256 3.67999 0.10425 4.22998C-0.03475 4.82898 -0.03475 6.71002 0.10425 7.70801C0.497255 9.85901 9.22325 17.767 10.3513 18.425Z"/>
								</svg>
							</button>
							<div class="text-[#9B9B9B] flex items-center justify-center pointer-events-none" aria-hidden="true">
								<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M19.37 19.059L18.374 12.955C18.71 12.015 18.902 11.006 18.902 9.95099C18.902 5.00696 14.895 1 9.95099 1C5.008 1 1 5.00696 1 9.95099C1 14.894 5.008 18.901 9.95099 18.901C11.496 18.901 12.949 18.5099 14.217 17.821L19.37 19.059Z" stroke="#9B9B9B" stroke-width="2"/>
								</svg>
							</div>
							<div class="text-[#9B9B9B] flex items-center justify-center pointer-events-none" aria-hidden="true">
								<svg width="25" height="22" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2.67676 1.72754H22.6389L12.4541 19.0417L10.4172 8.44952L2.67676 1.72754Z" stroke="#9B9B9B" stroke-width="2"/>
									<line x1="9.92377" y1="7.98906" x2="22.1354" y2="0.863771" stroke="#9B9B9B" stroke-width="2"/>
								</svg>
							</div>
						</div>
						<div class="text-[#9B9B9B] flex items-center justify-center pointer-events-none" aria-hidden="true">
							<svg width="19" height="23" viewBox="0 0 19 23" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1.01758 1H17.5902V19.1974L9.71008 11.3173L1.34253 19.6849L1.01758 1Z" stroke="#9B9B9B" stroke-width="2"/>
							</svg>
						</div>
					</div>
				</div>

				<div class="about-pixel-bottom absolute left-[-20px] md:left-[-30px] lg:left-[-50px] bottom-[100px] lg:bottom-[130px] z-0 pointer-events-none select-none">
					<svg width="93" height="238" viewBox="0 0 93 238" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M32 161H0V129H32V161Z" fill="#1D1E1C"/>
						<path d="M32 0H48V16H32V0Z" fill="#1D1E1C"/>
						<path d="M64 209H93V238H64V209Z" fill="#1D1E1C"/>
					</svg>
				</div>

			</div>

			<div class="about-grid-col-right flex flex-col gap-8 lg:gap-[40px] w-full lg:w-[601px] flex-shrink-0 lg:pt-[385px] relative z-10">
				
				<div class="about-pixel-right absolute right-[10%] lg:right-[15%] top-[80px] lg:top-[120px] z-0 pointer-events-none select-none">
					<svg width="236" height="215" viewBox="0 0 236 215" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 186H29V215H0V186Z" fill="#1D1E1C"/>
						<path d="M110 131H126V147H110V131Z" fill="#1D1E1C"/>
						<path d="M172 104H236V167H172V104Z" fill="#1D1E1C"/>
						<path d="M73 0H105V32H73V0Z" fill="#1D1E1C"/>
					</svg>
				</div>

				<div class="instagram-post w-full relative z-10 group" data-post-id="3">
					<div class="post-header">
						<div class="flex gap-[8px]">
							<span class="w-[15.66px] h-[15.66px] rounded-full bg-[#9B9B9B]"></span>
							<span class="w-[15.66px] h-[15.66px] rounded-full bg-[#9B9B9B]"></span>
							<span class="w-[15.66px] h-[15.66px] rounded-full bg-[#9B9B9B]"></span>
						</div>
					</div>
					<div class="post-image-wrap cursor-pointer">
						<img src="<?php echo esc_url( $post_image_3 ); ?>" class="w-full h-full object-cover" alt="Sports highlight 2">
						<div class="absolute inset-0 bg-white mix-blend-overlay opacity-25 pointer-events-none"></div>
						<div class="about-heart-pop absolute inset-0 flex items-center justify-center pointer-events-none z-20" style="opacity: 0; transform: scale(0);">
							<svg width="117" height="108" viewBox="0 0 117 108" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.85875" d="M58.3613 107.744L49.8978 100.109C19.8423 72.5145 0 54.6043 0 32.2937C0 14.0912 14.0061 0 32.0987 0C42.3116 0 51.9407 4.69752 58.3613 12.3308C64.7816 4.69752 74.4104 0 84.6239 0C102.716 0 116.723 14.0912 116.723 32.2937C116.723 54.6046 96.88 72.5147 66.8248 100.109L58.3613 107.744Z" fill="white"/>
							</svg>
						</div>
					</div>
					<div class="post-footer">
						<div class="flex items-center gap-6">
							<button class="action-btn action-like bg-transparent border-none p-0 cursor-pointer text-[#9B9B9B] hover:text-[#FB3C1E] transition-colors" aria-label="Like post">
								<svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M10.3513 18.425L10.5813 18.567L10.8063 18.425C11.9343 17.767 20.6602 9.85901 21.0533 7.70801C21.1913 6.71002 21.1913 4.82898 21.0533 4.22998C20.9263 3.67999 19.4553 0 15.6003 0C11.7463 0 10.5793 2.72803 10.5793 2.72803C10.5793 2.72803 8.67125 0 5.55625 0C1.70225 0 0.231256 3.67999 0.10425 4.22998C-0.03475 4.82898 -0.03475 6.71002 0.10425 7.70801C0.497255 9.85901 9.22325 17.767 10.3513 18.425Z"/>
								</svg>
							</button>
							<div class="text-[#9B9B9B] flex items-center justify-center pointer-events-none" aria-hidden="true">
								<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M19.37 19.059L18.374 12.955C18.71 12.015 18.902 11.006 18.902 9.95099C18.902 5.00696 14.895 1 9.95099 1C5.008 1 1 5.00696 1 9.95099C1 14.894 5.008 18.901 9.95099 18.901C11.496 18.901 12.949 18.5099 14.217 17.821L19.37 19.059Z" stroke="#9B9B9B" stroke-width="2"/>
								</svg>
							</div>
							<div class="text-[#9B9B9B] flex items-center justify-center pointer-events-none" aria-hidden="true">
								<svg width="25" height="22" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2.67676 1.72754H22.6389L12.4541 19.0417L10.4172 8.44952L2.67676 1.72754Z" stroke="#9B9B9B" stroke-width="2"/>
									<line x1="9.92377" y1="7.98906" x2="22.1354" y2="0.863771" stroke="#9B9B9B" stroke-width="2"/>
								</svg>
							</div>
						</div>
						<div class="text-[#9B9B9B] flex items-center justify-center pointer-events-none" aria-hidden="true">
							<svg width="19" height="23" viewBox="0 0 19 23" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1.01758 1H17.5902V19.1974L9.71008 11.3173L1.34253 19.6849L1.01758 1Z" stroke="#9B9B9B" stroke-width="2"/>
							</svg>
						</div>
					</div>
				</div>

				<div class="instagram-post w-full relative z-10 group" data-post-id="4">
					<div class="post-header">
						<div class="flex gap-[8px]">
							<span class="w-[15.66px] h-[15.66px] rounded-full bg-[#9B9B9B]"></span>
							<span class="w-[15.66px] h-[15.66px] rounded-full bg-[#9B9B9B]"></span>
							<span class="w-[15.66px] h-[15.66px] rounded-full bg-[#9B9B9B]"></span>
						</div>
					</div>
					<div class="post-image-wrap cursor-pointer">
						<img src="<?php echo esc_url( $post_image_4 ); ?>" class="w-full h-full object-cover" alt="Sports highlight 3">
						<div class="absolute inset-0 bg-white mix-blend-overlay opacity-25 pointer-events-none"></div>
						<div class="about-heart-pop absolute inset-0 flex items-center justify-center pointer-events-none z-20" style="opacity: 0; transform: scale(0);">
							<svg width="117" height="108" viewBox="0 0 117 108" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.85875" d="M58.3613 107.744L49.8978 100.109C19.8423 72.5145 0 54.6043 0 32.2937C0 14.0912 14.0061 0 32.0987 0C42.3116 0 51.9407 4.69752 58.3613 12.3308C64.7816 4.69752 74.4104 0 84.6239 0C102.716 0 116.723 14.0912 116.723 32.2937C116.723 54.6046 96.88 72.5147 66.8248 100.109L58.3613 107.744Z" fill="white"/>
							</svg>
						</div>
					</div>
					<div class="post-footer">
						<div class="flex items-center gap-6">
							<button class="action-btn action-like bg-transparent border-none p-0 cursor-pointer text-[#9B9B9B] hover:text-[#FB3C1E] transition-colors" aria-label="Like post">
								<svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M10.3513 18.425L10.5813 18.567L10.8063 18.425C11.9343 17.767 20.6602 9.85901 21.0533 7.70801C21.1913 6.71002 21.1913 4.82898 21.0533 4.22998C20.9263 3.67999 19.4553 0 15.6003 0C11.7463 0 10.5793 2.72803 10.5793 2.72803C10.5793 2.72803 8.67125 0 5.55625 0C1.70225 0 0.231256 3.67999 0.10425 4.22998C-0.03475 4.82898 -0.03475 6.71002 0.10425 7.70801C0.497255 9.85901 9.22325 17.767 10.3513 18.425Z"/>
								</svg>
							</button>
							<div class="text-[#9B9B9B] flex items-center justify-center pointer-events-none" aria-hidden="true">
								<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M19.37 19.059L18.374 12.955C18.71 12.015 18.902 11.006 18.902 9.95099C18.902 5.00696 14.895 1 9.95099 1C5.008 1 1 5.00696 1 9.95099C1 14.894 5.008 18.901 9.95099 18.901C11.496 18.901 12.949 18.5099 14.217 17.821L19.37 19.059Z" stroke="#9B9B9B" stroke-width="2"/>
								</svg>
							</div>
							<div class="text-[#9B9B9B] flex items-center justify-center pointer-events-none" aria-hidden="true">
								<svg width="25" height="22" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2.67676 1.72754H22.6389L12.4541 19.0417L10.4172 8.44952L2.67676 1.72754Z" stroke="#9B9B9B" stroke-width="2"/>
									<line x1="9.92377" y1="7.98906" x2="22.1354" y2="0.863771" stroke="#9B9B9B" stroke-width="2"/>
								</svg>
							</div>
						</div>
						<div class="text-[#9B9B9B] flex items-center justify-center pointer-events-none" aria-hidden="true">
							<svg width="19" height="23" viewBox="0 0 19 23" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1.01758 1H17.5902V19.1974L9.71008 11.3173L1.34253 19.6849L1.01758 1Z" stroke="#9B9B9B" stroke-width="2"/>
							</svg>
						</div>
					</div>
				</div>

			</div>

		</div>

	</div>

</section>
