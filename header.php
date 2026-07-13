<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-white text-brand-black antialiased' ); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header absolute top-0 left-0 w-full z-50 bg-transparent">
	<div class="max-w-[1440px] mx-auto px-6 py-6 md:px-12 flex justify-between items-center">
		
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-block" rel="home">
				<div class="w-12 h-12 bg-brand-black text-white flex flex-wrap p-1 font-heading font-bold select-none border-2 border-solid border-white">
					<div class="w-1/2 h-1/2 flex items-center justify-center text-sm leading-none">9</div>
					<div class="w-1/2 h-1/2 flex items-center justify-center text-sm leading-none">0</div>
					<div class="w-1/2 h-1/2 flex items-center justify-center text-sm leading-none">2</div>
					<div class="w-1/2 h-1/2 flex items-center justify-center text-sm leading-none">4</div>
				</div>
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
