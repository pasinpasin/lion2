<!DOCTYPE html>
<div class="container-fluid" style=" background: #F1F1F1;">
<?php
//Template Name: Projekti tipologjia 2
get_header('aboutus');
global $wp;

	/* if(  isset($_GET['tipo']) and isset($_GET['shkalla'])  and isset($_GET['kati']) and isset($_GET['orientimi'])  )

	{
        
		
		

		$tipo=!empty($tipo) ? str_replace('-','+',sanitize_text_field($_GET['tipo'])) : join(', ', array('1+1', '2+1','3+1'));
		$comp='=';
        $shkalla=sanitize_text_field($_GET['shkalla']);
			$orientimi=sanitize_text_field($_GET['orientimi']);
			$kati=sanitize_text_field($_GET['kati']);
			$parameters = "";
            $parameters .= "?tipo=".$_GET["tipo"]."&shkalla=".$_GET["shkalla"]."&kati=".$_GET["kati"]."&orientimi=".$_GET["orientimi"];
			echo $parameters;
		
		
		
	}
	else
	{
	$tipo= join(', ', array('1+1', '2+1','3+1'));
	$comp='IN';
	} */
    if(  isset($_GET['tipo']) and !empty($_GET['tipo']))
    {
        $tipo=str_replace('-','+',sanitize_text_field($_GET['tipo'])) ;
        $comp_tipo='=';
    }
    else
    {
    $tipo= join(', ', array('1+1', '2+1','3+1'));
	$comp_tipo='IN';

    }
    if(  isset($_GET['shkalla']) and !empty($_GET['shkalla']))
    {
        $shkalla=sanitize_text_field($_GET['shkalla']);
        $comp_shkalla='=';
    }
    else
    {
    //$shkalla= join(', ', array('Shkalla&nbsp;1', 'Shkalla&nbsp;2','Shkalla&nbsp;3'));
    //$shkalla= ['Shkalla 1, Shkalla 2, Shkalla 3'];
	$comp_shkalla='IN';
	$shkalla= join(', ', array('Shkalla1', 'Shkalla2','Shkalla3'));

    }
    

    if(  isset($_GET['kati']) and !empty($_GET['kati']))
    {
        $kati=sanitize_text_field($_GET['kati']);
        $comp_kati='=';
    }
    else
    {
    $kati= join(', ', array('1', '2','3'));
	$comp_kati='IN';

    }
    if(  isset($_GET['orientimi']) and !empty($_GET['orientimi']))
    {
        $orientimi=sanitize_text_field($_GET['orientimi']);
        $comp_orientimi='=';
    }
    else
    {
    $orientimi= join(', ', array('jug-lindje', 'veri-perendim','jug_perendim'));
	$comp_orientimi='IN';

    }

    $parameters = "";
    $parameters .= "?tipo=".$_GET["tipo"]."&shkalla=".$_GET["shkalla"]."&kati=".$_GET["kati"]."&orientimi=".$_GET["orientimi"];
    echo $parameters;


	$args = array(
    'post_type' => 'apartamente',
    'post_status' => 'publish',
    'posts_per_page' => 10,
    'suppress_filters' => true,
	'meta_query' => array(
        'relation' => 'AND',
        array(
            'key'=> 'tipologjia',
            'compare' =>$comp_tipo,
            'value' =>$tipo , 
            'type' => 'CHAR',
            
        ),

       
        array(
            'key'=> 'kati',
            'compare' =>$comp_kati,
            'value' =>$kati , 
            'type' => 'CHAR',
            
        ),
        array(
            'key'=> 'orientimi',
            'compare' =>$comp_orientimi,
            'value' =>$orientimi , 
            'type' => 'CHAR',
            
        ),
        array(
            'key'=> 'shkalla',
            'compare' =>$comp_shkalla,
            'value' =>$shkalla , 
            'type' => 'CHAR',
            
        ),

        
        
                        ),
);
 // print_r ($args);


  
?>
   <div class="container-fluid mb-5 mt-5" id="cnttipologjia" style="padding-top: 10px;padding-bottom: 10px;">
		<?php if (strlen($tipo) <= 3)
		{
			?>
            <div class="row mt-5 mb-5">
                <div class="col">
                    <h1 class="text-center" style="color: #13353f;font-size: 30px;">Tipologjia <?php echo $tipo?> </h1>
                </div>
            </div>
		<?php	}?>
				    <form method="GET" class="mb-5" action="<?php echo home_url( $wp->request ) ?>">
                <div class="row justify-content-center">
                    <div class="col-md-6 mb-3 mb-lg-0 col-lg-2"> <label for="Filtro sipas tiplologjise" class="text-nowrap" style="color: #13353f;font-family: Lato; font-size: 16px">Filtro sipas tiplologjise</label>
<select name="tipo" class="form-select-sm form-select" aria-label=".form-select-sm example">
 <?php 
 $plan = array('1+1' => '1+1','2+1'=>'2+1','3+1'=>'3+1' );
 
 echo (strlen($tipo) > 3) ? ' <option value="" selected="selected">Zgjidhni opsionin</option>' : '';
 foreach ($plan as $key => $value) { ?>
  
  <option value="<?php echo $key;?>" <?php echo ($key ==  $tipo) ? ' selected="selected"' : '';?>><?php echo $value;?></option>
<?php } ?>
</select>

                     </div>
                    <div class="col-md-6 mb-3 mb-lg-0 col-lg-2"> <label for="Filtro sipas shkalles" class="text-nowrap" style="color: #13353f;font-family: Lato; font-size: 16px">Filtro sipas shkalles</label>
