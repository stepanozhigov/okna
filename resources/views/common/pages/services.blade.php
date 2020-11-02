@extends('common.layout')
    @section('content')
        @include('common.gui.header')


        <section class="services ">
            @include('common.gui.titles', [
                'class' =>  'container',
                'overtitle' =>  'Ключевые услуги',
                'title' =>  "Пластиковые окна {$city->name_formatted} — от установки до&nbsp;ремонта",
                'intro' =>  "Компания &laquo;Твой стиль&raquo;&nbsp;&mdash; это большая дилерская сеть в&nbsp;восьми городах России, которая более чем за&nbsp;10 лет работы зарекомендовала себя на&nbsp;рынке, как одна из&nbsp;лучших компаний по&nbsp;производству и&nbsp;монтажу конструкций из&nbsp;алюминия и&nbsp;ПВХ. Мы&nbsp;предлагаем вам надежные системы для окон и&nbsp;балконов, двери различных форм и&nbsp;конфигураций, перегородки для жилых и&nbsp;офисных помещений, а&nbsp;также жалюзи. Мы&nbsp;делаем вашу жизнь комфортнее, используя только самые современные материалы и&nbsp;технологии производства. Компания &laquo;Твой стиль&raquo;&nbsp;&mdash; доверяй профессионалам!"
            ])

            <div class="services__list container b-texture">
                @foreach ($services as $service)
                    <a href="{{ route('services', ['city' => $city, 'type' =>  $service->code]) }}" class="service-card b-card services__card is-hoverable">
                        <img src="{{ Storage::url($service->img) }}" alt="" class="service-card__img">
                        <p class="card-title service-card__title">{{ $service->name }}</p>
                    </a>
                @endforeach
            </div>
        </section>

        @include('common.gui.footer')
    @endsection
