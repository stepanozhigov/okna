<a href="{{ $link ?? '' }}" class="person {{ $class ?? '' }}">
    <img src="{{ $img }}" alt="" class="avatar person__photo">
    <div class="person__info">
        <p class="person__name">{{ $name }}</p> 
        @isset($line)
            <hr class="line person__line">
        @endisset

        @isset($text)
            <p class="person__text">{{ $text }}</p>
        @endisset
    </div>
    
</a>