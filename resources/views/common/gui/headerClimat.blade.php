<header class="header headerClimat">
    <div class="headerClimat__heading">
        <div class="header__offices dropdown">
            <a class="text dropdown__item dropdown__item_active"><img class="dropdown__arrow" src="/img/gui/arrow.svg" alt="">{{ $city->mainOffice() }}</a>
            <div class="dropdown__content">
                <a class="text dropdown__item dropdown__item_active"><img class="dropdown__arrow" src="/img/gui/arrow.svg" alt="">{{ $city->mainOffice() }}</a>
                @if ($city->offices->count()> 1)
                    <p class="dropdown__title">Другие офисы в городе</p>

                    @foreach($city->offices as $office)
                        @if (strpos($city->mainOffice(), $office->adres) === false)
                            <a class="text dropdown__item dropdown__item_bordered red-hoverable">{{ $city->name}}, {{ $office->adres }}</a>
                        @endif
                    @endforeach
                @endif

                <p class="dropdown__title">Офисы в других городах</p>
                @foreach($cities as $otherCity)
                    @if ($otherCity->offices->count() > 0 && $otherCity->id !== $city->id)
                        <a href="{{ route('windows.main', $otherCity) }}" class="text dropdown__item dropdown__item_bordered red-hoverable">{{ $otherCity->name}}</a>
                    @endif
                @endforeach
                <p class="dropdown__title">Не нашли ваш город?</p>
                <menu-city-search :cities="{{ $cities }}"></menu-city-search>
            </div>
        </div>
        <div class="header__feedbacks">
            <a href="https://api.whatsapp.com/send?phone={{ $city->whatsapp }}" class="text whatsapp header__whatsapp red-hoverable"><img src="/img/gui/whatsapp.svg" alt="" class="whatsapp__icon"> <span class="whatsapp__write-text">Написать в&nbsp</span>WhatsApp <span class="whatsapp__mobile-text">написать</span></a>
            <a href="tel:{{ $city->phone }}" class="text phone header__phone  red-hoverable"><img class="phone__icon" src="/img/gui/phone.svg" alt="">{{ $city->phone }} <span data-src="#popup_callback" class="js-show">заказать звонок</span></a>
            <a data-src="#popup_callback" class="text header__callback js-show">Заказать звонок</a>
        </div>
        <a class="headerClimat__shipping" href="javascript:void(0);">Доставка и оплата</a>
        <nav class="menu header__menu" id="">
            <div class="menu__item menu__item_dropdown">
                <a class="text menu__item js-toggle-submenu">Информация</a>
                <div class="menu__dropdown">
                    <div class="menu__dropdown-heading">
                        <a href="javascript:void(0);" class="menu__item-nav">
                            <img width="8" height="16" src="/img/gui/arrow_menu.svg" alt="">
                        </a>
                        <a href="javascript:void(0);" class="text menu__dropdown-link">Информация</a>
                    </div>

                    <a href="{{ route('services', request()->route()->city) }}" class="text menu__item menu__item_bordered">Услуги</a>
                    <a href="{{ route('about', request()->route()->city) }}" class="text menu__item menu__item_bordered">О компании</a>
                    <a href="{{ route('employees', request()->route()->city) }}" class="text menu__item menu__item_bordered">Сотрудники</a>
                    <a href="{{ route('vacancies', request()->route()->city) }}" class="text menu__item menu__item_bordered">Вакансии</a>
                    <a href="{{ route('questions', request()->route()->city) }}" class="text menu__item menu__item_bordered">Вопрос-ответ</a>
                    <a href="{{ route('reviews', request()->route()->city) }}" class="text menu__item menu__item_bordered">Отзывы</a>
                    <a href="{{ route('articles', request()->route()->city) }}" class="text menu__item menu__item_bordered">Статьи</a>
                    <a href="{{ route('dirMessage', request()->route()->city) }}" class="text menu__item menu__item_bordered">Написать директору</a>
                </div>
            </div>
        </nav>
    </div>
    @include('common.gui.mobileMenu')
	<button class="goTop" type="button" name="button"></button>
</header>
<div class="header header_hidden">
    <div class="header__content">
        <a href="{{ route('windows.main', $city) }}" class="logo">
            <img class="logo__icon" src="/img/gui/logo-icon.svg" alt="логотип Твой Стиль">
            <img class="logo__text mobile-hide" src="/img/gui/logo-text.svg" alt="графема Твой Стиль">
        </a>
        <div class="header__feedbacks">
            <a href="https://api.whatsapp.com/send?phone={{ $city->whatsapp }}" class="text whatsapp header__whatsapp red-hoverable"><img src="/img/gui/whatsapp.svg" alt="" class="whatsapp__icon"> <span class="whatsapp__write-text">Написать в&nbsp</span>WhatsApp <span class="whatsapp__mobile-text">написать</span></a>
            <a href="tel:{{ $city->phone }}" class="text phone header__phone  red-hoverable"><img class="phone__icon" src="/img/gui/phone.svg" alt="">{{ $city->phone }} <span data-src="#popup_callback" class="js-show">заказать звонок</span></a>
            <a data-src="#popup_callback" class="text header__callback js-show">Заказать звонок</a>
            <img src="/img/gui/nav_hamburger.svg" alt="" class="hamburger header__hamburger active js-toggle-menu">
    		<img src="/img/gui/mobile-menu-close.svg" alt="" class="header__close js-toggle-menu">
        </div>
    </div>
</div>
<main class="page">
