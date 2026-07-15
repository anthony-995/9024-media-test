<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-white text-brand-black antialiased' ); ?>>
<?php wp_body_open(); ?>

<div id="loader" class="fixed inset-0 bg-brand-black z-[9999] flex items-center justify-center">
	<div class="loader-mask overflow-hidden px-1">
		<div class="loader-logo-row flex gap-4">
			<svg viewBox="0 0 41.4365 41.4366" class="loader-box w-20 h-20 fill-current text-white select-none">
				<path d="M41.4365 0V41.4366H0V0H41.4365ZM32.2289 32.2284V9.20818H9.20816V23.0197H27.6245V27.6241H9.20816V32.2279L32.2289 32.2284ZM27.6245 13.8125V18.4164H13.8125V13.8125H27.6245Z" />
			</svg>
			<svg viewBox="44.8398 0 41.4914 41.4923" class="loader-box w-20 h-20 fill-current text-white select-none">
				<path d="M86.3312 0V41.4923H44.8398V0H86.3312ZM77.111 32.2716V9.22067H54.0596V32.2716H77.111ZM58.67 27.6615V13.8308H72.5009V27.6615H58.67Z" />
			</svg>
			<svg viewBox="0 44.8555 41.4361 41.5312" class="loader-box w-20 h-20 fill-current text-white select-none">
				<path d="M41.4361 44.8555V86.3867H0.000976562V44.8555H41.4361ZM9.1366 58.6992H27.5923V63.3121H9.1366V77.1559H32.2072V72.543H13.7496V67.9299H32.2072V54.0862H9.1366V58.6992Z" />
			</svg>
			<svg viewBox="44.8398 44.8555 41.4991 41.5475" class="loader-box w-20 h-20 fill-current text-white select-none">
				<path d="M86.3389 44.8555V86.403H44.8398V44.8555H86.3389ZM54.072 54.0881V67.9371H72.5378V77.1703H77.1542V54.0881H72.5378V63.3208H58.6884V54.0881H54.072Z" />
			</svg>
		</div>
	</div>
</div>

