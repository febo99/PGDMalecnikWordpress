<?php
function pgdJoinUsThumbnailCallout($wp_customize){
    $wp_customize->add_section('pgdJoinUsThumbnailCalloutSection',array('title'=>'Pridruži se nam'));

    $wp_customize->add_setting('pgdJoinUsThumbnailCalloutSectionTitle', array('default' => 'Pridruži se nam!'));
    $wp_customize->add_setting('pgdJoinUsThumbnailCalloutSectionP', array('default' => 'Iščemo fante in dekleta od 6. leta naprej'));
    $wp_customize->add_setting('pgdJoinUsThumbnailCalloutSectionImage',array());

    $wp_customize->add_setting('pgdJoinUsThumbnailCalloutSectionONasHeader', array('default' => 'O PGD Malečnik'));
    $wp_customize->add_setting('pgdJoinUsThumbnailCalloutSectionONasOpis', array('default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sem dui, varius consequat massa in, eleifend viverra ante. Morbi id odio a justo dictum finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla faucibus vel elit vitae pellentesque. Cras non felis quis nibh placerat auctor at a tortor. Morbi congue, diam nec elementum congue, magna nunc blandit elit, eget semper nibh ante non sapien. Vestibulum libero tellus, faucibus eu nulla sed, euismod malesuada nibh. Donec enim arcu, commodo sed mi ac, interdum pellentesque ex. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque a interdum neque, in convallis nunc. Nulla magna lacus, fringilla non ante vitae, elementum fringilla ligula. Praesent sem justo, viverra in sapien vel, venenatis consectetur augue. Curabitur accumsan commodo lorem. Nulla viverra massa nisi, vel maximus massa auctor nec. Morbi tristique porta maximus. Duis a metus tempor, iaculis velit a, sodales tortor. Quisque vel lacus in justo tristique eleifend. Etiam at lorem at sem lobortis pretium eget sed nulla. Aliquam blandit neque sit amet nibh varius, at dictum augue aliquam. Etiam ac malesuada nisl, id pellentesque orci. Nunc convallis nisl non elit vestibulum faucibus. Proin pulvinar ex risus. '));
    $wp_customize->add_setting('pgdJoinUsThumbnailCalloutSectionImageONas',array());

    $wp_customize->add_setting('pgdJoinUsThumbnailCalloutSectionImageJoinUs1',array());
    $wp_customize->add_setting('pgdJoinUsThumbnailCalloutSectionImageJoinUs2',array());
    $wp_customize->add_setting('pgdJoinUsThumbnailCalloutSectionImageJoinUs3',array());

    $wp_customize->add_setting('pgdJoinUsThumbnailCalloutSectionImageJoinUsFeedback1',array());
    $wp_customize->add_setting('pgdJoinUsThumbnailCalloutSectionImageJoinUsFeedback2',array());
    $wp_customize->add_setting('pgdJoinUsThumbnailCalloutSectionImageJoinUsFeedback3',array());
    $wp_customize->add_setting('pgdJoinUsThumbnailCalloutSectionImageJoinUsFeedbackText1',array());
    $wp_customize->add_setting('pgdJoinUsThumbnailCalloutSectionImageJoinUsFeedbackText2',array());
    $wp_customize->add_setting('pgdJoinUsThumbnailCalloutSectionImageJoinUsFeedbackText3',array());


    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdJoinUsThumbnailCalloutSectionTitleControl',array(
        'label'=>'O nas',
        'section'=>'pgdJoinUsThumbnailCalloutSection',
        'settings'=>'pgdJoinUsThumbnailCalloutSectionTitle')));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdJoinUsThumbnailCalloutSectionPControl',array(
        'label'=>'Besedilo v sliki',
        'section'=>'pgdJoinUsThumbnailCalloutSection',
        'settings'=>'pgdJoinUsThumbnailCalloutSectionP')));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdJoinUsThumbnailCalloutSectionImageControl',array(
        'label'=>'Naslovna slika',
        'section'=>'pgdJoinUsThumbnailCalloutSection',
        'settings'=>'pgdJoinUsThumbnailCalloutSectionImage',
        )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdJoinUsThumbnailCalloutSectionONasHeaderControl',array(
        'label'=>'Prvi naslov',
        'section'=>'pgdJoinUsThumbnailCalloutSection',
        'settings'=>'pgdJoinUsThumbnailCalloutSectionONasHeader')));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdJoinUsThumbnailCalloutSectionONasOpisControl',array(
        'type' => 'textarea',
        'label'=>'Prvi opis',
        'section'=>'pgdJoinUsThumbnailCalloutSection',
        'settings'=>'pgdJoinUsThumbnailCalloutSectionONasOpis',)));


    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdJoinUsThumbnailCalloutSectionPioneersHeaderControl',array(
        'label'=>'Drugi naslov',
        'section'=>'pgdJoinUsThumbnailCalloutSection',
        'settings'=>'pgdJoinUsThumbnailCalloutSectionPioneersHeader')));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdJoinUsThumbnailCalloutSectionPioneersPControl',array(
        'type' => 'textarea',
        'label'=>'Drugi opis',
        'section'=>'pgdJoinUsThumbnailCalloutSection',
        'settings'=>'pgdJoinUsThumbnailCalloutSectionPioneersP')));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdJoinUsThumbnailCalloutSectionImageJoinUs1Control',array(
        'label'=>'Slika 1 v pridruži se',
        'section'=>'pgdJoinUsThumbnailCalloutSection',
        'settings'=>'pgdJoinUsThumbnailCalloutSectionImageJoinUs1',
        )));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdJoinUsThumbnailCalloutSectionImageJoinUs2Control',array(
        'label'=>'Slika 2 v pridruži se',
        'section'=>'pgdJoinUsThumbnailCalloutSection',
        'settings'=>'pgdJoinUsThumbnailCalloutSectionImageJoinUs2',
        )));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdJoinUsThumbnailCalloutSectionImageJoinUs3Control',array(
        'label'=>'Slika 3 v pridruži se',
        'section'=>'pgdJoinUsThumbnailCalloutSection',
        'settings'=>'pgdJoinUsThumbnailCalloutSectionImageJoinUs3',
        )));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdJoinUsThumbnailCalloutSectionImageJoinUs1Control',array(
        'label'=>'Slika 1 v mnenjih',
        'section'=>'pgdJoinUsThumbnailCalloutSection',
        'settings'=>'pgdJoinUsThumbnailCalloutSectionImageJoinUsFeedback1',
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdJoinUsThumbnailCalloutSectionFeedback1',array(
            'label'=>'Mnenje 1',
            'section'=>'pgdJoinUsThumbnailCalloutSection',
            'settings'=>'pgdJoinUsThumbnailCalloutSectionImageJoinUsFeedbackText1')));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdJoinUsThumbnailCalloutSectionImageJoinUs2Control',array(
        'label'=>'Slika 2 v mnenjih',
        'section'=>'pgdJoinUsThumbnailCalloutSection',
        'settings'=>'pgdJoinUsThumbnailCalloutSectionImageJoinUsFeedback2',
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdJoinUsThumbnailCalloutSectionFeedback2',array(
            'label'=>'Mnenje 2',
            'section'=>'pgdJoinUsThumbnailCalloutSection',
            'settings'=>'pgdJoinUsThumbnailCalloutSectionImageJoinUsFeedbackText2')));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdJoinUsThumbnailCalloutSectionImageJoinUs3Control',array(
        'label'=>'Slika 3 v mnenjih',
        'section'=>'pgdJoinUsThumbnailCalloutSection',
        'settings'=>'pgdJoinUsThumbnailCalloutSectionImageJoinUsFeedback3',
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdJoinUsThumbnailCalloutSectionFeedback3',array(
            'label'=>'Mnenje 3',
            'section'=>'pgdJoinUsThumbnailCalloutSection',
            'settings'=>'pgdJoinUsThumbnailCalloutSectionImageJoinUsFeedbackText3')));

    
    

        
}
add_action('customize_register','pgdJoinUsThumbnailCallout');
?>