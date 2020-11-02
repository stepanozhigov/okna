@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')
    <section class="credit">
        @include('common.gui.titles', [
            'overtitle' =>  'Рассрочка',
            'title' =>  "Рассрочка на&nbsp;натяжной потолок",
            'intro' =>  "Натяжные потолки в&nbsp;рассрочку&nbsp;&mdash; это не&nbsp;только практичный, но&nbsp;и&nbsp;доступный способ отделки. Мы&nbsp;ценим каждого клиента и&nbsp;готовы предложить особые условия для того, чтобы ремонт приносил вам только радость. Наслаждайтесь новым ремонтом сейчас, а&nbsp;платите потом."
        ])
        <div class="advantages">
            <div class="advantages__content">
                <div class="advantages__item">
                    <img class="advantages__icon" width="91" height="82" src="/img/gui/credit_piggy-bank.svg" alt="">
                    <h2>Потолок сегодня, <br>а не потом</h2>
                    <p>Не&nbsp;нужно ждать и&nbsp;копить необходимую сумму. Планируйте ремонт, когда захотите.</p>
                </div>
                <div class="advantages__item">
                    <img class="advantages__icon" width="80" height="87" src="/img/gui/credit_calendar.svg" alt="">
                    <h2>Досрочное <br> погашение</h2>
                    <p>Погасите рассрочку ранее установленных сроков по&nbsp;мере ваших возможностей.</p>
                </div>
                <div class="advantages__item">
                    <img class="advantages__icon" width="81" height="81" src="/img/gui/credit_pay.svg" alt="">
                    <h2>Не нужно <br> переплачивать!</h2>
                    <p>Прозрачный ежемесячный платёж, итоговая сумма без надбавок.</p>
                </div>
                <div class="advantages__item">
                    <img class="advantages__icon" width="80" height="87" src="/img/gui/credit_clock.svg" alt="">
                    <h2>Без&nbsp;очередей&nbsp;и&nbsp;долгих <br> рассмотрений</h2>
                    <p>Быстрое одобрение рассрочки прямо в&nbsp;нашем офисе, без похода в&nbsp;банк.</p>
                </div>
            </div>
        </div>
        <section class="credit__banks">
            @include('common.gui.titles', [
                'secondTitle' =>  "Работаем с&nbsp;большим количеством банков"
            ])
            <div id="credit__banks-list"></div>
            <button class="button buttons__item js-show" data-src="#popup_callback" data-title="Получить рассрочку" data-button="Получить рассрочку">Получить рассрочку</button>
        </section>
    </section>



    @include('common.gui.footer')
@endsection
