
<nav class="mobileMenu" id="mobileMenu">
    <a class="mobileMenu__heading" href="{{ route('windows.main', $city) }}">
        <img class="mobileMenu__logo-icon" src="/img/gui/logo-icon.svg" alt="логотип Твой Стиль">
        <img class="mobileMenu__logo-text" src="/img/gui/logo-text.svg" alt="графема Твой Стиль">
    </a>
    <ul class="mobileMenu__list scrollable">
        <li class="mobileMenu__item mobileMenu__item_category">
            <div class="mobileMenu__item-category">
                <p>Калькулятор</p>
                <div class="mobileMenu__category">
                    <div class="mobileMenu__category-heading">
                        <a class="mobileMenu__link-prev" href="javascript:void(0);"></a>
                        <a class="mobileMenu__link-category" href="javascript:void(0);">Калькулятор</a>
                        <a class="mobileMenu__link-category mobileMenu__link-arrow" href="javascript:void(0);"></a>
                    </div>
                    <ul class="scrollable scrollable">
                        <li class="mobileMenu__item">
                            <a  href="{{ route('calculator', ['city' => $city, 'type' => 'okna']) }}">Окна</a>
                        </li>
                        <li class="mobileMenu__item">
                            <a  href="{{ route('calculator', ['city' => $city, 'type' => 'balkony']) }}">Балконы</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <li class="mobileMenu__item">
            <a  href="{{ route('services', [$city, 'measurements']) }}">
                Бесплатный замер
            </a>
        </li>
        <li class="mobileMenu__item">
            <a  href="{{ route('promos', $city) }}">
                Скидки
            </a>
        </li>
        <li class="mobileMenu__item">
            <a  href="{{ route('photos', $city) }}">
                Фото
            </a>
        </li>
        <li class="mobileMenu__item">
            <a  href="{{ route('contacts', $city) }}">
                Контакты
            </a>
        </li>
        <li class="mobileMenu__item mobileMenu__item_category">
            <div class="mobileMenu__item-category">
                <p>Информация</p>
                <div class="mobileMenu__category">
                    <div class="mobileMenu__category-heading">
                        <a class="mobileMenu__link-prev" href="javascript:void(0);"></a>
                        <a class="mobileMenu__link-category" href="javascript:void(0);">Информация</a>
                        <a class="mobileMenu__link-category mobileMenu__link-arrow" href="javascript:void(0);"></a>
                    </div>
                    <ul class="scrollable">
                        <li class="mobileMenu__item">
                            <a  href="{{ route('services', $city) }}">Услуги</a>
                        </li>
                        <li class="mobileMenu__item">
                            <a href="{{ route('about', $city) }}">О компании</a>
                        </li>
                        <li class="mobileMenu__item">
                            <a href="{{ route('employees', $city) }}">Сотрудники</a>
                        </li>
                        <li class="mobileMenu__item">
                            <a href="{{ route('vacancies', $city) }}">Вакансии</a>
                        </li>
                        <li class="mobileMenu__item">
                            <a href="{{ route('questions', $city) }}">Вопрос-ответ</a>
                        </li>
                        <li class="mobileMenu__item">
                            <a href="{{ route('articles', $city) }}">Статьи</a>
                        </li>
                        <li class="mobileMenu__item">
                            <a href="{{ route('dirMessage', $city) }}">Написать директору</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
    <div class="mobileMenu__social socials">
        <a target="_blank" href="https://www.instagram.com/business_repin/" class="socials__item">
            <div class="socials__icon socials__icon_inst"></div>
        </a>
        <a target="_blank" href="https://vk.com/business.repin" class="socials__item">
            <div class="socials__icon socials__icon_fb"></div>
        </a>
        <a target="_blank" href="https://vk.com/business.repin" class="socials__item">
            <div class="socials__icon socials__icon_vk"></div>
        </a>
        <a target="_blank" href="https://api.whatsapp.com/send?phone=79996516666" class="socials__item">
            <div class="socials__icon socials__icon_ok"></div>
        </a>
        <a target="_blank" href="https://api.whatsapp.com/send?phone=79996516666" class="socials__item">
            <div class="socials__icon socials__icon_youtube"></div>
        </a>
    </div>
</nav>
