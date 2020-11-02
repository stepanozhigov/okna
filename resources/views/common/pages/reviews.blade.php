@extends('common.layout')
    @section('content')
        @include('common.gui.header')

        <section class="reviews">
            @include('common.gui.titles', [
                'class' =>  'container',
                'overtitle' =>  'ОБРАТНАЯ СВЯЗЬ',
                'title' =>  "Отзывы о компании «Твой стиль» {{ $city->name_formatted }}",
                'intro' =>  "Мы&nbsp;любим получать ваши отзывы и&nbsp;делиться ими. На&nbsp;этой странице вы&nbsp;можете ознакомиться с&nbsp;отзывами наших клиентов или оставить свой. С&nbsp;нас&nbsp;&mdash; моющее средство в&nbsp;подарок."
            ])

            <div class="reviews__content">
                @foreach ($reviews as $review)
                    @include('common.gui.review', ['review' => $review])
                @endforeach

                {{ $reviews->links('vendor.pagination.custom') }}
                <div class="buttons">
                    <a href="{{ route('add-review', $city) }}" class="button reviews__add">Оставить отзыв</a>
                </div>
            </div>
        </section>
        @include('common.gui.footer')
        <script src="https://vk.com/js/api/openapi.js?146" type="text/javascript"></script>
    @endsection
