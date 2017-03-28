/**
 * Created by Noureddine on 28/03/2017.
 */

$(document).ready(function(){
    'use strict';
    // hide #back-top first
    $("#back-top").hide();

    // fade in #back-top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#back-top').fadeIn('slow');//afficher div slowler
            } else {
                $('#back-top').fadeOut('fast');
            }
        });

        // scroll body to 0px on click
        $('#back-top a').click(function () {
            $('body,html').animate({
                scrollTop: 0 //position par % au debut de page.
                //I  can use
            }, 800);
            return false;
        });
    });

});