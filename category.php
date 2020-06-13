<?php get_header();
global $post;
$cat = get_category( get_query_var( 'cat' ) );
$cat_id = $cat->cat_ID;
$category = get_category( get_the_category_by_ID($cat_id) );?>
<div class='newsPage'>
        <div class='container'>
            <h1><?php echo $cat->cat_name?></h1>
            <?php
                $args = array( 'posts_per_page' => -1,'category'=>$cat_id);
                $myposts = get_posts( $args );
                $counter = 0;
                foreach ( $myposts as $post ) : setup_postdata( $post ); $category = get_the_category(); ?>
                <?php if($counter%2 == 0) echo "<div class='row'>"; ?>
                    <div class='col-sm newsBasic'>
                    <a class='divLink' href="<?php the_permalink(); ?>">
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); if($url == null || $url == '') $url = get_template_directory_uri()."/images/logoTona.jpg";  ?>
                        <img class='newsImage' src="<?php echo $url;?>">
                        <div class='newsInformationContainer'>
                            <div class=newsInformation>
                                <p class='newsDate'><?php echo get_the_date('d.m.yy');?></p>
                                <?php echo '<h5>'. $category[1]->cat_name . ', ' . get_the_title() .'</h5>' ;?>
                            </div>
                        </div>
                    </a>
                    </div>
                <?php if($counter%2 == 1) echo "</div>";$counter++;
                endforeach; 
                if($counter%2 == 1) echo "<div class='col-sm newsBasicEmpty'></div>";
                wp_reset_postdata();?>
            </div>  
        </div>
</div>
<?php get_footer();?>