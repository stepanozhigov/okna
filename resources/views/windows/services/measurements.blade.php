@extends('common.layout')

@section('content')

    @include('common.gui.header')

    <section class="service service_measure">

        <div class="service__heading service__heading_small container">
            <div class="titles service__titles">
                <p class="service__overtitle overtitle">бесплатно</p>
                <h1 class="service__title title">Заполните форму&nbsp;для&nbsp;вызова <br> замерного мастера</h1>
            </div>
            <form method="POST" action="{{ route('add-lead') }}" class="form service__form">
                @csrf
                <input required name="name" type="text" placeholder="Ваше имя" class="input service__input">
                <input required name="phone" type="tel" placeholder="Ваш телефон" class="input service__input">
                <button type="submit" class="button button_red service__button">Вызвать замерщика</button>
                <p class="service__agreement subtext">Оставляя контактную информацию, вы соглашаетесь на <a href="{{ route('agreement', $city) }}">обработку персональных данных</a> </p>
            </form>
            <img class="service__img service__img_measurement" src="/img/windows/services/img_girl-measure.png" alt="Вызвать замерного мастера">
        </div>
    </section>

    @include('common.gui.footer', ['skipOffer' => true])

@endsection
