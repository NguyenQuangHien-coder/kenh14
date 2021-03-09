/**
 * pepe-lite-menu-responsive-script.js
 * author    Franchi Design
 * package   pepe-lite
 * version 1.0.0
*/

( function( $ ) {
        
    $(window).resize(function(){
      console.log('resize called');
      var width = $(window).width();
      if(width >= 100 && width <= 1200){
          $('.pe-container-menu-header').removeClass('container').addClass('container-fluid');
      }
     else{
       $('.pe-container-menu-header').removeClass('container-fluid').addClass('container');
    }
    })
    .resize();//trigger the resize event on page load.
    
} )( jQuery );