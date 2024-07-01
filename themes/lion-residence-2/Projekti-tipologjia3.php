<!DOCTYPE html>
<div class="container-fluid" style=" background: #F1F1F1;">
<?php
//Template Name: Projekti tipologjia 3

get_header('aboutus');
global $wp;
global $paged;

function slugterms2($var)
{
    $data = array();
    $terms = get_terms([
        'taxonomy' => $var,
        'hide_empty' => false,
    ]);
    if ( empty( $terms ) || is_wp_error( $terms ) ) {
        return;
    }
     
     
     foreach ($terms as $term) { 
        $data += [$term->slug => $term->name];
        /* $data[] = array(
            'key' => $term->slug,
            'name' =>  $term->name
        ); */
      
      }
      return $data;
      

}



function bootstrap_pagination( $wp_query = false, $echo = true, $args = array() ) {
    //Fallback to $wp_query global variable if no query passed
    if ( false === $wp_query ) {
        global $wp_query;
    }
     
    //Set Defaults
    $defaults = array(
        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
        'format'       => '?paged=%#%',
        'current'      => max( 1, get_query_var( 'paged' ) ),
        'total'        => $wp_query->max_num_pages,
        'type'         => 'array',
        'show_all'     => false,
        'end_size'     => 2,
        'mid_size'     => 1,
        'prev_text'    => __( '« Prev' ),
        'next_text'    => __( 'Next »' ),
        'add_fragment' => '',
    );
     
    //Merge the defaults with passed arguments
    $merged = wp_parse_args( $args, $defaults );
     
    //Get the paginated links
    $lists = paginate_links($merged);
 
    if ( is_array( $lists ) ) {
         
        $html = '<nav><ul class="pagination justify-content-center">';
 
        foreach ( $lists as $list ) {
            $html .= '<li class="page-item'. (strpos($list, 'current') !== false ? ' active' : '') . '"> ' . str_replace('page-numbers', 'page-link text-dark', $list) . '</li>';
        }
 
        $html .= '</ul></nav>';
 
        if ( $echo ) {
            echo $html;
        } else {
            return $html;
        }
    }
     
    return false;
}


    if(  isset($_GET['tipo']) and !empty($_GET['tipo']))
    {
        $tipo=sanitize_text_field($_GET['tipo']) ;
        $comp_tipo='AND';

    }
    else
    {
    
	 //$tipo=['1-1', '2-1','3-1'];
     $tipo=array_keys(slugterms2($var='tipologjia'));
     //print_r($tipo);
     //print_r(array_keys(slugterms2($var='tipologjia')));
      $comp_tipo='IN';

    }
    if(  isset($_GET['shkalla']) and !empty($_GET['shkalla']))
    {
        $shkalla=sanitize_text_field($_GET['shkalla']);
        $comp_shkalla='AND';
    }
    else
    {
    //$shkalla= join(', ', array('Shkalla&nbsp;1', 'Shkalla&nbsp;2','Shkalla&nbsp;3'));
   // $shkalla= ['Shkalla1, Shkalla2, Shkalla3'];
	$comp_shkalla='IN';
	//$shkalla= join(', ', array('Shkalla1', 'Shkalla2','Shkalla3'));
	//$shkalla=['shkalla-1','shkalla-2','shkalla-3'];
    $shkalla=array_keys(slugterms2($var='shkalla'));
    

    }
    

    if(  isset($_GET['kati']) and !empty($_GET['kati']))
    {
        $kati=sanitize_text_field($_GET['kati']);
        $comp_kati='AND';
    }
    else
    {
    //$kati= join(', ', array('Kati 1', 'Kati 2','Kati 3'));
	//$kati= join(', ',array('kati-1', 'kati-2','kati-3'));
    //$kati=['kati-1', 'kati-2','kati-3'];
    $kati=array_keys(slugterms2($var='kati'));
	
	$comp_kati='IN';

    }
    if(  isset($_GET['orientimi']) and !empty($_GET['orientimi']))
    {
        $orientimi=sanitize_text_field($_GET['orientimi']);
        $comp_orientimi='AND';
    }
    else
    {
   // $orientimi= join(', ', array('jug-lindje', 'veri-perendim','jug_perendim'));
	$comp_orientimi='IN';
    //$orientimi=['jug-lindje', 'veri-perendim','jug-perendim'];
    $orientimi=array_keys(slugterms2($var='orientimi'));

    }

    $parameters = "";
    //$parameters .= "?tipo=".$_GET["tipo"]."&shkalla=".$_GET["shkalla"]."&kati=".$_GET["kati"]."&orientimi=".$_GET["orientimi"];
    echo $parameters;

    //$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    if ( get_query_var( 'paged' ) ) {
        $paged = get_query_var( 'paged' );
    } elseif ( get_query_var( 'page' ) ) {
        $paged = get_query_var( 'page' );
    } else {
        $paged = 1;
    }
    echo $paged;
	$args = array(
    'post_type' => 'apartamente',
    'post_status' => 'publish',
   'posts_per_page' => 2,
    'paged' => $paged,
	'tax_query' => array(
        'relation' => 'AND',
        array(
            'taxonomy'=> 'tipologjia',
            'operator' =>$comp_tipo,
            'terms'=> $tipo,
            'field' => 'slug',
            
        ),

       
        array(
            'taxonomy'=> 'kati',
            'operator' =>$comp_kati,
            'terms'=> $kati, 
           'field' => 'slug',
            
        ),
        array(
            'taxonomy'=> 'orientimi',
            'operator' =>$comp_orientimi,
            'terms' =>$orientimi , 
            'field' => 'slug',
            
        ),
        array(
            'taxonomy'=> 'shkalla',
            'operator' =>$comp_shkalla,
            'terms' =>$shkalla , 
            'field' => 'slug',
            
        ), 

        
        
                        ),
);
 //print_r ($args);


  
