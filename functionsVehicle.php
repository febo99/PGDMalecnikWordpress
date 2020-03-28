<?php
function pgdVehiclesThumbnailCallout($wp_customize){
    $wp_customize->add_section('pgdVehiclesThumbnailCalloutSection',array('title'=>'Vozila in tehnika'));

    $wp_customize->add_setting('pgdVehiclesThumbnailCalloutSectionTitle', array('default' => 'Vozila in dodatna oprema'));
    $wp_customize->add_setting('pgdVehiclesThumbnailCalloutSectionP', array('default' => ''));
    $wp_customize->add_setting('pgdVehiclesThumbnailCalloutSectionImageThumbnail',array());



    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdVehiclesThumbnailCalloutSectionImageThumbnailControl',array(
        'label'=>'Naslovna slika',
        'section'=>'pgdVehiclesThumbnailCalloutSection',
        'settings'=>'pgdVehiclesThumbnailCalloutSectionImageThumbnail',
        )));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdVehiclesThumbnailCalloutSectionTitleControl',array(
        'label'=>'O nas',
        'section'=>'pgdVehiclesThumbnailCalloutSection',
        'settings'=>'pgdVehiclesThumbnailCalloutSectionTitle')));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdVehiclesThumbnailCalloutSectionPControl',array(
        'label'=>'Besedilo v sliki',
        'section'=>'pgdVehiclesThumbnailCalloutSection',
        'settings'=>'pgdVehiclesThumbnailCalloutSectionP')));
        
}
add_action('customize_register','pgdVehiclesThumbnailCallout');
?>