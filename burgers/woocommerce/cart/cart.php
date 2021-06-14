<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;
do_action( 'woocommerce_before_cart' ); ?>



<section class="piza cart" id="cart">

  <div class="piza__wrapper">
    <div class="piza__decor-1"></div>
    <div class="piza__decor-2"></div>
    <div class="piza__decor-3"></div>
    <div class="piza__decor-4"></div>

  <a class="button-phone" href="#!"></a>
  <div class="button-cart" >
  <span class="button-cart-number">
     <?php echo sprintf($woocommerce->cart->cart_contents_count); ?>
  </span>
</div>

       



    <div class="container">
      <div class="piza__title _title">
        <h2>Корзина</h2>
      </div>




      <div class="cart__content">
        <section class="cart__list list" id="list">


          <div class="list__title">
            <h3>Состав заказа:</h3>
          </div>

          <div class="list__items">
            <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
              <?php do_action( 'woocommerce_before_cart_table' ); ?>
              <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
							<tbody>
								<?php do_action( 'woocommerce_before_cart_contents' ); ?>
<!-- ----------- -->
	<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
		
			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
	<tr class="woocommerce-cart-form__cart-item list__item list-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">


						<td class="list-item__close	product-remove">
							<?php
								echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
									'woocommerce_cart_item_remove_link',
									sprintf(
										'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
										esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
										esc_html__( 'Remove this item', 'woocommerce' ),
										esc_attr( $product_id ),
										esc_attr( $_product->get_sku() )
									),
									$cart_item_key
								);
							?>
						</td>

						<td class="product-thumbnail	list-item__img">
						<?php
						$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

						if ( ! $product_permalink ) {
							echo $thumbnail; // PHPCS: XSS ok.
						} else {
							printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
						}
						?>
						</td>


						<td class="product-name	list-item__title" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
						<?php
						if ( ! $product_permalink ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
						} else {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
						}

						do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

						// Meta data.
						echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

						// Backorder notification.
						if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
						}
						?>
						<a class="list-item__change" href="#!"><span>изменить ингредиенты</span></a>
						</td>


					<td class="product-quantity	list-item__number list-item-number	" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
				
  
        
        <?php
						if ( $_product->is_sold_individually() ) {
							$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
						} else {
							$product_quantity = woocommerce_quantity_input(
								array(
									'input_name'   => "cart[{$cart_item_key}][qty]",
									'input_value'  => $cart_item['quantity'],
									'max_value'    => $_product->get_max_purchase_quantity(),
									'min_value'    => '1',
									'product_name' => $_product->get_name(),
								),
								$_product,
								false
							);
						}

						echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
						?>
						</td>


						<td class="product-subtotal	list-item__sum" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
						<span>Сумма</span>
						<span> 
						<?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
						</span>
						</td>




	</tr>
				<?php
				}
				}
			?>

<!-- ----------- -->

									<?php do_action( 'woocommerce_after_cart_contents' ); ?>
							</tbody>
						</table>
							<?php do_action( 'woocommerce_after_cart_table' ); ?>
						</form>


<?php do_action( 'woocommerce_before_cart_collaterals' ); ?> 

<div class="cart-collaterals	list__payment list-payment">
	<span class="_red">Сумма </span><span>к оплате:</span>
	 <div class="list-payment__number">
	<?php
		/**
		 * Cart collaterals hook.
		 *
		 * @hooked woocommerce_cross_sell_display
		 * @hooked woocommerce_cart_totals - 10
		 */
		do_action( 'woocommerce_cart_collaterals' );
	?>
	</div>
</div>

<?php do_action( 'woocommerce_after_cart' ); ?> 

          </div>

          <!-- ============================================= -->
        </section>
        <!-- ============================================= -->
        <section class="cart__forget forget" id="forget">
          <div class="forget__title">
            <h4>
              <span>Не забудь </span><span class="_red">напиток!</span>
            </h4>
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
$q = 'cat=' . $category_id;
 ?>
<ul class="forget__catalog forget-catalog _foget-scroll">
	
