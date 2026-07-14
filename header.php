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

<header id="masthead" class="site-header absolute top-0 left-0 w-full z-50 bg-transparent">
	<div class="max-w-[1440px] mx-auto px-6 py-6 md:px-12 flex justify-between items-center">
		
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-block text-white hover:text-brand-orange transition-colors duration-300" rel="home">
				<svg width="48" height="48" viewBox="0 0 87 87" fill="none" xmlns="http://www.w3.org/2000/svg" class="block">
					<path d="M41.4365 0V41.4366H0V0H41.4365ZM32.2289 32.2284V9.20818H9.20816V23.0197H27.6245V27.6241H9.20816V32.2279L32.2289 32.2284ZM27.6245 13.8125V18.4164H13.8125V13.8125H27.6245Z" fill="currentColor"/>
					<path d="M86.3312 0V41.4923H44.8398V0H86.3312ZM77.111 32.2716V9.22067H54.0596V32.2716H77.111ZM58.67 27.6615V13.8308H72.5009V27.6615H58.67Z" fill="currentColor"/>
					<path d="M41.4361 44.8555V86.3867H0.000976562V44.8555H41.4361ZM9.1366 58.6992H27.5923V63.3121H9.1366V77.1559H32.2072V72.543H13.7496V67.9299H32.2072V54.0862H9.1366V58.6992Z" fill="currentColor"/>
					<path d="M86.3389 44.8555V86.403H44.8398V44.8555H86.3389ZM54.072 54.0881V67.9371H72.5378V77.1703H77.1542V54.0881H72.5378V63.3208H58.6884V54.0881H54.072Z" fill="currentColor"/>
				</svg>
			</a>
		</div>
		
		<nav id="site-navigation" class="main-navigation flex items-center gap-8">
			<a href="#lets-chat" class="hidden sm:inline-flex items-center justify-center w-28 h-28 rounded-full border border-solid border-white text-white font-heading font-bold text-xs tracking-wider uppercase text-center p-3 hover:bg-brand-orange hover:border-brand-orange transition-all duration-300">
				Let's Chat
			</a>
			<button class="hamburger-menu flex flex-col gap-1.5 justify-center items-center w-8 h-8 bg-transparent border-none cursor-pointer" aria-label="Toggle navigation menu">
				<span class="w-7 h-0.5 bg-white transition-all duration-300"></span>
				<span class="w-7 h-0.5 bg-white transition-all duration-300"></span>
				<span class="w-7 h-0.5 bg-white transition-all duration-300"></span>
			</button>
		</nav>

	</div>
</header>
