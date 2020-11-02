<section class="footer-offer">
    <div class="container footer-offer__content">
        <h2 class="footer-offer__title">Запишитесь на&nbsp;замер <span>сегодня</span> и&nbsp;получите дополнительную <span>скидку&nbsp;10%</span></h2>
        <p class="footer-offer__intro hidden-xs">Оставьте контактные данные и наш специалист перезвонит вам <span> в течение 5 минут</span></p>
        <form class="form footer-offer__form" action="{{ route('add-lead') }}">
            @csrf
            <input type="hidden" name="city" value="{{ $city->bx_code }}">
            <input type="hidden" name="city_name" value="{{ $city->name ?? '' }}">
            <input class="input form__input form__input_horiz" type="text" name="name" required placeholder="Ваше имя">
            <input class="input form__input form__input_horiz" type="tel" name="phone" required placeholder="Ваш телефон">
            <button class="button form__button">Вызвать замерщика</button>
			<p class="form__status">Заявка отправлена</p>
        </form>
        <p class="subtext subtext_center form__agreement">Оставляя контактную информацию, вы соглашаетесь на <a href="{{ route('agreement', $city) }}">обработку персональных данных</a> </p>
    </div>
</section>
