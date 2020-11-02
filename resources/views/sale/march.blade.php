<section class="section offer">
	<div class="wrapper offer__wrap">
        <img class="offer__img lazyload" src="/img/templates/windows/offer/march/flowers-lg.png" loading="lazy" alt="Увеличиваем скидки до 30%">
        <div class="offer__wrapper">
            <h2 class="offer__title">Скидки до 31 марта!</h2>
            <p class="offer__intro">Женский месяц, но скидки и подарки дарим всем</p>
            <form class="formN js-less" action="{{ route('forms.feedback', $city) }}" method="POST">
                @csrf
                <input type="hidden" name="city" value="{{ $city->bx_code }}">
                <input type="hidden" name="city_name" value="{{ $city->name ?? ''}}">
                <input class="inputN" type="tel" name="phone" required placeholder="Ваш телефон">  
                <button class="buttonN buttonN-light btn-pulse">Зафиксировать скидку</button>
                <p class="formN__agreement">Оставляя контактную информацию, вы соглашаетесь на обработку персональных данных</p>
            </form>
        </div>
    </div> 
</section>