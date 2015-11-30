<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Basic Page Needs
================================================== -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Preloader
    ================================================== -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>

    <!-- Navigation
    ================================================== -->
    <nav id="site-navigation" role="navigation" class="main-navigation navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header page-scroll">
				<button type="button" class="menu-toggle navbar-toggle" aria-controls="menu" aria-expanded="false">
					<span class="sr-only"><?php _e( 'Toggle Navigation', 'rokophoto' ); ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php
				  $logourl = get_theme_mod('rokophoto_logo_image', get_template_directory_uri().'/img/logo.png');
				  if(!empty($logourl)) {
					echo '<a class="navbar-brand" href="'.esc_url( home_url( '/' ) ).'"><img src="'.$logourl.'" alt="logo"></a>';
				  } else {
					echo '<a class="navbar-brand" href="'.esc_url( home_url( '/' ) ).'"><h4>'.get_bloginfo( 'name' ).'</h4></a>';
				  }
				 ?>


			</div>

			<?php
					wp_nav_menu(array(
					'theme_location' => 'primary',
					'menu' => 'Primary Menu',
					'container' => false,
					'fallback_cb' => 'rokophoto_new_setup',
					'items_wrap' => '<ul class="nav navbar-nav navbar-right">%3$s</ul>'
					));
			 ?>
		</div>
	</nav><!-- #site-navigation -->

    <!-- Blog
    ================================================== -->
    <section id="blog" style="background-image: url('<?php header_image(); ?>');">
    </section>
