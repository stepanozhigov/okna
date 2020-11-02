<template>
    <div class="credit-calc">
        <div class="range intro credit-calc__range">
            <span class="range__label">Стоимость покупки</span>
            <input step=1000 max=150000 v-model="sum" type="range" class="range__input">
            <span class="range__value">{{ formatNum(sum) }} Р</span>
        </div>
        <div class="range intro credit-calc__range">
            <span class="range__label">Первоначальный взнос</span>
            <input step=1000  :max="sum" v-model="deposit" type="range" class="range__input">
            <span class="range__value">{{ formatNum(deposit) }}  Р</span>
        </div>
        <div class="range intro credit-calc__range">
            <span class="range__label">Срок рассрочки</span>
            <input max=10 v-model="period" type="range" class="range__input">
            <span class="range__value">{{ formatNum(period) }}  мес.</span>
        </div>
        <p class="intro credit-calc__text">Сумма ежемесячного платежа</p>
        <p class="text credit-calc__subtext">данный расчет является примерным</p>
        <span class="credit-calc__value">{{ formatNum(result) }} Р</span>
        
        <div class="buttons"><button class="button button_red js-show" data-src="#credit_popup">Получить рассрочку</button></div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                'sum': 0,
                'deposit': 0,
                'period': 0
            }
        },
        methods: {
            formatNum(num) {
                return parseInt(num).toLocaleString();
            }
        },
        computed: {
            result: function () {
                if (this.sum > 0 && this.deposit > 0 && this.period > 0) {
                    return Math.floor((this.sum - this.deposit) / this.period);
                }
                return 0;                
            }
        }
    }
</script>