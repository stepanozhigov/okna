<template>
    <div class="calculator__inner">
        <div class="calculator__types">
            <label class="radio">
                <input class="radio__input"  type="radio" name="type" v-model="currentType">
                <img  class="/img/windows/calculator/zhalyuzi/blinds_horisontal.png" alt="">
                <img  src="/img/windows/calculator/zhalyuzi/blinds_horisontal_red.png" alt="">
                <img  class="calculator__active" src="/img/gui/active_calc.svg" alt="">
            </label>
            <label class="radio">
                <input class="radio__input"  type="radio" name="type">
                <img  class="/img/windows/calculator/zhalyuzi/blinds_vertical.png" alt="">
                <img  src="/img/windows/calculator/zhalyuzi/blinds_vertical_red.png" alt="">
                <img  class="calculator__active" src="/img/gui/active_calc.svg" alt="">
            </label>
            <label class="radio">
                <input class="radio__input"  type="radio" name="type">
                <img  class="/img/windows/calculator/zhalyuzi/blinds_full.png" alt="">
                <img  src="/img/windows/calculator/zhalyuzi/blinds_full_red.png" alt="">
                <img  class="calculator__active" src="/img/gui/active_calc.svg" alt="">
            </label>
            <label class="radio">
                <input class="radio__input"  type="radio" name="type">
                <img  class="/img/windows/calculator/zhalyuzi/blinds_accordion.png" alt="">
                <img  src="/img/windows/calculator/zhalyuzi/blinds_accordion_red.png" alt="">
                <img  class="calculator__active" src="/img/gui/active_calc.svg" alt="">
            </label>
        </div>
        <transition name="slide" mode="out-in">
        <div class="calculator__content">
            <div class="calculator__area">
                <p class="calculator__title">Укажите размеры окна</p>
                <div class="calculator__img-wrap">
                    <img class="calculator__img" ref="calculator__img" src="/img/windows/calculator/zhalyuzi/blinds_horisontal_big.png" alt="">
                    <div class="calculator__widths">
                        <hr class="calculator__line">
                        <label class="calculator__width text-input">
                            <input type="text" class="input text-input__value" name="width[]">
                            <span class="text-input__label text">мм</span>
                            <p class="calculator__width-desc">Ширина окна</p>
                        </label>
                    </div>
                </div>
                <div class="calculator__heights">
                    <hr class="calculator__line calculator__line_vert">
                    <div class="calculator__height text-input">
                        <input type="text" class="input text-input__value" name="height[]">
                        <span class="text-input__label text">мм</span>
                        <p class="calculator__height-desc">Высота окна</p>
                    </div>
                </div>
            </div>
            <div class="calculator__additional">
                <section class="calculator__additional-block">
                    <div class="calculator__additional-item">
                        <input type="radio" data-price="10%" id="fabric" name="blindsFacture" value="fabric" class="calculator__additional-input calculator__additional-input_round" checked>
                        <label for="fabric" class="calculator__additional-name">Тканевые</label>
                    </div>
                    <div class="calculator__additional-item">
                        <input type="radio" data-price="11%" id="multiTexture" name="blindsFacture" value="multiTexture" class="calculator__additional-input calculator__additional-input_round">
                        <label for="multiTexture" class="calculator__additional-name">Мультифактурные</label>
                    </div>
                    <div class="calculator__additional-item">
                        <input type="radio" data-price="12%" id="wood" name="blindsFacture" value="wood" class="calculator__additional-input calculator__additional-input_round">
                        <label for="wood" class="calculator__additional-name">Деревянные</label>
                    </div>
                    <div class="calculator__additional-item">
                        <input type="radio" data-price="13%" id="aluminium" name="blindsFacture" value="aluminium" class="calculator__additional-input calculator__additional-input_round">
                        <label for="aluminium" class="calculator__additional-name">Алюминиевые</label>
                    </div>
                    <div class="calculator__additional-item">
                        <input type="radio" data-price="14%" id="breeze" name="blindsFacture" value="breeze" class="calculator__additional-input calculator__additional-input_round">
                        <label for="breeze" class="calculator__additional-name">Бриз</label>
                    </div>
                </section>

                <section class="calculator__additional-block">
                    <div class="calculator__additional-item">
                        <input type="checkbox" data-price="800" id="install" name="blindsInstall" value="install" class="calculator__additional-input calculator__additional-input_square">
                        <label for="install" class="calculator__additional-name">Требуется установка</label>
                    </div>
                    <div class="calculator__additional-item">
                        <input type="checkbox" data-price="1100" id="remoteСontrol" name="blindsRemoteСontrol" value="remoteСontrol" class="calculator__additional-input calculator__additional-input_square">
                        <label for="remoteСontrol" class="calculator__additional-name">Электрические с пультом</label>
                    </div>
                    <div class="calculator__additional-item">
                        <input type="checkbox" data-price="10%" id="photoprint" name="blindsPhotoprint" value="photoprint" class="calculator__additional-input calculator__additional-input_square">
                        <label for="photoprint" class="calculator__additional-name">Фотопечать изображения</label>
                    </div>
                </section>
            </div>

            <form action="" class="form calculator__result calculator-result">
                <div class="calculator-result__head">
                    <p class="text text_white">Расчетная цена</p>
                    <span class="calculator-result__summ">{{ summ }} Р</span>
                </div>

                <div class="calculator-result__body">
                    <input class="calculator-result__input" type="text" placeholder="Введите ваше имя">
                    <input class="calculator-result__input" type="tel" placeholder="Введите ваш телефон">
                    <button class="button button_gray calculator-result__button">Заказать</button>
                </div>

                <p class="subtext calculator-result__attention">Внимание! Стоимость является примерной. Более точная оценка требует выезда замерщика</p>
            </form>
        </div>
        </transition>
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
                install: 0,
                arrWidth: [],
                arrHeight: [],
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
            width () {
                return this.arrWidth.length ? this.arrWidth.reduce( (total, current) => { return total + current } ): 0;
            },
            height () {
                return this.arrHeight.length ? this.arrHeight.reduce( (total, current) => { return total + current } ): 0;
            },
            area: function () {
                return this.width * this.height / 1000000;
            },
            installPrice: function () {
                return this.install * this.area;
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
