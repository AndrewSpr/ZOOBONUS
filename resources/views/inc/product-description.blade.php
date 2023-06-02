<div class="product-description">
    <div class="product-description__row">
        <div class="product-description__describing">
            <div class="product-description__title">О товаре</div>
            @foreach(config('mock.product-describing') as $describing)
                <div class="describing__tabs">
                @foreach($describing->tabs as $describingTab)
                    @if($describingTab->condition == 'active')
                    <div class="describing__tab describing__tab--active">{{$describingTab->tab}}</div>
                    @else
                    <div class="describing__tab">{{$describingTab->tab}}</div>
                    @endif
                @endforeach
                </div>
                @foreach($describing->tabsContent as $describingContent)
                @if($describingContent->condition == 'active')
                <div class="describing__tab-content _active">
                    <span class="describing__introduction">{{$describingContent->introduction}}</span>
                    @foreach(config('mock.product-describingList') as $List)
                    <div class="describing__list">
                        <div class="describing__list-title">{{$List->listTitle}}:</div>
                        <ul>
                            @foreach($List->listItems as $listItem)
                            <li class="describing__list-item">{{$listItem->listItem}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <span class="describing__text">{{$describingContent->text}}
                    </span>
                    <div class="product__btn product__btn--describing">Читать полностью</div>
                    @endforeach
                </div>
                @else
                <div class="describing__tab-content">
                    <span class="describing__text">{{$describingContent->description}}</span>
                    @foreach(config('mock.product-describingList') as $List)
                    <div class="describing__list">
                        <div class="describing__list-title">{{$List->listTitle}}:</div>
                        <ul>
                            @foreach($List->listItems as $listItem)
                            <li class="describing__list-item">{{$listItem->listItem}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <span class="describing__text">{{$describingContent->text}}</span>
                    @endforeach
                </div>
                @endif
                @endforeach
            @endforeach
        </div>
        <div class="product-description__characteristic">
            <div class="product-description__title">Характеристики</div>
            <div class="characteristic__body">
                @foreach(config('mock.product-characteristic') as $characItem)
                <div class="characteristic__item">
                    <div class="characteristic__item-row">
                        <div class="characteristic__title">{{$characItem->title}}</div>
                        <div class="characteristic__subtitle">{{$characItem->subtitle}}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>