<section class="section offer">
	<div class="wrapper offer__wrap">
        <div class="offer__wrapper">
            <h2 class="offer__title">Двойная скидка!</h2>
            <p class="offer__intro">Успейте только до 30 ноября!</p>
            <form class="formN js-less" action="{{ route('forms.feedback', $city) }}" method="POST">
                @csrf
                <input type="hidden" name="city" value="{{ $city->bx_code }}">
                <input type="hidden" name="city_name" value="{{ $city->name ?? ''}}">
                <input class="inputN" type="tel" name="phone" required placeholder="Введите телефон">
                <button class="buttonN buttonN-light btn-pulse">Зафиксировать скидку</button>
                <p class="formN__agreement">Оставляя контактную информацию, вы соглашаетесь <span class="formN__agreement_personal">на обработку персональных данных</span></p>
            </form>
        </div>
    </div>
</section>
