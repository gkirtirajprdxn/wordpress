<ul>
 
<?php 
// Define our WP Query Parameters
$args = array(
    'post_type' => 'news',
    'posts_per_page' => 4,
);
$the_query = new WP_Query( $args ); ?>
  
 
<?php 
if ($the_query -> have_posts()) :
// Start our WP Query
while ($the_query -> have_posts()) : $the_query -> the_post(); 
// Display the Post Title with Hyperlink
?>
  
 
<li>
    <img class="news-image" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image">
    <span class="date"><?php the_date(); ?></span>
    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</li>
  
 
<?php 
// Repeat the process and reset once it hits the limit
endwhile;
endif;
wp_reset_postdata();
?>
</ul>