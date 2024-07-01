<?php
//Template Name: Home Page 2 
get_header();
?>


<div class="carousel slide" data-bs-ride="false" id="carousel-1">
                        <?php
//echo do_shortcode('[smartslider3 slider="2"]');
echo do_shortcode('[metaslider id="98"]');
	
	
?>
                             </div>
                             </header>
       <div class="container-fluid">
        <section id="aboutus" style="background: #F0F0F0;">
            <div class="row">
                <div class="col-lg-2 col-xl-2 col-xxl-2" style="background: url(&quot;<?php echo get_template_directory_uri(); ?>/assets/img/plant-1.svg.png&quot;) left no-repeat;"></div>
                <div class="col-lg-8 col-xl-8 col-xxl-8">
                    <div class="row mt-5 mb-4" style="width: 100%;">
                        <div class="col form-group" style="width: 100%;color: #19222E;">
                            <h2 style="display: block;text-align: center;font-family: URWClassico;">About Us</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h2 class="display-4 text-center" style="font-weight: bold;"><br><strong>Where Luxury Meets Comfort</strong><br><strong>&nbsp;In Every Aspect Of Living</strong><br><br></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p style="font-family: URWClassico;text-align: center;color: #19222e;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi <br>scelerisque, ligula vitae tristique porttitor, massa ipsum fermentum <br>urna, non accumsan lacus ipsum ut turpis. Sed eleifend fermentum lacus,<br><br></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-xl-2 col-xxl-2 col-md2 col-xl2" style="background: url(&quot;<?php echo get_template_directory_uri(); ?>/assets/img/plant-2.svg%20fill.png&quot;) right no-repeat;"></div>
            </div>
            <div class="row">
                <div class="col text-center" style="color: #13353F;"><button class="btn btn-primary" type="button" style="font-family: URWClassico;text-align: center;background: #13353F;border-style: solid;width: 130px;">Read More</button></div>
            </div>
        </section>
    </div>
    <div class="container mt-5" style="background: #F0F0F0;">
        <div class="row">
            <div class="col">
                <div class="container-fluid py-4 py-xl-5">
                    <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                        <div class="col">
                            <h2 class="text-center" style="color: #808080;font-size: 23px;">Penthouses</h2>
                            <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/Link.png">
                                <div class="card-body p-4">
                                    <h4 class="card-title" style="color: #13353F;font-size: 20px;font-weight: bold;">Lorem libero donec</h4>
                                    <p class="card-text" style="color: #13353f;font-size: 14px;">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h2 class="text-center" style="color: #808080;font-size: 23px;">Duplex</h2>
                            <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/Link2.png">
                                <div class="card-body p-4">
                                    <h4 class="card-title" style="font-size: 20px;color: #13353f;font-weight: bold;">Lorem libero donec</h4>
                                    <p class="card-text" style="color: #13353f;font-size: 14px;">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h2 class="text-center" style="color: #808080;font-size: 23px;">3+1 Apartments</h2>
                            <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/Link3.png">
                                <div class="card-body p-4">
                                    <h4 class="card-title" style="font-size: 20px;color: #13353f;font-weight: bold;">Lorem libero donec</h4>
                                    <p class="card-text" style="color: #13353f;font-size: 14px;">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col text-center" style="color: #13353F;"><button class="btn btn-primary" type="button" style="font-family: URWClassico;text-align: center;background: #13353F;border-style: solid;width: 130px;padding: 0px;padding-top: 2px;padding-bottom: 2px;">Read More</button></div>
        </div>
    </div>
    <div id="vid" class="container-fluid">
        <div class="row justify-content-center row-cols-1">
            <div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
                <div id="divvideo" class="ratio"><iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/tEQX3g42lvs" class="embed-responsive-item" width="560" height="315" style="max-height: 415px;"></iframe></div>
            </div>
        </div>
    </div>                  
    <div class="container-fluid" id="galeria" style="margin-top: 35px;">
        <div class="row d-flex justify-content-center">
            <div class="col">
            <?php 
                //if( function_exists('photo_gallery') ) {echo  photo_gallery(3); } 
                echo do_shortcode('[modula id="103"]');
                ?>

            </div>
        </div>
    </div>
    <div id="vr3" class="container-fluid" style="margin-top: 35px; background: url(&quot;<?php echo get_template_directory_uri(); ?>/assets/img/vr%20majtas.png&quot;) top left / 15% no-repeat, url(&quot;<?php echo get_template_directory_uri(); ?>/assets/img/contact%20djathtas.png&quot;) bottom right / 15% no-repeat;">
        <div class="row justify-content-center row-cols-2">
            <div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10 col-xxl-10 mb-5" id="vr-col">
                <div id="vr10" class="container-fluid d-flex d-lg-flex justify-content-start align-items-center justify-content-lg-start align-items-lg-center ratio ratio-21x9" style="position: relative;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/div.comp-ContentImageSlideshow__imageSlide.png" style="width: 100%;left: 0;top: 0;height: 100%;">
                    <div class="d-flex flex-column justify-content-center align-items-start" id="divvr" style="position: absolute;"><img class="img-fluid" id="imgvr" src="<?php echo get_template_directory_uri(); ?>/assets/img/vr-glasses%201.png" style="margin-left: 10px;">
                        <h3 id="head1" class="w-50" style="color: var(--bs-body-bg);margin-left: 15px;margin-top: 8px;">Explore Residence with Virtual Tour</h3><button class="btn btn-primary border rounded-pill" id="btn1" type="button" style="background: var(--bs-body-bg);margin-left: 15px;margin-top: 8px;color: #13353f;border-color: var(--bs-btn-disabled-color);">EXPLORE</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-8 col-md-10 col-lg-10 col-xl-10 col-xxl-8" id="contact-col">
                <section class="position-relative py-2 py-xl-2">
                    <div class="container position-relative">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div class="d-flex flex-column align-items-start">
                                    <h2 class="mb-4" style="color: rgb(19,53,63);font-family: URWClassico;">Schedule an appointment with Lion Resident Agents</h2>
                                    <div class="align-items-start d-inline-flex mb-2">
                                        <div class="px-2" style="color: #13353f;">
                                            <p class="mb-0" style="color: #13353f;font-family: URWClassico;font-size: 16px;">Phone number:</p>
                                        </div>
                                        <div class="px-2">
                                            <p class="mb-0" style="color: #13353f;font-size: 16px;font-family: URWClassico;">+123456789</p>
                                        </div>
                                    </div>
                                    <div class="d-inline-flex mb-2 align-items-start">
                                        <div class="px-2" style="color: #13353f;">
                                            <p class="mb-0" style="color: #13353f;font-size: 16px;font-family: URWClassico;">Email:</p>
                                        </div>
                                        <div class="px-2">
                                            <p class="mb-0" style="color: #13353f;font-size: 16px;font-family: URWClassico;">email@yahoo.com</p>
                                        </div>
                                    </div>
                                    <div class="d-inline-flex mb-2 align-items-start">
                                        <div class="px-2" style="color: #13353f;">
                                            <p class="mb-0" style="color: #13353f;font-size: 16px;font-family: URWClassico;">Address</p>
                                        </div>
                                        <div class="px-2">
                                            <p class="mb-0" style="color: #13353f;font-size: 16px;font-family: URWClassico;">Rruga Dritan Hoxha, Tiraa, Albania</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <div>
                                    <form method="post">
                                        <div class="mb-3"><input class="form-control" type="text" id="name-2" name="name" placeholder="Name"></div>
                                        <div class="mb-3"><input class="form-control" type="text" id="tel-1" name="tel" placeholder="Telefon"></div>
                                        <div class="mb-3"><input class="form-control" type="email" id="email-2" name="email" placeholder="Email"></div>
                                        <div class="mb-3"><textarea class="form-control" id="message-2" name="message" rows="6" placeholder="Message"></textarea></div>
                                        <div><button class="btn btn-primary d-block w-100" type="submit" style="background: #13353f;">Send </button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>


<?php get_footer(); ?>