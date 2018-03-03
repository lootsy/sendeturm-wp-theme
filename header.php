<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head();?>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,800">
    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body <?php body_class();?>>
      <header id="page-header">
        <div id="main-nav" class="navbar navbar-expand-lg flex-column flex-md-row navbar-dark">
          <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php assets_url();?>brand/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            <?php bloginfo('name');?>
		  </a>
		  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
		  	<?php bootstrap_navigation('header-menu', 'navbar-nav mr-auto mt-2 mt-lg-0'); ?>

            <form class="form-inline my-2 my-lg-0" action="<?php echo home_url( '/' ); ?>" method="get">
               <input class="form-control mr-sm-2" name="s" value="<?php the_search_query(); ?>" type="search" placeholder="<?php _e('Search', 'sendeturm'); ?>" aria-label="<?php _e('Search', 'sendeturm'); ?>">
               <button class="btn my-2 my-sm-0" type="submit"><?php _e('Go', 'sendeturm'); ?></button>
             </form>
          </div>
        </div>
      </header>

<?php return; ?>


<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'sendeturm');?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
the_custom_logo();
if (is_front_page() && is_home()): ?>
				<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name');?></a></h1>
			<?php else: ?>
				<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name');?></a></p>
			<?php
endif;

$description = get_bloginfo('description', 'display');
if ($description || is_customize_preview()): ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
endif;?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'sendeturm');?></button>
			<?php
wp_nav_menu(array(
    'theme_location' => 'menu-1',
    'menu_id' => 'primary-menu',
));
?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">