?>
   <div class="container-fluid mb-5 mt-5" id="cnttipologjia" style="padding-top: 10px;padding-bottom: 10px;">
		<?php if 
        
        (($comp_tipo=='AND'))
		{
			?>
            <div class="row mt-5 mb-5">
                <div class="col">
                    <h1 class="text-center" style="color: #13353f;font-size: 30px;">Tipologjia <?php echo str_replace('-','+',$tipo)?> </h1>
                </div>
            </div>
		<?php	}?>
				    <form method="GET" class="mb-5" action="<?php echo home_url();?>/test3">
                        <?php //echo home_url( $wp->request ) ?>
                <div class="row justify-content-center">
                    <div class="col-md-6 mb-3 mb-lg-0 col-lg-2"> <label for="Filtro sipas tiplologjise" class="text-nowrap" style="color: #13353f;font-family: Lato; font-size: 16px">Filtro sipas tiplologjise</label>
<select name="tipo" class="form-select-sm form-select" aria-label=".form-select-sm example">
   <?php 
   /* $terms = get_terms([
    'taxonomy' => 'tipologjia',
    'hide_empty' => false,
]); */
   $terms= slugterms2($var='tipologjia');
  // print_r($terms);
if ( empty( $terms ) || is_wp_error( $terms ) ) {
	return;
}
 
 echo ($comp_tipo=='IN') ? ' <option value="" selected="selected">Zgjidhni opsionin</option>' : '';
 foreach ($terms as $key=>$value) 
 
 { ?>
  

  <option value="<?php echo $key;?>" <?php echo ($key ==  $tipo) ? ' selected="selected"' : '';?>><?php echo $value;?></option>
<?php } ?> 
</select>


                     </div>
                    <div class="col-md-6 mb-3 mb-lg-0 col-lg-2"> <label for="Filtro sipas shkalles" class="text-nowrap" style="color: #13353f;font-family: Lato; font-size: 16px">Filtro sipas shkalles</label>