<header id="masthead" class="site-header absolute top-[36px] left-0 right-0 z-50 bg-transparent px-[48px] h-[86px] flex items-center box-border">
	<div class="w-full flex justify-between items-center">
		
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-block text-white hover:text-[#FB3C1E] transition-colors duration-300" rel="home">
				<svg width="86" height="86" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg" class="block">
					<path d="M41.4365 0V41.4366H0V0H41.4365ZM32.2289 32.2284V9.20818H9.20816V23.0197H27.6245V27.6241H9.20816V32.2279L32.2289 32.2284ZM27.6245 13.8125V18.4164H13.8125V13.8125H27.6245Z" fill="currentColor"/>
					<path d="M86.3312 0V41.4923H44.8398V0H86.3312ZM77.111 32.2716V9.22067H54.0596V32.2716H77.111ZM58.67 27.6615V13.8308H72.5009V27.6615H58.67Z" fill="currentColor"/>
					<path d="M41.4361 44.8555V86.3867H0.000976562V44.8555H41.4361ZM9.1366 58.6992H27.5923V63.3121H9.1366V77.1559H32.2072V72.543H13.7496V67.9299H32.2072V54.0862H9.1366V58.6992Z" fill="currentColor"/>
					<path d="M86.3389 44.8555V86.403H44.8398V44.8555H86.3389ZM54.072 54.0881V67.9371H72.5378V77.1703H77.1542V54.0881H72.5378V63.3208H58.6884V54.0881H54.072Z" fill="currentColor"/>
				</svg>
			</a>
		</div>
		
		<nav id="site-navigation" class="main-navigation flex items-center gap-6 md:gap-8">
			<a href="#lets-chat" class="flex items-center justify-center w-[142px] h-[41px] border border-solid border-brand-orange text-white hover:bg-brand-orange hover:text-brand-black transition-all duration-300 no-underline font-sans font-normal text-[14px] leading-[26px] tracking-[0.1em] uppercase">
				LET'S CHAT
			</a>
			<button class="hamburger-menu flex items-center justify-center bg-transparent border-none p-0 cursor-pointer w-[41px] h-[26px]" aria-label="Toggle navigation menu">
				<svg width="41" height="26" viewBox="0 0 41 26" fill="none" xmlns="http://www.w3.org/2000/svg" class="block">
					<path d="M1 1H41" stroke="white" stroke-width="2" stroke-linecap="round"/>
					<path d="M1 25H41" stroke="white" stroke-width="2" stroke-linecap="round"/>
					<path d="M11 13H41" stroke="#FB3C1E" stroke-width="2" stroke-linecap="round"/>
				</svg>
			</button>
		</nav>

	</div>
</header>

<!-- Fullscreen Overlay Navigation -->
<div id="fullscreen-nav" class="fixed inset-0 bg-[#1D1E1C] z-[999] opacity-0 pointer-events-none flex flex-col justify-between p-[48px] md:p-[80px] box-border transition-all duration-500 ease-in-out">
	<div class="flex justify-between items-center w-full">
		<div class="site-branding-overlay">
			<svg width="86" height="86" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg" class="block text-white">
				<path d="M41.4365 0V41.4366H0V0H41.4365ZM32.2289 32.2284V9.20818H9.20816V23.0197H27.6245V27.6241H9.20816V32.2279L32.2289 32.2284ZM27.6245 13.8125V18.4164H13.8125V13.8125H27.6245Z" fill="currentColor"/>
				<path d="M86.3312 0V41.4923H44.8398V0H86.3312ZM77.111 32.2716V9.22067H54.0596V32.2716H77.111ZM58.67 27.6615V13.8308H72.5009V27.6615H58.67Z" fill="currentColor"/>
				<path d="M41.4361 44.8555V86.3867H0.000976562V44.8555H41.4361ZM9.1366 58.6992H27.5923V63.3121H9.1366V77.1559H32.2072V72.543H13.7496V67.9299H32.2072V54.0862H9.1366V58.6992Z" fill="currentColor"/>
				<path d="M86.3389 44.8555V86.403H44.8398V44.8555H86.3389ZM54.072 54.0881V67.9371H72.5378V77.1703H77.1542V54.0881H72.5378V63.3208H58.6884V54.0881H54.072Z" fill="currentColor"/>
			</svg>
		</div>
		<button class="nav-close-btn flex items-center justify-center bg-transparent border-none p-0 cursor-pointer w-[41px] h-[41px]" aria-label="Close menu">
			<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg" class="block">
				<path d="M1 1L25 25" stroke="white" stroke-width="2" stroke-linecap="round"/>
				<path d="M25 1L1 25" stroke="white" stroke-width="2" stroke-linecap="round"/>
			</svg>
		</button>
	</div>

	<nav class="flex flex-col items-start gap-6 my-auto">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-overlay-link font-heading text-[48px] md:text-[80px] font-medium leading-[1.0] text-white hover:text-[#FB3C1E] transition-colors duration-300 no-underline uppercase tracking-tight">HOME</a>
		<a href="#about" class="nav-overlay-link font-heading text-[48px] md:text-[80px] font-medium leading-[1.0] text-white hover:text-[#FB3C1E] transition-colors duration-300 no-underline uppercase tracking-tight">ABOUT</a>
		<a href="#services" class="nav-overlay-link font-heading text-[48px] md:text-[80px] font-medium leading-[1.0] text-white hover:text-[#FB3C1E] transition-colors duration-300 no-underline uppercase tracking-tight">SERVICES</a>
		<a href="#work" class="nav-overlay-link font-heading text-[48px] md:text-[80px] font-medium leading-[1.0] text-white hover:text-[#FB3C1E] transition-colors duration-300 no-underline uppercase tracking-tight">OUR WORK</a>
		<a href="#contact" class="nav-overlay-link font-heading text-[48px] md:text-[80px] font-medium leading-[1.0] text-white hover:text-[#FB3C1E] transition-colors duration-300 no-underline uppercase tracking-tight">CONTACT</a>
	</nav>

	<div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 w-full text-neutral-400 font-heading text-sm tracking-widest uppercase">
		<div class="flex gap-8">
			<a href="#" class="text-white hover:text-[#FB3C1E] transition-colors no-underline">INSTAGRAM</a>
			<a href="#" class="text-white hover:text-[#FB3C1E] transition-colors no-underline">LINKEDIN</a>
			<a href="#" class="text-white hover:text-[#FB3C1E] transition-colors no-underline">TIKTOK</a>
		</div>
		<div>
			<a href="mailto:hello@9024media.com" class="text-white hover:text-[#FB3C1E] transition-colors no-underline">HELLO@9024MEDIA.COM</a>
		</div>
	</div>
</div>

