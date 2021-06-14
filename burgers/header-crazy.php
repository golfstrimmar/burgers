<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package burgers
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
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <div class="wrapper">



      <section class="first first--crazy">
        <header class="header">
          <div class="header__body container">
            <div class="header__high">


<?php if ( is_front_page())  :	?>
              <div class="header__logo">
                <img src="<?php the_field( 'main_logo', 'options' ); ?>" alt="img">
              </div>
              <?php
else: 
?>
              <a class="header__logo" href="<?php echo get_home_url() ?>">
                <img src="<?php the_field( 'main_logo', 'options' ); ?>" alt="img">
                <div class="logo-mask" style="background-image: url('<?php the_field( 'logo_crazy', 'options' ); ?>')">
                </div>
              </a>
              <?php
endif;
?>



              <div class="header__properties">
                <div class="header__property header__property--address">
                  <img src="assets/img/svg/s-2.svg" alt="img" />
                  <span><?php the_field( 'address', 'options' ); ?></span>
                </div>
                <div class="header__property header__property--work">
                  <img src="assets/img/svg/s-1.svg" alt="img" />
                  <span><?php the_field( 'opening', 'options' ); ?></span>
                </div>
              </div>
              <div class="header__info info">
                <div class="info__phone-data">
                  <img src="assets/img/svg/s-3.svg" alt="img" /><a class="info__number" href="#!">
                    <?php the_field( 'phone', 'options' ); ?></a>
                </div>
                <div class="info__phone">Заказать звонок</div>
              </div>
              <div class="header__burger"><span></span></div>
            </div>
          </div>
          <nav class="header__menu menu">
            <ul class="menu__list scroll-block">
              <!-- <div id="sidebar-header">
<?php dynamic_sidebar( 'Slide-sidebar' ); ?>
</div> -->
              <?php wp_nav_menu([
'theme_location' => 'short-menu',
'menu'            => 'short-menu',
'container' => null,
'menu_class' => 'menu__list',
'echo'            => true,
'depth'           => 0,
])
?>
            </ul>
          </nav>
        </header>
      </section>