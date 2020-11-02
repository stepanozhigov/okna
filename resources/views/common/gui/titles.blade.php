<div class="titles {{ $class ?? '' }}">
    @isset($overtitle)
        <p class="titles__overtitle">{!! $overtitle !!}</p>
    @endisset

    @isset($title)
        <h1 class="titles__title">{!! $title !!}</h1>
    @endisset

    @isset($secondTitle)
        <h2 class="second-title titles__second-title">{!! $secondTitle !!}</h2>
    @endisset

    @isset($intro)
        <p class="intro titles__intro">{!! $intro !!}</p>
        @if (mb_strlen($intro) > 367)
            <button class="titles__arrow titles__arrow_longtext" type="button">
                <img src="/img/arrow-down.svg" alt="">
            </button>
        @endif
        @if (mb_strlen($intro) > 66)
            <button class="titles__arrow" type="button">
                <img src="/img/arrow-down.svg" alt="">
            </button>
        @endif
    @endisset


</div>
