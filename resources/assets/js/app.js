
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');
window.$ = window.jQuery = require('jquery');

window.Vue = require('vue');
var Inputmask = require('inputmask');
var ionRangeSlider = require('ion-rangeslider/js/ion.rangeSlider.js');
var tooltipster = require('tooltipster/dist/js/tooltipster.bundle.js');
// var rateYo = require('rateyo/src/jquery.rateyo.js');
var lazySizesLib = require('lazysizes/lazysizes.min.js');

window.VueCookie = require('vue-cookie');
Vue.use(VueCookie);

$(document).ready(function () {
    var yaCounter = typeof window.yaCounter43807824 !== 'undefined' ? window.yaCounter43807824: undefined;
});

window.Vue2TouchEvents = require('vue2-touch-events');
Vue.use(Vue2TouchEvents);

require('./components/popup');
//require('./components/social');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('reviews', require('./components/Reviews.vue'));
Vue.component('window-calc', require('./components/WindowCalc.vue'));
Vue.component('balcony-calc', require('./components/BalkonyCalc.vue'));
Vue.component('simple-slider', require('./components/simpleSlider.vue'));
// Vue.component('ceilings-calc', require('./components/ceilingsCalc.vue'));
// Vue.component('climat-slider', require('./components/climatSlider.vue'));
Vue.component('catalogue-slider', require('./components/catalogue-slider.vue'));
Vue.component('city-search', require('./components/CitySearch.vue'));
Vue.component('add-comment', require('./components/AddComment.vue'));
Vue.component('add-review', require('./components/AddReview.vue'));
// Vue.component('offer-slider', require('./components/OfferSlider.vue'));
Vue.component('gallery-carousel', require('./components/GalleryCarousel.vue'));
Vue.component('gallery-list', require('./components/GalleryList.vue'));
Vue.component('credit-calc', require('./components/CreditCalc.vue'));
Vue.component('dveri-calc', require('./components/DveriCalc.vue'));
Vue.component('peregorodki-calc', require('./components/Peregorodki.vue'));
Vue.component('zhalyuzi-calc', require('./components/Zhalyuzi.vue'));
Vue.component('posts', require('./components/Articles.vue'));
Vue.component('posts-list', require('./components/ArticlesList.vue'));
Vue.component('manufacturers', require('./components/ManufacturersCarousel.vue'));
Vue.component('banks', require('./components/banksCarousel.vue'));
Vue.component('menu-city-search', require('./components/MenuCitySearch.vue'));
Vue.component('portfolio-photos', require('./components/PortfolioPhotos.vue'));
Vue.component('quiz', require('./components/Quiz.vue'));
Vue.component('widget', require('./components/Widget.vue'));
Vue.component('geo-confirm', require('./components/GeoConfirm.vue'));

if ($('#geo-confirm').length > 0) {
    new Vue({
        el: '#geo-confirm'
    })
}

if ($('#widget').length > 0) {
    new Vue({
        el: '#widget'
    })
}

lazySizes.init();


var $lazyContainers = $('[data-lazy-src]');

if ($lazyContainers.length > 0) {
    $lazyContainers.each(function(index, element) {
        var $element = $(element),
            src = $element.data('lazy-src');

        $element.attr('src', src);
    });
}

$(document).on('scroll', function () {
    var scrollPosition = $(window).scrollTop(),
        $header = $('.header_hidden').length > 0 ? $('.header_hidden'): $('.header_sticky');

    if (scrollPosition > 200) {
        $header.addClass('header_sticky').removeClass('header_hidden')  ;
    }
    else {
        $header.removeClass('header_sticky').addClass('header_hidden');
    }
});

const menuCities = $('.header__offices');

if (menuCities.length > 0) {
    new Vue({
        el: '.header__offices'
    })
}

const quiz = $('#quiz');

if (quiz.length > 0) {
	new Vue({
		el: '#quiz'
	})
}


const articles = $('#articles');

if (articles.length > 0) {
    new Vue({
        el: '#articles'
    })
}

const manufacturers = $('#manufacturers__list');

if (manufacturers.length > 0) {
    new Vue({
        el: '#manufacturers__list',
        template: '<manufacturers></manufacturers>'
    })
}

const banks = $('#credit__banks-list');

if (banks.length > 0) {
    new Vue({
        el: '#credit__banks-list',
        template: '<banks></banks>'
    })
}


const creditCalcContainer = $('#credit-calc');

