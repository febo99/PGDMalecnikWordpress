<?php
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
add_theme_support( 'post-thumbnails' );
function loadStylesheets(){

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), false, 'all');
    wp_enqueue_style('normalize');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');

    wp_register_style('aboutus', get_template_directory_uri() . '/styles/aboutus.css', array(), false, 'all');
    wp_enqueue_style('aboutus');

    wp_register_style('history', get_template_directory_uri() . '/styles/history.css', array(), false, 'all');
    wp_enqueue_style('history');

    wp_register_style('actions', get_template_directory_uri() . '/styles/actions.css', array(), false, 'all');
    wp_enqueue_style('actions');

    wp_register_style('news', get_template_directory_uri() . '/styles/news.css', array(), false, 'all');
    wp_enqueue_style('news');

    wp_register_style('vehicles', get_template_directory_uri() . '/styles/vehicles.css', array(), false, 'all');
    wp_enqueue_style('vehicles');

    wp_register_style('advice', get_template_directory_uri() . '/styles/advice.css', array(), false, 'all');
    wp_enqueue_style('advice');

    wp_register_style('tel112', get_template_directory_uri() . '/styles/tel112.css', array(), false, 'all');
    wp_enqueue_style('tel112');

    wp_register_style('links', get_template_directory_uri() . '/styles/links.css', array(), false, 'all');
    wp_enqueue_style('links');
}

add_action('wp_enqueue_scripts','loadStylesheets');


function includeJquery(){
    wp_deregister_script('jquery');

    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js','',1,false);
    wp_enqueue_script('jquery');
    add_action('wp_enqueue_scripts','jquery');
}
add_action('wp_enqueue_scripts','includeJquery');

function includeBootstrapJs(){
    wp_register_script('bootstrapJS', get_template_directory_uri() . '/js/bootstrap.js','',1,false);
    wp_enqueue_script('bootstrapJS');
    add_action('wp_enqueue_scripts','bootstrapJS');
}
add_action('wp_enqueue_scripts','includeBootstrapJs');

function loadJS(){
    wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', '',1,false);
    wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts','loadJS');


//CUSTOMIZE OPTIONS

function pgdmThumbnailCallout($wp_customize){

    $wp_customize->add_section('pgdmThumbnailCalloutSection',array('title'=>'Naslovnica'));

    $wp_customize->add_setting('pgdmThumbnailCalloutHeadlinePrefix', array('default' => 'PGD'));
    $wp_customize->add_setting('pgdmThumbnailCalloutHeadlineSuffix', array('default' => 'MALEČNIK'));
    $wp_customize->add_setting('pgdmThumbnailCalloutHeadlineImage', array('default' => 'Pomagamo že od leta 1932'));
    $wp_customize->add_setting('pgdmThumbnailCalloutImageText', array('default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'));
    $wp_customize->add_setting('pgdmThumbnailCalloutImage',array());

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdmThumbnailCalloutHeadlineControlPrefixControl',array(
        'label'=>'Beli naslov',
        'section'=>'pgdmThumbnailCalloutSection',
        'settings'=>'pgdmThumbnailCalloutHeadlinePrefix')));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdmThumbnailCalloutHeadlineSuffixControl',array(
        'label'=>'Rdeci naslov',
        'section'=>'pgdmThumbnailCalloutSection',
        'settings'=>'pgdmThumbnailCalloutHeadlineSuffix')));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdmThumbnailCalloutHeadlineImageControl',array(
        'label'=>'Naslov v sliki',
        'section'=>'pgdmThumbnailCalloutSection',
        'settings'=>'pgdmThumbnailCalloutHeadlineImage')));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdmThumbnailCalloutImageTextControl',array(
        'label'=>'Besedilo v sliki',
        'section'=>'pgdmThumbnailCalloutSection',
        'settings'=>'pgdmThumbnailCalloutImageText')));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdmThumbnailCalloutImageControl',array(
        'label'=>'Slika',
        'section'=>'pgdmThumbnailCalloutSection',
        'settings'=>'pgdmThumbnailCalloutImage',
        )));
        
}
add_action('customize_register','pgdmThumbnailCallout');

