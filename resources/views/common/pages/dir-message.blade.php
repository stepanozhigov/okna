@extends('common.layout')

@section('content')
    @include('common.gui.header')
        <section class="dir-message container">
                <div class="person dir-message__person">
                    <img src="/img/gui/director.jpg" srcset="/img/gui/director@2x.jpg 2x" class="person__img">
                </div>
                @include('common.gui.titles', [
                    'title' =>  'Написать обращение директору',
                    'overtitle' =>  'Репин Александр Александрович',
                    'intro' =>  'Я принимаю абсолютно все жалобы и предложения для улучшения качества работы и сервиса.
                                 В течении 24 часов ваше обращение будет мною рассмотрено и вы получите ответ.'
                ])

                <div class="socials">
                    <a href="" class="socials__item">
                        <div class="socials__icon socials__icon_insta"></div>
                    </a>
                    <a href="" class="socials__item">
                        <div class="socials__icon socials__icon_vk"></div>
                    </a>
                    <a href="" class="socials__item">
                        <div class="socials__icon socials__icon_whatsapp"></div>
                    </a>
                </div>

                <form method="post" class="dir-message__form b-texture">
                    <label class="dir-message__input-wrap">
                        <input type="text" name="name" value="" class="input dir-message__input" placeholder="Ваше имя*" required>
                    </label>
                    <label class="dir-message__input-wrap">
                        <input type="text" name=city"" value="" class="input dir-message__input" placeholder="Ваш город">
                    </label>
                    <label class="dir-message__input-wrap">
                        <input type="email" name="mail" value="" class="input dir-message__input" placeholder="Ваш e-mail*" required>
                    </label>
                    <label class="dir-message__input-wrap">
                        <input type="tel" name="phone" value="" class="input dir-message__input dir-message__input-phone" placeholder="Ваш телефон">
                    </label>
                    <label class="dir-message__input-wrap">
                        <input type="text" name="theme" value="" class="input dir-message__input" placeholder="Тема сообщения">
                    </label>
                    <textarea name="textarea" rows="8" cols="80" class="input dir-message__textarea" placeholder="Текст сообщения"></textarea>
                    <div class="dir-message__bottom">
                        <button type="submit" name="" class="button dir-message__submit">Отправить</button>
                        <p class="dir-message__status-send">Письмо отправлено</p>
                        <p class="dir-message__rules text">Оставляя контактную информацию, вы соглашаетесь на <a href="javascript:void(0);" class="link" >обработку персональных данных</a></p>
                    </div>
                </form>
        </section>

    @include('common.gui.footer')
@endsection
