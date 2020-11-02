@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')
    <section class="lamps">
        @include('common.gui.titles', [
        'overtitle' =>  'Каталог',
        'title' =>  "Светильники для натяжных потолков от&nbsp;компании Твой&nbsp;стиль"
        ])
        <div class="lamps__content">
            @include('ceilings.lamp')
            @include('ceilings.lamp')
            @include('ceilings.lamp')
            @include('ceilings.lamp')
            @include('ceilings.lamp')
            @include('ceilings.lamp')
            @include('ceilings.lamp')
            @include('ceilings.lamp')
        </div>

    </section>


    @include('common.gui.footer')
@endsection