<select name="shkalla" class="form-select-sm form-select" aria-label=".form-select-sm example">
<?php 
 /*   $terms = get_terms([
    'taxonomy' => 'shkalla',
  
]); */
$terms=slugterms2($var='shkalla');
if ( empty( $terms ) || is_wp_error( $terms ) ) {
	return;
}
 
 echo ($comp_shkalla=='IN') ? ' <option value="" selected="selected">Zgjidhni opsionin</option>' : '';
 //foreach ($terms as $term)
 foreach ($terms as $key=>$value) 
  { ?>
  
<!--   <option value="<?php echo $term->slug;?>" <?php echo ($term->slug ==  $shkalla) ? ' selected="selected"' : '';?>><?php echo $term->name;?></option> -->
  <option value="<?php echo $key;?>" <?php echo ($key ==  $shkalla) ? ' selected="selected"' : '';?>><?php echo $value;?></option>
<?php } ?> 
  

</select>
                     </div>
                    <div class="col-md-4 mb-3 mb-lg-0 col-lg-2"> <label for="Filtro sipas tiplologjise" class="text-nowrap" style="color: #13353f;font-family: Lato; font-size: 16px">Filtro sipas katit</label>
<select name="kati" class="form-select-sm form-select" aria-label=".form-select-sm example">
 <?php 
/*    $terms = get_terms([
    'taxonomy' => 'kati',
  
]); */
$terms=slugterms2($var='kati');
if ( empty( $terms ) || is_wp_error( $terms ) ) {
	return;
}
 
 echo ($comp_kati=='IN') ? ' <option value="" selected="selected">Zgjidhni opsionin</option>' : '';
 //foreach ($terms as $term)
 foreach ($terms as $key=>$value) 
  { ?>
  
  <option value="<?php echo $key;?>" <?php echo ($key ==  $kati) ? ' selected="selected"' : '';?>><?php echo $value;?></option>
<?php } ?> 
  

</select>
                     </div>
                    <div class="col-md-4 mb-3 mb-lg-0 col-lg-2"> <label for="Filtro sipas tiplologjise" class="text-nowrap" style="color: #13353f;font-family: Lato; font-size: 16px">Filtro sipas orientimit</label>
<select name="orientimi" class="form-select-sm form-select" aria-label=".form-select-sm example">
<?php 
/*    $terms = get_terms([
    'taxonomy' => 'orientimi',
  
]); */
$terms=slugterms2($var='orientimi');
if ( empty( $terms ) || is_wp_error( $terms ) ) {
	return;
}
 
 echo ($comp_orientimi=='IN') ? ' <option value="" selected="selected">Zgjidhni opsionin</option>' : '';
 //foreach ($terms as $term) 
 foreach ($terms as $key=>$value) 
 { ?>
  
  <option value="<?php echo $key;?>" <?php echo ($key ==  $orientimi) ? ' selected="selected"' : '';?>><?php echo $value;?></option>
<?php } ?> 
  
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
                            $arr_posts->the_post(); 
                           $imgurl= get_the_post_thumbnail_url( get_the_ID(), 'full' );
                            ?>
		
                    
					 <div class="col vijeposhte">
                        <div style="border-style: groove;border-color: var(--bs-gray-300);"><img class="img-thumbnail img-fluid d-block w-100 fit-cover" src="<?php if ($imgurl) { echo $imgurl;?>"><?php } else {echo get_template_directory_uri(); ?>/assets/img/Artboard2012.png"><?php }?>
                            <div class="py-4" style="padding-left: 40px;">
                                <h6><?php the_title(); ?></h6><a id="katilink-4" class="planimetrialink" href="<?php the_permalink(); ?>" style="color: #13353f;font-family: 'Lato';font-size: 16px;">Shiko planimetrine&nbsp;&nbsp;</a><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none">
                                    <path d="M23.0677 11.9929L18.818 7.75739L17.4061 9.17398L19.2415 11.0032L0.932469 11.0012L0.932251 13.0012L19.2369 13.0032L17.4155 14.8308L18.8321 16.2426L23.0677 11.9929Z" fill="currentColor"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
					
			<?php }  } else {
	esc_html_e( 'Nuk ka apartamente' );
}   wp_reset_postdata();   ?>
                  
                </div>
            </div>
        </section>
        <?php
      //  if ( $arr_posts->have_posts() )
        //{
            echo bootstrap_pagination($arr_posts);
           
       // }
        ?>
   
  
    </div>
      
       
<?php get_footer(); ?>