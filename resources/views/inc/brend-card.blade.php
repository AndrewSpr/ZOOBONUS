<div class="swiper-slide">
				<div class="product-card">
					<div class="product-card__row">
						<a href="{{$brendCard->link}}">
							<div class="product-card__preview">
								<picture class="lozad product-card__preview-image">
									<img class="lozad preview-image__img" data-src="{{$brendCard->image}}" alt="product">
								</picture>
								<div class="product-card__offer">
									@foreach($brendCard->label as $label)
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
							<div class="product-card__title">{{$brendCard->cardTitle}}</div>
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
								<div class="product-card__rating-value">({{$brendCard->ratingValue}})</div>
							</div>
								<div class="card-price__order">
									<div class="card-price__order-button">
										<svg class="order-button__icon" fill="white" width="11px" height="14px">
											<use xlink:href="../assets/sprite/sprite.svg#Order_btn"></use>
										</svg>
									</div>
									<div class="card-price__order-price">{{$brendCard->orderPrice}}</div>
								</div>
								<div class="card-price__stock">
									<div class="card-price__old-price">{{$brendCard->oldPrice}}</div>
									<div class="card-price__new-price">{{$brendCard->lastPrice}}</div>
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