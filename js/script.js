// Contact Form Confirmation
const queryString = window.location.search;
const mailSent = "?mail-sent";

// console.log(queryString);

if (queryString === mailSent) {
   alert("Meldingen din ble sendt. Vi tar kontakt så raskt som mulig!"); 
}

/* Mobile menu*/
$(document).ready(function(){
	$('.nav__icon').click(function(){
		$(this).toggleClass('open');

		if($(this).hasClass('open')) {
			$('.nav__menu').addClass('open-menu');
			$('body').addClass('fixed');
		} else {
			$('.nav__menu').removeClass('open-menu');
			$('body').removeClass('fixed');
		}
	});
});
