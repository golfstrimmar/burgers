<section class="new" id="new">
  <div class="container">
    <div class="new__title _title">
      <h2>Хиты и новинки</h2>
    </div>
  </div>
  <div class="new__slider">
    <section class="slider-models" id="slider-model">
      <div class="container">
        <div class="slider-models__body">
          <div class="slider__slider slider-models__content slider">
           
          
          
           <ul class="
                      slider-models__slider
                      slider__body slider-js-2
                      scroll-block
                    ">
          
          
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


              <li class="slider-models__item slider-card">

                <a class="slider-card__link" href="#!">  
                 
                  <div class="new__lable new-lable">
                    <span>ХИТ</span>
                  </div>
                  
                  <div class="boxses-item">

  <div class="boxses-item__img">
            <?php 
									/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );
								?>
  </div>


  <div class="boxses-item__title">
            <?php 
	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );		?>
							
          </div>
                    <div class="boxses-item__text">
                         <?php 
  /**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */	
	do_action( 'woocommerce_after_shop_loop_item_title' );
		?>
                    </div>
                  </div>

                  </a>
              </li>

             
        <?php }?>
              
        </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>