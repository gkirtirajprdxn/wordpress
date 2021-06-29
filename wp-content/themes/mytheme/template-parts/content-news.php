<div class="news-container">
  <?php if( have_rows('pioneer') ):
    while( have_rows('pioneer') ): the_row();
      $news_heading = get_sub_field('pioneer_news_heading'); 
      echo '<h2>';
      echo $news_heading;
      echo '</h2>';
    endwhile;
  endif;
  if( have_rows('pioneer') ):
    while( have_rows('pioneer') ): the_row();
      $video_url = get_sub_field('video');
      $heading = get_sub_field('heading');
      $content = get_sub_field('content'); ?>
        <div class="news">
          <div class="news-video">
            <?php echo $video_url; ?>
          </div>
          <div class="news-content">
            <h3><?php echo $heading; ?></h3>
            <div class="para"><?php echo $content; ?></div>
          </div>
        </div>
    <?php endwhile;
  endif;
  if( have_rows('pioneer') ):
    while( have_rows('pioneer') ): the_row();
      if( have_rows('pioneer_news') ):
        while( have_rows('pioneer_news') ): the_row();
        $image = get_sub_field('image');
        $heading = get_sub_field('heading');
        $content = get_sub_field('content'); ?>
          <div class="news">
            <div class="news-img">
              <img src="<?php echo $image; ?>" alt="">
            </div>
            <div class="news-content">
              <h3><?php echo $heading; ?></h3>
              <div class="para"><?php echo $content; ?></div>
            </div>
          </div>
        <?php endwhile;
      endif;
    endwhile;
  endif; ?>
</div>