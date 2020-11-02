@extends('common.layout')

@section('content')
    @include('common.gui.header')
        @include('common.gui.titles', [
            'class' =>  'container about__titles',
            'overtitle' =>  'ИНФОРМАЦИЯ О&nbsp;КОМПАНИИ',
            'title' =>  "Фабрика пластиковых&nbsp;окон «Твой&nbsp;стиль»&nbsp;{$city->name_formatted}"
        ])
        <section class="about">
            <div class="b-texture">
                <blockquote class="about__quote">
                    <div class="container">
                        <p>Собственное производство обеспечивает качество продукции, короткие сроки от&nbsp;заказа до&nbsp;установки и,&nbsp;конечно, низкую стоимость!</p>
                    </div>
                </blockquote>
                <p class="about__subtext">За&nbsp;более чем 16&nbsp;лет работы фабрика пластиковых окон &laquo;Твой стиль&raquo; из&nbsp;небольшого офиса в&nbsp;Хабаровске выросла в&nbsp;крупную сеть,
    						 которая сейчас насчитывает 8&nbsp;представительств в&nbsp;России. Мы&nbsp;заслужили доверие тысяч заказчиков по&nbsp;всей стране,
    						 благодаря качественному производству, профессиональной команде и&nbsp;высокому уровню предоставляемых услуг.
                </p>
                <div class="about__images">
                    @foreach($city->getPhotos() as $photo)
                        <img src="{{ Storage::url($photo) }}" alt="" class="about__image">
                    @endforeach
                    <!--<img src="/img/about/02.jpg" alt="" class="about__image">
                    <img src="/img/about/03.jpg" alt="" class="about__image">
                    <img src="/img/about/04.jpg" alt="" class="about__image">
                    <img src="/img/about/05.jpg" alt="" class="about__image">
                    <img src="/img/about/06.jpg" alt="" class="about__image">-->
					<a class="about__all-images" href="javascript:void(0);">Смотреть все фото</a>
                </div>
            </div>
            <div class="about__content">
                    <p class="about__desc text">
                        Надежные ПВХ-системы и легкие алюминиевые конструкции — самые оптимальные варианты не только для остекления помещений, но и для изготовления перегородок, а также входных и межкомнатных дверей. У нас есть собственная фабрика, где мы производим как стандартные конструкции, так и системы по индивидуальным проектам, с учетом всех особенностей помещения и пожеланий заказчика.
                    </p>
                    <p class="about__desc text">В компании всегда бесплатный замер и безупречный сервис. Наши специалисты рады помочь вам в подборе любой светопрозрачной конструкцией. Оставьте свой номер телефона в поле для обратной связи или заходите в наш офис, чтобы ознакомиться со всем ассортиментом.</p>
                    @include('common.gui.titles', ['secondTitle' => 'Награды компании «Твой стиль»'])
                    <div class="about__rewards">
                        <div class="about__reward">
                            <img src="/img/trophy-001.png" alt="">
                            <h3>«Лучший товар Приморья»</h3>
                            <p class="text">«Народный бренд&nbsp;в&nbsp;сфере
                            строительных&nbsp;услуг»</p>
                        </div>
                        <div class="about__reward">
                            <img src="/img/trophy-002.png" alt="">
                            <h3>«ГЕММА» — лучшие товары и услуги</h3>
                            <p class="text">«Профессионализм в сфере продаж
                            и&nbsp;обслуживания&nbsp;населения&mdash;2016»</p>
                        </div>
                        <div class="about__reward">
                            <img src="/img/trophy-003.png" alt="">
                            <h3>Бизнес-премия Дальнего Востока</h3>
                            <p class="text">«Лучший производитель пластиковых окон
                            на&nbsp;Дальем&nbsp;Востоке–2012»</p>
                        </div>
						<a class="about__all-rewards" href="javascript:void(0);">Смотреть все награды</a>
                    </div>
                    <div class="about__staff">
                        <img src="/img/about/group-photo.png" alt="">
                    </div>
            </div>
        </section>
    @include('common.gui.footer')
@endsection
