$(document).ready(function () { 
    var top = $('#placeholder').offset().top - parseFloat($('#placeholder').css('marginTop').replace(/auto/, 63));
    var top = $('#header').offset().top - parseFloat($('#header').css('marginTop').replace(/auto/, 63));
  
  $(window).scroll(function (event) {
    // what the y position of the scroll is
    var y = $(this).scrollTop();

    // whether that's below the form
    if (y >= top) {
        // if so, ad the fixed class
        $('#header').addClass('fixed');
        $('#placeholder').addClass('fixed');
    } else {
        // otherwise remove it
        $('#header').removeClass('fixed');
        $('#placeholder').removeClass('fixed');
    }
  });
});