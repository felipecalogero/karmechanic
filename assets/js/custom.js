$(function () {

        $(window).on('scroll', function() {
            if($(window).scrollTop() > 10 ) {
                $('.navbar').addClass('active');
                $('.navbar-brand').removeClass('logo-none');
            } else {
                $('.navbar').removeClass('active');
                $('.navbar-brand').addClass('logo-none');
            }
        });

});