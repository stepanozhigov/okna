@extends('common.layout', ['seoData' => []])

@section('content')
    <div class="page__not-found">
        <section class="notFound">
            <div class="notFound__content">
                <div class="container">
                    <h2>Ой!</h2>
                    <p>
                        Вы попали на страницу <br>
                        наших монтажников-стажёров :-(
                    </p>
                </div>
            </div>
        </section>
        @include('common.gui.header')
    </div>
@endsection
