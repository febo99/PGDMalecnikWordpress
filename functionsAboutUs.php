<?php
function pgdAboutUsThumbnailCallout($wp_customize){
    $wp_customize->add_section('pgdAboutUsThumbnailCalloutSection',array('title'=>'O nas'));

    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionTitle', array('default' => 'O nas'));
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionP', array('default' => 'Prostovoljna gasilska enota 2. kategorije 2. sektor pri JGS Maribor - GZ Maribor.'));
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionImage',array());

    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionONasHeader', array('default' => 'O PGD Malečnik'));
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionONasOpis', array('default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sem dui, varius consequat massa in, eleifend viverra ante. Morbi id odio a justo dictum finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla faucibus vel elit vitae pellentesque. Cras non felis quis nibh placerat auctor at a tortor. Morbi congue, diam nec elementum congue, magna nunc blandit elit, eget semper nibh ante non sapien. Vestibulum libero tellus, faucibus eu nulla sed, euismod malesuada nibh. Donec enim arcu, commodo sed mi ac, interdum pellentesque ex. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque a interdum neque, in convallis nunc. Nulla magna lacus, fringilla non ante vitae, elementum fringilla ligula. Praesent sem justo, viverra in sapien vel, venenatis consectetur augue. Curabitur accumsan commodo lorem. Nulla viverra massa nisi, vel maximus massa auctor nec. Morbi tristique porta maximus. Duis a metus tempor, iaculis velit a, sodales tortor. Quisque vel lacus in justo tristique eleifend. Etiam at lorem at sem lobortis pretium eget sed nulla. Aliquam blandit neque sit amet nibh varius, at dictum augue aliquam. Etiam ac malesuada nisl, id pellentesque orci. Nunc convallis nisl non elit vestibulum faucibus. Proin pulvinar ex risus. '));
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionImageONas',array());

    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionPioneersHeader', array('default' => 'Pionirke in pionirji'));
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionPioneersP', array('default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sem dui, varius consequat massa in, eleifend viverra ante. Morbi id odio a justo dictum finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla faucibus vel elit vitae pellentesque. Cras non felis quis nibh placerat auctor at a tortor. Morbi congue, diam nec elementum congue, magna nunc blandit elit, eget semper nibh ante non sapien. Vestibulum libero tellus, faucibus eu nulla sed, euismod malesuada nibh. Donec enim arcu, commodo sed mi ac, interdum pellentesque ex. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque a interdum neque, in convallis nunc. Nulla magna lacus, fringilla non ante vitae, elementum fringilla ligula. Praesent sem justo, viverra in sapien vel, venenatis consectetur augue. Curabitur accumsan commodo lorem. Nulla viverra massa nisi, vel maximus massa auctor nec. Morbi tristique porta maximus. Duis a metus tempor, iaculis velit a, sodales tortor. Quisque vel lacus in justo tristique eleifend. Etiam at lorem at sem lobortis pretium eget sed nulla. Aliquam blandit neque sit amet nibh varius, at dictum augue aliquam. Etiam ac malesuada nisl, id pellentesque orci. Nunc convallis nisl non elit vestibulum faucibus. Proin pulvinar ex risus. '));
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionImagePioneers1',array());
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionImagePioneers2',array());
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionImagePioneers3',array());
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionImagePioneers',array());

    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionJuniorsHeader', array('default' => 'Mladinke in mladinci'));
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionJuniorsP', array('default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sem dui, varius consequat massa in, eleifend viverra ante. Morbi id odio a justo dictum finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla faucibus vel elit vitae pellentesque. Cras non felis quis nibh placerat auctor at a tortor. Morbi congue, diam nec elementum congue, magna nunc blandit elit, eget semper nibh ante non sapien. Vestibulum libero tellus, faucibus eu nulla sed, euismod malesuada nibh. Donec enim arcu, commodo sed mi ac, interdum pellentesque ex. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque a interdum neque, in convallis nunc. Nulla magna lacus, fringilla non ante vitae, elementum fringilla ligula. Praesent sem justo, viverra in sapien vel, venenatis consectetur augue. Curabitur accumsan commodo lorem. Nulla viverra massa nisi, vel maximus massa auctor nec. Morbi tristique porta maximus. Duis a metus tempor, iaculis velit a, sodales tortor. Quisque vel lacus in justo tristique eleifend. Etiam at lorem at sem lobortis pretium eget sed nulla. Aliquam blandit neque sit amet nibh varius, at dictum augue aliquam. Etiam ac malesuada nisl, id pellentesque orci. Nunc convallis nisl non elit vestibulum faucibus. Proin pulvinar ex risus. '));
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionImageJuniors1',array());
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionImageJuniors2',array());
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionImageJuniors3',array());
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionImageJuniors',array());
    
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionVeteransHeader', array('default' => 'Veterani'));
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionVeteransP', array('default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sem dui, varius consequat massa in, eleifend viverra ante. Morbi id odio a justo dictum finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla faucibus vel elit vitae pellentesque. Cras non felis quis nibh placerat auctor at a tortor. Morbi congue, diam nec elementum congue, magna nunc blandit elit, eget semper nibh ante non sapien. Vestibulum libero tellus, faucibus eu nulla sed, euismod malesuada nibh. Donec enim arcu, commodo sed mi ac, interdum pellentesque ex. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque a interdum neque, in convallis nunc. Nulla magna lacus, fringilla non ante vitae, elementum fringilla ligula. Praesent sem justo, viverra in sapien vel, venenatis consectetur augue. Curabitur accumsan commodo lorem. Nulla viverra massa nisi, vel maximus massa auctor nec. Morbi tristique porta maximus. Duis a metus tempor, iaculis velit a, sodales tortor. Quisque vel lacus in justo tristique eleifend. Etiam at lorem at sem lobortis pretium eget sed nulla. Aliquam blandit neque sit amet nibh varius, at dictum augue aliquam. Etiam ac malesuada nisl, id pellentesque orci. Nunc convallis nisl non elit vestibulum faucibus. Proin pulvinar ex risus. '));
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionImageVeterans1',array());
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionImageVeterans2',array());
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionImageVeterans3',array());
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionImageVeterans',array());

    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionOperativesHeader', array('default' => 'Operativna enota'));
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionOperativesP', array('default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sem dui, varius consequat massa in, eleifend viverra ante. Morbi id odio a justo dictum finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla faucibus vel elit vitae pellentesque. Cras non felis quis nibh placerat auctor at a tortor. Morbi congue, diam nec elementum congue, magna nunc blandit elit, eget semper nibh ante non sapien. Vestibulum libero tellus, faucibus eu nulla sed, euismod malesuada nibh. Donec enim arcu, commodo sed mi ac, interdum pellentesque ex. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque a interdum neque, in convallis nunc. Nulla magna lacus, fringilla non ante vitae, elementum fringilla ligula. Praesent sem justo, viverra in sapien vel, venenatis consectetur augue. Curabitur accumsan commodo lorem. Nulla viverra massa nisi, vel maximus massa auctor nec. Morbi tristique porta maximus. Duis a metus tempor, iaculis velit a, sodales tortor. Quisque vel lacus in justo tristique eleifend. Etiam at lorem at sem lobortis pretium eget sed nulla. Aliquam blandit neque sit amet nibh varius, at dictum augue aliquam. Etiam ac malesuada nisl, id pellentesque orci. Nunc convallis nisl non elit vestibulum faucibus. Proin pulvinar ex risus. '));
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionImageOperatives1',array());
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionImageOperatives2',array());
    $wp_customize->add_setting('pgdAboutUsThumbnailCalloutSectionImageOperatives3',array());

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionTitleControl',array(
        'label'=>'O nas',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionTitle')));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionPControl',array(
        'label'=>'Besedilo v sliki',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionP')));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionImageControl',array(
        'label'=>'Naslovna slika',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionImage',
        )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionONasHeaderControl',array(
        'label'=>'Prvi naslov',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionONasHeader')));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionONasOpisControl',array(
        'type' => 'textarea',
        'label'=>'Prvi opis',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionONasOpis',)));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionImageONasControl',array(
        'label'=>'Slika pod prvim opisom',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionImageONas',
        )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionPioneersHeaderControl',array(
        'label'=>'Drugi naslov',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionPioneersHeader')));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionPioneersPControl',array(
        'type' => 'textarea',
        'label'=>'Drugi opis',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionPioneersP')));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionImagePioneers1Control',array(
        'label'=>'Slika 1 v galeriji pionirjev',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionImagePioneers1',
        )));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionImagePioneers2Control',array(
        'label'=>'Slika 2 v galeriji pionirjev',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionImagePioneers2',
        )));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionImagePioneers3Control',array(
        'label'=>'Slika 3 v galeriji pionirjev',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionImagePioneers3',
        )));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionImagePioneersControl',array(
        'label'=>'Slika pod sekcijo pionirji',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionImagePioneers',
        )));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionJuniorsHeaderControl',array(
        'label'=>'Tretji naslov',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionJuniorsHeader')));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionJuniorsPControl',array(
        'type' => 'textarea',
        'label'=>'Tretji opis',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionJuniorsP')));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionImageJuniors1Control',array(
        'label'=>'Slika 1 v galeriji mladincev',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionImageJuniors1',
        )));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionImageJuniors2Control',array(
        'label'=>'Slika 2 v galeriji mladincev',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionImageJuniors2',
        )));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionImageJuniors3Control',array(
        'label'=>'Slika 3 v galeriji mladincev',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionImageJuniors3',
        )));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionImageJuniorsControl',array(
        'label'=>'Slika pod sekcijo mladinci',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionImageJuniors',
        )));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionVeteransHeaderControl',array(
        'label'=>'Četrti naslov',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionVeteransHeader')));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionVeteransPControl',array(
        'type' => 'textarea',
        'label'=>'Četrti opis',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionVeteransP')));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionImageVeterans1Control',array(
        'label'=>'Slika 1 v galeriji veteranov',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionImageVeterans1',
        )));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionImageVeterans2Control',array(
        'label'=>'Slika 2 v galeriji veteranov',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionImageVeterans2',
        )));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionImageVeterans3Control',array(
        'label'=>'Slika 3 v galeriji veteranov',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionImageVeterans3',
        )));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionImageVeteransControl',array(
        'label'=>'Slika pod sekcijo veterani',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionImageVeterans',
        )));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionOperativesHeaderControl',array(
        'label'=>'Peti naslov',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionOperativesHeader')));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionOperativesPControl',array(
        'type' => 'textarea',
        'label'=>'Peti opis',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionOperativesP')));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionImageOperatives1Control',array(
        'label'=>'Slika 1 v galeriji operative',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionImageOperatives1',
        )));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionImageOperatives2Control',array(
        'label'=>'Slika 2 v galeriji operative',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionImageOperatives2',
        )));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'pgdAboutUsThumbnailCalloutSectionImageOperatives3Control',array(
        'label'=>'Slika 3 v galeriji operative',
        'section'=>'pgdAboutUsThumbnailCalloutSection',
        'settings'=>'pgdAboutUsThumbnailCalloutSectionImageOperatives3',
        )));

        
}
add_action('customize_register','pgdAboutUsThumbnailCallout');
?>