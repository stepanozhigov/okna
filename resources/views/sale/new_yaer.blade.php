<section class="section texture_sand snow-wrap">
		<div class="wrapper offer">
            <h2 class="offer__title"><b>Новогодняя скидка!</b></h2>
            <p class="offer__intro">Только до 31 января</p>
            <picture>
                <source type="image/webp" media="(max-width: 767px)" data-srcset="/img/templates/ceilings/offer/new_year/double_sale_sm.webp">
                <source type="image/png" media="(max-width: 767px)" data-srcset="/img/templates/ceilings/offer/new_year/double_sale_sm.png">
                <source type="image/webp" media="(min-width: 768px)" data-srcset="/img/templates/ceilings/offer/new_year/double_sale_lg.webp">
                <source type="image/png" media="(min-width: 768px)" data-srcset="/img/templates/ceilings/offer/new_year/double_sale_lg.png">
                <img class="offer__img lazyload" data-src="/img/templates/ceilings/offer/new_year/double_sale_lg.png" loading="lazy" alt="Увеличиваем скидки до 60%">
            </picture>
			
			<form class="formN js-less" action="{{ route('forms.feedback', $city) }}" method="POST">
                @csrf
                <input type="hidden" name="city" value="{{ $city->bx_code }}">
                <input type="hidden" name="city_name" value="{{ $city->name ?? '' }}">
                <input class="inputN" type="tel" name="phone" required placeholder="Ваш телефон">  
				<button class="buttonN buttonN-light btn-pulse">Получить скидку</button>
				<p class="formN__agreement">Оставляя контактную информацию, вы соглашаетесь на обработку персональных данных</p>
			</form>
		</div> 
    </section>