<div class="product-about">
    <div class="product-about__row">
        @foreach(config('mock.product-page') as $aboutProduct)
        <div class="product-about__title">{{$aboutProduct->title}}</div>
        <div class="product-about__body">
            <div class="product-about__gallery">
                <div class="product-about__gallery-col">
                    @foreach($aboutProduct->images as $images)
                    @if($images->condition == 'active')
                    <div class="gallery-col__item _active" data-img-id="{{$images->id}}">
                        <picture class="gallery-col__image">
                            <img data-src="{{$images->smallImg}}" class="lozad gallery-col__img" alt="product-mini-image">
                        </picture>
                    </div>
                    @else
                    <div class="gallery-col__item" data-img-id="{{$images->id}}">
                        <picture class="gallery-col__image">
                            <img data-src="{{$images->smallImg}}" class="lozad gallery-col__img" alt="product-mini-image">
                        </picture>
                    </div>
                    @endif
                    @endforeach
                    <div class="gallery-col__video-review">
                        <svg class="video-review__icon" width="40px" height="40px">
							<use xlink:href="../assets/sprite/sprite.svg#play-video"></use>
						</svg>
                        <div class="video-review__text">Видеообзор</div>
                    </div>  
                </div>
                <div class="gallery__preview">
                    @foreach($aboutProduct->images as $images)
                    @if($images->condition == 'active')
                    <picture class="gallery__preview-image _active {{$images->id}}">
                        <img data-src="{{$images->bigImg}}" class="lozad gallery__preview-img _active" alt="product-big-image">
                        <picture class="preview__avatar">
					        <img class="lozad preview__avatar-img" data-src="{{$aboutProduct->ppfImg}}" alt="dog_ppf">
				        </picture>
                        @foreach($aboutProduct->label as $label)
                        @if($label == 'Скидка -5%')
                        <div class="preview__discount-label">Скидка {{$aboutProduct->discount}}</div>
                        @endif
                        @endforeach
                        <div class="preview__favorite">
                            <svg stroke="#B6B7C4" width="20px" height="20px">
								<use xlink:href="../assets/sprite/sprite.svg#favorite"></use>
							</svg>
                        </div>
                    </picture>
                    @else
                    <picture class="gallery__preview-image {{$images->id}}">
                        <img data-src="{{$images->bigImg}}" class="lozad gallery__preview-img" alt="product-big-image">
                        <picture class="preview__avatar">
					        <img class="lozad preview__avatar-img" data-src="{{$aboutProduct->ppfImg}}" alt="dog_ppf">
				        </picture>
                        @foreach($aboutProduct->label as $label)
                        @if($label == 'Скидка -5%')
                        <div class="preview__discount-label">Скидка {{$aboutProduct->discount}}</div>
                        @endif
                        @endforeach
                        <div class="preview__favorite">
                            <svg stroke="#B6B7C4" width="20px" height="20px">
								<use xlink:href="../assets/sprite/sprite.svg#favorite"></use>
							</svg>
                        </div>
                    </picture>
                    @endif
                    @endforeach
                    <div class="gallery__social-networks">
                        <div class="gallery__text">Поделиться</div>
                        <div class="gallery__link">
                            <svg width="17px" height="17px" fill="#fff">
								<use xlink:href="../assets/sprite/sprite.svg#Facebook_pop-up"></use>
							</svg>
                        </div>
                        <div class="gallery__link">
                            <svg width="17px" height="17px" fill="#fff">
								<use xlink:href="../assets/sprite/sprite.svg#twitter"></use>
							</svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-about__product-trade">
                <div class="product-trade__info">
                    <div class="product-trade__manufacturer">
                        <picture class="product-trade__company">
                            <img data-src="{{$aboutProduct->manufacturerLogo}}" class="lozad product-trade__company-logo" alt="product-about-country">
                        </picture>
                        <div class="product-trade__country">{{$aboutProduct->manufacturer}}</div>
                    </div>
                    <div class="product-trade__rating">
                        <svg class="product-trade__rating-star" width="24px" height="24px">
							<use xlink:href="../assets/sprite/sprite.svg#Star_off"></use>
						</svg>
                        <svg class="product-trade__rating-star" width="24px" height="24px">
							<use xlink:href="../assets/sprite/sprite.svg#Star_off"></use>
						</svg>
                        <svg class="product-trade__rating-star" width="24px" height="24px">
							<use xlink:href="../assets/sprite/sprite.svg#Star_off"></use>
						</svg>
                        <svg class="product-trade__rating-star" width="24px" height="24px">
							<use xlink:href="../assets/sprite/sprite.svg#Star_off"></use>
						</svg>
                        <svg class="product-trade__rating-star" width="24px" height="24px">
							<use xlink:href="../assets/sprite/sprite.svg#Star_off"></use>
						</svg>
                    </div>
                    <a href="#jsSmoothScroll" class="product-trade__comment" anchorId="anchorReviews" data-anchor="reviews" data-comments-name="tabReviews"> Отзывы <span>({{$aboutProduct->reviews}})</span></a>
                    <a href="#jsSmoothScroll" class="product-trade__comment" anchorId="anchorQuestions" data-anchor="questions" data-comments-name="tabQuestions">Вопросы <span>({{$aboutProduct->questions}})</span></a>
                </div>
                <div class="product-trade__body">
                    <div class="product-trade__offer">
                        <div class="product-trade__weight">
                            <div class="product-trade__current-weight">Вес: <span>{{$aboutProduct->weightCurrent}}</span> кг</div>
                            <div class="product-trade__weight-selection">
                                @foreach($aboutProduct->weightOption as $weightOption)
                                @if($weightOption->condition == 'active')
                                <div class="weight-selection__button weight-selection__button--active">{{$weightOption->weight}}<span class="weight-selection__price">{{$weightOption->weightPrice}}</span></div>
                                @else
                                <div class="weight-selection__button">{{$weightOption->weight}}<span class="weight-selection__price">{{$weightOption->weightPrice}}</span></div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="product-trade__product-price">
                            <div class="product-price__current-price">
                                <div class="product-price__title">{{$aboutProduct->priceText}}</div>
                                <div class="product-price__value">{{$aboutProduct->discountPrice}} 
                                    <div class="product-price__past-price">
                                        {{$aboutProduct->pastPrice}} <span class="product-price__discount-label">{{$aboutProduct->discount}}</span>
                                    </div>
                                </div>
                                <div class="product-price__delivery-info">{{$aboutProduct->deliveryLabel}}</div>
                            </div>
                            <div class="product-price__autoorder">
                                <div class="product-price__title product-price__title--autoorder-size">
                                    <div class="autoorder__icon">
                                        <svg class="autoorder_icon-img" fill="white" width="17px" height="22px">
						                    <use xlink:href="../assets/sprite/sprite.svg#Order_btn"></use>
					                    </svg>
                                    </div>
                                    Автозаказ
                                </div>
                                <div class="product-price__value">{{$aboutProduct->autoorderPrice}}<span class="product-price__autoorder-label">{{$aboutProduct->autoorderLabel}}</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="product-trade__purchase">
                        <div class="product-trade__counter-container">
                            <div class="product-trade__counter">
                                <svg class="counter__minus" fill="#202454" width="17px" height="17px">
						            <use xlink:href="../assets/sprite/sprite.svg#trade-minus"></use>
					            </svg>
                                <input class="counter__input" type="number" data-max-value='{{$aboutProduct->amount}}' name="product-count" value="1">
                                <svg class="counter__plus" fill="#202454" width="17px" height="17px">
						            <use xlink:href="../assets/sprite/sprite.svg#trade-plus"></use>
					            </svg>
                            </div>
                            <span class="product-trade__special-offer">{{$aboutProduct->specialOffer}}</span> 
                        </div>
                        <div class="product-trade__buy-btn">
                            <svg class="product-trade__basket-icon" stroke="#fff" width="20px" height="20px">
								<use xlink:href="../assets/sprite/sprite.svg#basket_interface"></use>
							</svg>
                            Купить
                        </div>
                        <div class="product-trade__buy-btn product-trade__btn--one-click">Купить в 1 клик</div>
                        <div class="product-trade__availability">
                            <div class="availability__check-mark">
                                <svg class="availability__check-icon" stroke="#202454" width="10px" height="10px">
								    <use xlink:href="../assets/sprite/sprite.svg#gal"></use>
							    </svg>
                            </div>
                            <div class="availability__text">В наличии в 7 магазинах</div>
                        </div>
                    </div>
                </div>
                <div class="product-trade__side-info">
                    <div class="side-info__delivery side-info__block">
                    @foreach(config('mock.product-side-info') as $deliveryInfo)
                        <div class="side-info__title">
                            <div class="side-info__text">Доставка в: <span class="delivery__destination">{{$deliveryInfo->destination}}</span></div>
                            <svg class="side-info__arrow" stroke="#BDC9D7" width="17px" height="17px">
				                <use xlink:href="../assets/sprite/sprite.svg#tab_arrow"></use>
			                </svg>
                        </div>
                         <div class="side-info__body">
                             @foreach($deliveryInfo->items as $item)
                            <div class="delivery__option">
                                <div class="delivery__title">{{$item->title}}</div>
                                <div class="delivery__date">{{$item->date}}</div>
                                <div class="delivery__price">{{$item->price}}</div>
                            </div>
                            @endforeach
                            <div class="delivery__spoiler">Все варианты и правила доставки
                                <svg class="delivery__arrow" stroke="#7B94B0" width="12px" height="12px">
				                    <use xlink:href="../assets/sprite/sprite.svg#tab_arrow"></use>
			                    </svg>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    <div class="side-info__payment side-info__block">
                        <div class="side-info__title">
                            <div class="side-info__text">Варианты оплаты</div>
                            <svg class="side-info__arrow side-info__arrow--disable" stroke="#BDC9D7" width="17px" height="17px">
				                <use xlink:href="../assets/sprite/sprite.svg#tab_arrow"></use>
			                </svg>
                        </div>
                        <div class="side-info__body _disable">
                        @foreach(config('mock.product-payment-info') as $paymentInfo)
                            <div class="payment__option">
                                <div class="payment__value">{{$paymentInfo->value}}</div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                    <div class="side-info__warranty side-info__block">
                        <div class="side-info__title">
                            <div class="side-info__text">Гарантия и возврат</div>
                            <svg class="side-info__arrow side-info__arrow--disable" stroke="#BDC9D7" width="17px" height="17px">
				                <use xlink:href="../assets/sprite/sprite.svg#tab_arrow"></use>
			                </svg>
                        </div>
                        <div class="side-info__body _disable">
                        @foreach(config('mock.product-warranty-info') as $warrantyInfo)
                            <div class="warranty__option">
                                <div class="warranty__value">{{$warrantyInfo->value}}</div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>