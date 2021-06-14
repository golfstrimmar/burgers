<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package burgers
 */

?>

<footer class="footer" id="footer">
  <div class="container">
    <div class="footer__body">
      <div class="footer__item footer-item--first">
        <a class="footer__logo" href="#!">
          <img src="<?php the_field( 'main_logo', 'options' ); ?>" alt="img">
        </a>
        <div class="footer__copyright">© 2021 “crazy cook”</div>
      </div>


      <div class="footer__item footer-item--second">
        <div class="footer-item__title">Crazy cook</div>
        <div class="footer-item__description">
        </div>
      </div>
<!-- 
<?php if ( is_active_sidebar( 'contacts-sidebar' ) ) : ?>
<div  class="footer__item footer-item--second" id="contacts-sidebar">
<?php dynamic_sidebar( 'contacts-sidebar' ); ?>
</div>
<?php endif; ?> -->

      <div class="footer__item footer-item--third">

<?php if ( is_active_sidebar( 'contacts-sidebar-categories' ) ) : ?>
<div  id="contacts-sidebar-categories">
<?php dynamic_sidebar( 'contacts-sidebar-categories' ); ?>
</div>
<?php endif; ?>

      </div>
      <div class="footer-properties__data footer-item--forth">
        <div class="footer-item__title footer-item__title--data">
          Звоните <span>для заказа</span>
        </div>
        <div class="footer__info info">
          <div class="info__phone-data info__phone-data--footer">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/svg/s-3.svg" alt="img" /><a
              class="info__number info__number--footer" href="#!"><?php the_field( 'phone', 'options' ); ?></a>
          </div>
        </div>
      </div>
      <div class="footer-properties__soc footer-item--fith">
        <div class="footer__property">
          <img src="<?php echo get_template_directory_uri()?>/assets/img/svg/s-2.svg" alt="img" />
          <span><?php the_field( 'address', 'options' ); ?></span>

        </div>
        <div class="footer__property">
          <img src="<?php echo get_template_directory_uri()?>/assets/img/svg/s-1.svg" alt="img" />
          <span><?php the_field( 'opening', 'options' ); ?></span>
        </div>
        <div class="footer__soc footer-soc">

          <?php if( have_rows('soc', 'options') ): 
            while( have_rows('soc', 'options') ): the_row(); 
            $platforms = get_field('soc', 'options');
		        $vk = get_sub_field('vk', 'options');
		        $facebook = get_sub_field('facebook', 'options');
		        $instagramm = get_sub_field('instagramm', 'options');
            ?>

          <a class="footer-soc__item" href="<?php echo  $vk ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/svg/s-4.svg" alt="img" />
          </a>

          <a class="footer-soc__item" href="<?php echo  $facebook ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/svg/s-6.svg" alt="img" />
          </a>

          <a class="footer-soc__item" href="<?php echo  $instagramm ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/svg/s-5.svg" alt="img" />
          </a>



          <?php endwhile; ?>
          <?php endif; ?>


        </div>
      </div>
    </div>
  </div>
</footer>
</div>



</div><!-- #page -->


<?php get_template_part( './includes/modals' ); ?>






<?php wp_footer(); ?>

</body>

</html>