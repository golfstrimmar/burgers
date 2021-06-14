<?php 

function data_fetch($postID){


$postID =  $_POST['param'];

?>

<?php get_template_part( './includes/slide-bord' ); ?>
<?php
        
            $args = array( 
                            'showposts' => 70, 
                            'post_type' => 'product',
                            'p' => $postID,
                    				'orderby' => 'date',
                    				'order'   => 'DESC'
            ); 
            $query = new WP_Query( $args );
while ( $query->have_posts() ) {
  $query->the_post();
?>


<div class="product-page__img"> <?php the_post_thumbnail('product'); ?> </div>

<div class="product-page__buttons-red">
  <a class=" product-page__button-add btn btn--success popups-init-js " href="#!" rel="slide-add-layer">Добавить слой</a>
  <a class=" product-page__button-choice btn btn--success popups-init-js-bord init" href="#!" rel="slide-bord">ВЫБРАТЬ БОРТИК</a>
  <!-- <a href="#!" rel='slide-bord' class='popups-init-js-bord'>slide-bord</a> -->
</div>


<div class="product-page__title">
  <?php 
add_action( 'product_title', 'woocommerce_template_single_title');
do_action( 'product_title' ); 
?>

</div>


<div class="product-page__buttons-type">
  <a class="product-page__button-type1 _button-type-active" href="#!">458 ГР</a><a class="product-page__button-type2"
    href="#!">229 ГР</a>
</div>
<div class="product-page__description">
  <?php 
add_action( 'product_excerpt', 'woocommerce_template_single_excerpt');
do_action( 'product_excerpt' ); 
?>
</div>


        <div class="product-page__buttons-white">
          <a class="product-page__button-add-components" href="#!">дОБАВИТЬ ингредиенты</a>
          <a class="product-page__button-remove-components" href="#!">УБРАТЬ ингредиенты</a>
        </div>


<div class="product-page__low">
      <div class="product-page__price">
      <?php 
      add_action( 'product_price', 'woocommerce_template_single_price');
      do_action( 'product_price' ); 
      ?>
                </div>

      <div class="product-page__button-add-cart btn btn--success">
      <?php 
      add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
      do_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
      ?>
      </div>

</div>

<!-- ------------------------------- -->
<?php get_template_part( './includes/cards-popup' ); ?>
<!-- ------------------------------- -->
  

<!-- ------------------------------- -->
<?php 
 
}
 wp_reset_postdata();
}

