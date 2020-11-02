@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')

    <section class="catalogueDetail">
        @include('common.gui.titles', [
            'overtitle' =>  'Цена и фото',
            'class' =>  'container',
            'title' =>  "Глянцевые натяжные потолки {$city->name_formatted}",
            'intro' =>  "Глянцевые полотна одни из&nbsp;самых популярных видов натяжных потолков. Благодаря своей лаковой поверхности, обладают ярко выраженным светоотражающим эффектом."
        ])

        <div class="catalogueDetail__main">
            <div id="catalogue-slider">
                <catalogue-slider ></catalogue-slider>
            </div>
            <h2 class="catalogueDetail__title">Цена на потолок</h2>
            <p class="catalogueDetail__price">Полотно — от 100 ₽/м2</p>
            <p class="catalogueDetail__install">С установкой — от 350 ₽/м2</p>
            <div class="catalogueDetail__buttons">
                <button class="button buttons__item js-show" data-src="#popup_callback" data-title="Вызов замерщика" data-button="Вызвать замерщика">Вызвать замерщика</button>
                <a href="javascript:void(0);" class="button  button_gray">Рассчитать стоимость</a>
            </div>
        </div>
        </div>
        <div class="catalogueDetail__desc">
            <p>
                 <b>Глянцевые натяжные потолки</b>&nbsp;дают&nbsp;отличную возможность сформировать яркий акцент на Вашем потолке&nbsp;в&nbsp;любом интерьере и&nbsp;подчеркнуть его изысканный дизайн. Идеально ровная светоотражающая поверхность может отражать до&nbsp;90% света. Благодаря этому в&nbsp;помещении всегда будет много света, а&nbsp;пространство зрительно увеличится.
            </p>
            <p>
                 <b>Глянцевые натяжные потолки</b>&nbsp;дают&nbsp;отличную возможность сформировать яркий акцент на Вашем потолке&nbsp;в&nbsp;любом интерьере и&nbsp;подчеркнуть его изысканный дизайн. Идеально ровная светоотражающая поверхность может отражать до&nbsp;90% света. Благодаря этому в&nbsp;помещении всегда будет много света, а&nbsp;пространство зрительно увеличится.
            </p>
        </div>
        <div class="catalogueDetail__filter">
            <p>Другие материалы для натяжных потолков</p>
            <div class="catalogueDetail__types">
                <a href="javascript:void(0);" class="tag catalogueDetail__tag">Двухуровневые</a>
                <a href="javascript:void(0);" class="tag catalogueDetail__tag">Парящие</a>
                <a href="javascript:void(0);" class="tag catalogueDetail__tag">Звездное небо</a>
                <a href="javascript:void(0);" class="tag catalogueDetail__tag">Матовые</a>
                <a href="javascript:void(0);" class="tag catalogueDetail__tag">Сатиновые</a>
                <a href="javascript:void(0);" class="tag catalogueDetail__tag">Тканевые</a>
                <a href="javascript:void(0);" class="tag catalogueDetail__tag">Разные</a>
            </div>
        </div>
    </section>
    @include('common.gui.footer')
@endsection
