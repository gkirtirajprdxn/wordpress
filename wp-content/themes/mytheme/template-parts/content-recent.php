<?php 
global $post;  
 $date = get_the_date();
?>
<div class="pioneer-news-updates">
  <!-- pioneer-news-updates-heading -->
  <?php if( have_rows('pioneer') ):
    while( have_rows('pioneer') ): the_row();
      $update_heading = get_sub_field('pioneer_updates_heading'); 
      echo '<h2>';
      echo $update_heading;
      echo '</h2>'; ?>
  <!-- Recent Posts -->
  <div class="recent-container">
    <div class="recent-post-container">
      <?php $news = get_sub_field('news');
          if( $news ): 
            $args = array( 'posts_per_page' => 1, 'post__in' => $news, 'orderby' => 'post_date', 'post_type' => 'news' );
            $news = get_posts( $args ); ?>
            <div class="news">
              <ul class="pl-0">
                <?php foreach( $news as $post ): 
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
            <?php wp_reset_postdata();
          endif; ?>
    </div>   
    <div class="recent-post-container-ul">
    <?php $news = get_sub_field('news');
        if( $news ): 
          $args = array( 'posts_per_page' => 3, 'post__in' => $news, 'orderby' => 'post_date', 'post_type' => 'news', 'offset' => 1 );
          $news = get_posts( $args ); ?>
          <div class="news">
            <ul class="pl-0">
              <?php foreach( $news as $post ): 
                // Setup this post for WP functions (variable must be named $post).
                setup_postdata($post); ?>
                <li>
                  <div class="recent-post">
                    <img class="news-img" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image">
                    <span class="date"><?php echo $date; ?></span>
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                  </div>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php wp_reset_postdata();
        endif; ?>
      </div>
      </div>  
    </div>
    <?php endwhile;
  endif; ?>
</div>

