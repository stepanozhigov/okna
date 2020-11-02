@extends('common.layout')

@section('content')
    @include('common.gui.header')

    @include('common.gui.titles', [
        'class' =>  'container',
        'overtitle' =>  'Обратная связь',
        'title' =>  "Оставить отзыв о компании Твой Стиль {$city->name_formatted}",
        'intro' =>  'Описать процесс оставления отзыва и что можно за это получить'
    ])

    <section class="container" id="add-review">
        <add-review city={{ $city->id }}></add-review>
    </section>
    
    <script src="https://vk.com/js/api/openapi.js?146" type="text/javascript"></script>
    @include('common.gui.footer')    
@endsection