<select name="shkalla" class="form-select-sm form-select" aria-label=".form-select-sm example">
<?php 
 $plan = array('Shkalla1' => 'Shkalla 1','Shkalla2'=>'Shkalla 2','Shkalla3'=>'Shkalla 3' );
 
 echo ($comp_shkalla=='IN') ? ' <option value="" selected="selected">Zgjidhni opsionin</option>' : '';
 foreach ($plan as $key => $value) { ?>
  
  <option value="<?php echo $key;?>" <?php echo ($key ==  $shkalla) ? ' selected="selected"' : '';?>><?php echo $value;?></option>
<?php } ?>
   <!-- <option value="" selected>Zgjidhni opsionin</option>
  <option value="Shkalla 1">Shkalla 1</option>
  <option value="Shkalla 2">Shkalla 2</option>
  <option value="Shkalla 3">Shkalla 3</option> -->


</select>
                     </div>
                    <div class="col-md-4 mb-3 mb-lg-0 col-lg-2"> <label for="Filtro sipas tiplologjise" class="text-nowrap" style="color: #13353f;font-family: Lato; font-size: 16px">Filtro sipas katit</label>
<select name="kati" class="form-select-sm form-select" aria-label=".form-select-sm example">

<?php 
 $plan = array('1' => 'Kati 1','2'=>'Kati 2','3'=>'Kati 3' );
 
 echo ($comp_kati=='IN') ? ' <option value="" selected="selected">Zgjidhni opsionin</option>' : '';
 foreach ($plan as $key => $value) { ?>
  
  <option value="<?php echo $key;?>" <?php echo ($key ==  $kati) ? ' selected="selected"' : '';?>><?php echo $value;?></option>
<?php } ?>
  <!-- <option value="" selected>Zgjidhni opsionin</option>
  <option value="1">Kati 1</option>
  <option value="2">Kati 2</option>
  <option value="3">Kati 3</option> -->
</select>
                     </div>
                    <div class="col-md-4 mb-3 mb-lg-0 col-lg-2"> <label for="Filtro sipas tiplologjise" class="text-nowrap" style="color: #13353f;font-family: Lato; font-size: 16px">Filtro sipas orientimit</label>
<select name="orientimi" class="form-select-sm form-select" aria-label=".form-select-sm example">
<?php 
 $plan = array('jug-lindje' => 'jug-lindje','veri-perendim'=>'veri-perendim','jug-perendim'=>'jug-perendim' );
 
 echo ($comp_orientimi=='IN') ? ' <option value="" selected="selected">Zgjidhni opsionin</option>' : '';
 foreach ($plan as $key => $value) { ?>
  
  <option value="<?php echo $key;?>" <?php echo ($key ==  $orientimi) ? ' selected="selected"' : '';?>><?php echo $value;?></option>
<?php } ?>

 <!--  <option value="" selected>Zgjidhni opsionin</option>
  <option value="jug-lindje">jug-lindje</option>
  <option value="veri-perendim">veri-perendim</option>
  <option value="jug-perendim">jug-perendim</option> -->
</select>
                     </div>
                    <div class="d-lg-flex justify-content-center align-items-center align-content-center flex-nowrap my-auto justify-content-lg-center align-items-lg-center col-md-4 mb-3 mb-lg-0 col-lg-2"><button class="btn btn-primary text-nowrap btn-block w-100" type="submit" style="font-family: Lato;background: #13353f;color: var(--bs-btn-active-color);font-size: 14px;">FILTRO</button></div>
                </div>
            </form> 
     
        </div>
		
        <section id="planimetri">
            <div class="container py-4 py-xl-5" id="ctn1">
                <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-4 row-cols-sm-2 row-cols-lg-4" id="rowp">
                   
					<?php
		$arr_posts = new WP_Query( $args );
        //print_r ($arr_posts);
		     if ( $arr_posts->have_posts() ) {
               
		 while ( $arr_posts->have_posts() ) {
                            $arr_posts->the_post();  ?>
		
			
					 <div class="col vijeposhte">
                        <div style="border-style: groove;border-color: var(--bs-gray-300);"><img class="img-thumbnail img-fluid d-block w-100 fit-cover" src="<?php echo get_template_directory_uri(); ?>/assets/img/Artboard2012.png">
                            <div class="py-4" style="padding-left: 40px;">
                                <h6><?php the_title(); ?></h6><a id="katilink-4" class="planimetrialink" href="<?php the_permalink(); ?>" style="color: #13353f;font-family: 'Lato';font-size: 16px;">Shiko planimetrine&nbsp;&nbsp;</a><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none">
                                    <path d="M23.0677 11.9929L18.818 7.75739L17.4061 9.17398L19.2415 11.0032L0.932469 11.0012L0.932251 13.0012L19.2369 13.0032L17.4155 14.8308L18.8321 16.2426L23.0677 11.9929Z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
					
			<?php } }  ?>
                  
                </div>
            </div>
        </section>
   
  
    </div>
      
       
<?php get_footer(); ?>