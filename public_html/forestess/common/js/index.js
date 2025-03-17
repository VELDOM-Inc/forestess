/* ============================================================ */
/* slick */
/* ============================================================ */
$(function(){
	$('._slider01_').slick({
		infinite: true, 
		arrows: false, 
		fade: true, 
		speed: 2000, 
		autoplaySpeed: 5000, 
		autoplay: true, 
		pauseOnFocus: false, 
		pauseOnHover: false,
		pauseOnDotsHover: false,
		accessibility: false,
		responsive: [
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 2,
			}
		}
		]
	});
});

/* 事業内容 */
$('.c-index-company-detail__list > li > a').hover(function () {
	if (window.matchMedia('(min-width:768px)').matches && !window.matchMedia('(hover: none)').matches) {
		var index = $('.c-index-company-detail__list > li > a').index($(this));
		$('.c-index-company-img__item.isShow').removeClass('isShow');
		$('.c-index-company-img__item').eq(index).addClass('isShow');
		
		$('.c-index-company-detail__link.isShow').removeClass('isShow');
		$('.c-index-company-detail__link').eq(index).addClass('isShow');
	}
});

if ($('.c-index-company-img__item').length > 0) {
	$('.c-index-company-img__item').eq(0).addClass('isShow');
	if (window.matchMedia('(max-width:767px)').matches || window.matchMedia('(hover: none)').matches) {
		$('.c-index-company-detail__list > li > a').eq(0).addClass('isShow');
		
		$('.c-index-company-detail__link').eq(0).addClass('isShow');
	}
}

if (window.matchMedia('(max-width:767px)').matches && $('.c-index-company-img__item').length > 0) {
	setInterval(function () {
		var index = $('.c-index-company-img__item').index($('.c-index-company-img__item.isShow')),
			next = index + 1;
		if (next === $('.c-index-company-img__item').length) {
			next = 0;
		}
		$('.c-index-company-detail__list > li > a.isShow').removeClass('isShow');
		$('.c-index-company-detail__list > li > a').eq(next).addClass('isShow');
		$('.c-index-company-img__item.isShow').removeClass('isShow');
		$('.c-index-company-img__item').eq(next).addClass('isShow');
	}, 5000);
}