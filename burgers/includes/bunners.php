<section class="bunners">
  <div class="bunners__body">
    <div class="bunners__arrows bunners-arrows">
      <i class="bunners-arrows__arrow bunners-arrows__arrow_prev"></i><i
        class="bunners-arrows__arrow bunners-arrows__arrow_next"></i>
    </div>
    <div class="bunners__slider slider-bunners-js">

      <?php  
      global $post;
      $args = array(       
         'post_type'=>'slider-bunner',
         'publish' => true,
         'numberposts' => 20,
        );
        
      $projects = get_posts($args);  
      $reversed = array_reverse($projects);
     
     if ($projects ) {
     
      foreach($reversed as $post){
        setup_postdata( $post );
        $post_id = $post->ID;
        $post_text=$post->post_content; 
        $image=get_the_post_thumbnail_url($post_id, 'projects'); 
  ?>

      <div class="bunners__item slider-bunners-item"
        style="background-image: url('<?php echo get_template_directory_uri()?>/assets/img/png/i-1.png')">
        <div class="slider-bunners-item__body">
          <img class="slider-bunners-item__img" src="<?php echo $image ?>" alt="img" />
          <div class="slider-bunners-item__title">Собери сам</div>
          <a class="slider-bunners-item__button btn btn--success" href="#!">смотреть меню</a>
        </div>
      </div>

      <?php 
  	}
  } else {
    ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php  
    }
              ?>



    </div>
  </div>
</section>