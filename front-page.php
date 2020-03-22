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

<?php get_footer();?>