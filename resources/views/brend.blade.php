@extends('layout')

@section('content')
<div class="brend">
<div class="link">
    <a class="link__item link__item--actual" href="/catalog">Собаки</a>
    <svg class="link__arrow" stroke="#B6B7C4" width="6px" height="15px">
		<use xlink:href="../assets/sprite/sprite.svg#tab_arrow"></use>
	</svg>
    <a class="link__item" href="#">Корм для собак</a>
</div>
    <div class="brend__row">
    <div class="brend__sidebar">
        @foreach(config('mock.pet-widget') as $petWidget)
            @include('inc.pet_brend-widget')
        @endforeach
        <div class="brend__categories">
            <div class="brend__title">Категории</div>
            <div class="categories__body">
                @foreach(config('mock.brend-categories') as $categories)
                <a class="brend__item" href="#">
                    <div class="brend__item-title">{{$categories->title}}</div>
                    <div class="brend__item-amount">({{$categories->amount}})</div>
                </a>
                @endforeach
            </div>
        </div>
        <div class="brend__autoorder">
            <input type="checkbox" class="brend__checkbox">
            <div class="autoorder__body">
                <div class="autoorder__label">
                    <div class="autoorder__icon">
                        <svg class="autoorder_icon-img" fill="white" width="17px" height="22px">
						    <use xlink:href="../assets/sprite/sprite.svg#Order_btn"></use>
					    </svg>
                    </div>
                    <div class="autoorder__label-title">Автозаказ</div>
                    <svg class="pet-window__faq" width="15px" height="15px" fill="#7B94B0">
						<use xlink:href="../assets/sprite/sprite.svg#catalog_faq"></use>
					</svg>
                </div>
                <div class="autoorder__sublable">Экономия до 10% на заказах</div>
            </div>
        </div>
        @foreach(config('mock.brend-filters') as $filter)
        @if($filter->title == 'Цена, ₴')
        <div class="brend__filter">
            <div class="brend__title">Цена, ₴
                <svg class="brend__arrow brend__arrow--active" stroke="#202454" width="15px" height="13px">
				    <use xlink:href="../assets/sprite/sprite.svg#tab_arrow"></use>
			    </svg>
            </div>
            <div class="brend__filter-body">
                <div class="brend__filter-body-price">
                    <label for="" class="brend__price-label">
                        <input class="brend__price-input" type="number" id="price-input-first" min="12" max="15000" placeholder="12">
                    </label>
                    <div>-</div>
                    <label for="" class="brend__price-label">
                        <input class="brend__price-input" type="number" id="price-input-second" min="12" max="15000" placeholder="6597">
                    </label>
                    <button class="brend__price-btn">Ок</button>
                </div>
                <div class="brend__price-range" id="range-slider"></div>
            </div>
        </div>
        @elseif($filter->condition == 'disable')
        <div class="brend__filter">
            <div class="brend__title _disable">{{$filter->title}}
                <svg class="brend__arrow" stroke="#202454" width="15px" height="13px">
				    <use xlink:href="../assets/sprite/sprite.svg#tab_arrow"></use>
			    </svg>
            </div>
            <div class="brend__filter-body _disable">
                 @foreach($filter->items as $filterItems)
                <div class="brend__filter-item">
                    <input type="checkbox" class="brend__checkbox">
                    <div class="brend__item-title brend__item-title--margin">{{$filterItems->title}}</div>
                    <div class="brend__item-amount">{{$filterItems->amount}}</div>
                </div>
                @endforeach
            </div>
        </div>
        @else
        <div class="brend__filter">
            <div class="brend__title">{{$filter->title}}
                <svg class="brend__arrow brend__arrow--active" stroke="#202454" width="15px" height="13px">
				    <use xlink:href="../assets/sprite/sprite.svg#tab_arrow"></use>
			    </svg>
            </div>
            <div class="brend__filter-body">
                 @foreach($filter->items as $filterItems)
                <div class="brend__filter-item">
                    <input type="checkbox" class="brend__checkbox">
                    <div class="brend__item-title brend__item-title--margin">{{$filterItems->title}}</div>
                    <div class="brend__item-amount">{{$filterItems->amount}}</div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        @endforeach
    </div>
    <div class="brend__body">
        <div class="brend__body-row">
            <div class="brend__body-header">
                @foreach(config('mock.brend') as $result)
                <div class="brend__body-title">
                    <div class="brend__title-text">{{$result->title}}<span class="brend__body-subtitle">Найдено {{$result->value}} товара</span>
                    </div> 
                </div>
                 @endforeach
                <div class="brend__filters-chips">
                    <div class="brend__filters-body">
                    @foreach(config('mock.filter-chips') as $filterChips)
                    <div class="brend__filter-chip">{{$filterChips->name}}
                        <svg stroke="#B6B7C4" class="brend__filter-icon" width="10px" height="10px">
                            <use xlink:href="../assets/sprite/sprite.svg#filter-close"></use>
                        </svg>
                    </div>
                    @endforeach
                    <button class="brend__clear-btn">Очистить фильтры</button>
                    </div>
                    <div class="brend__mobile-btn">Фильтры</div>
                </div>
                <picture class="brend__banner">
                    <img class="lozad brend__banner-img" data-src="../assets/img/brend_banner.webp" alt="brend_banner" />
                    <a href="#" class="brend__banner-btn">Подробнее</a>
                </picture>
                <div class="brend__hint">
                <picture class="brend__avatar">
					<img class="lozad brend__avatar-img" data-src="../assets/img/catalog_ppf.webp" alt="dog_ppf">
				</picture>
                <div class="brend__hint-text">Товары с аватаром животного – наиболее подходящие для данного питомца</div>
                </div>
            </div>
            <div class="brend__content">
                <div class="brend__cards">
                @for($i = 1; $i <=6; $i++)
                    @foreach(config('mock.brend-card') as $brendCard)
                        @include('inc.brend-card')
                    @endforeach
                @endfor
                </div>
                <div class="brend__content-spoiler">
                    <svg class="content__spoiler-btn" fill="#E77E42" width="48px" height="58px">
						<use xlink:href="../assets/sprite/sprite.svg#brend-spoiler"></use>
					</svg>
                    <div class="brend__spoiler-text">
                        Показать ещё 24 товара
                    </div>
                </div>
                <div class="brend__content-pagination">
                    <div class="brend__pagination-body">
                        <a href="#" class="brend__pagination-link brend__pagination-link--active">1</a>
                        <a href="#" class="brend__pagination-link">2</a>
                        <a href="#" class="brend__pagination-link">3</a>
                        <a href="#" class="brend__pagination-link">4</a>
                        <a href="#" class="brend__pagination-link">5</a>
                        <a href="#" class="brend__pagination-link">...</a>
                        <a href="#" class="brend__pagination-link">18</a>
                        <svg class="brend__arrow brend__arrow--pagination" stroke="#202454" width="15px" height="13px">
				            <use xlink:href="../assets/sprite/sprite.svg#tab_arrow"></use>
			            </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@include('inc.seo')
@foreach(config('mock.seoBrend-text') as $seoInfo)
	@include('inc.seo-text')
@endforeach
@endsection