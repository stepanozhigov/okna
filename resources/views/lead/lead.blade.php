@extends('lead.leadLayout')

@section('content')
    <div class="lead_page">
        <lead :city="{{$city}}" :name_formatted="'{!! $city->name_formatted !!}'"></lead>
    </div>
@endsection
