<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> > <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('title-tag'); ?> | <?php bloginfo('description'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="Rabid">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link href='<?php echo esc_url(get_template_directory_uri()); ?>/images/favicon.ico' rel='icon' type='image/x-icon'/>

	<style>
		<?php global $zboom; echo $zboom['custom-css']; ?>

		body {
			background-color: <?php echo $zboom['body-background']['background-color']; ?>!important;
			background-image:url(<?php echo $zboom['body-background']['background-image']; ?>)!important;
			background-repeat:<?php echo $zboom['body-background']['background-repeat']; ?>!important;
			background-size:<?php echo $zboom['body-background']['background-size']; ?>!important;
			background-attachment:<?php echo $zboom['body-background']['background-attachment']; ?>!important;
			background-position:<?php echo $zboom['body-background']['background-position']; ?>!important;
		}

		nav .wrap-nav {
			border-style: <?php echo $zboom['menu-border']['border-style']; ?>!important;
			border-width: <?php echo $zboom['menu-border']['border-top']; ?>!important;
			border-color: <?php echo $zboom['menu-border']['border-color']; ?>!important;
		}

		article a {
			color: <?php echo $zboom['link-color']; ?>!important;
		}

	</style>
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--------------Header--------------->
<header>
	<div class="wrap-header zerogrid">
		<div id="logo"><a href="http://localhost/wp/"><img src="<?php global $zboom; echo $zboom['logo-upload']['url']; ?>"/></a></div>
		
		<?php if($zboom['search-visibility'] == 1) : ?>

		<div id="search">
			<div class=""></div>
			<form method="GET" action="<?php esc_url(bloginfo('home')); ?>">
				<input name="s" type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
			</form>
		</div>

	<?php endif; ?>

	</div>
</header>

<nav>
	<div class="wrap-nav zerogrid">
		<div class="menu">
			<?php
				if(function_exists('wp_nav_menu')) {
					wp_nav_menu(array(
						'theme_location' => 'main-menu'
					));
				}
			?>
		</div>
		
		<div class="minimenu"><div>MENU</div>
			<select onchange="location=this.value">
				<option></option>
				<option value="index.html">Home</option>
				<option value="blog.html">Blog</option>
				<option value="gallery.html">Gallery</option>
				<option value="single.html">About</option>
				<option value="contact.html">Contact</option>
			</select>
		</div>		
	</div>
</nav>