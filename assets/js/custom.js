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

$('.navbar-nav a[href^="#"]').on('click', function(e) {
	e.preventDefault();
	var id = $(this).attr('href'),
			targetOffset = $(id).offset().top;
			
	$('html, body').animate({ 
		scrollTop: targetOffset - 100
	}, 500);
});