function pgdmBasicInfoCallout($wp_customize){
    $wp_customize->add_section('pgdmBasicInfoCalloutSection',array('title'=>'Osnovne informacije'));

    $wp_customize->add_setting('pgdmBasicInfoCalloutBasicInfoHeadline', array('default' => 'Naše poslanstvo'));
    $wp_customize->add_setting('pgdmBasicInfoCalloutBasicInfoSub1', array('default' => 'POŽARNA PREVENTIVA'));
    $wp_customize->add_setting('pgdmBasicInfoCalloutBasicInfoSub1Text', array('default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis lorem a pulvinar accumsan. Suspendisse potenti. Curabitur at tellus in eros ultricies pharetra.'));
    $wp_customize->add_setting('pgdmBasicInfoCalloutBasicInfoSub2', array('default' => 'GAŠENJE POŽAROV'));
    $wp_customize->add_setting('pgdmBasicInfoCalloutBasicInfoSub2Text', array('default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis lorem a pulvinar accumsan. Suspendisse potenti. Curabitur at tellus in eros ultricies pharetra.'));
    $wp_customize->add_setting('pgdmBasicInfoCalloutBasicInfoSub3', array('default' => 'TEHNIČNA POMOČ'));
    $wp_customize->add_setting('pgdmBasicInfoCalloutBasicInfoSub3Text', array('default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis lorem a pulvinar accumsan. Suspendisse potenti. Curabitur at tellus in eros ultricies pharetra.'));
    $wp_customize->add_setting('pgdmBasicInfoCalloutBasicInfoSub4', array('default' => 'IZOBRAŽEVANJE'));
    $wp_customize->add_setting('pgdmBasicInfoCalloutBasicInfoSub4Text', array('default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis lorem a pulvinar accumsan. Suspendisse potenti. Curabitur at tellus in eros ultricies pharetra.'));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdmBasicInfoCalloutBasicInfoHeadlineControl',array(
        'label'=>'Naslov osnovnih informacij',
        'section'=>'pgdmBasicInfoCalloutSection',
        'settings'=>'pgdmBasicInfoCalloutBasicInfoHeadline')));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdmBasicInfoCalloutBasicInfoSub1Control',array(
        'label'=>'Prvi podnaslov',
        'section'=>'pgdmBasicInfoCalloutSection',
        'settings'=>'pgdmBasicInfoCalloutBasicInfoSub1')));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdmBasicInfoCalloutBasicInfoSub1TextControl',array(
        'type' => 'textarea',
        'label'=>'Opis 1',
        'section'=>'pgdmBasicInfoCalloutSection',
        'settings'=>'pgdmBasicInfoCalloutBasicInfoSub1Text')));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdmBasicInfoCalloutBasicInfoSub2Control',array(
        'label'=>'Drugi podnaslov',
        'section'=>'pgdmBasicInfoCalloutSection',
        'settings'=>'pgdmBasicInfoCalloutBasicInfoSub2')));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdmBasicInfoCalloutBasicInfoSub2TextControl',array(
        'type' => 'textarea',
        'label'=>'Opis 2',
        'section'=>'pgdmBasicInfoCalloutSection',
        'settings'=>'pgdmBasicInfoCalloutBasicInfoSub2Text')));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdmBasicInfoCalloutBasicInfoSub3Control',array(
        'label'=>'Tretji podnaslov',
        'section'=>'pgdmBasicInfoCalloutSection',
        'settings'=>'pgdmBasicInfoCalloutBasicInfoSub3')));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdmBasicInfoCalloutBasicInfoSub3TextControl',array(
        'type' => 'textarea',
        'label'=>'Opis 3',
        'section'=>'pgdmBasicInfoCalloutSection',
        'settings'=>'pgdmBasicInfoCalloutBasicInfoSub3Text')));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdmBasicInfoCalloutBasicInfoSub4Control',array(
        'label'=>'Četrti podnaslov',
        'section'=>'pgdmBasicInfoCalloutSection',
        'settings'=>'pgdmBasicInfoCalloutBasicInfoSub4')));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdmBasicInfoCalloutBasicInfoSub4TextControl',array(
        'type' => 'textarea',
        'label'=>'Opis 4',
        'section'=>'pgdmBasicInfoCalloutSection',
        'settings'=>'pgdmBasicInfoCalloutBasicInfoSub4Text')));
}
add_action('customize_register','pgdmBasicInfoCallout');

function pgdYouthCallout($wp_customize){
    $wp_customize->add_section('pgdYouthCalloutSection',array('title'=>'Mladina'));

    $wp_customize->add_setting('pgdYouthCalloutSectionHeader', array('default' => 'Pridruži se naši mladini!'));
    $wp_customize->add_setting('pgdYouthCalloutSectionP', array('default' => 'Fantje in dekleta vseh starosti'));
    $wp_customize->add_setting('pgdYouthCalloutSectionButton', array('default' => 'pridruži se'));
    $wp_customize->add_setting('pgdYouthCalloutSectionImage',array());

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdYouthCalloutSectionHeaderControl',array(
        'label'=>'Besedilo v sliki',
        'section'=>'pgdYouthCalloutSection',
        'settings'=>'pgdYouthCalloutSectionHeader')));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdYouthCalloutSectionPControl',array(
        'label'=>'Opis',
        'section'=>'pgdYouthCalloutSection',
        'settings'=>'pgdYouthCalloutSectionP')));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdYouthCalloutSectionButtonControl',array(
        'label'=>'Gumb',
        'section'=>'pgdYouthCalloutSection',
        'settings'=>'pgdYouthCalloutSectionButton')));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdYouthCalloutSectionImageControl',array(
        'label'=>'Slika',
        'section'=>'pgdYouthCalloutSection',
        'settings'=>'pgdYouthCalloutSectionImage',
        )));
}
add_action('customize_register','pgdYouthCallout');

include_once('functionsAboutUs.php');
include_once('functionsHistory.php');
include_once('functionsVehicle.php');

function pgdFooterCallout($wp_customize){
    $wp_customize->add_section('pgdFooterCalloutSection',array('title'=>'Noga'));

    $wp_customize->add_setting('pgdFooterCalloutSectionImage',array());

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdFooterCalloutSectionImageControl',array(
        'label'=>'Slika',
        'section'=>'pgdFooterCalloutSection',
        'settings'=>'pgdFooterCalloutSectionImage',
        )));
}
add_action('customize_register','pgdFooterCallout');
?>