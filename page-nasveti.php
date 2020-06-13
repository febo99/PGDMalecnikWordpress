<?php get_header();?>
<div class='advicePage'>
        <div class='container'>
            <h1>Nasveti</h1>
            <?php
                global $post;
                $category = get_category( get_category_by_slug('nasvet') );
                $cat_id = $category->cat_ID;
                $args = array( 'posts_per_page' => -1,'category'=>$cat_id);
                $myposts = get_posts( $args );
                $counter = 0;
                foreach ( $myposts as $post ) : setup_postdata( $post ); $category = get_the_category(); ?>
                <?php if($counter%2 == 0) echo "<div class='row'>"; ?>
                    <div class='col-sm adviceBasic'>
                    <a class='divLink' href="<?php the_permalink(); ?>">
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); if($url == null || $url == '') $url = get_template_directory_uri()."/images/logoTona.jpg";  ?>
                        <img class='adviceImage' src="<?php echo $url;?>">
                        <div class='adviceInformationContainer'>
                            <div class=adviceInformation>
                                <p class='adviceDate'><?php echo get_the_date('d.m.yy');?></p>
                                <?php echo '<h5>'. $category[0]->cat_name . ', ' . get_the_title() .'</h5>' ;?>
                            </div>
                        </div>
                    </a>
                    </div>
                <?php if($counter%2 == 1) echo "</div>";$counter++;
                endforeach; 
                if($counter%2 == 1) echo "<div class='col-sm adviceBasicEmpty'></div>";
                wp_reset_postdata();?>
            </div>  
        </div>
</div>
<?php get_footer();?>