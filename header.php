<!DOCTYPE html>
<html lang="en">
  <head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
		<meta charset="utf-8">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="author" href="https://plus.google.com/b/104696969479680323299/104696969479680323299" />
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-27698256-1', 'perranporthladiessection.com');
			ga('send', 'pageview');

		</script>

		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<?php wp_head() ?>
  </head>
  
  
  <body <?php body_class(); ?>>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container text-left">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo get_site_url(); ?>">PGCLS</a>
			</div>
				<div class="collapse navbar-collapse">
				<?php wp_nav_menu( array ( 
					'container' => '',
					'container_class' => 'collapse navbar-collapse',
					'theme_location' => 'top_menu',
					'menu_class' => 'nav navbar-nav',
					'walker' => new Bootstrap_Walker(),
					) );
				?>
				<a class="navbar-right" href="https://www.facebook.com/pages/Perranporth-Ladies-Section/273173816076656" target="_blank"><img height="40" alt="Facebook page for the Ladies Section" src="<?php echo get_stylesheet_directory_uri(); ?>/Facebook_Home_logo.svg"></a>
	        </div>
		</div> <!-- end container -->
	</div> <!-- end navbar -->


    <div class="container main-body">