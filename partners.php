<?php 
/*Template Name: Partners*/


get_header(); 

?>

    <div class="content-main" id="page-partners">

      <?php if (has_post_thumbnail( $post->ID )) : ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <div class="splash-block" style="background-image: url('<?php echo $image[0] ?>');"></div>
      <?php endif; ?>

      <div id="block1" class="block bg-blue">
        <div class="container text-center">
          <div class="references-box text-white">
            <div class="row">
              <!--ul>
                <li>CIB Bank Zrt.</li>
                <li>Budapest Bank Zrt.</li>
                <li>Deloitte</li>
                <li>GDF Suez</li>
              </ul>
              <ul>
                <li>Lufthansa Systems</li>
                <li>Magyar Posta Zrt.</li>
                <li>MVM Informatika Zrt.</li>
              </ul>
              <ul>
                <li>Nemzeti Fejlesztési és 
                    Gazdasági Minisztérium</li>
                <li>Nemzeti Hírközlési Hatóság</li>
              </ul-->
                <?php
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); ?>         
                            <?php the_content(); ?>
                        <?php }
                    }
                ?>              
            </div>
          </div>      
        </div>
      </div>

      <div id="block2" class="block">
        <div class="container text-center">
          <p class="text-title">Partnerek</p>
        </div>
        <div class="container">
          <div class="row">
            <div class="owl-carousel owl-theme">
            <?php
              if ( have_rows('partner_carousel') ):
                  while ( have_rows('partner_carousel') ) : the_row();
            ?>               
                <div class="item text-center img-responsive"><a href="<?php the_sub_field('partner_link') ?>"><img src="<?php the_sub_field('partner_logo') ?>"/></a></div>
            <?php
                  endwhile;
              endif;
            ?>
            </div>
          </div>
        </div>
      </div>

    </div>    
      
<?php get_footer(); ?>