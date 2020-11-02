@extends('common.layout')

@section('content')

    @include('common.gui.header')

    @include('common.gui.titles', [
        'class' =>  'container titles_services',
        'overtitle' =>  'Доставка',
        'title' =>  "Доставка окон, дверей и перегородок {$city->name_formatted}"
    ])

    <section class="service">
        <div class="service__texture">
            <div class="service__heading container">
                <div class="service__left">
                    <p class="intro service__intro">
                        Перевозка хрупких и светопрозрачных конструкций имеет свои особенности.
                        В компании «Твой стиль» есть собственная служба доставки, которая привезет оконные, дверные и балконные конструкции в любую точку {!! $city->name_formatted !!}.
                    </p>
                    <p class="intro service__intro">
                        Наш автотранспорт специально оборудован надежными системами транспортировки, а хрупкие элементы конструкций защищены пленкой для предотвращения царапин и сколов.
                        Мы доставим заказанные конструкции – надежно и быстро в любое удобное для Вас время.
                    </p>
                </div>
                <img class="service__img service__img_small" src="/img/windows/services/delivery.png" alt="Доставка конструкций">
            </div>
        </div>

    </section>

    @include('common.gui.footer')

@endsection
