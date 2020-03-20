<?php get_header();?>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#">
            <!-- <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> -->
            <span class='logoPrefix'>pgd.</span><span class='logoSuffix'>malečnik</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Domov <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">O nas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Zgodovina</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Intervencije</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Novice & obvestila</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Arhiv</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Kontakt</a>
            </li>
            </ul>
        </div>
    </nav>
    <div class='thumbnail'>
        <img src='<?php echo get_template_directory_uri() ?>/images/thumbnail.jpg'>
    </div>
    <div class='container'>
    </div>
<?php get_footer();?>