<?php
foreach ( $product_categories as $product_category ) {
$category_id = $product_category->term_id ;
?>

<?php  if ( $category_id == 21):?>

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

						<li class="forget-catalog__item forget-item">
                   <!-- <div class="product-card__link"> 
  										<?php do_action( 'woocommerce_before_shop_loop_item' );?>
										</div>   -->
				

  <div class="forget-item__img">
            <?php 
									/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );
								?>
          </div>





                    <div class="forget-item__description">
                      <span> <?php 
	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );
									?> </span>
									<span><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?></span>
                    </div>


                    <div class="forget-item__price">
                      <span>            <?php 
  /**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */	
	do_action( 'woocommerce_after_shop_loop_item_title' );
		?> </span>
		<!-- <span>руб.</span> -->
                    </div>
										<!-- <div class="forget-item__number forget-item-number">
                      <a class="forget-item-number__count" href="#!">1</a
                      ><a class="forget-item-number__inkr" href="#!"></a>
                    </div> -->
                
								<?php 
	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
								
								
									</li>
        
          <?php   } ?>
        <!-- // перебор товаров закончен -->
<?php endif;
}
?>		
				</ul>
				
		






        </section>
        <!-- ======================================== -->
        <section class="cart__ordering ordering" id="ordering">
          <div class="ordering__wrap">
            <div class="ordering__title">
              <h3>Оформление заказа :</h3>
            </div>
            <div class="ordering__form connect">
              <form class="connect__form connect__form--contacts">
                <div class="connect__form-item connect-delivery">
                  <div class="connect-delivery__item">
                    <input id="cb10" type="radio" checked="checked" name="delivery" /><label for="cb10">доставка</label>
                  </div>
                  <div class="connect-delivery__item">
                    <input id="cb11" type="radio" name="delivery" /><label for="cb11">самовывоз</label>
                  </div>
                </div>
                <div class="connect__form-item connect__form-item--name">
                  <label for="name">Имя*</label><input id="name" required="" placeholder=" Введите имя" />
                </div>
                <div class="connect__form-item connect__form-item--phone">
                  <label for="phone">Телефон*</label><input id="phone" type="phone" required=""
                    placeholder="+7 (999) 999-99-99" />
                </div>
                <div class="connect__form-item connect__form-item--email">
                  <label for="email">Улица*</label><input id="email" type="address" required=""
                    placeholder=" Введите улицу" />
                </div>
                <div class="connect__block connect__form-item--address">
                  <div class="connect__form-item connect__form-item--block">
                    <input id="house" type="address" required="" placeholder=" № дома" /><label for="house">Дом*</label>
                  </div>
                  <div class="connect__form-item connect__form-item--block">
                    <input id="entrance" type="address" required="" placeholder="№ подъезда " /><label
                      for="entrance">Подъезд</label>
                  </div>
                </div>
                <div class="connect__form-item connect__form-item--message">
                  <label for="message">Примечание к заказу (необязательно)</label><textarea id="message" type="text"
                    required="" placeholder=" " cols="40" rows="6"></textarea>
                </div>
                <div class="connect__form-item connect-data">
                  <div class="connect-data__item">
                    <span>Заказ :</span><span class="connect-data__price"> 400 руб.</span>
                  </div>
                  <div class="connect-data__item">
                    <span>Доставка :</span><span class="connect-data__delivery">бесплатно</span>
                  </div>
                  <div class="connect-data__item">
                    <span>Итого :</span><span class="connect-data__total">400 руб.</span>
                  </div>
                </div>
                <div class="
                          connect__form-item connect-data connect-data--check
                        ">
                  <div class="connect-data__title">
                    <h5>Способ оплаты:</h5>
                  </div>
                  <div class="connect-data__item connect-check">
                    <div class="connect-check__item">
                      <input id="cb1" type="radio" name="check" /><label for="cb1">Наличными при получении</label>
                    </div>
                    <div class="connect-check__item">
                      <input id="cb2" type="radio" name="check" /><label for="cb2">Банковской картой</label>
                    </div>
                    <div class="connect-check__item">
                      <input id="cb3" type="radio" name="check" /><label for="cb3">Онлайн на сайте</label>
                    </div>
                  </div>
                </div>
                <div class="form__submit-button btn btn--success" id="submit-button" type="submit">
                  Подтвердить заказ
                </div>
              </form>
              <div class="connect__personal">
                <p>Нажимая кнопку “Подтвертить заказ” я соглашаюсь с</p>
                <a class="connect__link" href="#!">политикой обработки персональных данных</a>
              </div>
            </div>
          </div>
        </section>
        </table>
        <?php do_action( 'woocommerce_after_cart_table' ); ?>
        </form>

      </div>
    </div>
  </div>
</section>