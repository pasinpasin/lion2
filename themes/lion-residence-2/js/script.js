$ = jQuery;
 
var mafs = $("#my-ajax-filter-search"); 
var mafsForm = mafs.find("form"); 
 
mafsForm.submit(function(e){
    e.preventDefault(); 
 
    console.log("form submitted");
 
// we will add codes above this line later
});