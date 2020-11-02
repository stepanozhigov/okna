@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')
    <section class="photoprint">
        @include('common.gui.titles', [
        'overtitle' =>  'Фотопечать',
        'title' =>  "Фотопечать на&nbsp;любых поверхностях",
        'intro' =>  "Еще несколько лет назад сложно было представить, что натяжной потолок может быть абсолютно любым. Цвет, фактура, дизайн, сама конструкция&nbsp;&mdash; теперь все можно изменить по&nbsp;собственной задумке."
        ])

        <div class="photoprint__directions">
            <article class="photoprint__dirention">
                <img src="/img/ceilings/catalogue-item-9.jpg" alt="">
                <a href="javascript:void(0)">Каталог изображений</a>
            </article>
            <article class="photoprint__dirention">
                <img src="/img/ceilings/catalogue-item-10.jpg" alt="">
                <a href="javascript:void(0)">Каталог поверхностей</a>
            </article>
            <article class="photoprint__dirention">
                <img src="/img/ceilings/catalogue-item-price.jpg" alt="">
                <a href="javascript:void(0)">Цены на фотопечать</a>
            </article>
        </div>
        <div class="photoprint__info">
            <p class="photoprint__text">В&nbsp;наше время потолок&nbsp;&mdash; это уже не&nbsp;невзрачная конструкция, а&nbsp;самостоятельный элемент декора, способный задать настроение всему помещению. Фотопечать на&nbsp;потолке&nbsp;&mdash; отличная возможность сделать свой интерьер поистине уникальным, добавив в&nbsp;него новых ярких красок.</p>
            <p class="photoprint__text">Наши менеджеры помогли украсить яркими натяжными потолками уже сотни квартир, офисов и&nbsp;других помещений. Кстати, помимо фотопечати на&nbsp;потолках, мы&nbsp;можем нанести ваше изображение на&nbsp;любую другую поверхность. Узнайте об&nbsp;этом больше в&nbsp;нашем каталоге.</p>
            <q class="photoprint__quote">Фактура и&nbsp;размеры не&nbsp;имеют никакого значения&nbsp;&mdash; достаточно выбрать понравившуюся картинку</q>
            <section class="photoprint__gallery">
                <h2 class="photoprint__title">Эксклюзивная технология фотопечати на&nbsp;современном оборудовании</h2>
                <p class="photoprint__text">Современное оборудование позволяет создавать яркие полноцветные изображения даже на&nbsp;таком сложном материале, как натяжной потолок. Причем его фактура и&nbsp;размеры не&nbsp;имеют значения&nbsp;&mdash; достаточно выбрать понравившуюся картинку в&nbsp;интернете или принести свое фото. Остальное&nbsp;&mdash; дело техники.</p>
                <div id="simple-slider">
                    <simple-slider></simple-slider>
                </div>
                <p class="photoprint__text">Суть этой технологии проста: краска наносится на&nbsp;поверхность в&nbsp;жидком виде и&nbsp;застывает под воздействием уф-излучения. Это обеспечивает изображению стойкость на&nbsp;долгие годы. Также цветопередача ультрафиолетовыми красками намного лучше аналогов, поэтому изображение получается четким, ярким и&nbsp;максимально реалистичным.</p>
                <iframe  width="684" height="320" src="https://www.youtube.com/embed/Bl4XqAbw0fg" showinfo="0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p class="photoprint__text">У&nbsp;специалистов компании &laquo;Твой стиль&raquo; большой опыт работы в&nbsp;сфере фотопечати на&nbsp;потолках, поэтому, помимо стандартных вариантов изображений, мы&nbsp;можем предложить вам индивидуальные проекты, а&nbsp;также потолочные картины и&nbsp;панно с&nbsp;использованием подсветки и&nbsp;светодиодных лент.</p>
            </section>
            <div class="photoprint__why">
                <h3>Почему именно фотопечать?</h3>
                <p class="photoprint__text">Натяжные потолки с&nbsp;фотопечатью не&nbsp;теряют своей яркости с&nbsp;течением времени. Поверхность без труда выдерживает и&nbsp;палящие лучи солнца, и&nbsp;низкие температуры, и&nbsp;многократное мытье неагрессивными чистящими средствами.</p>
                <p class="photoprint__text">Но&nbsp;как определиться с&nbsp;выбором изображения среди множества вариантов? Можно обратиться к&nbsp;дизайнеру или заглянуть на&nbsp;тематические сайты, например на&nbsp;shutterstock. com. В&nbsp;соответствующих разделах вы&nbsp;сможете найти всё, что ваша душа пожелает&nbsp;&mdash; любое изображение подойдет для фотопечати на&nbsp;потолке при условии его хорошего качества.</p>
            </div>
        </div>
    </section>


    @include('common.gui.footer')
@endsection
