<footer id="colophon" class="site-footer bg-[#1D1E1C] text-white pt-24 pb-12 relative z-20 border-t border-solid border-[#707070]">
	<div class="max-w-[1440px] mx-auto px-6 md:px-12 flex flex-col gap-16">
		
		<div class="flex flex-col lg:flex-row justify-between items-start gap-12">
			
			<div class="flex flex-col items-start max-w-sm">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-block text-white hover:text-[#FB3C1E] transition-colors duration-300 mb-8" rel="home">
					<svg width="64" height="64" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg" class="block">
						<path d="M41.4365 0V41.4366H0V0H41.4365ZM32.2289 32.2284V9.20818H9.20816V23.0197H27.6245V27.6241H9.20816V32.2279L32.2289 32.2284ZM27.6245 13.8125V18.4164H13.8125V13.8125H27.6245Z" fill="currentColor"/>
						<path d="M86.3312 0V41.4923H44.8398V0H86.3312ZM77.111 32.2716V9.22067H54.0596V32.2716H77.111ZM58.67 27.6615V13.8308H72.5009V27.6615H58.67Z" fill="currentColor"/>
						<path d="M41.4361 44.8555V86.3867H0.000976562V44.8555H41.4361ZM9.1366 58.6992H27.5923V63.3121H9.1366V77.1559H32.2072V72.543H13.7496V67.9299H32.2072V54.0862H9.1366V58.6992Z" fill="currentColor"/>
						<path d="M86.3389 44.8555V86.403H44.8398V44.8555H86.3389ZM54.072 54.0881V67.9371H72.5378V77.1703H77.1542V54.0881H72.5378V63.3208H58.6884V54.0881H54.072Z" fill="currentColor"/>
					</svg>
				</a>
				<p class="text-neutral-400 font-body text-base leading-relaxed">
					<?php esc_html_e( '9024 is a social-first, digital agency working with talent, brands and sporting organisations.', '9024-media' ); ?>
				</p>
			</div>

			<div class="flex flex-col lg:items-end gap-10">
				
				<div class="flex flex-col lg:items-end">
					<span class="text-neutral-400 font-heading text-[14px] tracking-[0.1em] uppercase mb-2"><?php esc_html_e( 'READY TO CHANGE THE GAME?', '9024-media' ); ?></span>
					<a href="mailto:hello@9024media.com" class="footer-cta-link font-heading text-4xl md:text-5xl lg:text-6xl text-white hover:text-[#FB3C1E] transition-colors duration-300 uppercase tracking-tight no-underline">
						<?php esc_html_e( "LET'S TALK", '9024-media' ); ?>
					</a>
				</div>

				<div class="flex flex-wrap gap-x-8 gap-y-4 text-sm font-heading tracking-widest uppercase">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-white hover:text-[#FB3C1E] transition-colors no-underline">HOME</a>
					<a href="<?php echo esc_url( home_url( '/#about' ) ); ?>" class="text-white hover:text-[#FB3C1E] transition-colors no-underline">ABOUT</a>
					<a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="text-white hover:text-[#FB3C1E] transition-colors no-underline">SERVICES</a>
					<a href="<?php echo esc_url( home_url( '/#work' ) ); ?>" class="text-white hover:text-[#FB3C1E] transition-colors no-underline">OUR WORK</a>
					<a href="#colophon" class="text-white hover:text-[#FB3C1E] transition-colors no-underline">CONTACT</a>
				</div>

				<div class="flex gap-6 text-sm font-heading tracking-widest uppercase">
					<a href="#" class="text-neutral-400 hover:text-[#FB3C1E] transition-colors no-underline">INSTAGRAM</a>
					<a href="#" class="text-neutral-400 hover:text-[#FB3C1E] transition-colors no-underline">LINKEDIN</a>
					<a href="#" class="text-neutral-400 hover:text-[#FB3C1E] transition-colors no-underline">TIKTOK</a>
				</div>

			</div>

		</div>

		<div class="w-full h-[1px] bg-[#707070] opacity-35"></div>

		<div class="flex flex-col md:flex-row justify-between items-center gap-6">
			
			<div class="footer-copy text-sm text-neutral-500 font-body">
				<p>&copy; <?php echo wp_date( 'Y' ); ?> 9024 Media Ltd. All Rights Reserved.</p>
			</div>
			
			<div class="footer-legal flex gap-8 text-sm text-white font-body">
				<a href="#" class="hover:text-[#FB3C1E] transition-colors duration-300 no-underline"><?php esc_html_e( 'Privacy Policy', '9024-media' ); ?></a>
				<a href="#" class="hover:text-[#FB3C1E] transition-colors duration-300 no-underline"><?php esc_html_e( 'Terms of Use', '9024-media' ); ?></a>
				<a href="#" class="hover:text-[#FB3C1E] transition-colors duration-300 no-underline"><?php esc_html_e( 'Cookie Settings', '9024-media' ); ?></a>
			</div>

		</div>

	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
