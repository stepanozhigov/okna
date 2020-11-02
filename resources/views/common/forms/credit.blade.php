<div class="popupN__wrapper">
    <img src="/img/gui/close.svg" alt="" class="popupN__close js-close">
    <h3 class="popupN__title">Получить рассрочку</h3>
	<form action="{{ route('add-lead') }}" method="POST" class="form popupN__form">
		@csrf
		<input type="hidden" name="city" value="{{ $city->bx_code }}">
		<input type="hidden" name="city_name" value="{{ $city->name ?? '' }}">
		<p class="popupN__intro">Оставьте ваши данные и специалист свяжется с вами <span class="intro_red">в&nbspтечение&nbsp5&nbspминут</span></p>
		<input required placeholder="Ваш телефон" name="phone" type="tel" class="inputN popupN__input">
		<button class="buttonN buttonN-red popupN__btn btn-4">Получить рассрочку</button>
		<p class="popupN__agreement">Оставляя контактную информацию, вы соглашаетесь на обработку персональных данных</p>
    </form>
    <div class="popupN__status-send">
        <p class="popupN__send-title">спасибо, <br> заявка отправлена</p>
    </div>
</div>
