<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fire_Nerd
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header  style="background: linear-gradient( rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5)100%), url(<?php echo get_template_directory_uri() ?>/img/bg.jpg); background-position: center center; background-repeat: no-repeat;background-attachment: fixed; background-size: cover; height:510px; background-color:#464646;">
		
			
		<nav id="site-navigation" class="main-navigation navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
			<div class="site-branding-text">
					<?php if ( is_front_page() && is_home() ) : ?>
		                    <h1 class="site-title h3 mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand mb-0"><?php bloginfo( 'name' ); ?></a></h1>
		                  <?php else : ?>
		                    <h2 class="site-title h3 mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand mb-0"><?php bloginfo( 'name' ); ?></a></h2>
		                  <?php
						endif;
					?>
			</div>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-menu-wrap" aria-controls="primary-menu-wrap" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

                  <?php
					wp_nav_menu( array(
						'theme_location'  => 'menu-1',
						'menu_id'         => 'primary-menu',
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'primary-menu-wrap',
						'menu_class'      => 'navbar-nav ml-auto',
			            'fallback_cb'     => '__return_false',
			            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			            'depth'           => 2,
			            'walker'          => new WP_bootstrap_4_walker_nav_menu()
					) );
				?>
             </div>
		</nav><!-- #site-navigation -->
        
            <div class="container" style="padding-top: 16px;">
                         <div class="row justify-content-md-center cor-paragrafo">
                              <div class="col-md-8">
                                        <div class="contents text-center" style="margin-bottom: 35px;">
                                                   	<?php the_custom_logo();?>
                                     </div>
                                     <div class="text-center"  style="height: 1px; border-top: 1px solid #ebebeb; display: block; position: relative; top: 1px; width: 20%; margin-left: auto;
    margin-right: auto;"></div>
                                       <div class="contents text-center" style="margin-top: 30px;">
                                                   <p class="lead  wow fadeIn cor-paragrafo" data-wow-duration="1000ms" data-wow-delay="400ms" style="color:#fff">Seu cantinho NERD</p>
                                       </div>
                              </div>
                        </div>
               </div>

	</header><!-- #masthead -->

