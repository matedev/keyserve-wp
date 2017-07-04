<?php 
/*Template Name: Services*/


get_header(); 

?>

    <div class="content-main" id="page-services">

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


      <div id="block2" class="block">
        <div class="container text-center">
          <p class="text-title">Erősségeink</p>
        </div>
        <div class="container">
          <div class="row">
            <?php
              if ( have_rows('services_box') ):
                  while ( have_rows('services_box') ) : the_row();
              ?> 

                <div class="col-md-6">
                  <div class="service-box" style="min-height: <?php the_field('service_box_minimum_height') ?>px">
                    <div class="circle circle-100 bg-blue" style="background-image: url(<?php the_sub_field('icon') ?>); background-size: <?php the_sub_field('icon_size') ?>px"></div> 
                    <div class="service-text">
                      <h3 class="text-title text-blue"><?php the_sub_field('service_title') ?></h3>
                      <p> <?php the_sub_field('service_description') ?></p>
                    </div>
                  </div>
                </div>

            <?php
                  endwhile;
              endif;
            ?>
          </div>
        </div>

        <!--div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="service-box">
                <div class="circle circle-100 bizalom bg-blue"></div> 
                <div class="service-text">
                  <h3 class="text-title text-blue">Bizalom</h3>
                  <p>A megrendelő szervezetének működése, a vezetők 
döntési környezete és az előttük álló kihívások megértésén túl a személyes bizalom kialakítása jelenti a sikeres és tartós 
együttműködés bázisát.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-box">
                <div class="circle circle-100 minoseg bg-blue"></div>
                <div class="service-text">
                  <h3 class="text-title text-blue">Prémium minőség</h3>
                  <p>A szakértelem mellett szilárd értékrend, 
tanácsadóink sokoldalú tapasztalata és az ügyfél felé való elkötelezettség szükséges a kiemelkedő minőségű szolgáltatás kialakításához és fenntartásához.</p>
                </div>                
              </div>
            </div>


            <div class="col-md-6">
              <div class="service-box">
                <div class="circle circle-100 ajanlas bg-blue"></div>
                <div class="service-text">
                  <h3 class="text-title text-blue">Best practice ajánlások</h3>
                  <p>Figyelemmel kísérjük a szakterületünkre vonatkozó 
ajánlások és szabványok fejlődését, de nem csupán beépítjük ezeket mindennapi tevékenységünkbe, hanem aktívan részt 
is veszünk a sikeres módszertanok magyarországi meghonosításában és elterjesztésében. </p>
                </div>                
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-box">
                <div class="circle circle-100 partner bg-blue"></div>
                <div class="service-text">
                  <h3 class="text-title text-blue">Professzionális partnerek</h3>
                  <p>Csak professzionális partnerekkel dolgozunk,akik a közelmúlt jelentős magyarországi informatikai projektjeiből hozták tudásukat 
és tapasztalataikat.</p>
                </div>                
              </div>
            </div>   
            </div>         
          </div>
        </div>
      </div-->

    </div>      

<?php get_footer(); ?>