@extends('common.layout')
    @section('content')
    @include('common.gui.header')

        <section class="employees">
            @include('common.gui.titles', [
                'class' =>  'container',
                'overtitle' =>  'Наша команда',
                'title' =>  "Сотрудники компании «Твой стиль» {$city->name_formatted}",
                'intro' =>  "В нашей компании работают только опытные сотрудники,
                            которые постоянно проходят курсы повышения квалификации.
                            Весь штат работников имеет ни один год практики в производстве и монтаже ПВХ изделий любой сложности"
            ])

            <div class="employees__content container b-texture">
                <!--<div class="switcher employees__switcher">
                    <a class="switcher__button switcher__button_active">Все</a>
                    <a class="switcher__button">Администрация</a>
                    <a class="switcher__button">Менеджеры</a>
                    <a class="switcher__button">Монтажники</a>
                </div>-->


                @foreach ($employees as $employee)
                    <section class="employee employees__card">
                        <img src="{{ Storage::url($employee->photo) }}" alt="" class="employee__image">
                        <div class="employee__content">
                            <p>Администрация</p>
                            <h2>{{ $employee->fio }}</h2>
                            <p>{!! $employee->desc !!}</p>
                        </div>
                    </section>
                @endforeach


                <a href="{{ route('vacancies', request()->route()->city) }}" class="additionally employees__additionally">
                    <p class="card-title additionally__title">Вакансии</h2>
                    <hr class="line additionally__line">
                    <p class="subtext subtext_white">Мечтаете о&nbsp;работе в&nbsp;крупной и&nbsp;стабильной компании? Считаете себя профессионалом своего дела? Тогда именно для вас мы&nbsp;открываем дополнительные вакансии в&nbsp;нашем представительстве в&nbsp;вашем городе.</p>
                </a>
            </div>
        </section>
    @include('common.gui.footer')
@endsection
