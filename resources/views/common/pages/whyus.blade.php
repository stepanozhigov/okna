@extends('common.layout')

@section('content')
    @include('common.gui.header')
        @include('common.gui.titles', [
            'class' =>  'container',
            'overtitle' =>  "Наши преимущества",
            'title' =>  "Звонят многим, заказывают у нас. Почему? ",
            'intro' =>  "Фабрика натяжных потолков «Твой стиль» основана в 2003 году является лидером
                        по производству и установке пластиковых окон на Дальнем Востоке."
        ])
        <section class="whyus">
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
                            <li class="whyus__item-text">— Контроль качества</li>
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
                            <img src="/img/signature.png" alt="signature">
                        </div>
                        <div class="socials">
                            <a href="" class="socials__item">
                                <div class="socials__icon socials__icon_vk"></div>
                            </a>
                            <a href="" class="socials__item">
                                <div class="socials__icon socials__icon_youtube"></div>
                            </a>
                            <a href="" class="socials__item red-hoverable">
                                <div class="socials__icon socials__icon_fb"></div>
                            </a>
                            <a href="" class="socials__item">
                                <div class="socials__icon socials__icon_inst"></div>
                            </a>
                            <a href="" class="socials__item">
                                <div class="socials__icon socials__icon_whatsapp"></div>
                            </a>
                        </div>
                    </div>
                    <img class="whyus__item-image" src="/img/img_director.jpg" alt="Директор">
                </div>
            </div>
            <div class="whyus__stat">
                <div class="whyus__stat-item">
                    <p class="whyus__stat-num">15</p>
                    <p class="whyus__stat-text">лет гарантия на наши потолки, с сервисным обсуживанием</p>
                </div>
                <div class="whyus__stat-item">
                    <p class="whyus__stat-num">3</p>
                    <p class="whyus__stat-text">часа устанавливается потолок площадью 16 квадратных метров</p>
                </div>
                <div class="whyus__stat-item">
                    <p class="whyus__stat-num">397</p>
                    <p class="whyus__stat-text">квадратных метров устанавливаем за день, это 26 910 в месяц</p>
                </div>
            </div>
            <div class="whyus__advantages">
                <div class="whyus__advantages-item">
                    <img class="whyus__advantages-icon" src="/img/athome.svg" alt="Договор">
                    <p class="whyus__advantages-text">Договор на дому</p>
                </div>
                <div class="whyus__advantages-item">
                    <img class="whyus__advantages-icon" src="/img/colors.svg" alt="1548 цветов">
                    <p class="whyus__advantages-text">Любой цвет</p>
                </div>
                <div class="whyus__advantages-item">
                    <img class="whyus__advantages-icon" src="/img/sertificates.svg" alt="Сертификаты">
                    <p class="whyus__advantages-text">Сертификаты</p>
                </div>
                <div class="whyus__advantages-item">
                    <img class="whyus__advantages-icon" src="/img/pay.svg" alt="Рассрочка">
                    <p class="whyus__advantages-text">Рассрочка</p>
                </div>
            </div>
        </section>
    @include('common.gui.footer')
@endsection
