<?php
/*
Template Name: crazy-1
*/
defined( 'ABSPATH' ) || exit;
get_header( 'crazy' );
?>



<section class="catalog-crazy-1" id="catalog-crazy-1">
  <a class="button-phone" href="#!"></a>
<div class="button-cart" >
  <span class="button-cart-number">
     <?php echo sprintf($woocommerce->cart->cart_contents_count); ?>
  </span>
</div>
  <div class="catalog-crazy-1__title-main crazy-main-title">
    <h2><span class="_red">Crazy </span><span>меню</span></h2>
  </div>

  <div class="container">
    <div class="catalog-crazy-1__description">Cобери сам</div>
    <div class="catalog-crazy-1__body" id="catalog-1">
      <div class="catalog-crazy-1__title crazy-title">
        <h3>1. Выбери ХЛЕБ</h3>
        <a class="catalog-crazy-1__link" href="http://pizza.newstory.group/crazy-2/"></a>
      </div>

      <ul class="catalog-crazy-1__content crazy-1-content _foget-scroll">

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

        <?php
foreach ( $product_categories as $product_category ) {
$category_id = $product_category->term_id ;
?>
        <?php  if ( $category_id == 23):?>

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

        while ( $products->have_posts() ) {
            $products->the_post();
            ?>


        <li class="crazy-1-content__item crazy-item">

          <div class="crazy-item__title">
            <?php 
	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );		?>

          </div>

          <div class="  crazy-item__img">
            <?php 
									/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );
						?>
          </div>

          <p class="crazy-item__price">
            <?php 
  /**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */	
	do_action( 'woocommerce_after_shop_loop_item_title' );
		?>
          </p>


          <div class="crazy-item__link">
   <?php 
	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>



          </div>         


        </li>

        <?php }?>
        <?php endif;
}
?>
        <?php 
      
       } ?>
      </ul>
    </div>

 
  </div>
</section>

<?php 
get_footer();