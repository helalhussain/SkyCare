(function ($) {
	"use strict";




	// Modal ( SHOW MODAL )
	const showModal = (openButton, modalContent) =>{
		const openBtn = document.getElementById(openButton),
		modalContainer = document.getElementById(modalContent)
		
		if(openBtn && modalContainer){
			openBtn.addEventListener('click', ()=>{
				modalContainer.classList.add('show-modal')
			})
		}
	}
	showModal('open-modal','modal-container')

	// ( CLOSE MODAL ) 
	const closeBtn = document.querySelectorAll('.close-modal')

	function closeModal(){
		const modalContainer = document.getElementById('modal-container')
		modalContainer.classList.remove('show-modal')
	}
	closeBtn.forEach(c => c.addEventListener('click', closeModal))


	
	// Scroll to to
	$(window).on('scroll', function () {
		//.Scroll to a Specific Div
		if ($('#back-to-top').length) {
			var scrollToTop = $('#back-to-top'),
				scroll = $(window).scrollTop();
			if (scroll >= 200) {
				scrollToTop.fadeIn(200);
			} else {
				scrollToTop.fadeOut(100);
			}
		}
	});
	if ($('#back-to-top').length) {
		$('#back-to-top').on('click', function () {
			$('body,html').animate({
				scrollTop: 0
			}, 600);
			return false;
		});
	}


	// Hero Slider ( Slick Slider )
	$('.hero-slider').slick({
		slidesToShow: 1,
		autoplay: true,
		autoplaySpeed: 5000,
		infinite: true,
		speed: 300,
		dots: true,
		arrows: true,
		fade: true,
		responsive: [{
			breakpoint: 600,
			settings: {
				arrows: false
			}
		}]
	});
	$('.hero-slider').slickAnimation();


	// Item Slider ( Services )
	$('.items-container').slick({
		infinite: true,
		arrows: true,
		autoplay: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [{
			breakpoint: 991,
			settings: {
				slidesToShow: 2,
				arrows: false
			}
		},
		{
			breakpoint: 525,
			settings: {
				slidesToShow: 1,
				arrows: false
			}
		}]
	});


	// FancyBox Video
	if ($('[data-fancybox]').length) {
		$('[data-fancybox]').fancybox({
			youtube: {
				controls: 0,
				showinfo: 0
			},
			vimeo: {
				color: 'f00'
			}
		});
	}




})(window.jQuery);