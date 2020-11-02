@extends('common.layout')

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

@section('content')
    @include('common.gui.header')

    <section class="contacts">
        @include('common.gui.titles', [
            'title' =>  "Контакты компании «Твой&nbsp;стиль» {$city->name_formatted}"
        ])
        @if(count($city->offices) > 0)
            <div class="map contacts__map" id="map" data-placemark="/img/gui/logo.png">
                <div class="contacts__offices">
                    @foreach ($city->offices as $id => $office)
                        <div class="office {{ $id == 0 ? 'office_active':'' }} contacts__office b-card" data-coords="{{ $office->coords }}">
                            <img src="{{ Storage::url($office->img) }}" alt="" class="office__img">
                            <div class="office__info">
                                <p class="office__title card-title"> {{ $office->adres }}</p>
                                <p class="office__desc text">{{ $office->adres_desc }}</p>
                                <p class="office__time card-title">{{ $office->time }}</p>
                                <p class="text office__weekend">Без выходных</p>
                            </div>
                        </div>
                    @endforeach

                    @if(count($city->offices) > 1)
                        <div class="contacts__nav">
                            <button type="button" class="js-next-office contacts__arrow contacts__prev" name="button">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10" height="16" viewBox="0 0 10 16"><defs><path id="83zha" d="M1412.064 530l-6.715-6.14a1.013 1.013 0 0 1 0-1.53c.48-.44 1.27-.44 1.75 0l7.552 6.905a1.013 1.013 0 0 1 0 1.53l-7.551 6.905c-.48.44-1.27.44-1.751 0a1.013 1.013 0 0 1 0-1.53z"/></defs><g><g transform="translate(-1405 -522)"><use fill="" xlink:href="#83zha"/></g></g></svg>
                            </button>
                            <button type="button" class="js-next-office contacts__arrow contacts__next" name="button">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10" height="16" viewBox="0 0 10 16"><defs><path id="83zha" d="M1412.064 530l-6.715-6.14a1.013 1.013 0 0 1 0-1.53c.48-.44 1.27-.44 1.75 0l7.552 6.905a1.013 1.013 0 0 1 0 1.53l-7.551 6.905c-.48.44-1.27.44-1.751 0a1.013 1.013 0 0 1 0-1.53z"/></defs><g><g transform="translate(-1405 -522)"><use fill="" xlink:href="#83zha"/></g></g></svg>
                            </button>
                        </div>
                    @endif
                </div>
            </div>

        @endif

        <div class="contacts__footer">
            <div class="contacts__footer-content">
                <div class="contacts__item">
                    <p class="second-title">Единый номер</p>
                    <p class="phone text contacts__phone">
                        <a href="tel:{{ $city->phone }}" class="phone__number">
                            <img class="phone__icon" src="/img/gui/phone_gray.svg" alt="">{{ $city->phone }}
                        </a>
                        <span class="phone__time">круглосуточно | бесплатно</span>
                    </p>
                </div>
                <div class="contacts__item">
                    <p class="second-title">Почта</p>
                    <p class="mail text">
                        <img src="/img/gui/mail_gray.svg" alt="" class="mail__icon">{{ $city->email }}</p>
                </div>
                <div class="contacts__item">
                    <p class="second-title">Социальные сети</p>
                    <div class="socials contacts__socials">
                         @foreach($city->socials as $social)
                            @if ($social->direction_id == 1)
                                <a target="_blank" href="{{ $social->link }}" class="socials__item">
                                    <div class="socials__icon socials__icon_{{ $social->icon }}"></div>
                                </a>
                            @endif
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>

    </section>
    @include('common.gui.footer')
@endsection
