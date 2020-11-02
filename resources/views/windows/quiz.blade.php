<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Квиз опрос. Твой стиль</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			@font-face {
				font-family: "Helvetica Neue";
				src: url('/quiz/fonts/helvetica-neue/helvetica-neue_light.woff');
				font-weight: 300;
				font-display: swap;
			}
			@font-face {
				font-family: "Futura PT - Book";
				src: url('/quiz/fonts/futura-pt/futura-pt_book.woff');
				font-weight: 300;
				font-display: swap;
			}
			@font-face {
				font-family: "Playfair Display";
				src: url('/quiz/fonts/playfair-display/playfair-display.woff');
				font-weight: 400;
				font-display: swap;
			}

			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				color: #485058;
				font-family: "Helvetica Neue";
				font-weight: 300;
				font-size: 16px;
				line-height: 1;
			}
			span{
				font-size: inherit;
				font-family: inherit;
				font-weight: inherit;
				line-height: inherit;
			}

			.color_gray {
				color: #808890;
			}
			.color_red {
				color: #dc1414;
			}

			.overtitle {
				font-family: "Futura PT - Book";
				font-size: 14px;
				letter-spacing: 4px;
				line-height: 2;
				text-transform: uppercase;
			}
			.overtitle_gray {
				color: #808890;
				text-align: center;
			}
			.h1 {
				font-family: "Playfair Display";
				font-size: 32px;
				font-weight: 400;
				line-height: 40px;
			}
			.h2 {
				font-family: "Playfair Display";
				font-size: 22px;
				font-weight: 400;
				line-height: 26px;
			}
			.intro {
				color: #485058;
				font-family: "Helvetica Neue";
				font-size: 18px;
				font-weight: 300;
				line-height: 26px;
				/* color: #dc1414; */
			}
			.intro_red {
				color: #dc1414;
			}

			.button {
				display: flex;
			    justify-content: center;
			    align-items: center;
				height: 48px;
				box-shadow: inset 0 -1px 0 #a01414;
				border-radius: 5px;
				background-color: #dc1414;
				border: none;
				color: #ffffff;
				padding: 12px;
				outline: none;
				max-width: 280px;
				justify-self: center;
    			width: 100%;
				font-size: 20px;
				font-family: "Helvetica Neue";
				text-decoration: none;
			}
			.button_gray {
				background-color: #babec2;
				box-shadow: inset 0 -1px 0 #808890;
			}
			.radio {
				display: grid;
				align-items: center;
			    grid-template-columns: 24px 1fr;
			}
			.radio__input {
				display: none;
			}
			.radio__mark {
				width: 16px;
				height: 16px;
				border-radius: 50%;
				border: 1px solid #babec2;
				background-color: #ffffff;
				position: relative;
			}
			.radio__input:checked + .radio__mark:before {
				content: '';
				position: absolute;
				width: 8px;
				height: 8px;
				box-shadow: inset 0 -1px 0 #a01414;
				background-color: #dc1414;
				border-radius: 50%;
			    top: 50%;
			    left: 50%;
			    transform: translate(-50%, -50%);
			}
			.radio__label {
				color: #485058;
				font-family: "Helvetica Neue";
				font-size: 16px;
				font-weight: 300;
				line-height: 24px	;
			}
			.input {
				outline: none;
				border-radius: 4px;
				border: 1px solid #babec2;
				background-color: #ffffff;
				color: #808890;
				font-family: "Helvetica Neue";
				font-size: 18px;
				font-weight: 300;
				line-height: 20px;
				padding: 14px 16px;
			}
			.form {
				display: grid;
				padding-bottom: 30px;
			}
			.form__intro {
				margin-bottom: 26px;
			}
			.form__input {
				margin-bottom: 16px;
			}

			.gifts {
				position: relative;
			}
			.gifts__arrow {
				z-index: 999;
				outline: none;
				position: absolute;
				top: 32%;
				width: 60px;
				height: 60px;
				border: none;
				background-color: rgba(0,0,0,.4);
				border-top-left-radius: 35px;
				border-bottom-left-radius: 35px;
			}
			.gifts__next {
				right: -16px;
			}
			.gifts__prev {
				left: -16px;
				transform: rotate(-180deg);
			}
			.gifts img {
				width: 100%;
			}

			.agreement {
				color: #808890;
				font-size: 12px;
				line-height: 16px;
				max-width: 280px;
			}


			.line{
				border-bottom: solid 1px #e6e8ea;
			}

			.quiz {
				display: grid;
				justify-content: stretch;
				/* max-width: 380px; */
			}
			.quiz__header {
				display: grid;

			}
			.quiz__header_wrapper{
				padding: 15px 0;
			}
			.quiz__header_bottom{
				display: flex;
    			align-items: center;
    			justify-content: space-around;
			}
			.quiz__header_logo{
				display: flex;
				justify-content: center;
			}
			.quiz__header_direction{
				font-weight: 500;
				font-size: 16px;
				line-height: 16px;
				padding-top: 16px;
				text-align: center;

			}
			.quiz__header_phone{
				display: flex;
    			align-items: center;
    			text-decoration: none;
			}
			.quiz__header_phone img{
				margin-right: 8px;
			}
			.quiz__header_callback{
				color: #dc1414;
				position: relative;
			}
			.quiz__header_callback::after {
				position: absolute;
				width: 100%;
				bottom: -2px;
				display: block;
				content: '';
				border-bottom: 1px dashed #dc1414;
				-webkit-transition: bottom .3s;
				transition: bottom .3s;
			}


			.snow-container {
				height: 100%;
				min-height: calc(100vh - 157px);
				overflow: hidden;
			}
			.new_year_quiz{
				position: absolute;
				top: 0;
				z-index: -1;
				min-width: 100%;
				justify-self: center;
			}
			.quiz__preview {
				position: relative;
				display: grid;
				justify-content: center;
				align-items: start;
				text-align: center;
				padding: 56px 16px 40px 16px;
				height: 100%;
				align-content: center;
				grid-auto-rows: min-content;
			}
			.quiz__preview::before {
				content: '';
				position: absolute;
				height: 100%;
				width: 100%;
				bottom: 0;
				top: 0;
				left: 0;
				right: 0;
				background: url('/quiz/background.jpg');
				background-repeat: no-repeat;
				background-size: cover;
				z-index: -1;
			}


			.quiz__preview .overtitle {
				margin-bottom: 8px;
			}
			.quiz__preview .h1 {
				margin-bottom: 48px;
			}
			.quiz__preview .agreement {
				margin-top: 28px;
			}
			.quiz__preview .button {
				z-index: 2;
			}
			.quiz__steps {
				display: grid;
				grid-template-columns: 1fr 2fr;
				grid-template-areas: 'img overtitle'
									 'img title';
				max-width: 380px;
				width: 100%;
				justify-self: center;
			}
			.quiz__steps img {
				grid-area: img;
			}
			.quiz__steps .overtitle {
				grid-area: overtitle;
			    align-self: end;
				min-height: 28px;
			}
			.quiz__steps .h2 {
				grid-area: title;
				align-self: start;
			}
			.quiz__question {
				padding: 48px 16px 32px 16px;
				display: grid;
				border-radius: 16px 16px 0 0;
				background-color: #ffffff;
				box-shadow: 0 8px 16px rgba(0, 0, 0, 0.16), 0 0 8px rgba(0, 0, 0, 0.08), inset 0 -1px 0 rgba(0, 0, 0, 0.12);
				max-width: 380px;
				width: 100%;
				justify-self: center;
				min-height: calc(100vh - 160px);
				grid-auto-rows: min-content;
			}
			.quiz__radios {
			    display: grid;
				row-gap: 16px;
				margin-bottom: 32px;
			}
			.quiz__gifts {
				margin-bottom: 24px;
			}
			.quiz__result {
				align-items: start;
				display: grid;
				justify-content: center;
				min-height: 100vh;
				align-content: center;
			}
			.quiz__result .overtitle {
				margin-bottom: 8px;
			}
			.quiz__result .h2 {
				margin-bottom: 48px;
			}
			.quiz__result .button {
				margin-bottom: 16px;
			}
			.quiz__overtitle{
				font-size: 11px;
			}

		</style>
	</head>
	<body>
		<main id="quiz">
			<section class="quiz">
			<?	$city = $city ?? App\City::find(1); ?>
			<header v-if="step == 0" class="quiz__header">
				<div class="quiz__header_wrapper line">
					<a href="{{ route('windows.main', $city) }}" class="quiz__header_logo">
						<img src="/quiz/logo.svg" class="logo">
					</a>
					<p class="quiz__header_direction">Фабрика натяжных потолков</p>
				</div>
				<div class="quiz__header_wrapper quiz__header_bottom">
					<a href="tel:{{ $city->phone }}" class="quiz__header_phone">
						<img class="phone__icon" src="/img/gui/phone.svg" alt="phone">
						{{ $city->phone }}
					</a>
				</div>
			</header>

			<section v-if="step == 0" class="snow-container" >
				<div class="quiz__preview">
					<p class="overtitle quiz__overtitle">Экспресс расчёт за 30 секунд</p>
					<h1 class="h1">
						Получите расчёт<br> окна или балкона<br> <span class="color_red">и подарок</span>
					</h1>
					<button @click="step = 1" class="button">Получить расчёт</button>
					<p class="agreement">Оставляя контактную информацию, вы соглашаетесь на обработку персональных данных</p>
				</div>
			</section>

				<section v-if="step > 0 && currentQuestion" class="quiz__steps">
					<img :src="currentQuestion.img">
					<p class="overtitle">@{{ currentQuestion.overtitle }}</p>
					<p class="h2" v-html="currentQuestion.title"></p>
				</section>

				<section v-if="step == 1" class="quiz__question">
					<div class="quiz__radios">
						<label class="radio quiz__radio">
							<input v-model="questions.type" class="radio__input" type="radio" name="" value="Окно 1 створка">
							<span class="radio__mark"></span>
							<span class="radio__label">Окно 1 створка</span>
						</label>
						<label class="radio quiz__radio">
							<input v-model="questions.type" class="radio__input" type="radio" name="" value="Окно 2 створки">
							<span class="radio__mark"></span>
							<span class="radio__label">Окно 2 створки</span>
						</label>
						<label class="radio quiz__radio">
							<input v-model="questions.type" class="radio__input" type="radio" name="" value="Окно 3 створки">
							<span class="radio__mark"></span>
							<span class="radio__label">Окно 3 створки</span>
						</label>
						<label class="radio quiz__radio">
							<input v-model="questions.type" class="radio__input" type="radio" name="" value="Отделка балкона">
							<span class="radio__mark"></span>
							<span class="radio__label">Отделка балкона</span>
						</label>
						<label class="radio quiz__radio">
							<input v-model="questions.type" class="radio__input" type="radio" name="" value="Другое">
							<span class="radio__mark"></span>
							<span class="radio__label">Другое</span>
						</label>
					</div>
					<button @click="step = 2" class="button">Далее</button>
				</section>
				<section v-if="step == 2" class="quiz__question">
					<div class="quiz__radios">
						<label class="radio quiz__radio">
							<input v-model="questions.when" class="radio__input" type="radio" name="" value="В ближайшие дни">
							<span class="radio__mark"></span>
							<span class="radio__label">В ближайшие дни</span>
						</label>
						<label class="radio quiz__radio">
							<input v-model="questions.when" class="radio__input" type="radio" name="" value="Через 2 недели">
							<span class="radio__mark"></span>
							<span class="radio__label">Через 2 недели</span>
						</label>
						<label class="radio quiz__radio">
							<input v-model="questions.when" class="radio__input" type="radio" name="" value="Через месяц">
							<span class="radio__mark"></span>
							<span class="radio__label">Через месяц</span>
						</label>
						<label class="radio quiz__radio">
							<input v-model="questions.when" class="radio__input" type="radio" name="" value="Пока прицениваюсь">
							<span class="radio__mark"></span>
							<span class="radio__label">Пока прицениваюсь</span>
						</label>
					</div>
					<button @click="step = 3" class="button">Далее</button>
				</section>
				<section v-if="step == 3" class="quiz__question">
					<div class="gifts quiz__gifts">
						<button  @click.prevent="nextGift" class="gifts__arrow gifts__prev">
					      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10" height="16" viewBox="0 0 10 16">
					        <defs>
					          <path id="83zha" d="M1412.064 530l-6.715-6.14a1.013 1.013 0 0 1 0-1.53c.48-.44 1.27-.44 1.75 0l7.552 6.905a1.013 1.013 0 0 1 0 1.53l-7.551 6.905c-.48.44-1.27.44-1.751 0a1.013 1.013 0 0 1 0-1.53z">
					          </path>
					        </defs>
					        <g>
					          <g transform="translate(-1405 -522)">
					            <use fill="" xlink:href="#83zha"
					            ></use></g></g>
					      </svg>
					    </button>
						<button @click.prevent="nextGift" class="gifts__arrow gifts__next">
					      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10" height="16" viewBox="0 0 10 16">
					        <defs>
					          <path id="83zha" d="M1412.064 530l-6.715-6.14a1.013 1.013 0 0 1 0-1.53c.48-.44 1.27-.44 1.75 0l7.552 6.905a1.013 1.013 0 0 1 0 1.53l-7.551 6.905c-.48.44-1.27.44-1.751 0a1.013 1.013 0 0 1 0-1.53z">
					          </path>
					        </defs>
					        <g>
					          <g transform="translate(-1405 -522)">
					            <use fill="" xlink:href="#83zha"
					            ></use></g></g>
					      </svg>
					    </button>
						<transition name="slide-fade">
							<img @click="nextGift" class="gifts__image" :src="currentGift.img" alt="">
						</transition>
						<div class="gifts__dots">
				      		<span v-for="(gift, id) in gifts" class="gifts__dot" :class="{'gifts__dot_active':1}"></span>
					    </div>
					</div>
					<button @click="step = 4" class="button">Далее</button>
				</section>
				<section v-if="step == 4" class="quiz__question">
					<form class="form quiz__form">
						<p class="intro form__intro">
							Введите номер телефона и получите расчёт на WhatsApp и СМС в течении <span class="intro_red">5&nbspминут.</span>
						</p>
						<the-mask :masked="true" v-model="questions.phone" class="input form__input" type="phone" placeholder="Ваш телефон" required :mask="'+# ### ###-##-##'"></the-mask>
						<button :disabled="!validated" @click.prevent="submit" class="button form__button">Получить расчёт и подарок</button>
					</form>
				</section>
				<section v-if="step == 5" class="quiz__result">
					<p class="overtitle overtitle_gray">Спасибо!</p>
					<h2 class="h2">Ваша заявка принята</h2>
					<a href="https://okna-ts.ru/" class="button">Перейти на сайт</a>
				</section>
			</section>
		</main>
	</body>

	<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->

	<!-- Facebook Pixel Code -->
		<script>
			 !function(f,b,e,v,n,t,s)
			 {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			 n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			 if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			 n.queue=[];t=b.createElement(e);t.async=!0;
			 t.src=v;s=b.getElementsByTagName(e)[0];
			 s.parentNode.insertBefore(t,s)}(window, document,'script',
			 'https://connect.facebook.net/en_US/fbevents.js');
			 fbq('init', '251910762414514');
			 fbq('track', 'PageView');
			</script>
			<noscript><img height="1" width="1" style="display:none"
			 src="https://www.facebook.com/tr?id=251910762414514&ev=PageView&noscript=1"
			/></noscript>
			<!-- End Facebook Pixel Code -->

	<!-- Yandex.Metrika counter -->
		<script type="text/javascript" >
		   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
		   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		   ym(43807824, "init", {
				clickmap:true,
				trackLinks:true,
				accurateTrackBounce:true,
				webvisor:true
		   });
		</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/43807824" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

	<meta name="google-site-verification" content="3k4jsA6Udh8M63iZf2je_vnH-XIkPEeNSPeBe9BxxJ4" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-85472546-5"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-85472546-5');
	</script>


	<script src="https://unpkg.com/vue-the-mask@0.11.1/dist/vue-the-mask.js"></script>
	<script
	  src="https://code.jquery.com/jquery-3.4.1.min.js"
	  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	  crossorigin="anonymous"></script>
	<script type="text/javascript">
		const quiz = new Vue({
			el: '#quiz',
			watch: {
				'questions.phone': function (val) {
					console.log(val.replace(/^8/, '+7'));
					this.questions.phone = val.replace(/^\+\d/, '+7');
					// return val.replace(/^8/, '+7');
				}
			},
			computed: {
				validated: function () {
					var phone = this.questions.phone,
						length = phone.replace(/ /g, '').length;
					return length > 13;
				},
				currentQuestion: function () {
					if (this.steps[this.step - 1] == undefined) {
						return null
					}
					return this.steps[this.step - 1];
				},
				currentGift: function () {
					return this.gifts[this.questions.gift];
				}
			},
			methods: {
				submit: function () {
					this.step = 5;

					fbq('track', 'Lead');

				    if (typeof ga !== 'undefined') {
				        ga.getAll()[0].send('event', 'quiz', 'send');
				    }
				    if (typeof window.yaCounter43807824 !== 'undefined') {
				        window.yaCounter43807824.reachGoal('quiz');
				    }

					$.ajax({
						url:'/forms/quiz',
						dataType: 'json',
						method: 'post',
						data: {
							phone: quiz.questions.phone,
							city: {{$city->bx_code}},
							type: quiz.questions.type,
							when: quiz.questions.when,
							gift: quiz.gifts[quiz.questions.gift].title
						},
						success: function (response) {

						}
					})
				},
				nextGift: function () {
					let count = this.gifts.length,
						next = this.questions.gift + 1;

					if (next > count - 1) {
						next = 0;
					}

					this.questions.gift = next;
				}
			},
			data: {
				step: 0,

				steps: [
						{
							overtitle: 'Вопрос 1/3',
							img: '/quiz/girl_1.jpg',
							title: 'Укажите параметры вашего заказа'
						},
						{
							overtitle: 'Вопрос 2/3',
							img: '/quiz/girl_2.jpg',
							title: 'Когда планируете делать заказ?'
						},
						{
							overtitle: 'Вопрос 3/3',
							img: '/quiz/girl_3.jpg',
							title: 'Выберите подарок<br>к вашему заказу'
						},
						{
							overtitle: '',
							img: '/quiz/girl_4.jpg',
							title: "Получите расчёт<br>вашего заказа<br>и подарок"
						},
				],
				questions: {
					type: 'Окно 1 створка',
					when: 'В ближайшие дни',
					gift: 0,
					phone: ''
				},
				gifts: [
					{
						title: 'Купон 5000 руб',
						img: '/quiz/win_gift_1.jpg'
					},
					{
						title: 'Натяжной потолок',
						img: '/quiz/win_gift_2.jpg'
					},
					{
						title: 'Москитная сетка',
						img: '/quiz/win_gift_3.jpg'
					}
				]
			}
		})
	</script>
</html>
