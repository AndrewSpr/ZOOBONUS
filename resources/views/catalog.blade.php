@extends('layout')

@section('content')
<div class="catalog-header">
	<div class="catalog-header__row">
		@foreach(config('mock.pet-widget') as $petWidget)
			@include('inc.pet-widget')
		@endforeach
		<div class="catalog-header__body">
			@foreach(config('mock.catalog-chips') as $catalogChips)
			<div class="catalog-header__title"><b>Каталог товаров</b> {{$catalogChips->title}}</div>
			<div class="catalog-header__subtitle">Товары и аксессуары {{$catalogChips->subtitle}} </div>
			<div class="catalog-header__chips">
				@foreach($catalogChips->chips as $chips)
				<div class="chips__item"><a href="{{$chips->link}}">{{$chips->title}}</a></div>
				@endforeach
			</div>
			@endforeach
		</div>
	</div>
</div>
<div class="product-type">
	<div class="product-type__row">
		@foreach(config('mock.catalog-type') as $catalogCard)
			@include('inc.catalog_link-type')
		@endforeach
	</div>
</div>
@foreach(config('mock.seoCatalog-text') as $seoInfo)
	@include('inc.seo-text')
@endforeach
@endsection