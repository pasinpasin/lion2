<div class="container-fluid" style="font-family: URWClassico;background: #F1F1F1;">
<?php
//Template Name: Projekti
get_header('projekti');

?>

  <div class="container-fluid mb-5 mt-5" id="cntkerkim" style="padding-top: 10px;padding-bottom: 10px;">
        <div class="row mt-5 mb-5">
            <div class="col">
                <h1 class="text-center" style="color: #13353f;font-size: 30px;">Kerkim i avancuar</h1>
            </div>
        </div>
      <!--  <form class="mb-5">
            <div class="row justify-content-center">
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-2"> <label for="Filtro sipas tiplologjise" class="text-nowrap" style="color: #13353f;font-family: Lato; font-size: 16px">Filtro sipas tiplologjise</label>
<select class="form-select-sm form-select" aria-label=".form-select-sm example">
  <option value="" selected>Zgjidhni opsionin</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
                     </div>
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-2"> <label for="Filtro sipas tiplologjise" class="text-nowrap" style="color: #13353f;font-family: Lato; font-size: 16px">Filtro sipas shkalles</label>
<select class="form-select-sm form-select" aria-label=".form-select-sm example">
  
  <option value="shkalla1" selected>Shkalla 1</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
                     </div>
                <div class="col-md-4 mb-3 mb-lg-0 col-lg-2"> <label for="Filtro sipas tiplologjise" class="text-nowrap" style="color: #13353f;font-family: Lato; font-size: 16px">Filtro sipas katit</label>
<select class="form-select-sm form-select" aria-label=".form-select-sm example">
  <option value="" selected>Zgjidhni opsionin</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
                     </div>
                <div class="col-md-4 mb-3 mb-lg-0 col-lg-2"> <label for="Filtro sipas tiplologjise" class="text-nowrap" style="color: #13353f;font-family: Lato; font-size: 16px">Filtro sipas orientimit</label>
<select class="form-select-sm form-select" aria-label=".form-select-sm example">
  <option value="" selected>Zgjidhni opsionin</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
                     </div>
                <div class="d-lg-flex justify-content-center align-items-center align-content-center flex-nowrap my-auto justify-content-lg-center align-items-lg-center col-md-4 mb-3 mb-lg-0 col-lg-2"><button class="btn btn-primary text-nowrap btn-block w-100" type="submit" style="font-family: Lato;background: #13353f;color: var(--bs-btn-active-color);font-size: 14px;">FILTRO</button></div>
            </div>
        </form> -->
		
		<?php	echo do_shortcode('[contact-form-7 id="7a1ad02" title="projekti-form" html_class="mb-5"]');  ?>
    </div>
      
       
<?php get_footer(); ?>