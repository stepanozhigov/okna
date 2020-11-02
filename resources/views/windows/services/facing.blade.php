@extends('common.layout')

@section('content')

    @include('common.gui.header')

    @include('common.gui.titles', [
        'class' =>  'container titles_services',
        'overtitle' =>  'Отделка',
        'title' =>  "Отделка балконов и лоджий {$city->name_formatted}"
    ])

    <section class="service">
        <div class="service__texture">
            <div class="service__heading container">
                <div class="service__left">
                    <p class="intro service__intro">
                        Помимо производства и установки качественных конструкций, компания «Твой стиль» с радостью поможет преобразить облик самого балкона. Ведь далеко не все отделочные материалы подойдут для подобных помещений.
                    </p>
                    <p class="intro service__intro">
                        Мы сотрудничаем только с проверенными фирмами и предлагаем долговечную и стильную отделку. Дополнительное утепление, монтаж функциональных систем хранения, объединение балкона с комнатой – все это и многое другое под силу нашим профессиональным мастерам.
                    </p>
                    <p class="intro service__intro">
                        Выберите подходящий вариант и запишитесь на бесплатную консультацию.
                    </p>
                </div>
                <img class="service__img service__img_small" src="/img/windows/services/facing.png" alt="Ремонт пластиковых окон">
            </div>
        </div>

    </section>

    @include('common.gui.footer')

@endsection