if (creditCalcContainer.length > 0) {
    new Vue({
        el: '#credit-calc',
        template: '<credit-calc></credit-calc>'
    })
}

const portfolioCarouselContainer = $('.portfolio__carousel');

if (portfolioCarouselContainer.length > 0) {
    new Vue({
        el: '#portfolio__carousel',
        template: '<gallery-carousel :photos="photos"></gallery-carousel>',
        data: function () {
            return {
                photos: portfolioCarouselContainer.data('photos')
            }
        }
    });
}

const portfolioListContainer = $('.portfolio__list');

if (portfolioListContainer.length > 0) {
    new Vue({
        el:'#portfolio__list',
        template: '<gallery-list :photos="photos"></gallery-list>',
        data: function () {
            return {
                photos: portfolioListContainer.data('photos')
            }
        }
    })
}


// const offerSliderContainer = $('#js-offer-slider');

// if (offerSliderContainer.length > 0) {

//     const   offers = offerSliderContainer.data('offers'),
//             city = offerSliderContainer.data('city'),
//             offerSlider = new Vue({
//                 el: '#js-offer-slider',
//                 template: `<offer-slider :offers="offers" :city="city"></offer-slider>`,
//                 data: {
//                     offers: offers,
//                     city: city
//                 }
//             });
// }

$('.js-add-comment').each(function(index, element) {
    var elementId = $(element).attr('id');

    new Vue({
        el: '#' + elementId
    })
})

if ($('#portfolio-photos').length > 0) {
     const portfolioPhotos = new Vue({
        el: '#portfolio-photos'
    });
}

if ($('#city-search').length > 0) {
    const citySearch = new Vue({
        el: '#city-search'
    });
}

if ($('#window-calc').length > 0) {
    var windowCalc = new Vue({
        el: '#window-calc'
    });
}

if ($('#balcony-calc').length > 0) {
    var BalkonyCalc = new Vue({
        el: '#balcony-calc'
    });
}

if ($('#simple-slider').length > 0) {
    var BalkonyCalc = new Vue({
        el: '#simple-slider'
    });
}

if ($('#catalogue-slider').length > 0) {
    var CeilingsCalc = new Vue({
        el: '#catalogue-slider'
    });
}

if ($('#dveri-calc').length > 0) {
    var DveriCalc = new Vue({
        el: '#dveri-calc'
    });
}

if ($('#peregorodki-calc').length > 0) {
    var PeregorodkiCalc = new Vue({
        el: '#peregorodki-calc'
    });
}

if ($('#zhalyuzi-calc').length > 0) {
    var ZhalyuziCalc = new Vue({
        el: '#zhalyuzi-calc'
    });
}

if ($('#add-review').length > 0) {
    new Vue({
        el: '#add-review'
    });
}


$('.survey__no').on('click', function () {
    $(this).closest('.survey').addClass('survey_opened');
});

$('.survey__yes').on('click', function () {
    $('.survey__buttons').slideUp();
    $('.survey__thankyou').slideDown();
});

const bodyScrollLock = require('body-scroll-lock');
const disableBodyScroll = bodyScrollLock.disableBodyScroll;
const enableBodyScroll = bodyScrollLock.enableBodyScroll;

// 2. Get a target element that you want to persist scrolling for (such as a modal/lightbox/flyout/nav).

if ($('.header').closest('.page__not-found').length > 0) {
    $('.header__top-content').on('click', function (e) {
        let mainPage = location.href.replace('notFound', '');
        location.href = mainPage;
    });
} else {
    $('.hamburger').on('click', function (e) {
        $('.mobileMenu').addClass('active');
        $('body').addClass('no-scroll');
        $('.header__hamburger').removeClass('active');
        $('.header__close').addClass('active');

        $('.scrollable').each((index, domElement) => {
            disableBodyScroll(domElement);
        });
    });
}


$('.header__close').on('click', function (e) {
    $('.mobileMenu').removeClass('active');
    $('body').removeClass('no-scroll');
    $('.header__hamburger').addClass('active');
    $('.header__close').removeClass('active');

    $('.scrollable').each((index, domElement) => {
        enableBodyScroll(domElement);
    });
});

$('.whyus__button').on('click', function () {
    $('.whyus__stat').slideToggle({
      start: function () {
        $(this).css({
          display: "flex"
        })
      }
    });
});



