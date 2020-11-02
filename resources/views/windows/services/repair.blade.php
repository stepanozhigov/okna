@extends('common.layout')

@section('content')

    @include('common.gui.header')

    @include('common.gui.titles', [
        'class' =>  'container titles_services',
        'overtitle' =>  'Ремонт и замена',
        'title' =>  "Ремонт пластиковых окон {$city->name_formatted}"
    ])

    <section class="service">
        <div class="service__texture">
            <div class="service__heading container">
                <div class="service__left">
                    <p class="intro service__intro">
                        Требуется ремонт или полная замена износившихся оконных и балконных конструкций? Мастера компании «Твой стиль» выполнят работы быстро и качественно.
                    </p>
                    <p class="intro service__intro">
                        Мы поможем вернуть к жизни старые конструкции или заменим их на новые более современные. Гарантируем качество и доступные цены на все виды работ.
                    </p>
                    <p class="intro service__intro">
                        Если у вас гарантийный случай, то все ремонтные работы будут проведены бесплатно. В случае же заказа ремонтно-заменных работ транспортные расходы расчитываются отдельно и суммируются со стоимостью услуг
                    </p>
                </div>
                <img class="service__img service__img_small" src="/img/windows/services/repair.png" alt="Ремонт пластиковых окон">
            </div>
        </div>

    </section>

    @include('common.gui.footer')

@endsection
