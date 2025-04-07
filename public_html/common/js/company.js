/* ============================================================ */
/* slick */
/* ============================================================ */
$(function () {
	$('._slider01_').on('init', function (event, slick) {
		console.log('._slider01_ init');
		AOS.init();
	});
	$('._slider01_').slick({
		arrows: true,
		appendArrows: $('.arrow-box'),
		prevArrow: '<div class="slide-arrow prev-arrow"><span class="__ico icon-arrow-left" aria-hidden="true"></span></div>',
		nextArrow: '<div class="slide-arrow next-arrow"><span class="__ico icon-arrow-right" aria-hidden="true"></span></div>',
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: false,
		autoplaySpeed: 3000,
		speed: 650,
		swipe: true,
		infinite: false,
		cssEase: 'linear',
		pauseOnFocus: false,
		pauseOnHover: false,
		pauseOnDotsHover: false,
		variableWidth: false,
		lazyLoad: 'progressive',
		responsive: [
			{
			breakpoint: 1190,
			settings: {
				slidesToShow: 3,
			}
		},
			{
			breakpoint: 1000,
			settings: {
				slidesToShow: 1.2,
			}
		}
		]
	});
});

/* ============================================================ */
/* matchHeight */
/* ============================================================ */
$(function() {
	$('.c-company-history-slider__item').matchHeight();
});