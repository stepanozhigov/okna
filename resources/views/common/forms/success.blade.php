@extends('common.layout')
@section('content')
    @include('common.gui.header')
    <script>
      fbq('track', 'Lead');
    </script>
    <section class="formPage formPage_sent">
        @include('common.gui.titles', [
            'title' =>  "Спасибо!",
            'intro' =>  "Ваша заявка успешно отправлена.<br> Специалист свяжется с&nbsp;вами для уточнения даты и&nbsp;времени <span>в&nbsp;течении 5&nbsp;минут</span>"
        ])
        <div class="formPage__additional">
            @include('common.gui.survey')
        </div>
    </section>
    @include('common.gui.footer')
@endsection
