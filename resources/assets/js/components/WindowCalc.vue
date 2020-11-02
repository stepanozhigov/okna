<template>
<div class="calculator__inner">
    <div class="calculator__types">
        <label class="calculator__type active">
            <input value="3x" v-model="currentType" class="calculator__type-input"  type="radio" name="type">
            <img class="calculator__type-image" width="31" height="24" src="/img/windows/calculator/windows/win-calc_01.svg" alt="">
            <p class="calculator__type-name">Трёхстворчатое <br> окно</p>
        </label>
        <label class="calculator__type">
            <input value="2x" v-model="currentType" class="calculator__type-input"  type="radio" name="type">
            <img class="calculator__type-image" width="21" height="24" src="/img/windows/calculator/windows/win-calc_02.svg" alt="">
            <p class="calculator__type-name">Двустворчатое <br> окно</p>
        </label>
        <label class="calculator__type">
            <input value="bb-2x" v-model="currentType" class="calculator__type-input"  type="radio" name="type">
            <img class="calculator__type-image" width="32" height="32" src="/img/windows/calculator/windows/win-calc_04.svg" alt="">
            <p class="calculator__type-name">Балконный блок <br> двустворчатый</p>
        </label>
        <label class="calculator__type">
            <input value="bb-1x" v-model="currentType" class="calculator__type-input"  type="radio" name="type">
            <img class="calculator__type-image" width="22" height="32" src="/img/windows/calculator/windows/win-calc_05.svg" alt="">
            <p class="calculator__type-name">Балконный блок <br> одностворчатый</p>
        </label>
    </div>
    <div class="calculator__content">
        <div class="calculator__main calculator__main_tricuspid active">
            <img class="calculator__image" src="/img/windows/calculator/windows/win-calc-big_01.png" alt="">
            <img class="calculator__window-left" src="/img/windows/calculator/windows/win-calc-big_011.png" alt="">
            <img class="calculator__window-right" src="/img/windows/calculator/windows/win-calc-big_012.png" alt="">
            <div class="calculator__width">
                <input v-model="width" type="number" class="calculator__input" name="height[]">
                <span class="calculator__input-unit">мм</span>
                <span class="calculator__input-val">{{width}}</span>
            </div>
            <div class="calculator__height">
                <input v-model="height" type="number" class="calculator__input" name="height[]">
                <span class="calculator__input-unit">мм</span>
                <span class="calculator__input-val">{{height}}</span>
            </div>
        </div>
        <div class="calculator__main calculator__main_bivalve ">
            <img class="calculator__image" src="/img/windows/calculator/windows/win-calc-big_02.png" alt="">
            <img class="calculator__window-left" src="/img/windows/calculator/windows/win-calc-big_021.png" alt="">
            <div class="calculator__width">
                <input v-model="width" type="number" class="calculator__input" name="height[]">
                <span class="calculator__input-unit">мм</span>
                <span class="calculator__input-val">{{width}}</span>
            </div>
            <div class="calculator__height">
                <input v-model="height" type="number" class="calculator__input" name="height[]">
                <span class="calculator__input-unit">мм</span>
                <span class="calculator__input-val">{{height}}</span>
            </div>
        </div>
        <div class="calculator__main calculator__main_block-bivalve">
            <img class="calculator__image" src="/img/windows/calculator/windows/win-calc-big_04.png" alt="">
            <img class="calculator__window-left" src="/img/windows/calculator/windows/win-calc-big_041.png" alt="">
            <div class="calculator__shadow calculator__shadow_horizontal"></div>
            <div class="calculator__shadow calculator__shadow_vertical"></div>
            <div class="calculator__width">
                <input v-model="width" type="number" class="calculator__input" name="height[]">
                <span class="calculator__input-unit">мм</span>
                <span class="calculator__input-val">{{width}}</span>
            </div>
            <div class="calculator__height">
                <input v-model="height" type="number" class="calculator__input" name="height[]">
                <span class="calculator__input-unit">мм</span>
                <span class="calculator__input-val">{{height}}</span>
            </div>
        </div>
        <div class="calculator__main calculator__main_block-single">
            <img class="calculator__image" src="/img/windows/calculator/windows/win-calc-big_05.png" alt="">
            <img class="calculator__window-left" src="/img/windows/calculator/windows/win-calc-big_051.png" alt="">
            <div class="calculator__shadow calculator__shadow_horizontal"></div>
            <div class="calculator__shadow calculator__shadow_vertical"></div>
            <div class="calculator__width">
                <input v-model="width" type="number" class="calculator__input" name="height[]">
                <span class="calculator__input-unit">мм</span>
                <span class="calculator__input-val">{{width}}</span>
            </div>
            <div class="calculator__height">
                <input v-model="height" type="number" class="calculator__input" name="height[]">
                <span class="calculator__input-unit">мм</span>
                <span class="calculator__input-val">{{height}}</span>
            </div>
        </div>
        <div class="calculator__info">
            <div class="calculator__params">
                <h3 class="calculator__title">Параметры окна</h3>
                <p class="calculator__text">Указаны стандартные размеры оконных рам. Введите свои параметры для расчёта стоимости.</p>
                <div class="calculator__size">
                    <p class="calculator__size-name">Ширина</p>
                    <div class="calculator__width">
                        <input v-model="width" type="number" pattern="\d*" class="calculator__input" name="height[]">
                        <span class="calculator__input-unit">мм</span>
                    </div>
                </div>
                <div class="calculator__size">
                <p class="calculator__size-name">Высота</p>
                    <div class="calculator__height">
                        <input v-model="height" type="number" pattern="\d*" class="calculator__input" name="height[]">
                        <span class="calculator__input-unit">мм</span>
                    </div>
                </div>
            </div>
            <div class="calculator__service">
                <h3 class="calculator__title">Сервис</h3>
                <label class="checkbox">
                    <input v-model="shipping" name="shipping" type="checkbox" class="checkbox__input">
                    <span class=" checkbox__mark"></span>
                     Доставка
                </label>
                <label class="checkbox">
                    <input v-model="install" name="install" type="checkbox" class="checkbox__input">
                    <span class=" checkbox__mark"></span>
                    Установка
                </label>
            </div>
            <div class="calculator__price">
                <h3 class="calculator__title">Стоимость</h3>
                <p class="calculator__text">Является примерной. Точную оценку может дать только мастер. Это бесплатно.</p>
                <p class="calculator__summ">{{ summ.toLocaleString() }} ₽</p>
                <button class="calculator__button js-show" data-src="#popup_callback" data-title="Вызов замерщика" data-button="Вызвать замерщика">Вызвать замерщика</button>
            </div>
        </div>
    </div>
