<div class="product-type__type-card">
	<div class="type-card__preview">
		<picture class="type-card__preview-wrapper">
			<a class="type-card__preview-link" href="{{$catalogCard->link}}">
				<img class="lozad type-card__preview-img" src="{{$catalogCard->image}}" alt="Dog_typeCardPreview">
			</a>
		</picture>
		<div class="type-card__label">
			<div class="type-card__title">{{$catalogCard->title}}</div>
			<a href="#">
				<div class="type-card__link">Смотреть все
					<svg class="arrow" stroke="#fff" width="10px" height="12px">
						<use xlink:href="../assets/sprite/sprite.svg#tab_arrow"></use>
					</svg>
				</div>
			</a>
		</div>
	</div>
	<div class="type-card__body">
		@foreach($catalogCard->items as $catalogItem)
			<div class="type-card__item"><a href="#">{{$catalogItem->item}}</a></div>
		@endforeach
	</div>
</div>