/* This script file created in July 30th, 2020. */
// console.log('Seja bem-vindo')

$(document).ready(e => {

	if(window.innerWidth > 800 && window.innerWidth < 1000 ){
		$('#card_02').css('display', 'none')
	} else if(window.innerWidth <= 800){
		$('#card_02, #card_03').css('display', 'none')
	} else {
		$('#card_01, #card_02, #card_03').css('display', 'inline-flex')
	}

	window.onresize = function(e) {
		if(window.innerWidth > 800 && window.innerWidth < 1000 ){
			$('#card_02').css('display', 'inline-flex')
			$('#card_03').css('display', 'none')
		} else if(window.innerWidth <= 800){
			$('#card_02, #card_03').css('display', 'none')
		} else {
			$('#card_01, #card_02, #card_03').css('display', 'inline-flex')
		}
	}
})

/* Animated scroll */
$('[href^="#"]').on('click', function(e) {
	e.preventDefault();
	var id = $(this).attr('href'),
	targetOffset = $(id).offset().top;

	$('html, body').animate({
		scrollTop: targetOffset
	}, 750);
	$('#btn-to-top').addClass('visible').removeClass('invisible').click(e => {
		$('#btn-to-top').addClass('invisible').removeClass('visible')
	})
	$('li.nav-item-home, a.nav-item-menu').click(e => {
		$('#btn-to-top').addClass('invisible').removeClass('visible')
	})
});

/* Hide navbar to clicked */
$('.nav-item-menu').click(e => {
	$('.navbar-collapse').removeClass('show')
	$('.navbar-toggler').removeClass('collapsed').attr('aria-expanded', 'false')
})
