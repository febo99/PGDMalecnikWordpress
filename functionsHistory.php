<?php
function pgdHistoryThumbnailCallout($wp_customize){
    $wp_customize->add_section('pgdHistoryThumbnailCalloutSection',array('title'=>'Zgodovina'));

    $wp_customize->add_setting('pgdHistoryThumbnailCalloutSectionTitle', array('default' => 'Zgodovina društva'));
    $wp_customize->add_setting('pgdHistoryThumbnailCalloutSectionP', array('default' => 'Že od leta 1932 pa vse do danes! '));
    $wp_customize->add_setting('pgdHistoryThumbnailCalloutSectionImageThumbnail',array());
    $wp_customize->add_setting('pgdHistoryThumbnailCalloutSectionImage0',array());
    $wp_customize->add_setting('pgdHistoryThumbnailCalloutSectionImage1',array());
    $wp_customize->add_setting('pgdHistoryThumbnailCalloutSectionImage2',array());
    $wp_customize->add_setting('pgdHistoryThumbnailCalloutSectionImage3',array());
    $wp_customize->add_setting('pgdHistoryThumbnailCalloutSectionImage4',array());
    $wp_customize->add_setting('pgdHistoryThumbnailCalloutSectionImage5',array());
    $wp_customize->add_setting('pgdHistoryThumbnailCalloutSectionImage6',array());


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdHistoryThumbnailCalloutSectionImageThumbnailControl',array(
        'label'=>'Naslovna slika',
        'section'=>'pgdHistoryThumbnailCalloutSection',
        'settings'=>'pgdHistoryThumbnailCalloutSectionImageThumbnail',
        )));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdHistoryThumbnailCalloutSectionTitleControl',array(
        'label'=>'O nas',
        'section'=>'pgdHistoryThumbnailCalloutSection',
        'settings'=>'pgdHistoryThumbnailCalloutSectionTitle')));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdHistoryThumbnailCalloutSectionPControl',array(
        'label'=>'Besedilo v sliki',
        'section'=>'pgdHistoryThumbnailCalloutSection',
        'settings'=>'pgdHistoryThumbnailCalloutSectionP')));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdHistoryThumbnailCalloutSectionImage0Control',array(
        'label'=>'Slika pod prvim tekstom',
        'section'=>'pgdHistoryThumbnailCalloutSection',
        'settings'=>'pgdHistoryThumbnailCalloutSectionImage0',
        )));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdHistoryThumbnailCalloutSectionImage1Control',array(
        'label'=>'Slika 1',
        'section'=>'pgdHistoryThumbnailCalloutSection',
        'settings'=>'pgdHistoryThumbnailCalloutSectionImage1',
        )));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdHistoryThumbnailCalloutSectionImage2Control',array(
        'label'=>'Slika 2',
        'section'=>'pgdHistoryThumbnailCalloutSection',
        'settings'=>'pgdHistoryThumbnailCalloutSectionImage2',
        )));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdHistoryThumbnailCalloutSectionImage3Control',array(
        'label'=>'Slika 3',
        'section'=>'pgdHistoryThumbnailCalloutSection',
        'settings'=>'pgdHistoryThumbnailCalloutSectionImage3',
        )));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdHistoryThumbnailCalloutSectionImage4Control',array(
        'label'=>'Slika 4',
        'section'=>'pgdHistoryThumbnailCalloutSection',
        'settings'=>'pgdHistoryThumbnailCalloutSectionImage4',
        )));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdHistoryThumbnailCalloutSectionImage5Control',array(
        'label'=>'Slika 5',
        'section'=>'pgdHistoryThumbnailCalloutSection',
        'settings'=>'pgdHistoryThumbnailCalloutSectionImage5',
        )));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdHistoryThumbnailCalloutSectionImage6Control',array(
        'label'=>'Slika 6',
        'section'=>'pgdHistoryThumbnailCalloutSection',
        'settings'=>'pgdHistoryThumbnailCalloutSectionImage6',
        )));
        
}
add_action('customize_register','pgdHistoryThumbnailCallout');
?>