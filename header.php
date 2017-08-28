<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php include_once("analyticstracking.php") ?>
</head>
<body <?php body_class();?>>

<header class="header container-fluid">	
	<div class="container"> 
		<div class="row">
			<div class="col-md-3">
			<a title="<?php bloginfo( 'name' ); ?>" href="/"><img class="logo-top" src="<?php $custom_logo_id = get_theme_mod( 'custom_logo' ); $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); echo $image[0];?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
			</div>
			<div class="col-md-6"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></div>
			<div class="col-md-3">
				<a href="tel:0545472845" class="phone">
					<span class="text">Bel ons</span><i class="fa fa-mobile"></i> 0545 - 472 845
				</a>
			</div>

		</div>
	</div>
</header>

<?php if ( has_post_thumbnail() ) : ?>
        <div class="wallpaper"><?php the_post_thumbnail(); ?></div>
<?php endif; ?>

<section class="container">