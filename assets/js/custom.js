$(function () {

    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 10) {
            $('.navbar').addClass('active');
            $('.navbar-brand').removeClass('logo-none');
        } else {
            $('.navbar').removeClass('active');
            $('.navbar-brand').addClass('logo-none');
        }
    });
});

function ativaNoScroll() {
    document.getElementById('services').querySelectorAll('img').forEach((img, index) => {
        if (img.getBoundingClientRect().top < window.innerHeight) {
            img.src = img.getAttribute('data-src');
        };
    })
}

window.addEventListener('scroll', ativaNoScroll);

// POPUP

$(document).ready(function() {
    $('.gallery').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        gallery:{enabled:true}
    });  
});