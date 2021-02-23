/* =========================================
              Navigation
============================================ */









/* =========================================
              Navigation
============================================ */



window.onscroll = function () {
    scrollFunction()
};


function scrollFunction() {
    if (document.body.scrollTop > 80 % )
        document.getElementById("navba").style.background = "red";
    document.getElementsByClassName("logoo").style.height = "60px";
} else {

    document.getElementsByClassName("navba").style.padding = "80px 10px";

    document.getElementsByClassName("logoo").style.height = "100px";

}
}

/*


window.onscroll=function()
{scrollFunction()};


function scrollFunction(){
    if(document.body.scrollTop>80 ||  document.documentElement.scrollTop>80){
        document.getElementsByClassName('navbar').style.background="white";
    }
}

/*
function sticky_header() {
    var header_height = jQuery('.navbar').innerHeight() / 2;
    var scrollTop = jQuery(window).scrollTop();;
    if (scrollTop > header_height) {
        jQuery('body').addClass('sticky-nav')
        $(".navbar img").attr("src", "images/pre-login/images/logo.png");
    } else {
        jQuery('body').removeClass('sticky-nav')
        $(".navbar img").attr("src", "images/logo/top-logo.png");
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


/*

function sticky_header() {
    var header_height = jQuery('.navbar').innerHeight() / 2;
    var scrollTop = jQuery(window).scrollTop();;
    if (scrollTop > header_height) {
        
         document.getElementsById("nav-bar").style.background="red";
        jQuery('body').addClass('sticky-nav')
        $(".navbar img").attr("src", "images/logo/top-logo1.png");
     
    } else {
        jQuery('body').removeClass('sticky-nav')
        $(".navbar img").attr("src", "images/logo/top-logo.png");
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

/*const eye=document.getElementById('#ey');
const pwd=document.getElementById('#inp');

eye.addEventListener('click',function (e){
    const type=pwd.getAttribute('type') ==='pwd'?'text':'pwd';
    pwd.setAttribute('type',type);
    this.classList.toggle('color:red');
});*/
function myfun() {
    var x =
        document.getElementById("inp");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

/* Drop Down*/

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}