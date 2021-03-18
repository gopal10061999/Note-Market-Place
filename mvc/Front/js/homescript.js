
/* =========================================
              Navigation
============================================ */

function sticky_header() {
    var header_height = jQuery('.navbar').innerHeight() / 2;
    var scrollTop = jQuery(window).scrollTop();;
    if (scrollTop > header_height) {
        jQuery('body').addClass('sticky-nav')
        $(".navbar img").attr("src", "images/top-logo1.png");
        $("nav li a").css("color", "black");
       $("nav li a").css("color", "black");
        $("#navbarNav").css("background", "white");
        
         $("#navbarNav").css("text-align", "center");
                 $("#navbarNav").css("margin-top", "30px");
        
       
        $("#navbarNav").css("padding", "0 0 10px 0");
        
         
        
        
    } else {
        jQuery('body').removeClass('sticky-nav')
        $(".navbar img").attr("src", "images/top-logo.png");
         $("nav li a").css("color", "white");
                $("#navbarNav").css("background", "transparent");
         $("#navbarNav").css("margin-top", "30px");

        
        
    }
}

jQuery(document).ready(function () {
  sticky_header();
});

jQuery(window).scroll(function () {
  sticky_header();  
});
jQuery(window).resize(function () {
  sticky_header();
});