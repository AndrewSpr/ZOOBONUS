<div class="search-form">
	<div class="search-form__row">
		<input type="search" class="search-form__input" id="JsSearch" placeholder="Поиск ..." />
		<div class="search-form__prompt">
			<span class="search-form__article-default">Начните вводить категорию или название товара (артикул), бренда или клиники</span>
		</div>
	</div>
	<div class="search-result">
		<div class="search-result__row">
			<div class="search-result__menu">
				<div class="search-result__categories">
				@foreach(config('mock.search-menu') as $searchResultMenu)
				<div class="search-result__categorie">
				@if($searchResultMenu->condition == 'active')
					<div class="search-result__categories-title search-result__categories-title--active">
						{{$searchResultMenu->title}}
						<div class="search-result__result-number">{{$searchResultMenu->value}}</div>
					</div>
				@else
					<div class="search-result__categories-title">
						{{$searchResultMenu->title}}
						<div class="search-result__result-number">{{$searchResultMenu->value}}</div>
					</div>
				@endif
					@foreach($searchResultMenu->items as $searchMenuItem)
					<a href="{{$searchMenuItem->link}}" class="search-result__categories-item">
					{{$searchMenuItem->name}}
						<span class="search-result__item-number">{{$searchMenuItem->number}}</span>
					</a>
					@endforeach
					</div>
				@endforeach
				</div>
			</div>
			<div class="search-result__content">
				@foreach(config('mock.search') as $searchResult)
				<div class="search-result__col">
					<div class="search-result__title">{{$searchResult->title}}</div>
						@foreach($searchResult->items as $resultItem)
						<div class="search-result__item">
							<a class="search-result__link" href="{{$resultItem->link}}">
							<picture class="search-result__item-preview">
								<img src="{{$resultItem->preview}}" alt="searchCard">
							</picture>
							<div class="search-result__item-about">
								<div class="search-result__item-title">{{$resultItem->name}}</div>
								<div class="search-result__item-price">
									<div class="search-result__last-price">{{$resultItem->lastPrice}}</div>
									<div class="search-result__actual-price">{{$resultItem->actualPrice}}</div>
								</div>
							</div>
							</a>
						</div>
						@endforeach
						<a href="#" class="search-result__button">Смотреть все ></a>
					</div>
				@endforeach
			</div>
		</div>
		<div class="search-result__btn-container">
			<a href="#" class="search-result__btn">Подробнее</a>
		</div>
	</div>
</div>