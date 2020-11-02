@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')

    <section class="hero">
		<div class="wrapper hero__content">
            <p class="hero__overtitle">Монтаж 1 день | Гарантия 30 лет</p>
			<h1 class="hero__title">
                <b>Пластиковые окна</b><br>
                @if($city->bx_code == 786)
                    №1
                @endif
				{!! $city->name_formatted !!}<br class="hidden-sm">
				от 7800 <span class="rouble">8</span>
			</h1>
			<p class="hero__intro">Вызовите специалиста для<br class="hidden-sm"> замера и расчёта</p>
			<form class="formN hero__form js-less" method="POST" action="{{ route('forms.feedback', $city) }}" id="offer-form">
                @csrf
                <input type="hidden" name="city" value="{{ $city->bx_code }}">
                <input type="hidden" name="city_name" value="{{ $city->name ?? '' }}">
                <input name="phone" required class="inputN" type="tel" placeholder="Ваш телефон">
				<button type="submit" class="buttonN buttonN-red btn-pulse">Вызвать замерщика</button>
				<p class="form__agreement">Оставляя контактную информацию, вы соглашаетесь на <u>обработку персональных данных</u></p>
			</form>
		</div>
    </section>

	<section class="calc-promo section wrapper">
        <picture>
            <source data-srcset="/img/templates/windows/calculator/img_calculator.webp" type="image/webp">
            <img class="lazyload" data-src="/img/templates/windows/calculator/img_calculator.jpg" loading="lazy" alt="calculator">
        </picture>
        <div class="calc-promo__titles">
            <h2 class="titles__second-title">Калькулятор стоимости</h2>
            <p class="intro calc-promo__intro">
				<span class="hidden-xs">Для расчета цены услуг на&nbsp;сайте компании есть калькулятор стоимости, что является важным преимуществом для выбора фирмы &laquo;Твой стиль&raquo;.</span> Стоимость изделия можно просчитать за&nbsp;5&nbsp;секунд. Для этого достаточно нажать на&nbsp;кнопку &laquo;Рассчитать&raquo;.
            </p>
            <a href="{{ route('calculator', $city) }}" class="buttonN buttonN-red btn-4 calc-promo__button">Рассчитать</a>
        </div>
    </section>

    @include('sale.september2020')

	<section class="sale wrapper">
		<h2 class="sale__title">
			Нашли дешевле?<br>
			<b>Сделаем скидку!</b>
		</h2>
		<img class="sale__img lazyload" data-src="/img/templates/gui/offer/opponent_sale.svg" loading="lazy" alt="Скидка до 500р от цены конкурента">
		<button data-src="#popup_sale" class="buttonN buttonN-light sale__button js-show btn-4">Получить скидку</button>
    </section>

	<section class="catalog-cards wrapper section">

        <h2 class="title-dec">Каталог пластиковых окон {!!$city->name_formatted!!}</h2>

        @foreach ($catalogTypes as $type)
            <? if ($type->id == 5) continue ?>
            <a href="{{ route('catalogue', ['city' => $city, 'type' => $type]) }}" class=" catalog-cards__item b-card is-hoverable">
                <img data-lazy-src="{{ Storage::url($type->img) }}" alt="{{ $type->name }}" class="catalog-cards__img">
                <div class="catalog-cards__item-info">
                    <h3 class="card-title catalog-cards__title">{{ $type->name }}</h3>
                    @if($type->price)
                        <p class="catalog-cards__price">от <span class="catalog-cards__number">{{ number_format($type->price, 0, ',', ' ') }} ₽</span></p>
                    @endif
    				<button class="catalog-cards__open" type="button" name="button">
    					<img width="18" height="10" data-lazy-src="/img/arrow-down.svg" alt="arrow">
    				</button>
                </div>
            </a>
        @endforeach
        <div class="buttons">
            <a href="{{ route('catalogue', ['city' => $city, 'type' => 'okna']) }}" class="button  button_gray">Перейти в каталог</a>
        </div>
    </section>

    <section class="section wrapper skills">
		<p class="skills__overtitle">Наши преимущества</p>
		<h2 class="title-dec skills__title">Звонят многим, заказывают у нас. Почему?</h2>
		<p class="skills__intro">
            Фабрика пластиковых окон «Твой&nbspстиль» основана в 2003 году и является лидером по производству и установке пластиковых окон<span class="hidden-xs"> {!!$city->name_formatted!!}</span>
		</p>
		<div class="advantagesN">
			<article class="advantageN">
                <picture>
                    <source data-srcset="/img/templates/windows/advantages/factory_windows.webp" type="image/webp">
                    <img class="advantageN__img lazyload" data-src="/img/templates/windows/advantages/factory_windows.jpg" loading="lazy" alt="Собственное производство">
                </picture>
				<div class="advantageN__wrap order">
                    <h3 class="advantageN__title">Главные плюсы организации</h3>
                    <ul class="advantageN__list">
                        <li>— Наличие своего производства</li>
                        <li>— Подписание договора на дому</li>
                        <li>— Сервисное обслуживание</li>
                        <li>— Установка за один день</li>
                        <li>— Контроль качества</li>
                        <li>— Выгодные цены</li>
                        <li>— 16 лет опыта</li>
                    </ul>
				</div>
			</article>
			<article class="advantageN">
                <picture>
                    <source data-srcset="/img/templates/windows/advantages/director.webp" type="image/webp">
                    <img class="advantageN__img lazyload" data-src="/img/templates/windows/advantages/director.jpg" loading="lazy" alt="Генеральный директор Репин А.А. всегда на связи">
                </picture>
				<div class="advantageN__wrap">
					<h3 class="advantageN__title">Директор всегда на связи</h3>
					<p class="intro advantageN__intro">Я лично контролирую все этапы работы с нашими клиентами и отвечаю за качество обслуживания.</p>
                    <p class="intro advantageN__intro">Вы можете написать мне на почту <a href="mailto:boss-tvoistil@mail.ru">boss-tvoistil@mail.ru</a> или в Instagram - я оперативно отвечу.</p>
                    <p class="intro advantageN__intro">Прямая линия обеспечивает ответственную работу каждого сотрудника в компании. Считаю это важным плюсом для наших клиентов.</p>
					<div class="advantageN__signature">
                        <span class="advantageN__signature_name">А. А. Репин</span>
                        <picture>
                            <source data-srcset="/img/templates/windows/advantages/signature.webp" type="image/webp">
                            <img class="advantageN__signature_img lazyload" data-src="/img/templates/windows/advantages/signature.png" loading="lazy" alt="signature">
                        </picture>
					</div>
				</div>
				<a href="https://www.instagram.com/business_repin/" target="_blank" class="buttonN buttonN-inst btn-4">Директор в Instagram</a>
			</article>
		</div>
    </section>

    <section class="whyus whyus_main section hidden-xs">
        <div class="whyus__stat">
            <div class="whyus__stat-item">
                <p class="whyus__stat-num">30</p>
                <p class="whyus__stat-text">лет гарантии <br>на окна</p>
            </div>
            <div class="whyus__stat-item">
                <p class="whyus__stat-num">3</p>
                <p class="whyus__stat-text">часа занимает <br> установка</p>
            </div>
            <div class="whyus__stat-item">
                <p class="whyus__stat-num">790</p>
                <p class="whyus__stat-text">окон устанавливаем <br> в месяц</p>
            </div>
        </div>
    </section>




    <section class="portfolio portfolio__window portfolio_main">
        @include('common.gui.titles', ['secondTitle' => 'Примеры наших работ'])

        <div class="portfolio__carousel" id="portfolio__carousel" data-photos="{{ $photos }}">

        </div>
        <div class="buttons portfolio__buttons">
            <a href="{{ route('photos', $city) }}" class="button button_gray">Посмотреть все работы</a>
			<button class="button buttons__item js-show" data-src="#popup_callback" data-title="Вызов замерщика" data-button="Вызвать замерщика">Вызвать замерщика</button>
        </div>
    </section>

    <section class="reviews reviews_main container">
        @include('common.gui.titles', ['secondTitle' => 'Отзывы наших клиентов'])
        <Reviews></Reviews>
        <div class="reviews__content" id="reviews">
            @foreach($reviews as $review)
                @include('common.gui.review', $review)
            @endforeach
        </div>

        <div class="buttons reviews__buttons">
            <a href="{{ route('reviews', $city) }}" class="button  button_gray">Все отзывы</a>
			<a href="{{ route('add-review', $city) }}" class="button buttons__item">Оставить отзыв</a>
        </div>
    </section>

    <section class="manufactur section wrapper">
        <h2 class="manufactur__title title-dec">Производители профилей</h2>
        <p class="manufactur__subtitle subtitleN">Компания &laquo;Твой стиль&raquo; использует профили для окон ведущих мировых поставщиков с&nbsp;сертификатами качества. Работаем с&nbsp;профилями следующих производителей:</p>
        <div class="manufactur__items">
            <div class="manufactur__item">
                <img data-src="/img/manufacturers/veka-new.svg" loading="lazy" alt="Veka" class="manufactur__item-image lazyload">
                <span class="manufactur__item-name">Германия</span>
            </div>
            <div class="manufactur__item">
                <img data-src="/img/manufacturers/kbe-new.svg" loading="lazy" alt="Kbe" class="manufactur__item-image lazyload">
                <span class="manufactur__item-name">Германия</span>
            </div>
            <div class="manufactur__item">
                <img data-src="/img/manufacturers/rehau-new.svg" loading="lazy" alt="Rehau" class="manufactur__item-image lazyload">
                <span class="manufactur__item-name">Германия</span>
            </div>
            <div class="manufactur__item">
                <img data-src="/img/manufacturers/monblanc-new.svg" loading="lazy" alt="Monblanc" class="manufactur__item-image lazyload">
                <span class="manufactur__item-name">Германия</span>
            </div>
        </div>
    </section>

    <section class="other section wrapper">
        <a href="{{ route('services', [request()->route()->city, 'deal']) }}" class="other__item is-hoverable">
            <picture>
                <source data-srcset="img/other/home_deal.webp" type="image/webp">
                <img data-src="img/other/home_deal.png" loading="lazy" alt="home_deal" class="other__img lazyload">
            </picture>
            <h3 class="other__title">Договор на дому</h3>
            <p class="other__text">
                Для вашего удобства замерный <br> мастер  может заключить <br>договор у вас дома.
            </p>
        </a>
        <a href="{{ route('credit', request()->route()->city) }}" class="other__item is-hoverable">
            <picture>
                <source data-srcset="img/other/shutterstock.webp" type="image/webp">
                <img data-src="img/other/shutterstock.png" loading="lazy" alt="lamp" class="other__img lazyload">
            </picture>
            <h3 class="other__title">Рассрочка до 3х лет</h3>
            <p class="other__text">
                Основной плюс рассрочки в отсутствии переплат. Итоговая сумма не меняется с течением времени. 
            </p>
        </a>
        <a href="{{ route('services', [request()->route()->city, 'measurements']) }}" class="other__item is-hoverable">
            <picture>
                <source data-srcset="img/other/free_measure.webp" type="image/webp">
                <img data-src="img/other/free_measure.png" loading="lazy" alt="free_measure" class="other__img lazyload">
            </picture>
            <h3 class="other__title">Бесплатный замер</h3>
            <p class="other__text">
                Наш технолог произведет замер<br> и расчет стоимости заказа<br> в удобное для вас время.
            </p>
        </a>
    </section>

    <section class="seo-block seo-block_main">
        <div class="wrapper">
            <div class="seo-block__content">
                <div class="seo-block__items">
                    <div class="seo-block__item">
                        <h3 class="seo-block__item-title">{!! str_replace('#city_title#', $city->name_formatted, $seoData->first_title) !!}</h3>
                        {!! str_replace('#city_title#', $city->name_formatted, $seoData->first_text) !!}
                    </div>
                    @if ($seoData->firm_img)
                        <img data-src="{{ Storage::url($seoData->firm_img) }}" loading="lazy" alt="" class="seo-block__item-img lazyload">
                    @endif
                </div>
                <div class="seo-block__items seo-block__items_reverse">
                    <div class="seo-block__item">
                        <h3 class="seo-block__item-title">{{ $seoData->second_title }}</h3>
                        {!! str_replace('#city_title#', $city->name_formatted, $seoData->second_text) !!}
                    </div>
                    @if ($seoData->second_img)
                        <img data-src="{{ Storage::url($seoData->second_img) }}" loading="lazy" alt="" class="seo-block__item-img lazyload">
                    @endif
                </div>
                <div class="seo-block__items">
                    <div class="seo-block__item">
                        <h3 class="seo-block__item-title">{{ $seoData->third_title }}</h3>
                        {!! str_replace('#city_title#', $city->name_formatted, $seoData->third_text) !!}
                    </div>
                    @if ($seoData->third_img)
                        <img data-src="{{ Storage::url($seoData->third_img) }}" loading="lazy" alt="" class="seo-block__item-img lazyload">
                    @endif
                </div>
            </div>
        </div>
    </section>

    @include('common.gui.survey')
    @include('common.gui.footer')
@endsection
