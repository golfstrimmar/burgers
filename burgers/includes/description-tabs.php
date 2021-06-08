<?php 
 // добавление табов описания товара на странице товара===== -->
add_action( 'woocommerce_single_product_summary', 'add_block_edit_page_form',	20 );
function add_block_edit_page_form( $post ) {
	?>


<div class="description-tabs">
  <div class="tabs">
  <!-- ==================nav======================= -->
	<nav class="tabs__items">


      <?php 
			$platforms = get_field('woman_description');
			if( !empty($platforms['woman_description_text']) ){
			?>
      <a class="tabs__item" href="#tab-1" data="active">Mergaitės uniforma</a>
      <?php } wp_reset_postdata(); ?>



      <?php 
			$platforms = get_field('man_description');
			if( !empty($platforms['man_description_text']) ){ 
			?>
      <span>/</span>
      <a class="tabs__item" href="#tab-2">Berniuko uniforma</a>
		  <?php } wp_reset_postdata(); ?>



    </nav>
<!-- ==================body==================== -->
    <div class="tabs__body">
 			<?php 
			$platforms = get_field('woman_description');
			if( !empty($platforms['woman_description_text'] ) ){
      if( have_rows('woman_description') ): 
            while( have_rows('woman_description') ): the_row(); 
    	?>
      <div class="tabs__block" id="tab-1">
      <?php echo  $platforms['woman_description_text'] ?>

			<?php 
			if( !empty($platforms['woman_audinio_sudetis']) ){ 
			?>
				<p>Audinio sudėtis:
          <span class="tabs__block-text1">
            <?php echo  $platforms['woman_audinio_sudetis'] ?>
          </span>
        </p>
				<?php 
   			}

			if( !empty($platforms['woman_trikotazo_sudetis']) ){ 
			?>
				<p>
          Trikotažo sudėtis:
          <span class="tabs__block-text2">
            <?php 	echo  $platforms['woman_trikotazo_sudetis'] ?>
          </span>
        </p>

  <?php }
		 ?>
      </div>
 			<?php endwhile; ?>
      <?php endif; ?>
			<?php 	} wp_reset_postdata();?>
 		
		
		<!-- ===================man============= -->
			<?php 
			$platforms = get_field('man_description');

			if( !empty($platforms['man_description_text'] ) ){

       if( have_rows('man_description') ): 
            while( have_rows('man_description') ): the_row(); 
            $platforms = get_field('man_description');
    		?>

      <div class="tabs__block" id="tab-2">


      <?php echo  $platforms['man_description_text'] ?>



			<?php if( !empty($platforms['man_audinio_sudetis']) ){ ?>
				<p>Audinio sudėtis:
          <span class="tabs__block-text1">
            <?php echo  $platforms['man_audinio_sudetis'] ?>
          </span>
        </p>
    	<?php }?>

			
		<?php	if( !empty($platforms['man_trikotazo_sudetis']) ){ ?>
				<p>
          Trikotažo sudėtis:
          <span class="tabs__block-text2">
            <?php 	echo  $platforms['man_trikotazo_sudetis'] ?>
          </span>
        </p>
  	<?php }	?>
		
		</div>
 			<?php endwhile; ?>
      <?php endif; ?>
			<?php 	} wp_reset_postdata();?>



    </div>
<!-- ===================================================== -->





    </div>
</div>


<style>


</style>




<?php
}