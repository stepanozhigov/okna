<section class="section offer snow-wrap">
	<div class="wrapper offer__wrap">
        <h2 class="offer__title">Двойная скидка!</h2>
        <p class="offer__intro">Зафиксируйте скидку прямо сейчас и получите подарок</p>
		<form class="formN js-less" action="{{ route('forms.feedback', $city) }}" method="POST">
            @csrf
            <input type="hidden" name="city" value="{{ $city->bx_code }}">
            <input type="hidden" name="city_name" value="{{ $city->name ?? ''}}">
            <input class="inputN" type="tel" name="phone" required placeholder="Ваш телефон">  
			<button class="buttonN buttonN-light btn-pulse">Зафиксировать скидку</button>
			<p class="formN__agreement">Оставляя контактную информацию, вы соглашаетесь на обработку персональных данных</p>
		</form>
	</div> 
</section>