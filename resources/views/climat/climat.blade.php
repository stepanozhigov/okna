@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.headerClimat')
    <div id="climat-slider">
        <climat-slider ></climat-slider>
    </div>
    <section class="climatCatalogue climatCatalogue_main">
        @include('common.gui.titles', [
            'secondTitle' =>  "Каталог кондиционеров"
        ])
        <div class="climatCatalogue__content">
			<a class="climatCatalogue__filterLink" href="javascript:void(0);">Настройка фильтров</a>
            <div class="climatCatalogue__list">
                @include('climat.climatCard')
                @include('climat.climatCard')
                @include('climat.climatCard')
                @include('climat.climatCard')
                @include('climat.climatCard')
                @include('climat.climatCard')
            </div>
            <aside>
                <div class="climatCatalogue__filter">
                    <section class="climatCatalogue__filter-item opened">
                        <p class="climatCatalogue__filter-title">Цена, рублей</p>
                        <input data-type="double" data-min="1000" data-from="8000" data-to="27000" data-max="60000" class="range" type="text" name="" value="">
                    </section>
                    <section class="climatCatalogue__filter-item opened">
                        <p class="climatCatalogue__filter-title">Площадь, м2</p>
                        <label class="checkbox">
                            <input name="install" type="checkbox" class="checkbox__input">
                            <span class=" checkbox__mark"></span>
                            До 20 м2
                            <p class="checkbox__desc">7 модель</p>
                        </label>
                        <label class="checkbox">
                            <input name="install" type="checkbox" class="checkbox__input">
                            <span class=" checkbox__mark"></span>
                            До 30 м2
                            <p class="checkbox__desc">9 модель</p>
                        </label>
                        <label class="checkbox">
                            <input name="install" type="checkbox" class="checkbox__input">
                            <span class=" checkbox__mark"></span>
                            До 54 м2
                            <p class="checkbox__desc">12 модель</p>
                        </label>
                        <label class="checkbox">
                            <input name="install" type="checkbox" class="checkbox__input">
                            <span class=" checkbox__mark"></span>
                            До 79 м2
                            <p class="checkbox__desc">18 модель</p>
                        </label>
                        <label class="checkbox">
                            <input name="install" type="checkbox" class="checkbox__input">
                            <span class=" checkbox__mark"></span>
                            До 120 м2
                            <p class="checkbox__desc">24 модель</p>
                        </label>
                    </section>
                    <section class="climatCatalogue__filter-item opened">
                        <p class="climatCatalogue__filter-title">Производитель</p>
                        <label class="checkbox">
                            <input name="install" type="checkbox" class="checkbox__input">
                            <span class=" checkbox__mark"></span>
                            Electrolux
                            <p class="checkbox__desc">Швеция</p>
                        </label>
                        <label class="checkbox">
                            <input name="install" type="checkbox" class="checkbox__input">
                            <span class=" checkbox__mark"></span>
                            Fujitsu
                            <p class="checkbox__desc">Япония</p>
                        </label>
                        <label class="checkbox">
                            <input name="install" type="checkbox" class="checkbox__input">
                            <span class=" checkbox__mark"></span>
                            Haier
                            <p class="checkbox__desc">Германия</p>
                        </label>
                        <label class="checkbox">
                            <input name="install" type="checkbox" class="checkbox__input">
                            <span class=" checkbox__mark"></span>
                            LG
                            <p class="checkbox__desc">Корея</p>
                        </label>
                        <label class="checkbox">
                            <input name="install" type="checkbox" class="checkbox__input">
                            <span class=" checkbox__mark"></span>
                            Midea
                            <p class="checkbox__desc">Германия</p>
                        </label>
                        <label class="checkbox">
                            <input name="install" type="checkbox" class="checkbox__input">
                            <span class=" checkbox__mark"></span>
                            Mitsubishi
                            <p class="checkbox__desc">Япония</p>
                        </label>
                        <label class="checkbox">
                            <input name="install" type="checkbox" class="checkbox__input">
                            <span class=" checkbox__mark"></span>
                            Toshiba
                            <p class="checkbox__desc">Япония</p>
                        </label>
                    </section>
                    <a class="climatCatalogue__filter-more" href="javascript:void(0);">Больше фильтров →</a>
                </div>
                <a style="background-image: url(/img/climat/cheap-1440@2x.jpg)" class="linkBlock" href="javascript:void(0);"><p>10 самых недорогих кондиционеров</p></a>
                <a style="background-image: url(/img/climat/silent-1440@2x.jpg)" class="linkBlock" href="javascript:void(0);"><p>10 самых тихих кондиционеров</p></a>
            </aside>
        </div>
		<a class="climatCatalogue__link" href="javascripte:void(0)">Перейти в каталог</a>
    </section>
    <div class="climatAdditional">
        @include('common.gui.titles', [
            'secondTitle' =>  "Дополнительные услуги"
        ])
        <div class="climatAdditional__list">
            <a style="background-image: url(/img/climat/install-1440@2x.jpg)" class="linkBlock climatAdditional__item" href="javascript:void(0);"><p>Установка</p></a>
            <a style="background-image: url(/img/climat/service-1440@2x.jpg)" class="linkBlock climatAdditional__item" href="javascript:void(0);"><p>Сервис</p></a>
        </div>
    </div>
    <section class="reviews reviews_main container">
        @include('common.gui.titles', ['secondTitle' => 'Отзывы наших клиентов'])

        <div class="reviews__content">
            @foreach($reviews as $review)
                @include('common.gui.review', $review)
            @endforeach
        </div>

        <div class="buttons reviews__buttons">
            <a href="{{ route('reviews', $city) }}" class="button  button_gray">Прочитать все отзывы</a>
        </div>
    </section>
    <section class="manufacturers manufacturers_main manufacturers_climat">
        <div class="container">
            @include('common.gui.titles', [
                'secondTitle' =>  "Производители кондиционеров"
            ])
            <div id="manufacturers__list"></div>
        </div>
    </section>
    <section class="articles articles_main articles_climat" id="articles">
        @include('common.gui.titles', [
            'class' =>  "container",
            'secondTitle' =>  "Наши посты из&nbsp;социальных сетей",
            'intro' =>  "Нажмите на&nbsp;логотип социальной сети и&nbsp;посмотрите там полезную информацию."
        ])
        <div class="socials titles__socials container">
            <a href="" class="socials__item red-hoverable">
                <div class="socials__icon socials__icon_inst"></div>
            </a>
            <a href="" class="socials__item red-hoverable">
                <div class="socials__icon socials__icon_fb"></div>
            </a>
            <a href="" class="socials__item red-hoverable">
                <div class="socials__icon socials__icon_vk"></div>
            </a>
            <a href="" class="socials__item red-hoverable">
                <div class="socials__icon socials__icon_ok"></div>
            </a>
            <a href="" class="socials__item red-hoverable">
                <div class="socials__icon socials__icon_youtube"></div>
            </a>
        </div>
        <posts :posts="{{ $articles }}"></posts>



       <a href="http://89.108.103.224/sochi/articles" class="articles__button">Все посты</a>

    </section>

    @include('common.gui.survey')
    @include('common.gui.footer')
@endsection
