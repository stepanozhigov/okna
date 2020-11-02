<div class="popupN__wrapper">
    <img data-lazy-src="/img/gui/close.svg" alt="close" class="popupN__close js-close">
    <div class="popupN-sale__general">
        <h3 class="popupN__title">Сделаем дешевле!</h3>
        <form action="{{ route('add-lead') }}" method="POST" class="form popupN__form">
            <p class="popupN__intro">Оставьте заявку на скидку, если вы нашли дешевле, и получите 500 рублей.</p>
            @csrf
            <input type="hidden" name="city" value="{{ $city->bx_code }}">
            <input type="hidden" name="city_name" value="{{ $city->name ?? '' }}">
            <input type="hidden" name="name" value="Получить скидку">
            <input required placeholder="Ваш телефон" name="phone" type="tel" class="inputN popupN__input">
            <button class="buttonN buttonN-red popupN-sale__btn btn-4">Получить скидку</button>
            <p class="popupN__agreement">Оставляя контактную информацию, вы соглашаетесь на <u>обработку персональных данных</u></p>
        </form>
        <div class="popupN__status-send">
            <p class="popupN__send-title">спасибо, <br> заявка отправлена</p>
        </div>
    </div>
    <picture>
        <source data-srcset="/img/templates/ceilings/form/sale_popap.webp" type="image/webp">
        <img data-src="/img/templates/gui/ceilings/sale_popap.png" alt="sale" loading="lazy" class="popupN-sale__img lazyload">
    </picture>
</div>