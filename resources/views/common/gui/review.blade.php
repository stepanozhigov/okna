<div class="review reviews__item js-show" data-src="#popup_review_{{ $review->id }}">
    <div class="review__body b-card">
        <a target="_blank" @if(!empty($review->link)) href="{{ $review->link }}" @endif class="person review__person js-link">
            <div class="avatar person__photo">
                <img data-lazy-src="{{ $review->getAvatar() }}" alt="" class="avatar person__photo">
                <img data-lazy-src="/img/gui/{{ $review->social }}_hover.svg" alt="" class="person__social">
            </div>


            <div class="person__info">
                <p class="person__name">{{ $review->fio }}</p>
            </div>
        </a>

        <hr class="line review__line">
        <?  setlocale(LC_TIME, 'ru_RU.UTF-8');  ?>
        <p class="subtext review__date">{{ $review->created_at->formatLocalized('%d %B %Y') }}</p>
        <p class="subtext review__text">
                {{ $review->text }}
        </p>
        <div class="review__counters">
            <span class="counter subtext"><img class="counter__img" data-lazy-src="/img/gui/chat.svg" alt="">{{ $review->comments->count() }}</span>
            <span class="counter subtext"><img class="counter__img" data-lazy-src="/img/gui/attach.svg" alt="">{{ $review->attaches() }}</span>
        </div>
    </div>
    @if ($review->preview_img)
        <div class="review__media {{ $review->video ? 'review__media_video':'' }} b-card">
            <img class="review__preview" data-lazy-src="{{ Storage::url($review->preview_img) }}" alt="">
        </div>
    @endif
</div>
<div class="popupN popupN_review" id="popup_review_{{ $review->id }}">
    <a href="javascript:void(0);" class="popupN__close js-close">
    	<img data-lazy-src="/img/gui/close.svg" alt="" class="">
    </a>
    <div class="review review_popup">
        <div class="review__body b-card">
            <a class="person review__person">
                <img data-lazy-src="{{ $review->getAvatar() }}" alt="" class="avatar person__photo">
                <div class="person__info">
                    <p class="person__name">{{ $review->fio }}</p>
                </div>
            </a>
            <hr class="line review__line">
            <p class="subtext review__date">{{ $review->created_at->formatLocalized('%d %B %Y') }}</p>
            <p class="subtext review__text review__text_full">
                    {{ $review->text }}
            </p>
            <div class="review__media review__media_popup {{ $review->video ? 'review__media_video':'' }}">
                @foreach ($review->getPhotos() as $photo)
                    <img class="review__img" data-lazy-src="{{ Storage::url($photo) }}" alt="">
                @endforeach
            </div>
            @if ($review->video)
                <video class="review__video" controls src="{{ Storage::url($review->getVideo()) }}"></video>
            @endif
        </div>
    </div>
    @isset($review->comments)
        <div class="review__comments">
            @foreach ($review->comments as $comment)
                <div class="comment comment_{{ $comment->type }}">
                    <p class="third-title comment__title">{{ $comment->type == 'manager' ? 'Ответ менеджера':'Комментарий клиента' }}</p>
                    <p class="text comment__text">
                        {{ $comment->text }}
                    </p>
                    <div class="comment__user comment__user_{{ $comment->type }} user">
                        @if ($comment->type == 'manager')
                            <div class="user__left">
                                <p class="text user__name">{{ $comment->user->name }}</p>
                                <p class="text user__position">{{ $comment->user->position }}</p>
                            </div>
                            <div class="user__right">
                                <img data-lazy-src="{{ Storage::url($comment->user->avatar) }}" alt="" class="user__avatar">
                            </div>
                        @else
                            <div class="user__left">
                                <img data-lazy-src="{{ $comment->getAvatar() }}" alt="" class="user__avatar">
                            </div>
                            <div class="user__right">
                                <p class="text user__name">{{ $comment->fio }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
            <div class="js-add-comment" id="add-comment-{{ $review->id }}">
                <add-comment :review="{{ $review->id }}"></add-comment>
            </div>
        </div>
    @endisset
</div>
