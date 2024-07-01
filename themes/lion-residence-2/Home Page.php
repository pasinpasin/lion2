<?php
//Template Name: Home Page 
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
                <div class="col-lg-2 col-xl-2 col-xxl-2" style="background: url(&quot;<?php echo get_template_directory_uri(); ?>/assets/img/plant-1.svg.png&quot;);"></div>
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
                <div class="col-lg-2 col-xl-2 col-xxl-2 col-md2 col-xl2" style="background: url(&quot;<?php echo get_template_directory_uri(); ?>/assets/img/plant-2.svg%20fill.png&quot;);"></div>
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
        <div class="row mt-3 mb-3">
            <div class="col text-center" style="color: #13353F;"><button class="btn btn-primary btn-lg text-center" type="button" style="font-family: URWClassico;text-align: center;background: #13353F;border-style: solid;">Read More</button></div>
        </div>
    </div>
    <div id="vid" class="container-fluid">
        <div class="row">
            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 d-none d-sm-block"></div>
            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                <div id="divvideo" class="ratio" ><iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/tEQX3g42lvs" class="embed-responsive-item" width="560" height="315" style="max-height: 415px;"></iframe></div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 d-none d-sm-block"></div>
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
    <div id="vr3" class="container-fluid" style="margin-top: 35px;">
        <div class="row">
            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 d-none d-sm-block"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/plant-1.svg.png"></div>
            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                <div id="vr10" class="container-fluid d-flex d-lg-flex justify-content-start align-items-center justify-content-lg-start align-items-lg-center ratio ratio-21x9" style="position: relative;"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/div.comp-ContentImageSlideshow__imageSlide.png" style="width: 100%;height: 100%; left:0; top:0;">
                    <div id="divvr" class="d-flex flex-column justify-content-center align-items-start" style="position: absolute;"><img id="imgvr" class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/vr-glasses%201.png" style="margin-left: 10px;">
                        <h3 id="head1" style="color: var(--bs-body-bg);margin-left: 15px;margin-top: 8px;">Explore Residence with Virtual Tour</h3><button class="btn btn-primary" type="button" style="font-size: 1.5vw;background: var(--bs-body-color);margin-left: 15px;margin-top: 8px;color: var(--bs-btn-disabled-color);border-color: var(--bs-btn-disabled-color);">EXPLORE</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 d-none d-sm-block"></div>
        </div>
        <div class="row justify-content-end mt-5">
            <div class="col-lg-8">
                <section class="position-relative py-2 py-xl-2">
                    <div class="container position-relative">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-6 col-lg-5 col-xl-5">
                                <div class="d-flex flex-column justify-content-center align-items-start h-90">
                                    <h2 style="color: rgb(19,53,63);font-weight: bold;">Schedule an appointment with Lion Resident Agents</h2>
                                    <div class="align-items-center p-3 d-inline-flex">
                                        <div class="px-2" style="color: #13353f;">
                                            <p class="mb-0" style="color: #13353f;">Phone number:</p>
                                        </div>
                                        <div class="px-2">
                                            <p class="mb-0" style="color: #13353f;">+123456789</p>
                                        </div>
                                    </div>
                                    <div class="align-items-center p-3 d-inline-flex">
                                        <div class="px-2" style="color: #13353f;">
                                            <p class="mb-0" style="color: #13353f;">Email:</p>
                                        </div>
                                        <div class="px-2">
                                            <p class="mb-0" style="color: #13353f;">email@yahoo.com</p>
                                        </div>
                                    </div>
                                    <div class="align-items-center p-3 d-inline-flex">
                                        <div class="px-2" style="color: #13353f;">
                                            <p class="mb-0" style="color: #13353f;">Address</p>
                                        </div>
                                        <div class="px-2">
                                            <p class="mb-0" style="color: #13353f;">Rruga Dritan Hoxha, Tiraa, Albania</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-6 col-lg-4">
                                <div>
                                    <form method="post">
                                        <div class="mb-3"><input class="form-control" type="text" id="name-1" name="name" placeholder="Name"></div>
                                        <div class="mb-3"><input class="form-control" type="text" id="tel-2" name="tel" placeholder="Telefon"></div>
                                        <div class="mb-3"><input class="form-control" type="email" id="email-1" name="email" placeholder="Email"></div>
                                        <div class="mb-3"><textarea class="form-control" id="message-1" name="message" rows="6" placeholder="Message"></textarea></div>
                                        <div><button class="btn btn-primary d-block w-100" type="submit" style="background: #13353f;">Send </button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-2 col-xl-2 col-xxl-2 d-none d-lg-block"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/plant-2.svg%20fill.png"></div>
        </div>
    </div>


<?php get_footer(); ?>