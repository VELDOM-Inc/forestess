/* ============================================================ */
/* slick */
/* ============================================================ */
$(function(){
	$('._slider01_').slick({
		arrows: false,
		centerMode: true,
		slidesToShow: 5,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		speed: 1000,
		cssEase: 'linear',
		pauseOnFocus: false,
		pauseOnHover: false,
		pauseOnDotsHover: false,
		variableWidth: false,
		lazyLoad: 'progressive',
		responsive: [
			{
			breakpoint: 950,
			settings: {
				slidesToShow: 3,
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
			}
		}
		]
	});
	
	$('._slider02_').slick({
			arrows: false,
			dots: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: false,
			autoplaySpeed: 3000,
			speed: 1000,
			cssEase: 'linear',
			pauseOnFocus: false,
			pauseOnHover: false,
			pauseOnDotsHover: false,
			variableWidth: false,
			lazyLoad: 'progressive',
			responsive: [
			{
				breakpoint: 767,
				settings: {
				}
			}
			]
	});
});

