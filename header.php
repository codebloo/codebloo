<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
		

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
    <!-- dns prefetch -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">	

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
  <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url') ?>" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

    <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<div id="header-wrap">
		<header id="header" class="container">
			
				<a id="logo" href="<?php bloginfo('url'); ?>">
					<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" class="scale-with-grid">
				</a>

			<nav id="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'before' => '<span>/</span>','menu_class' => 'nav group') ); ?>
			</nav><!-- /navigation -->
		</header><!-- /header -->
	</div>


	<?php if(!is_front_page() && !is_archive('work') && !is_home() && !is_single() && !is_singular('work')):?>	
	<div id="tagline-wrap">
		<div class="container">
			<div id="tagline" class="columns sixteen">
				<h1><?php the_title();?></h1>
				<p>Los Angeles Front End Developer<br/>
					PSD to Wordpress, HTML, CSS &amp; jQuery.</p>
					<hr/>
			</div>
		</div>
	</div>
<?php elseif(is_front_page()):?>	
	<div id="tagline-wrap"<?php if ( has_post_thumbnail() ):?> style="background: url(<?php the_post_thumbnail_url();?>) center center / cover;?><?php endif;?>">
	<div id="tagline">
				<h1>I make Wordpress easy</h1>
				<ul>
					<li><a href="<?php bloginfo('url');?>/contact" class="button">Hire Me</a></li>
					<li><a href="<?php bloginfo('url');?>/about" class="button">Learn More</a></li>
				</ul>	
					<p>Los Angeles Wordpress Developer<br/>
						PSD to Wordpress, HTML, CSS.</p>
					<hr/>
			</div>
	</div>
<?php else: ?>
	<div id="tagline-wrap">
		<div class="container">
			<div id="tagline" class="columns sixteen">
				<h1><?php the_title();?></h1>
				<p>Los Angeles Front End Developer<br/>
					PSD to Wordpress, HTML, CSS &amp; jQuery.</p>
					<hr/>
			</div>
		</div>
	</div>
	
	
	<?php endif;?>
	
	<main>