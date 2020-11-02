@extends('common.layout')

@section('content')

    @include('common.gui.header')

    @include('common.gui.titles', [
        'class' =>  'container titles_services',
        'overtitle' =>  'Рассрочка без переплат ',
        'title' =>  'Окно, дверь, балкон или перегородка в рассрочку'
    ])

    <section class="service container service__texture">
        <div class="service__heading container">
            <div class="service__left">
                <p class="intro service__intro">
                    Мы предлагаем выгодные условия рассрочки для того, чтобы установка новых и современных конструкций не ударила по Вашему бюджету.
                    Закажите сейчас в компании «Твой стиль» системы любых размеров и конфигураций, а платите потом – по удобному графику.
                </p>
                <p class="intro service__intro">
                    Договор рассрочки заключается на месте без очередей и долгого ожидания. Мы ценим Ваше время и делаем качественный ремонт доступным!
                </p>
            </div>
            <img class="service__img service__img_small" src="/img/windows/services/credit.png" alt="Окно в рассрочку">
        </div>

        <!-- <div class="titles">
            <h2 class="second-title titles__second-title">Калькулятор ежемесячного платежа</h2>
            <hr class="line titles__line">
        </div>
        <div class="banks">
            <img src="/img/banks/credit_alfa.png" alt="" class="banks__item">
            <img src="/img/banks/credit_globex.png" alt="" class="banks__item">
            <img src="/img/banks/credit_otkrytie.png" alt="" class="banks__item">
            <img src="/img/banks/credit_otp.png" alt="" class="banks__item">
            <img src="/img/banks/credit_otpcredit_tinkoff.png" alt="" class="banks__item">
        </div>

        <div id="credit-calc"></div> -->

    </section>

    @include('common.gui.footer')

@endsection
