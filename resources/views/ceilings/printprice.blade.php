@extends('common.layout', ['seoData' => $seoData])

@section('content')
    @include('common.gui.header')
    <section class="printprice">
        <div class="page__wrapper">
            @include('common.gui.titles', [
                'overtitle' =>  'Прайс',
                'title' =>  "Цены на фотопечать"
            ])
            <div class="printprice__content">
                <div class="printprice__item">
                    <h3 class="printprice__item-title">Фотопечать на натяжных потолках</h3>
                    <table>
                        <tr>
                            <th>Наименование услуги</th>
                            <th>Цена</th>
                        </tr>
                        <tr>
                            <td>Печать на натяжных потолках</td>
                            <td><span>890</span> ₽/м</td>
                        </tr>
                        <tr>
                            <td>Изображение для печати</td>
                            <td><span>300</span> ₽/м</td>
                        </tr>
                        <tr>
                            <td>Углы</td>
                            <td><span>50</span> ₽</td>
                        </tr>
                        <tr>
                            <td>Печать на полотне со швом</td>
                            <td><span>15</span>%</td>
                        </tr>
                        <tr>
                            <td>Упаковка</td>
                            <td><span>200</span> ₽</td>
                        </tr>
                        <tr>
                            <td>Стоимость цветопробы, 30х30 см.</td>
                            <td>Бесплатно</td>
                        </tr>
                        <tr>
                            <td>Подготовка изображения</td>
                            <td><span>500</span> ₽</td>
                        </tr>
                        <tr>
                            <td>Каталог фотопечати</td>
                            <td><span>1500</span> ₽</td>
                        </tr>
                    </table>
                    <p class="printprice__text">
                        — УФ-печать предполагает нанесение матового красочного слоя в виде тонкой полимерной плёнки на поверхность.
                    </p>
                    <p class="printprice__text">
                        — Печать на полотне со швом допускает нестыковку рисунка до 5 миллиметров и браком не является.
                    </p>
                    <p class="printprice__text">
                        — При печати менее 1 м2 стоимость округляется до цены 1 м2.
                    </p>
                    <p class="printprice__text">
                        — Производство фотопечати находится в городе Хабаровск.
                    </p>
                    <p class="printprice__text">
                        — До транспортной компании доставляем БЕСПЛАТНО!
                    </p>
                </div>
                <div class="printprice__item">
                    <h3 class="printprice__item-title">Фотопечать на других материалах</h3>
                    <table>
                        <tr>
                            <th>Фактура полотна</th>
                            <th>Цена</th>
                        </tr>
                        <tr>
                            <td>Стекло</td>
                            <td><span>1750</span> ₽/м2</td>
                        </tr>
                        <tr>
                            <td>Стекло + заливка белой краской</td>
                            <td><span>2100</span> ₽/м2</td>
                        </tr>
                        <tr>
                            <td>Армирование стекла</td>
                            <td><span>1250</span> ₽/м2</td>
                        </tr>
                        <tr>
                            <td>Зеркало + заливка белой краской</td>
                            <td><span>1950</span> ₽/м2</td>
                        </tr>
                        <tr>
                            <td>Рулонные шторы, линолеум</td>
                            <td><span>950</span> ₽/м2</td>
                        </tr>
                        <tr>
                            <td>Кафель, мрамор, керамогранит</td>
                            <td><span>1950</span> ₽/м2</td>
                        </tr>
                        <tr>
                            <td>Дерево, МДФ, ЛДСП, ламинат</td>
                            <td><span>1950</span> ₽/м2</td>
                        </tr>
                        <tr>
                            <td>Пробковое покрытие</td>
                            <td><span>1950</span> ₽/м2</td>
                        </tr>
                        <tr>
                            <td>Пластик, сотовый поликарбонат</td>
                            <td><span>1250</span> ₽/м2</td>
                        </tr>
                        <tr>
                            <td>Cтеновые панели, алюкобонд</td>
                            <td><span>1250</span> ₽/м2</td>
                        </tr>
                        <tr>
                            <td>Самоклеющаяся пленка</td>
                            <td><span>950</span> ₽/м2</td>
                        </tr>
                        <tr>
                            <td>Обои</td>
                            <td><span>950</span> ₽/м2</td>
                        </tr>
                        <tr>
                            <td>Баннерная ткань, холст</td>
                            <td><span>950</span> ₽/м2</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="printprice__printer">
            <h3 class="printprice__printer-name">
                DYSS Apollo GH 3200
            </h3>
            <img class="printprice__printer" src="/img/ceilings/printer_big.jpg" alt="">
            <p class="printprice__printer-desc">
                Гибридные УФ принтеры DYSS способны удовлетворить любые потребности печати как на рулонных так и на плоских носителях.  Главное преимущество системы — высокая производительность и безупречное фотографическое качество отпечатка с разрешением ?до 1200х1270 dpi.
            </p>
        </div>
    </section>

    @include('common.gui.footer')
@endsection
