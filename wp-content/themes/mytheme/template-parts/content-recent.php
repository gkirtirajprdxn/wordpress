<?php 
 $date = get_the_date();
?>
<div class="pioneer-news-updates">
  <!-- pioneer-news-updates-heading -->
  <?php if( have_rows('pioneer') ):
    while( have_rows('pioneer') ): the_row();
      $update_heading = get_sub_field('pioneer_updates_heading'); 
      echo '<h2>';
      echo $update_heading;
      echo '</h2>';
    endwhile; 
  endif; ?>
  <!-- Recent Posts -->
  <div class="recent-container">
    <div class="recent-post-container">
    <?php if( have_rows('pioneer') ):
      while( have_rows('pioneer') ): the_row();
        $news = get_sub_field('news');
        if( $news ): ?>
          <div class="news">
            <ul class="pl-0">
              <?php foreach( array_reverse($news) as $post ): 
                // Setup this post for WP functions (variable must be named $post).
                setup_postdata($post); ?>
                <li>
                  <div class="recent-post">
                    <img class="news-image" src="<?php the_post_thumbnail_url('medium'); ?>" alt="image">
                    <span class="date"><?php echo $date; ?></span>
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                  </div>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <?php wp_reset_postdata();
        endif;
      endwhile;
    endif; ?>
  </div>
    <ul>
      <?php // Define our WP Query Parameters
      $args = array(
        'post_type' => 'news',
        'posts_per_page' => 3,
        'offset' => 1
      );
      $the_query = new WP_Query( $args );
      if ($the_query -> have_posts()) :
        // Start our WP Query
        while ($the_query -> have_posts()) : $the_query -> the_post();
        $date = get_the_date(); ?>
          <li>
            <div class="recent-posts">
              <img class="news-img" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image">
              <span class="date"><?php echo $date; ?></span>
              <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            </div>
          </li>
        <?php endwhile;
      endif;
      wp_reset_postdata(); ?>
    </ul>
  </div>
</div>

