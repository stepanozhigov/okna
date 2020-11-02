@extends('common.layout')

@section('content')
    @include('common.gui.header')

    <section class="article container">
        <div class="article__heading" style="background: url({{ Storage::url($article->detail_img) }});background-size: cover; background-repeat: no-repeat;">
            <h1 class="article__title title">
                {{ $article->title }}
            </h1>
            <p class="article__intro intro">
                {{ $article->preview_text }}
            </p>
        </div>
        <div class="article__body">
            {!! preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '\1', $article->detail_text) !!}            
        </div>
        <div class="article__socials socials">
            <p class="socials__title second-title">Делитесь полезной информацией с друзьями!</p>
            <a href="" class="socials__item">
                <img class="socials__icon" src="/img/gui/social_gray_vk.svg" alt="">
                <span class="socials__name text">Вконтакте</span>
            </a>
            <a href="" class="socials__item">
                <img class="socials__icon" src="/img/gui/social_gray_inst.svg" alt="">
                <span class="socials__name text">Instagram</span>
            </a>
            <a href="" class="socials__item">
                <img class="socials__icon" src="/img/gui/social_gray_ok.svg" alt="">
                <span class="socials__name text">Одноклассники</span>
            </a>
            <a href="" class="socials__item">
                <img class="socials__icon" src="/img/gui/social_gray_fb.svg" alt="">
                <span class="socials__name text">Facebook</span>
            </a>
            
        </div>
    </section>

    @include('common.gui.footer')
@endsection