<?php 
    get_header();
    while(have_posts()){
        the_post();

        ?>
        <div id='postPage'>
            <div class="header container">
                <h2><?php the_title(); ?></h2>
                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                <img class='postThumbnail' src="<?php echo $url;?>">
                <div class='postData'>
                    <i class="fas fa-calendar-day"></i>
                    <span class='date'><?php echo get_the_date('d.m.yy');?></span>
                    <i class="fas fa-user"></i>
                    <span class='author'><?php the_author();?></span>
                </div>
                <div class='postContent'>
                    <?php the_content() ?>
                </div>
                    
            </div>
        </div>


    <?php } ?>
    <?php get_footer();?>