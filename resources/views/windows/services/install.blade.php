@extends('common.layout')

@section('content')

    @include('common.gui.header')

    @include('common.gui.titles', [
        'class' =>  'container titles_services',
        'overtitle' =>  'Установка',
        'title' =>  "Установка пластиковых окон {$city->name_formatted}"
    ])

    <section class="service">
        <div class="service__texture">
            <div class="service__heading container">
                <div class="service__left">
                    <p class="intro service__intro">
                        После того как необходимую конструкцию изготовили на фабрике, наступает такой не менее важный этап, как монтаж. Чтобы новое окно, балкон или дверь радовали Вас долгие годы, доверяйте их установку настоящим профессионалам своего дела.
                    </p>
                    <p class="intro service__intro">
                        Даже небольшие нарушения технологии монтажа могут привести к порче дорогостоящей конструкции и непредвиденным затратам именно по-этому профессиональный монтаж имеет такое большое значение.
                    </p>
                </div>
                <img class="service__img service__img_small" src="/img/windows/services/install.png" alt="Установка пластиковых окон">
            </div>
        </div>

    </section>

    @include('common.gui.footer')

@endsection
