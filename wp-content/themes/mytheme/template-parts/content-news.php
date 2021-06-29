<div class="news-container">

    <h2>Pioneer News</h2>

    <?php if( have_rows('pioneer') ): ?>
        <?php while( have_rows('pioneer') ): the_row();

            $video_url = get_sub_field('video');
            $heading = get_sub_field('heading');
            $content = get_sub_field('content');
            ?>

            <div class="news">
                <div class="news-video">
                    <?php echo $video_url; ?>
                </div>
                <div class="news-content">
                    <h3><?php echo $heading; ?></h3>
                    <?php echo $content; ?>
                </div>
            </div>
            <br>

        <?php endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('pioneer') ): ?>
        <?php while( have_rows('pioneer') ): the_row(); ?>

            <?php if( have_rows('pioneer_news') ): ?>
                <?php while( have_rows('pioneer_news') ): the_row();

                $image = get_sub_field('image');
                $heading = get_sub_field('heading');
                $content = get_sub_field('content');
                
                ?>

                <div class="news">
                    <div class="news-img">
                        <img src="<?php echo $image ?>" alt="">
                    </div>
                    <div class="news-content">
                        <h3><?php echo $heading ?></h3>
                        <?php echo $content ?>
                    </div>
                </div>
                <br>

                <?php endwhile; ?>
            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>

</div>