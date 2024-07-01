<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lion_Residence_2
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<body style="font-family: URWClassico;--bs-body-color: #13353F;--bs-body-font-weight: normal;background: #F1F1F1;">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'lion-residence-2' ); ?></a>

	<header id="projektiheader">
	   <div class="container-fluid" style="position: relative;">
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas-1" style="background: url(&quot;<?php echo get_template_directory_uri(); ?>/assets/img/majtas.png&quot;) no-repeat, url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;) no-repeat, url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;) no-repeat, transparent;background-size: auto, auto, auto, auto;"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" style="position: absolute;">
            <div class="offcanvas-header justify-content-end"><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="offcanvas"></button></div>
            <div class="offcanvas-body">
                <ul class="nav nav-tabs" style="display: block;">
                    <li class="nav-item"><a class="nav-link active" href="#" style="background: transparent;color: #13353F;border-width: 0.8px;font-weight: bold;">Home page</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#" style="background: transparent;color: #13353F;border-width: 0.8px;font-weight: bold;">The Project</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#" style="background: transparent;color: #13353F;border-width: 0.8px;font-weight: bold;">About Us</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#" style="background: transparent;color: #13353F;border-width: 0.8px;font-weight: bold;">Typollogies</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#" style="background: transparent;color: #13353F;border-width: 0.8px;font-weight: bold;">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#" style="background: transparent;color: #13353F;border-width: 0.8px;font-weight: bold;">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <nav class="navbar navbar-expand-md navbar-light2" style="z-index: 10;width: 100%;background: transparent;position: absolute;">
            <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/LionI.png" style="display: block;overflow: visible;width: 130px;height: 40px;"></a><button data-bs-toggle="offcanvas" data-bs-target="#offcanvas-1" class="navbar-toggler"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse flex-grow-0 order-md-first" id="navcol-1">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link" href="#" style="font-family: URWClassico;color: #fff;">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#" style="font-family: URWClassico;color: #fff;">The Project</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" style="font-family: URWClassico; color: #fff;">About Us</a></li>
                    </ul>
                    <ul class="navbar-nav d-md-none">
                        <li class="nav-item"><a class="nav-link active" href="#" style="color: #fff;">First Item</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" style="color: #fff;">Second Item</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" style="color: #fff;">Third Item</a></li>
                    </ul>
                </div>
                <ul class="navbar-nav d-none d-md-inline-flex">
                    <li class="nav-item"><a class="nav-link" href="#" style="font-family: URWClassico;color: #fff;">Typologies</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="font-family: URWClassico;color: #fff;">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="font-family: URWClassico;color: #fff;">Contact Us</a></li>
                </ul>
            </div>
        </nav>
        <div class="row">
            <div class="col d-flex justify-content-center align-items-end" id="colprojekti" style="padding-left: 0px;padding-right: 0px;">
			 <?php echo do_shortcode('[kulla]');  ?>
				<!--<img class="img-fluid" id="imgprojekti" src="<?php echo get_template_directory_uri(); ?>/assets/img/projektiimg.png"> -->
                <div style="position: absolute;">
                    <h6 style="color: var(--bs-body-bg);border-style: none;">Kliko mbi godine per opsione apartamentesh</h6>
                </div>
            </div>
        </div>
    </div>



</header>

	<!-- #masthead -->
