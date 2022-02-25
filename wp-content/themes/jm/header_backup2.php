<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/jm/assets/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/jm/assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/jm/assets/favicon/favicon-16x16.png">
<link rel="manifest" href="/wp-content/themes/jm/assets/favicon/manifest.json">
<link rel="mask-icon" href="/wp-content/themes/jm/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="/wp-content/themes/jm/assets/favicon/favicon.ico">
<meta name="msapplication-config" content="/wp-content/themes/jm/assets/favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
<script src="https://kit.fontawesome.com/2c4d1ba53e.js" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>?version=2.6" />

<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/css/normalize.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css?version=2.6">
<?php wp_head(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/js/classie.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/js/jquery-3.2.1.min.js"></script>
</head>

<body <?php body_class($pagename); ?>>

	<?php if(is_ie() && get_browser_version() <= 11) { ?>
		<div class="browser-warning" id="browser-warning">
			<div class="browser-warning__inner">
				<h1>Outdated Browser Detected!</h1>
				<p>Please update your browser for a full experience of this site. Continuing without updating may result in broken designs and inability to navigate.</p>
				<a href="https://www.google.com/chrome/browser/desktop/index.html" target="_blank" class="icon"><i class="fa fa-check" aria-hidden="true"></i></a>
				<span class="icon" id="browser-warning--close" onclick="closeBrowserAlert()"><i class="fa fa-times" aria-hidden="true"></i></span>
			</div>
		</div>
	 <?php }; ?>

	 <?php if(is_opera() && get_browser_version() <= 27) { ?>
		<div class="browser-warning" id="browser-warning">
			<div class="browser-warning__inner">
				<h1>Outdated Browser Detected!</h1>
				<p>Please update your browser for a full experience of this site. Continuing without updating may result in broken designs and inability to navigate.</p>
				<a href="https://www.google.com/chrome/browser/desktop/index.html" target="_blank" class="icon"><i class="fa fa-check" aria-hidden="true"></i></a>
				<span class="icon" id="browser-warning--close" onclick="closeBrowserAlert()"><i class="fa fa-times" aria-hidden="true"></i></span>
			</div>
		</div>
	 <?php }; ?>

	<?php if ( is_front_page() ) : ?>
	<div class="main__container home__container" id="container">
	<?php else: ?>	
	<div class="main__container <?php echo $pagename; ?>__container" id="container">
	<?php endif; ?>
		<nav class="navbar">
			<a class="navbar__brand" href="/">JENNETTE MCCURDY</a>
			<div class="navbar__collapse clearfix">
				<ul>
					<li>
						<a href="/">Home</a>
					</li>
					<li>
						<a href="/bio">Bio</a>
					</li>
					<li>
						<a href="/projects">Projects</a>
					</li>
					<li>
						<a href="/stuff">Stuff</a>
					</li>
					<li>
						<a href="/connect">Connect</a>
					</li>
					<li>
						<a href="/photos">Photos</a>
					</li>
					<li>
						<a href="https://emptyinside.merchtable.com/" target="_blank">Merch</a>
					</li>
				</ul>
			</div>
		</nav>