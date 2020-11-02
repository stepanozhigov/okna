@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')

    <section class="catalogueDetail catalogueDetail_surfaces">
        @include('common.gui.titles', [
            'overtitle' =>  'Каталог поверхностей',
            'class' =>  'container',
            'title' =>  "Фотопечать на поверхностях",
            'intro' =>  "Наш современный UV-принтер позволяет выполнять фотопечать не&nbsp;только на&nbsp;натяжных потолках, но&nbsp;и&nbsp;на&nbsp;других поверхностях. Освежите ваш старый ремонт или придайте яркости новому интерьеру, благодаря ультрафиолетовой печати."
        ])

        <div class="catalogueDetail__main">
			<h2 class="catalogueDetail__title">Выберите тип поверхности</h2>
			<div class="catalogueDetail__filter">
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
            <div id="catalogue-slider">
                <catalogue-slider ></catalogue-slider>
            </div>
            <p class="catalogueDetail__price">Печать на натяжных потолках — от 1 000 ₽/м²</p>
        </div>
        </div>
        <div class="catalogueDetail__desc">
            <p>
                 Натяжные потолки с&nbsp;фотопечатью&nbsp;&mdash; это универсальный способ преобразить пространство и&nbsp;придать ему оригинальности.
            </p>
            <p>
                 Большой популярностью пользуются потолки с&nbsp;изображением неба. Такой дизайнерский ход отлично впишется в&nbsp;любую комнату, будь&nbsp;то гостиная, спальня или детская.
            </p>
			<p>
				Также интересной задумкой является потолок &laquo;звездное небо&raquo;, в&nbsp;котором фотопечать совмещается с&nbsp;обилием точечных светильников, создавая самый настоящий космос у&nbsp;вас дома.
			</p>
			<p>
				Тканевый потолок&nbsp;&mdash; это универсальный отделочный материал, представляющий собой полотно из&nbsp;полиэстера с&nbsp;влагоотталкивающей пропиткой на&nbsp;основе полиуретана. Благодаря особой технологии производства, такой потолок внешне напоминает фактуру ткани, но&nbsp;при этом прекрасно сочетает в&nbsp;себе все возможности натяжного полотна. Его основные плюсы&nbsp;&mdash; эстетичный внешний вид, практичность и&nbsp;устойчивость к&nbsp;воздействию высоких температур.
			</p>
			<p>
				Разнообразить привычный интерьер помогут тканевые потолки с&nbsp;фотопечатью. Растительные орнаменты, изображения природы, неба или оригинальные картины, созданные специально для вас&nbsp;&mdash; все это можно перенести на&nbsp;потолок в&nbsp;помещении любой площади!
			</p>
			<p>
				Фотопечать наносится на&nbsp;тканевый натяжной потолок с&nbsp;помощью высокотехнологичного UV-принтера, который позволяет получать максимально яркое изображение с&nbsp;точной цветопередачей. Оно не&nbsp;выгорает и&nbsp;не&nbsp;стирается со&nbsp;временем, поэтому вы&nbsp;можете быть уверенны, что ваш потолок прослужит вам не&nbsp;одно десятилетие.
			</p>
			<p>
				Тканевые натяжные потолки с&nbsp;фотопечатью&nbsp;&mdash; стильное решение для тех, кто не&nbsp;боится экспериментов. Загляните в&nbsp;наш офис, чтобы ознакомиться с&nbsp;каталогами. Мы&nbsp;поможем подобрать оптимальный вариант для любого помещения.
			</p>
        </div>

    </section>
    @include('common.gui.footer')
@endsection
