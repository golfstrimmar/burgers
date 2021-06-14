
	
	
	<li	<?php wc_product_class( 'card-object	piza__item product-card', $product ); ?>   >
						
							<!-- открытие попап окна  -->
							<a
                  class="product-card__link popups-init-js link_popups"
                  href="#!"
                  rel="slide-1-popup"
									data="<?php the_ID(); ?>"
              >
							</a> 
							<!-- открытие попап окна  -->



          <div class="product-card__new-lable new-lable">
            <span>ХИТ</span>
          </div>


          <div class="product-card__img">
            <?php 
									/**
	 * Hook: woocommerce_before_shop_loop_item_title.
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
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */	
	do_action( 'woocommerce_after_shop_loop_item_title' );
		?>
          </div>

<a href="http://pizza.newstory.group/cart/"	class="product-card__button">
<?php 
	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
</a> 

    </li>