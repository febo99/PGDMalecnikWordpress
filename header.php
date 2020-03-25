<!DOCTYPE html>
<html>
    <head>
        <?php wp_head();?>
    </head>
    <title>PGD Malečnik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
    <body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#">
            <!-- <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> -->
            <span class='logoPrefix'><?php echo get_theme_mod('pgdmThumbnailCalloutHeadlinePrefix','PGD');?>.</span><span class='logoSuffix'><?php echo get_theme_mod('pgdmThumbnailCalloutHeadlineSuffix','malečnik');?></span>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="/">Domov <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about">O nas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Zgodovina</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Vozni park</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Intervencije</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Novice</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Kontakt</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Za člane</a>
            </li>
            </ul>
        </div>
    </nav>    