if ($(document).width() <= 1024) {
    $('.js-toggle-submenu').on('click', function (event) {
        event.preventDefault();
        //$(this).siblings('.menu__item_dropdown').find('.menu__dropdown_toggled').removeClass('menu__dropdown_toggled');
        $(this).closest('.menu').addClass('opened');
        $(this).next('.menu__dropdown').addClass('opened');
    })

    $('.menu__item-nav').on('click', function () {
        $(this).closest('.menu').removeClass('opened');
        $(this).closest('.menu__dropdown').removeClass('opened');
    })
}

var $mapContainer = $('#map'),
    $offices = $('.office');

if ($mapContainer.length > 0 && $offices.length > 0) {

    function offsetCoordinates(coords) {
        var screenWidth = $(document).width();
        console.log(coords);
        switch (true) {
            case (screenWidth < 600):
                return [
                    coords[0] + 0.002,
                    coords[1]
                ];
            case (screenWidth < 1000):
                return [
                    coords[0],
                    coords[1] - 0.005
                ];

            case (screenWidth < 1500):
                return [
                    coords[0],
                    coords[1] - 0.005
                ];

            default:
                return coords;
        }
    }

    function initMap ()
    {

        var map = new ymaps.Map('map', {
            center: offsetCoordinates($('.office_active').data('coords')),
            zoom: 16,
            controls: ['zoomControl']
        });

        map.behaviors.disable('scrollZoom');

        if ($(document).width() < 1024) {
            map.behaviors.disable('drag');
        }

        $offices.each(function (index, office) {

            var officePlacemark = new ymaps.Placemark(
                JSON.parse(office.dataset.coords),
                {
                    //balloonContent: 'цвет <strong>воды пляжа бонди</strong>'
                },
                {
                    iconLayout: 'default#image',
                    iconImageHref: $('#map').data('placemark'),
                    iconContent: 'asdasdasd'
                }
            );

            map.geoObjects.add(officePlacemark);
        });


        $('.js-next-office').on('click', function (e) {
            var $currentOffice = $('.office_active'),
                $nextOffice = $currentOffice.next('.office').length > 0 ? $currentOffice.next('.office') : $('.office').eq(0);

                $currentOffice.removeClass('office_active');
                $nextOffice.addClass('office_active');

                map.panTo(offsetCoordinates($nextOffice.data('coords')), {'duration': 1000});
        });

    }

    ymaps.ready(initMap)

}

$('.question__more').on('click', function(e) {

    var currentText = $(this).text(),
        dataText = $(this).data('text');

    $(this).text(dataText);

    $(this).data('text', currentText);

    $(this).prev('.question__text').toggleClass('question__text_toggled');

});

$('.calculator__type').on('click', function () {
    $(this).addClass('active').siblings().removeClass('active')
    $(this).closest('.calculator__inner').find('.calculator__main').removeClass('active').eq($(this).index()).addClass('active');
});

$('.facture').on('click', '.facture__item', function () {
    $(this)
    .addClass('active').siblings().removeClass('active')
    .closest('.facture').find('.facture__img').removeClass('active').eq($(this).index()).addClass('active');
});

$('.titles__arrow').on('click', function () {
    $(this).prev('.intro ').toggleClass('opened');
});

$('.js-link').on('click', function (e) {
    let href = $(this).attr('href');
    if (href) {
        window.open(href, '_blank');
    }
    console.log(href);
});

