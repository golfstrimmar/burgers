<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;
get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header">
  <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
  <h1 class="woocommerce-products-header__title page-title">
    <?php woocommerce_page_title(); ?>
  </h1>
  <?php endif; ?>

  <?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>

<?php  include(get_template_directory().'/includes/bunners.php'); ?>
<!-- ======================================================= -->

<div class="button-cart" >
  <span class="button-cart-number">
     
     <?php echo sprintf($woocommerce->cart->cart_contents_count); ?>
  </span>
</div>
          

<?php
$args = array(
    'number'     => $number,
    'orderby'    => 'title',
    'order'      => 'ASC',
    'hide_empty' => $hide_empty,
    'include'    => $ids
);
$product_categories = get_terms( 'product_cat', $args );
$count = count($product_categories);
$category_id_sous = get_cat_ID('sauces');
$q = 'cat=' . $category_id;
 ?>


<?php 
if ( $count > 0 ){
?>



<!-- если категория hits -->
<?php
foreach ( $product_categories as $product_category ) {
$category_id = $product_category->term_id ;
?>
<?php  if ( $category_id == 22):?>
<?php  include(get_template_directory().'/includes/new.php'); ?>
<?php endif;
}
?>
<!--/ если категория hits -->






<section class="piza" id="piza">
  <div class="piza__wrapper">
    <div class="piza__decor-1"></div>
    <div class="piza__decor-2"></div>
    <div class="piza__decor-3"></div>
    <a class="button-phone" href="#!"></a>
   
   
<!--    
    <a class="button-cart" href="#!">
      <span class="button-cart-number"> 1</span>
    </a> -->



    <div class="container">



<!-- перебор категорий -->
<?php
foreach ( $product_categories as $product_category ) {
$category_id = $product_category->term_id ;
?>

      <!-- если категории не hits -->
      <?php  if ( $category_id !== 22 &&  $category_id !== 23 && $category_id !== 24&& $category_id !== 25):?>


<!-- // не выводится заголовок у соусов -->
   <?php  if ( $category_id !== 21):  ?>
      <div class="piza__title _title">
        <h2>
          <?php echo  $product_category->name;  ?>
        </h2>
      </div>
    <?php endif; ?>
<!-- // не выводится заголовок у соусов -->

 
   

    <!-- выводится определенная обертка -->
      <?php  if ( $category_id !== 21 ):?>
        <ul class="piza__body" id="category_<?php echo $category_id ?>">
        <?php else:?>
        <ul class="rollers__body-sauce body-sauce scroll-lg" id="category_<?php echo $category_id ?>">
      <?php endif;  ?>
    <!-- /выводится определенная обертка -->


       <!-- // ---------перебор товаров в цикле --------- -->
       <?php  $args = array(
            'posts_per_page' => -1,
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'product_cat',
                    'field' => 'slug',
                    // 'terms' => 'white-wines'
                    'terms' => $product_category->slug
                )
            ),
            'post_type' => 'product',
            // 'orderby' => 'title,'
        );
        $products = new WP_Query( $args );

        while ( $products -> have_posts() ) {
            $products ->  the_post();
            ?>
          <!-- -если не соусы, то вывод полная карточка- -->
          <?php  if ( $category_id !== 21):   ?>
          <?php  include(get_template_directory().'/includes/card-custom.php'); ?>
          <?php  else: ?>
          <!-- если это соусы то другая верстка-->
          <?php  include(get_template_directory().'/includes/card-custom-sous.php'); ?>
          <?php endif;  ?>
          <!-- --------------- -->
          <?php   } ?>
        <!-- // перебор товаров закончен -->

        </ul>
        <?php
         endif;  
    }
} 
?>
    </div>
  </div>
</section>




     <section class="map" id="map">
        <div class="map__wrapper">
          <div class="container">
            <div class="map-item__title"><h2>Карта доставки</h2></div>
          </div>
        </div>
      </section>


<!--  -->


<!-- ====================== -->

<?php 
get_footer( 'shop' );