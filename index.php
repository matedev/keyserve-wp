<?php 
/*Template Name: Home*/


get_header(); 

?>

    <div class="content-main" id="page-index">

    <?php if (has_post_thumbnail( $post->ID )) : ?>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
      <div class="splash-block" style="background-image: url('<?php echo $image[0] ?>');"></div>
    <?php endif; ?>

      <div id="block1" class="block">
        <div class="container text-center">
          <p class="text-normal col-md-10 col-md-push-1">
              <?php
                  if ( have_posts() ) {
                      while ( have_posts() ) {
                          the_post(); ?>         
                          <?php the_content(); ?>
                      <?php }
                  }
              ?>
          </p>
        </div>
      </div>

      <div class="fading-box">
          <div id="block2" class="block intro">
            <div class="container text-center">
              <p class="text-title text-blue"><?php $repeater = get_field('portfolio_content'); the_field('portfolio_title'); ?></p>
            </div>
            <div class="container-fluid bg-right-blue bg-blue animation translate to-right">
              <div class="container">
                <div class="row">
                  <div class="col-md-5 hexagon-container"> 
                      <div class="hexagon hexagon-on-left"></div>       
                  </div>
                  <div class="col-md-7 bg-blue text-white overlay-text-box corner corner-on-left-blue" id="trianglebox1">
                      <p class="text-subtitle"><?php echo($repeater[0]['portfolio_row_title']);?></p>
                      <p class="block-with-text block-with-text-blue">
                        <?php echo($repeater[0]['intro']);?>
                      </p>
                      <button type="button" class="btn btn-dark margint-30 to-detail-btn">Tovább</button>
                  </div>
                </div>
              </div>
            </div>
          </div>  

          <div class="details block">
            <div class="container">
              <div class="row">
                <div class="col-md-10 col-md-push-1"> 
                    <h3 class="text-subtitle"><?php echo($repeater[0]['portfolio_row_title']);?></h3>
                    <p>
                      <?php echo($repeater[0]['detailed']);?>
                    </p>
                </div>
                <div class="col-md-12 text-center">
                  <button type="button" class="btn btn-dark margint-30 to-intro-btn">Bezár</button>
                </div>
              </div>
            </div>
          </div>


      </div>

      <div class="fading-box">
          <div id="block3" class="block intro">
            <div class="container-fluid bg-left-light-gray bg-light-gray animation translate to-left">
              <div class="container">
                <div class="row">
                  <div class="col-md-7 bg-light-gray text-dark overlay-text-box corner corner-on-right-light-gray" id="trianglebox1">
                      <div class="">
                        <p class="text-subtitle"><?php echo($repeater[1]['portfolio_row_title']);?></p>
                        <p class="block-with-text block-with-text-light-gray">
                          <?php echo($repeater[1]['intro']);?>
                        </p>
                        <button type="button" class="btn btn-blue margint-30 to-detail-btn">Tovább</button>
                      </div>
                    </div>
                        <div class="hexagon-container">
                          <div class="hexagon hexagon-on-right"></div> 
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="details block">
            <div class="container">
              <div class="row">
                <div class="col-md-10 col-md-push-1"> 
                    <h3 class="text-subtitle"><?php echo($repeater[1]['portfolio_row_title']);?></h3>
                    <p>
                        <?php echo($repeater[1]['detailed']);?>
                    </p>
                </div>
                <div class="col-md-12 text-center">
                  <button type="button" class="btn btn-dark margint-30 to-intro-btn">Bezár</button>
                </div>
              </div>
            </div>
          </div>
      </div>

      <div class="fading-box">
          <div id="block4" class="block intro">
            <div class="container-fluid bg-right-light-blue bg-light-blue animation translate to-right">
              <div class="container">
                <div class="row">
                    <div class="col-md-5 hexagon-container">
                      <div class="hexagon hexagon-on-left"></div> 
                    </div>
                  <div class="col-md-7 bg-light-blue text-dark overlay-text-box corner corner-on-left-light-blue" id="trianglebox1">
                    <div class="">
                      <p class="text-subtitle"><?php echo($repeater[2]['portfolio_row_title']);?></p>
                      <p class="block-with-text block-with-text-light-blue">
                          <?php echo($repeater[2]['intro']);?>
                      </p>
                      <button type="button" class="btn btn-dark margint-30 to-detail-btn">Tovább</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="details block">
            <div class="container">
              <div class="row">
                <div class="col-md-10 col-md-push-1"> 
                    <h3 class="text-subtitle"><?php echo($repeater[2]['portfolio_row_title']);?></h3>
                    <p>
                        <?php echo($repeater[2]['detailed']);?>
                    </p>
                </div>
                <div class="col-md-12 text-center">
                  <button type="button" class="btn btn-dark margint-30 to-intro-btn">Bezár</button>
                </div>
              </div>
            </div>
          </div>
      </div>

      <div class="fading-box">
          <div id="block5" class="block intro">
            <div class="container-fluid bg-left-dark-gray bg-dark-gray animation translate to-left">
              <div class="container">
                <div class="row">
                  <div class="col-md-7 bg-dark-gray text-white overlay-text-box corner corner-on-right-dark-gray" id="trianglebox1">
                    <div class="">
                      <p class="text-subtitle"><?php echo($repeater[3]['portfolio_row_title']);?></p>
                      <p class="block-with-text block-with-text-dark-gray">
                          <?php echo($repeater[3]['intro']);?>
                      </p>
                      <button type="button" class="btn btn-blue margint-30 to-detail-btn">Tovább</button>
                    </div>
                  </div>
                  <div class="hexagon-container">
                    <div class="hexagon hexagon-on-right"></div> 
                  </div>
                </div>
              </div>    
            </div>
          </div>

          <div class="details block">
            <div class="container">
              <div class="row">
                <div class="col-md-10 col-md-push-1"> 
                    <h3 class="text-subtitle"><?php echo($repeater[3]['portfolio_row_title']);?></h3>
                    <p>
                        <?php echo($repeater[3]['detailed']);?>
                    </p>
                </div>
                <div class="col-md-12 text-center">
                  <button type="button" class="btn btn-dark margint-30 to-intro-btn">Bezár</button>
                </div>
              </div>
            </div>
          </div>
      </div>      
      
    </div>

<?php get_footer(); ?>