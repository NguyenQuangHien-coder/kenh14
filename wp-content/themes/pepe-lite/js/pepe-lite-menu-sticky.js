/**
 * pepe-lite-menu-sticky.js
 * author    Franchi Design
 * package   pepe-lite
 * version 1.0.0
*/

( function( $ ) {

    var fixmeTop = $('.pe-sticky-menu-header').offset().top;      

    $(window).scroll(function() {                 
    
        var currentScroll = $(window).scrollTop(); 
    
        if (currentScroll >= fixmeTop) {  
            $('.pe-sticky-menu-header').css({                      
                position: 'fixed',
                top: '0',
                left: '0',
                right:'0',
                'z-index':'9999999',
                'box-shadow':'0px 6px 8px 0px rgba(0,0,0,.08)'});        
           
        } else {                                  
            $('.pe-sticky-menu-header').css({                    
                position: 'static',
                'box-shadow':'none',
                top: '0',
                left: '0',
                right:'0',
            });
        }
    
    });
    
    var previousScroll =0;
    // scroll functions
    $(window).scroll(function(e) {
    
        // add/remove class to navbar when scrolling to hide/show
        var scroll = $(window).scrollTop();
        if (scroll >= previousScroll) {
            $('.pe-sticky-menu-header').addClass("navbar-hide");
          
        
        }else if (scroll < previousScroll) {
            $('.pe-sticky-menu-header').removeClass("navbar-hide");
        }
        previousScroll = scroll;
    
    });

} )( jQuery );