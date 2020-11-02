@extends('common.layout')
    @section('content')
        @include('common.gui.header')


        <section class="promos container">
            @include('common.gui.titles', [
                'overtitle' =>  'Специальные предложения',
                'title' =>  "Акции и скидки на пластиковые окна {$city->name_formatted}",
                'intro' =>  "Ознакомьтесь с&nbsp;нашими специальными предложениями и&nbsp;ниже вызовите замерного мастера для точного замера и&nbsp;расчёта. Для вашего удобства действует бесплатная услуга &laquo;Договор на&nbsp;дому&raquo;"
            ])
            <div class="promos__content">
                @foreach($promos as $promo)
                    <div class="promo b-card promos__item">
                        <img src="{{ Storage::url($promo->image) }}" alt="Фотопечать" class="promo__img">
                        <div class="promo__inner">
                            <p class="card-title promo__title">{!! $promo->title !!}</p>
                            <hr class="line promo__line">
                            <p class="text promo__text">{!! $promo->intro !!}</p>
                            <div class="promo__text-wrap">
                                <h3 class="promo__subtitle">Условия акции</h3>
                                <p class="text promo__text"> {!! $promo->conditions !!}</p>
                            </div>
                            <div class="promo__text-wrap">
                                <h3 class="promo__subtitle">Дополнительно</h3>
                                <p class="text promo__text"> {!! $promo->additional !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </section>

        @include('common.gui.footer')


    @endsection
