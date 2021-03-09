/**
 * pepe-lite-time-script.js
 * author    Franchi Design
 * package   pepe-lite
 * version 1.0.0
*/

( function( $ ) {

    var myVar = setInterval(function() {
        pepe_myTimer();
      }, 100);
    
      function pepe_myTimer() {
        var d = new Date();
        document.getElementById("time").innerHTML = d.toLocaleTimeString();
}
    
} )( jQuery );