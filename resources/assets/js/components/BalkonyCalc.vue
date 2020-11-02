<template>
<div class="calculator__inner">
    <div class="calculator__types">
        <label class="calculator__type active">
            <input class="calculator__type-input"  type="radio" name="type">
            <img class="calculator__type-image" src="/img/windows/calculator/balcony/balcony-calc_01.svg" alt="">
            <p class="calculator__type-name">Лоджия <br> трёхстворчатая</p>
        </label>
        <label class="calculator__type">
            <input class="calculator__type-input"  type="radio" name="type">
            <img class="calculator__type-image" src="/img/windows/calculator/balcony/balcony-calc_02.svg" alt="">
            <p class="calculator__type-name">Лоджия <br> четырёхстворчатая</p>
        </label>
        <label class="calculator__type">
            <input class="calculator__type-input"  type="radio" name="type">
            <img class="calculator__type-image" src="/img/windows/calculator/balcony/balcony-calc_03.svg" alt="">
            <p class="calculator__type-name">Балкон <br> трёхстворчатый</p>
        </label>
        <label class="calculator__type">
            <input class="calculator__type-input"  type="radio" name="type">
            <img class="calculator__type-image" src="/img/windows/calculator/balcony/balcony-calc_04.svg" alt="">
            <p class="calculator__type-name">Балкон <br> четырёхстворчатый</p>
        </label>
    </div>
    <div class="calculator__content">
        <div class="calculator__main calculator__main_loggia-tricuspid active">
            <img class="calculator__image" src="/img/windows/calculator/balcony/balcony-calc-big_02.png" srcset="/img/windows/calculator/balcony/balcony-calc-big_02@2x.png 2x" alt="">
            <img class="calculator__window-left" src="/img/windows/calculator/balcony/balcony-calc-big_11.png" srcset="/img/windows/calculator/balcony/balcony-calc-big_11@2x.png 2x" alt="">

            <div class="calculator__width">
                <input v-model="width" type="number" class="calculator__input" name="height[]">
                <span class="calculator__input-unit">мм</span>
                <span class="calculator__input-val">2 400</span>
            </div>
            <div class="calculator__height">
                <input v-model="height" type="number" class="calculator__input" name="height[]">
                <span class="calculator__input-unit">мм</span>
                <span class="calculator__input-val">2 400</span>
            </div>
        </div>
        <div class="calculator__main calculator__main_loggia-four-leaved">
            <img class="calculator__image" src="/img/windows/calculator/balcony/balcony-calc-big_01.png" srcset="/img/windows/calculator/balcony/balcony-calc-big_01@2x.png 2x" alt="">
            <img class="calculator__window-left" src="/img/windows/calculator/balcony/balcony-calc-big_11.png" srcset="/img/windows/calculator/balcony/balcony-calc-big_11@2x.png 2x" alt="">

            <div class="calculator__width">
                <input v-model="width" type="number" class="calculator__input" name="height[]">
                <span class="calculator__input-unit">мм</span>
                <span class="calculator__input-val">2 400</span>
            </div>
            <div class="calculator__height">
                <input v-model="height" type="number" class="calculator__input" name="height[]">
                <span class="calculator__input-unit">мм</span>
                <span class="calculator__input-val">2 400</span>
            </div>
        </div>
        <div class="calculator__main calculator__main_balcon-tricuspid">
            <img class="calculator__image" src="/img/windows/calculator/balcony/balcony-calc-big_03.png" srcset="/img/windows/calculator/balcony/balcony-calc-big_03@2x.png 2x" alt="">
            <img class="calculator__window-left" src="/img/windows/calculator/balcony/balcony-calc-big_11.png" srcset="/img/windows/calculator/balcony/balcony-calc-big_11@2x.png 2x" alt="">
            <div class="calculator__width">
                <input v-model="width" type="number" class="calculator__input" name="height[]">
                <span class="calculator__input-unit">мм</span>
                <span class="calculator__input-val">2 400</span>
            </div>
            <div class="calculator__height">
                <input v-model="height" type="number" class="calculator__input" name="height[]">
                <span class="calculator__input-unit">мм</span>
                <span class="calculator__input-val">2 400</span>
            </div>
        </div>
        <div class="calculator__main calculator__main_balcon-four-leaved">
            <img class="calculator__image" src="/img/windows/calculator/balcony/balcony-calc-big_04.png" srcset="/img/windows/calculator/balcony/balcony-calc-big_04@2x.png 2x" alt="">
            <img class="calculator__window-left" src="/img/windows/calculator/balcony/balcony-calc-big_11.png" srcset="/img/windows/calculator/balcony/balcony-calc-big_11@2x.png 2x" alt="">
            <div class="calculator__width">
                <input v-model="width" type="number" class="calculator__input" name="height[]">
                <span class="calculator__input-unit">мм</span>
                <span class="calculator__input-val">2 400</span>
            </div>
            <div class="calculator__height">
                <input v-model="height" type="number" class="calculator__input" name="height[]">
                <span class="calculator__input-unit">мм</span>
                <span class="calculator__input-val">2 400</span>
            </div>
        </div>
        <div class="calculator__info">
            <div class="calculator__params">
                <h3 class="calculator__title">Параметры окна</h3>
                <p class="calculator__text">Указаны стандартные размеры оконных рам. Введите свои параметры для расчёта стоимости.</p>
                <div class="calculator__size">
                    <p class="calculator__size-name">Ширина</p>
                    <div class="calculator__width">
                        <input type="number" pattern="\d*" class="calculator__input" name="height[]">
                        <span class="calculator__input-unit">мм</span>
                    </div>
                </div>
                <div class="calculator__size">
                <p class="calculator__size-name">Высота</p>
                    <div class="calculator__height">
                        <input type="number" pattern="\d*" class="calculator__input" name="height[]">
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
            <div class="calculator__finishing">
                <h3 class="calculator__title">Отделка балкона</h3>
                <p class="calculator__text">Для расчёта отделки позвоните по номеру</p>
                <a href="tel:8 800 333-97-14" class="calculator__call">8 800 333–97–14</a>
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
                currentType: 'odnostvorchatoe-okno',
                areaMode: '',
                install: false,
                installBasePrice: 500,
                shipping: false,
                width: 1000,
                height: 1000,
                multiplier: 3000,
                pixelWidth: 0,
                publicPath: '/storage/'
            }
        },
        props: ['types'],
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
               this.arrWidth = [0, 0];
               this.arrHeight = [0, 0];


            }
        },
        mounted() {
            console.log($(this.$refs.calculator__img).width());

           this.pixelWidth = $(this.$refs.calculator__img).width();
        },
        methods: {
        }
    }
</script>
