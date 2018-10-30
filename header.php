<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title>
			<?php wp_title(''); ?>
		</title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/fav.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/icon.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="format-detection" content="telephone=no">
		<meta name="keywords" content="PR, Public, Public Relations, Seattle, Washingtion, WA, SEA, Good, Media, Press">

		<meta property="og:title" content="<?php bloginfo('name'); ?>">
		<meta property="og:description" content="<?php bloginfo('description'); ?>">
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/share.jpg">
		<meta property="og:url" content="<?php echo home_url($wp->request); ?>">
		<meta name="twitter:card" content="summary_large_image">

		<?php wp_head(); ?>

		<script>
			document.createElement( "picture" );
			document.createElement( "video" );
		</script>

	</head>
	<body>

		<section class="loader"></section>

		<section id="page" class="site-content">
			<div id="site-content-wrap" <?php body_class(); ?>>

				<?php if(is_page("home")): ?>

				<?php endif; ?>

				<!-- <header data-aos="fade-in" data-aos-offset="0" data-aos-once="true" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">
					<nav>
						<div class="cell">
							<ul>
								<li><a href="<?php echo site_url('/', 'http'); ?>">EA</a></li>
							</ul>
						</div>
						<div class="cell">
							<ul>
								<li><a href="<?php echo site_url('/work/', 'http'); ?>">Work</a></li>
								<li><a href="<?php echo site_url('/news/', 'http'); ?>">News</a></li>
								<li><a href="<?php echo site_url('/about/', 'http'); ?>">About</a></li>
							</ul>
						</div>
						<div class="cell">
							<p><a href="<?php echo site_url('/contact/', 'http'); ?>">Contact</a></p>
						</div>
					</nav>
				</header> -->
