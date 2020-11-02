@if (count($breadcrumbs))
    <section class="breadcrumbs">
        @foreach ($breadcrumbs as $breadcrumb)
            <li class="breadcrumbs__item">
                <a href="{{ $breadcrumb->url ?? '' }}" class="breadcrumbs__link"><p>{{ $breadcrumb->title }}</p> <span></span> </a>
            </li>
        @endforeach
        
    </section>
@endif