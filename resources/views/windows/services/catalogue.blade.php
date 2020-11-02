@extends('common.layout')

@section('content')

    @include('common.gui.header')


    <section class="catalogue">
        <? $nameFormatted = mb_strtolower($type->name_formatted); ?>
        @include('common.gui.titles', [
            'class' =>  'container',
            'overtitle' =>  'каталог',
            'title' =>  "Каталог пластиковых {$nameFormatted} {$city->name_formatted}",
            'intro' =>  "Для вашего удобства мы&nbsp;разделили профили на&nbsp;3&nbsp;категории: эконом, стандарт, премиум. Пластиковые окна и&nbsp;двери, остекление балконов и&nbsp;лоджий, перегородки&nbsp;&mdash; все эти профили подойдут вам."
        ])
        <div class="catalogue__content">
            <div class="catalogue__list">
                <article class="catalogue__item">
                    <div class="catalogue__item-preview">
                        <img class="catalogue__item-image" src="/img/windows/window_econom.png" alt="">
                    </div>
                    <div class="catalogue__item-content">
                        <h3 class="catalogue__item-title">Эконом</h3>
                        <div class="catalogue__item-wrap">
                            <div class="catalogue__item-characteristic">
                                <p>Теплоизоляция</p>
                                <div class="scale scale_two">
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <span class="scale__value">до -32 ℃</span>
                                </div>
                            </div>
                            <div class="catalogue__item-characteristic">
                                <p>Шумоизоляция</p>
                                <div class="scale scale_two">
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <span class="scale__value">+20 %</span>
                                </div>
                            </div>
                            <dl class="catalogue__item-params">
                                <dt>Ширина стеклопакета</dt>
                                <dd>24–32 мм</dd>
                            </dl>
                            <dl class="catalogue__item-params">
                                <dt>Ширина профиля</dt>
                                <dd>58–60 мм</dd>
                            </dl>
                            <dl class="catalogue__item-params">
                                <dt>Количество камер</dt>
                                <dd>4–5 шт.</dd>
                            </dl>
                            <dl class="catalogue__item-params">
                                <dt>Гарантия</dt>
                                <dd>10 лет</dd>
                            </dl>
                        </div>
                        <p class="catalogue__item-price">3 900 ₽/м<sup>2</sup></p>
                    </div>
                </article>
                <article class="catalogue__item">
                    <div class="catalogue__item-preview">
                        <img class="catalogue__item-image" src="/img/windows/window_standart.png" alt="">
                    </div>
                    <div class="catalogue__item-content">
                        <h3 class="catalogue__item-title">Стандарт</h3>
                        <div class="catalogue__item-wrap">
                            <div class="catalogue__item-characteristic">
                                <p>Теплоизоляция</p>
                                <div class="scale scale_fourth">
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <span class="scale__value">до -40 ℃</span>
                                </div>
                            </div>
                            <div class="catalogue__item-characteristic">
                                <p>Шумоизоляция</p>
                                <div class="scale scale_fourth">
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <span class="scale__value">+40 %</span>
                                </div>
                            </div>
                            <dl class="catalogue__item-params">
                                <dt>Ширина стеклопакета</dt>
                                <dd>32 мм</dd>
                            </dl>
                            <dl class="catalogue__item-params">
                                <dt>Ширина профиля</dt>
                                <dd>70–72 мм</dd>
                            </dl>
                            <dl class="catalogue__item-params">
                                <dt>Количество камер</dt>
                                <dd>4–5 шт.</dd>
                            </dl>
                            <dl class="catalogue__item-params">
                                <dt>Гарантия</dt>
                                <dd>25 лет</dd>
                            </dl>
                        </div>
                        <p class="catalogue__item-price">4 700 ₽/м<sup>2</sup></p>
                    </div>
                </article>
                <article class="catalogue__item">
                    <div class="catalogue__item-preview">
                        <img class="catalogue__item-image" src="/img/windows/window_premium.png" alt="">
                    </div>
                    <div class="catalogue__item-content">
                        <h3 class="catalogue__item-title">Премиум</h3>
                        <div class="catalogue__item-wrap">
                            <div class="catalogue__item-characteristic">
                                <p>Теплоизоляция</p>
                                <div class="scale scale_fifth">
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <span class="scale__value">до -45 ℃</span>
                                </div>
                            </div>
                            <div class="catalogue__item-characteristic">
                                <p>Шумоизоляция</p>
                                <div class="scale scale_fifth">
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <div class="scale__block"></div>
                                    <span class="scale__value">+70 %</span>
                                </div>
                            </div>
                            <dl class="catalogue__item-params">
                                <dt>Ширина стеклопакета</dt>
                                <dd>42 мм</dd>
                            </dl>
                            <dl class="catalogue__item-params">
                                <dt>Ширина профиля</dt>
                                <dd>76–82 мм</dd>
                            </dl>
                            <dl class="catalogue__item-params">
                                <dt>Количество камер</dt>
                                <dd>5–7 шт.</dd>
                            </dl>
                            <dl class="catalogue__item-params">
                                <dt>Гарантия</dt>
                                <dd>30 лет</dd>
                            </dl>
                        </div>
                        <p class="catalogue__item-price">5 500 ₽/м<sup>2</sup></p>
                    </div>
                </article>
            </div>
            <div class="catalogue__footer">
                <p>Нужна помощь в&nbsp;выборе или расчёте? Закажите звонок и&nbsp;мы&nbsp;перезвоним вам в&nbsp;течении 5&nbsp;минут.</p>
                <a class="button js-show" data-src="#popup_callback" data-title="Заказать звонок" data-button="Заказать звонок" href="javascript:void(0);">Заказать звонок</a>
            </div>
        </div>
        <section class="turnkey">
            <h2 class="turnkey__title">Типовые решения</h2>
            <p class="turnkey__subtitle">Данные решения удовлетворяют потребности 97 % заказчиков. Если вам нужна нестандартная конструкция, <br> свяжитесь с менеджером для расчёта стоимости.</p>
            <div class="turnkey__list">
                <div class="turnkey__item">
                    <img src="/img/windows/turnkey_01.jpg" alt="">
                    <p class="turnkey__price">6 500 ₽</p>
                </div>
                <div class="turnkey__item">
                    <img src="/img/windows/turnkey_02.jpg" alt="">
                    <p class="turnkey__price">8 500 ₽</p>
                </div>
                <div class="turnkey__item">
                    <img src="/img/windows/turnkey_03.jpg" alt="">
                    <p class="turnkey__price">10 500 ₽</p>
                </div>
            </div>
            <div class="turnkey__buttons">
                <a class="button js-show" data-src="#popup_callback" data-title="Вызов замерщика" data-button="Сделать заказ" href="javascript:void(0);">Вызвать замерщика</a>
            </div>
        </section>
        <section class="manufacturers container">

            @include('common.gui.titles', ['secondTitle' => 'Производители профилей'], ['intro' => 'Компания &laquo;Твой стиль&raquo; использует профили ведущих мировых брендов. Мы&nbsp;предлагаем нашим клиентам только сертифицированные материалы. В&nbsp;нашем ассортименте представлены профили из&nbsp;ПВХ и&nbsp;алюминия следующих брендов.'])

            <div id="manufacturers__list">
            </div>

        </section>
        <section class="facture">
            <div class="facture__content">
                <h2 class="facture__title">Фактурная ламинация</h2>
                <p class="facture__desc">Ламинирование фактурой — от 1500 ₽ за {{ mb_strtolower($type->name_solo) }}. Ещё больше фактурных <br> решений спрашивайте у наших <a class="js-show" data-src="#popup_callback" data-title="Вызов замерщика" href="javascript:void(0)">замерщиков</a></p>
                <div class="facture__list">
                    <button class="facture__item active" type="button" name="facture">
                        <img src="/img/windows/facture_01.jpg" alt="">
                    </button>
                    <button class="facture__item" type="button" name="facture">
                        <img src="/img/windows/facture_02.jpg" alt="">
                    </button>
                    <button class="facture__item" type="button" name="facture">
                        <img src="/img/windows/facture_03.jpg" alt="">
                    </button>
                    <button class="facture__item" type="button" name="facture">
                        <img src="/img/windows/facture_04.jpg" alt="">
                    </button>
                    <button class="facture__item" type="button" name="facture">
                        <img src="/img/windows/facture_05.jpg" alt="">
                    </button>
                </div>
                <p class="facture__price">От 1 500 рублей за {{ mb_strtolower($type->name_solo) }}</p>
            </div>
            <img class="facture__img active" src="/img/windows/lamination-anteak.png" alt="">
            <img class="facture__img" src="/img/windows/lamination-bergkiefer.png" alt="">
            <img class="facture__img" src="/img/windows/lamination-black_cherry.png" alt="">
            <img class="facture__img" src="/img/windows/lamination-golden_oak.png" alt="">
            <img class="facture__img" src="/img/windows/lamination-dark_oak.png" alt="">
        </section>
        <section class="whyus">
            @include('common.gui.titles', [
                'title' =>  "Звонят многим, заказывают у нас. Почему? ",
                'class' =>  "container",
                'intro' =>  "Фабрика пластиковых окон &laquo;Твой стиль&raquo; основана в&nbsp;2003 году является лидером по&nbsp;производству и&nbsp;установке пластиковых окон на&nbsp;Дальнем Востоке"
            ])
            <div class="whyus__content">
                <div class="whyus__item">
                    <div class="whyus__item-info">
                        <h3 class="whyus__item-title">Наши преимущества</h3>
                        <ul>
                            <li class="whyus__item-text">— Контроль качества после установки</li>
                            <li class="whyus__item-text">— Собственное производство</li>
                            <li class="whyus__item-text">— Сервисное обслуживание</li>
                            <li class="whyus__item-text">— Услуга «Договор на дому»</li>
                            <li class="whyus__item-text">— 16 лет успешной работы</li>
                            <li class="whyus__item-text">— Гарантия низкой цены</li>
                            <li class="whyus__item-text">— Установка за 1 день</li>
                        </ul>
                    </div>
                    <img class="whyus__item-image" src="/img/img_factory.jpg" alt="Производство">
                </div>
                <div class="whyus__item whyus__item_reverse">
                    <div class="whyus__item-info">
                        <h3 class="whyus__item-title">Директор всегда на связи</h3>
                        <p class="whyus__item-text">
                            Я лично контролирую все этапы работы с помощью прямого контакта со своими клиентами. Вы можете написать мне в любую социальную сеть или позвонить. <br> Прямая линия обеспечивает ответственную работу каждого сотрудника. Считаю это самым важным фактором для моих клиентов.
                        </p>
                        <div class="signature">
                            <p>А. А. Репин</p>
                            <img src="/img/signature.png" srcset="/img/signature2x.png 2x" alt="signature">
                        </div>
                        <div class="socials">
                            <a target="_blank" href="https://www.instagram.com/business_repin/" class="socials__item">
                                <div class="socials__icon socials__icon_inst"></div>
                            </a>
                            <a target="_blank" href="https://vk.com/business.repin" class="socials__item">
                                <div class="socials__icon socials__icon_vk"></div>
                            </a>
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=79996516666" class="socials__item">
                                <div class="socials__icon socials__icon_whatsapp"></div>
                            </a>
                        </div>
                    </div>
                    <img class="whyus__item-image" src="/img/img_director.jpg" alt="Директор">
                </div>
            </div>
            <div class="whyus__stat">
                <div class="whyus__stat-item">
                    <p class="whyus__stat-num">30</p>
                    <p class="whyus__stat-text">лет гарантии <br>на {{ mb_strtolower($type->name) }}</p>
                </div>
                <div class="whyus__stat-item">
                    <p class="whyus__stat-num">3</p>
                    <p class="whyus__stat-text">часа занимает <br> установка</p>
                </div>
                <div class="whyus__stat-item">
                    <p class="whyus__stat-num">790</p>
                    <p class="whyus__stat-text">{{$nameFormatted}} устанавливаем <br> в месяц</p>
                </div>
            </div>
        </section>
    </section>




    @include('common.gui.footer')

@endsection