let onResize = function () {
    if ($(window).width() <= 1024) {
        $('.header__offices.dropdown').off();
        $('.footer__directions.dropdown').off();

        $('.header__offices.dropdown').on('click', function () {
            $('.header__offices.dropdown').toggleClass('opened');
            $('.footer__directions.dropdown').removeClass('opened');
        });

        $('.footer__directions.dropdown').on('click', function () {
            $('.footer__directions.dropdown').toggleClass('opened');
            $('.header__offices.dropdown').removeClass('opened');
        });
    }
    if ($(window).width() <= 768) {
        $('.promos').off('click', '.promos__item');
        $('.promos').on('click', '.promos__item', function () {
            $(this).siblings().removeClass('opened');
            $(this).toggleClass('opened');
            $('html, body').animate({
                scrollTop: $(this).offset().top - 80
            }, 500);
        });
        $('.article__more').off();
        $('.article__more').on('click', function () {
            $(this).prev('.article__desc').find('h3').toggleClass('opened')
        });

		$('.catalogue__list').off('click', '.catalogue__item');
		$('.catalogue__list').on('click', '.catalogue__item', function () {
			$(this).siblings().removeClass('opened');
			$(this).toggleClass('opened');
		});

        $('.ourArticle__more').off();
        $('.ourArticle__more').on('click', function () {
            $(this).closest('.ourArticle').siblings().removeClass('opened');
            $(this).closest('.ourArticle').toggleClass('opened');

            if ($(this).text() === 'Подробнее') {
                $(this).text('Свернуть');
            } else {
                $(this).text('Подробнее');
            }

        });

        $('.nav-group').off();
        $('.nav-group').on('click', function() {
        	$(this).toggleClass('nav-group_opened');
        });

        $('.calculator__type').on('click', function () {
            let list = $(this).prevAll('.calculator__type');
            let thisWidth = $(this).outerWidth();
            let width = 0;


            for (var i = 0; i < list.length; i++) {
                let element = list[i];
                let elementWidth = $(element).outerWidth();
                width += elementWidth;
            }

            let offset = thisWidth / 2 + width;
            let value = 'calc(50% - ' + offset + 'px)';
            $('.calculator__types').css("left", value);
        });
    } else {
        $('.calculator__types').css("left", 0);
    }
};

$(document).ready(onResize);
$(window).resize(onResize);

// var phoneMask = new Inputmask('+9 999 999-99-99', {
//     onBeforeWrite: function (event, buffer, caretPos, opts) {
//         buffer[0] = '+';
//         buffer[1] = 7;
//         console.log(buffer);
//         return buffer;
//     },
// });

var phoneMask = new Inputmask('+7 (V99) 999-99-99', {
    definitions: { 
        'V': {
            validator: '[9]' 
        }
    }
}),
    $phones = $('[type=tel]');

phoneMask.mask($phones);

$('.range').ionRangeSlider({
    skin: 'round',
    hide_min_max: true,
    extra_classes: 'range_red'
});
window.onerror = function (msg, url, line, col, exception) {
    $.get('/err-handler', {
        data: {
            msg: msg,
            exception: exception,
            url: url,
            line: line,
            col: col
        }
    });
}

$('.about__all-rewards').on('click', function () {
    $('.about__rewards').toggleClass('opened');

    if ($(this).text() === 'Смотреть все награды') {
        $(this).text('Свернуть все награды');
    } else {
        $(this).text('Смотреть все награды');
    }
});

$('.about__all-images').on('click', function () {
    $('.about__images').toggleClass('opened');
    if ($(this).text() === 'Смотреть все фото') {
        $(this).text('Свернуть все фото');
    } else {
        $(this).text('Смотреть все фото');
    }
});


$('.tooltip').tooltipster({
    animation: 'fade',
    delay: 200,
    theme: ['ts-tooltip_mini'],
    distance: 16,
    side: 'bottom'
});

$('.shutterstock__arrow').on('click', function () {
	$(this).toggleClass('arrow_rotate-vertical');
	$(this).prev('.shutterstock__text ').toggleClass('opened');
});

$('.dillers__item-heading').on('click', function () {
    let heading = $(this);
    heading.closest('.dillers__item').siblings().removeClass('dillers__item_opened');
    heading.closest('.dillers__item').toggleClass('dillers__item_opened');
    $('html, body').animate({
        scrollTop: heading.offset().top
    }, 500);
});

$('.dillers__materials-open').on('click', function () {
    let $this = $(this),
        text = $this.text(),
        prev = $this.prev();
    $this.prev('.dillers__materials-table').toggleClass('opened');
    $this.toggleClass('arrow_rotate-vertical');

    if (text === 'Показать все изделия') {
        $this.text('Свернуть');
    } else {
        $this.text('Показать все изделия');
    }
});

$('.dillers__toPrice').on('click', function () {
    $('#price').trigger('click');
    $('html, body').animate({
        scrollTop: $('#price').offset().top
    }, 500);
});

$('.dillers__toShipping').on('click', function () {
    $('#shipping').trigger('click');
    $('html, body').animate({
        scrollTop: $('#shipping').offset().top
    }, 500);
});

$('.dillers__heading-button').on('click', function () {
    $(this).toggleClass('rotate-vertical');
    $(this).prev('p').toggleClass('opened');
});

$('.catalog-cards__item').on('click', '.catalog-cards__open', function () {
    event.preventDefault();
    $(this).closest('.catalog-cards__item').toggleClass('opened');
});

