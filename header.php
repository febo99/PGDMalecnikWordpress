<!DOCTYPE html>
<html>
    <head>
        <?php wp_head();?>
    </head>
    <title>PGD Malečnik</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#">
            <!-- <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> -->
            <span class='logoPrefix'><?php echo get_theme_mod('pgdmThumbnailCalloutHeadlinePrefix','PGD');?>.</span><span class='logoSuffix'><?php echo get_theme_mod('pgdmThumbnailCalloutHeadlineSuffix','malečnik');?></span>
        </a>
        <button id='navbarButton' class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo home_url() ?>">Domov</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php/o-nas">O nas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php/zgodovina">Zgodovina</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php/vozni-park">Vozila in tehnika</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php/intervencije">Intervencije</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Informacije
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="index.php/novice">Novice</a>
                <a class="dropdown-item" href="index.php/nasveti">Nasveti</a>
                <a class="dropdown-item" href="index.php/tel112">112</a>
                <a class="dropdown-item" href="index.php/povezave">Povezave</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php/kontakt">Kontakt</a>
            </li>

            </ul>
        </div>
    </nav>    