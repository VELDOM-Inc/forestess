isSP = function () {
	return $(".u-sm-max:visible").length != 0;
};

// Smoothscroll
// PC・SP用 振り分け
const mediaQueryList = window.matchMedia("(max-width:768px)");
const listener = (event) => {
	if (event.matches) {
		var headerHeight = 75;
    var speed = 800;
    var urlHash = location.hash;
    if(urlHash) {
        $('html,body').stop().scrollTop(0);
        setTimeout(function(){
            var target = $(urlHash);
            var position = target.offset().top - headerHeight;
            $('body,html').stop().animate({scrollTop:position}, speed, 'swing');
        }, 500);
    }
    $('a[href*="#"]' + 'a:not(.non-scroll)').click(function() {
        var href= $(this).attr("href");
        var split = href.split('#');
        var target = $(split[1] == '' ? 'html' : "#" + split[1]);
        var position = target.offset().top - headerHeight;
        $('html,body').stop().animate({scrollTop:position}, speed, 'swing');   
    });
	} else {
		var headerHeight = 100;
    var speed = 800;
    var urlHash = location.hash;
    if(urlHash) {
        $('html,body').stop().scrollTop(0);
        setTimeout(function(){
            var target = $(urlHash);
            var position = target.offset().top - headerHeight;
            $('body,html').stop().animate({scrollTop:position}, speed, 'swing');
        }, 500);
    }
    $('a[href*="#"]' + 'a:not(.non-scroll)').click(function() {
        var href= $(this).attr("href");
        var split = href.split('#');
        var target = $(split[1] == '' ? 'html' : "#" + split[1]);
        var position = target.offset().top - headerHeight;
        $('html,body').stop().animate({scrollTop:position}, speed, 'swing');   
    });
	}
};
mediaQueryList.addEventListener("change", listener);
listener(mediaQueryList);

// SP header menu
$(function() {
	$('.l-header-menu').click(function() {
		$(this).toggleClass('_active_');
		$('body').toggleClass('_gnav-show_');
	});
	
	$('.l-gnav__item a[href*="#"],.l-gnav-btn a[href*="#"]').on('click', function () {
    $(".l-header-menu").removeClass('_active_');
    $("body").removeClass('_gnav-show_');
  });
});

// accordion
$(function() {
	$('.hoge').click(function() {
		$(this).next().slideToggle();
		$(this).toggleClass('_active_');
	});
});

/* スクロール後hraderにclass付与 */
$(function() {
  var $win = $(window),
      $header = $('.l-header'),
      animationClass = 'is-animation';
	
		$win.on('load scroll', function() {
			var value = $(this).scrollTop();
			if ( value > 100 ) {
				$header.addClass(animationClass);
			} else {
				$header.removeClass(animationClass);
			}
		});
});

// gnavi アクティブ
document.querySelectorAll('.l-header-nav__link').forEach(link => {
  if(link.href === window.location.href){
    link.classList.add('active')
  }
})

// Tel link
const ua = navigator.userAgent.toLowerCase(),
  isMobile = /iphone/u.test(ua) || /android(?<test>.+)?mobile/u.test(ua);

if (!isMobile) {
  $('a[href^="tel:"]').on("click", function (e) {
    e.preventDefault();
  });
}

/* ふわっとした動き */
jQuery(function($) {
	$(window).on('load scroll', function (){

		var box = $('.inview');
		var animated = 'active';

		box.each(function(){

			var boxOffset = $(this).offset().top;
			var scrollPos = $(window).scrollTop();
			var wh = $(window).height();

			if(scrollPos > boxOffset - wh + 100 ){
				$(this).addClass(animated);
			}
		});
	});
});