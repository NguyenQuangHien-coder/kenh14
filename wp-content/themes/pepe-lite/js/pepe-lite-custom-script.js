/**
 * pepe-lite-custom-script.js
 * author    Franchi Design
 * package   pepe-lite
 * version 1.0.0
*/


/* TABLE OF CONTENT

- Button pepe
- Form Search Responsive
- News banner 
- Back To Top 
- Open Menu Responsivo
- Open Form login in Menu Responsivo 
- Add Class Hover Color News
- Sticky Sidebar Block Zero
- Sticky Sidebar Post
    
*/  

( function( $ ) {


/* ------------------------------------------------------------------------- *
##  Button pepe */
/* ------------------------------------------------------------------------- */    

$(function() {  
  $('.pep-6')
    .on('mouseenter', function(e) {
			var parentOffset = $(this).offset(),
      		relX = e.pageX - parentOffset.left,
      		relY = e.pageY - parentOffset.top;
			$(this).find('span').css({top:relY, left:relX})
    })
    .on('mouseout', function(e) {
			var parentOffset = $(this).offset(),
      		relX = e.pageX - parentOffset.left,
      		relY = e.pageY - parentOffset.top;
    	$(this).find('span').css({top:relY, left:relX})
    });
});


/* ------------------------------------------------------------------------- *
##  Form Search Responsive */
/* ------------------------------------------------------------------------- */  

$(function () {
    $('a[href="#search_responseve"]').on('click', function(event) {
        event.preventDefault();
        $('#search_responseve,body').addClass('open pe-padding-body');
        $('#search_responseve > form > input[type="search"]').focus();
    });
    
    $('#search_responseve, #search_responseve button.close,body').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open pe-padding-body');
        }
    });
    
});

/* ------------------------------------------------------------------------- *
##  Effect show image Site */
/* ------------------------------------------------------------------------- */ 

function imgFadeIn(el) {

  var wh = $(window).height();

  $(el).each(function(){

    var thisPos = $(this).offset().top;

    var topOfWindow = $(window).scrollTop();

    if (topOfWindow + wh - 200 > thisPos ) {

      $(this).addClass('fadein');

    }
  });
}

$(window).on('scroll resize', function() {

  imgFadeIn('.fadeimg');
});

/* ------------------------------------------------------------------------- *
##  News Banner */
/* ------------------------------------------------------------------------- */ 

$(function (){
  $('.simple-marquee-container').SimpleMarquee({ autostart: true});});  

} )( jQuery );

/* ------------------------------------------------------------------------- *
##  Back To Top Right */
/* ------------------------------------------------------------------------- */ 

//Check to see if the window is top if not then display button
var pepe_lite_back_to_top_button_right = jQuery('.btn-back-to-top-right');

jQuery(window).scroll(function(){
	if (jQuery(this).scrollTop() > 100 && !pepe_lite_back_to_top_button_right.hasClass('scrolled')) {
		pepe_lite_back_to_top_button_right.addClass('scrolled');
		
	} else if (jQuery(this).scrollTop() < 100 && pepe_lite_back_to_top_button_right.hasClass('scrolled')) {
		pepe_lite_back_to_top_button_right.removeClass('scrolled');
		
	}
});

//click to scroll to top
pepe_lite_back_to_top_button_right.click(function(){
    jQuery('html, body').animate({scrollTop : 0},800);
    return false;
});

/* ------------------------------------------------------------------------- *
##  Back To Top Left */
/* ------------------------------------------------------------------------- */ 

//Check to see if the window is top if not then display button
var back_to_top_button = jQuery('.btn-back-to-top-left');

jQuery(window).scroll(function(){
	if (jQuery(this).scrollTop() > 100 && !back_to_top_button.hasClass('scrolled')) {
		back_to_top_button.addClass('scrolled');
		
	} else if (jQuery(this).scrollTop() < 100 && back_to_top_button.hasClass('scrolled')) {
		back_to_top_button.removeClass('scrolled');
		
	}
});

//click to scroll to top
back_to_top_button.click(function(){
    jQuery('html, body').animate({scrollTop : 0},800);
    return false;
});

/* ------------------------------------------------------------------------- *
##  Open Menu Responsivo */
/* ------------------------------------------------------------------------- */  

/* Open */
function openNav() {
  document.getElementById("pepeNavresponsive").style.width = "100%";
  document.body.classList.add('pe-padding-body');
}

/* Close */
function closeNav() {
  document.getElementById("pepeNavresponsive").style.width = "0%";
  document.body.classList.remove('pe-padding-body');
}

/* ------------------------------------------------------------------------- *
##  Open Form login in Menu Responsivo */
/* ------------------------------------------------------------------------- */  

/* Open */
function openLog() {
  document.getElementById("pe-form-login-responsive").style.height = "100%";
  document.getElementById("pe-form-login-responsive").classList.add('pepe-show-form-login');
}

/* Close */
function closeLog() {
  document.getElementById("pe-form-login-responsive").style.height = "0%";
  document.getElementById("pe-form-login-responsive").classList.remove('pepe-show-form-login');
}

/* ------------------------------------------------------------------------- *
##  Add Class Hover Color News */
/* ------------------------------------------------------------------------- */ 

jQuery(document).ready(function() {
	jQuery('ul.marquee-content-items').hover(function(){     
		  jQuery('.marquee-sibling').addClass('pepe-color-news-hover');    
	  },function(){    
		 jQuery('.marquee-sibling').removeClass('pepe-color-news-hover');     
	  });
});


/* ------------------------------------------------------------------------- *
##  Sticky Sidebar Block Zero */
/* ------------------------------------------------------------------------- */

jQuery(document).ready(function() {
  jQuery('.sticky-pepe-zero,.pepe-sid-zero').theiaStickySidebar({
    // Settings
    additionalMarginTop: 30
  });
});

/* Block One */
jQuery(document).ready(function() {
  jQuery('.pepe-sid-one,.sticky-pepe-one,.pepe-sid-two').theiaStickySidebar({
    // Settings
    additionalMarginTop: 30
  });
});


/* ------------------------------------------------------------------------- *
##  Sticky Sidebar Post */
/* ------------------------------------------------------------------------- */

// Post
jQuery(document).ready(function() {
  jQuery('.content-area-single-st,.pepe-sidebar-article').theiaStickySidebar({
    // Settings
    additionalMarginTop: 30
  });
});

