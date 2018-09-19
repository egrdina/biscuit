jQuery(document).ready(function() {
    jQuery('.toggle-nav').click(function(e) {
        jQuery('.nav-links li').slideToggle(500);
 
        e.preventDefault();
    });
    
});