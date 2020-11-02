<style type="text/css">
	a {
		display: flex;
		font-size: 20px;
		color: black;
		margin-bottom: 0px;
	}
	.sublink {
		margin-left: 25px;
	}
</style>
@foreach($cities as $city)
	<a target="_blank" href="">{{ $city->name }}</a>
	<br><hr><br>
		@foreach($pages as $page => $title)
			<a class="sublink" target="_blank" href="{{ str_replace('#city#', $city->code, $page) }}">{{ str_replace('#city#', $city->code, $page) }}</a>
			<br>
		@endforeach
	<br><br>
@endforeach