<div class="paginator reviews__paginator">
	@foreach ($elements[0] as $pageNum => $element)
		<a href="{{ $element }}" class="paginator__item {{ $paginator->currentPage() == $pageNum ? 'paginator__item_active':'' }}">{{ $pageNum }}</a>
	@endforeach
</div>