			<div class="swiper-slide">
				<div class="product-card">
					<div class="product-card__row">
						<a href="{{$items->link}}">
							<div class="product-card__preview">
								<picture class="lozad product-card__preview-image">
									<img class="lozad preview-image__img" data-src="{{$items->image}}" alt="product">
								</picture>
								<div class="product-card__offer">
									@foreach($items->label as $label)
									@if($label == 'Топ продаж')
									<div class="product-card__top-sales">Топ продаж</div>
									@elseif($label == 'Скидка -5%')
									<div class="product-card__discount">Скидка -5%</div>
									@elseif($label == 'Новинка')
									<div class="product-card__new-sales">Новинка</div>
									@endif
									@endforeach
								</div>
							</div>
						</a>
						<div class="product-card__body">
							<div class="product-card__title">{{$items->cardTitle}}</div>
							<div class="product-card__card-price">
							<div class="product-card__rating">
								<svg class="rating__star-icon" width="13px" height="13px">
									<use xlink:href="../assets/sprite/sprite.svg#Star_off"></use>
								</svg>
								<svg class="rating__star-icon" width="13px" height="13px">
									<use xlink:href="../assets/sprite/sprite.svg#Star_off"></use>
								</svg>
								<svg class="rating__star-icon" width="13px" height="13px">
									<use xlink:href="../assets/sprite/sprite.svg#Star_off"></use>
								</svg>
								<svg class="rating__star-icon" width="13px" height="13px">
									<use xlink:href="../assets/sprite/sprite.svg#Star_off"></use>
								</svg>
								<svg class="rating__star-icon" width="13px" height="13px">
									<use xlink:href="../assets/sprite/sprite.svg#Star_off"></use>
								</svg>
								<div class="product-card__rating-value">({{$items->ratingValue}})</div>
							</div>
								<div class="card-price__order">
									<div class="card-price__order-button">
										<svg class="order-button__icon" fill="white" width="11px" height="14px">
											<use xlink:href="../assets/sprite/sprite.svg#Order_btn"></use>
										</svg>
									</div>
									<div class="card-price__order-price">{{$items->orderPrice}}</div>
								</div>
								<div class="card-price__stock">
									<div class="card-price__old-price">{{$items->oldPrice}}</div>
									<div class="card-price__new-price">{{$items->lastPrice}}</div>
								</div>
								<div class="card-price__button">
									<svg class="card-price__button-icon" width="23px" height="23px" fill="#3A9EFD">
										<use xlink:href="../assets/sprite/sprite.svg#basket"></use>
									</svg>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>