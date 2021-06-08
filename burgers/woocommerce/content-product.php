<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>




        <li <?php wc_product_class( '	piza__item product-card', $product ); ?>>
  
                <a  class="product-card__link popups-init-js"
                  href="#!"
                  rel="slide-1-popup"
                ></a>

          <div class="product-card__new-lable new-lable">
            <span>ХИТ</span>
          </div>
		
			
					<div class="product-card__img">
            <?php 
									/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );
								?>
          </div>
			
			
			
					<div class="product-card__title">
            <?php 
									/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );
									?>
          </div>
			
			
					<div class="product-card__text">
            <?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
          </div>

			
					<div class="product-card__price">
            <?php 
/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */	
	do_action( 'woocommerce_after_shop_loop_item_title' );
		?>





          </div>

        

<form class="cart" method="post" enctype="multipart/form-data">
<?php do_action( "woocommerce_before_add_to_cart_button" ); ?>


<div class="product-card__number">
	
<?php if ( ! $product->is_sold_individually() )
woocommerce_quantity_input( array(
"min_value" => apply_filters( "woocommerce_quantity_input_min", 1, $product ),
"max_value" => apply_filters( "woocommerce_quantity_input_max", $product->backorders_allowed() ?  : $product->get_stock_quantity(), $product )
) );
?>

<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />
</div>

<button type="submit" class="single_add_to_cart_button button alt product-card__button btn btn--success">
выбрать 
</button>


<?php do_action( "woocommerce_after_add_to_cart_button" ); ?>
</form>
<?php do_action( "woocommerce_after_add_to_cart_form" ); ?>

        </li>


