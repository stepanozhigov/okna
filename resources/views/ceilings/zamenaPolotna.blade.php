@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')
    @include('common.gui.titles', [
        'overtitle' =>  'Замена полотна',
        'title' =>  "Замена натяжного полотна",
        'intro' =>  "Замена полотна&nbsp;&mdash; отличная альтернатива, которая позволит сэкономить средства, если в&nbsp;помещении ранее были установлены натяжные потолки. Демонтаж и&nbsp;установка нового полотна происходят в&nbsp;течение дня."
    ])

    <section class="serviceDetail">
        @include('common.gui.titles', [
            'secondTitle' =>  "Причины проблем с&nbsp;натяжными потолками"
        ])
        <section class="reason">
            <div class="reason__image-wrap">
                <div class="reason__image-inner">
                    <img src="/img/ceilings/replace-1.jpg" alt="" class="reason__image">
                </div>
            </div>
            <div class="reason__content">
                <h4 class="reason__title">Карнизы для штор</h4>
                <p class="reason__text">Их монтаж может привести к разрывам полотна в нескольких местах, а сами по себе острые края карнизов могут оставлять на потолке неэстетические следы.</p>
            </div>
        </section>
        <section class="reason">
            <div class="reason__image-wrap">
                <div class="reason__image-inner">
                    <img src="/img/ceilings/replace-2.jpg" alt="" class="reason__image">
                </div>
            </div>
            <div class="reason__content">
                <h4 class="reason__title">Непредвиденные ситуации</h4>
                <p class="reason__text">Нечаянно вылетевшая пробка при открытии шампанского, детские шалости или разлетевшиеся осколки от&nbsp;разбитой посуды могут привести к&nbsp;безвозвратной порче полотна.</p>
            </div>
        </section>
        <section class="reason">
            <div class="reason__image-wrap">
                <div class="reason__image-inner">
                    <img src="/img/ceilings/replace-3.jpg" alt="" class="reason__image">
                </div>
            </div>
            <div class="reason__content">
                <h4 class="reason__title">Расхождение сварных швов</h4>
                <p class="reason__text">Если вы&nbsp;заказывали натяжной потолок у&nbsp;недобросовестной компании, то&nbsp;возможны и&nbsp;такие неприятности.</p>
            </div>
        </section>
        <section class="reason">
            <div class="reason__image-wrap">
                <div class="reason__image-inner">
                    <img src="/img/ceilings/replace-4.jpg" alt="" class="reason__image">
                </div>
            </div>
            <div class="reason__content">
                <h4 class="reason__title">Зазоры между стеной и&nbsp;профилем</h4>
                <p class="reason__text">Могут возникнуть при неправильном монтаже конструкции</p>
            </div>
        </section>
    </section>
    @include('common.gui.footer')
@endsection
