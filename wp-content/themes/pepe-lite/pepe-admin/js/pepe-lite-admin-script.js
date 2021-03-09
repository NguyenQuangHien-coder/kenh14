/**
 * pepe-lite-admin-script.js
 *
 * author    Denis Franchi
 * package   pepe-lite
 */


// Guide

function pepeopenGuide(evt, guideName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(guideName).style.display = "block";
    evt.currentTarget.className += " active";
}


    
//faq toggle stuff 
jQuery(function($){ 
    $('.togglefaq').click(function(e) {
    e.preventDefault();
    var notthis = $('.active').not(this);
    notthis.find('.dashicons-minus').addClass('dashicons-plus').removeClass('dashicons-minus');
    notthis.toggleClass('active').next('.faqanswer').slideToggle(300);
        $(this).toggleClass('active').next().slideToggle("fast");
    $(this).children('span').toggleClass('dashicons-plus dashicons-minus');
});
});
    
