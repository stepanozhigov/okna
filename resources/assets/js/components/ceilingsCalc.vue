<template>
    <div class="ceilingCalculator">
        <h2 class="ceilingCalculator__title">Калькулятор</h2>
        <p class="ceilingCalculator__desc">Рассчитайте стоимость натяжного потолока онлайн. Матовые, сатиновые, глянцевые — все по одной цене! Выберите параметры вашего помещения, перемещая ползунки:</p>
        <div class="ceilingCalculator__item">
            <p class="ceilingCalculator__item-name">
                Площадь помещения, м2
            </p>
            <input data-min="0" data-max="150" class="range" type="text" name="" value="">
        </div>
        <div class="ceilingCalculator__item">
            <p class="ceilingCalculator__item-name">
                Количество труб
            </p>
            <input data-min="0" data-max="10" class="range" type="text" name="" value="">
        </div>
        <div class="ceilingCalculator__item">
            <p class="ceilingCalculator__item-name">
                Количество углов
            </p>
            <input data-min="0" data-max="30" class="range" type="text" name="" value="">
        </div>
        <div class="ceilingCalculator__item">
            <p class="ceilingCalculator__item-name">
                Количество светильников
            </p>
            <input data-min="0" data-max="30" class="range" type="text" name="" value="">
        </div>
        <p class="ceilingCalculator__subtitle">Для точного расчёта необходимо произвести замер!</p>
        <p class="ceilingCalculator__total">8 750 ₽</p>
        <p class="ceilingCalculator__measure">с установкой</p>
        <button data-src="#popup_callback" class="ceilingCalculator__callback js-show">Вызвать замерщика</button>
    </div>
</template>
