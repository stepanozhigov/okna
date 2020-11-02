@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')
    <section class="page__photobank">
        <section class="photobank">
            <div class="photobank__main">
                @include('common.gui.titles', [
                'overtitle' =>  'Каталог изображений',
                'title' =>  "Каталог изображений для фотопечати",
                'class' =>  "container",
                'intro' =>  "Многие, кто привык подходить к&nbsp;дизайну интерьера творчески, уже давно оценили преимущества фотопечати. Наши специалисты составят для вас эксклюзивный дизайн-проект и&nbsp;помогут с&nbsp;выбором."
                ])
                <div class="photobank__wrap">
                    <div class="photobank__list">
                        <h2 class="photobank__title">Для любой поверхности</h2>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <img src="/img/ceilings/butterfly.png" alt="" class="categoryLink__image">
                            <p class="categoryLink__name">Бабочки</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <img src="/img/ceilings/seaworld.png" alt="" class="categoryLink__image">
                            <p class="categoryLink__name">Водный мир</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <img src="/img/ceilings/abstraction.png" alt="" class="categoryLink__image">
                            <p class="categoryLink__name">Абстракция</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <img src="/img/ceilings/city.png" alt="" class="categoryLink__image">
                            <p class="categoryLink__name">Город</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <img src="/img/ceilings/forchild.png" alt="" class="categoryLink__image">
                            <p class="categoryLink__name">Для детей</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <img src="/img/ceilings/flowers.png" alt="" class="categoryLink__image">
                            <p class="categoryLink__name">Цветы</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <img src="/img/ceilings/maps.png" alt="" class="categoryLink__image">
                            <p class="categoryLink__name">Карты</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <img src="/img/ceilings/food.png" alt="" class="categoryLink__image">
                            <p class="categoryLink__name">Еда</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <img src="/img/ceilings/frames.png" alt="" class="categoryLink__image">
                            <p class="categoryLink__name">Рамки, виньетки</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <img src="/img/ceilings/sky.png" alt="" class="categoryLink__image">
                            <p class="categoryLink__name">Небо</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <img src="/img/ceilings/texture.png" alt="" class="categoryLink__image">
                            <p class="categoryLink__name">Текстура</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <img src="/img/ceilings/kitchenNatural.png" alt="" class="categoryLink__image">
                            <p class="categoryLink__name">Природа</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <img src="/img/ceilings/natural.png" alt="" class="categoryLink__image">
                            <p class="categoryLink__name">Животные</p>
                        </a>
                        <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                            <img src="/img/ceilings/other.png" alt="" class="categoryLink__image">
                            <p class="categoryLink__name">Разное</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="photobank__wrap">
                <div class="photobank__list photobank__list_kitchen">
                    <h2 class="photobank__title">Кухонные фартуки</h2>
                    <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                        <img src="/img/ceilings/kitchenSeaworld.png" alt="" class="categoryLink__image">
                        <p class="categoryLink__name">Водный мир</p>
                    </a>
                    <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                        <img src="/img/ceilings/kitchenAbstraction.png" alt="" class="categoryLink__image">
                        <p class="categoryLink__name">Абстракции</p>
                    </a>
                    <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                        <img src="/img/ceilings/kitchenCity.png" alt="" class="categoryLink__image">
                        <p class="categoryLink__name">Город</p>
                    </a>
                    <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                        <img src="/img/ceilings/kitchenFlowers.png" alt="" class="categoryLink__image">
                        <p class="categoryLink__name">Цветы</p>
                    </a>
                    <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                        <img src="/img/ceilings/kitchenFood.png" alt="" class="categoryLink__image">
                        <p class="categoryLink__name">Еда</p>
                    </a>
                    <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                        <img src="/img/ceilings/kitchenSky.png" alt="" class="categoryLink__image">
                        <p class="categoryLink__name">Небо</p>
                    </a>
                    <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                        <img src="/img/ceilings/kitchenTexture.png" alt="" class="categoryLink__image">
                        <p class="categoryLink__name">Текстура</p>
                    </a>
                    <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                        <img src="/img/ceilings/kitchenNatural.png" alt="" class="categoryLink__image">
                        <p class="categoryLink__name">Природа</p>
                    </a>
                    <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                        <img src="/img/ceilings/natural.png" alt="" class="categoryLink__image">
                        <p class="categoryLink__name">Животные</p>
                    </a>
                    <a href="javascript:void(0)" class="categoryLink categoryLink_photobank">
                        <img src="/img/ceilings/kitchenOther.png" alt="" class="categoryLink__image">
                        <p class="categoryLink__name">Разное</p>
                    </a>
                </div>
            </div>
        </section>
        <section class="shutterstock page__shutterstock">
            <div class="shutterstock__content">
                <div class="shutterstock__image">
                    <img src="/img/ceilings/shutterstock.svg" alt="">
                </div>
                <p class="shutterstock__text">Вы можете выбрать из <span class="shutterstock__text-bold">900 миллионов</span> изображений для своего дизайна на shutterstock.com.
                    Для наших клиентов картинки на сайте абсолютно бесплатны, Вам необходимо
                    только записать номер изображения.</p>
                    <button class="arrow shutterstock__arrow">Подробнее</button>
                    <a href="javascript:void(0);" class="shutterstock__link">Подобрать изображение</a>
                </div>
            </section>
        <section class="photoprintBlock page__photoprintBlock">
                <div class="photoprintBlock__content">
                    <div class="photoprintBlock__text">
                        <h2 class="photoprintBlock__title">
                            Поверхности для печати
                        </h2>
                        <div class="photoprintBlock__list-wrap">
                            <ul class="photoprintBlock__list">
                                <li class="photoprintBlock__item">Натяжных потолках</li>
                                <li class="photoprintBlock__item">Стекле и зеркалах</li>
                                <li class="photoprintBlock__item">Деревянных поверхностях и плитах ЛДСП</li>
                                <li class="photoprintBlock__item">Матовом, глянцевом и зеркальном акриле</li>
                                <li class="photoprintBlock__item">Металлопластиковых и ПВХ конструкциях</li>
                            </ul>
                            <ul class="photoprintBlock__list">
                                <li class="photoprintBlock__item">Кафельной плитке</li>
                                <li class="photoprintBlock__item">Радиаторах</li>
                                <li class="photoprintBlock__item">Баннерной ткани</li>
                                <li class="photoprintBlock__item">Фотобумаге и холстах</li>
                                <li class="photoprintBlock__item">Обоях</li>
                                <li class="photoprintBlock__item">Рулонных шторах</li>
                                <li class="photoprintBlock__item">Самоклеящейся пленке</li>
                                <li class="photoprintBlock__item">Сувенирах</li>
                            </ul>
                        </div>
                    </div>
                    <div class="photoprintBlock__image">

                    </div>
                </div>
            </section>
        <section class="serviceReasons">
            <div class="serviceReasons__content">
                <h2 class="serviceReasons__title">
                    Почему фотопечать?
                </h2>
                <div class="serviceReasons__reasons">
                    <div class="serviceReasons__reason">
                        <p class="serviceReasons__reason-text">
                            Наш современный принтер для фотопечати позволяет получать полноцветные и&nbsp;яркие изображения на&nbsp;абсолютно любой поверхности. Узнайте больше о&nbsp;возможностях ультрафиолетовой печати, ознакомившись с&nbsp;каталогом в&nbsp;нашем офисе.
                        </p>
                    </div>
                    <div class="serviceReasons__reason">
                        <p class="serviceReasons__reason-text">
                            Заказать фотопечать в&nbsp;компании &laquo;Твой стиль&raquo; очень просто. Для выбора изображения к&nbsp;вашим услугам Shutterstock&nbsp;&mdash; один из&nbsp;самых популярных фотобанков, насчитывающий более 200 миллионов изображений в&nbsp;отличном качестве.
                        </p>
                    </div>
                    <div class="serviceReasons__reason">
                        <p class="serviceReasons__reason-text">
                            Заказать фотопечать у&nbsp;нас достаточно просто. Самое сложное&nbsp;&mdash; определиться с&nbsp;выбором изображения. Ведь к&nbsp;вашим услугам один из&nbsp;самых популярных Интернет-каталогов фотопечати Shutterstock с&nbsp;более чем сотней тысяч вариантов в&nbsp;отличном качестве.
                        </p>
                    </div>
                </div>
                <p class="serviceReasons__desc">
                    Наши возможности позволяют использовать ультрафиолетовую печать как для предметов обстановки, так и&nbsp;для сувенирной и&nbsp;рекламной продукции. Мы&nbsp;принимаем заказы от&nbsp;частных лиц и&nbsp;оптовых организаций. Позвоните нам и&nbsp;узнайте обо всех условиях заказа.
                </p>
            </div>
        </section>
    </section>
    @include('common.gui.footer')
@endsection
