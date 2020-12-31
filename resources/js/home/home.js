require('../app');

// When the user scrolls down 50px from the top of the home page, resize the image logo height
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        $('#navbar').find('.navbar-brand').addClass('navbar-brand-scroll');
    } else {
        $('#navbar').find('.navbar-brand').removeClass('navbar-brand-scroll');
    }
}
