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

	$('#adm-panel-item').css('display', 'none')
})

/* Animated scroll */
$('[href^="#"]').on('click', function(e) {
	
	if(String($(this).attr('class')).indexOf('carousel-ctrl') != -1){
		return true;
	}
	
	e.preventDefault();
	
	var id = $(this).attr('href'),
	targetOffset = $(id).offset().top;

	$('html, body').animate({
		scrollTop: targetOffset
	}, 750);
});

/* Show/Hide to-top button */
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > (window.innerHeight/2)) {
			$('#btn-to-top').fadeIn();
        } else {
			$('#btn-to-top').fadeOut();
        }
    });

    $('#btn-to-top').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
});

/* Hide navbar to clicked */
$('.nav-item-menu').click(e => {
	$('.navbar-collapse').removeClass('show')
	$('.navbar-toggler').removeClass('collapsed').attr('aria-expanded', 'false')
})

const pass = `${$('span#lojaName').html()}.admin`

$('#product_search').keyup(e => {
	if($(e.target).val() == pass){
		$('#adm-panel-item').show()
	} else {
		$('#adm-panel-item').hide()
	}
})