
<div class="red-overlay-container">
<?php if( have_rows('pioneer') ):
  while( have_rows('pioneer') ): the_row();
    if( have_rows('red') ):
      while( have_rows('red') ): the_row();
      $red_image = get_sub_field('red_image');
      $red_text_link = get_sub_field('red_text_link'); ?>
      <div class="red-overlay-box">
        <div class="red-bg-img">
          <img src="<?php echo $red_image; ?>" alt="img">
        </div>
        <div class="front-text">
          <?php if( $red_text_link ): ?>
          <a href="<?php echo $red_text_link['url']; ?>"><?php echo $red_text_link['title']; ?></a>
          <?php endif; ?>
        </div>
      </div>
      <?php endwhile;
    endif;
  endwhile;
endif; ?>
</div>