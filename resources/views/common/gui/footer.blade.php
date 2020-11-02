@empty($skipOffer)
    @include('common.footer-offer')
@endempty

<div class="popupN" id="popup_callback">
    @include('common.forms.callback')
</div>

<div class="popupN popupN-sale" id="popup_sale">
    @include('common.forms.sale')
</div>

<div class="popupN" id="popup_whatsapp">
    @include('common.forms.whatsapp')
</div>

<div class="popupN" id="credit_popup">
    @include('common.forms.credit')
</div>

<div class="popupN" id="popup_survey">
    @include('common.forms.survey')
</div>

<div class="popupN" id="popup_alert_form">
    @include('common.forms.alert_form')
</div>

<div id="overlay" class="overlay js-close"></div>
</main>

<footer role="contentinfo" class="footer">
    <div class="footer__row container">
        <div class="footer__contacts">

            <a href="tel:{{ $city->phone }}" class="footer__phone footer__contact_item red-hoverable">
                <svg class="phone__icon" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 54.1 (76490) - https://sketchapp.com -->
                    <title>phone</title>
                    <desc>Created with Sketch.</desc>
                    <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Menu-/-1440-/-Footer" transform="translate(-130.000000, -47.000000)" fill="#FFFFFF">
                            <path d="M139.868442,47 C141.293397,47 142.447111,48.11375 142.49211,49.5 L130.00875,49.5 C130.052498,48.11375 131.206212,47 132.631168,47 L139.868442,47 Z M130.00025,62.000125 L130.00025,50.750125 L142.499859,50.750125 L142.499859,62.000125 L130.00025,62.000125 Z M130,64.42 L130,63.25 L142.499609,63.25 L142.499609,64.42 C142.499609,65.845 141.322146,67 139.868442,67 L132.631168,67 C131.178713,67 130,65.845 130,64.42 Z M134.999844,64.5 C134.654855,64.5 134.374863,64.78 134.374863,65.125 C134.374863,65.47 134.654855,65.75 134.999844,65.75 L137.499766,65.75 C137.844755,65.75 138.124746,65.47 138.124746,65.125 C138.124746,64.78 137.844755,64.5 137.499766,64.5 L134.999844,64.5 Z M145.072154,51.928 C146.377113,53.228 147.195838,55.01675 147.195838,57.0005 C147.195838,58.9855 146.377113,60.77175 145.072154,62.073 L144.178432,61.178 C145.258398,60.1055 145.945877,58.6405 145.945877,57.0005 C145.945877,55.3605 145.258398,53.89425 144.178432,52.823 L145.072154,51.928 Z M146.927596,50.0725 C148.776288,51.75375 149.952501,54.1575 150,56.83625 L150,57.16375 C149.952501,59.84375 148.776288,62.24625 146.927596,63.9275 L146.043874,63.045 C147.705072,61.55625 148.757539,59.40125 148.757539,57 C148.757539,54.59875 147.705072,52.44375 146.043874,50.95625 L146.927596,50.0725 Z" id="phone"></path>
                        </g>
                    </g>
                </svg>
                {{ $city->phone }}
                <span class="footer__time">Круглосуточно | Бесплатно</span>
            </a>
            <a href="mailto:{{ $city->email }}" class="footer__mail footer__contact_item  red-hoverable">
                <svg class="phone__icon" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 54.1 (76490) - https://sketchapp.com -->
                    <title>mail</title>
                    <desc>Created with Sketch.</desc>
                    <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Menu-/-1440-/-Footer" transform="translate(-130.000000, -109.000000)" fill="#FFFFFF">
                            <path d="M131.391625,113.498694 C130.747875,113.086199 130.000375,112.21246 130.000375,111.702466 L130.000375,111.499969 C130.000375,110.119986 131.119125,109 132.500375,109 L143.750375,109 C145.130375,109 146.250375,110.119986 146.250375,111.499969 C146.250375,112.306209 145.532875,113.062449 144.864125,113.501194 L144.002875,114.062437 C142.762875,114.871177 141.520375,115.679917 140.294125,116.493656 L139.926625,116.741153 C139.429125,117.082399 138.597875,117.653642 138.115375,117.653642 C137.651625,117.653642 136.820375,117.082399 136.324125,116.742403 L135.960375,116.494906 C134.965375,115.836165 133.962875,115.181173 132.962875,114.527431 L131.391625,113.498694 Z M146.25,120.250359 C146.25,121.630342 145.13,122.750328 143.75,122.750328 L132.5,122.750328 C131.12,122.750328 130,121.630342 130,120.250359 L130,113.976688 C130.2475,114.211685 130.4975,114.410432 130.71125,114.547931 L132.27875,115.574168 C133.2775,116.22541 134.2775,116.880401 135.27375,117.540393 L135.61625,117.77289 C136.35,118.276634 137.26375,118.904126 138.13375,118.904126 C138.98625,118.904126 139.9,118.276634 140.63375,117.77164 L140.98,117.537893 C142.20875,116.724153 143.4475,115.915414 144.68625,115.110424 L145.5475,114.547931 C145.80875,114.376683 146.03625,114.182935 146.25,113.984188 L146.25,120.250359 Z M147.5,115.313921 C148.925,115.603917 150,116.865152 150,118.375133 L150,125.875039 C150,127.598768 148.5975,129 146.875,129 L136.875,129 C135.1525,129 133.75,127.598768 133.75,125.875039 L133.75,124.000062 L135,124.000062 L135,125.875039 C135,126.908776 135.84125,127.750016 136.875,127.750016 L146.875,127.750016 C147.90875,127.750016 148.75,126.908776 148.75,125.875039 L148.75,118.375133 C148.75,117.561393 148.22625,116.873902 147.5,116.615155 L147.5,115.313921 Z" id="mail"></path>
                        </g>
                    </g>
                </svg>
                {{ $city->email }}
            </a>

            <a href="{{ route('contacts', $city) }}" class="footer__offices footer__contact_item red-hoverable">
                <svg class="footer__icon" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>geo</title>
                    <desc>Created with Sketch.</desc>
                    <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Menu-/-1440-/-Footer" transform="translate(-130.000000, -174.000000)" fill="#FFFFFF">
                            <path d="M148.2925,175.7025 C149.425,176.8325 150,178.2225 150,179.83375 C150,180.63625 149.7975,181.5625 149.4,182.5875 C149.00625,183.60125 148.52375,184.5625 147.96625,185.44875 C147.41125,186.33 146.8625,187.155 146.32125,187.9225 C145.77625,188.69375 145.31,189.3125 144.93375,189.7625 L144.155,190.59125 L143.39125,189.70875 C143.14375,189.425 142.68625,188.84125 142.025,187.9675 C141.8175,187.69125 141.63125,187.4225 141.43875,187.15125 C141.2,187.5925 140.9575,188.03125 140.68625,188.44875 C139.995,189.51375 139.3125,190.51125 138.6375,191.43875 C137.965,192.365 137.39625,193.0975 136.93125,193.6375 L136.57875,194 C136.46125,193.86875 136.33,193.7225 136.185,193.56125 C135.88,193.22 135.315,192.52125 134.5,191.4725 C133.6875,190.42875 132.97875,189.415 132.37125,188.43375 C131.77,187.4625 131.22,186.36 130.72375,185.12875 C130.23875,183.9225 130,182.87625 130,181.9925 C130,180.21875 130.635,178.725 131.91625,177.48125 C133.1975,176.24 134.73625,175.625 136.5625,175.625 C137.6525,175.625 138.62875,175.8725 139.52125,176.315 C139.6825,176.10625 139.83625,175.895 140.03,175.7025 C141.16,174.5725 142.55125,174 144.16125,174 C145.7725,174 147.1625,174.5725 148.2925,175.7025 Z M148.23375,182.13625 C148.57625,181.255 148.75,180.48 148.75,179.83375 C148.75,178.54875 148.31125,177.48625 147.40875,176.58625 C146.51,175.6875 145.4475,175.25 144.16125,175.25 C142.87625,175.25 141.81375,175.6875 140.9125,176.58625 C140.78625,176.7125 140.69125,176.84875 140.58375,176.97875 C140.79375,177.14125 141.01,177.29 141.20625,177.48125 C141.4,177.67 141.55,177.875 141.715,178.07375 C141.80875,177.94375 141.90625,177.8175 142.0225,177.70125 C143.18,176.5475 145.1425,176.5475 146.30125,177.70125 C146.87875,178.27875 147.18375,179.01625 147.18375,179.83375 C147.18375,180.65125 146.87875,181.38625 146.3025,181.965 L146.30125,181.96625 C145.7225,182.5425 144.9825,182.8475 144.16125,182.8475 C143.78,182.8475 143.42,182.77625 143.0825,182.6475 C142.99875,183.375 142.78125,184.1875 142.4225,185.0825 C142.315,185.3525 142.1825,185.605 142.06375,185.8675 C142.3625,186.31 142.67875,186.7575 143.0225,187.21375 C143.54,187.89875 143.9275,188.4 144.1825,188.70875 C144.48625,188.32625 144.86625,187.815 145.3,187.2025 C145.83,186.45125 146.36625,185.645 146.90875,184.7825 C147.425,183.965 147.87,183.075 148.23375,182.13625 Z M143.04875,181.17625 C143.7475,181.75 144.76375,181.73625 145.4175,181.08125 C145.765,180.73375 145.93375,180.325 145.93375,179.83375 C145.93375,179.3425 145.765,178.9325 145.4175,178.58625 C145.06875,178.23875 144.6575,178.06875 144.16125,178.06875 C143.665,178.06875 143.25375,178.23875 142.905,178.58625 C142.7025,178.7875 142.57875,179.01875 142.495,179.26625 C142.78625,179.85875 142.96625,180.49625 143.04875,181.17625 Z M138.7,184.05625 C139.2825,183.49 139.58,182.7925 139.58,181.9925 C139.58,181.19 139.2825,180.49375 138.7,179.92625 C138.11375,179.35875 137.3925,179.07125 136.5625,179.07125 C135.73125,179.07125 135.00875,179.35875 134.425,179.92625 C133.84,180.49375 133.54375,181.19 133.54375,181.9925 C133.54375,182.7925 133.84,183.49 134.425,184.05625 C135.00875,184.6225 135.73125,184.91375 136.5625,184.91375 C137.3925,184.91375 138.11375,184.6225 138.7,184.05625 Z" id="geo"></path>
                        </g>
                    </g>
                </svg>
                Наши офисы
            </a>
            <div class="socials">
                @foreach($city->socials as $social)
                    @if ($social->direction_id == 1)
                        <a target="_blank" href="{{ $social->link }}" class="socials__item">
                            <div class="socials__icon socials__icon_{{ $social->icon }}"></div>
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
        <nav class="footer__nav"> 
            <div class="nav-group footer__item">
                <a href="javascript:void(0);" class="card-title footer__title js-open">Каталог</a>
                <a href="{{ route('catalogue', ['city' => $city, 'type' => 'balkoni']) }}" class="red-hoverable subtext subtext_white nav-group__item">Балконы</a>
                <a href="{{ route('catalogue', ['city' => $city, 'type' => 'okna']) }}" class="red-hoverable subtext subtext_white nav-group__item">Окна</a>
                <!--<a href="{{ route('calculator', ['city' => $city, 'type' => 'dveri']) }}" class="red-hoverable subtext subtext_white nav-group__item">Двери</a>
                <a href="{{ route('calculator', ['city' => $city, 'type' => 'peregorodki']) }}" class="red-hoverable subtext subtext_white nav-group__item">Перегородки</a>
                <a href="{{ route('calculator', ['city' => $city, 'type' => 'zhalyuzi']) }}" class="red-hoverable subtext subtext_white nav-group__item">Жалюзи</a>-->
            </div>
            <div class="nav-group footer__item">
                <a href="javascript:void(0);" class="card-title footer__title js-open">Услуги</a>
                <a href="{{ route('services', ['city' => $city, 'type' => 'measurements']) }}" class="red-hoverable subtext subtext_white nav-group__item">Бесплатный замер</a>
                <a href="{{ route('services', ['city' => $city, 'type' => 'install']) }}" class="red-hoverable subtext subtext_white nav-group__item">Установка</a>
                <a href="{{ route('services', ['city' => $city, 'type' => 'delivery']) }}" class="red-hoverable subtext subtext_white nav-group__item">Доставка</a>
                <a href="{{ route('services', ['city' => $city, 'type' => 'repair']) }}" class="red-hoverable subtext subtext_white nav-group__item">Ремонт</a>
            </div>
            <div class="nav-group footer__item">
                <a href="javascript:void(0);" class="card-title footer__title js-open">Наши работы</a>
                <a href="{{ route('photos', ['city' => $city, 'type' => 'peregorodki']) }}" class="red-hoverable subtext subtext_white nav-group__item">Перегородки</a>
                <a href="{{ route('photos', ['city' => $city, 'type' => 'zhalyuzi']) }}" class="red-hoverable subtext subtext_white nav-group__item">Жалюзи</a>
                <a href="{{ route('photos', ['city' => $city, 'type' => 'balkony']) }}" class="red-hoverable subtext subtext_white nav-group__item">Балконы</a>
                <a href="{{ route('photos', ['city' => $city, 'type' => 'dveri']) }}" class="red-hoverable subtext subtext_white nav-group__item">Двери</a>
                <a href="{{ route('photos', ['city' => $city, 'type' => 'okna']) }}" class="red-hoverable subtext subtext_white nav-group__item">Окна</a>
            </div>
            <div class="nav-group footer__item">
                <a href="javascript:void(0);" class="card-title footer__title js-open">Акции</a>
                <a href="{{ route('services', ['city' => $city, 'type' => 'credit']) }}" class="red-hoverable subtext subtext_white nav-group__item">Рассрочка</a>
                <a href="{{ route('promos', request()->route()->city) }}" class="red-hoverable subtext subtext_white nav-group__item">Скидки</a>
            </div>
            <div class="nav-group footer__item">
                <a href="javascript:void(0);" class="card-title footer__title js-open">Информация</a>
                <a href="{{ route('dirMessage', request()->route()->city) }}" class="red-hoverable subtext subtext_white nav-group__item">Написать директору</a>
                <a href="{{ route('about', request()->route()->city) }}" class="red-hoverable subtext subtext_white nav-group__item">О компании</a>
                <a href="{{ route('contacts', request()->route()->city) }}" class="red-hoverable subtext subtext_white nav-group__item">Контакты</a>
                <a href="{{ route('reviews', request()->route()->city) }}" class="red-hoverable subtext subtext_white nav-group__item">Отзывы</a>
                <a href="{{ route('articles', request()->route()->city) }}" class="red-hoverable subtext subtext_white nav-group__item">Статьи</a>
            </div>
        </nav>
    </div>
    <div class="footer__row footer__row_dark">
        <div class="container footer__copyright">
            <div class="footer__company">
                <a href="{{ route('ceilings', $city) }}" class="logo logo_white footer__logo">
                    <img class="logo__icon" src="/img/gui/logo-icon.svg" alt="логотип Твой Стиль">
                    <img class="logo__text" src="/img/gui/logo-text.svg" alt="графема Твой Стиль">
                </a>
                <div class="footer__directions dropdown">
                    <a class="dropdown__item_link"><img class="dropdown__arrow" src="/img/gui/arrow.svg" alt="">Фабрика окон</a>
                    <div class="dropdown__content">
                        @foreach ($directions as $direction)
                            <a href="{{ $direction->site  ?? '' }}" class="text dropdown__item dropdown__item_bordered  red-hoverable">{!! $direction->name !!}</a>
                        @endforeach
                        <p class="dropdown__title">Другие направления</p>
                        <a class="text dropdown__item dropdown__item_active"><img class="dropdown__arrow" src="/img/gui/arrow.svg" alt="">{!! $currentDirection->name !!}</a>
                    </div>
                </div>
            </div>
            <p class="footer__year"><span>&copy;  2003 – {{ date('Y') }}  ООО «Твой Стиль» <br>Все права защищены. </span></p>

			<a data-src="#popup_survey" class="footer__survey js-showup hidden-xs" href="javascript:void(0);">Оценить сайт</a>
            <p class="footer__dev">
                Разработка и продвижение <a href="http://trend-p.ru" target="_blank" class="red-hoverable" target="_blank">TREND PRO</a>
            </p>
        </div>
    </div>
</footer>
