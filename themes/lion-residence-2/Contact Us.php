
<?php
//Template Name: Contact Us
get_header('contactus');
?>
   
  <div class="container-fluid">
        <div class="container-fluid" style="background: url(&quot;<?php echo get_template_directory_uri(); ?>/assets/img/contact-us-bg.png&quot;) no-repeat;background-size: contain;">
            <section class="position-relative py-4 py-xl-5">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center align-items-start">
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="d-flex flex-column justify-content-center align-items-start h-100">
                                <div>
                                    <h2>Schedule a tour at Lion Residence 2 today</h2>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="bs-icon-lg bs-icon-rounded d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon" style="background: transparent;color: #13353f;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone-fill">
                                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                                        </svg></div>
                                    <div class="d-flex d-lg-flex justify-content-start align-items-center justify-content-lg-start align-items-lg-center">
                                        <p class="mb-0">+123456789</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="bs-icon-lg bs-icon-rounded d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon" style="background: transparent;color: #13353f;"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" width="1em" fill="currentColor">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"></path>
                                        </svg></div>
                                    <div class="d-flex d-lg-flex justify-content-start align-items-center justify-content-lg-start align-items-lg-center">
                                        <p class="mb-0">info@email.com</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div class="bs-icon-lg bs-icon-rounded d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon" style="background: transparent;color: #13353f;"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" width="1em" fill="currentColor">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path>
                                        </svg></div>
                                    <div class="d-flex d-lg-flex justify-content-start align-items-center justify-content-lg-start align-items-lg-center">
                                        <p class="mb-0">12 Example Street</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 col-xl-4">
                            <div>
						<?php	echo do_shortcode('[contact-form-7 id="01823df" title="contausform"  html_class="p-3 p-xl-4"]');  ?>
                              <!--  <form class="p-3 p-xl-4" method="post">
                                    <div class="mb-3"><input class="form-control" type="text" id="name-1" name="name" placeholder="Name" style="color: #13353f;"></div>
                                    <div class="mb-3"><input class="form-control" type="text" id="name-2" name="Phone Nbr" placeholder="Phone Nbr"></div>
                                    <div class="mb-3"><input class="form-control" type="email" id="email-1" name="email" placeholder="Email"></div>
                                    <div class="mb-3"><textarea class="form-control" id="message-1" name="message" rows="6" placeholder="Message"></textarea></div>
                                    <div><button class="btn btn-primary d-block w-100" type="submit" style="font-family: URWClassico;font-weight: bold;background: #13353f;">SEND MESSAGE</button></div>
                                </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div id="map" class="container-fluid">
            <div class="row">
                <div class="col"><iframe allowfullscreen="" frameborder="0" src="https://cdn.bootstrapstudio.io/placeholders/map.html" width="100%" height="400"></iframe></div>
            </div>
        </div>
    </div>

         
      
       
<?php get_footer(); ?>