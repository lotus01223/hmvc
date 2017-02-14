;(function($) {


	/* ---------------------------------------
		USER AGENT
	---------------------------------------*/
	$(function () {
		var ua = {};
		ua.name = window.navigator.userAgent.toLowerCase();
		ua.isIE = (ua.name.indexOf('msie') >= 0 || ua.name.indexOf('trident') >= 0);
		ua.isFirefox = ua.name.indexOf('firefox') >= 0;
		ua.isChrome = ua.name.indexOf('chrome') >= 0;
		ua.isSafari = ua.name.indexOf('safari') >= 0;
		ua.isiPhone = ua.name.indexOf('iphone') >= 0;
		ua.isiPod = ua.name.indexOf('ipod') >= 0;
		ua.isiPad = ua.name.indexOf('ipad') >= 0;
		ua.isiOS = (ua.isiPhone || ua.isiPod || ua.isiPad);
		ua.isAndroid = ua.name.indexOf('android') >= 0;
		ua.isTablet = (ua.isiPad || (ua.isAndroid && ua.name.indexOf('mobile') < 0));
		if (ua.isIE) {		$('body').addClass('ie ie_' + ua.ver);	}
		if (ua.isFirefox) {	$('body').addClass('firefox');	}
		if (ua.isChrome) {	$('body').addClass('chrome');	}
		if (ua.isSafari) {	$('body').addClass('safari');	}
		if (ua.isiPhone) {	$('body').addClass('iPhone');	}
		if (ua.isiPod) {	$('body').addClass('iPod');		}
		if (ua.isiPad) {	$('body').addClass('iPad');		}
		if (ua.isiOS) {		$('body').addClass('iOS iOS_' + ua.ver);	}
		if (ua.isAndroid) {	$('body').addClass('android android_' + ua.ver);	}
		if (ua.isTablet) {	$('body').addClass('tablet');	}
	});



	/* ---------------------------------------
		acoodion
	---------------------------------------*/
	$(function() {
		var acContents = $('.ac_contents');
		var acHead = $('.ac_head');
		acHead.on('click', function () {
			$(this).toggleClass('open');
			$(this).next(acContents).slideToggle();
		});
	});



	/* ---------------------------------------
		scrollbar
	---------------------------------------*/
	$(function() {
		$('.p-scrollbar').perfectScrollbar();
	});



	/* ---------------------------------------
		smoothScroll
	---------------------------------------*/
	$(function() {
		smoothScroll.init({
			selector: '[data-scroll]',
			selectorHeader: '[data-scroll-header]',
			speed: 1000,
			easing: 'easeOutQuart',
			offset: 0,
			updateURL: true,
			callback: function () {}
		});
	});

/* ---------------------------------------
		modal2
	---------------------------------------*/
var current_scrollY;

$(document).ready(function() {
	
	// 子モーダルを開く
	$('#myBtn1').click(function() {
		current_scrollY = $(window).scrollTop();
		$('#wrapper').css({
			top: -1 * current_scrollY,
			position: 'fixed',
		    width: '100%',
		});
		$('#myModal1').modal({show: true});
	});
	// 子モーダルを閉じる
	$('#myModal1').on('hidden.bs.modal', function () {
		$('#wrapper').attr( { style: '' } );
		$('html, body').prop({ scrollTop: current_scrollY });
	});
	
});

var current_scrollY;

$(document).ready(function() {
	
	// 子モーダルを開く
	$('#myBtn2').click(function() {
		current_scrollY = $(window).scrollTop();
		$('#wrapper').css({
			top: -1 * current_scrollY,
			position: 'fixed',
		    width: '100%',
		});
		$('#myModal1').modal({show: true});
	});
	// 子モーダルを閉じる
	$('#myModal1').on('hidden.bs.modal', function () {
		$('#wrapper').attr( { style: '' } );
		$('html, body').prop({ scrollTop: current_scrollY });
	});
	
});
/* ---------------------------------------
		it-skill_accordion_tab
	---------------------------------------*/
	$(".it-skill_accordion_tab").click(function(){
  	$(this).toggleClass("it-skill_accordion_tab_active");
	});

/* ---------------------------------------
		it-skill_tag
	---------------------------------------*/
$(".f-itskill_tag").click(function () {
  $(this).fadeOut();
});


/* ---------------------------------------
		languages_tag
	---------------------------------------*/
$(".f-languages_tag").click(function () {
  $(this).fadeOut();
});

$(function() {
    $(".add-languages1").click(function(){
        $(".add-languages_hide1").show();
    });
});
$(function() {
    $(".add-languages2").click(function(){
        $(".add-languages_hide2").show();
    });
});
$(function() {
    $(".add-languages3").click(function(){
        $(".add-languages_hide3").show();
    });
});
$(function() {
    $(".add-languages4").click(function(){
        $(".add-languages_hide4").show();
    });
});
$(function() {
    $(".add-languages5").click(function(){
        $(".add-languages_hide5").show();
    });
});
$(function() {
    $(".add-languages6").click(function(){
        $(".add-languages_hide6").show();
    });
});
$(function() {
    $(".add-languages7").click(function(){
        $(".add-languages_hide7").show();
    });
});
$(function() {
    $(".add-languages7").click(function(){
        $(".add-languages_hide7").show();
    });
});
$(function() {
    $(".add-languages8").click(function(){
        $(".add-languages_hide8").show();
    });
});
$(function() {
    $(".add-languages9").click(function(){
        $(".add-languages_hide9").show();
    });
});
$(function() {
    $(".add-languages10").click(function(){
        $(".add-languages_hide10").show();
    });
});
$(function() {
    $(".add-languages11").click(function(){
        $(".add-languages_hide11").show();
    });
});
$(function() {
    $(".add-languages12").click(function(){
        $(".add-languages_hide12").show();
    });
});
$(function() {
    $(".add-languages13").click(function(){
        $(".add-languages_hide13").show();
    });
});

$(".f-languages_modal_tag").click(function(){
  	$(this).addClass("f-languages_modal_tag_active");
	});




})(jQuery);