</div>


</template>
<style>
    .slide-leave-active,
    .slide-enter-active {
    transition: .5s;
    }
    .slide-enter {
    transform: translate(100%, 0);
    }
    .slide-leave-to {
    transform: translate(-150%, 0);
    }
</style>
<script>
    export default {
        data: function () {
            return {
                currentType: '3x',
                areaMode: '',
                install: false,
                installBasePrice: 500,
                shipping: false,
                width: 1600,
                height: 2200,
                multiplier: 2925.170068027211,
                pixelWidth: 0,
                publicPath: '/storage/'
            }
        },
        props: ['types', 'city'],
        updated: function () {
            this.pixelWidth = $(this.$refs.calculator__img).width();
        },
        computed: {
            area: function () {
                return this.width * this.height / 1000000;
            },
            installPrice: function () {
                return this.install ? this.installBasePrice * this.area : 0;
            },
            summ: function () {
                return parseInt(this.area * this.multiplier + this.installPrice);
            }
        },
        watch: {
            currentType: function (value, old) {
               this.checkTypeParams();
            }
        },
        mounted() {
        	this.checkTypeParams();
        },
        methods: {
        	checkTypeParams() {


        		switch(this.currentType) {
        			case '3x':
        				this.width = 2100;
        				this.height = 1400;

        				if(this.city.code == 'sochi' || this.city.code == 'krasnodar') {
		        			this.multiplier = 2925.170068027211;
		        		}
		        		else if(this.city.code == 'nahodka') {
		        			this.multiplier = 3571.428571428571;
		        		}
		        		else {
		        			this.multiplier = 3741.496598639456;
		        		}
        			break;

        			case '2x':
        				this.width = 1300;
        				this.height = 1400;

        				if(this.city.code == 'sochi' || this.city.code == 'krasnodar') {
		        			this.multiplier = 3571.428571428571;
		        		}
		        		else if(this.city.code == 'nahodka') {
		        			this.multiplier = 5054.945054945055;
		        		}
		        		else {
		        			this.multiplier = 4285.714285714286;
		        		}

    				break;

    				case 'bb-2x':
        				this.width = 2100;
        				this.height = 2100;
    				break;

    				case 'bb-1x':
        				this.width = 1400;
        				this.height = 2100;
    				break;
        		}
        	}
        }
    }
</script>
