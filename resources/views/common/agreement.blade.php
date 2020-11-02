@extends('common.layout')
    @section('content')
        @include('common.gui.header')
        @include('common.gui.titles', [
            'class' =>  'container',
            'overtitle' =>  'ОБРАТНАЯ СВЯЗЬ',
            'title' =>  "Отзывы о компании «Твой стиль» {{ $city->name_formatted }}",
            'intro' =>  "Сюда нужно добавить какой-нибудь текст про страницу. А так же о том, что пользователь может оставить отзыв и получить что-нибудь хорошее (например средство за уходом, скидку или другой подарок)."
        ])
        <section class="agreement">
            <div>
                <p>Предоставляя свои персональные данные при отправки формы, вы&nbsp;даёте своё согласие на&nbsp;обработку и&nbsp;использование своих персональных данных согласно ФЗ №&nbsp;152-ФЗ «О&nbsp;персональных данных» от&nbsp;27.07.2006&nbsp;г.
                    различными способами в&nbsp;целях, указанных в&nbsp;настоящих Правилах.</p>
                <p>Мы&nbsp;используем Ваши персональные данные в&nbsp;целях:</p>
                <ul>
                    <li>—&nbsp;оформления вашей заявки;</li>
                    <li>—&nbsp;получения Вами персонализированной рекламы;</li>
                    <li>—&nbsp;для выполнения своих обязательств перед Вами.</li>
                </ul>
                <p>Мы&nbsp;обязуемся не&nbsp;разглашать полученную от&nbsp;Вас информацию. При этом не&nbsp;считается нарушением обязательств разглашение информации в&nbsp;случае, когда обязанность такого раскрытия установлена требованиями действующего
                    законодательства&nbsp;РФ</p>
            </div>

        </section>
        @include('common.gui.footer')
        <script src="https://vk.com/js/api/openapi.js?146" type="text/javascript"></script>
    @endsection