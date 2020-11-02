@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')
    @include('common.gui.titles', [
        'overtitle' =>  'Слив воды',
        'title' =>  "Слив воды с&nbsp;натяжных потолков",
        'intro' =>  "Рано или поздно владельцы натяжных потолков в&nbsp;многоквартирных домах сталкиваются с&nbsp;затоплением соседями сверху. И&nbsp;устранить эту неприятность под силу только высококвалифицированным профессионалам."
    ])

    <section class="serviceDetail">
        @include('common.gui.titles', [
            'secondTitle' =>  "Опасности при самостоятельном сливе воды"
        ])
        <section class="reason">
            <div class="reason__image-wrap">
                <div class="reason__image-inner">
                    <img src="/img/ceilings/draining-1.jpg" alt="" class="reason__image">
                </div>
            </div>
            <div class="reason__content">
                <h4 class="reason__title">Опасность затопить квартиру</h4>
                <p class="reason__text">Вода хорошо проводит электричество, поэтому при затоплении квартиры следует сразу&nbsp;же отключить электроэнергию. Это особенно важно, если в&nbsp;потолке есть точечные светильники. Сообщите соседям о&nbsp;затоплении квартиры, чтобы как можно скорее прекратить поступление влаги в&nbsp;комнату. Затем вызовите специалистов компании &laquo;Твой стиль&raquo;, которые сольют накопившуюся воду из&nbsp;натяжного потолка.</p>
            </div>
        </section>
        <section class="reason">
            <div class="reason__image-wrap">
                <div class="reason__image-inner">
                    <img src="/img/ceilings/draining-2.jpg" alt="" class="reason__image">
                </div>
            </div>
            <div class="reason__content">
                <h4 class="reason__title">Опасность получить электрический удар</h4>
                <p class="reason__text">Наш специалист приедет к&nbsp;вам в&nbsp;назначенное время, выполнит необходимые замеры, составит цифровой макет проекта и&nbsp;рассчитает цену.
При необходимости, предоставит каталог возможных вариантов фактур и&nbsp;расцветок натяжных потолков.</p>
            </div>
        </section>
        <section class="reason">
            <div class="reason__image-wrap">
                <div class="reason__image-inner">
                    <img src="/img/ceilings/draining-3.jpg" alt="" class="reason__image">
                </div>
            </div>
            <div class="reason__content">
                <h4 class="reason__title">Опасность повредить потолок</h4>
                <p class="reason__text">Не&nbsp;советуем вмешиваться в&nbsp;потолочное покрытие без соответствующего опыта. Нередко при самостоятельном сливе влаги расползаются швы или повреждается поверхность полотна, которая потом не&nbsp;подлежит восстановлению. Оперативное обращение к&nbsp;нашим специалистам избавит вас от&nbsp;дополнительных затрат.</p>
            </div>
        </section>
        <section class="serviceDetail__info">
            <div class="serviceDetail__info-desc">
                <h2>Что&nbsp;же делать, если потоп всё-таки произошел?</h2>
                <p>—&nbsp;Отключите в&nbsp;квартире электричество, чтобы не&nbsp;подвергать себя и&nbsp;домочадцев опасности. <br>
		 —&nbsp;Незамедлительно позвоните нам. Наши специалисты оперативно приедут на&nbsp;место и&nbsp;спасут потолок от&nbsp;воды, а&nbsp;также помогут сэкономить ваше время и&nbsp;нервы.<br>
		 Цена на&nbsp;слив воды с&nbsp;натяжного потолка вас приятно удивит. А&nbsp;опыт сотрудников компании «Твой стиль» позволит сохранить ваш ремонт и&nbsp;быстро восстановить полотно даже после потопа.</p>
            </div>
        </section>
    </section>

    @include('common.gui.footer')
@endsection
