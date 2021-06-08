<?php
/**
 * Quick view content.
 *
 * @author  YITH
 * @package YITH WooCommerce Quick View
 * @version 1.0.0
 */

defined( 'YITH_WCQV' ) || exit; // Exit if accessed directly.

while ( have_posts() ) :
	the_post();
	?>



<section class="modaL" id="modaL">
          <div class="popups slide-1-popup" id="slide-1-popup">
            <div class="popups__overlay">
              <a class="button-phone" href="#!"></a
              ><a class="button-cart" href="#!"
                ><span class="button-cart-number"> 1</span></a
              >
              <div class="popups__inner product-page">
                <i class="icon-x popup__close close-js"></i>
                <div class="product-page__wrapper">
                  
                
                  <!-- ---------------- -->
                <div
                    class="product-page__img"
                  >
                	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>
                
                </div>
                  <!-- ------------------ -->



                  <div class="product-page__buttons-red">
                    <a
                      class="
                        product-page__button-add
                        btn btn--success
                        popups-init-js
                      "
                      href="#!"
                      rel="slide-add-layer"
                      >Добавить слой</a
                    ><a
                      class="
                        product-page__button-choice
                        btn btn--success
                        popups-init-js
                      "
                      href="#!"
                      rel="slide-bord"
                    >
                      ВЫБРАТЬ БОРТИК</a
                    >
                  </div>


                  <div class="product-page__title">
                    <h3>
                      
                  	<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>






                  
                  </h3>
                  
                  </div>





                  <div class="product-page__buttons-type">
                    <a
                      class="product-page__button-type1 _button-type-active"
                      href="#!"
                      >458 ГР</a
                    ><a class="product-page__button-type2" href="#!">229 ГР</a>
                            </div>
                            <div class="product-page__description">

                               <?php do_action( 'yith_wcqv_product_content' );?> 
                            </div>
                            <div class="product-page__buttons-white">
                                <a class="product-page__button-add-components" href="#!">дОБАВИТЬ ингредиенты</a
                    ><a class="product-page__button-remove-components" href="#!"
                      >УБРАТЬ ингредиенты</a
                    >
                  </div>
                  <ul
                    class="
                      product-page__catalog
                      product-catalog
                      scroll-block-popup
                    "
                  >
                    <li class="product-catalog__item product-item">
                      <div class="product-item__title"><h5>Шампиньоны</h5></div>
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/card/i-1.png');
                        "
                      ></div>
                      <div class="product-item__price">30 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div class="product-item__title"><h5>Шампиньоны</h5></div>
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/card/i-1.png');
                        "
                      ></div>
                      <div class="product-item__price">30 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div class="product-item__title"><h5>Шампиньоны</h5></div>
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/card/i-1.png');
                        "
                      ></div>
                      <div class="product-item__price">30 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div class="product-item__title"><h5>Шампиньоны</h5></div>
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/card/i-1.png');
                        "
                      ></div>
                      <div class="product-item__price">30 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div class="product-item__title"><h5>Шампиньоны</h5></div>
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/card/i-1.png');
                        "
                      ></div>
                      <div class="product-item__price">30 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div class="product-item__title"><h5>Шампиньоны</h5></div>
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/card/i-1.png');
                        "
                      ></div>
                      <div class="product-item__price">30 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div class="product-item__title"><h5>Шампиньоны</h5></div>
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/card/i-1.png');
                        "
                      ></div>
                      <div class="product-item__price">30 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div class="product-item__title"><h5>Шампиньоны</h5></div>
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/card/i-1.png');
                        "
                      ></div>
                      <div class="product-item__price">30 руб.</div>
                    </li>
                  </ul>
                  <div class="product-page__low">
                    <div class="product-page__price">520 <span>руб.</span></div>
                    <a
                      class="product-page__button-add-cart btn btn--success"
                      href="#!"
                      >выбрать</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="popups slide-add-layer" id="slide-add-layer">
            <div class="popups__overlay">
              <a class="button-phone" href="#!"></a
              ><a class="button-cart" href="#!"
                ><span class="button-cart-number"> 1</span></a
              >
              <div class="popups__inner">
                <i class="icon-x popup__close close-js"></i>
                <div class="slide-add-layer__wrapper add-wrap">
                  <ul
                    class="
                      add-wrap__catalog
                      add-wrap-catalog
                      product-catalog
                      scroll-block-popup-add
                    "
                  >
                    <li class="product-catalog__item product-item">
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/card/i-1.png');
                        "
                      ></div>
                      <div class="product-item__title">
                        <h5>Кисло-сладкий цыпленок</h5>
                      </div>
                      <div class="product-item__price">300 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/card/i-1.png');
                        "
                      ></div>
                      <div class="product-item__title"><h5>Ветчина</h5></div>
                      <div class="product-item__price">300 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/card/i-1.png');
                        "
                      ></div>
                      <div class="product-item__title">
                        <h5>Кисло-сладкий цыпленок</h5>
                      </div>
                      <div class="product-item__price">300 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/card/i-1.png');
                        "
                      ></div>
                      <div class="product-item__title">
                        <h5>Кисло-сладкий цыпленок</h5>
                      </div>
                      <div class="product-item__price">300 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/card/i-1.png');
                        "
                      ></div>
                      <div class="product-item__title">
                        <h5>Кисло-сладкий цыпленок</h5>
                      </div>
                      <div class="product-item__price">300 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/card/i-1.png');
                        "
                      ></div>
                      <div class="product-item__title">
                        <h5>Кисло-сладкий цыпленок</h5>
                      </div>
                      <div class="product-item__price">300 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/card/i-1.png');
                        "
                      ></div>
                      <div class="product-item__title">
                        <h5>Кисло-сладкий цыпленок</h5>
                      </div>
                      <div class="product-item__price">300 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/card/i-1.png');
                        "
                      ></div>
                      <div class="product-item__title">
                        <h5>Кисло-сладкий цыпленок</h5>
                      </div>
                      <div class="product-item__price">300 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/card/i-1.png');
                        "
                      ></div>
                      <div class="product-item__title">
                        <h5>Кисло-сладкий цыпленок</h5>
                      </div>
                      <div class="product-item__price">300 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/card/i-1.png');
                        "
                      ></div>
                      <div class="product-item__title">
                        <h5>Кисло-сладкий цыпленок</h5>
                      </div>
                      <div class="product-item__price">300 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/card/i-1.png');
                        "
                      ></div>
                      <div class="product-item__title">
                        <h5>Кисло-сладкий цыпленок</h5>
                      </div>
                      <div class="product-item__price">300 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/card/i-1.png');
                        "
                      ></div>
                      <div class="product-item__title">
                        <h5>Кисло-сладкий цыпленок</h5>
                      </div>
                      <div class="product-item__price">300 руб.</div>
                    </li>
                  </ul>
                  <div class="add-wrap__title">
                    <h3>
                      <span class="_red-span">Добавить </span><span>слой</span>
                    </h3>
                  </div>
                  <div class="add-wrap__cards">
                    <div class="add-wrap__card add-product-card">
                      <i class="icon-x"></i>
                      <div
                        class="add-product-card__img"
                        style="
                          background-image: url('assets/img/png/card/i-1.png');
                        "
                      ></div>
                      <div class="add-product-card__title"><h4>Цезарь</h4></div>
                      <div class="add-product-card__tab">
                        <section class="tabs" id="tabs">
                          <div class="tabs-item">
                            <div class="tabs-item__title tabs-title-js">
                              <i
                                class="
                                  icon-chevron-down
                                  tabs-item__img
                                  tabs-img-js
                                "
                              ></i
                              ><span> Состав пиццы</span>
                            </div>
                            <div class="tabs__drop tabs-drop tabs-drop-js">
                              <div class="tabs-drop__info">
                                Свежие листья салата айсберг, цыпленок, томаты
                                черри, сыры чеддер и пармезан, моцарелла, соус
                                альфредо, соус цезарьСвежие листья салата
                                айсберг, цыпленок, томаты черри, сыры чеддер и
                                пармезан, моцарелла, соус альфредо, соус цезарь
                              </div>
                            </div>
                          </div>
                        </section>
                      </div>
                      <div class="add-product-card__price">300 руб.</div>
                    </div>
                    <div
                      class="
                        add-wrap__card
                        add-product-card add-product-card--empty
                      "
                    >
                      <a class="add-product-card__link" href="#!"></a>
                                <div class="add-product-card__img--empty" style="background-image: url('assets/img/svg/piza.svg')"></div>
                                <div class="add-product-card__text--empty">
                                    <p>выберите 2</p>
                                    <p>ярус пиццы</p>
                                </div>
                            </div>
                            <div class="
                        add-wrap__card
                        add-product-card add-product-card--empty
                      ">
                                <a class="add-product-card__link" href="#!"></a>
                                <div class="add-product-card__img--empty" style="background-image: url('assets/img/svg/piza.svg')"></div>
                                <div class="add-product-card__text--empty">
                                    <p>выберите 2</p>
                                    <p>ярус пиццы</p>
                                </div>
                            </div>
                            <div class="
                        add-wrap__card
                        add-product-card add-product-card--empty
                      ">
                                <a class="add-product-card__link" href="#!"></a>
                                <div class="add-product-card__img--empty" style="background-image: url('assets/img/svg/piza.svg')"></div>
                                <div class="add-product-card__text--empty">
                                    <p>выберите 2</p>
                                    <p>ярус пиццы</p>
                                </div>
                            </div>
                        </div>
                        <div class="add-wrap__sum">
                            <span>Итого:</span>
                            <div class="add-wrap__number">520<span>руб</span></div>
                        </div>
                        <a class="add-wrap__button btn btn--success" href="#!">выбрать</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="popups slide-add-layer slide-bord" id="slide-bord">
            <div class="popups__overlay">
              <a class="button-phone" href="#!"></a
              ><a class="button-cart" href="#!"
                ><span class="button-cart-number"> 1</span></a
              >
              <div class="popups__inner">
                <i class="icon-x popup__close close-js"></i>
                <div class="slide-add-layer__wrapper add-wrap">
                  <ul
                    class="
                      add-wrap__catalog
                      add-wrap-catalog
                      product-catalog
                      scroll-block-popup-add
                    "
                  >
                    <li class="product-catalog__item product-item">
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/bord/i-1.png');
                        "
                      ></div>
                      <div class="product-item__title"><h5>моцарела</h5></div>
                      <div class="product-item__price">120 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/bord/i-2.png');
                        "
                      ></div>
                      <div class="product-item__title"><h5>пармезан</h5></div>
                      <div class="product-item__price">120 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/bord/i-3.png');
                        "
                      ></div>
                      <div class="product-item__title"><h5>ЭДАМ</h5></div>
                      <div class="product-item__price">120 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/bord/i-4.png');
                        "
                      ></div>
                      <div class="product-item__title"><h5>ГОРГОНЗОЛА</h5></div>
                      <div class="product-item__price">120 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/bord/i-5.png');
                        "
                      ></div>
                      <div class="product-item__title"><h5>Сулугуни</h5></div>
                      <div class="product-item__price">120 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/bord/i-6.png');
                        "
                      ></div>
                      <div class="product-item__title"><h5>Фета</h5></div>
                      <div class="product-item__price">120 руб.</div>
                    </li>
                    <li class="product-catalog__item product-item">
                      <div
                        class="product-item__img"
                        style="
                          background-image: url('assets/img/png/bord/i-7.png');
                        "
                      ></div>
                      <div class="product-item__title"><h5>МЮНСТЕР</h5></div>
                      <div class="product-item__price">120 руб.</div>
                    </li>
                  </ul>
                  <div class="add-wrap__title">
                    <h3>
                      <span>Выбрать </span><span class="_red-span">бортик</span>
                    </h3>
                  </div>
                  <div class="add-wrap__cards">
                    <div
                      class="
                        add-wrap__card
                        add-product-card add-product-card--empty
                      "
                    >
                      <a class="add-product-card__link" href="#!"></a>
                        <div class="add-product-card__img--empty" style="
                          background-image: url('assets/img/svg/cheese.svg');
                        "></div>
                        <div class="add-product-card__text--empty">
                            <p>выберите</p>
                            <p>сыр</p>
                        </div>
                    </div>
                </div>
                <div class="add-wrap__sum">
                    <span>Итого:</span>
                    <div class="add-wrap__number">520<span>руб</span></div>
                </div>
                <a class="add-wrap__button btn btn--success" href="#!">выбрать</a
                  >
                </div>
              </div>
            </div>
          </div>
         
        </section>



















<!-- 
<div class="product">

		<div id="product-<?php the_ID(); ?>" <?php post_class( 'product' ); ?>>

			<?php do_action( 'yith_wcqv_product_image' ); ?>

			<div class="summary entry-summary">
				<div class="summary-content">
					<?php do_action( 'yith_wcqv_product_summary' ); ?>
				</div>
			</div>

		</div>

	</div> -->






	<?php
endwhile; // end of the loop.
