@extends('common.layout')
    @section('content')
        @include('common.gui.header')
        <section class="portfolio">
            @include('common.gui.titles', [
                'class' =>  'container',
                'overtitle' =>  'Наши работы',
                'intro' =>  'Вы&nbsp;можете посмотреть все фото сразу или по&nbsp;разделам.
    Ниже расположена ссылка для вызова замерного мастера. Для вашего удобства у&nbsp;него всегда с&nbsp;собой есть каталог.',
                'title' =>  "Фото пластиковых окон {$city->name_formatted}"
            ])

            @if($types && count($types))
                <portfolio-photos id="portfolio-photos" :types="{{$types}}"></portfolio-photos>
            @endif
            {{-- Предыдущая версия без ajax подгрузки изображений
            <div class="portfolio__content container b-texture">
                <div class="portfolio__filter">
                    <a href="{{ route('photos', $city) }}" class="tag portfolio__tag {{ $currentType == null ? 'tag_active':'' }}">Все работы</a>
                    @foreach ($types as $type)
                        <a href="{{ route('photos', ['city' => $city, 'type' => $type]) }} " class="tag portfolio__tag {{ $type->id == ($currentType->id ?? null) ? 'tag_active':'' }}">{{ $type->name }}</a>
                    @endforeach
                </div>
                <div class="portfolio__list" id="portfolio__list" data-photos="{{ $photos }}">
                    @foreach($photos as $photo)
                        <a class="case b-card portfolio__item">
                            <p class="case__totals">{{ $photo->price }}  ₽ / {{ $photo->area }} м<sup>2</sup></p>
                            <img src="{{ Voyager::image( $photo->thumbnail('preview','src') ) }}" alt="Фотопечать" class="case__img">
                            <p class="card-title case__title">{{ $photo->name }}</p>
                        </a>
                    @endforeach
                </div>
            </div>
            --}}
        </section>

        @include('common.gui.footer')
    @endsection