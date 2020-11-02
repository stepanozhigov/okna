@extends('common.layout')
@section('content')
    @include('common.gui.header')


    <section class="calculator">
        @include('common.gui.titles', [
            'class' =>  'container',
            'overtitle' =>  'Калькулятор стоимости',
            'title' =>  "Рассчитайте стоимость пластиковых окон {$city->name_formatted}",
            'intro' =>  "Выберите тип конструкции, далее введите ширину и высоту рамы. После расчёта нажмите кнопку «Вызвать замерщика». Он сможет рассчитать точную стоимость и, при необходимости, заключить договор у вас дома."
        ])
        <div id="window-calc">
            <window-calc :types="{{ $params }}" :city="{{ $city }}"></window-calc>
        </div>
    </section>

    @include('common.gui.footer')
@endsection
