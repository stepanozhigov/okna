<style media="screen">
	.widget {
		font-family: 'Roboto';
		position: fixed;
		right: 32px;
		bottom: 32px;
	    z-index: 999;
	}

	.widget__gift {
		width: 105px;
    	height: 105px;
		cursor: pointer;
		animation: phone-outer 3000ms infinite;
		border-radius: 50%;
		transform: translate3d(0, 0, 0) scale(1);
		cursor: pointer;
		background: transparent;
		font-size: 25vmin;
	}
	.widget__close {
		cursor: pointer;
	    height: 18px;
	    opacity: 0.8;
	    position: absolute;
	    right: 0px;
	    top: -25px;
	    width: 18px;
	    z-index: 99;
	    background-color: rgba(170, 170, 170, 0.8);
	    border-radius: 50%;
	}
	.widget__close:before, .widget__close:after {
	    background-color: #fff;
	    content: ' ';
	    height: 14px;
	    left: 8px;
	    position: absolute;
	    width: 1px;
	    top: 2px;
	}
	.widget__close:before {
	    transform: rotate(45deg);
	}
	.widget__close:after {
	    -webkit-transform: rotate(-45deg);
	    transform: rotate(-45deg);
	}
	.widget__form, .widget__success {
		display: grid;
		justify-items: center;
		background-color: #fff;
	    border-radius: 10px;
	    border: none;
	    box-sizing: border-box;
	    padding: 15px;
	    position: relative;
	    width: 230px;
	    height: 350px;
	    z-index: 2;
	    box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.1);
	    justify-content: center;
		text-align: center;
	}
	.widget__success {
		display: flex;
    	flex-direction: column;
	}
	.widget__title {
		color: #DC1414;
	    font-size: 23px;
	    line-height: 25px;
	    font-weight: 700;
	    margin-bottom: 17px;
	}
	.widget__intro {
		color: #555;
		font-size: 15px;
		line-height: 18px;
		margin: 0;
		padding: 0;
		text-align: center;
		font-weight: 300;
		margin-bottom: 16px;
	}
	.widget__img {
		margin-top: -100px;
	}
	.widget__input {
		outline: none;
		background: #FFF;
		border: 1px solid #DADADA;
		border-radius: 3px;
		box-sizing: border-box;
		color: #555;
		font-size: 16px;
		padding: 9px;
		height: 36px;
		width: 100%;
		max-width: 195px;
		margin-bottom: 6px;
		text-align: center;
		font-family: 'Roboto';
		font-weight: 300;
		font-size: 14px;
	}
	.widget__button {
		background: #DC1414;
		border: none;
		border-radius: 3px;
		box-sizing: border-box;
		color: #fff;
		font-size: 16px;
		padding: 9px;
		height: 36px;
		width: 100%;
		max-width: 195px;
	}
	@media screen and (max-width: 640px) {
		.widget_opened {
			top: 50%;
		    left: 50%;
		    transform: translate(-50%, -50%);
			bottom: initial;
			right: initial;
		}
		.widget__gift {
			width: 75px;
    		height: 75px;
		}
		.widget__close {
			height: 33px;
			right: -24px;
    		top: -40px;
		    width: 32px;
		}
		.widget__close:before, .widget__close:after {
		    background-color: #fff;
		    content: ' ';
		    height: 19px;
		    left: 15px;
		    position: absolute;
		    width: 2px;
		    top: 7px;
		}
	}

	@keyframes phone-outer {
		0% {
		    transform: translate3d(0, 0, 0) scale(1);
		    box-shadow: 0 0 0 0em rgba(28, 23, 25, 0);
		}
		33.3333% {
		    transform: translate3d(0, 0, 0) scale(1.1);
		    box-shadow: 0 0 0 0em rgba(28, 23, 25, 0.15);
		}
		66.6666% {
		    transform: translate3d(0, 0, 0) scale(1);
		    box-shadow: 0 0 0 0.5em rgba(28, 23, 25, 0);
		}
		100% {
		    transform: translate3d(0, 0, 0) scale(1);
		    box-shadow: 0 0 0 0em rgba(28, 23, 25, 0);
		}
	}
</style>

<template>
	<section class="widget" :class="{widget_opened: state == 'opened', hidden: hidden == true}">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
		<img @click="state = 'opened'" v-if="state == 'closed'" src="/img/gift.png" alt="" class="widget__gift">
		<form @submit.prevent="submit" v-if="state == 'opened'" class="widget__form">
			<span @click="state = 'closed'" class="widget__close"></span>
			<img class="widget__img" src="/img/gift_icon.png" alt="">
			<p class="widget__title">Купон на 5000 ₽ в&nbspподарок!</p>
			<p class="widget__intro">Оставьте заявку сегодня и&nbspменеджер активирует ваш подарочный купон</p>
			<!-- <input v-model="fio" class="widget__input" type="text" placeholder="Укажите имя"> -->
			<input autocomplete="off" v-model="phone" v-mask="{
				mask: '+7 V99 999-99-99',
				oncomplete: enable,
				definitions: { 
			        'V': {
			            validator: '[9]' 
			        }
			    },
				onincomplete: disable
			}" class="widget__input" type="text" placeholder="Укажите телефон">
			<!-- <the-mask :masked="true" type="tel" v-model="phone" class="widget__input" :mask="'8 ### ### ## ##'"></the-mask> -->

			<button :disabled="!phoneValidated" class="widget__button">Отправить заявку</button>

		</form>
		<div v-if="state == 'success'" class="widget__success">
			<span @click="state = 'closed'" class="widget__close"></span>
			<p class="widget__title">Спасибо!</p>
			<p class="widget__intro">Ваша заявка принята, менеджер свяжется с вами в ближайшее время</p>

		</div>
	</section>
</template>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script type="text/javascript">
	import Vue from 'vue';
	const VueInputMask = require('vue-inputmask').default;
	Vue.use(VueInputMask);
	console.log(VueInputMask);
	export default {
		data: function () {
			return {
				state: 'closed',
				fio: '',
				phone: '',
				phoneValidated: false,
				hidden: false,
			}
		},
		mounted: function (){
			if(Vue.cookie.get('form_send')){
				this.hidden = true
			}
		},
		methods: { 
			onBeforeWrite: function (event, buffer) {
				buffer[0] = '+';
				buffer[1] = 7;
			},
			enable: function () {
				this.phoneValidated = true;
			},
			disable: function () {
				this.phoneValidated = false;
			},
			submit: function (event) {
				event.preventDefault();
				event.stopPropagation();
				console.log(event);
				this.state = 'success';
				fbq('track', 'Lead');

			    if (typeof ga !== 'undefined') {
			        ga.getAll()[0].send('event', 'callback', 'start');
			    }
			    if (typeof window.yaCounter43807824 !== 'undefined') {
			        window.yaCounter43807824.reachGoal('b24-call');
			    }
				var $this = this;

				$.ajax({
					url: '/forms/feedback',
					method: 'post',
					dataType: 'json',
					data: {
						// name: $this.fio,
						phone: $this.phone,
						city: window.city.bx_code
					},
					success: function (response) {
						
					}
				})

				Vue.cookie.set('form_send', true, 1);

				setTimeout(() => {
					this.$nextTick(function () {
						this.hidden = true
					})
				}, 2000);

			}
		}
	}
</script>
