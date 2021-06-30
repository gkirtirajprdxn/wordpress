<?php 
$post_thumbnail = get_the_post_thumbnail_url('thumbnail');
$permalink = get_the_permalink();
$title = get_the_title();
$date = get_the_date();
$excerpt = get_the_excerpt(); ?>

<div class="container">
  <div class="post mb-5">
    <div class="media">
      <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php echo $post_thumbnail; ?>" alt="image">
      <div class="media-body">
        <h3 class="title mb-1"><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h3>
        <div class="meta mb-1"><span class="date"><?php echo $date; ?></span></div>
        <!-- <div class="intro">
          <?php echo $excerpt; ?>
        </div> -->
        <!-- <a class="more-link" href="<?php echo $permalink; ?>">Read more &rarr;</a> -->
      </div><!--//media-body-->
    </div><!--//media-->
  </div>
</div>
