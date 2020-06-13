<?php get_header();?>
    <div class='thumbnail'>
        <img src='<?php echo get_theme_mod('pgdmThumbnailCalloutImage');?>'>
    </div>
    <div class='description'>
        <h1><?php echo get_theme_mod('pgdmThumbnailCalloutHeadlineImage'); ?></h1>
        <p>
        <?php echo get_theme_mod('pgdmThumbnailCalloutImageText'); ?>
        </p>
    </div>
    <div class='basicInfo'>
        <div class="container">
            <h1><?php echo get_theme_mod('pgdmBasicInfoCalloutBasicInfoHeadline');?></h1>
                <div class="row">
                    <div class="col-sm">
                        <i class="fas fa-fire"></i>
                        <h3 class='basicInfoHeader'><?php echo get_theme_mod('pgdmBasicInfoCalloutBasicInfoSub1');?></h3>
                        <p class='desc'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Pellentesque lobortis lorem a pulvinar accumsan. Suspendisse potenti. 
                            Curabitur at tellus in eros ultricies pharetra.</p>
                    </div>
                    <div class="col-sm">
                        <i class="fas fa-fire-extinguisher"></i>
                        <h3 class='basicInfoHeader'><?php echo get_theme_mod('pgdmBasicInfoCalloutBasicInfoSub2');?></h3>
                        <p class='desc'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Pellentesque lobortis lorem a pulvinar accumsan. Suspendisse potenti. 
                            Curabitur at tellus in eros ultricies pharetra.</p>
                    </div>
                    <div class="col-sm">
                        <i class="fas fa-tree"></i>
                        <h3 class='basicInfoHeader'><?php echo get_theme_mod('pgdmBasicInfoCalloutBasicInfoSub3');?></h3>                        
                        <p class='desc'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Pellentesque lobortis lorem a pulvinar accumsan. Suspendisse potenti. 
                            Curabitur at tellus in eros ultricies pharetra.</p>
                    </div>
                    <div class="col-sm">
                        <i class="fas fa-university"></i>
                        <h3 class='basicInfoHeader'><?php echo get_theme_mod('pgdmBasicInfoCalloutBasicInfoSub4');?></h3>
                        <p class='desc'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Pellentesque lobortis lorem a pulvinar accumsan. Suspendisse potenti. 
                            Curabitur at tellus in eros ultricies pharetra.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='youth'>
        <img src='<?php echo get_theme_mod('pgdYouthCalloutSectionImage');?>'>
        <div class='youthText'>
            <h1><?php echo get_theme_mod('pgdYouthCalloutSectionHeader');?></h1>
            <p><?php echo get_theme_mod('pgdYouthCalloutSectionP');?></p>
            <button onclick='location.href="index.php/pridruzi-se"'><?php echo get_theme_mod('pgdYouthCalloutSectionButton');?></button>
        </div>
    </div>
    <div class='actions'>
        <div class="container">
            <h1>ZADNJI DOGODKI</h1>
            <div class='row'>
            <?php
                global $post;
                $args = array( 'posts_per_page' => 3);
                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <div class='col-sm article'>
                        <div class='articleInfo'>
                            <h2><?php the_title(); ?></h2>
                            <i class="fas fa-calendar-day"></i>
                            <p class='date'><?php echo get_the_date('d.m.yy');?></p>
                            <i class="fas fa-user"></i>
                            <p class='author'><?php the_author();?></p><br>
                            <p class='category'><?php echo the_category(", ");?></p>
                        </div>
                        <div class='articleContent'>
                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); if($url == null || $url == '') $url = get_template_directory_uri()."/images/logoTona.jpg"; ?>
                            
                            <img class='postThumbnail' src="<?php echo $url;?>">
                            <?php echo the_excerpt(); ?>
                            <a class='readmore' href="<?php the_permalink(); ?>">Preberi več</a>
                        </div>
                    </div>
                <?php endforeach; 
                wp_reset_postdata();?>
            </div>  
        </div>
    </div>


<?php get_footer();?>