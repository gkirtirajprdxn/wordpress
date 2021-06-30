<?php 
/**
* Template Name:Clatter
*/
get_header(); ?>

<?php if( have_rows('clatter') ):
  while( have_rows('clatter') ): the_row();
    // banner
    if( have_rows('banner') ):
      while( have_rows('banner') ): the_row();
      $banner_bg_image = get_sub_field('image');
      $banner_heading = get_sub_field('heading');
      $banner_content = get_sub_field('content'); ?>
        <div class="banner-container">
          <div class="banner-img">
            <img src="<?php echo $banner_bg_image; ?>" alt="banner">
          </div>
          <div class="banner-content">
            <h2><?php echo $banner_heading; ?></h2>
            <div class="para"><?php echo $banner_content; ?></div>
          </div>
        </div>
      <?php endwhile;
    endif;
    // products
    if( have_rows('products') ):
      while( have_rows('products') ): the_row();
        // product info
        if( have_rows('products_info') ):
          while( have_rows('products_info') ): the_row();
          $product_info_heading = get_sub_field('heading');
          $product_info_content = get_sub_field('content'); ?>
            <div class="product-info">
              <h2><?php echo $product_info_heading; ?></h2>
              <div class="para"><?php echo $product_info_content; ?></div>
            </div>
          <?php endwhile;
        endif;?>
        <!-- product -->
        <div class="products-container">
        <?php if( have_rows('product') ):
          while( have_rows('product') ): the_row();
          $product_image = get_sub_field('image');
          $product_heading = get_sub_field('heading');
          $product_content = get_sub_field('content');
          $product_link = get_sub_field('page_link'); ?>
            <a href="<?php echo $product_link; ?>">
              <div class="products">
                <div class="product-img">
                  <img src="<?php echo $product_image; ?>" alt="product">
                </div>
                <div class="product-content">
                  <h3><?php echo $product_heading; ?></h3>
                  <div class="para"><?php echo $product_content; ?></div>
                </div>
              </div>
            </a>
          <?php endwhile;
        endif;?>
        </div>
      <?php endwhile;
    endif;
    // coming soon using layout
    if( get_row_layout() == 'coming_soon' ):
      $cs_heading = get_sub_field('cs_heading');
      $cs_content = get_sub_field('cs_content');
      echo $cs_heading; ?>
      <div class="cs-content">
        <h3><?php echo $cs_heading; ?></h3>
        <div class="para"><?php echo $cs_content; ?></div>
      </div>
    <?php endif;
    // benefits
    if( have_rows('benefits') ):
      while( have_rows('benefits') ): the_row();
        // benefits_info
        if( have_rows('benefits_info') ):
          while( have_rows('benefits_info') ): the_row();
          $benefit_info_heading = get_sub_field('heading');
          $benefit_info_content = get_sub_field('content'); ?>
            <div class="benefits-info">
              <h2><?php echo $benefit_info_heading; ?></h2>
              <div class="para"><?php echo $benefit_info_content; ?></div>
            </div>
          <?php endwhile;
        endif; ?>
        <!-- benefits -->
        <div class="benefits-container">
        <?php if( have_rows('benefit') ):
          while( have_rows('benefit') ): the_row();
          $benefit_image = get_sub_field('icon');
          $benefit_heading = get_sub_field('heading');
          $benefit_content = get_sub_field('content'); ?>
            <div class="benefits">
              <div class="benefit-img">
                <img src="<?php echo $benefit_image; ?>" alt="benefit">
              </div>
              <div class="benefit-content">
                <h3><?php echo $benefit_heading; ?></h3>
                <div class="para"><?php echo $benefit_content; ?></div>
              </div>
            </div>
          <?php endwhile;
        endif;?>
        </div>
      <?php endwhile;
    endif;
  endwhile;
endif; ?>

<?php get_footer(); ?>