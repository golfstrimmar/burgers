<!-- ------------------------------- -->

        <ul class="
                      product-page__catalog
                      product-catalog
                      scroll-block-popup
                    ">

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
$q = 'cat=' . $category_id;
 ?>


          <?php 
if ( $count > 0 ){
?>

          <!-- перебор категорий -->
          <?php
foreach ( $product_categories as $product_category ) {
$category_id = $product_category->term_id ;
?>

          <!-- если категории не hits -->
          <?php  if ( $category_id == 25 ):?>



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

        while ( $products->have_posts() ) {
            $products->the_post();
            ?>




          <li class="product-catalog__item product-item">
            <div class="product-item__title">
              <?php 
	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );		?>
            </div>
            <div class="product-item__img">
              <?php 
									/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );
						?>
            </div>
            <div class="product-item__price">
            <?php 
add_action( 'product_price', 'woocommerce_template_single_price');
do_action( 'product_price' ); 
?>
            </div>


             <div class="product-item__link">
 <?php 
add_action( 'product_add_to_cart', 'woocommerce_template_single_add_to_cart');
do_action( 'product_add_to_cart' ); 
?>
              </div>    
          </li>
          <?php   
        
        } ?>
          <!-- // перебор товаров закончен -->
          <?php

         endif;  
             wp_reset_postdata(); 
    }
   wp_reset_query();
} 
 
?>
        </ul>