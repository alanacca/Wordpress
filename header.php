<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title><?php bloginfo('name').wp_title('|')?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="style.css" />
        
        <?php wp_head(); ?>

	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<a class="logo" href="<?php echo home_url()?>"><?php bloginfo('name')?></a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
		<nav id="menu">
			<?php $args = array(                         
				'theme_location'  => 'primary',           
				'menu_class'      => 'menu_class',
				'container_class' => 'container_class',
				'menu'            => '',
				'container'       => 'nav',
				'container_class' => '',
				'container_id'    => 'nav',
				'menu_class'      => '',
				'menu_id'         => 'nav'
				);?>

			<?php wp_nav_menu( $args ); ?>
		</nav>
