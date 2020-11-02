@extends('common.layout')

@section('content')

    @include('common.gui.header')

    <section class="service service_deal">

        <div class="service__heading service__heading_small container">
            <div class="titles service__titles">
                <p class="service__overtitle overtitle">бесплатно</p>
                <h1 class="service__title title">Заполните форму для вызова на&nbsp;дом специалиста</h1>
            </div>
            <form action="" class="form service__form">
                <input type="hidden" name="city" value="{{ $city->bx_code }}">
                <input type="hidden" name="city_name" value="{{ $city->name ?? '' }}">  
                <input required type="text" placeholder="Ваше имя" class="input service__input">
                <input required type="tel" placeholder="Ваш телефон" class="input service__input">
                <button class="button button_red service__button">Вызвать специалиста</button>
                <p class="service__agreement subtext">Оставляя контактную информацию, вы соглашаетесь на <a href="{{ route('agreement', $city) }}">обработку персональных данных</a> </p>
            </form>
            <img class="service__img service__img_deal" src="/img/windows/services/img_deal.png" alt="Договор на дому">
        </div>
    </section>

    @include('common.gui.footer', ['skipOffer' => true])

@endsection
