@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')
    @include('common.gui.titles', [
        'overtitle' =>  'Установка',
        'title' =>  "Установка натяжных потолков",
        'intro' =>  "Производство и&nbsp;установка натяжных потолков &laquo;под ключ&raquo;&nbsp;&mdash; важное направление компании &laquo;Твой Стиль&raquo;. Все работы выполняются опытными мастерами, аккуратно и&nbsp;профессионально."
    ])

    <section class="serviceDetail">
        @include('common.gui.titles', [
            'secondTitle' =>  "Этапы установки натяжного потолка"
        ])
        <section class="reason">
            <div class="reason__image-wrap">
                <div class="reason__image-inner">
                    <img src="/img/ceilings/install-1.jpg" alt="" class="reason__image">
                </div>
            </div>
            <div class="reason__content">
                <h4 class="reason__title">Сделать заказ</h4>
                <p class="reason__text">Чтобы заказать установку натяжного потолка, вам необходимо связаться с&nbsp;нашими менеджерами и&nbsp;согласовать подходящее время для визита замерщика. Для этого нужно заполнить форму на&nbsp;сайте, позвонить или приехать в&nbsp;офис.
Вы&nbsp;также можете сразу уточнить ориентировочную стоимость заказа и&nbsp;задать другие интересующие вопросы.</p>
            </div>
        </section>
        <section class="reason">
            <div class="reason__image-wrap">
                <div class="reason__image-inner">
                    <img src="/img/ceilings/install-2.jpg" alt="" class="reason__image">
                </div>
            </div>
            <div class="reason__content">
                <h4 class="reason__title">Бесплатные замеры</h4>
                <p class="reason__text">Наш специалист приедет к&nbsp;вам в&nbsp;назначенное время, выполнит необходимые замеры, составит цифровой макет проекта и&nbsp;рассчитает цену.
При необходимости, предоставит каталог возможных вариантов фактур и&nbsp;расцветок натяжных потолков.</p>
            </div>
        </section>
        <section class="reason">
            <div class="reason__image-wrap">
                <div class="reason__image-inner">
                    <img src="/img/ceilings/install-3.jpg" alt="" class="reason__image">
                </div>
            </div>
            <div class="reason__content">
                <h4 class="reason__title">Калькулятор и оплата</h4>
                <p class="reason__text">На&nbsp;основании цифрового макета выполняются расчеты, указываются конкретные цены и&nbsp;подписывается договор. Всё это можно сделать прямо у&nbsp;вас дома.</p>
            </div>
        </section>
        <section class="reason">
            <div class="reason__image-wrap">
                <div class="reason__image-inner">
                    <img src="/img/ceilings/install-4.jpg" alt="" class="reason__image">
                </div>
            </div>
            <div class="reason__content">
                <h4 class="reason__title">Изготовление заказа</h4>
                <p class="reason__text">Ваш заказ изготовят в&nbsp;собственном цехе компании &laquo;Твой Стиль&raquo;. По&nbsp;вашему пожеланию мы&nbsp;можем произвести любые виды потолков.</p>
            </div>
        </section>
        <section class="reason">
            <div class="reason__image-wrap">
                <div class="reason__image-inner">
                    <img src="/img/ceilings/install-4.jpg" alt="" class="reason__image">
                </div>
            </div>
            <div class="reason__content">
                <h4 class="reason__title">Изготовление заказа</h4>
                <p class="reason__text">Ваш заказ изготовят в&nbsp;собственном цехе компании &laquo;Твой Стиль&raquo;. По&nbsp;вашему пожеланию мы&nbsp;можем произвести любые виды потолков.</p>
            </div>
        </section>
        <section class="reason">
            <div class="reason__image-wrap">
                <div class="reason__image-inner">
                    <img src="/img/ceilings/install-5.jpg" alt="" class="reason__image">
                </div>
            </div>
            <div class="reason__content">
                <h4 class="reason__title">Монтаж потолка</h4>
                <p class="reason__text">В&nbsp;согласованное время к&nbsp;вам приедет бригада специалистов. В&nbsp;комплекс их&nbsp;работ входит монтаж натяжного потолка и&nbsp;установка люстры.</p>
            </div>
        </section>
        <section class="serviceDetail__info">
            <div class="serviceDetail__info-desc">
                <h2>Как быстро выполняется установка натяжных потолков?</h2>
                <p>Установка натяжных потолков в&nbsp;одной комнате чаще всего занимает несколько часов. При этом конкретное время зависит от&nbsp;целого ряда различных факторов (площадь помещения, материал стен и&nbsp;т.д.).</p>
                <q>Для ускорения мы&nbsp;рекомендуем по-максимуму убрать из&nbsp;помещения лишние предметы,</q>
                <p>которые могут помешать работе мастеров. Аккуратность является важнейшим принципом для нашей компании, поэтому после установки натяжного потолка мы&nbsp;выполняем уборку помещения.</p>
                <div class="serviceDetail__info-mobile">
                    <h2>Наша стоимость квадратного метра натяжного потолка с&nbsp;установкой Вас обязательно порадует!</h2>
                    <p class="serviceDetail__info-mobile">В&nbsp;прайс-листе компании &laquo;Твой Стиль&raquo; указана на&nbsp;натяжные потолки цена за&nbsp;1м2&nbsp;с установкой. Обращаем внимание, что у&nbsp;нас&nbsp;Вы не&nbsp;сможете приобрести натяжной потолок без установки. Чтобы...В прайс-листе компании &laquo;Твой Стиль&raquo; указана на&nbsp;натяжные потолки цена за&nbsp;1м2&nbsp;с установкой.</p>
                </div>
            </div>
        </section>
    </section>

    @include('common.gui.footer')
@endsection
