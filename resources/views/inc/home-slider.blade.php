<div class="slider-swiper">
	<div class="swiper__header">
		<div class="swiper__header-body">
			<div class="swiper__header-title">Лучшие предложения недели</div>
			<div class="swiper__header-tabs">
				<div class="swiper__header-tab header-tab--active" data-swiper-tab-name="swiper-tab-dog">Собакам</div>
				<div class="swiper__header-tab" data-swiper-tab-name="swiper-tab-cat">Кошкам</div>
				<div class="swiper__header-tab" data-swiper-tab-name="swiper-tab-bird">Птицам</div>
				<div class="swiper__header-tab" data-swiper-tab-name="swiper-tab-rat">Грызунам</div>
			</div>
		</div>
		<div class="swiper__nav-buttons">
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>
	</div>
	@foreach(config('mock.slider-card') as $sliderCard)
	@if($sliderCard->condition == "active")
	<div class="swiper swiper--is-active {{$sliderCard->data}}">
		<div class="swiper-wrapper">
		<!-- Slides -->
		@foreach($sliderCard->items as $items)
			@include('inc.swiper-slide')
		@endforeach
		</div>
		<div class="swiper-pagination"></div>
	</div>
	@else
	<div class="swiper {{$sliderCard->data}}">
		<div class="swiper-wrapper">
		<!-- Slides -->
		@foreach($sliderCard->items as $items)
			@include('inc.swiper-slide')
		@endforeach
		</div>
		<div class="swiper-pagination"></div>
	</div>
	@endif
	@endforeach
</div>