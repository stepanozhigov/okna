<template>
    <div class="main-offers">
        <button v-if="offers.length > 1" @click="nextSlide" class="main-offers__arrow main-offers__arrow_prev" name="button">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10" height="16" viewBox="0 0 10 16"><defs><path id="83zha" d="M1412.064 530l-6.715-6.14a1.013 1.013 0 0 1 0-1.53c.48-.44 1.27-.44 1.75 0l7.552 6.905a1.013 1.013 0 0 1 0 1.53l-7.551 6.905c-.48.44-1.27.44-1.751 0a1.013 1.013 0 0 1 0-1.53z"/></defs><g><g transform="translate(-1405 -522)"><use fill="" xlink:href="#83zha"/></g></g></svg>
        </button>
        <section  v-touch:swipe="nextSlide" v-for="(offer, index) in offers" v-if="index == currentOfferIndex" class="main-offer js-offer-slider" :style="{ 'background-image': backgroundImage}">
            <div v-if="offer.type == 'form'" class="main-offer__inner container">
                <p v-html="offer.overtitle" class="text main-offer__overtitle"></p>
                <h1 class="title main-offer__title js-title"></h1>
                <p v-html="offer.text" class="main-offer__subtitle"></p>

                <form class="form main-offer__form mobile-hide" action="/forms/add-lead" id="offer-form"> 
                    <input type="hidden" name="city" v-bind:value="city.bx_code">
                    <input v-model="name" name="name" v-on:focus="pauseSliding" v-on:focusout="initSliding" class="input form__input" type="text"  placeholder="Ваше имя">
                    <input v-model="phone" name="phone" v-on:focus="pauseSliding" v-on:focusout="initSliding" class="input form__input" type="tel"  placeholder="Ваш телефон">
                    <button class="button form__button">Вызвать замерщика</button>
					<p class="form__status">Заявка отправлена, спасибо!</p>  
                    <p class="form__agreement subtext subtext_white">Оставляя контактную информацию, вы соглашаетесь <br> на обработку персональных данных</p>
                </form>
                <button data-src="#popup_callback" class="button main-offer__button mobile-only js-show" data-title="Вызов замерщика" data-button="Вызвать замерщика">Вызвать замерщика</button>

            </div>
            <div v-if="offer.type == 'link'" class="container main-offer__social">
                <a target="_blank" class="button button_insta" :href="offer.link">Подписаться</a>
            </div>
        </section>
        <button v-if="offers.length > 1" @click="nextSlide" class="main-offers__arrow"  name="button">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10" height="16" viewBox="0 0 10 16"><defs><path id="83zha" d="M1412.064 530l-6.715-6.14a1.013 1.013 0 0 1 0-1.53c.48-.44 1.27-.44 1.75 0l7.552 6.905a1.013 1.013 0 0 1 0 1.53l-7.551 6.905c-.48.44-1.27.44-1.751 0a1.013 1.013 0 0 1 0-1.53z"/></defs><g><g transform="translate(-1405 -522)"><use fill="" xlink:href="#83zha"/></g></g></svg>
        </button>
    </div>
</template>

<script>
    import typewriter from 'typewriter-effect/dist/core';

    export default {
        data: function () {
            return {
                currentOfferIndex: 0,
                offerTime: 20000,
                interval: 0,
                name: '',
                phone: ''
            }
        },
        computed: {
            currentOffer: function () {
                return this.offers[this.currentOfferIndex];
            },
            backgroundImage: function () {
                var width = $(document).width(),
                    img = this.currentOffer.background_img;

                if (width <= 1279 && this.currentOffer.background_tablet) {
                    img = this.currentOffer.background_tablet;
                }
                if (width <= 719 && this.currentOffer.background_mobile) {
                    img = this.currentOffer.background_mobile;
                }

                return `url(/storage/${img})`;
            }
        },
        methods: {
            swipe: function(eve) {
                //alert(123);
            },
            nextSlide: function () {
                var nextOfferIndex = this.currentOfferIndex + 1;

                if (this.offers[nextOfferIndex]) {
                    this.currentOfferIndex = nextOfferIndex;
                }
                else {
                    this.currentOfferIndex = 0;
                }

                return true;
            },
            initTypeWriter: function () {
                if (!this.currentOffer.title) return false;

                var titleString = this.currentOffer.title,
                    titleContainer = document.querySelector('.js-title'),
                    arTitles = titleString.split('|');

                new typewriter(titleContainer, {
                    strings: arTitles,
                    autoStart: true,
                    loop: true,
                    delay: 70
                });
            },
            initSliding: function () {
                this.interval = setInterval(this.nextSlide, this.offerTime);
            },
            pauseSliding: function () {
                clearInterval(this.interval);
            }
        },
        props: ['offers', 'city'],
        updated: function () {
            this.initTypeWriter();
        },
        mounted: function () {
            this.initTypeWriter();
           // this.initSliding();
        }
    }
</script>
