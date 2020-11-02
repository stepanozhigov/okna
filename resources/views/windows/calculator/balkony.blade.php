@extends('common.layout')
@section('content')
    @include('common.gui.header')


    <section class="calculator calculator_balcony">
        @include('common.gui.titles', [
            'class' =>  'container',
            'overtitle' =>  'Калькулятор стоимости',
            'title' =>  "Рассчитайте стоимость остекления балкона&nbsp;и&nbsp;лоджии&nbsp;{$city->name_formatted}",
            'intro' =>  "Выберите тип конструкции изделия, далее введите свою ширину и высоту рамы. После расчёта нажмите кнопку «Вызвать замерщика». Он сможет рассчитать точную стоимость и, при необходимости, заключить договор у вас дома."
        ])
        <div id="balcony-calc">
            <balcony-calc :types="{{ $params }}"></balcony-calc>
        </div>
    </section>

    @include('common.gui.footer')
@endsection
