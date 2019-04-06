<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package exam
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <header class="exam-header">
        <div class="exam-container exam-header__container">
            <div class="exam-header__nav">
                <label class="exam-header__nav-burger-label" for="site-navigation">
                    <img src="<?php bloginfo( 'template_url' ); ?>/img/menu_burger.png" alt="burger">
                    <input class="exam-header__nav-burger-checkbox" type="checkbox">
                </label>
                <nav id="site-navigation" class="exam-header__nav-list">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container'      => false,
						'menu_class'     => 'exam-header__nav-list',
					) );
					?>
                </nav>
            </div>
			<?php the_custom_logo(); ?>
            <div class="exam-header__search">
				<?php get_search_form(); ?>
            </div>
        </div>
    </header>
