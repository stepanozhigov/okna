//прослушивание изменения dom
var MutationObserver = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;
var list = document.querySelector('body');
var observer = new MutationObserver(function(mutations) {  
    mutations.forEach(function(mutation) {
        $('[name="icon_callback"]').hide();
    });
});

if(Vue.cookie.get('form_send')){
    //включаем прослушку
    observer.observe(list, {
        childList: true
    });
}

$(document).on('click', '.js-show', function(event) {
    event.preventDefault();
    var source = $(this).data('src'),
        $this = $(this),
        $source = $(source),
		$carrot = $('[name=icon_callback]'),
        $overlay = $('#overlay');

	$carrot.css('display', 'none !important');
	
    $('[name="icon_callback"]').hide();
    //включаем прослушку
    observer.observe(list, {
        childList: true
    });

    if (typeof BX !== 'undefined') {
        BX.SiteButton.hide();
    }

    if ($this.is('.review'))
    {
        var offset = 0;

        offset = $(window).scrollTop() - $('.reviews__content').offset().top;

        $source.css('top', offset + 150);
    }
    else {
        $('body').addClass('overflowed');
    }

    if (source == "#popup_ceilingsform"||
        source == "#popup_callback"||
        source == "#popup_credit"||
        source == "#popup_sale"){
        if(Vue.cookie.get('form_send')){
            var source = "#popup_alert_form";
        }
    }

    $overlay.addClass('overlay_active');
    $(source).addClass('popupN_active');
    $('.header_sticky').addClass('hidden');
});

$(document).on('click', '.js-showup', function(event) {
    event.preventDefault();
    var source = $(this).data('src'),
        $this = $(this),
        $source = $(source),
        $overlay = $('#overlay');

    $(source).addClass('popupN_active popupN_showup');
    $('.header_sticky').addClass('hidden');

});

$(document).on('click','.js-close', function(event) {
    event.preventDefault();
    //выключаем прослушку
    observer.disconnect();
    $('[name="icon_callback"]').show();

    $('body').removeClass('overflowed');

    var $overlay = $('#overlay'),
        $popups = $('.popupN');

    $overlay.removeClass('overlay_active');
    $popups.removeClass('popupN_active');
    $('.header_sticky').removeClass('hidden');

    if (typeof BX !== 'undefined') {
        BX.SiteButton.show();
    }
});
