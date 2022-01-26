( function( $ ) {

"use strict";

// *** On ready *** //
$( document ).on( "ready" , function() {
	superfishMenu();
	bannerSlider();
	bannerSliderBG();
	optimizeBanSliderBG();
	featuredPorductsSlider();
	ourProductsTabs();
	brandsSlider();
	deadlineTimer();
	itemClickCounter();
	offersSliderSync();
});

// *** On load *** //
$( window ).on( "load" , function() {
	WOWAnimation();
	bannerSliderBG();
});

// *** On resize *** //
$( window ).on( "resize" , function() {
	optimizeBanSliderBG();
});

// *** On scroll *** //
$( window ).on( "scroll" , function() {

});

// *** Menu Mobile *** //
$(document).ready(function () {

	var numero = 1;
  
	$('#btnMobile').on('click', function (e) {
  
	  e.preventDefault();
	  if (numero == 1) {
		$('.navigation-mobile .nav-mobile').animate({right:0}, 300, function () {
		  numero = 0;
		});
	  } else {
		$('.navigation-mobile .nav-mobile').animate({right:'-100%'}, 300, function () {
		  numero = 1;
		})
	  }
  
	})
  
	$('.navigation-mobile .nav-mobile li a').on('click', function () {
  
	  $('.navigation-mobile .nav-mobile').animate({right:'-100%'}, 300, function () {
		numero = 1;
	  })
  
	})
  
  });

  // *** View more *** //
$(document).ready(function () {

	var numero = 1;
  
	$('#btnMobile').on('click', function (e) {
  
	  e.preventDefault();
	  if (numero == 1) {
		$('.navigation-mobile .nav-mobile').animate({right:0}, 300, function () {
		  numero = 0;
		});
	  } else {
		$('.navigation-mobile .nav-mobile').animate({right:'-100%'}, 300, function () {
		  numero = 1;
		})
	  }
  
	})
  
	$('.navigation-mobile .nav-mobile li a').on('click', function () {
  
	  $('.navigation-mobile .nav-mobile').animate({right:'-100%'}, 300, function () {
		numero = 1;
	  })
  
	})
  
  });



// *** jQuery noConflict *** //
var $ = jQuery.noConflict();



// *** Code Starts Here... *** //
$(function () {
	$('#myButton').floatingWhatsApp({
		phone: '5491133359850',
		popupMessage: 'Hola,¿Como te podemos ayudar?',
		message: " ",
		showPopup: true,
		showOnIE: false,
		headerTitle: 'Bienvenido!',
		headerColor: '#25D366',
		backgroundColor: '#25D366',
		buttonImage: '<img src="<?php echo IMAGESPATH; ?>/general-elements/whatsapp.svg" />'
	});
});

/* Counter */

$(window).on('scroll', function() {
	$('.ot-counter').each(function() {
		var pos_y   = $(this).offset().top - window.innerHeight;
		var $this   = $(this).find('span.num'),
			countTo = $this.attr('data-to'),
			during  = parseInt( $this.attr('data-time') ),
			topOfWindow = $(window).scrollTop();

		if ( pos_y < topOfWindow ) {    
			$({
				countNum: $this.text()
			}).animate({
				countNum: countTo
			},
			{
				duration: during,
				easing: 'swing',
				step: function() {
					$this.text(Math.floor(this.countNum));
				},
				complete: function() {
					$this.text(this.countNum);
				}
			});
		}
	});
});



} )( jQuery );