if (typeof BX !== 'undefined') {
    BX.SiteButton.addEventHandler('onSubmitSuccess', function(e) {

    console.log('init', form);

    });
}

$('.mobileMenu__item_category').on('click', function () {
    $('.mobileMenu__list').addClass('mobileMenu__list_category');
    $(this).addClass('active');
});

$('.mobileMenu__link-prev').on('click', function (event) {
    event.stopPropagation();
    $('.mobileMenu__list').removeClass('mobileMenu__list_category');
    $(this).closest('.mobileMenu__item_category').removeClass('active');
});

$('.survey__form').on('submit', function (e) {
    e.preventDefault();
    var $form = $(e.target);
    $.ajax({
        url: '/forms/survey',
        method: 'post',
        data: $form.serialize(),
        success: function () {
            $('.survey__thankyou').slideDown();
            $form.hide();
        }
    });
});

$('.js-dir').on('submit', function (e) {
    e.preventDefault();
    var $form = $(e.target);
    $.ajax({
        url: '/forms/survey',
        method: 'post',
        data: $form.serialize(),
        success: function () {
            $('.dir-message__submit').hide();
            $('.dir-message__status-send').show();
        }
    });
})

$('.js-less').on('submit', function () {

   if(Vue.cookie.get('form_send')){
       $('body').addClass('overflowed');
       $('#overlay').addClass('overlay_active');
       $('#popup_alert_form').addClass('popupN_active');
       $('.header_sticky').addClass('hidden');
       $(this).find('input').val('');
       event.preventDefault();
   }else{
       Vue.cookie.set('form_send', true, 1);
   }

});

$('.form:not(.js-less)').on('submit', function (event) {
   event.preventDefault();

   if(Vue.cookie.get('form_send')){
        $('body').addClass('overflowed');
        $('#overlay').addClass('overlay_active');
        $('#popup_alert_form').addClass('popupN_active');
        $('.header_sticky').addClass('hidden');
        $(this).find('input').val('');
        event.preventDefault();
    }else{
        var $this = $(this),
            name = $this.find('[name=name]').val(),
            city = $this.find('[name=city]').val(),
            phone = $this.find('[name=phone]').val();

        if (typeof window.yaCounter43807824 !== 'undefined') {
            window.yaCounter43807824.reachGoal('form-sub');
        }
        if (typeof ga !== 'undefined') {
            ga.getAll()[0].send('event', 'forms', 'sub');
        }
        fbq('track', 'Lead');

        var successEl = $this.next('.popupN__status-send');

        if (successEl.length > 0) {
            $this.hide();
            $this.prev('.popupN__title').hide();
            $this.next('.popupN__status-send').show();
        }

        $.ajax({
            url: $this.attr('action'),
            data: $this.serialize(),
            method: 'POST',
            success: function () {
                $this.addClass('form_status-send');
                Vue.cookie.set('form_send', true, 1);
            }
        })
    }

});

$('.whatsapp_check').on('click', function (event) {
    event.preventDefault();
	// $(this).attr('disabled', true);
    var link = $(this).attr('href');

    if(Vue.cookie.get('form_send')){

        location.href = link;

    }else{

        var name = 'Пустой лид whatsapp';
        var city_code = ['529', '523', '528', '113', '117'];

        if (city_code.includes(window.city.bx_code)){
            name = 'WhatsApp - Запад';
        }else{
            name = 'WhatsApp - Восток';
        }

        if (typeof window.yaCounter43807824 !== 'undefined') {
            window.yaCounter43807824.reachGoal('whatsapp');
        }
        if (typeof ga.getAll() !== 'undefined') {
            ga.getAll()[0].send('event', 'whatsapp', 'click');
        }
        fbq('track', 'Lead');

        $.ajax({
            url: '/forms/add-lead',
            method: 'post',
            dataType: 'json',
            data: {
                city: window.city.bx_code,
                phone: null,
                name: name,
            },
            success: function () {
                Vue.cookie.set('form_send', true, 1);

            }
        });
        location.href = link;
    }

});


var citySwitch = $('.js-switch-link');

if (citySwitch.length > 0) {
    $.ajax({
        url:'/geo/locate',
        dataType: 'json',
        success: function (response) {
            if (response.city)
            {
                window.city = response.city;
                window.city.location = response.location;

                if(response.city.code) {
                    citySwitch.text('Выбрать '+ response.city.name);
                    citySwitch.attr('href', 'https://okna-ts.ru/'+ response.city.code);
                }
            }
        }
    });
}
